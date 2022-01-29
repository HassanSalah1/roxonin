@extends('dashboard.layouts.contentLayoutMaster')

@section('title', 'Manage Roles')

@include('dashboard.panels.datatables_css')

@section('content')
  <!-- Basic multiple Column Form section start -->
  <section>
    <div class="card">
      <div class="card-body">
        {!! $dataTable->table() !!}
      </div>
    </div>
  </section>
  <!-- Basic Floating Label Form section end -->
@endsection

@include('dashboard.panels.datatables_js')

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
  {!! $dataTable->scripts() !!}
@endsection
