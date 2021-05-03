@extends('new_frontend.master_file.master')
@section('body_section')


@dd($carted_Products);
<table class="table table-striped">
    <thead>
        <tr>
            <th>SL</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Image</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            {{-- <th scope="row">{{ $key+1 }}</th> --}}
            <td>
                {{-- <img width="150px" src="{{ '/uploaded_Images/just_uploaded/'.$data->image }}" alt=""> --}}
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            
        </tr>
        
       
    </tbody>
</table>   
@endsection