@extends('layout.main')
@section('content')
    <section class="banner">
        <div class="MuiBox-root jss4">
            <img style="height: 100%;object-fit: cover" src="https://storage.googleapis.com/public-tripi/tripi-feed/img/469564KIn/mte_1920x500h4.png" alt="">
        </div>
    </section>
    <div class="container">
        <div class="mt-3 mx-5">
            <div class="mt-4 ml-2 row flex-wrap">
            </div>
            <div class="row ml-2 mt-3">
                <div class="col-md-3" style="padding: 0">
                  <h3>Tìm kiếm</h3>
                    <div class="search-box" style="border-top: 1px solid #cccccc">
                        <div class="search-input">
                            <input id="search" name="search" class="search" style="margin-top: 1.5rem;height: 3rem; width: 100%" placeholder="Tìm kiếm">
                            <button type="button" style="margin-top: 1.5rem;background: #EC0072;color: #fff; width: 100%;font-size: 14px" class="btn">Tìm Kiếm</button>
                        </div>
                    </div>
                    <div class="price-ranger">
                        <div class="boy d-flex" style="margin-top: 3rem;">
                            <input class="filer-price" type="checkbox"  style="width: 2rem; height: 2rem; margin-right: 1rem"
                                   value="1">Tất cả
                        </div>
                        <div class="boy d-flex" style="margin-top: 3rem;color: #8C8C8C">
                            <input class="filer-price" type="checkbox" style="width: 2rem; height: 2rem; margin-right: 1rem"
                                   value="2">
                            Từ <h4 style="color: #000;font-weight: 600;padding-top: 0.15rem;padding-right: 0.5rem;padding-left: 0.5rem">0đ</h4> đến  <h4 style="color: #000;font-weight: 600;padding-top: 0.15rem;padding-right: 0.5rem;padding-left: 0.5rem">5,000,000 đ</h4>
                        </div>
                        <div class="boy d-flex" style="margin-top: 3rem;color: #8C8C8C">
                            <input class="filer-price" type="checkbox" style="width: 2rem; height: 2rem; margin-right: 1rem"
                                   value="3">
                            Từ <h4 style="color: #000;font-weight: 600;padding-top: 0.15rem;padding-right: 0.5rem;padding-left: 0.5rem">5,000,000đ</h4> đến  <h4 style="color: #000;font-weight: 600;padding-top: 0.15rem;padding-right: 0.5rem;padding-left: 0.5rem">10,000,000 đ</h4>
                        </div>
                        <div class="boy d-flex" style="margin-top: 3rem;color: #8C8C8C">
                            <input class="filer-price" type="checkbox" style="width: 2rem; height: 2rem; margin-right: 1rem"
                                   value="4">
                            Từ <h4 style="color: #000;font-weight: 600;padding-top: 0.15rem;padding-right: 0.5rem;padding-left: 0.5rem">10,000,000đ</h4> đến  <h4 style="color: #000;font-weight: 600;padding-top: 0.15rem;padding-right: 0.5rem;padding-left: 0.5rem">20,000,000 đ</h4>
                        </div>

                    </div>
                </div>
                <div class="col-md-9" style="flex:4">
                    <div id="list-show" class="row">
                    @foreach($detail_tour as $item )
                    <div class="col-md-4 pr-4 flex-wrap list-tour">
                            <a href="{{route('get.detail.tour',$item->id)}}">
                                <div class="item-plash">
                                    <div class="img-plash">
                                        @php
                                            $images= explode('|',$item->library_images);
                                        @endphp
                                            <img style="width: 468px;object-fit: contain"
                                                 src="{{\Illuminate\Support\Facades\Storage::url($images[0])}}" alt="">
                                    </div>
                                    <div style="padding: 5%">
                                        <h3 class="title-tour">{{$item->title}}</h3>
                                        <div class="location">
                                            <i class="fa fa-map-signs" aria-hidden="true"></i>
                                            {{$item->address}}
                                            <div class="price-plash row">
                                                <div class="col-md-8 d-flex" style="color:#ed407a; font-weight: 600; ">
                                                    <p>Từ:</p>
                                                    <div class="price-only">
                                                        {{$item->price}}đ
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn">Đăng ký</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    </div>
                    @endforeach
                    </div>
                        <div id="resultSearch" class="row">

                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection

