@extends('layouts.cms')
@section('title','Permissions')
@section('content')

<div class="card-body">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3>Permissions for {{$rolename}}</h3>
                    <br>
                    <br>
                    
                   

                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Permissions</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <form action="{{url('/update-permissions/'.$rolename)}}" method="post">
                            @csrf
                        <tbody>
                            @foreach ($permissions as $p)
                            <tr>
                                <td>{{$p->name}}</td>
                                <td>
                                    <input name="permissions[]" value="{{$p->name}}" type="checkbox" {{in_array($p->name,$user_permissions->toArray())?'checked':''}}/>
                                </td>
                                
                            </tr>

                            

                            
                            @endforeach
                            

                      
                        </tbody>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{url('/roles')}}" class="btn btn-danger"  >
                                    Close
                                </a>
                                
                            </td>
                           
                            
                        </tr>
                       
                        </form>
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