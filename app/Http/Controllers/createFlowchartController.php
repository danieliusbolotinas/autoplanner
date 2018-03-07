<?php

namespace AutoPlanner\Http\Controllers;

use Illuminate\Http\Request;
use App\Brief;

class createFlowchartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $flowcharts = Brief::WHERE ('project_start_date', $project_start_date)->WHERE ('project_end_date', $project_end_date)->get();

      $startTime = strtotime('project_start_date');
      $endTime = strtotime('project_end_date');
      $weeks = array();
      while ($startTime < $endTime) {
        $weeks[] = date('W', $startTime);
        $startTime += strtotime('+1 week', 0);
      }

      return view('createFlowchart'[
        'weeks' => $weeks
      ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
