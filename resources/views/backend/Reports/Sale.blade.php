@extends('master')
@section('clean_dashboard_content')

<div class="row clearfix">
    {{-- @dd($salereport); --}}
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Sale Reports
                </h2>
            </div>
            <div>
                <div class="form-group">
                    <label for="from">Date From</label>
                    <input type="date" class="form-control" name="from_date">
                </div>
            </div>
            
            <div class="body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Order Date</th>
                            <th>C_ID</th>
                            <th>CUSTOMER NAME</th>
                            <th>CONTACT NO</th>
                            <th>EMAIL</th>
                            <th>PAYMENT METHOD</th>
                            <th>PRODUCT NAME</th>
                            <th>QTY</th>
                            <th>PRICE</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($salereport as $key=>$data )
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{ $data->order->created_at }}</td>
                            <td>{{ $data->order->customer_id }}</td>
                            <td>{{ $data->order->customer->name }}</td>
                            <td>{{ $data->order->phone_number }}</td>
                            <td>{{ $data->order->email }}</td>
                            <td>{{ $data->order->CreditCardType }}</td>
                            <td>{{ $data->product_name }}</td>
                            <td>{{ $data->qty }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->order->status }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection