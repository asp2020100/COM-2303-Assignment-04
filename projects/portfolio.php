<?php
include 'functions.php'; // Include the file containing your functions and database connection

// Now you can use the getProjects function to retrieve project data
$projects = getProjects();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <!-- Include your CSS and other necessary resources here -->
</head>
<body>

<section id="portfolio">
    <h2>Portfolio</h2>
    <div class="container">
        <?php
        foreach ($projects as $project) {
            echo '<div class="item">';
            echo '<a href="' . $project['Image'] . '" target="_blank">';
            echo '<img src="' . $project['Image'] . '" alt="' . $project['Title'] . '">';
            echo '</a>';
            echo '<div class="caption">';
            echo '<h3>' . $project['Title'] . '</h3>';
            echo '<p>' . $project['Description'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</section>

<!-- Include your JavaScript and other resources here -->

</body>
</html>
