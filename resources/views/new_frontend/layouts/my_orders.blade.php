@extends('new_frontend.master_file.master')
@section('body_section')

<table class="table table-striped">
    {{-- @dd($myorders); --}}
    <thead>
        <tr>
            <th>SL</th>
            <th>Customer ID</th>
            <th>Order Date</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Product Qty</th>
            <th>Image</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($myorders as $key=>$data)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $data->order->customer->id }}</td>
            <td>{{ $data->order->created_at }}</td>
            <td>{{ $data->order->customer->name }}</td>
            <td>{{ $data->product_name }}</td>
            <td>{{ $data->qty }}</td>
            <td>
                <img width="100px" src="{{ '/uploaded_Images/just_uploaded/'.$data->image }}" alt="">
            </td>
            <td>{{ $data->price }}</td>
            <td>{{ $data->order->status }}</td>
        </tr>
        @endforeach 
    </tbody>
</table> 
@endsection