@extends('layout.auth_layout')
@section('title', 'Create Spp Payment')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h4>Create Spp Payment</h4>
  </div>

  <div class="card-body">
    <form method="POST" action="{{route('action.createspp')}}" class="needs-validation" autocomplete="off">
      @csrf

      <div class="form-group">
        <label for="date">Date</label>
        <input id="date" type="text" class="form-control datepicker" name="date" value="{{old('date')}}">
      </div>
      <div class="form-group">
        <label for="nominal">Nominal</label>
        <input id="nominal" type="text" class="form-control" name="nominal" value="{{old('nominal')}}">
        @error('nominal')<small class="text-danger">{{ $message }}</small>@enderror
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
          Create Spp Payment
        </button>
      </div>
    </form>
    <div class="text-muted text-center">
      Why Am I Here? <a href="{{route('view.managespp')}}">Fuck Go Back</a>
    </div>

  </div>
</div>
@endsection