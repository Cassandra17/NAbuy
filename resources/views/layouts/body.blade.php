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
          <a class="navbar-brand" href="{{url('/main')}}">北美任你购</a> 
    <!--  <span class="label label-primary">北美任你购</span> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           
            <li class="active"><a href="{{url('/gallery')}}">新品上市</a></li>  

            <li><a href="{{url('/gallery')}}">最新折扣</a></li>          

            <li class="dropdown">
              <a href="{{url('/gallery')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">零食专区<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/gallery')}}">中国专区</a></li>
                <li><a href="{{url('/gallery')}}">日本专区</a></li>
             </ul>
            </li>        

            <li class="dropdown">
              <a href="{{url('/gallery')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">名牌专区<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/gallery')}}">Gucci</a></li>
                <li><a href="{{url('/gallery')}}">LV</a></li>
             </ul>
            </li>        

            <li class="dropdown">
              <a href="{{url('/gallery')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">化妆品<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/gallery')}}">Something</a></li>
                <li><a href="{{url('/gallery')}}">Another One</a></li>
             </ul>
            </li>      
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/cart')}}">购物车</a></li>      <!-- #需要做checkout功能，自动添加新产品到购物车，计算价格，将文字转换为图片# -->

            <li><a href="{{url('/login')}}">登录</a></li>     <!-- #需要做登录完成的跳转网页# -->

            <li><a href="{{url('/register')}}">注册</a></li>    <!-- #需要做注册，QQ,微信注册，以及注册的跳转网页# -->
          </ul>

        </div><!--/.nav-collapse -->
        </div>
        </nav>

        @yield('content')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
          $(document).ready(function() {
            $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
            $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
          });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="{{{asset('./jquery.rondell-master/examples/demohelpers.js')}}}"></script>
        <script type="{{{asset('./text/javascript')}}}"></script>
        <script src="{{{asset('./dist/js/jquery.magnify.js')}}}"></script>
        <script>
          $(document).ready(function() {
            $('img').magnify();
          });
        </script>
        <script src="libs/modernizr-2.0.6.min.js"></script>
        <script src="libs/jquery.mousewheel-3.0.6.min.js"></script>
        <script src="dist/jquery.rondell.js"></script>
    