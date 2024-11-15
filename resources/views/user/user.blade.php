@extends('layout.main')
@section('content')
    <div class="container">
        <div class="ibox-body pb-5">
            <div class="row" style="border: 1px solid #E9E9E9">
                <div class="col-md-4 text-center justify-content-center avatar pb-3" style="border-right: 1px solid #E9E9E9">
                    <div class="mt-5 mb-3 ">
                        @if(  empty($getUser->user_info->avatar))
                            <img src="https://img.icons8.com/ios-filled/50/user.png" alt="">

                        @else
                            <img src="{{\Illuminate\Support\Facades\Storage::url($getUser->user_info->avatar)}}" alt="">
                        @endif
                    </div>
                    <button class="btn btn-danger px-4 py-2 rounded" style="font-size: 20px;cursor: pointer;font-weight: 500;" type="submit">
                        <a href="{{route('records')}}"> QUẢN LÝ HỒ SƠ</a></button>
                </div>
                <div class="col-md-8 border-left_gray p-0" >
                    <div style="border-bottom: 1px solid #E9E9E9">
                        <h3 class="mt-5 mb-4 pl-5 font-weight-bold text_red_custom ">{{$getUser->name}}</h3>
                        <p class="pl-5">
                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.8319 18.102L17.4649 14H15.9649L16.7979 18H2.13188L2.96488 14H1.46488L0.0968787 18.102C-0.250121 19.146 0.364879 20 1.46488 20H17.4649C18.5649 20 19.1799 19.146 18.8319 18.102ZM14.4649 5C14.4649 3.67392 13.9381 2.40215 13.0004 1.46447C12.0627 0.526784 10.791 0 9.46488 0C8.1388 0 6.86703 0.526784 5.92934 1.46447C4.99166 2.40215 4.46488 3.67392 4.46488 5C4.46488 9.775 9.46488 15 9.46488 15C9.46488 15 14.4649 9.775 14.4649 5ZM6.76488 5.06C6.76488 3.569 7.97288 2.361 9.46488 2.361C10.1808 2.361 10.8675 2.64541 11.3737 3.15167C11.88 3.65792 12.1644 4.34455 12.1644 5.0605C12.1644 5.77645 11.88 6.46308 11.3737 6.96933C10.8675 7.47559 10.1808 7.76 9.46488 7.76C8.74879 7.76 8.06204 7.47554 7.55569 6.96919C7.04934 6.46284 6.76488 5.77608 6.76488 5.06Z" fill="#EB5757"/>
                            </svg>
                            @if(  empty($getUser->user_info->address))
                                <span class="ml-3"></span>

                            @else
                                <span class="ml-3">{{$getUser->user_info->address}} </span>
                            @endif
                        </p>
                    </div>
                    <div>
                        <div class="row ml-5 mt-5">
                            <div class="col-md-3">
                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.8319 18.102L17.4649 14H15.9649L16.7979 18H2.13188L2.96488 14H1.46488L0.0968787 18.102C-0.250121 19.146 0.364879 20 1.46488 20H17.4649C18.5649 20 19.1799 19.146 18.8319 18.102ZM14.4649 5C14.4649 3.67392 13.9381 2.40215 13.0004 1.46447C12.0627 0.526784 10.791 0 9.46488 0C8.1388 0 6.86703 0.526784 5.92934 1.46447C4.99166 2.40215 4.46488 3.67392 4.46488 5C4.46488 9.775 9.46488 15 9.46488 15C9.46488 15 14.4649 9.775 14.4649 5ZM6.76488 5.06C6.76488 3.569 7.97288 2.361 9.46488 2.361C10.1808 2.361 10.8675 2.64541 11.3737 3.15167C11.88 3.65792 12.1644 4.34455 12.1644 5.0605C12.1644 5.77645 11.88 6.46308 11.3737 6.96933C10.8675 7.47559 10.1808 7.76 9.46488 7.76C8.74879 7.76 8.06204 7.47554 7.55569 6.96919C7.04934 6.46284 6.76488 5.77608 6.76488 5.06Z" fill="#EB5757"/>
                                </svg>
                                <span class="ml-3" style="font-size: 16px"> Địa chỉ:</span>
                            </div>
                            <div class="ml-4 col-md-8">
                                @if(  empty($getUser->user_info->address))
                                    <div class="" style="font-size: 16px"></div>

                                @else
                                    <div class="" style="font-size: 16px">{{$getUser->user_info->address}}</div>
                                @endif

                            </div>
                        </div>
                        <div class="row ml-5 mt-4">
                            <div class="col-md-3">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5229 4.47715 20 10 20C15.5229 20 20 15.5229 20 10C20 4.47715 15.5229 0 10 0ZM6.40625 3.97217C6.61228 3.96002 6.79852 4.08317 6.9397 4.30175L8.30688 6.89452C8.45083 7.20175 8.36903 7.53072 8.1543 7.75023L7.52808 8.37645C7.48943 8.42942 7.464 8.48907 7.46338 8.55467C7.70353 9.48425 8.432 10.3417 9.07473 10.9314C9.71743 11.5211 10.4082 12.3194 11.3049 12.5085C11.4158 12.5395 11.5516 12.5505 11.6309 12.4768L12.3584 11.7359C12.6095 11.5455 12.9728 11.4533 13.241 11.6089H13.2532L15.7202 13.0652C16.0823 13.2922 16.1198 13.7309 15.8606 13.9978L14.1614 15.6836C13.9104 15.9409 13.5771 16.0275 13.2532 16.0278C11.8207 15.9849 10.4672 15.2819 9.3555 14.5593C7.53067 13.2318 5.85678 11.5852 4.80592 9.59595C4.40288 8.76178 3.92943 7.69745 3.97462 6.76638C3.97865 6.41612 4.07342 6.07297 4.32008 5.8472L6.0193 4.14798C6.15167 4.03535 6.28262 3.97947 6.40625 3.97217Z" fill="#EB5757"/>
                                </svg>
                                <span class="ml-3" style="font-size: 16px"> Số điện thoại:</span>
                            </div>
                            <div class="ml-4 col-md-8">
                                @if(  empty($getUser->user_info->phone))
                                    <div class="" style="font-size: 16px"></div>
                                @else
                                    <div class="" style="font-size: 16px">{{$getUser->user_info->phone}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row ml-5 mt-4">
                            <div class="col-md-3">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 0H2.5C1.83718 0.000694155 1.2017 0.258784 0.733016 0.717638C0.264329 1.17649 0.000709029 1.79863 0 2.44755V12.9371C0.000709029 13.586 0.264329 14.2081 0.733016 14.667C1.2017 15.1258 1.83718 15.3839 2.5 15.3846H17.5C18.1628 15.3839 18.7983 15.1258 19.267 14.667C19.7357 14.2081 19.9993 13.586 20 12.9371V2.44755C19.9993 1.79863 19.7357 1.17649 19.267 0.717638C18.7983 0.258784 18.1628 0.000694155 17.5 0ZM16.867 4.04851L10.4384 8.94362C10.313 9.03903 10.1588 9.09082 10 9.09082C9.84122 9.09082 9.68696 9.03903 9.56161 8.94362L3.13304 4.04851C3.05751 3.99267 2.99407 3.92269 2.9464 3.84264C2.89873 3.76259 2.86779 3.67406 2.85538 3.58219C2.84296 3.49033 2.84932 3.39697 2.87408 3.30754C2.89884 3.2181 2.9415 3.13438 2.9996 3.06122C3.05769 2.98807 3.13006 2.92695 3.21249 2.88142C3.29492 2.83589 3.38577 2.80684 3.47977 2.79598C3.57376 2.78512 3.66903 2.79266 3.76002 2.81815C3.85102 2.84365 3.93593 2.88659 4.00982 2.94449L10 7.50568L15.9902 2.94449C16.14 2.83375 16.3283 2.78518 16.5143 2.80929C16.7004 2.83339 16.8693 2.92823 16.9845 3.07331C17.0997 3.21838 17.152 3.40202 17.13 3.58451C17.108 3.76701 17.0135 3.93369 16.867 4.04851Z" fill="#EB5757"/>
                                </svg>
                                <span class="ml-3" style="font-size: 16px"> Email:</span>
                            </div>
                            <div class="ml-4 col-md-8">
                                <div class="" style="font-size: 16px">{{$getUser->email}}</div>
                            </div>
                        </div>
                        <div class="row ml-5 mt-4 mb-5">
                            <div class="col-md-3">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.7778 0H2.22222C0.996667 0 0 0.996667 0 2.22222V17.7778C0 19.0033 0.996667 20 2.22222 20H17.7778C19.0033 20 20 19.0033 20 17.7778V2.22222C20 0.996667 19.0033 0 17.7778 0ZM8.96333 14.9789L4.77 10.7856L6.34111 9.21445L8.81444 11.6878L13.5911 5.95556L15.2989 7.37778L8.96333 14.9789Z" fill="#EB5757"/>
                                </svg>
                                <span class="ml-3" style="font-size: 16px">Verification Status:</span>
                            </div>
                            <div class="ml-4 col-md-8">
                                <div class="text_red_custom font-weight-bold" style="font-size: 16px">Yes</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


