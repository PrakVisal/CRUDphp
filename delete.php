<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM phpcrud WHERE id = ?");
$stmt->execute([$id]);
header("Location: index.php");
exit();
?><?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM phpcrud WHERE id = ?");
$stmt->execute([$id]);
header("Location: index.php");
exit();
?>