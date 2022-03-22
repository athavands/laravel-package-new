<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="media" />
            <input type="submit" value="Submit" />
        </form>

        <img src="{{@App::make('url')->to('/').'/'. $data->media_path }}" style="height: 100px;width:100px;"></img>
    </body>
</html>
