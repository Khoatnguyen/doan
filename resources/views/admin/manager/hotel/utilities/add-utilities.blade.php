@extends('admin.layout.main')
@section('content')
    <div class="container" style="padding-top: 8rem">
        <h4>Thêm tiện ích </h4>
        <form method="post" action="{{route('add.utilities',$dataTour->id)}}"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{$dataTour->id}}">
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Thêm tên tiện ích:</span>
                    <input type="text" class="name" id="name" name="name" value=""
                           placeholder="Thêm tên tiện ích">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Thêm icon:</span>
                    <input type="file" name="icon[]" multiple id="exampleInputFile">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Thêm tiện ích</button>
        </form>
    </div>
@endsection
