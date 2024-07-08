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
            background-color: #28a745; /* Green background */
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.2s ease; /* Smooth hover effect */
        }

        li:hover {
            transform: translateY(-5px); /* Lift up effect on hover */
        }

        li:nth-child(even) {
            background-color: #218838; /* Darker shade for even rows */
        }

        a {
            text-decoration: none;
            color: #fff; /* White text */
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .topic-type {
            font-style: italic;
            color: #f9f9f9; /* Lighter text color */
            margin-right: 10px;
        }

        .navigation {
            margin-top: 20px;
        }

        .navigation a {
            margin-right: 15px;
            padding: 10px 15px;
            background-color: #28a745; /* Green color for buttons */
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navigation a:hover {
            background-color: #218838; /* Darker shade on hover */
        }
    </style>
</head>

<body>
    <h1>All Topics</h1>
    <ul>
        @foreach($topics as $topic)
            <li>
                <div>
                    <a href="{{ route('topic', ['id' => $topic->id]) }}">{{ $topic->title }}</a>
                    <span class="topic-type">{{ $topic->type }}</span>
                </div>
                <a href="{{ route('topic', ['id' => $topic->id]) }}">Comment</a>
            </li>
        @endforeach
    </ul>

    <div class="navigation">
        <a href="{{ route('create') }}">Create Topic</a>
        <a href="{{ route('src-get') }}">Search</a>
    </div>
</body>

</html>
