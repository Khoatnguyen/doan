@extends('layout.main')
@section('content')
    <!-- login-->
    <div class="main">

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <form action="{{route('post.login')}}" method="POST">
                        @csrf()

                        <div class="login">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $err)
                                                        <li>{{$err}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">

                                    <div class="form-title">
                                        <h3> Login</h3>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                               aria-describedby="basic-addon1" name="name">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="password" aria-label="password"
                                               aria-describedby="basic-addon1" name="password">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1"> Remember me</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary send "> Login</button>

                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                                    <div class="image-login">
                                        <img src="image/signin-image.jpg">
                                    </div>
                                </div>

                            </div>


                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    </div>


    </div>
    <!-- endlogin-->

@endsection
