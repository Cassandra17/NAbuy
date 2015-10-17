@extends('default')

    <style type="text\css">
        .btn-register {
            background-color: #1CB94E;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1CB94A;
        }
        .btn-register:hover,
        .btn-register:focus {
            color: #fff;
            background-color: #1CA347;
            border-color: #1CA347;
        }
    </style>

        <!-- 注册功能 -->
        <div class="container" style="margin-top: 100px">
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <form class="form-signin">
                        <h2 class="form-signin-heading">注册</h2>
                    </form>
                </div>
                    <div class="row">
                        <div class="col-xs-6">
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
                            <form id="register-form" action="{{ url('/user/register') }}" method="POST" role="form" style="display: block;">
                                
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="姓名" value="">
                                </div>
                                 <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="邮箱" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="密码">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" tabindex="2" class="form-control" placeholder="确认密码">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register btn-primary" value="注册！">
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

    