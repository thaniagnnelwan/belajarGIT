<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage | Blog | Thania Nelwan - UNSRAT</title>
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
                        // Koneksi ke database
                        $conn = new mysqli('localhost', 'root', '', 'web_db');
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Ambil data artikel dari database
                        $sql = "SELECT id, title FROM blog_posts";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<a href="article.php?id=' . $row['id'] . '">' . $row['title'] . '</a>';
                            }
                        } else {
                            echo "No posts found.";
                        }

                        $conn->close();
                        ?>
                    </div>
                </li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Blog</h2>
            <?php
            // Koneksi ke database
            $conn = new mysqli('localhost', 'root', '', 'personal_website');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Ambil data artikel dari database
            $sql = "SELECT id, title, content, image FROM blog_posts";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="article">';
                    echo '<h3><a href="article.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h3>';
                    if ($row['image']) {
                        echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '" class="article-image" width="300px">';
                    }
                    echo '<p>' . substr($row['content'], 0, 150) . '...</p>';
                    echo '<a href="article.php?id=' . $row['id'] . '">Read more</a>';
                    echo '</div>';
                }
            } else {
                echo "No posts found.";
            }

            $conn->close();
            ?>
        </section>
    </main>
</body>

</html>