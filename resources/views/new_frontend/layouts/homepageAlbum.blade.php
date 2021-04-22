@extends('new_frontend.master_file.master')
@section('body_section')



    <div class="span9">
        <div class="well well-small">
            <h4>Latest Products <small class="pull-right">200+ latest products</small></h4>
            <div class="row-fluid">
                <div class="multiple-items">
                    @foreach ($product_list as $product)
                        <div class="thumbnail" style="margin: 10px;">
                            <i class="tag"></i>
                            <a href="{{ route('product_details',$product->id) }}"><img style="width: 100%;height:100%"
                            src="{{ asset('uploaded_Images/just_uploaded/' . $product->image) }}" alt=""></a>
                            <div class="caption">
                                <h5>{{ $product->productname }}</h5>
                                <h4>
                                    <a class="btn" href="{{ route('product_details',$product->id) }}">VIEW</a>
                                    <a class="btn" href="#">Add to<i class="icon-shopping-cart"></i></a>
                                    <a class="btn btn-primary" href="#">BDT {{ $product->price }}</a>
                                </h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <h4>All Products </h4>
        <ul class="thumbnails">
            @foreach ($product_list as $product)
                <li class="span3" >
                    <div class="thumbnail">
                    <a href="{{ route('product_details',$product->id) }}"><img src="{{ asset('uploaded_Images/just_uploaded/' . $product->image) }}" alt=""></a>
                    <div class="caption">
                        <h5>
                            {{ $product->productname }}
                        </h5>
                        
                        <h4 style="text-align:center"><a class="btn" href="{{ route('product_details',$product->id) }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">BDT {{ $product->price }}</a></h4>
                    </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    </div>
@endsection
