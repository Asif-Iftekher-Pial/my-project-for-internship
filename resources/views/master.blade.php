@include('backend.partials.header')










    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    


    @include('backend.partials.navbar')



    <section>



   
        <!-- Left Sidebar -->
        


        @include('backend.partials.leftsidebar')
        




        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        



        @include('backend.partials.rightsidebar')




        <!-- #END# Right Sidebar -->
    </section>



<section class="content">
        <div class="container-fluid">
            

            <div class="block-header">

                
                
            
            @yield('clean_dashboard_content')




            </div>

    
        



<!-- CPU Usage -->
<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h2>CPU USAGE (%)</h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 align-right">
                        <div class="switch panel-switch-btn">
                            <span class="m-r-10 font-12">REAL TIME</span>
                            <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                        </div>
                    </div>
                </div>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="real_time_chart" class="dashboard-flot-chart"></div>
            </div>
        </div>
    </div>
</div>
<!-- #END# CPU Usage -->






    <!-- Browser Usage -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="header">
                <h2>BROWSER USAGE</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="donut_chart" class="dashboard-donut-chart"></div>
            </div>
        </div>
    </div>
    <!-- #END# Browser Usage -->



        </div>

   
</section>

    <!-- Jquery Core Js -->



    
    @include('backend.partials.footer')