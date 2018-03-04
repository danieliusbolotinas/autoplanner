@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12 to-center">
      <h2>Brief</h2>
    </div>
  </div>
</div>

@foreach ($briefs as $brief)
  <div class="col-md-6">
    <label for="client">Client</label><input type="text" class="form-control" value="{{$brief->client}}">
    <label for="brand">Brand</label><input type="text" class="form-control" value="{{$brief->brand}}">
    <label for="product">Product</label><input type="text" class="form-control" value="{{$brief->product}}">
    <label for="project_name">Prodoject name</label><input type="text" class="form-control" value="{{$brief->project_name}}">
    <label for="project_number">Prodoject number</label><input type="text" class="form-control" value="{{$brief->project_number}}">
    <label for="client_representitive">Client representitive</label><input type="text" class="form-control" value="{{$brief->client_representitive}}">
    <label for="agency_manager">Agency manager</label><input type="text" class="form-control" value="{{$brief->agency_manager}}">
    <label for="campaign_start_date">Campaign start date</label><input type="text" class="form-control" value="{{$brief->campaign_start_date}}">
    <label for="campaign_end_date">Campaign end date</label><input type="text" class="form-control" value="{{$brief->campaign_end_date}}">
    <label for="target_group">Target group</label><input type="text" class="form-control" value="{{$brief->target_group}}">
    <label for="agency_commission">Ageny commission</label><input type="text" class="form-control" value="{{$brief->agency_commission}}">
    <label for="budget">Budget</label><input type="text" class="form-control" value="{{$brief->budget}}">
    <label for="spot_duration">Spot duration</label><input type="text" class="form-control" value="{{$brief->spot_duration}}">
    <!-- <p><a href="{{route('deleteReservations', $reservation->id)}}"><button class="btn btn-danger">Delete</button></a> -->
    <!-- <a href="{{route('editReservations', $reservation->id)}}"><button class="btn btn-primary">Edit</button></a> </p> -->
  </div>
@endforeach

<a href="{{{route('flowchart')}}"><button class="btn btn-primary">OK</button></a>

@endsection
