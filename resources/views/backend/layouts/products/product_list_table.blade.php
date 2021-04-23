@extends('master')
@section('clean_dashboard_content')


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                   <b>Products Information</b> 
                   
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ Route('product_form') }}" class=" waves-effect waves-block">Add New Product</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif

            <div class="body table-responsive">
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
                        @foreach ($product_list as $key=>$data )
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
                {{ $product_list->links() }}
            </div>
        </div>
    </div>
</div>

    
@endsection