<?php
$url = 'https://jsonplaceholder.typicode.com/comments';
$respon = file_get_contents($url);
$data = json_decode($respon, true)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum API</title>
  <link rel="stylesheet" href="styles.css">
</head>
<h1>Data comment dari jsonplaceholder API (PHP)</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Body</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $comment): ?>
      <tr>
        <td><?php echo $comment['id']; ?></td>
        <td><?php echo htmlspecialchars($comment['name']); ?></td>
        <td><?php echo htmlspecialchars($comment['email']); ?></td>
        <td><?php echo htmlspecialchars($comment['body']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<body>

</body>

</html>