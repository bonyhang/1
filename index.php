<?php
include 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Blog with Ads & Auto-Load</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main class="container">
        
        <!-- 🔹 Fixed Ad Before Content -->
        <div class="fixed-ad">
            <script src="ads/ad-script.js"></script> <!-- Load Ad -->
        </div>

        <?php
        // Fetch blog posts from database
        $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<article class='blog-post'>";
                echo "<h1>{$row['title']}</h1>";
                echo "<p class='meta'>Published: " . date('F j, Y', strtotime($row['created_at'])) . " - by <span class='author'>{$row['author']}</span></p>";
                echo "<img class='article-image' src='images/{$row['image']}' alt='{$row['title']}'>";
                echo "<p>{$row['content']}</p>";
                echo "</article>";
            }
        }
        ?>

        <!-- 🔹 Native Ad After Content -->
        <div class="native-ad">
            <h3>Recommended for You</h3>
            <script src="ads/ad-script.js"></script> <!-- Load Ad -->
        </div>

        <!-- 🔹 Auto-Loading More Content -->
        <div id="auto-load-content"></div>

    </main>

    <?php include 'includes/footer.php'; ?>

</body>
</html>
