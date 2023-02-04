<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today()->addDay(0);
        $today1 = Carbon::today()->addDay(1);
        $today2 = Carbon::today()->addDay(2);
        $today3 = Carbon::today()->addDay(3);
        $today4 = Carbon::today()->addDay(4);
        $today5 = Carbon::today()->addDay(5);
        $today6 = Carbon::today()->addDay(6);
        
        // $today = 2023-02-04 00:00:00
        $entries = substr($today, 0, 10);
        $entries1 = substr($today1, 0, 10);
        $entries2 = substr($today2, 0, 10);
        $entries3 = substr($today3, 0, 10);
        $entries4 = substr($today4, 0, 10);
        $entries5 = substr($today5, 0, 10);
        $entries6 = substr($today6, 0, 10);

        $arrayAvailableTimeDay = [ 0 => "O", 1 => "", 2 => "", 3 => "O", 4 => "O", 5 => "O", 
                                    6 => "O", 7 => "O", 8 => "O", 9 => "O", 10 => "O", 11 => "O", 
                                    12 => "O", 13 => "O", 14 => "O", 15 => "O", 16 => "O", 17 => "O", 
                                    18 => "O", 19 => "O", 20 => "O", 21 => "O", 22 => "O", 23 => "O" ];
        
        $arrayAvailableTimeDay1 = [ 0 => "O", 1 => "", 2 => "O", 3 => "O", 4 => "O", 5 => "O", 
                                    6 => "O", 7 => "O", 8 => "O", 9 => "O", 10 => "", 11 => "O", 
                                    12 => "O", 13 => "", 14 => "O", 15 => "O", 16 => "O", 17 => "O", 
                                    18 => "O", 19 => "O", 20 => "", 21 => "O", 22 => "O", 23 => "O" ];
                 
        $arrayAvailableTimeDay2 = [ 0 => "O", 1 => "", 2 => "O", 3 => "O", 4 => "O", 5 => "O", 
                                    6 => "O", 7 => "O", 8 => "O", 9 => "O", 10 => "O", 11 => "O", 
                                    12 => "O", 13 => "", 14 => "O", 15 => "O", 16 => "", 17 => "O", 
                                    18 => "O", 19 => "O", 20 => "O", 21 => "O", 22 => "O", 23 => "O" ];
 
        $arrayAvailableTimeDay3 = [ 0 => "O", 1 => "", 2 => "O", 3 => "O", 4 => "", 5 => "O", 
                                    6 => "O", 7 => "O", 8 => "O", 9 => "O", 10 => "O", 11 => "O", 
                                    12 => "O", 13 => "O", 14 => "O", 15 => "O", 16 => "", 17 => "O", 
                                    18 => "O", 19 => "", 20 => "O", 21 => "O", 22 => "O", 23 => "O" ];

        $arrayAvailableTimeDay4 = [ 0 => "O", 1 => "", 2 => "O", 3 => "O", 4 => "O", 5 => "O", 
                                    6 => "O", 7 => "O", 8 => "O", 9 => "O", 10 => "O", 11 => "O", 
                                    12 => "O", 13 => "O", 14 => "O", 15 => "O", 16 => "O", 17 => "O", 
                                    18 => "O", 19 => "O", 20 => "O", 21 => "O", 22 => "O", 23 => "O" ];

        $arrayAvailableTimeDay5 = [ 0 => "O", 1 => "", 2 => "", 3 => "O", 4 => "O", 5 => "O", 
                                    6 => "O", 7 => "O", 8 => "O", 9 => "O", 10 => "O", 11 => "O", 
                                    12 => "O", 13 => "O", 14 => "O", 15 => "", 16 => "O", 17 => "O", 
                                    18 => "O", 19 => "O", 20 => "O", 21 => "O", 22 => "O", 23 => "O" ];

        $arrayAvailableTimeDay6 = [ 0 => "O", 1 => "", 2 => "O", 3 => "", 4 => "O", 5 => "O", 
                                    6 => "", 7 => "O", 8 => "O", 9 => "O", 10 => "O", 11 => "", 
                                    12 => "O", 13 => "O", 14 => "O", 15 => "O", 16 => "", 17 => "O", 
                                    18 => "", 19 => "O", 20 => "O", 21 => "O", 22 => "O", 23 => "O" ];

        $arrays = [
            $entries=>$arrayAvailableTimeDay, 
            $entries1=>$arrayAvailableTimeDay1, 
            $entries2=>$arrayAvailableTimeDay2, 
            $entries3=>$arrayAvailableTimeDay3, 
            $entries4=>$arrayAvailableTimeDay4, 
            $entries5=>$arrayAvailableTimeDay5, 
            $entries6=>$arrayAvailableTimeDay6, 
        ];

        return view('timetable.index', compact('arrays'));
        // return view('timetable.index')->with($today);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show(Timetable $generator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $generator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $generator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $generator)
    {
        //
    }
}
