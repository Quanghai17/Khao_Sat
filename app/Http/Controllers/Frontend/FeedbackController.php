<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $feedback= new \App\Question();
        $feedback->name= $request->name;
        $feedback->email= $request->email;
        $feedback->question_01 = $request->question_01;
        $feedback->question_02 = $request->question_02;
        $feedback->question_03 = $request->question_03;
        $feedback->save();

        return redirect()->back()->with('success', 'Cảm ơn khách hàng đã phản hồi');   
    }
}
