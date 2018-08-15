@extends('layouts.app')
@section('content')



<div class="container">
    <a href="{{ route('provinces.create') }}" class="btn btn-success">create province</a>
    
    <div class="row">
        <div class="col-md-12">
          <div class="table-responsive text-center">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">ลำดับ</th>
                  <th class="text-center">ชื่อ</th>
                  <th class="text-center">preview</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($provinces as $province)
                <tr>
                  <td>
                    {{ $province->id }}
                  </td>
                  <td>
                    {{ $province->name }}
                  </td>
                  <td>
                    <a href="{{ route('provinces.show',$province->id)}}" class="btn btn-success">แสดงข้อมูล</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



@endsection