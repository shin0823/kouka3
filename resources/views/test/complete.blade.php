<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>更新完了画面</h1>
こんにちは！{{ Auth::user()->name }}<br /><br />
    これを入力したよね？<br />
    <form action="test/complete" method="post"></form>
    {{ $inputdata }}<br /><br />
    <button type="button" onClick="history.back()">back</button>
</body>
</html>