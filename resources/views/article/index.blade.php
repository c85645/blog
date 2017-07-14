<!DOCTYPE html>
<html>

<head>
    <title>文章列表</title>
</head>

<body>
    <h1>文章列表</h1>
    <table>
        <thead>
            <th>編號</th>
            <th>標題</th>
        </thead>
        <tbody>
            @foreach($rows as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>
                    <a href="/article/{{ $article->id }}">{{ $article->title }}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
