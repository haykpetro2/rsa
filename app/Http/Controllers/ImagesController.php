<?php

namespace App\Http\Controllers;

use App\Stores\ImageStore;
use Illuminate\Support\Facades\Input;

class ImagesController extends Controller {

    protected $image;

    public function __construct(ImageStore $imageStore) {
        $this->image = $imageStore;
    }

    public function postUpload() {
        return $this->image->upload(Input::all());
    }

    public function postDelete() {
        return $this->image->delete(Input::get('name'));
    }
}