@extends('master')
@section('clean_dashboard_content')
    



<div class="row clearfix">
{{-- @dd($products); --}}

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <b>Orders Information</b>

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
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>QTY</th>
                            <th>Price</th>
                        </tr>
                        {{-- @dd($view_customer_orders); --}}
                    </thead>
                    <tbody>
                        @foreach ($products->myorder as $key => $data)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $data->product_name }}</td>
                                <td>
                                    <img width="100px" src="{{ '/uploaded_Images/just_uploaded/' . $data->image }}"
                                        alt="">
                                </td>
                                <td>{{ $data->qty }}</td>
                                <td>{{ $data->price }}</td>
                              
                                
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection