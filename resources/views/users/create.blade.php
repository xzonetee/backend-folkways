@extends('layouts.app')
@section('content')



<div class="container">
        <h1>hello create in user der</h1>

<form action="{{route('users.store')}}" method="POST">
        {{ csrf_field() }}
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> บันทึก</button>


<a href="{{ route('users.index') }}" class="btn btn-warning">back</a>



<form>
        <div class="form-group col-md-4">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
            
        </div>
        <div class="form-group col-md-4">
            <label>email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group col-md-4">
            <label>password</label>
            <input type="password" class="form-control" name="password">
        </div>
    </form>
</div>

@endsection