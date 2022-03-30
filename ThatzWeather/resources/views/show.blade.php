<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>ThatzWeather</title>
</head>
<body>
    <div class="container">
        <h1>Publicaciones</h1>
        <div class="card mt-2">
            <h5 class="card-title">
                {{ $post->title }}
            </h5>
            <div class="card-body">
                {{ $post->body }}
            </div>
        </div>            
    </div>
</body>
</html>