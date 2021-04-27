@extends('master')
@section('clean_dashboard_content')


<div class="body table-responsive">
    {{-- @dd($searchProduct); --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>SL</th>
                <th>Images</th>
                <th>Product Name</th>
                <th>Catagory Name</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($searchProduct as $key=>$data )
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>
                    
                    <img width="150px" src="{{ '/uploaded_Images/just_uploaded/'.$data->image }}" alt="">
                    
                </td>
                <td>{{ $data->productname }}</td>
                <td>{{ $data->productCatagory->catagoryname }}</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->price }}</td>
                <td>
                    <a class="btn btn-success btn-xs" href="{{ Route('product_edit',$data->id) }}">Update</a>
                    <a class="btn btn-danger btn-xs" onclick="return confirm('Are you sure Delete This Data?')"  href="{{ Route('delete',$data->id) }}">Delete</a>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    {{ $searchProduct->links() }}
</div>
    
@endsection