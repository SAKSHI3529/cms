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
                                <th>Roles</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->name}}</td>
                              
                               
                               


                                <td>
                                    <div class="button-container" style="display:flex; gap:5px">
                                        
                                        <a href="" class="btn btn-primary"  >
                                            Permission
                                        </a>

                                        <form action="{{url('/roles/'.$role->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                           <button type="submit" class="btn btn-danger"  >
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