<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    </head>
    <body>
       <div class="container">
            <div class="display-4">
                <h1>Form Request</h1>
            </div>

            <div class="links">
                <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                    <div class="col-md-5 form-group p-0">
                        <input class="form-control" type="text" name="title">
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
       </div>
    </body>
</html>
