<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="frontend/css/animate.css" rel="stylesheet">
    <link href="frontend/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Chào mừng đến với VINVP</h2>

                <p>
                    Tại VINVP, chúng tôi tự hào mang đến cho bạn giải pháp di chuyển hiện đại và bền vững với dịch vụ cho thuê xe điện chất lượng cao. Chúng tôi cung cấp một loạt các phương tiện điện thân thiện với môi trường, từ xe tay ga đến xe đạp điện, phù hợp với nhu cầu di chuyển hàng ngày của bạn.
                </p>

                <p>
                    Khám phá ngay dịch vụ cho thuê xe điện của VINVP và trải nghiệm di chuyển thông minh và tiện lợi hơn bao giờ hết. Hãy truy cập website của chúng tôi để tìm hiểu thêm và đặt xe cho chuyến đi của bạn!
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form method="post" class="m-t" role="form" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input 
                                type="" 
                                name="email" 
                                class="form-control" 
                                placeholder="Email"
                                value="{{ old('email') }}" 
                            >
                            @if($errors->has('email'))
                                <span class="error-message" style="color: red">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control" 
                                placeholder="Password"
                            >
                            @if($errors->has('password'))
                                <span class="error-message" style="color: red">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Đăng nhập</button>

                        <a href="#">
                            <small>Quên mât khẩu?</small>
                        </a>
                    </form>
                    <p class="m-t">
                        <small>Khóa luận tốt nghiệp khoa CNTT &copy; 2024 - 2025</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Phong Nguyễn
            </div>
            <div class="col-md-6 text-right">
               <small>© 2024-2025</small>
            </div>
        </div>
    </div>

</body>

</html>
