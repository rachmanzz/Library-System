<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StudentLoginRequest;
class RedirectIfNotStudent
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'student')
	{
		$id = $request->id;
	    if (!Auth::guard($guard)->check()) {
	        return redirect('/student/{{$id}}');
	    }

	    return $next($request);
	}
}


?>