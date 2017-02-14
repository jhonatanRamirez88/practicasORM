<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Many to many</title>
  </head>
  <body>
    <h1>Muchos a muchos "Many to many"</h1>
    @foreach($users as $user)
      <li><strong>Author:</strong>{{$user->name}}
        <ul>
          @foreach($user->books as $book)
            <li>{{$book->title}}</li>
          @endforeach
        </ul>
      </li>
    @endforeach
  </body>
</html>
