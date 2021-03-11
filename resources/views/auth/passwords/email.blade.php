@extends('layouts.default')
@section('title', '重置密码')

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card ">
            <div class="card-header"><h5>重置密码</h5></div>

            <div class="card-body">
                <!--用来显示邮件发送成功的提示语-->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <!--点击邮箱中的链接会跳转到另一个页面，让你重设密码-->
                <form class="" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                        <label for="email" class="form-control-label">邮箱地址：</label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="form-text">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            发送密码重置邮件
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
