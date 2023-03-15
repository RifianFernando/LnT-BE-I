<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApiSendEmailController extends Controller
{
    public function store(Request $request, $id){
        $user = User::findOrFail($id);


        Mail::to($user)->send(
            new SendMessage($user, $request->message)
        );

        return response()->json([
            'berhasil'
        ], 200);
    }
}
