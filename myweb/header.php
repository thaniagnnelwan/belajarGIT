<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage | Thania Nelwan - UNSRAT</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js"></script>
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
                        $sql = "SELECT * FROM articles";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<a href='article.php?id=" . $row["id"] . "'>" . $row["title"] . "</a>";
                            }
                        } else {
                            echo "No articles found";
                        }
                        ?>
                    </div>
                </li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>