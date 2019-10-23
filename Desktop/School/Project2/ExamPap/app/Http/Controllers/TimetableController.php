<?php

namespace App\Http\Controllers;

use App\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function extract(Request $request)
    {
        $class = collect(array_map('str_getcsv', file($request->timetable)));
        $class = $class->slice(3, 15);

        $days = $class->nth(3);
        $units = $class->slice(1)->nth(3);
        $lecturers = $class->slice(2)->nth(3);

        foreach ($days as $key => $day) {
            foreach ($day as $time => $code) {
                if ($time < 1) continue; // Skip First Slot as it contains the day not a unit
                if ($code) {
                    Timetable::create($request->toArray() + [
                            'unit_name' => $units[$key][$time],
                            'unit_code' => $code,
                            'day_of_the_week' => $day[0],
                            'time' => $time,
                            'lecturer' => $lecturers[$key][$time],
                        ]);
                }
            }
        }
    }
}
