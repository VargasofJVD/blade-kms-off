<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

    /*
    |--------------------------------------------------------------------------
    | View Debug Mode
    |--------------------------------------------------------------------------
    |
    | When view debug mode is enabled, the compiled view that is written to
    | disk will include the original Blade template file path and line
    | numbers, making it easier to debug the problems in your templates.
    |
    */

    'debug' => env('VIEW_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | View Cache
    |--------------------------------------------------------------------------
    |
    | When view cache is enabled, the compiled view that is written to disk
    | will be cached and reused for subsequent requests. This can improve
    | performance by avoiding the need to recompile views on each request.
    |
    */

    'cache' => env('VIEW_CACHE', true),

    /*
    |--------------------------------------------------------------------------
    | Compiled View Extension
    |--------------------------------------------------------------------------
    |
    | This option determines the file extension for compiled Blade templates.
    | The default extension is 'php', but you may change this to any other
    | extension that you prefer.
    |
    */

    'compiled_extension' => env('VIEW_COMPILED_EXTENSION', 'php'),

    /*
    |--------------------------------------------------------------------------
    | Relative Hash
    |--------------------------------------------------------------------------
    |
    | When relative hash is enabled, the compiled view path will include a
    | hash based on the application's base path. This can help prevent
    | conflicts when multiple Laravel applications share the same storage
    | directory.
    |
    */

    'relative_hash' => env('VIEW_RELATIVE_HASH', false),

];
