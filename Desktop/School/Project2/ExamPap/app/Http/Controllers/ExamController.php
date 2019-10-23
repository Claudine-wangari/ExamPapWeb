<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Example;
use Smalot\PdfParser\Parser;
use Symfony\Component\HttpFoundation\Response;


class ExamController extends Controller
{
    public function extract(Request $request)
    {
        $class = collect(array_map('str_getcsv', file($request->exam)));
        $class = $class->slice(3, 15);

        $codes = $class->nth(3);
        $units = $class->slice(1)->nth(3);
        $lecs = $class->slice(2)->nth(3);

        foreach ($codes as $code) {
            $string = '';
            foreach ($code as $time => $x) {
                if ($x != "") {
                    $string .= $x . ' ' . $time . ' ';
                }
            }
            echo $string . "</br>";

        }
    }
}









//
//
//
//
//
//
//
//
//
//
//$rule = array('exam' => 'required|mimes:pdf',);
//$validate = Validator::make($request->all(), $rule);
//if ($validate->fails()) {
//    return "nhgdakjb";
//}
//
//$path = $request->file('exam')->store('exams');
//
//
//$PDFParser = new Parser();
//try {
//    $pdf = $PDFParser->parseFile(storage_path('app/' . $path));
//    $text = $pdf->getText();
//    return new Response($text);
//} catch (Exception $e) {
//    print($e);
//}
//
//
////        $data =fread(Input::file('exam')->getRealPath($path));
////
////        if($data->count() > 0)
////        {
////            foreach($data->toArray() as $key => $value)
////            {
////                foreach($value as $row)
////                {
////                    $insert_data[] = array(
////                        $value[0]  => $row['date'],
////                        $value[1]   => $row['time'],
////                        $value[3]   => $row['group'],
////                        $value[6]    => $row['venue'],
////                        'PostalCode'  => $row['postal_code'],
////                        'Country'   => $row['country']
////                    );
////                }
////            }
////
////            if(!empty($insert_data))
////            {
////                DB::table('exams')->insert($insert_data);
////            }
////        }
////        return back()->with('success', 'Excel Data Imported successfully.');
