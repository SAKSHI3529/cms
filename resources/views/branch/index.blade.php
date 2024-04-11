@extends('layouts.cms')
@section('title','Branch')
@section('content')

<div class="card-body">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3>Branches Information</h3>
                    <br>
                    <br>
                    
                    <div class="table-responsive">
                    <table id="datatable" class="table table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th><h5> ID</h5></th>
                                <th><h5> Name</h5></th>
                                <th><h5> State</h5></th>
                                <th><h5> City</h5></th>
                                <th><h5> Contact</h5></th>
                                <th><h5> Created At</h5></th>
                                <th class="noExport"><h5> Action</h5></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($branchs as $index => $branch)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td><h5> {{$branch->name}}</h5></td>
                                <td><h5> {{$branch->state}}</h5></td>
                                <td><h5> {{$branch->city}}</h5></td>
                                <td><h5> {{$branch->contact}}</h5></td>
                                <td><h5> {{$branch->created_at}}</h5></td>
                               


                                <td>
                                    <div class="button-container" style="display:flex; gap:5px">
                                        <a href="{{url("/branch/".$branch->id."/edit")}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <form action="{{url('/branch/'.$branch->id)}}"method="POST">
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
    // "fnRowCallback" : function(nRow, aData, iDisplayIndex){
    //             $("td:first", nRow).html(iDisplayIndex +1);
    //            return nRow;
    //         },
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