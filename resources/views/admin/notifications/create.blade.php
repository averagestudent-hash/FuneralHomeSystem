@extends('layouts.internal.master')


@section('title')
   Add Notification
@endsection

@section('content')

<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Notifications /</span> Add
</h4>

<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <form class="card-body" method="POST" action="{{route('notifications.store')}}" enctype="multipart/form-data">
  @csrf
    <h6>Notification Info</h6>
    <div class="row g-3">

      <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Description</label>
        <input type="text" id="description" name="description" class="form-control" placeholder="Description" />
      </div>

    </div>
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
   </form>
      <button type="button" class="btn btn-label-secondary" onclick="window.history.back()">Back</button>
    </div>

</div>


@endsection