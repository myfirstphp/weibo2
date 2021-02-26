@extends('layouts.default')
@section('content')
    <div class="jumbotron bg_img opacity">
        <h1>Hello Laravel</h1>
        <p class="lead">你现在看到的是一个<a href="https://learnku.com/courses/laravel-essential-training">Laravel教程</a>项目示例</p>
        <p>一起从这里开始</p>
        <p><a class="btn btn-success btn-lg" href="{{ route('signup') }}" role="button" target="_blank">现在注册</a></p>
    </div>
@stop