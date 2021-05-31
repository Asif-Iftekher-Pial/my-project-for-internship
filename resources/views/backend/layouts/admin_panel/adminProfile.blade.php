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
                                src="{{ '/uploaded_Images/employee_image/' . $employees->image }}"
                                alt="AdminBSB - Profile Image" />
                        </div>
                        <div class="content-area">
                            <h3>{{ $users->name }}</h3>
                            <p>{{ $users->email }}</p>
                            <p>{{ $users->role }}</p>
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
                                    {{ $employees->qualification }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">location_on</i>
                                    Location
                                </div>
                                <div class="content">
                                    {{ $employees->employee_address }}
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
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                {{-- @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif --}}
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger d-flex justify-content-between">{{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                        data-toggle="tab">Basic Information</a></li>
                                <li role="presentation"><a href="#change_password_settings" aria-controls="settings"
                                        role="tab" data-toggle="tab">Change Password</a></li>
                            </ul>

                            <div class="tab-content">
                               
                                <div role="tabpanel" class="tab-pane fade in active" id="home">


                                    <div class="card-body bg-light ">
                                        <div class="row">
                                            <hr>
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $users->name }}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $users->email }}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Contact No </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $employees->contact_information }}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Gender</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $employees->employee_gender }}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Parmanent Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <td>{{ $employees->paddress }}</td>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Salary</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $employees->salary }} BDT
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Joined Date</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $employees->created_at }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-5 col-sm-9">
                                                <a href="{{ route('editProfile') }}" class="btn btn-success btn-xs" >Edit Profile</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                    <form method="post" action="{{ route('passwordupdate', $employees['id']) }}" class="form-horizontal">

                                        @csrf
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
                                                <button type="submit" class="btn btn-danger btn-xs">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
