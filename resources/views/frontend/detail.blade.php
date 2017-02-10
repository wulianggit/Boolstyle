@extends('layouts.frontend')
@section('css')
    <link rel="stylesheet" href="{{asset('frontend/css/markdown-glup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/monokai-sublime.css')}}">
@endsection
@section('content')
<div id="content" class="content" style="background: #f7f8fa !important;">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sports</a></li>
            <li class="active">Bootstrap Carousel Blog Post</li>
        </ul>
        <!-- begin row -->
        <div class="row row-space-30">
            <!-- begin col-9 -->
            <div class="col-md-9">
                <!-- begin post-detail -->
                <div class="post-detail section-container">
                    <h4 class="post-title">
                        <a href="post_detail.html">Bootstrap Carousel Blog Post</a>
                    </h4>
                    <div class="post-by">
                        Posted By <a href="#">admin</a> <span class="divider">|</span> 10 June 2015 <span class="divider">|</span> <a href="#">Sports</a>, <a href="#">Mountain</a>, <a href="#">Bike</a> <span class="divider">|</span> 2 Comments
                    </div>

                    <div class="markdown-body">
                       {!! $article['content_html'] !!}
                    </div>
                    <div id="SOHUCS" sid="{{$article['id']}}"></div>
                </div>
                <!-- end post-detail -->
            </div>
            <!-- end col-9 -->
            @include('frontend.side')
        </div>
        <!-- end row -->
    </div>
</div>
@endsection

@section('js')
    <script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
    <script src="{{url('/frontend/js/highlight.pack.js')}}"></script>
    <script>
        hljs.initHighlighting();
        window.changyan.api.config({
            appid: 'cysNNkQol',
            conf: 'prod_b43cadf588d43b45ff6349aa96644a6b'
        });
    </script>
@endsection
