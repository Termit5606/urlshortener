<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlShortRequest;
use App\Services\Url\UrlService;
use Illuminate\Http\Request;

class ShortenerController extends Controller
{
    public function store(UrlShortRequest $request, UrlService $service)
    {
        $validated = $request->validated();

        $code = $service->makeCode($validated['url'], $request->ip());

        return response()->json([
            'url' => action([RedirectController::class, 'redirectByCode'], ['code' => $code]),
            'errors' => []
        ]);
        
    }
}
