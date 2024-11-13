@extends('admin.layout.main')
@section('content')
<div class="container" style="padding-top: 8rem">
    <h4>Thêm quyền</h4>
    <form method="post" action="{{route('post.add.role')}}"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Tên quyền:</span>
                <input type="text" class="name" id="name" name="name" value=""
                    placeholder="Thêm tên quyền">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Thêm quyền</button>
    </form>
</div>
@endsection