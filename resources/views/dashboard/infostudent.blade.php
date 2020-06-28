@extends('layout.dashboard_layout')
@section('title', $student->name)

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section mb-5" x-data="{tab: 'form', isOpen: true}">
    <div class="section-header d-flex justify-content-between">
      <h1>@yield('title')</h1>
      <div class="d-flex">
        <button :class="{'btn-primary' : tab !== 'profile'}" class="btn btn-info btn-sm ml-2" @click="tab = 'form'">Payment Form</button>
        <button :class="{'btn-primary' : tab !== 'form'}" class="btn btn-info btn-sm ml-2" @click="tab = 'profile'">Info Profile</button>
        <form action="{{route('action.bannedstudent', $student->id)}}" method="POST" class="form-banned-student d-flex">
          @csrf
          @method('delete')
          <button class="btn btn-danger btn-sm ml-2">Banned</button>
          <a href="{{route('view.changestudent', $student->id)}}" class="btn btn-success btn-sm ml-2">Change</a>
        </form>
      </div>
    </div>
    <div class="section-body bg-white p-4 rounded shadow-sm" x-show="tab === 'profile'">
      @include('components.studentinfoform')
    </div>
    <div class="section-body bg-white p-4 rounded shadow-sm" x-show="tab === 'form'">
      @include('components.studentpaymentform')
    </div>
    <div class="d-flex justify-content-between align-items-center">
      <h2 class="section-title" x-show="tab === 'form'">{{$student->name}} Payment Details</h2>
      <div class="d-flex">
        @if($payment)
        <form action="{{route('report.patment', $payment->id)}}" method="POST">
          @csrf
          <button class="btn btn-danger btn-sm mr-2">Print Report</button>
        </form>
        <form action="{{route('action.clearpayment', $payment->id)}}" method="POST" class="form-clear-payment">
          @csrf
          @method('delete')
          <button class="btn btn-warning btn-sm mr-2">Clear Payment</button>
        </form>
        @endif
        <button class="btn btn-primary btn-sm" x-show="tab === 'form' && isOpen == false" @click="isOpen = !isOpen">Show Payment</button>
        <button class="btn btn-primary btn-sm" x-show="tab === 'form' && isOpen == true" @click="isOpen = !isOpen">Hide Payment</button>
      </div>
    </div>
    <div class="section-body bg-white p-4 rounded shadow-sm" x-show="tab === 'form'">
      @include('components.studentpaymentinfo')
    </div>
  </section>
</div>
@endsection