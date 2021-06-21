@extends('master')
@section('clean_dashboard_content')
<div class="body">
    <form action="{{ route('coupon_create') }}" method="POST" enctype="multipart/form-data">

        @csrf

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="coupon_code" required>
                <label class="form-label">Coupon Code</label>
            </div>
        </div>
        {{-- @dd($catagories->all()); --}}
        
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="discount" required>
                <label class="form-label">Discount</label>
            </div>
        </div>
        
        <button class="btn btn-primary waves-effect" type="submit">Create</button>
    </form>
</div>
    
@endsection