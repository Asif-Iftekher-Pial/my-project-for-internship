@extends('master')
@section('clean_dashboard_content')

    <div class="row clearfix">
        {{-- @dd($salereport); --}}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <form action="{{ route('report') }}" method="get">

                    <div class="row" style="padding: 30px">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="from">Date From</label>
                                    <input value="{{ $fromDate }}" id="from" type="date" class="form-control" name="from_date">
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="from">Date to</label>
                                    <input value="{{ $toDate }}" id="to" type="date" class="form-control" name="to_date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Search</button>
                                <button type="button" onclick="printDiv()" class="btn btn-success">Print</button>
                            </div>
                        </div>

                    </div>
                </form>
                <div class="header">
                    <h2>
                        Order Report
                    </h2>
                </div>
                <div class="body table-responsive">
                    <div id="printArea">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="11">Order Reports from <br>
                                        {{ $fromDate }} <br> To <br> {{ $toDate }}
                                    </th>
                                </tr>
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
                                    <th style="background-color: seagreen">STATUS</th>
                                </tr>
                            </thead>
                            @if (count($salereport) > 0)
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
                                {{ $salereport->links() }}
                            @else

                                <tr>
                                    <td colspan="11">
                                        <h2 style="color: red"> No result found......!</h2>
                                    </td>
                                </tr>
                            @endif
                            
                        </table>
                       
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

    </script>
@endsection
