<?php
$url = 'https://jsonplaceholder.typicode.com/users';
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
<h1>Data users dari jsonplaceholder API (PHP)</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>nama</th>
      <th>username</th>
      <th>email</th>
      <th>alamat</th>
      <th>ip hp</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $user): ?>
      <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo htmlspecialchars($user['name']); ?></td>
        <td><?php echo htmlspecialchars($user['username']); ?></td>
        <td><?php echo htmlspecialchars($user['email']); ?></td>
        <td>
          <?php
          // Menampilkan alamat dalam format yang lebih terstruktur
          echo htmlspecialchars($user['address']['street']) . ', ' .
            htmlspecialchars($user['address']['suite']) . ', ' .
            htmlspecialchars($user['address']['city']) . ', ' .
            htmlspecialchars($user['address']['zipcode']);
          ?>
        </td>
        <td><?php echo htmlspecialchars($user['phone']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<body>

</body>

</html>