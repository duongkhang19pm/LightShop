<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class NhanVien
{
	public function handle($request, Closure $next)
	{
		if(Auth::user()->role == "nhanvien" || Auth::user()->role == "admin" )
		{
			return $next($request);
		}
		return redirect()->route('403');
	}
}