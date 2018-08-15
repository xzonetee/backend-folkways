@extends('layouts.app')
@section('content')



<div class="container">
    <a href="{{ route('prices.create') }}" class="btn btn-success">create price</a>
    
    <div class="row">
        <div class="col-md-12">
          <div class="table-responsive text-center">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">ลำดับ</th>
                  <th class="text-center">ราคา</th>
                  <th class="text-center">preview</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($prices as $price)
                <tr>
                  <td>
                    {{ $price->id }}
                  </td>
                  <td>
                    {{ $price->name }}
                  </td>
                  <td>
                    <a href="{{ route('prices.show',$price->id)}}" class="btn btn-success">แสดงข้อมูล</a>
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