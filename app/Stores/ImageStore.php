<?php

namespace App\Stores;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;


class ImageStore
{
    public function upload( $form_data )
    {

        $validator = Validator::make($form_data, ['file' => 'required|mimes:png,gif,jpeg,jpg,bmp'], [
            'file.mimes' => 'Uploaded file is not in image format',
            'file.required' => 'Image is required'
        ]);

        if ($validator->fails()) {

            return Response::json([
                'error' => true,
                'message' => $validator->messages()->first(),
                'code' => 400
            ], 400);

        }

        $photo = $form_data['file'];

        $originalName = $photo->getClientOriginalName();
        $extension = $photo->getClientOriginalExtension();
        $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);

        $filename = $this->sanitize($originalNameWithoutExt);
        $allowed_filename = $this->createUniqueFilename( $filename, $extension );

        $uploadSuccess = $this->store( $photo, $allowed_filename );

        if( !$uploadSuccess ) {

            return Response::json([
                'error' => true,
                'message' => 'Server error while uploading',
                'code' => 500
            ], 500);

        }

        return Response::json([
            'error' => false,
            'code'  => 200,
            'filename'  => $allowed_filename
        ], 200);

    }

    public function createUniqueFilename( $filename, $extension )
    {
        $full_size_dir = Config::get('images.full_size');
        $full_image_path = $full_size_dir . $filename . '.' . $extension;

        if ( File::exists( $full_image_path ) )
        {
            // Generate token for image
            $imageToken = substr(sha1(mt_rand()), 0, 5);
            return $filename . '-' . $imageToken . '.' . $extension;
        }

        return $filename . '.' . $extension;
    }

    public function store( $photo, $filename ) {
        $manager = new ImageManager();
        $image = $manager->make( $photo )->save(Config::get('images.full_size') . $filename );
        return $image;
    }

    /**
     * Delete Image From Session folder, based on original filename
     */
    public function delete( $filename) {
        $full_path = Config::get('images.full_size') . $filename;

        if (File::exists( $full_path )) {
            File::delete( $full_path );
        }else{
            return Response::json([
                'error' => true,
                'message' => 'File not found',
                'code' => 404
            ], 404);
        }

        return Response::json([
            'error' => false,
            'code'  => 200,
            'filename' => $filename
        ], 200);
    }

    function sanitize($string, $force_lowercase = true, $anal = false) {
        $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
            "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
            "â€”", "â€“", ",", "<", ".", ">", "/", "?");
        $clean = trim(str_replace($strip, "", strip_tags($string)));
        $clean = preg_replace('/\s+/', "-", $clean);
        $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;

        return ($force_lowercase) ?
            (function_exists('mb_strtolower')) ?
                mb_strtolower($clean, 'UTF-8') :
                strtolower($clean) :
            $clean;
    }
}