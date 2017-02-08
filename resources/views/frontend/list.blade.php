@extends('layouts.frontend')

@section('content')
<!-- begin content -->
<div id="content" class="content" style="background: #f7f8fa !important;">
    <!-- begin container -->
    <div class="container">
        <!-- begin row -->
        <div class="row row-space-30" style="margin: 50px 0 0 0">
            <!-- begin col-9 -->
            <div class="col-md-9">
                <!-- begin post-list -->
                <ul class="post-list">
                    @foreach($articles as $article)
                    <li style="border-left: 2px solid #ddd;">
                        <!-- begin post-left-info -->
                        <div class="post-left-info">
                            <div class="post-date">
                                <span class="day">{{date('d', strtotime($article->created_at))}}</span>
                                <span class="month">{{date('M', strtotime($article->created_at))}}</span>
                            </div>
                            <div class="post-likes">
                                <i class="glyphicon glyphicon-eye-open"></i>
                                <span class="number">520</span>
                            </div>
                        </div>
                        <!-- end post-left-info -->
                        <!-- begin post-content -->
                        <div class="post-content" style="background: #fff; box-shadow: 0px 2px 5px 3px #eff1f8;">
                            <h4 class="post-title" style="padding: 15px">
                                <a href="{{url('frontend/home/'.$article->id)}}">{{$article->title}}</a>
                            </h4>
                            @if($article->img_path)
                                <div class="post-image" style="left: 2%;">
                                    <a href="{{url('frontend/home/'.$article->id)}}">
                                        <img src="{{$article->img_path}}" width="96%" alt="{{$article->title}}">
                                    </a>
                                </div>
                            @endif
                            <!-- begin post-info -->
                            <div class="post-info">
                                <div class="post-desc" style="padding: 0 15px">
                                    {{$article->introduce}}
                                </div>
                                <div class="post-by" style="border-top: 2px solid #f7f8fa; padding: 20px;">
                                    <span>
                                        <i class="glyphicon glyphicon-tags"></i> &nbsp;
                                        @if($article->tags)
                                            @foreach($article->tags as $tag)
                                                <a href="#">{{$tag->name}} </a>
                                            @endforeach
                                        @endif
                                    </span>
                                    <span class="pull-right"><i class="glyphicon glyphicon-user"></i> &nbsp; admin</span>
                                </div>
                            </div>
                        </div>
                        <!-- end post-content -->
                    </li>
                    @endforeach
                </ul>
                <!-- end post-list -->

                <!-- begin pagination -->
                <div class="section-container" style="margin-bottom: 0px">
                    <div class="pagination-container text-center">
                        {{ $articles->links() }}
                    </div>
                </div>
                <!-- end pagination -->
            </div>
            <!-- end col-9 -->

            @include('frontend.side')

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end content -->
@endsection
