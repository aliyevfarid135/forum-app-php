<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('search')}}" method="post">
        @csrf
        <div>
            <label for="type">Type</label>
            <select name="type" id="type" required>
                <option value="sport">sport</option>
                <option value="art">art</option>
                <option value="music">music</option>
                <option value="science">science</option>
                <option value="movie">movie</option>
            </select>
        </div>
        <input type="submit" value="Save">
    </form>
    @if($topics !== null)
    @foreach($topics as $topic)
    <li>
        <a href="{{ route('topic', $topic->id)}}">{{ $topic->title }}</a>
    </li>
    @endforeach
    @else
    @endif
</body>

</html>