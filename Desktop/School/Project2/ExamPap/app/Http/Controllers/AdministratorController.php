<?php

namespace App\Http\Controllers;

use App\Timetable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Excel;


class AdministratorController extends Controller
{

    public function timetableUpload(Request $request)
    {

//        $request->validate([
//            'timetable' => 'required|file|mimes:xls,xlsx',
//        ]);
//
//        $path = $request->timetable->store('timetables');
//        $data = Excel::load($path)->get();
//
//        if($data->count() > 0)
//        {
//            foreach($data->toCollection() as $key => $value)
//            {
//                foreach($value as $row)
//                {
//                    $insert_data[] = array(
//                        'CustomerName'  => $row['customer_name'],
//                        'Gender'   => $row['gender'],
//                        'Address'   => $row['address'],
//                        'City'    => $row['city'],
//                        'PostalCode'  => $row['postal_code'],
//                        'Country'   => $row['country']
//                    );
//                }
//            }
//
//            if(!empty($insert_data))
//            {
//                DB::table('timetable')->insert($insert_data);
//            }
//        }
//        return back()->with('success', 'Excel Data Imported successfully.');
    }

}
