@extends('layout.dashboard_layout')
@section('title', 'Manage Spp')

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>@yield('title')</h1>
    </div>
    @include('tables.spptable')
  </section>
</div>
@endsection