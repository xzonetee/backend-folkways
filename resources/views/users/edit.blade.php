@extends('layouts.app')
@section('content')

<div class="container">
<h1>edit jaaaaa</h1>

<form action="{{route('users.update', $user->id)}}" method="POST">
        {{ csrf_field() }} {{ method_field('PUT') }}
      
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> บันทึก</button>
        <a href="{{route('users.show', $user->id)}}" class="btn btn-warning"><i class="fa fa-undo"></i> ย้อนกลับ</a>
      
        <hr class="m-t-0">
      
        <h1><strong>รายละเอียดสาขา:</strong></h1>
      
        <div class="col-md-12">
          <div class="col-md-4 mb-1">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
          </div>
        </div>
      
        <div class="col-md-12">
          <div class="col-md-4 mb-1">
            <label>email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
          </div>
        </div>

        {{-- <div class="col-md-12">
            <div class="col-md-4 mb-1">
                <label>password</label>
                <input type="password" class="form-control" name="password" value="{{ $user->password }}" required>
            </div>
        </div> --}}

        <div class="form-row">
            <div class="col-md-12">
                <div class="radio">
                    <div class="col-md-12 mt-1">
                        <label><input type="radio" name="password_options" value="keep"> Do Not Change Password</label><br>
                        <label>
                            <input type="radio" name="password_options" value="manual">
                                Manually Set New Password
                            <input type="text" class="form-control input mt-1" name="password" id="password" if="password_options == 'manual'" placeholder="Manually give a password to this user">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="form-row">
            <div class="col-md-12 mb-1">
                <h1><strong>Role:</strong></h1>
                @foreach ($roles as $role)
                <div class="checkbox">
                    <label><input type="checkbox" {{ $user->hasRole($role->name) == true ? "checked" : "" }} name="role[]" value="{{ $role->name }}">{{$role->display_name}}</label>
                </div>
                @endforeach
            </div>
        </div>


      </form>
    </div>


@endsection