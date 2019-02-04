<?php
mb_language('ja');
mb_internal_encoding("UTF-8");
$message = " 名前:" . $_POST["name"] . "\n 本文:" . $_POST["message"];
if (!mb_send_mail("ingkuma@naver.com", $_POST["subject"], $message, "From: " . $_POST["mail"])) {
exit("error"); }
?>
<html>
<head>
<meta charset="UTF-8">
<title>sample</title>
</head>
<body>
<p> メールが送信されました。</p>
</body>
</html>