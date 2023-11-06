<?php

namespace App\Services\Url;

use App\Models\Url;
use Illuminate\Support\Str;

class UrlService 
{
    public function makeCode(string $url, string $ip) : string {
        $this->formatUrl($url);

        if (Url::isUrlExists($url)) {
            $code = Url::getCodeByUrl($url);
        } else {
            $code = $this->generateCode();

            $this->saveShortenedUrl($url, $code, $ip);
        }

        return $code;
    }

    public function generateCode() : string {
        $code = Str::random(6);

        if ($this->isCodeExists($code)) $this->generateCode();

        return $code;
    }

    public function isCodeExists($code) : bool {
        return Url::isCodeExists($code);
    }

    public function saveShortenedUrl(string $url, string $code, string $ip) : void {
        $model = new Url();

        $model->shortened_url = $code;
        $model->url = $url;
        $model->ip = $ip;

        $model->save();
    }

    public function formatUrl(string &$url) : string {
        $url = Str::finish($url, '/');

        return $url;
    }

    public function getUrl($code) : string {
        return Url::getUrlByCode($code);
    }
}