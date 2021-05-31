@extends('master')
@section('clean_dashboard_content')

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-3">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img width="150px" height="150px"
                                src="{{ '/uploaded_Images/employee_image/' . $employee_list->image }}"
                                alt="AdminBSB - Profile Image" />
                        </div>
                        <div class="content-area">
                            <h3>{{ $employee_list->employeeDetail->name }}</h3>
                            <p>{{ $employee_list->employeeDetail->email }} </p>
                            <p>{{ $employee_list->employeeDetail->role }}</p>
                        </div>
                    </div>

                </div>

                <div class="card card-about-me">
                    <div class="header">
                        <h2>ABOUT</h2>
                    </div>
                    <div class="body">
                        <ul>
                            <li>
                                <div class="title">
                                    <i class="material-icons">library_books</i>
                                    Education
                                </div>
                                <div class="content">
                                    {{ $employee_list->qualification }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">location_on</i>
                                    Location
                                </div>
                                <div class="content">
                                    {{ $employee_list->employee_address }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">edit</i>
                                    Skills
                                </div>
                                <div class="content">
                                    <span class="label bg-red">UI Design</span>
                                    <span class="label bg-teal">JavaScript</span>
                                    <span class="label bg-blue">PHP</span>
                                    <span class="label bg-amber">Node.js</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                        data-toggle="tab">Basic Information</a></li>
                                <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab"
                                        data-toggle="tab">Profile Settings</a></li>
                                <li role="presentation"><a href="#change_password_settings" aria-controls="settings"
                                        role="tab" data-toggle="tab">Change Password</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div class="panel panel-default panel-post">
                                        <div class="body table-responsive">
                                            <table
                                                class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                                <thead>
                                                    <tr>
                                                        <th>E_ID</th>
                                                        <th>Contact Information</th>
                                                        <th>Parmanent Addesee</th>
                                                        <th>Age</th>
                                                        <th>Gender</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <td>{{ $employee_list->user_id }}</td>
                                                    <td>{{ $employee_list->contact_information }}</td>
                                                    <td>{{ $employee_list->paddress }}</td>
                                                    <td>{{ $employee_list->age }}</td>
                                                    <td>{{ $employee_list->employee_gender }}</td>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                @if (auth()->user()->role == 'employee')


                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-2 control-label">Old Password</label>
                                                <div class="col-sm-8">
                                                    <li class="list-group-item">Cras justo odio</li>
                                                </div>
                                                <label for="OldPassword" class="col-sm-2 control-label">Old Password</label>
                                                <div class="col-sm-8">
                                                    <li class="list-group-item">Cras justo odio</li>
                                                </div>
                                                <label for="OldPassword" class="col-sm-2 control-label">Old Password</label>
                                                <div class="col-sm-8">
                                                    <li class="list-group-item">Cras justo odio</li>
                                                </div>
                                                <label for="OldPassword" class="col-sm-2 control-label">Old Password</label>
                                                <div class="col-sm-8">
                                                    <li class="list-group-item">Cras justo odio</li>
                                                </div>
                                                <label for="OldPassword" class="col-sm-2 control-label">Old Password</label>
                                                <div class="col-sm-8">
                                                    <li class="list-group-item">Cras justo odio</li>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="OldPassword"
                                                            name="OldPassword" placeholder="Old Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword"
                                                            name="NewPassword" placeholder="New Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password
                                                    (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm"
                                                            name="NewPasswordConfirm" placeholder="New Password (Confirm)"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
