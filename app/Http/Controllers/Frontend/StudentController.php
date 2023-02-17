<?php

namespace App\Http\Controllers\Frontend;

use App\Exports\StudentExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $feedback= new \App\Student();
        $feedback->name= $request->name;
        $feedback->date= $request->date;
        $feedback->course= $request->course;
        $feedback->class= $request->class;
        $feedback->majors= $request->majors;
        $feedback->phone= $request->phone;
        $feedback->email= $request->email;
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
        $feedback->question_23 = $request->question_23;
        $feedback->question_24 = $request->question_24;
        $feedback->question_25 = $request->question_25;
        $feedback->question_26 = $request->question_26;
        $feedback->question_27 = $request->question_27;
        $feedback->question_28 = $request->question_28;
        $feedback->question_29 = $request->question_29;
        $feedback->question_30 = $request->question_30;
        $feedback->question_31 = $request->question_31;
        $feedback->question_32 = $request->question_32;
        $feedback->question_33 = $request->question_33;
        $feedback->question_34 = $request->question_34;
        $feedback->question_35 = $request->question_35;
        $feedback->question_36 = $request->question_36;
        $feedback->question_37 = $request->question_37;
        $feedback->question_38 = $request->question_38;
        $feedback->question_39 = $request->question_39;
        $feedback->question_40 = $request->question_40;
        $feedback->question_41 = $request->question_41;
        $feedback->question_42 = $request->question_42;
        $feedback->event_id = $request->event_id;
        $feedback->save();

        return redirect()->back()->with('success', 'Cảm ơn khách hàng đã phản hồi');   
    }

    public function export()
    {
        return Excel::download(new StudentExport , 'student.xlsx');
    }
}
