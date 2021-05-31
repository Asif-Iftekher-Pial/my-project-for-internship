@extends('master')
@section('clean_dashboard_content')


{{-- Employee Table End here --}}
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
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">


                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    
                    <thead>
                        <tr>
                            <td>SL</td>
                            <th>E_ID</th>
                            <th>Image</th>
                            <th>Employee_Name</th>
                            <th>Email</th>
                            <th>Login Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key=>$user )
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$user->user_id}}</td>
                                <td>
                                    <img width="150px" src="{{ '/uploaded_Images/employee_image/'.$user->image }}" alt="">
                                </td>
                                <td>{{$user->employeeDetail->name}}</td>           {{-- here employee_name is database column name --}}
                                <td>{{$user->employeeDetail->email}}</td>
                                <td>{{$user->status}}</td>
                                <td>
                                    <a class="btn btn-primary btn-xs"  href="{{ route('employee.view',$user->id) }}">View</a>
                                    @if (auth()->user()->role=='employee')
                                    <a class="btn btn-success btn-xs"  href="{{ Route('employee.edit',$user->id) }}">Update</a>
                                   
                                    @endif
                                    <a class="btn btn-danger btn-xs" onclick="return confirm('Are you sure Delete This Data?')"  href="{{ Route('employee.delete',$user->id ) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
             {{ $users->links() }}
            </div>
        </div>
    </div>
</div>





@endsection