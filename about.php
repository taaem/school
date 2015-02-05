<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Unicorns</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/forms.css">
    <link rel="stylesheet" href="styles/content.css">
    <script src="scripts/main.js"></script>
    <script src="bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <link rel="import" href="elements/paper-button-submit.html">
    <link rel="import" href="bower_components/paper-button/paper-button.html">
    <link rel="import" href="bower_components/paper-input/paper-input.html">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body fullbleed>
<?php
session_start();
if (isset($_SESSION['user'])){
    $classname = "loggedin";
    $userclass = "";
}else{
    $classname = "";
    $userclass = "loggedout";
}
?>
<div class="background">
<h1 id="title">Unicorns</h1>

<p id="sub">Cool // Stuff // I know</p>
</div>

<nav id="shopnav">
    <ul>
        <li id="logo"><a href="index.php" style="display: inline;"></a></li>
        <li><a href="#" id="shop">Unicorns</a></li>
        <li><a href="#" id="shop">Zubehör</a></li>
        <li><a href="#" id="shop">Story</a></li>
        <li><a href="about.php" id="shop">About us</a></li>
        <li>
            <div  class="<?php echo $userclass; ?>"><a id="shop" href="#">Welcome <?php echo $_SESSION['user']; ?></a></div>
        </li>
        <li>
            <div  class="<?php echo $userclass; ?>"><a id="shop" href="logout.php">Logout</a></div>
        </li>
        <li><div class="<?php echo $classname; ?>">
            <div class="handle">Login</div>
            <div class="login" id="login">
                <form action="login.php" method="post">
                    <paper-input-decorator label="Username" floatingLabel class="input">
                        <input type="Text" name="username">
                    </paper-input-decorator>
                    <paper-input-decorator label="Passwort" floatingLabel class="input">
                        <input type="Password" name="password">
                    </paper-input-decorator>
                    <button type="submit" is="paper-button-submit">Login</button><br><br>
                </form>
            </div>
        </div></li>
        <li><div class="<?php echo $classname; ?>">
            <div class="handle">Registrieren</div>
            <div class="hidden" id="register">
                <form action="register.php" method="post">
                    <paper-input-decorator label="Username" class="input" floatingLabel>
                        <input type="Text" name="username">
                    </paper-input-decorator>
                    <paper-input-decorator label="Passwort" class="input" floatingLabel>
                        <input type="Password" name="password">
                    </paper-input-decorator>
                    <paper-input-decorator label="Passwort wiederholen" class="input" floatingLabel>
                        <input type="Password" name="password2">
                    </paper-input-decorator>
                    <button type="submit" is="paper-button-submit">Registrieren</button><br><br>
                </form>
            </div>
        </div></li>
    </ul>
</nav>

<div class="content">
</div>
<div id="footer">
    <div id="logofooter"></div>

    <div id="content">
        <nav id="navfooter">
            <a href="" id="link">About me</a>
            <a href="" id="link">Shop</a>
            <a href="" id="link">Contact</a>
        </nav>
        <p id="copyright">All Content copyright 2014</p>
    </div>
</div>
</div>

</body>
</html>
