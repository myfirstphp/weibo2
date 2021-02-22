<a href="{{route('users.show', $user->id)}}">
    <img class="gravatar" src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}">
</a>
<h1>{{ $user->name }}</h1>



publice function gravatar($size='100')
{
    $hash=md5(strtolower(trim($this->attributes['email'])));
    return "#/$hash?$size"
}

@extends('layouts.default')
@section('title', $user->name)

@section('content')
<div class="row">
    <div class="offset-md-2 col-md-8">
        <div class="col-md-12">
            <div class="offset-md-2 col-md-8">
                <section class="user_info">
                    @include('shared._user_info', ['user'=>$user])
                </section>
            </div>
        </div>
    </div>
</div>
@stop