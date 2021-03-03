
/*
+--------+-----------+-------------------+---------------+--------------------------------------------------+------------+
| Domain | Method    | URI               | Name          | Action                                           | Middleware |
+--------+-----------+-------------------+---------------+--------------------------------------------------+------------+
|        | GET|HEAD  | /                 | home          | App\Http\Controllers\StaticPagesController@home  | web        |
|        | GET|HEAD  | about             | about         | App\Http\Controllers\StaticPagesController@about | web        |
|        | GET|HEAD  | api/user          |               | Closure                                          | api        |
|        |           |                   |               |                                                  | auth:api   |
|        | GET|HEAD  | help              | help          | App\Http\Controllers\StaticPagesController@help  | web        |
|        | GET|HEAD  | login             | login         | App\Http\Controllers\SessionsController@create   | web        |
|        | POST      | login             | login         | App\Http\Controllers\SessionsController@store    | web        |
|        | DELETE    | logout            | logout        | App\Http\Controllers\SessionsController@destroy  | web        |
|        | GET|HEAD  | signup            | signup        | App\Http\Controllers\UsersController@create      | web        |
|        | GET|HEAD  | users             | users.index   | App\Http\Controllers\UsersController@index       | web        |
|        |           |                   |               |                                                  | auth       |
|        | POST      | users             | users.store   | App\Http\Controllers\UsersController@store       | web        |
|        |           |                   |               |                                                  | auth       |
|        | GET|HEAD  | users/create      | users.create  | App\Http\Controllers\UsersController@create      | web        |
|        | GET|HEAD  | users/{user}      | users.show    | App\Http\Controllers\UsersController@show        | web        |
|        |           |                   |               |                                                  | auth       |
|        | PUT|PATCH | users/{user}      | users.update  | App\Http\Controllers\UsersController@update      | web        |
|        |           |                   |               |                                                  | auth       |
|        | DELETE    | users/{user}      | users.destroy | App\Http\Controllers\UsersController@destroy     | web        |
|        |           |                   |               |                                                  | auth       |
|        | GET|HEAD  | users/{user}/edit | users.edit    | App\Http\Controllers\UsersController@edit        | web        |
|        |           |                   |               |                                                  | auth       |
+--------+-----------+-------------------+---------------+--------------------------------------------------+------------+
*/

