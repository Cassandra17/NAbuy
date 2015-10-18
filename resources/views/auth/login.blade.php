@extends('default')

      <!-- 登录功能，组要更高之后回到主界面 -->
      <div class="container" style="margin-top: 100px">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <form class="form-signin">
              <h2 class="form-signin-heading">登录</h2>
            </form>
          </div>
            <div class="row">
              <div class="col-xs-6">
                <!-- <a href="#" class="active" id="login-form-link">Login</a> -->
              </div>
            </div>
          </div>
          <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

            <div class="row">
              <div class="col-lg-12">
                
                <form id="login-form" action="{{ url('/user/login') }}" method="post" role="form" style="display: block;">

                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group">
                    <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email 邮箱" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="密码">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> 记住我</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login btn-primary" value="登录">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="{{url('password/email')}}" tabindex="5" class="forgot-password">忘记密码？</a>
                        </div>
                      </div>
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
