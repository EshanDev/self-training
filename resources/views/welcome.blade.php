<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

    </head>
    <body>
       welcome to self-training.in.th
       <span>{{ \App\User::all()->count() }}</span>
    </body>
</html>
