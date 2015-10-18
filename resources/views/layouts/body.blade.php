<!-- Fixed NavBar -->
  <nav class="navbar navbar-fixed-top navbar-default">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}">全球七彩汇</a> 
    <!--  <span class="label label-primary">北美任你购</span> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           
            <li class="dropdown">
                  <a href="{{url('/gallery/100')}}">新品上市</a>
            </li>  

            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">美食围城<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/gallery/1')}}">锦绣中华</a></li>
                    <li><a href="{{url('/gallery/2')}}">富士山下</a></li>
                  </ul>
            </li>          

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">名品会所<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/gallery/3')}}">中国专区</a></li>
                <li><a href="{{url('/gallery/4')}}">日本专区</a></li>
                <li><a href="{{url('/gallery/5')}}">欧洲专区</a></li>
             </ul>
            </li>        

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">健康驿站<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/gallery/21')}}">樱花公园</a></li>
                <li><a href="{{url('/gallery/22')}}">澳洲海岸</a></li>
                <li><a href="{{url('/gallery/23')}}">欧美广场</a></li>
             </ul>
            </li>        

            <li class="dropdown">
              <a href="{{url('/gallery')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">生活频道<!-- <span class="caret"></span> --></a>
            </li>      
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/cart')}}">购物车</a></li>      <!-- #需要做checkout功能，自动添加新产品到购物车，计算价格，将文字转换为图片# -->

            @if (Auth::guest())
                  <li><a href="{{url('/user/login')}}">登录</a></li>     <!-- #需要做登录完成的跳转网页# -->

                  <li><a href="{{url('/user/register')}}">注册</a></li>    <!-- #需要做注册，QQ,微信注册，以及注册的跳转网页# -->
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">欢迎光临，{{ Auth::user()->name }} , 你是本站
                @if(Auth::user()->hasRole('Administrator'))
                Administrator
                @endif
                @if(Auth::user()->hasRole('Member'))
                Member
                @endif
                @if(Auth::user()->hasRole('VIP'))
                VIP
                @endif
                @if(Auth::user()->hasRole('SVIP'))
                Super VIP
                @endif
              <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                @if(Auth::user()->hasRole('Administrator'))
                <li><a href="{{ url('/admin') }}">管理面板</a></li>
                @endif
                <li><a href="{{ url('/user/logout') }}">Logout</a></li>
              </ul>
            </li>
          @endif
        </ul>

          </ul>

        </div><!--/.nav-collapse -->
        </div>
        </nav>

        @yield('content')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{{asset('js/bootstrap.min.js')}}}"></script>
        <script>
          $(document).ready(function() {
            $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
            $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
          });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="{{{asset('/jquery.rondell-master/examples/demohelpers.js')}}}"></script>
        <script type="{{{asset('/text/javascript')}}}"></script>
        <script src="{{{asset('/dist/js/jquery.magnify.js')}}}"></script>
        <script>
          $(document).ready(function() {
            $('img').magnify();
          });
        </script>
        <script src="{{{asset('libs/modernizr-2.0.6.min.js')}}}"></script>
        <script src="{{{asset('libs/jquery.mousewheel-3.0.6.min.js')}}}"></script>
        <script src="{{{asset('dist/jquery.rondell.js')}}}"></script>
        @yield('script')
    