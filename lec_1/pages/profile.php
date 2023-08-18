<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/profile.css">
    <title>Profile</title>
</head>
<body>
<nav>
        <div class="navBar">
            <a href="../home.php">
                Home
            </a>
            <a href="./profile.php">
                Profile
            </a>
            <a href="./skills.php">
                Skills
            </a>
        </div>
    </nav>
    <main>
        <?php
            $userProfile = file_get_contents("../data/profile.json");
            $userProfile = json_decode($userProfile);
            ?><div class="profileContainer">
            <div class="profileImage">
                <img src=<?php echo $userProfile->avatar ?> alt="">
            </div>
            <h2><?php echo $userProfile->name ?></h2>
            <h3><a href="mailto:<?php echo $userProfile->email ?>">fouad.abd-elhady@outlook.com</a></h3>
            <p>"<?php echo $userProfile->bio ?>"</p>
        </div><?php
        ?>
    </main>
</body>
</html>