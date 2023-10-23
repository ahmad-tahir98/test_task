<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Template</title>
        @include('layout.header')
    </head>

    <body>
        <div class="container">
            @yield('content')
        </div>

        @include('layout.script')
    </body>

    </html>
