<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Student;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }

    public function map($student): array
    {
        return [

            $student->name,
            $student->date,
            $student->course,
            $student->class,
            $student->majors,
            $student->phone,
            $student->email,
            $student->question_01,
            $student->question_02 ,
            $student->question_03 ,
            $student->question_04 ,
            $student->question_05 ,
            $student->question_06 ,
            $student->question_07 ,
            $student->question_08 ,
            $student->question_09 ,
            $student->question_10 ,
            $student->question_11 ,
            $student->question_12 ,
            $student->question_13 ,
            $student->question_14 ,
            $student->question_15 ,
            $student->question_16 ,
            $student->question_17 ,
            $student->question_18 ,
            $student->question_19 ,
            $student->question_20 ,
            $student->question_21 ,
            $student->question_22 ,
            $student->question_23 ,
            $student->question_24 ,
            $student->question_25 ,
            $student->question_26 ,
            $student->question_27 ,
            $student->question_28 ,
            $student->question_29 ,
            $student->question_30 ,
            $student->question_31 ,
            $student->question_32 ,
            $student->question_33 ,
            $student->question_34 ,
            $student->question_35 ,
            $student->question_36 ,
            $student->question_37 ,
            $student->question_38 ,
            $student->question_39 ,
            $student->question_40 ,
            $student->question_41 ,
            $student->question_42 ,
            $student->event_id ,
        ];
    }

    public function headings() : array
    {
        return [
            'Họ và Tên',
            'Ngày Sinh',
            'Khóa học',
            'Lớp học',
            'Ngành đào tạo',
            'Số điện thoại',
            'Email'
        ];
    }

    public function registerEvents(): array
    {
        return [
           
            AfterSheet::class    => function(AfterSheet $event) {

                $event->sheet->getStyle('A1:G1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
                    
                  
            },
        ];
    }
}
