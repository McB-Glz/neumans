<?php namespace App\Http\Middleware;

use Closure;

class LangMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $url = $request->url();
        $langs = config('global.available-langs');
        $lastSegment = getLastUriSegment($url);

        if(in_array($lastSegment, $langs)) {
            $request->session()->put('locale', $lastSegment);
            return redirect(str_replace('/'.$lastSegment, '', $url));
        }

        app('translator')->setLocale(session('locale', 'en'));

        return $next($request);
    }

}
