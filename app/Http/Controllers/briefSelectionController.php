<?php

namespace AutoPlanner\Http\Controllers;

use Illuminate\Http\Request;
use App\Brief;

class briefSelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('briefSelection');
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
      $client = $request['client'];
      $brand = $request['brand'];
      $product = $request['product'];
      $project_name = $request['project name'];
      $project_number = $request['project_number'];
      $client_representitive = $request['client_representitive'];
      $agency_manager = $request['agency_manager'];
      $campaign_start_date = $request['campaign_start_date'];
      $campaign_end_date = $request['campaign_end_date'];
      $target_group = $request['target_group'];
      $agency_commission = $request['agency_commission'];
      $budget = $request['budget'];
      $spot_duration = $request['spot_duration'];

      $post = [
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
        ];

        Brief::create($post);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $brief = Brief::findOrFail($id);
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
