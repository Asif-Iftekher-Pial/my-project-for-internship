@extends('new_frontend.master_file.master')
@section('body_section')

    <div class="span9">

        <ul class="breadcrumb">
            <li><a href="{{ route('homepage') }}">Home</a> <span class="divider">/</span></li>
            <li class="active">Forget password?</li>
        </ul>
        <h3> FORGET YOUR PASSWORD?</h3>
        <hr class="soft">
        <form action="{{ route('submitpagelink') }}" method="POST">
            @csrf
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
                        Please enter the email address for your account. A verification code will be sent to you. Once you
                        have received the verification code, you will be able to choose a new password for your
                        account.<br><br><br>
                        <form>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail1">E-mail address</label>
                                <div class="controls">
                                    <input class="span3" name="email" type="text" id="inputEmail1" placeholder="Email">
                                </div>
                            </div>
                            <div class="controls">
                                <button type="submit" class="btn block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection
