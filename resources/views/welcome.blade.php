<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test-laravel</title>
</head>
<body>

    @php
        $fruits = ['one'=>'apple', 'two'=>'banana', 'three'=>'organge', 'four'=>'grapes'];
        // $fruits = [];
        $show_page = true;
    @endphp

    @includeWhen($show_page,'pages.header',['fruit_names' => $fruits])

    {{'Welcome to home page'}}

    @include('pages.footer')

    @includeIf('pages.about')
</body>
</html>