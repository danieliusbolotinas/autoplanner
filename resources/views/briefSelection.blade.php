@extends('layouts.main')
@section('content')

<div class="panel panel-primary">
  <div class="panel-heading">export into csv and excel and import into DB</div>
  <div class="panel-body">
    <div class="row">
      <!-- <div class="col-xs-12 col-sm-12 col-md-12">
        <a href="{{ route('excel-file',['type'=>'xls']) }}">Download Excel xls</a> |
        <a href="{{ route('excel-file',['type'=>'xlsx']) }}">Download Excel xlsx</a> |
        <a href="{{ route('excel-file',['type'=>'xlsm']) }}">Download Excel xlsx</a> |
        <a href="{{ route('excel-file',['type'=>'csv']) }}">Download CSV</a>
      </div> -->
    </div>
    {!! Form::open(array('route' => 'import-csv-excel','method'=>'POST','files'=>'true')) !!}
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          {!! Form::label('sample_file','Select File to Import:',['class'=>'col-md-3']) !!}
          <div class="col-md-9">
            {!! Form::file('sample_file', array('class' => 'form')) !!}
          
            {!! $errors->first('sample_file', '<p class="alert alert-danger">:message</p>') !!}
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {!! Form::submit('Upload',['class'=>'btn btn-primary']) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>


@endsection
