<?php

namespace AutoPlanner\Http\Controllers;

use Illuminate\Http\Request;
use App\Brief;

class briefController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $briefs = Brief::WHERE('token', $token)->get();
    return view('brief', [
      'client' => $client,
      'brand' => $brand,
      'project_name' => $project_name,
      'project_number' => $project_number,
      'client_representitive' => $client_representitive,
      'agency_manager' => $agency_manager,
      'campaign_start_date' => $campaign_start_date,
      'campaign_end_date' => $campaign_end_date,
      'target_group' => $target_group,
      'agency_commission' => $agency_commission,
      'budget' => $budget,
      'spot_duration' => $spot_duration
    ]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    
    $startTime = strtotime('project_start_date');
    $endTime = strtotime('project_end_date');
    $weeks = array();
    while ($startTime < $endTime) {
      $weeks[] = date('W', $startTime);
      $startTime += strtotime('+1 week', 0);
    }

    return view('createFlowchart');
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
