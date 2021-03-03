@extends('layouts.default')
@section('title', '注册')

@section('content')
    <div class="bg_img">
        <div class="offset-md-2 col-md-3 opacity">
            <div class="card">
                <div class="card-header">
                    <h5 align="center">注册</h5>
                </div>
                <div class="card-body">

                @include('shared._errors')<!--这个位置可以随便放，只是错误信息显示的位置-->

                    <form method="post" action="{{ route('users.store') }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">邮箱：</label>
                            <input class="form-control" id="email" name="email" type="text" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="password">密码：</label>
                            <input class="form-control" id="password" name="password" type="password" value="{{ old('password') }}">
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">确认密码：</label>
                            <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}">
                        </div>
                        <div style="text-align:center">
                            <button class="btn btn-primary" type="submit">注册</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop