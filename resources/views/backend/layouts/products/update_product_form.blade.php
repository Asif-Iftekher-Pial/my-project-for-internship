@extends('master')
@section('clean_dashboard_content')


<!-- CREATE PRODUCTS form -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>UPDATE PRODUCTS</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form action="{{ Route('product_update', $product_list->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('put')

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="productname" value="{{ $product_list->productname }}" required>
                            <label class="form-label">Product Name</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="categoryid">Select Category:</label>
                            <select class="form-control" name="categoryid" id="categoryid" value="{{ $product_list->categoryname }}">
                                @foreach($catagories as $data)
                                <option value="{{$data->catagorytype}}">{{$data->catagorytype}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea name="description" cols="30" rows="5" class="form-control no-resize" value="{{ $product_list->description }}"required></textarea>
                            <label class="form-label">Description</label>
                        </div>
                    </div>
                    <div class="form-group">
                          <label for="exampleFormControlFile1">Upload Picture</label>
                          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" value="{{ $product_list->image }}">
                    </div>
                    
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="price" value="{{ $product_list->price }}"required>
                            <label class="form-label">Price</label>
                        </div>
                    </div>

                    
                    <button class="btn btn-primary waves-effect" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# product form  -->
    
@endsection