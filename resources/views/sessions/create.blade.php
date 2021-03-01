@extends('layouts.default')
@section('title','登录')

@section('content')
    <div class="bg_img">
        <div class="offset-md-2 col-md-3 opacity">
            <div class="card">
                <div class="card-header">
                    <h5 align="center">登录</h5>
                </div>
                <div class="card-body">
                    @include('shared._errors')
                    <form method="post" action="{{ route('login')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">邮箱：</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="password">密码：</label>
                            <input class="form-control" type="password" id="password" name="password" value="{{ old('password') }}">
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" name="remember" id="exampleCheck1" type="checkbox">
                                <label class="form-check-label" for="exampleCheck1">记住我</label>
                            </div>
                        </div>

                        <div style="text-align:center">
                            <button class="btn btn-primary" type="submit">登录</button>
                        </div>
                    </form>
                    <div style="text-align:center">
                        <hr>
                        <p>还没账号？<a href="{{ route('users.create') }}">现在注册！</a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>

@stop