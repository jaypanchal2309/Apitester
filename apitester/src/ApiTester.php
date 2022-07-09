<?php

namespace Jaypanchal\Apitester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiTester
{
    /*
    * Loads the Api Testing Tool
    */
    public static function loadTester(){
        $bootstrapCss = __DIR__."/assets/css/bootstrap.min.css";
        $bootstrapJs = __DIR__."/assets/js/bootstrap.min.js";
        $jQueryJs = __DIR__."/assets/js/jquery.js";
        $blockUIJs = __DIR__."/assets/js/jquery.blockUI.js";
        return view('apitester::api_testing',compact('bootstrapCss','bootstrapJs','jQueryJs','blockUIJs'));
    }
}
