@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12 to-center">
      <h2>Flowchart</h2>
    </div>
  </div>
</div>

@foreach ($flowcharts->$weeks as $week)

<div class="col-md-12">
  <div class="row">
    <thead>
      <tr>
      <th scope="col">w{{$brief->weeks}}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">GRP%</th>
    </tr>
  </tbody>
</div>
</div>

@endforeach

<a href="{{route('channelPicker')}}"><button class="btn btn-primary">OK</button></a>

@endsection
