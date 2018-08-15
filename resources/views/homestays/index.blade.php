@extends('layouts.app')
@section('content')

<div class="container">

<a href="{{ route('homestays.create') }}" class="btn btn-success">create homestay</a>


<div class="row">
    <div class="col-md-12">
      <div class="table-responsive text-center">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center">ลำดับ</th>
              <th class="text-center">ชื่อ</th>
              <th class="text-center">แสดงข้อมูล</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($homestays as $homestay)
            <tr>
              <td>
                {{ $homestay->id }}
              </td>
              <td>
                {{ $homestay->name }}
              </td>
              <td>
                <a href="{{ route('homestays.show',$homestay->id)}}" class="btn btn-success">แสดงข้อมูล</a>
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