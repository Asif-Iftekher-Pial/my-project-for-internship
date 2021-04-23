@extends('master')
@section('clean_dashboard_content')
    
<!-- CREATE catagory form -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>CREATE CATAGORY</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form action="{{ Route('catagory_crate') }}" method="POST">

                    @csrf

                    {{-- <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="catagoryid" required>
                            <label class="form-label">Catagory ID</label>
                        </div>
                    </div> --}}
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="catagoryname" required>
                            <label class="form-label">Catagory Name</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                            <label class="form-label">Description</label>
                        </div>
                    </div>

                    
                    <button class="btn btn-primary waves-effect" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# product form  -->





<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                   <b>Catagory LIst</b> 
                   
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            {{-- <th>Catagory_ID</th> --}}
                            <th>Catagory Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($catagory_list as $key=>$data)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            {{-- <td>{{ $data->catagoryid }}</td> --}}
                            <td>{{ $data->catagoryname }}</td>
                            <td>{{ $data->description }}</td>
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection