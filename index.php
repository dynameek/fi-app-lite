<?php
    session_start();
    require_once('./web.php');
    require_once('./processes/login.process.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FieldInsights</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            Asset::loadStyles(['general', 'forms', 'index-specific', 'colors', 'links']);
            Asset::loadScripts(['system.js', 'login-handler.js']);
        ?>
    </head>
    <body>
        <div class="page-wrap">
            <div>
                <div class="site-icon">
                    <?php Asset::loadImage('fi-logo.png') ?>
                </div>
                <div class="form-wrapper">
                    <h3>Log In</h3>
                    <form name="fi_login" method="post" action="">
                        <?= Security::protectForm() ?>
                        <div id="form-message"><?=isset($msg) ? $msg : ''?></div>
                        <input type="email" name="fi_email" placeholder="Email Address">
                        <input type="password" name="fi_passwd" placeholder="Password">
                        <input type="button" name="fi-login-sub" value="Log In" id='lg-btn' class="bg-cool-blue no-border">
                    </form>
                </div>
                <div>Don't have an account? <a href="./register.php">Sign Up</a></div>
            </div>
        </div>
    </body>
</html>