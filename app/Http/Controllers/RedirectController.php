<?php

namespace App\Http\Controllers;

use App\Services\Url\UrlService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirectByCode(string $code, UrlService $service) : RedirectResponse {
        if (!$service->isCodeExists($code)) return abort('404');

        $url = $service->getUrl($code);

        return redirect()->away($url);
    }
}
