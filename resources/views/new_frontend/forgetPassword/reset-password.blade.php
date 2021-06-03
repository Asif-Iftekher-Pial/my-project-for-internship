@extends('new_frontend.master_file.master')
@section('body_section')

    <div class="span9">

        <ul class="breadcrumb">
            <li><a href="{{ route('homepage') }}">Home</a> <span class="divider">/</span></li>
            <li class="active">Forget password?</li>
        </ul>
        <h3> FORGET YOUR PASSWORD?</h3>
        <hr class="soft">
        
            
            <div class="row">
                <div class="span9" style="min-height:900px">

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    <div class="well">

                        <h5>Reset your password</h5><br>
                        Please  choose a new password for your
                        account.<br><br><br>
                        <form action="{{ route('password.reset.post') }}" method="post">
                            @csrf
                            <div class="control-group">
                                <label class="control-label" for="password">Enter New Passowrd</label>
                                <div class="controls">
                                     <input required name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <label class="control-label" for="password">Confirm Passowrd</label>
                                <div class="controls">
                                    <input required name="password_confirmation" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                            </div>
                            <input type="hidden" value="{{ $token }}" name="token">
                            <input type="hidden" value="{{ $email }}" name="email">

                            <div class="controls">
                                <button type="submit" class="btn block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        

    </div>

@endsection
