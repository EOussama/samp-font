<?php
    /**
     * @name:       Samp Front
     * @version:    0.5.0
     * @author:     EOussama (eoussama.github.io)
     * @license     MIT
     * @source:     github.com/EOussama/samp-front
     */

    // Requiring all dependencies.
    require_once "../config/config.php";

    // Loading the website's configurations.
    $config = unserialize(CONFIG);

    session_start();

    if (isset($_SESSION['loggedIn']) &&$_SESSION['loggedIn'] == true) {
        header('Location: ./dashboard.php');
        die();
    }

    // The error reporter.
    $error = false;

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = htmlspecialchars(strip_tags($_POST['password']));

        if ($password == $config['dashboardPassword']) {
            
            $_SESSION['loggedIn'] = true;

            header('Location: ./dashboard.php');
        } else {
            $error = true;
        }
    }

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
        <link rel="stylesheet" href="<?php echo $config['root']; ?>/assets/css/login/login.css">

        <!-- The website's favicon. -->
        <link rel="shortcut icon" type="image/png" href="<?php echo $config['root']; ?>/assets/img/logo.png">

        <!-- The website's title -->
        <title><?php echo $config['name']; ?></title>
    </head>

    <body class="<?php echo $config['darkMode'] ? "dark" : "";  ?>">
        <main class="ui container">

            <!-- The page's content -->
            <div class="content-wrapper">
                <img src="<?php echo $config['root']; ?>/assets/img/logo.png" alt="Community logo.">
                <h1><?php echo $config['name']; ?></h1>
                <p>In order to access the dashboard, a password is required.</p>

                <div class="ui divider"></div>

                <?php if ($error): ?>
                    <div class="ui negative message">
                        <i class="close icon"></i>
                        <div class="header">Error</div>
                        <p>The password you've provided is wrong.</p>
                    </div>
                <?php endif; ?>

                <!-- Logging-in form. -->
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="ui <?php echo $inverted; ?> form">
                    <div class="field">
                        <label>Input the dashboard's password below</label>
                        <input type="password" name="password" placeholder="Password..." required>
                    </div>

                    <button class="ui <?php echo $inverted; ?> fluid button" type="submit">Login</button>
                </form>
            </div>
        </main>

         <!-- The footer. -->
         <footer class="ui basic segment">
            
            <!-- Trademark -->
            <?php require_once "./partials/_trademark.php"; ?>
        </footer>

        <!-- JQuery. -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Semantic UI. -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>

        <!-- The main script -->
        <script src="<?php echo $config['root']; ?>/assets/js/login/login.js"></script>
    </body>
</html>