<!DOCTYPE html>
<html>

<head>
  <title>テスト</title>
  <meta charset="UTF-8">
</head>
<?php
include('./token_create.php');

$createdUrl=createUrl(createId(),createToken());

echo $createdUrl;

?>


<body>
  <h1>トークン作るよ</h1>
</body>

</html>