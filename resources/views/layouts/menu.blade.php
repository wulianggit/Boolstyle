
<div id="header" class="header navbar navbar-transparent navbar-fixed-top">
    <!-- begin container -->
    <div class="container">
        <!-- begin navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">
                <span class="brand-logo"></span>
                <span class="brand-text">包饺子</span>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- begin navbar-collapse -->
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}">Home</a></li>
                @if($navs)
                    @foreach($navs as $nav)
                        @if(count($nav['child'])>0)
                            <li class="dropdown">
                                <a href="javascript:;" data-toggle="dropdown">{{$nav['name']}} <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    @foreach($nav['child'] as $child)
                                        <li><a href="{{url('/frontend/category/'.$child['id'])}}">{{$child['name']}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="{{url('/frontend/category/'.$nav['id'])}}">{{$nav['name']}}</a></li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </div>
        <!-- end navbar-collapse -->
    </div>
    <!-- end container -->
</div>
