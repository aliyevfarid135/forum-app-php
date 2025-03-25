<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        
        select, input[type="submit"] {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        
        input[type="submit"] {
            background-color: #28a745; 
            color: white;
            cursor: pointer;
            border: none;
        }
        
        input[type="submit"]:hover {
            background-color: #218838;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        li {
            margin-bottom: 10px;
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        
        li:hover {
            transform: translateY(-5px);
        }
        
        a {
            text-decoration: none;
            color: #28a745;
            font-weight: bold;
        }
        
        a:hover {
            text-decoration: underline;
            color: #218838;
        }
        .navigation {
            margin-top: 20px;
        }

        .navigation a {
            margin-right: 15px;
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navigation a:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <form action="{{ route('search') }}" method="post">
        @csrf
        <div>
            <label for="type">Type</label>
            <select name="type" id="type" required>
                <option value="sport">Sport</option>
                <option value="art">Art</option>
                <option value="music">Music</option>
                <option value="science">Science</option>
                <option value="movie">Movie</option>
            </select>
        </div>
        <input type="submit" value="Search">
    </form>
    
    @if($topics !== null)
    <ul>
        @foreach($topics as $topic)
        <li>
            <a href="{{ route('topic', $topic->id) }}">{{ $topic->title }}</a>
        </li>
        @endforeach
    </ul>
    @endif

    <div class="navigation">
        <a href="{{ route('create') }}">Create Topic</a>
        <a href="{{ route('topics') }}">Topics</a>
    </div>
    
</body>

</html>
