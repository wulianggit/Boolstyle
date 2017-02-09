<head>
    <meta charset="utf-8" />
    <title>冷无缺的Blog</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="i冷无缺博客记录PHP学习以及实际工作中的问题" name="description" />
    <meta content="i冷无缺,博客,laravel,PHP,学习笔记" name="keywords" />
    <meta content="boolstyle.xin" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('frontend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/style-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/theme/default.css')}}" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    @yield('css')

</head>

<body class="pace-done">

    @include('layouts.menu')

    <div id="page-title" class="page-title has-bg">
        <div class="bg-cover">
            <img src="{{asset('frontend/img/cover2.jpg')}}" alt="背景" />
        </div>
        <div class="container">
            <p>Blog Concept Front End Page</p>
            <h1>Official Color Admin Blog</h1>
        </div>
    </div>

    @yield('content')

    @include('layouts.footer')

    <div id="footer-copyright" class="footer-copyright">
        <div class="container" style="text-align: center">
            <span class="copyright">© 2017 冷无缺 All Right Reserved | 陇ICP备17000438号-1 | 博客 | 技术</span>
        </div>
    </div>


    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('frontend/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('frontend/js/apps.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <!-- ================== END BASE JS ================== -->
    @yield('js')
</body>

