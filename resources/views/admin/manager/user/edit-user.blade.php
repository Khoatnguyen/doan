@extends('admin.layout.main')
@section('content')
    <div class="container" style="padding-top: 8rem">
        <h4 style="padding-bottom: 2rem">Chỉnh sửa thông tin người dùng</h4>
        <form action="{{route('post.edit.user',$user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Họ tên:</span>
                    <input type="text" class="name" id="edit-name" name="full_name" value=""
                           placeholder="{{$user->user_info->full_name}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giới tính:</span>
                    <div class="boy">
                        <input type="checkbox" checked name="gender"
                            value="1" {{ isset($user->user_info->gender) && $user->user_info->gender == 1 ?  "checked" : ""}}>Nam
                    </div>

                    <div class="girl">
                        <input type="checkbox" name="gender"
                            value="2" {{isset($user->user_info->gender)&& $user->user_info->gender == 2 ? "checked":""}}>Nữ
                    </div>
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Địa chỉ:</span>
                    <input type="text" class="address" id="edit-address" name="address" value="" placeholder="{{$user->user_info->address}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Số điện thoại:</span>
                    <input type="text" class="phone" id="edit-phone" name="phone" value="" placeholder="{{$user->user_info->phone}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Email:</span>
                    <input type="text" class="email" id="edit-email" name="email" value="" placeholder="{{$user->email}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <div class="form-group">
                        <label style="padding-bottom:1rem ;" for="exampleFormControlSelect1">Quyền</label>
                        <select name="role_id" class="form-control">
                            @foreach ($role as $item)
                            <option  value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                     </select>
                    </div>
                </div> 
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Thêm ảnh:</span>
                    <input type="file" name="library_images[]" multiple id="exampleInputFile">
                </div>
        
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Sửa người dùng</button>
        </form>
    </div>
@endsection
