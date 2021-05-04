<?php

namespace App\Http\Middleware;

use App\Helper\Constants;
use Closure;
use Illuminate\Http\Request;

class PublicVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $calon = Constants::calonStatusArray;
        view()->share('statusCalon', $calon);

        $quotes = Constants::quotesStatusArray;
        view()->share('statusQuotes', $quotes);

        $akadNikah = Constants::akadNikahStatusArray;
        view()->share('statusAkadNikah', $akadNikah);

        $loveStory = Constants::loveStoryStatusArray;
        view()->share('statusLoveStory', $loveStory);

        $resepsi = Constants::resepsiStatusArray;
        view()->share('statusResepsi', $resepsi);

        $comment = Constants::commentStatusArray;
        view()->share('statusComment', $comment);

        $reservasi = Constants::reservasiStatusArray;
        view()->share('statusReservasi', $reservasi);

        $fotoHeader = Constants::fotoHeaderStatusArray;
        view()->share('statusFotoHeader', $fotoHeader);

        $fotoBody = Constants::fotoBodyStatusArray;
        view()->share('statusFotoBody', $fotoBody);

        $fotoFooter = Constants::fotoFooterStatusArray;
        view()->share('statusFotoFooter', $fotoFooter);

        $song = Constants::songStatusArray;
        view()->share('statusSong', $song);
    
        return $next($request);
    }
}