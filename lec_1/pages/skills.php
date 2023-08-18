<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="stylesheet" href="../style/skills.css">
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
    <h1>Skills Set</h1>
    <main>
        <?php
        $userProfile = file_get_contents("../data/profile.json");
        $userProfile = json_decode($userProfile);
        foreach ($userProfile->skills as $skill) {
            ?>
            <div class="skill">
                <h3>
                    <?php echo $skill->title; ?>
                </h3>
                <h4>
                    <?php echo $skill->level; ?>
                </h4>
                <p>
                    <?php echo $skill->description; ?>
                </p>
            </div>
            <?php
        }
        ?>
    </main>
</body>

</html>