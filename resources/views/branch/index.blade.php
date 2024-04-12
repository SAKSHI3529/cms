@extends('layouts.cms')
@section('title','Branch')
@section('content')

<div class="card-body">

    <div class="row" style="font-size: 15px;">
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
                                <th> ID</th>
                                <th> Name</th>
                                <th> State</th>
                                <th> City</th>
                                <th> Contact</th>
                                <th> Created At</th>
                                <th class="noExport"> Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($branchs as $index => $branch)
                            <tr>
                               
                                <td>{{$index+1}}</td>
                                <td> {{$branch->name}}</td>
                                <td> {{$branch->state}}</td>
                                <td> {{$branch->city}}</td>
                                <td> {{$branch->contact}}</td>
                                <td> {{$branch->created_at}}</td>
                               


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