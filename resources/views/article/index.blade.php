<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>文章列表</h1>
    <table>
    	<thead>
    		<th>編號</th>
    		<th>標題</th>
    		<th>建立時間</th>
    	</thead>
    	<tbody>
    		@foreach($rows as $article)
    		<tr>
    			<td>{{ $article->id }}</td>
    			<td>{{ $article->title }}</td>
    			<td>{{ $article->created_at }}</td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
</body>

</html>
