<!DOCTYPE html>
<html>

<head>
    <title>任務列表</title>
</head>

<body>
    <h1>任務列表</h1>
    <table>
        <tbody>
            @foreach($rows as $tasks)
            <tr>
                <td>{{ $tasks->id }}</td>
                <td>
                    {{-- <a href="/task/{{ $article->id }}">{{ $task->title }}</a> --}}
                    {{ $tasks->name}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
