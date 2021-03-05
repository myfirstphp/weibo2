<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//验证规则类
use Illuminate\Validation\Rule;
use Auth;


class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['create', 'store'],
        ]);//auth 是对未登录用户的限制

        $this->middleware('guest', [
            'only' => ['create'],
        ]);//guest 是对登录用户的限制
    }

    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users|max:10',
            'email' => 'required|unique:users|email',//这个邮箱验证很拉跨，仅仅验证了有没有加@
            'password' => 'required|min:6|max:12|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);//让已通过认证的用户实例登录
        session()->flash('success','欢迎，旅程现在开始');
        return redirect()->route('users.show', $user->id);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }


    public function update(User $user, Request $request)
    {
        $this->authorize('update', $user);
        $this->validate($request,[
            "name" => ['required', Rule::unique('users')->ignore($user), "max:6"],
            'password' => 'nullable|min:6|confirmed',
        ]);

        $data = [];
        $data['name'] = $request->name;
        if($request->password)
        {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
        session()->flash('success', '修改用户信息成功');

        return redirect()->route('users.show', [$user->id]);
    }

    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }
}


