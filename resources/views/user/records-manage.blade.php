@extends('layout.main')
@section('content')
    <div class="container record-manage">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-1">Quản lý hồ sơ</h3>
                @if(  empty($getUser->user_info->avatar))
                    <img src="https://img.icons8.com/ios-filled/50/user.png" alt="">

                @else
                    <img style="height: 189px; width: 189px;object-fit: cover;border-radius: 50%" src="{{\Illuminate\Support\Facades\Storage::url($userInfo->avatar)}}" alt="">
                @endif
                @if(  empty($userInfo->full_name))
                    <h4 class="text-2"></h4>
                @else
                    <h4 class="text-2">{{$userInfo->full_name}}</h4>
                @endif
                <button type="button" class="btn">
                    <a style="color: #ffffff;list-style: none" href="{{route('user')}}">Quay lại hồ sơ</a></button>

                <div class="change-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                   data-toggle="list" href="#list-home" role="tab" aria-controls="home">Thông tin cá
                                    nhân</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list"
                                   data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Đổi mật
                                    khấu</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list"
                                   data-toggle="list" href="#list-messages" role="tab"
                                   aria-controls="messages">Messages</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list"
                                   data-toggle="list" href="#list-settings" role="tab"
                                   aria-controls="settings">Settings</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                     aria-labelledby="list-home-list" style="border: 1px solid rgba(0,0,0,.125);">
                                            <form method="post" action="{{route('post.update-user')}}" enctype="multipart/form-data">
                                                @csrf
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td class="col-md-4 bdn">Tên người dùng:</td>
                                                        <td>
                                                            <input type="text" name="name"
                                                                   value="{{isset($userInfo->user->name) ? $userInfo->user->name : ""}}" placeholder="{{isset($userInfo->user->name) ? $userInfo->user->name : ""}}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-md-4 bdn">Họ và tên:</td>
                                                        <td>
                                                            <input type="text" name="full_name"
                                                                   value="{{isset($userInfo->full_name)?$userInfo->full_name : ""}}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bdn">Giới tính:</td>
                                                        <td>

                                                                    <div class="boy">
                                                                        <input type="checkbox" checked name="gender"
                                                                               value="1" {{ isset($userInfo->gender) && $userInfo->gender == 1 ?  "checked" : ""}}>Nam
                                                                    </div>

                                                                    <div class="girl">
                                                                        <input type="checkbox" name="gender"
                                                                               value="2" {{isset($userInfo->gender)&& $userInfo->gender == 2 ? "checked":""}}>Nữ
                                                                    </div>


                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bdn">Ảnh đại diện:</td>
                                                        <td>
                                                            <input type="file" name="avatar"
                                                                   value="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bdn">Email:</td>
                                                        <td>
                                                            <input type="email" name="email"
                                                                   value="{{isset($userInfo->user->email)?$userInfo->user->email: ""}}" placeholder="{{isset($userInfo->user->email)?$userInfo->user->email: ""}}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bdn">Số điện thoại:</td>
                                                        <td>
                                                            <input type="number" name="phone"
                                                                   value="{{isset($userInfo->phone)?$userInfo->phone :""}}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bdn">Địa chỉ:</td>
                                                        <td>
                                                            <input type="text" name="address"
                                                                   value="{{isset($userInfo->address)?$userInfo->address:""}}">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <button type="submit" class="btn" style="margin: 2rem">Lưu hồ sơ
                                                </button>
                                            </form>
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                     aria-labelledby="list-profile-list">...
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                     aria-labelledby="list-messages-list">...
                                </div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                     aria-labelledby="list-settings-list">...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
