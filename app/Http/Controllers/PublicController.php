<?php

namespace App\Http\Controllers;

use App\FileUpload;
use App\Http\Requests\Request;

use App\Order;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Carbon\Carbon;

class PublicController extends Controller {


    public function index() {
        return view('index');
    }

    public function casco() {
        return view('casco');
    }

    public function osago(){
        return view('osago');
    }

    public function travel(){
        return view('travel');
    }
    public function sport(){
        return view('sport');
    }
    public function estate()
    {
        return view('estate');
    }
    public function property(){
        return view('property');
    }
    public function policy(){
        return view('policy');
    }
    public function contact(){
        return view('contact');
    }
    public function osagoCalc(){
        return view('osagoCalc');

    }
    public function osagoForm1(){
        $order = Order::all();
        return view('osagoForm1', compact('order'));
    }
    public function osagoForm2(){
        return view('osagoForm2');
    }
    public function soon(){
        return view('errors.comingSoon');
    }

    public function formUpload(){
        $photos = FileUpload::all();
        return view('form_upload', compact('photos'));
    }
    public function yourSelf()
    {
        return view('osago_form_yourself');
    }


    public function to() {
        return view('public.to');
    }

    public function success() {

        $now = Carbon::now();
        $worktime = $now->hour > 6 && $now->hour < 17;
        return view('public.success', compact('worktime'));
    }

    public function help() {
        return view('public.help');
    }
}