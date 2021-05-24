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
                <form action="{{ route('report') }}" method="get">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="from">Date From</label>
                                    <input id="from" type="date" class="form-control" name="from_date">
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="from">Date to</label>
                                    <input id="to" type="date" class="form-control" name="to_date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Search</button>
                                <a href="" class="btn btn-success">Print</a>
                            </div>
                        </div>

                    </div>
                </form>

                <div class="body table-responsive">
                    @if(count($salereport)>0)
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
                            @foreach ($salereport as $key => $data)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
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
                    {{ $salereport->links() }}
                    @else
                    <p>
                        <h3>No result found.</h3>
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
