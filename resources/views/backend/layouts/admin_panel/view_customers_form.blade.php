@extends('master')
@section('clean_dashboard_content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Customer Registration Form</h2>
                <ul class="header-dropdown m-r--5">
                </ul>
            </div>
            <div class="body">
                <form action="{{Route('customerformSaved')}}" method="post">

                    @csrf

                    {{-- <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="c_id"> 
                            <label class="form-label">Customer ID</label>
                        </div>
                    </div> --}}
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="customer_name" required>
                            <label class="form-label">Customer Name</label>
                        </div>
                    </div>
                    
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="customer_address" required>
                            <label class="form-label">Customer Address</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="contact" required>
                            <label class="form-label">Contact Information</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" required>
                            <label class="form-label">Email Address</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <input type="radio" value="Male" name="gender" id="male" class="with-gap">
                        <label for="male">Male</label>

                        <input type="radio" value="female" name="gender" id="female" class="with-gap">
                        <label for="female" class="m-l-20">Female</label>
                    </div>
                    
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" required>
                            <label class="form-label">Password</label>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary waves-effect" type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
