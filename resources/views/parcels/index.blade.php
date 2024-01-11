


@extends('layouts.cms')
@section('content')

<div class="card-body">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3>Parcels Information</h3>
                    <br>
                    <br>
                    
                    <div class="table-responsive">
                    <table id="datatable" class="table table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                            @foreach ($parcels as $parcel)
                            
                            <tr>
                                <td>{{$parcel->id}}</td>
                                <td>{{$parcel ->referanceNumber}}</td>
                                <td>{{$parcel->senderName}}</td>
                                <td>{{$parcel->receiverName}}</td>
                               {{-- @if($parcel->trackingstatus->count()>0) 
                                <td> {{$parcel->trackingstatus->first()->trackinginfo}}</td>
                                 @else <td>Not updated</td>
                               @endif --}}


                               <td>
                                <?php $stat=$parcel->trackingstatus->first()->trackinginfo??' ' ?>
                                <span class="badge badge-pill {{($stat=='Delivered' || $stat=='Order Confirmed')?' badge-success':''}}
                                {{($stat=='Order Processed' || $stat=='Out for Delivery ')?' badge-warning':''}}
                                {{($stat=='Arrived at Destination City')?' badge-warning':''}}
                                {{($stat=='Failed Delivery Attempt' || $stat=='Cancel')?' badge-danger':''}} "> 
                                    @if($parcel->trackingstatus->count()>0) 
                                 {{$stat}}
                                 @else <span class="badge badge-dark">Not Updated</span>
                                  @endif
                                 </span></td>
                                    

                               {{-- <span class="badge badge-light">Light</span> --}}
                              <td>
                                    <div class="button-container" style="display:flex; gap:5px">

                                        <a href="{{url("/parcels/".$parcel->id)}}" class="btn btn-success"  data-toggle="tooltip" data-placement="top" data-original-title="Details">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a href="{{url("/parcels/".$parcel->id."/edit")}}" class="btn btn-primary"  data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
    
                                        <form action="{{url('/parcels/'.$parcel->id)}}"method="POST">
                                            @csrf
                                            @method('delete')
                                           <button type="submit" class="btn btn-danger"  data-toggle="tooltip " data-placement="top" data-original-title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                           </button>
                                           </form>

                                           <a href="{{url('/reports/'.$parcel->referanceNumber)}}" class="btn btn-info"  data-toggle="tooltip" data-placement="top" data-original-title="Reports">
                                            <i class="fas fa-clipboard-check"></i>
                                        </a>
                                        
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