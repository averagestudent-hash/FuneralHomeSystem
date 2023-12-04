@extends('layouts.internal.master')


@section('title')
   Add Product
@endsection

@section('content')

<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Products /</span> Add
</h4>

<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <form class="card-body" method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
  @csrf
    <h6>Product Info</h6>
    <div class="row g-3">

      <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" />
      </div>

      <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Description</label>
        <input type="text" id="description" name="description" class="form-control" placeholder="Description" />
      </div>

      <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Price</label>
        <input type="number" id="price" name="price" class="form-control" placeholder="Price" />
      </div>

      <div class="col-md-6">
        <label class="form-label" for="multicol-country">Category</label>
        <select id="Category" class="select2 form-select" name="category" data-allow-clear="true">
          <option value="">Select</option>
          <option value="Caskets">Caskets</option>
          <option value="Dressings">Dressings</option>
          <option value="Flowers">Flowers</option>
          <option value="Urns">Urns</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Stock</label>
        <input type="number" id="stock" name="stock" class="form-control" placeholder="Stock" />
      </div>

      <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Image</label>
        <input type="file" id="img_path" name="img_path" class="form-control"/>
      </div>
      
    </div>
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
   </form>
      <button type="button" class="btn btn-label-secondary" onclick="window.history.back()">Back</button>
    </div>

</div>


@endsection