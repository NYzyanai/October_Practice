<!DOCTYPE html>
<html>

<head>
  <title>テスト</title>
  <meta charset="UTF-8">
</head>
<?php
include('./token_create.php');

$send_url=url(id(),token());

echo $send_url;

?>


<body>
  <h1>トークン作るよ</h1>
</body>

</html>