@extends('master')
@section('clean_dashboard_content')


    <div class="container-fluid">
        <div class="block-header">
            <h1>
                Materials Gallary 
            </h1>
        </div>
        <div class="row clearfix">
            <!-- Basic Example -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Floor Tiles</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Bed Room</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Drawing Room</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Bath Room</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="/images/tiles/sample1.jpg">
                                </div>
                                <div class="item">
                                    <img src="/images/tiles/sample2.jpg">
                                </div>
                                <div class="item">
                                    <img src="/images/tiles/sample3.jpg">
                                </div>
                                <div class="item">
                                    <img src="/images/tiles/sample4.jpg">
                                </div>
                                
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example -->
            <!-- With Captions -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>All Blocks</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">External Wall</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Enternal Wall</a></li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic_2" data-slide-to="0" class=""></li>
                                <li data-target="#carousel-example-generic_2" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic_2" data-slide-to="2" class="active"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item">
                                    <img src="/images/blocks/sample1.jpg">
                                    <div class="carousel-caption">
                                        <h3>External Block</h3>          
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/images/blocks/sample2.jpg">
                                    <div class="carousel-caption">
                                        <h3>External</h3>
                                    </div>
                                </div>
                                <div class="item active">
                                    <img src="/images/blocks/sample3.jpg">
                                    <div class="carousel-caption">
                                        <h3>External</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# With Captions -->
        </div>
    </div>

    
@endsection