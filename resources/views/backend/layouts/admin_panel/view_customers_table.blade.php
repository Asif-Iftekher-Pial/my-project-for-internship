@extends('master')
@section('clean_dashboard_content')


{{-- Customer Table starts here --}}



<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                   <b>Customer Information Table</b> 
                </h2>
            </div>
            {{-- @dd($customer_info_list->all()); --}}
            <div class="body table-responsive">
                @if (session()->has('success'))
                    <div class="alert alert-danger">
                        {{ session()->get('success') }}
                    </div>
                @endif
                
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>C_ID</th>
                            <th>Customer_Name</th>
                            <th>Customer_Address</th>
                            <th>Customer_Contact</th>
                            <th>Customer_Mail</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer_info_list as $key=>$data)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->contact }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->gender}}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure Delete This Data?')" class="btn btn-danger btn-xs" href="{{ Route('customer_delete',$data->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $customer_info_list->links()  }}
            </div>
        </div>
    </div>
</div>

{{-- Customer Table end here --}}
    
@endsection