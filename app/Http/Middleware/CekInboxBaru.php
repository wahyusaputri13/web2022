<?php

namespace App\Http\Middleware;

use App\Models\Inbox;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use RealRashid\SweetAlert\Facades\Alert;

class CekInboxBaru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $data = Inbox::where('status', 0)->first();
        if ($data) {
            Alert::alert('Ada Pesan Baru', 'Silahkan Cek Kotak Masuk', 'Type');
            // return redirect(route('inbox.index'));
        }
        return $next($request);
    }
}
