@extends('layouts.app')
@section('content')


    <form action="{{route('provinces.store')}}" method="POST">
    {{ csrf_field() }}
    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> บันทึก</button>


    <a href="{{ route('provinces.index') }}" class="btn btn-warning">back</a>

    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
    </div>
    
    

    </form>

@endsection