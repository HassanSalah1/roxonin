@extends('dashboard.layouts.contentLayoutMaster')

@section('title', 'Create Permission')

@section('content')
  <!-- Basic multiple Column Form section start -->
  <section>
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Permission info</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('permissions.store') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-12">
              <div class="mb-1">
                <label class="form-label" for="name">Permission Name</label>
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Permission Name" name="name"
                  value="{{ old('name') }}" />
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary me-1">Submit</button>
              <button type="reset" class="btn btn-outline-secondary">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- Basic Floating Label Form section end -->
@endsection
