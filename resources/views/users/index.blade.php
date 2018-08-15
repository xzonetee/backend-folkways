@extends('layouts.app')
@section('content')
<div class="container">

<h1>User เด้อ</h1>
<a href="{{ route('users.create') }}" class="btn btn-success">create</a>
<a href="{{ url('/') }}" class="btn btn-warning">back</a>

<div class="row">
        <div class="col-md-12">
          <div class="table-responsive text-center">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">ลำดับ</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">email</th>
                  <th class="text-center">password</th>
                  <th class="text-center">แสดงข้อมูล</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($users as $user)
                    <tr>
                <td>
                    {{ $user->id}}
                </td>
                <td>
                    {{ $user->name}}
                </td>
                <td>
                    {{ $user->email}}
                </td>
                <td>
                    {{ $user->password}}
                </td>
                <td>
                        <a href="{{ route('users.show',$user->id)}}" class="btn btn-success">ดู</a>
                        
                        
                </td>
            </tr>
            @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>












@endsection