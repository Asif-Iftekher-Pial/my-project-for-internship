@extends('master')
@section('clean_dashboard_content')


{{-- Employee Table starts here --}}

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                   <b>Employee Information Table</b> 
                   
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{Route('form')}}" class=" waves-effect waves-block">Add New Record</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>SL</td>
                            <td>E_ID</td>
                            <th>Employee_Name</th>
                            <th>Employee_Designation</th>
                            <th>Employee_Address</th>
                            <th>Employee_Contact</th>
                            <th>Employee_Mail</th>
                            <th>Gender</th>
                        
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($users as $key=>$user )
                            
                       
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <th>{{$user->id}}</th>
                            <td>{{$user->employee_name}}</td>           {{-- here employee_name is database column name --}}
                            <td>{{$user->employee_designation}}</td>
                            <td>{{$user->employee_address}}</td>
                            <td>{{$user->contact_information}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->employee_gender}}</td>
                            
                            <td>
                                <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal"  href="#exampleModal">Update</a>
                                
                                <a class="btn btn-danger btn-xs" href="{{ Route('employee.delete',$user->id ) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                       
                       
                    </tbody>
                </table>


                                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Employee Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="body">
                                            <form id="form_validation" method="POST">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="name" required>
                                                        <label class="form-label">Employee ID</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="surname" required>
                                                        <label class="form-label">Employee Name</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" name="email" required>
                                                        <label class="form-label">Employee Designation</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" name="email" required>
                                                        <label class="form-label">Employee Address</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" name="email" required>
                                                        <label class="form-label">Employee Contact</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" name="email" required>
                                                        <label class="form-label">Email Address</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" name="gender" id="male" class="with-gap">
                                                    <label for="male">Male</label>

                                                    <input type="radio" name="gender" id="female" class="with-gap">
                                                    <label for="female" class="m-l-20">Female</label>
                                                </div>
                                                
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" name="password" required>
                                                        <label class="form-label">Password</label>
                                                    </div>
                                                </div>
                                                
                                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </div>





            </div>
        </div>
    </div>
</div>


{{-- Employee Table End here --}}






@endsection