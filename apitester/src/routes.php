<?php
Route::group(['middleware' => 'web'], function () {
    Route::post('jp2309-hit-api', 'Jaypanchal\Apitester\APITestingController@hitApi');
});
