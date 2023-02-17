<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function store(Request $request)
    {
        $feedback= new \App\Enterprise();
        $feedback->name= $request->name;
        $feedback->address= $request->address;
        $feedback->email= $request->email;
        $feedback->phone= $request->phone;
        $feedback->field= $request->field;
        $feedback->ingredient= $request->ingredient;
        $feedback->question_01 = $request->question_01;
        $feedback->question_02 = $request->question_02;
        $feedback->question_03 = $request->question_03;
        $feedback->question_04 = $request->question_04;
        $feedback->question_05 = $request->question_05;
        $feedback->question_06 = $request->question_06;
        $feedback->question_07 = $request->question_07;
        $feedback->question_08 = $request->question_08;
        $feedback->question_09 = $request->question_09;
        $feedback->question_10 = $request->question_10;
        $feedback->question_11 = $request->question_11;
        $feedback->question_12 = $request->question_12;
        $feedback->question_13 = $request->question_13;
        $feedback->question_14 = $request->question_14;
        $feedback->question_15 = $request->question_15;
        $feedback->question_16 = $request->question_16;
        $feedback->question_17 = $request->question_17;
        $feedback->question_18 = $request->question_18;
        $feedback->question_19 = $request->question_19;
        $feedback->question_20 = $request->question_20;
        $feedback->question_21 = $request->question_21;
        $feedback->question_22 = $request->question_22;
        $feedback->event_id = $request->event_id;

        $feedback->save();

        return redirect()->back()->with('success', 'Cảm ơn khách hàng đã phản hồi');   
    }
}
