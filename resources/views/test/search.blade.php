<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>照会画面</h1>
こんにちは！{{ Auth::user()->name }}<br /><br />
何か表示するよ！そのうちね
<form action="test/search" method="post"></form>
<br />
<button type="button" onClick="history.back()">back</button>
<br />
</body>
</html>