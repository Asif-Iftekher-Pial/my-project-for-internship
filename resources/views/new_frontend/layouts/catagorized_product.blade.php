@extends('new_frontend.master_file.master')
@section('body_section')

    {{-- @dd($catagorized_list); --}}
{{-- @dd($catagorizedProduct); --}}

   
    <ul class="thumbnails">
    @foreach ($catagorizedProduct as $product)
        <li class="span3" >
            <div class="thumbnail">
            <a href="{{ route('product_details',$product->id) }}"><img src="{{ asset('uploaded_Images/just_uploaded/' . $product->image) }}" alt=""></a>
            <div class="caption">
                <h5>
                    {{ $product->productname }}
                    
                </h5>
                <h5>
                    Catagory:{{ $product->productCatagory->catagoryname }}
                </h5>
                
                <h4 style="text-align:center"><a class="btn" href="{{ route('product_details',$product->id) }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">BDT {{ $product->price }}</a></h4>
            </div>
            </div>
        </li>
    @endforeach
</ul>

@endsection
