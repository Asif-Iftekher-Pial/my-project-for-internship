@extends('new_frontend.master_file.master')
@section('body_section')

    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="/">Home</a> <span class="divider">/</span></li>
            <li><a href="/">Products</a> <span class="divider">/</span></li>
            <li class="active">product Details</li>
        </ul>
        {{-- @dd($product_list); --}}
        <div class="row">
            <div id="gallery" class="span3">
                <a href="#" title="">
                    <img src="{{ asset('uploaded_Images/just_uploaded/' . $product_list->image) }}" style="width:100%"
                        alt="">
                </a>
                <div id="differentview" class="moreOptopm carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="themes/images/products/large/f1.jpg"> <img style="width:29%"
                                    src="themes/images/products/large/f1.jpg" alt=""></a>
                            <a href="themes/images/products/large/f2.jpg"> <img style="width:29%"
                                    src="themes/images/products/large/f2.jpg" alt=""></a>
                            <a href="themes/images/products/large/f3.jpg"> <img style="width:29%"
                                    src="themes/images/products/large/f3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="themes/images/products/large/f3.jpg"> <img style="width:29%"
                                    src="themes/images/products/large/f3.jpg" alt=""></a>
                            <a href="themes/images/products/large/f1.jpg"> <img style="width:29%"
                                    src="themes/images/products/large/f1.jpg" alt=""></a>
                            <a href="themes/images/products/large/f2.jpg"> <img style="width:29%"
                                    src="themes/images/products/large/f2.jpg" alt=""></a>
                        </div>
                    </div>

                </div>


            </div>
            <div class="span6">
                <h3>{{ $product_list->productname }}</h3>
                <hr class="soft">
                <form class="form-horizontal qtyFrm">
                    <div class="control-group">
                        <label class="control-label"><span>BDT {{ $product_list->price }}</span></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i
                                    class=" icon-shopping-cart"></i></button>
                        </div>
                    </div>
                </form>

                <hr class="soft">
                <h4>{{ $product_list->quantity }} items in stock</h4>
                <h4>Item Catagory:{{ $product_list->productCatagory->catagoryname }}</h4>
                <form class="form-horizontal  pull-right">
                    <div class="control-group">
                        <label class="control-label">
                            <h5><span>Estimate Quantity</span></h5>
                        </label>

                        <input type="text" placeholder="Estimation">

                    </div>
                </form>
                <hr class="soft clr">
                <a class="btn btn-small pull-right" href="#detail">More Details</a>
                <br class="clr">
                <a href="#" name="detail"></a>
                <hr class="soft">
            </div>

            <div class="span9">
                <ul id="productDetail" class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <h4>Product Information</h4>
                        <table class="table table-bordered">
                            <tbody>
                                <tr class="techSpecRow">
                                    <th colspan="2">Product Details</th>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Name: </td>
                                    <td class="techSpecTD2">{{ $product_list->productname }}</td>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Catagory Name: </td>
                                    <td class="techSpecTD2">{{ $product_list->productCatagory->catagoryname }}</td>
                                </tr>

                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Released on:</td>
                                    <td class="techSpecTD2"> 2011-01-28</td>
                                </tr>
                                <tr class="techSpecRow">
                                    <td class="techSpecTD1">Dimensions:</td>
                                    <td class="techSpecTD2"> 5.50" h x 5.50" w x 2.00" l, .75 pounds</td>
                                </tr>

                            </tbody>
                        </table>

                        <h3>Description</h3>
                        <p>
                            {{ $product_list->description }} <br>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
