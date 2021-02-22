<!--这个局部视图的$user,是通过指令include传过来的,不是view函数传过来的，view函数传过来的是['user'=>$user] -->

<a href="{{ route('users.show', $user->id) }}">
    <img class="gravatar" src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}">
</a>
<h1>{{ $user->name }}</h1>