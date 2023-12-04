@extends('layouts.internal.master')


@section('title')
   Notifications
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Notifications /</span> Table
</h4>
<!-- DataTable with Buttons -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="table" id="notifications-table">
      <thead>
        <tr>
          <th>#</th>
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
    $('#notifications-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('notifications.index') !!}',
        columns: [
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                orderable: false,
                searchable: false
            },
            {data: 'description', name: 'description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],

    });
});

</script>
  
@endsection