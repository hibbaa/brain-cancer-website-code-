@include('include.head');
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>سرطان الدماغ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), 
                url("images/backgroundcancer.jpg");
               background-repeat: no-repeat;
               background-size:100% 100%;
               background-attachment:fixed;
                color:#ECF0F1  ;
                font-family: 'Muli', sans-serif;
                height: 100vh;
                margin: 0;
              

            }

            .full-height {
                height: 100vh;
                
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
               
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
                 color: #DC7633;
                 font-weight:bold;
            }
        
            .links > a {
                color:white;
                padding: 30px 30px;
                font-size: 20px;
                letter-spacing: .1rem;
                text-decoration: none;
               text-align:center;               
            }

           .bt {
            background-color: #DC7633 ;
            padding: 10px 40px;
            font-size:30px;
            border: white;
            margin-top:25px;
           }
        
           p {
             font-size:25px;
             color:#EAEDED ;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">الصفحة الرئيسية</a>
                    @else
                        <a href="{{ url('/login') }}">تسجيل دخول</a>
                        <a href="{{ url('/register') }}">أنشاء حساب</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title">
                   <marquee   >  (Brain Cancer)  سرطان الدماغ   </marquee>
               </div>
                        <p>
                          يعني تكاثر خلايا غير طبيعية (شاذة) في أنسجة المخ
                        </p>
               

                <div class="links">
                <!-- <button type="button" class="btn btn-warning">أقرأ المزيد</button> -->
                <a href="home" > <button class="bt" type="button"> أقرا المزيد</button></a>


                </div>
            </div>
        </div>
    </body>
</html>
