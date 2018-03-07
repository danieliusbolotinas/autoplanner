@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row-channels">
    <div class="col-md-12 to-center">
      <h2>Choose channels</h2>
    </div>
  </div>
</div>

<div>

{{Form::open(array('url'=>'/', 'files'=>true))}}

<div class="container-channel">
  <div class="row">
    <div class="mgb col-md-12 to-center">
      <h2>MGB</h2>
      <div class="col-sm-3">
        <label>LNK:</label>
        {{ Form::checkbox('LNK', 0, false) }}
      </div>
      <div class="col-sm-3">
        <label>BTV:</label>
        {{ Form::checkbox('BTV', 0, false) }}
      </div>
      <div class="col-sm-3">
        <label>TV1:</label>
        {{ Form::checkbox('TV1', 0, false) }}
      </div>
      <div class="col-sm-3">
        <label>INFO TV:</label>
        {{ Form::checkbox('INFO TV', 0, false) }}
      </div>
    </div>
  </div>
</div>

<div class="container-channel">
  <div class="row">
    <div class="mgb col-md-12 to-center">
      <h2>AMB</h2>
      <div class="col-sm-3">
        <label>TV3:</label>
        {{ Form::checkbox('TV3', 0, false) }}
      </div>
      <div class="col-sm-3">
        <label>TV6:</label>
        {{ Form::checkbox('TV6', 0, false) }}
      </div>
      <div class="col-sm-3">
        <label>TV8:</label>
        {{ Form::checkbox('TV8', 0, false) }}
      </div>

    </div>
  </div>
</div>

<div class="container-channel">
  <div class="row">
    <div class="mgb col-md-12 to-center">
      <h2>BMA</h2>
      <div class="col-sm-4">
        <label>PBK:</label>
        {{ Form::checkbox('PBK', 0, false) }}
      </div>
      <div class="col-sm-4">
        <label>NTV Mir Lietuva:</label>
        {{ Form::checkbox('NTV Mir Lietuva', 0, false) }}
      </div>
      <div class="col-sm-4">
        <label>REN Lietuva:</label>
        {{ Form::checkbox('REN Lietuva', 0, false) }}
      </div>

    </div>
  </div>
</div>

<div class="container-channel">
  <div class="row">
    <div class="mgb col-md-12 to-center">
      <h2>Lietuvos Rytas TV</h2>
      <div class="col-sm-12">
        <label>Lietuvos Rytas TV:</label>
        {{ Form::checkbox('Lietuvos Rytas TV', 0, false) }}
      </div>
    </div>
  </div>
</div>

<div class="container-channel">
  <div class="row">
    <div class="mgb col-md-12 to-center">
      <h2>Lietuvos televizija</h2>
      <div class="col-sm-12">
        <label>Lietuvos televizija:</label>
        {{ Form::checkbox('Lietuvos televizija  ', 0, false) }}
      </div>
    </div>
  </div>
</div>

<button class="btn btn-default">Submit</button>
{{Form::close()}}

</div>
@endsection
