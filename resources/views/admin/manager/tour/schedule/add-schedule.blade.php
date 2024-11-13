@extends('admin.layout.main')
@section('content')
    <div class="container" style="padding-top: 8rem">
        <h4>Thêm lịch trình tour {{$dataTour->title}}  </h4>
        <form method="post" action="{{route('post.schedule',$dataTour->id)}}" >
            @csrf
            <div class="row">
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Tiêu đề:</span>
                    <input type="text" class="title" id="title" name="title" value=""
                           placeholder="Thêm tiêu đề cho bài viết">
                           @error('title')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giới thiệu:</span>
                           <textarea id="description" class="description" name="description"
                    placeholder="Thêm giới thiệu">
                                </textarea>
                           @error('description')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
               
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Thêm lịch trình</button>
        </form>
    </div>
@endsection
