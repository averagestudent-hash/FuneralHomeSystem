@extends('layouts.internal.master')

@section('title')
   Dashboard
@endsection

@section('content')

<div class="row">
  <div class="col-md-12 col-lg-4 mb-4">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-8">
          <div class="card-body">
            <h6 class="card-title mb-1 text-nowrap">Hello {{Auth::user()->name}}!</h6>
            <small class="d-block mb-3 text-nowrap">User of the month</small>

            <h5 class="card-title text-primary mb-1">$48.9k</h5>
            <small class="d-block mb-4 pb-1 text-muted">100% of Activity</small>

            <a href="javascript:;" class="btn btn-sm btn-primary">View sales</a>
          </div>
        </div>
        <div class="col-4 pt-3 ps-0">
          <img src="../../assets/img/illustrations/prize-light.png" width="90" height="140" class="rounded-start" alt="View Sales">
        </div>
      </div>
    </div>
  </div>
</div>

@endsection