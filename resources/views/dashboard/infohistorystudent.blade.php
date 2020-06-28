@extends('layout.dashboard_layout')
@section('title', 'History Payment ' . $student->name)

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>@yield('title')</h1>
    </div>
    @include('tables.infopayment')
  </section>
</div>
@endsection