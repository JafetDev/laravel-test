<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lead;

class LeadController extends Controller
{
    //

   public function store(Request  $request)
    {
        $lead =  new Lead;
        $lead->fullname = $request->fullname;
        $lead->phone = $request->phone;
        $lead->email = $request->email;
        $lead-> save();

        return response()->json([
            "message" => "student record created"
        ],201);
    }

}
