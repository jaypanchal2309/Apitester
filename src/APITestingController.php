<?php

namespace Jaypanchal\Apitester;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APITestingController extends Controller
{
    public function hitApi(Request $request){
        $headers = [];
        foreach($request->api_headers as $header){
            if($header['key'] != ""){
                $headers[] = $header['key'].": ".$header['value'];
            }
            
        }

        $params = [];
        foreach($request->api_params as $api_param){
            $params[$api_param['key']] = $api_param['value'];
        }
        $ch = curl_init();
        $method = strtoupper($request->apiMethod);
        $url = $method == "POST" ? $request->url : $request->url.'?'.http_build_query($params);
        curl_setopt($ch, CURLOPT_URL,$url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        if($method == "POST"){
            curl_setopt($ch, CURLOPT_POSTFIELDS,$params);  //Post Fields
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $server_output = curl_exec($ch);
        
        return response($server_output);
        
    }
}
