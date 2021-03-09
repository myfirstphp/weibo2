
/*
+--------+-----------+-----------------------------------+---------------+---------------------------------------------------+------------+
| Domain | Method    | URI                               | Name          | Action                                            | Middleware |
+--------+-----------+-----------------------------------+---------------+---------------------------------------------------+------------+
|        | GET|HEAD  | /                                 | home          | App\Http\Controllers\StaticPagesController@home   | web        |
|        | GET|HEAD  | about                             | about         | App\Http\Controllers\StaticPagesController@about  | web        |
|        | GET|HEAD  | api/user                          |               | Closure                                           | api        |
|        |           |                                   |               |                                                   | auth:api   |
|        | GET|HEAD  | help                              | help          | App\Http\Controllers\StaticPagesController@help   | web        |
|        | GET|HEAD  | login                             | login         | App\Http\Controllers\SessionsController@create    | web        |
|        |           |                                   |               |                                                   | guest      |
|        | POST      | login                             | login         | App\Http\Controllers\SessionsController@store     | web        |
|        | DELETE    | logout                            | logout        | App\Http\Controllers\SessionsController@destroy   | web        |
|        | GET|HEAD  | signup                            | signup        | App\Http\Controllers\UsersController@create       | web        |
|        |           |                                   |               |                                                   | guest      |
|        | GET|HEAD  | signup/confirm/{activation_token} | confirm_email | App\Http\Controllers\UsersController@confirmEmail | web        |
|        | GET|HEAD  | users                             | users.index   | App\Http\Controllers\UsersController@index        | web        |
|        |           |                                   |               |                                                   | auth       |
|        | POST      | users                             | users.store   | App\Http\Controllers\UsersController@store        | web        |
|        | GET|HEAD  | users/create                      | users.create  | App\Http\Controllers\UsersController@create       | web        |
|        |           |                                   |               |                                                   | guest      |
|        | GET|HEAD  | users/{user}                      | users.show    | App\Http\Controllers\UsersController@show         | web        |
|        |           |                                   |               |                                                   | auth       |
|        | PUT|PATCH | users/{user}                      | users.update  | App\Http\Controllers\UsersController@update       | web        |
|        |           |                                   |               |                                                   | auth       |
|        | DELETE    | users/{user}                      | users.destroy | App\Http\Controllers\UsersController@destroy      | web        |
|        |           |                                   |               |                                                   | auth       |
|        | GET|HEAD  | users/{user}/edit                 | users.edit    | App\Http\Controllers\UsersController@edit         | web        |
|        |           |                                   |               |                                                   | auth       |
+--------+-----------+-----------------------------------+---------------+---------------------------------------------------+------------+

*/
/*
Route::get('/signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
use Str;
public static function boot()
{
    parent::boot()
    static::creating(function ($user){
        $user->update([
            'activation_token' => Str::random(10);
        ])
    })
}

$this->sendEmail();
session()->flash('info', '请去邮箱激活账号');
return redirect('/');

use Mail;
public function sendEmail($user)
{
    $view = 'emails.confirm';
    $data = compact('user');
    $from = 'xxx@qq.com';
    $name = 'xxx';
    $to = $user->email;
    $subject = 'subject';

    Mail::send($view, $data, function($message) use (){
        $message->from($from, $name)->to($to)->subject($subject);
    })
}

public function confirm_email($user)
{
    $user = User::where('activation_token', $token)->firstOrFail();
    $user->update([
        ''=> null,
        ''=> true,
    ]);
    Auth::login($user);
    success()->flash('','');
    return redirect('/');
}

if($user->activated)
else
Auth::logout();

*/
