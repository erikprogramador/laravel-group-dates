<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            font-size: 16px;
        }

        html, body {
            width: 100vw;
            min-height: 100vh;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background: #fafafa;
        }

        .container {
            width: 95%;
            max-width: 960px;
            margin: 0 auto;
        }

        h1 {
            margin: 4rem 0 2rem;
            font-weight: 500;
        }

        h3 {
            font-weight: 500;
            margin-bottom: 2rem;
            border-left: 4px solid blue;
            padding: .5rem 1rem;
            font-size: 1.4rem;
        }

        ul.list-group {
            list-style: none;
            margin-bottom: 4rem;
        }

        li.list-item {
            padding: 1.4rem;
            border-radius: 12px;
            border: 1px solid #d4d4d4;
            margin-bottom: 1rem;
        }

        h2 {
            font-weight: 500;
            margin-bottom: .2rem;
        }

        h4 {
            font-weight: 500;
            margin: 0 0 1rem;
            font-size: 1rem;
            color: #666;
        }

        li > div {
            color: #777;
            line-height: 26px;
        }

        footer {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 4rem;
        }

        .pagination {
            display: flex;
            align-items: center;
            list-style: none;
        }

        .page-item a,
        .page-item span {
            padding: .5rem .7rem;
            border: 1px solid #d4d4d4;
            border-radius: 12px;
            margin: 0 5px;
        }

        .page-item a,
        .page-item span {
            text-decoration: none;
            color: #666;
        }

        .page-item.active span {
            background: blue;
            color: white;
            border-color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Meu blog</h1>

        @foreach ($postGroup as $key => $posts)
            <h3>{{ $key }}</h3>
            <ul class="list-group">
                @foreach($posts as $post)
                    <li class="list-item">
                        <h2>{{ $post->title }}</h2>
                        <h4>Publicado {{ $post->published_at->diffForHumans() }}</h4>

                        <div>
                            {!! $post->body !!}
                        </div>
                    </li>
                @endforeach
            </ul>
        @endforeach

        <footer>
            {{ $paginatedPosts->links() }}
        </footer>
    </div>
</body>
</html>
