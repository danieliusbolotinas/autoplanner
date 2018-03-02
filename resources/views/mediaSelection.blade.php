@extends('layouts.main')
@section('content')



  <div class="form-group">
    <div class="col-lg-2 text-center" >
      <div class="btn-group btn-group-lg btn nohover text-center">
        <a href="{{ route('briefSelection') }}" class="form-control btn-primary" type="button">TV</a>
        <a href="" class="form-control btn-primary" type="button">Radio</a>
        <a href="" class="form-control btn-primary" type="button">Print</a>
        <a href="" class="form-control btn-primary" type="button">Online</a>
      </div>
    </div>
  </div>

@endsection
