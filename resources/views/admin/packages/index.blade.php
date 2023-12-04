@extends('layouts.internal.master')


@section('title')
  Packages
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Packages /</span> Table
</h4>
<!-- DataTable with Buttons -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="table" id="Packages-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Inclusions</th>
          <th>Category</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
</div>


  <script src="../../../../../../../../../../../../../../../../../../../../../../assets/vendor/libs/jquery/jquery.js"></script>


<script>
$(document).ready(function () {
  var admin = {!! json_encode(url('/')) !!}
    $('#Packages-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('packages.index') !!}',
        columns: [
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                orderable: false,
                searchable: false
            },
            {data: 'name', name: 'name'},
            {data: 'inclusions', name: 'inclusions'},
            {data: 'category', name: 'category'},
            {data: 'price', name: 'price'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],

    });
});

</script>
  
@endsection