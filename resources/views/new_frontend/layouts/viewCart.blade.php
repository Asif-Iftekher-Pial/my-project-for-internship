@extends('new_frontend.master_file.master')
@section('body_section')

    {{-- @dd($carted_Products); --}}

    {{-- ------------------------------------------Cart Table------------------------------ --}}
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
            @foreach ($carted_Products as $data)
            {{-- @dd($data); --}}
                <tr>
                    <td><a href={{ route('removecartitem',$data->id) }}><button class="btn btn-danger">Remove</button></a></td>
                    <td>{{ $data->name }}</td>

                    <td> <img width="100" src="{{ '/uploaded_Images/just_uploaded/'.$data->options->image }}" alt=""></td>

                    <td>{{ $data->options->description }}</td>

                    {{-- <td>
                        <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"
                                id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i
                                    class="icon-minus"></i></button><button class="btn" type="button"><i
                                    class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i
                                    class="icon-remove icon-white"></i></button> </div>
                    </td> --}}
                    <td>{{ $data->qty }}</td>

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
                <td colspan="6" style="text-align:right"><strong>TOTAL PAYMENT (50+{{ Cart::subtotal() }}+5%) =</strong></td>
                <td class="label label-important" style="display:block"> <strong> {{ Cart::subtotal()}} </strong></td>
            </tr>
        </tbody>
    </table>

    {{-- ------------------------------------------End Cart Table------------------------------ --}}
    {{-- ------------------------------------------End Cart Table------------------------------ --}}
    {{-- ------------------------------------------End Cart Table------------------------------ --}}



@endsection
