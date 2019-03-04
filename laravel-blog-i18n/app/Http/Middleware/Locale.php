<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //ham handle thực hiện việc chuyển ngôn ngữ trước khi gửi request
        if (!Session::has('language')) {
            //Session sẽ đẩy giá trị của một biến cấu hình vào trong session
            Session::put('language', config('app.locale'));
            //giá trị của một biến cấu hình lúc này là config('app.locale') tại mục locale trong file app.php
        }
        Lang::setLocale(Session::get('language'));
        return $next($request);
    }
}
