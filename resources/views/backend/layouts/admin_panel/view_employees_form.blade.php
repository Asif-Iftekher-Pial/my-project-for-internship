@extends('master')
@section('clean_dashboard_content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Employee Registration Form</h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                    <form action="{{ route('savedform') }}" method="post" enctype="multipart/form-data">

                        @csrf


                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="employee_name" required>
                                <label class="form-label">Employee Name</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="employee_address" required>
                                <label class="form-label">Employee Address</label>
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

                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="qualification" cols="30" rows="5" class="form-control no-resize"
                                    required></textarea>
                                <label class="form-label">Educational Qualification</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="paddress" cols="30" rows="5" class="form-control no-resize"
                                    required></textarea>
                                <label class="form-label">Parmanent Address</label>
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
                                <input type="text" class="form-control" name="age" required>
                                <label class="form-label">Employee Age</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="salary" required>
                                <label class="form-label">Salary</label>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Profile Picture</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
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
