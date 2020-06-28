@extends('layout.dashboard_layout')
@section('title', 'Manage History Payment')

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>@yield('title')</h1>
    </div>
    @include('tables.historytable')
  </section>
</div>
@endsection