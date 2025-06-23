<?php
session_start();
include 'db.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION['role'] == 'admin' && isset($_POST['title'], $_POST['description'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $stmt = $conn->prepare("INSERT INTO listings (title, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $description);
    $stmt->execute();
}

$listings = $conn->query("SELECT * FROM listings");
?>
<form method="post">
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Add Listing</button>
</form>
<ul>
    <?php while ($row = $listings->fetch_assoc()): ?>
        <li><?php echo $row['title'] . " - " . $row['description']; ?></li>
    <?php endwhile; ?>
</ul>