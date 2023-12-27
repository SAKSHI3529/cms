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
                                <th>Name</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Contact</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($branchs as $branch)
                            <tr>
                                <td>{{$branch->name}}</td>
                                <td>{{$branch->state}}</td>
                                <td>{{$branch->city}}</td>
                                <td>{{$branch->contact}}</td>
                                <td>{{$branch->created_at}}</td>
                                {{-- <td><a href="{{url("/branch/".$branch->id."/edit")}}" class="btn btn-primary">
                                <i class="fas fa-pen"></i>
                                </a></td>
                                <td>
                                
                                    <form action="{{url('/branch/'.$branch->id)}}"method="POST">
                                        @csrf
                                        @method('delete')
                                       <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                       </button>
                                       </form>
                                </td> --}}


                                <td>
                                    <div class="button-container" style="display:flex; gap:5px">
                                        <a href="{{url("/branch/".$branch->id."/edit")}}" class="btn btn-primary">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <form action="{{url('/branch/'.$branch->id)}}"method="POST">
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