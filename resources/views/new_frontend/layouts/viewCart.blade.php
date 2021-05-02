@extends('new_frontend.master_file.master')
@section('body_section')

    {{-- @dd($carted_Products); --}}

    {{-- ------------------------------------------Cart Table------------------------------ --}}
    <a href="{{ route('homepage') }}" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Action</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Quantity/Update</th>
                <th>Price</th>
                {{-- <th>Discount</th>
                <th>Tax</th> --}}
                <th>Sub-Total</th>
            </tr>
        </thead>

        <tbody>
            @if (session()->has('success'))
            <div class="alert alert-success" style="color: black" style="background-color: #1ccc22">
                {{ session()->get('success') }}
            </div>
            @endif
            @foreach ($carted_Products as $rowId=>$data)
            
            <a href="{{ route('clearcart') }}"><button class="btn btn-danger">Clear Cart</button></a>
                <tr>
                    <td><a href={{ route('removecartitem',$data->rowId) }}><button class="btn btn-danger">Remove</button></a></td>
                    <td>{{ $data->name }}</td>

                    <td> <img width="200 px" src="{{ '/uploaded_Images/just_uploaded/'.$data->options->image }}" alt=""></td>

                    <td>{{ $data->options->description }}</td>
                    <form action="{{ route('cartupdate',$rowId) }}" method="post">
                            @csrf
                        <td>
                            <div class="input-append"><input class="span1" name="quantity" style="max-width:34px" value="{{ $data->qty }}" placeholder="{{ $data->qty }}"
                                    id="appendedInputButtons" size="16" type="text">
                                    
                                    <button class="btn" type="submit">update</button> 
                            </div>
                        </td>
                    </form>

                    <td>{{ $data->price }}</td>
                    {{-- <td>$25.00</td>
                <td>$15.00</td> --}}
                    <td>{{ $data->subtotal() }}</td>
                    
                </tr>


            @endforeach

            <tr>
                <td colspan="6" style="text-align:right">Shipping Charge  </td>
                <td> 50 BDT</td>
            </tr>
           
            <tr>
                <td colspan="6" style="text-align:right">Total Tax: </td>
                <td>5%</td>
            </tr>
            <tr> 
                @php
                    $total=(float)str_replace(',','',Cart::subtotal());
                @endphp
                <td colspan="6" style="text-align:right"><strong>TOTAL PAYMENT (50+{{ Cart::subtotal() }}+5%) =</strong></td>
                <td class="label label-important" style="display:block"> <strong> {{ $total+50}} </strong></td>
            </tr>
        </tbody>
    </table>

    {{-- ------------------------------------------End Cart Table------------------------------ --}}


    <a href="#" class="btn btn-large pull-right">Confirm Order <i class="icon-arrow-right"></i></a>
@endsection
