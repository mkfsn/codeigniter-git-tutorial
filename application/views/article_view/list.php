<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guestbook</title>
</head>
<body>
	<table border="1">
		<tbody>
<?php foreach ($articles as $article) { ?>
			<tr>
				<td><?php echo $article['name']; ?></td>
				<td><?php echo $article['content']; ?></td>
				<td><?php echo $article['createtime']; ?></td>
			</tr>
<?php } ?>
		</tbody>
	</table>
</body>
</html>
