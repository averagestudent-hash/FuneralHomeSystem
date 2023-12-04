@extends('layouts.internal.master')


@section('title')
  Packages
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Packages /</span> Add
</h4>

<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <form class="card-body" method="POST" action="{{route('packages.store')}}" enctype="multipart/form-data">
  @csrf
    <h6>Package Info</h6>
    <div class="row g-3">

      <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" />
      </div>

      <div class="col-md-6 select2-primary">
        <label class="form-label" for="multicol-language">Inclusions</label>
        <select id="multicol-language" name="inclusions[]" class="select2 form-select" multiple>
          <option value="Flowers">Flowers</option>
          <option value="Casket">Casket</option>
          <option value="Urn">Urn</option>
          <option value="Cremation">Cremation</option>
          <option value="Funeral Service">Funeral Service</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label" for="multicol-country">Category</label>
        <select id="Category" class="select2 form-select" name="category" data-allow-clear="true">
          <option value="">Select</option>
          <option value="Embalming">Embalming</option>
          <option value="Cremation">Cremation</option>
          <option value="Allin">Allin</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Price</label>
        <input type="text" id="price" name="price" class="form-control" placeholder="Price" />
      </div>

    </div>
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
   </form>
      <button type="button" class="btn btn-label-secondary" onclick="window.history.back()">Back</button>
    </div>

</div>
  
@endsection