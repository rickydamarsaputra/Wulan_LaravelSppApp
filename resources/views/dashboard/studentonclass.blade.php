@extends('layout.dashboard_layout')
@section('title', $classroom->name)

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>@yield('title')</h1>
    </div>
    @include('tables.studentlisttable')
  </section>
</div>
@endsection