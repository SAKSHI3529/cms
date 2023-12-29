


@extends('layouts.cms')
@section('content')

<div class="card-body">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3>Branches Information</h3>
                    <br>
                    <br>
                    

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
                                <td>{{$parcels ->referanceNumber}}</td>
                                <td>{{$parcels->senderName}}</td>
                                <td>{{$parcels->receiverName}}</td>
                                <td></td>
                               
                              <td>
                                    <div class="button-container" style="display:flex; gap:5px">

                                        <a href="{{url("/parcels/".$parcels->id)}}" class="btn btn-success">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a href="{{url("/parcels/".$parcels->id."/edit")}}" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
    
                                        <form action="{{url('/parcels/'.$parcels->id)}}"method="POST">
                                            @csrf
                                            @method('delete')
                                           <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                           </button>
                                           </form>
                                        
                                    </div>
                                </td>
                                
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