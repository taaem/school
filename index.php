<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Test</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/forms.css">
    <script src="scripts/main.js"></script>
    <script src="bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <link rel="import" href="elements/paper-button-submit.html">
    <link rel="import" href="bower_components/paper-button/paper-button.html">
    <link rel="import" href="bower_components/paper-input/paper-input.html">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
</head>

<body fullbleed>
<div id="header">
    <div id="logo"></div>

    <nav id="navheader">
          <!--  <a href="" id="link">About me</a>
            <a href="" id="link">Shop</a>
            <a href="" id="link">Contact</a>
            -->
        <div class="forms">
            <div class="login">
                <div class="handle" onclick="toggleClass(login)">Login</div>
                <div class="hidden" id="login">
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
            </div>
        

            <div class="register">
                <div class="handle" onclick="toggleClass(register)">Registrieren</div>
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
            </div>
        </div>

    </nav>

    <h1 id="title">Test Website</h1>

    <p id="sub">Cool // Stuff // I know</p>

    <nav id="shopnav">
        <a href="" id="shop">Unicorns</a>
        <a href="" id="shop">Two</a>
        <a href="" id="shop">Three</a>
        <a href="" id="shop">Four</a>
    </nav>
</div>

<!--<div class="forms">
    <div class="login">
        <div class="handle" onclick="toggleClass(login)">Login</div>
        <div class="hidden" id="login">
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
    </div>
-->
<!--    <div class="register">
        <div class="handle" onclick="toggleClass(register)">Registrieren</div>
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
    </div>
</div>
-->

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum tempora debitis quisquam eius illo quis, neque quibusdam necessitatibus totam! Eaque, alias explicabo recusandae architecto ratione quam repellat rem, impedit. Ratione!</p>


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
</body>
</html>