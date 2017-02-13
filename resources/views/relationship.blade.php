<!DOCTYPE html>
<html>
    <head>
        <title>Relaciones pruebas</title>
    </head>
    <body>
        @foreach($categories as $category)
        <p>
          {{ $category->name}}
          {{ $category->num_books}}
        </p>
        <ul>
          @foreach($category->books as $book)
            <li>
              <strong>{{ $book->title}}</strong>
              {{ $book->description}}
              {{ $book->status}}
            </li>
            <ul>
              @foreach($category->BooksPublic as $book)
                <li>
                  {{$book->title}}<em>{{$book->status}}</em>
                </li>
              @endforeach
            </ul>
          @endforeach
        </ul>
        @endforeach
    </body>
</html>
