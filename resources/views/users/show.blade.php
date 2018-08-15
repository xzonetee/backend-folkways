@extends('layouts.app')
@section('content')

<div class="container">
<h1>Show ID</h1>
<a href="{{ route('users.edit',$user->id)}}" class="btn btn-warning">แก้ไข</a>
<a href="{{ route('users.index') }}" class="btn btn-success">back</a>

<form method="post" class="delete_form" action="{{ action('UserController@destroy',$user['id']) }}">{{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE" />
    <button type="submit" class="btn btn-danger">DELETE</button>
</form>

        <div class="row">
            <div class="col-md-12">
                <label>Name : {{ $user->name }}</label>
            </div>
            <div class="col-md-12">
                <label>email : {{ $user->email }}</label>
            </div>
            <div class="col-md-12">
                <label>password : {{ $user->password }}</label>
            </div>
        </div>
</div>







@endsection