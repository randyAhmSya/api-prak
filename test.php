<?php
$url = 'https://jsonplaceholder.typicode.com/posts';
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
<h1>Data Posts dari jsonplaceholder API (PHP)</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Body</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $post): ?>
      <tr>
        <td><?php echo $post['id']; ?></php>
        </td>
        <td><?php echo htmlspecialchars($post['title']); ?></php>
        </td>
        <td><?php echo htmlspecialchars($post['body']); ?></php>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<body>

</body>

</html>