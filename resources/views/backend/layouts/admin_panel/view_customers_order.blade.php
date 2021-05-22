@extends('master')
@section('clean_dashboard_content')

    {{-- Customer Order Table starts here --}}



    <div class="row clearfix">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <b>Customer Orders Information</b>

                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Update Order</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete Order</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body table-responsive">
                    <form class="form-inline" type="get" action="#">
                        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Product Name"
                            aria-label="Search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <table class="table table-striped">
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>order Date</th>
                                
                                <th>C-ID</th>
                                <th>Customer Name</th>
                                <th>Contact Number</th>
                                <th>Shipping Address</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>View</th>
                            </tr>
                            {{-- @dd($view_customer_orders); --}}
                        </thead>
                        <tbody>
                            @foreach ($view_customer_orders as $key => $data)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $data->created_at }}</td>
                                    
                                    <td>{{ $data->customer->id }}</td>
                                    <td>{{ $data->customer->name }}</td>
                                    <td>{{ $data->phone_number }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Status Update
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                @if ($data->status == 'Processing')
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('statusupdate', ['id' => $data->id, 'status' => 'Delivered']) }}">Delivered</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('statusupdate', ['id' => $data->id, 'status' => 'InTransit']) }}">In
                                                            Transit</a>
                                                    </li>
                                                    @elseif ($data->status == 'Delivered')
                                                    <li><a class="dropdown-item"
                                                        href="{{ route('statusupdate', ['id' => $data->id, 'status' => 'InTransit']) }}">In
                                                        Transit</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('statusupdate', ['id' => $data->id, 'status' => 'Processing']) }}">Processing</a>
                                                </li>

                                                @else
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('statusupdate', ['id' => $data->id, 'status' => 'Processing']) }}">Processing</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a class="btn btn-success btn-xs"  href="{{ route('ordersdetails',$data->id) }}">View</a></td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    {{-- Customer Table end here --}}

@endsection
