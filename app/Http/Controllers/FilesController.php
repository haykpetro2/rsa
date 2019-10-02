<?php

namespace App\Http\Controllers;

use App\Stores\FileStore;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class FilesController extends Controller {

    protected $store;

    public function __construct(FileStore $fileStore) {
        $this->store = $fileStore;
    }

    public function postUpload() {
        return $this->store->upload(Input::all());
    }

    public function postDelete() {
        return $this->store->delete(Input::get('name'));
    }

    public function getDownload($filename) {
        $file = $this->store->get($filename);
        if($file){
            return response()->download($file, $filename);
        }else{
            return Response::json([
                'error' => true,
                'message' => 'File not found',
                'code' => 404
            ], 404);
        }
    }
}