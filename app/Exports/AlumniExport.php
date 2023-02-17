<?php

namespace App\Exports;

use App\Alumni;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Student;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Alumni::all();
    }

    public function map($student): array
    {
        return [

            $student->name,
            $student->date,
            $student->gender,
            $student->address,
            $student->CCCD,
            $student->phone,
            $student->zalo,
            $student->email,
            $student->facebook,
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

    // public function registerEvents(): array
    // {
    //     return [
           
    //         AfterSheet::class    => function(AfterSheet $event) {

    //             $event->sheet->getStyle('A1:G1')->applyFromArray([
    //                 'font' => [
    //                     'bold' => true
    //                 ]
    //             ]);
                    
                  
    //         },
    //     ];
    // }


}
