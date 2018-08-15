@extends('layouts.app')
@section('content')



<div class="container">
    <a href="{{ route('provinces.create') }}" class="btn btn-success">create province</a>
    <a href="{{ route('provinces.index') }}" class="btn btn-warning">back</a>
    <div class="row">
        <div class="col-md-12">
          <div class="table-responsive text-center">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">ลำดับ</th>
                  <th class="text-center">ชื่อ</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    {{ $province->id }}
                  </td>
                  <td>
                    {{ $province->name }}
                  </td>
                  <td>
                    <form method="post" class="delete_form" action="{{ action('ProvinceController@destroy',$province['id']) }}">{{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection