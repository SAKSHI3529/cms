@extends('layouts.cms')
@section('content')

<div class="card-body">

    <h4 class="card-title">Default Datatable</h4>
    <p class="card-title-desc">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.
    </p>

    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 120.6px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 85.6px;" aria-label="Office: activate to sort column ascending">Street/ Building</th>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 33.6px;" aria-label="Age: activate to sort column ascending">City/State/Zip</th>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 76.6px;" aria-label="Start date: activate to sort column ascending">Country</th>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 58.6px;" aria-label="Salary: activate to sort column ascending">Contact</th></tr>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 58.6px;" aria-label="Salary: activate to sort column ascending">Action</th></tr>
        </thead>

        <tbody>

            @foreach ($branch as $branch)
            
        
            <tr>
              <td>{{$branch->id}}</td>
              <td>{{$branch->street}}</td>
              <td>{{$branch->state}}</td>
              <td>{{$branch->city}}</td>
              <td>{{$branch->zip}}</td>
              <td>{{$branch->country}}</td>
              <td>{{$branch->contact}}</td>
              
              <td><a href="{{url("/branch/".$branch->id."/edit")}}" class="btn btn-primary">Edit</a></td>
            <td>
              <form action="{{url('/branch/'.$branch->id)}}"method="POST">
                 @csrf
                 @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
            
            @endforeach
            
           
            
            
            
        <tr role="row" class="odd">
                <td class="dtr-control sorting_1" tabindex="0">Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr><tr role="row" class="even">
                <td class="sorting_1 dtr-control">Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr><tr role="row" class="odd">
                <td class="sorting_1 dtr-control">Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr><tr role="row" class="even">
                <td class="dtr-control sorting_1" tabindex="0">Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr></tbody>
    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>

</div>
@endsection