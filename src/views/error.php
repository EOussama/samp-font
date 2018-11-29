<?php
    /**
     * @name:       Samp Front
     * @version:    0.2.0
     * @author:     EOussama (eoussama.github.io)
     * @license     MIT
     * @source:     github.com/EOussama/samp-front
     */

    // Requiring all dependencies.
    require_once "../config/config.php";

    // Loading the website's configurations.
    $config = unserialize(CONFIG);

    // Setting up the $inverted string, used to make the dark mode
    // work if enabled.
    $inverted = $config['darkMode'] ? 'inverted' : '';
?>

<!DOCTYPE html>

<html lang="en">
    <head>

        <!-- The meta data. -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="EOussama">
        <meta name="application-name" content="Samp Front">
        <meta name="description" content="A starter landing page template for samp servers.">
        <meta name="keywords" content="template, landing-page, samp, samp-server, samp-website">
        
        <!-- Semantic UI. -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

        <!-- The main stylesheet. -->
        <link rel="stylesheet" href="../assets/css/error.css">

        <!-- The website's favicon. -->
        <link rel="shortcut icon" type="image/png" href="../assets/img/logo.png">

        <!-- The website's title -->
        <title><?php echo $config['name']; ?></title>
    </head>

    <body class="<?php echo $config['darkMode'] ? "dark" : "";  ?>">
        <main class="ui container">

            <!-- The page's content -->
            <div class="content-wrapper">
                <img src="../assets/img/logo.png" alt="Community logo.">
                <h1><?php echo $config['name']; ?></h1>

                <p>Page doesn't exist!</p>

                <div class="ui divider"></div>

                <div class="ui large buttons">
                    <button id="home-btn" class="ui <?php echo $inverted; ?> button">Home</button>
                    <div class="or"></div>
                    <button id="back-btn" class="ui <?php echo $inverted; ?> button">Back</button>
                </div>
            </div>
        </main>

        <!-- JQuery. -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- The main script -->
        <script src="../assets/js/error.js"></script>
    </body>
</html>