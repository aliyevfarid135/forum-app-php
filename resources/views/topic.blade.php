<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Topics</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            width: 80%;
            max-width: 600px;
        }

        li {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        li:nth-child(even) {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .topic-type {
            font-style: italic;
            color: #555;
        }
    </style>
</head>

<body>
    <h1>All Topics</h1>
    <ul>
        @foreach($topics as $topic)
            <li>
                <a href="{{ route('topic', $topic->id)}}">{{ $topic->title }}</a>
                <span class="topic-type">{{ $topic->type }}</span>
            </li>
        @endforeach
    </ul>
</body>

</html>
