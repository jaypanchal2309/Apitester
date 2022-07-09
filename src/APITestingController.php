<?php

namespace Jaypanchal\Apitester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class APITestingController extends Controller
{
    public function hitApi(Request $request){
        $headers = [];
        foreach($request->api_headers as $header){
            if($header['key'] != ""){
                $headers[$header['key']] = $header['value'];
            }
            
        }

        $params = [];
        foreach($request->api_params as $api_param){
            $params[$api_param['key']] = $api_param['value'];
        }
        $response = Http::withHeaders($headers)->{$request->apiMethod}($request->url,$params);


        return response($response->json());
    }
}
