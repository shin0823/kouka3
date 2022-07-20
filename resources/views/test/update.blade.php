<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>更新処理</h1>
こんにちは！{{ Auth::user()->name }}<br /><br />
入力してね！本当は何も更新しないけど<br />

<form action="/test/complete" method="post">
@csrf
<input type="text" name="inputdata">
<br /><br />
<button type="submit" name="action" value="update">update</button>
<button type="button" onClick="history.back()">back</button>
</form>
<br />
</body>
</html>