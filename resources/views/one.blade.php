<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topic Comments</title>
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

        .topic-container {
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .comment-list {
            list-style-type: none;
            padding: 0;
            margin-bottom: 15px;
        }

        .comment-item {
            background-color: #f1f1f1;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .comment-item:last-child {
            margin-bottom: 0;
        }

        .comment-item p {
            color: #333;
            margin-bottom: 8px;
        }

        .comment-item img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-top: 10px;
        }

        .comment-form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .comment-form label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .comment-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .comment-form button {
            padding: 10px;
            background-color: #28a745; /* Green button background */
            color: #fff; /* White text color */
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100px;
        }

        .comment-form button:hover {
            background-color: #218838; /* Darker shade on hover */
        }
    </style>
</head>

<body>
    <div class="topic-container">
        <h1>Topic: {{$topic->title}}</h1>
        @foreach ($comments as $comment)
        <ul class="comment-list">
            <li class="comment-item">
                <p>{{ $comment->content }}</p>
                @if ($comment->photo)
                <img src="{{ asset('storage/' . $comment->photo) }}" alt="Comment Photo">
                @endif
            </li>
        </ul>
        @endforeach
        <form class="comment-form" action="{{route('comment', $topic->id)}}" method="POST">
            @csrf
            <label for="comment">Add Comment:</label>
            <textarea name="comment" id="comment" rows="4" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
