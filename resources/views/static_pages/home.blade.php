@extends('layouts.default')
@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h4>微博列表</h4>
                <hr>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
                <section class="stats mt-2">
                    @include('shared._stats', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="jumbotron bg_img opacity">
            <h1>Hello Laravel</h1>
            <p class="lead">你现在看到的是一个<a href="https://learnku.com/courses/laravel-essential-training">Laravel教程</a>项目示例</p>
            <p>一起从这里开始</p>
            <p><a class="btn btn-success btn-lg" href="{{ route('signup') }}" role="button" target="_blank">现在注册</a></p>
        </div>
    @endif
@stop