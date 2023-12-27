@extends('layouts.cms')
@section('content')

<div class="card-body">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Default Datatable</h4>
                    <p class="card-title-desc">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                               <th>id</th>
                                <th>Referance Number</th>
                                <th>Sender Name</th>
                                <th>Receiver Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($parcels as $parcels)
                            <tr>
                                <td>{{$parcels->id}}</td>
                                <td></td>
                                <td>{{$parcels->senderName}}</td>
                                <td>{{$parcels->receiverName}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                           
                      
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
</div>

@endsection

@section('pagescript')
<script>
    $('#datatable').DataTable( {
    responsive: true
} );
    </script>

@endsection