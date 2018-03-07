<?php

namespace AutoPlanner\Http\Controllers;

use Illuminate\Http\Request;
use App\Brief;
use App\TVChannels;

class channelPickerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('channelPicker');
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
     public function store(Request $request, $channel = null)
     {
       if (!$channel) {
         $channel = new Channel;
       }
       $TV3 = Input::has('tv3') ? true : false;
       $TV6 = Input::has('tv6') ? true : false;
       $TV8 = Input::has('tv8') ? true : false;
       $LNK = Input::has('lnk') ? true : false;
       $BTV = Input::has('btv') ? true : false;
       $TV1 = Input::has('tv1') ? true : false;
       $INFO_TV = Input::has('info tv') ? true : false;
       $PBK = Input::has('pbk') ? true : false;
       $NTVMirLietuva = Input::has('ntv mir lietuva') ? true : false;
       $RENLietuva = Input::has('ren lietuva') ? true : false;
       $LietuvosRytasTV = Input::has('lietuvos rytas TV') ? true : false;
       $LietuvosTelevizija = Input::has('lietuvos televizija') ? true : false;

       return $this->saveHandler($request, $channel);
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
