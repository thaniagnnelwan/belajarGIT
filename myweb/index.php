<?php
// Mulai session
session_start();

// Periksa apakah perasaan ada dalam session
$feeling = isset($_SESSION['feeling']) ? $_SESSION['feeling'] : '';

// Hapus perasaan dari session setelah menampilkannya
unset($_SESSION['feeling']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage | Home | Thania Nelwan - UNSRAT</title>
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

    <main id="main-content">
        <section class="homepage">
            <div class="text">
                <h2 class="h2">Welcome!</h2>
                <p>“Attitude is a choice. Happiness is a choice. Optimism is a choice. Kindness is a choice. Giving is a choice. Respect is a choice. Whatever choice you make makes you. Choose wisely.”
                    ― Roy T. Bennett, The Light in the Heart</p>

                <form action="process_feelings.php" method="POST">
                    <label for="feelings">How do you feel today?</label><br>
                    <select name="feelings" id="feelings">
                        <option value="Happy">Happy</option>
                        <option value="Sad">Sad</option>
                        <option value="Excited">Excited</option>
                        <option value="Angry">Angry</option>
                        <option value="Relaxed">Relaxed</option>
                    </select><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </section>
    </main>

</body>

</html>