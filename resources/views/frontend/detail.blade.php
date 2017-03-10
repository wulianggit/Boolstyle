@extends('layouts.frontend')
@section('css')
    <link rel="stylesheet" href="{{asset('frontend/css/markdown-glup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/monokai-sublime.css')}}">
@endsection
@section('content')
<div id="content" class="content" style="background: #f7f8fa !important;">
    <div class="container" style="margin-top: 100px;;">
        <!-- begin row -->
        <div class="row row-space-30" style="margin-top: 20px;">
            <!-- begin col-9 -->
            <div class="col-md-9">
                <!-- begin post-detail -->
                <div class="post-detail section-container">
                    <h4 class="post-title" style="margin-bottom: 10px;">
                       {{$article['title']}}
                    </h4>
                    <div class="post-by">
                        发布时间: </span> {{$article['created_at']}}<span class="divider">|
                        文章标签:
                            @foreach($article['tags'] as $key => $val)
                                 <a href="{{url('frontend/tag/'.$key)}}">{{$val}}</a>
                            @endforeach
                        </span>
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
