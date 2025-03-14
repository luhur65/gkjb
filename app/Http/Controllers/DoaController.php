<?php

namespace App\Http\Controllers;

use App\Mail\DoaformMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DoaController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "name" => "gaga",
            "body" => $request->doa,
        ];

        Mail::to('marulimunthe593@gmail.com')->send(new DoaformMail($data));
    }
}
