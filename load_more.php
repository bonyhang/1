<?php
include 'includes/config.php';

$sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 3 OFFSET 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<article class='blog-post'>";
        echo "<h2>{$row['title']}</h2>";
        echo "<p class='meta'>Published: " . date('F j, Y', strtotime($row['created_at'])) . " - by <span class='author'>{$row['author']}</span></p>";
        echo "<img class='article-image' src='images/{$row['image']}' alt='{$row['title']}'>";
        echo "<p>{$row['content']}</p>";
        echo "</article>";
    }
}
?>
