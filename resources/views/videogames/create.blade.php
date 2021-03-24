<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>

<div class="container">

    <a href="{{ route('videogames.index') }}">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-home"></i>
        </button>
    </a>

    <form action="{{ route('videogames.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input class="form-control" type="text" name="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="genre" class="form-label">Genre</label>
            <input class="form-control" type="text" name="genre" placeholder="Genre">
        </div>

        <div class="form-group">
            <label for="developer" class="form-label">Developer</label>
            <input class="form-control" type="text" name="developer" placeholder="Developer">
        </div>

        <div class="form-group">
            <label for="publisher" class="form-label">Publisher</label>
            <input class="form-control" type="text" name="publisher" placeholder="Publisher">
        </div>

        <div class="form-group">
            <label for="cover" class="form-label">Cover</label>
            <input class="form-control" type="text" name="cover" placeholder="Cover">
        </div>

        <input type="submit" value="Send">
    </form>

</body>
</html>
