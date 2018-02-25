<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Checklogin
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
         // kiểm tra url có login và đã đăng nhập rồi thì cho và trang user
        if($request->path()=="admin/login" && Auth::check()){
           return redirect()->route("user");
        }
       //  // nếu chưa đang nhập và cố tình về trang user thì bắt quay lại đang nhập
       else if(!Auth::check() && $request->path()!="admin/login"){
           return redirect()->route("logins");
        }
        // kiem tra da dang nhap chua
        else{
           return $next($request);
        }
       
       
    }
}
