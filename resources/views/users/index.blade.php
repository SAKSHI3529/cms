@extends('layouts.cms')
@section('title','Users')
@section('content')

<div class="card-body">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3>Users Information</h3>
                    <br>
                    <br>
                    
                 <div class="table-responsive">
                    <table id="datatable" class="table table-bordered  nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th><h5><b>Name</b></h5></th>
                                <th><h5><b>Address</b></h5></th>
                                <th><h5><b>Contact</b></h5></th>
                                <th><h5><b>email</b></h5></th>
                                <th><h5><b>resume</b></h5></th>
                                <th><h5><b>Roles</b></h5></th>
                                <th class="noExport">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td><h5>{{$user->name}}</h5></td>
                                <td><h5>{{$user->address}}</h5></td>
                                <td><h5>{{$user->contact}}</h5></td>
                                <td><h5>{{$user->email}}</h5></td>
                                <td><a href="{{url('/storage/'.$user->resume)}}" target="_blank"><h5>view resume</h5></a></td>
                               
                                @if($user->roles->count()>0) 
                                <td><h5>{{$user->roles->first()->name}}</h5></td>
                                 @else <td><h5>Not Creates</h5></td>
                               @endif
                               


                                <td>
                                    <div class="button-container" style="display:flex; gap:5px">
                                        <a href="{{url("/users/".$user->id."/edit")}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <form action="{{url('/users/'.$user->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                           <button type="submit" class="btn btn-danger"  data-toggle="tooltip" data-placement="top" data-original-title="Delete">
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
        </div>
        <!-- end col -->
    </div>
</div>

@endsection

@section('pagescript')
<script>
    $('#datatable').DataTable( {
    responsive: true,
    dom: 'lBfrtip',
    
    buttons: [ 
        
        {
            extend: 'excel',
            title: 'Madhur Transport \n Bhausingji Road \n kolhapur \n +91-8975058970',
            exportOptions: {
                columns: "thead th:not(.noExport)"
            }
        },
        
        {
            extend: 'pdfHtml5',
            title: 'Madhur Transport \n Bhausingji Road \n kolhapur \n +91-8975058970',
            exportOptions: {
                columns: "thead th:not(.noExport)"
            }
        }
                
    ]
} );
    </script>

@endsection