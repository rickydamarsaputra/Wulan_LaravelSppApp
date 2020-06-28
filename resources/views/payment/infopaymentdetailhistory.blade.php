@extends('layout.dashboard_layout')
@section('title', 'History Payment Detail ' . $student->name)

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>@yield('title')</h1>
    </div>
    @include('payment.paymentdetailhistory')
  </section>
</div>
@endsection