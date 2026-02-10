<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgregateDhs2Controller;

Route::post('/agregate-dhs2', [AgregateDhs2Controller::class, 'store']);
Route::post('/debug-body', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'headers' => $request->headers->all(),
        'raw' => $request->getContent(),
        'parsed' => $request->all(),
    ]);
});
