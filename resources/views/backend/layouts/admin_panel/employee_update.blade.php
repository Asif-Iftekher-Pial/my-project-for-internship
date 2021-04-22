@extends('master')
@section('clean_dashboard_content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Employee Update Form</h2>
                <ul class="header-dropdown m-r--5">
                </ul>
            </div>
            <div class="body">
                <form action="{{ Route('employee.update',$employee_list->id) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('put')

                   
                    {{-- @dd($employee_list); --}}
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="employee_name" value="{{ $employee_list->employee_name}}" required>
                            <label class="form-label">Employee Name</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="employee_designation" value="{{ $employee_list->employee_designation}}"required>
                            <label class="form-label">Employee Designation</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="employee_address" value="{{ $employee_list->employee_address}}" required>
                            <label class="form-label">Employee Address</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="contact" value="{{ $employee_list->contact_information}}" required>
                            <label class="form-label">Contact Information</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" value="{{ $employee_list->email}}" required>
                            <label class="form-label">Email Address</label>
                        </div>
                    </div>
                    
                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea name="qualification" cols="30" rows="5" class="form-control no-resize" value="{{ $employee_list->qualification}}" required></textarea>
                            <label class="form-label">Educational Qualification</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea name="paddress" cols="30" rows="5" class="form-control no-resize" value="{{ $employee_list->paddress}}" required></textarea>
                            <label class="form-label">Parmanent Address</label>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <input type="radio" value="Male" name="gender" id="male" value="{{ $employee_list->gender}}" class="with-gap">
                        <label for="male">Male</label>

                        <input type="radio" value="female" name="gender" id="female" value="{{ $employee_list->gender}}" class="with-gap">
                        <label for="female" class="m-l-20">Female</label>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="age" value="{{ $employee_list->age}}" required>
                            <label class="form-label">Age</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" value="{{ $employee_list->password }}" required>
                            <label class="form-label">Password</label>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Picture</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" value="{{ $employee_list->image }}">
                  </div>
                    
                    <div class="form-group">
                        <input type="checkbox" id="checkbox" name="checkbox">
                        <label for="checkbox">I have read and accept the terms</label>
                    </div>
                    
                    <button class="btn btn-primary waves-effect" type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
