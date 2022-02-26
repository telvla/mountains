<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Главная - Домбай</title>

        <base href="{{ env('APP_URL') }}">

        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="/css/style.css" />

        {{-- include page css file --}}
        @if(!empty($file_css))
            <link rel="stylesheet" href="/css/{{$file_css}}.css" />
        @endif
    </head>
    <body>

       