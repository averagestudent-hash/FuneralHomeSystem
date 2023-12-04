@extends('layouts.internal.master')


@section('title')
  Announcements
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Announcements /</span> Table
</h4>
<!-- DataTable with Buttons -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="table" id="announcements-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Description</th>
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
    $('#announcements-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('announcements.index') !!}',
        columns: [
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                orderable: false,
                searchable: false
            },
            { data: 'img', name: 'img',
                "render": function (data, type, full, meta) {
                    return "<img src=\""+ admin + "/" + data + "\" height=\"100\" width=\"100\"/>";

                },orderable: false},
            {data: 'description', name: 'description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
    });
});

</script>
  
@endsection