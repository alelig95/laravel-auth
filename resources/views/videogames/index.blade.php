<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Videogames</title>
</head>
<body>

    <a href="{{ route('videogames.create') }}">
        <button type="submit" class="btn btn-primary">
            CREATE
        </button>
    </a>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Genre</th>
            <th scope="col">Developer</th>
            <th scope="col">Publisher</th>
            <th scope="col">Cover</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $videogames as $videogame )
                <tr>
                    <th scope="row">{{ $videogame->id }}</th>
                    <td>{{ $videogame->title }}</a></td>
                    <td>{{ $videogame->genre }}</td>
                    <td>{{ $videogame->developer }}</td>
                    <td>{{ $videogame->publisher }}</td>
                    <td><img src="{{ $videogame->cover }}" width="190" alt=""></td>
                </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
