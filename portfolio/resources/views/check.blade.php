<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>check</title>
        <link rel="stylesheet" href="all.css" />
    </head>
    <body>
            <p>{{ $owner }}</p>
            <form action="/complete" method="post">
                @csrf
                <input type="hidden" name="date_start" value="{{ $owner }}" id="date_start" name="date_start">
                <p><input type="submit" value="OK"></p>
            </form>
    </body>
</html>
