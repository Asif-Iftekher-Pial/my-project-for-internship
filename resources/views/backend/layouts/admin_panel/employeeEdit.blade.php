@extends('master')
@section('clean_dashboard_content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Profile Update Form</h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                    <form action="{{ route('profileupdate') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        {{-- @dd($employee_list); --}}
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="employee_address"
                                    value="{{ $data->employee_address }}" required>
                                <label class="form-label">Employee Address</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="contact_information"
                                    value="{{ $data->contact_information }}" required>
                                <label class="form-label">Employee Contact</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="qualification"
                                    value="{{ $data->qualification }}" required>
                                <label class="form-label">Employee Qualification</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="paddress"
                                    value="{{ $data->paddress }}" required>
                                <label class="form-label">Permanent Address</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="Male" name="gender" id="male" value="{{ $data->employee_gender }}"
                                class="with-gap">
                            <label for="male">Male</label>

                            <input type="radio" value="female" name="gender" id="female"
                                value="{{ $data->employee_gender }}" class="with-gap">
                            <label for="female" class="m-l-20">Female</label>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="age" value="{{ $data->age }}"
                                    required>
                                <label class="form-label">Age</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Picture</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"
                                value="{{ $data->image }}">
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
