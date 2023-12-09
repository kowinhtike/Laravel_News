<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $path = $request->path();
    
        // session()->put('user',"iam@gmail.com");
        // if( ($path == "login" || $path=="register") && session()->has("user")){
        //     return redirect('/');
        // }else if($path != 'login' && ($path != 'register') && !(session()->has("user"))){
        //     return redirect('login');
        // }

        // Check if the session key exists
        if (!session()->has('user')) {
            // Redirect to login page if key not found
            return redirect()->route('news-login');
        }


        // echo "Win Htike";

        return $next($request);
    }
}
