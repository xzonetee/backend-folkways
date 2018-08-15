@extends('layouts.app')
@section('content')

<div class="container">
<form enctype="multipart/form-data" action="{{route('homestays.store')}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <select class="form-control" name="province_id">
            <option>เลือกจังหวัด</option>
            @foreach($provinces as $province)
        <option value="{{ $province->id }}">{{ $province->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>ชื่อ</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>ราคา</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label>กิจกรรม</label>
        <textarea class="form-control" name="activity" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>สถานที่ท่องเที่ยวใกล้เคียง</label>
        <textarea class="form-control" name="nearby" rows="5"></textarea>
    </div>
    <h1><strong>ช่องทางการติดต่อ</strong></h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" name="nametel">
            </div>
            <div class="form-group">
                <label>โทรศัพท์</label>
                <input type="text" class="form-control" name="tel">
            </div>
            <div class="form-group">
                <label>อีเมล์</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>เว็บไซต์</label>
                <input type="text" class="form-control" name="website">
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" name="image1">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" name="image2">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>

          
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> บันทึก</button>
        <a href="{{ route('homestays.index') }}" class="btn btn-warning">back</a>
</div>

</form>











@endsection