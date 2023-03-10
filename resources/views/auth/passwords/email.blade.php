<!DOCTYPE html>
<html>

<head>
<title>เปลี่ยนรหัสผ่าน</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/logo1.1.png">
    <style>
        body,
        h1 {
            font-family: "Raleway", sans-serif
        }

        body,
        html {
            height: 100%
        }

        .bgimg {
            background-image: url('/images/banner-bg.png');
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>

    <div class="bgimg w3-display-container w3-animate-opacity">
        <div class="w3-display-topleft w3-padding-large w3-xlarge bg-white">
            Reset password
        </div> 
        
        <br>  <br>  <br>  <br>  <br>
        <div class="container">
            <a class="w3-btn w3-round-xlarge w3-white" href="{{ url('/login') }}">ไปยังหน้าแรก</a>
            <div class="row justify-content-center">
                <div class="card o-hidden border-0 shadow-lg my-5 bg-white">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                       

                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"><img class="w3-image" src="/images/1.png" alt="student dp" width="400" height="450"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                    <div class="text-center">
                                        <h1 class="row mb-0 mb-4">{{ __('กรอกอีเมลเพื่อเปลี่ยนรหัสผ่าน') }}</h1>
                                       


                                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('กรอกอีเมล์') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ส่งลิงค์ เพื่อเปลี่ยนรหัสผ่าน') }}
                                </button>
                            </div>
                        </div>
                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>