@extends('layouts.default')

@section('title', '更新个人资料')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 align="center">更新个人资料</h5>
            </div>

            <div class="card-body">

                @include('shared._errors')

                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img class="gravatar" src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}">
                    </a>
                </div>

                <form method="post" action="{{ route('users.update', $user->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}

                    <div class="form-group">
                        <label for="name">名称：</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                    </div>

                    <div style="text-align:center">
                        <button class="btn btn-primary" type="submit">更新</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@stop