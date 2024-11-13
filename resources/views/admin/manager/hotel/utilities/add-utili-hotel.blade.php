@extends('admin.layout.main')
@section('content')
<div class="container-fluid" style="padding-top: 8rem">
    <h4>Thêm tiện ích cho khách sạn1 {{$dataTour->title}} </h4>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" name="id" value="{{$dataTour->id}}">
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Thêm icon:</span>
                <select class="form-control" name="myselect">
                @foreach ($dataUtilities as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Thêm tiện ích</button>
    </form>
</div>
@endsection