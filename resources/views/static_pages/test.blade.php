use Auth;
public function store(Request $request)
{
    $credentials = $this->validate($request [
'email' => 'required|email|max:20',
'password' => 'requied',
])

   if(Auth::attempt($credentials))
{
    session()->flash('success', '欢迎');
    return redirect()->route('users.show', [Auth::user()])
} else {
    session()->flash('danger', '警告');
    return redirect()->back()->withInput();
}
}