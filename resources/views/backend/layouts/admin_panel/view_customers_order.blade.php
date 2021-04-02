@extends('master')
@section('clean_dashboard_content')



{{-- Customer Order Table starts here --}}



<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                   <b>Customer Orders Information</b> 
                   
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Update Order</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete Order</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Order_ID</th>
                            <th>C_ID</th>
                            <th>Order_Name</th>
                            <th>Order_Quantity</th>
                            <th>Shipment_Status</th>
                            <th>Date</th>
                            <th>Tottal_Price</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>2021</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>male</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>2022</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>2023</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>2024</td>
                            <td>Jellybean</td>
                            <td>@lajelly</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>2025</td>
                            <td>Kikat</td>
                            <td>@lakitkat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



{{-- Customer Table end here --}}
    
@endsection