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
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>email</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->contact}}</td>
                                <td>{{$user->email}}</td>
                               
                                @if($user->roles->count()>0) 
                                <td>{{$user->roles->first()->name}}</td>
                                 @else <td>Not Creates</td>
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
    responsive: true
} );
    </script>

@endsection