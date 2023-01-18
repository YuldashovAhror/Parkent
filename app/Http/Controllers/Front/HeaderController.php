<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index(){
        $header = Header::find(1);
        return view('components.front.header',[
            'header'=>$header
        ]);
    }
}
