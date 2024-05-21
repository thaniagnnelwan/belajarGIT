<?php
include 'config.php';
include 'header.php';
$id = $_GET['id'];
$sql = "SELECT * FROM blog_posts WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage | Article | Thania Nelwan - UNSRAT</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>

<body>

    <header>
        <h2>Thania</h2>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="dropdown" id="blog-dropdown">
                    <a class="dropbtn" onclick="toggleDropdown()">Blog &#9662;</a>
                    <div class="dropdown-content" id="blog-dropdown-content">
                        <?php
                        include 'config.php';
                        $sql = "SELECT id, title FROM articles";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<a href="article.php?id=' . $row["id"] . '">' . $row["title"] . '</a>';
                            }
                        }
                        ?>
                    </div>
                </li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="article-section">
            <?php
            include 'config.php';
            $article_id = $_GET['id'];
            $sql = "SELECT * FROM articles WHERE id=$article_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<h2>' . $row["title"] . '</h2>';
                    echo '<img src="' . $row["image"] . '" alt="Gambar ' . $row["title"] . '" class="article-image" width="300px">';
                    echo '<p>' . $row["content"] . '</p>';
                }
            } else {
                echo "Article not found.";
            }
            ?>
        </section>
    </main>

</body>

</html>