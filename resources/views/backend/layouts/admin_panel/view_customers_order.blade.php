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
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Order ID</th>
                                <th>C-ID</th>
                                <th>C_Name</th>
                                <th>Contact Number</th>
                                <th>Shipping Address</th>
                                <th>Product Name</th>
                                <th>QTY</th>
                                <th>Price</th>
                                <th>Delivary Status</th>
                            </tr>
                            {{-- @dd($view_customer_orders); --}}
                        </thead>
                        <tbody>
                            @foreach ($view_customer_orders as $key => $data)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>
                                        <img width="100px" src="{{ '/uploaded_Images/just_uploaded/' . $data->image }}"
                                            alt="">
                                    </td>
                                    <td>{{ $data->order->id }}</td>
                                    <td>{{ $data->order->customer->id }}</td>
                                    <td>{{ $data->order->customer->name }}</td>
                                    <td>{{ $data->order->created_at }}</td>
                                    <td>{{ $data->order->customer->name }}</td>
                                    <td>{{ $data->product_name }}</td>
                                    <td>{{ $data->qty }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $data->status }}</td>
                                   
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
