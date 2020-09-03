<?php
/*
 * Secret key and Site key get on https://www.google.com/recaptcha
 * */
return [
    'secret' => env('CAPTCHA_SECRET', '6LefgLMZAAAAAAam1iRN2IiDd_eBe--gAwG-A-Ul'),
    'sitekey' => env('CAPTCHA_SITEKEY', '6LefgLMZAAAAAJN0nAXihY86yg6daQcs2_-4AIqZ'),
    /**
     * @var string|null Default ``null``.
     * Custom with function name (example customRequestCaptcha) or class@method (example \App\CustomRequestCaptcha@custom).
     * Function must be return instance, read more in repo ``https://github.com/thinhbuzz/laravel-google-captcha-examples``
     */
    'request_method' => null,
    // 'options' => [
    //     'multiple' => false,
    //     'lang' => app()->getLocale(),
    // ],
    // 'attributes' => [
    //     'theme' => 'light'
    // ],
    $attributes = [
        'theme' => 'light',
        'data-theme' => 'dark',
        'data-type' => 'audio',
    ],
    $options = [
        'data-theme' => 'dark',
        'data-type' => 'audio',
        'multiple' => false,
        'lang' => app()->getLocale(),
    ],
];