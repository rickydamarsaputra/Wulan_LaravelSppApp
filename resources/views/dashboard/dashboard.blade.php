@extends('layout.dashboard_layout')
@section('title', 'Dashboard')

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>@yield('title')</h1>
    </div>
    @include('components.infopanel')
    @include('tables.dashboardtable')
  </section>
</div>
@endsection