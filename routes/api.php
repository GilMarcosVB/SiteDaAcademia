<?php

use App\Http\Controllers\api\PlanoApiController;

Route::controller(PlanoApiController::class)->group(function(){
    Route::get("planos", 'index');
});