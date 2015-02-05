<?php
session_start();
require __DIR__ . '/inc/db.inc.php';

if (isset($_SESSION['user'])){
    $classname = "loggedin";
    $userclass = "";
}else{
    $classname = "";
    $userclass = "loggedout";
}
$rowsquery = mysqli_query($conn, "SELECT COUNT(*) FROM `products`");
$num_rows = mysqli_fetch_array($rowsquery);

function product($name='', $desc='', $price='')
{
?>
  <div class='wrapper'>
  <paper-shadow z='5'>
  <shop-elements>
      <img class='product' src='pictures/<?php echo $name; ?>.png'>
      <p><?php echo $desc; ?></p>
      <p id='price'><?php echo $price; ?><span>00</span>€</p>
  </shop-elements>
  </paper-shadow>
  </div>
<?php
};

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/forms.css">
    <link rel="stylesheet" href="styles/content.css">
    <script src="scripts/main.js"></script>
    <script src="bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <link rel="import" href="elements/paper-button-submit.html">
    <link rel="import" href="elements/log-form.html">
    <link rel="import" href="elements/reg-form.html">
    <link rel="import" href="elements/shop-elements.html">
    <link rel="import" href="bower_components/paper-button/paper-button.html">
    <link rel="import" href="bower_components/paper-shadow/paper-shadow.html">
    <link rel="import" href="bower_components/paper-input/paper-input.html">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,500' rel='stylesheet' type='text/css'>
</head>

<body fullbleed>

    <div class="background">
    <h1 id="title">Test Website</h1>

    <p id="sub">Cool // Stuff // I know</p>
    </div>
</div>
    <nav id="shopnav">
        <ul>
            <li><a href="index.php"><img id="logo" src="pictures/unicornlogo.png"></a></li>
            <li><a href="#" id="shop">Unicorns</a></li>
            <li><a href="#" id="shop">Two</a></li>
            <li><a href="#" id="shop">Three</a></li>
            <li><a href="#" id="shop">Four</a></li>
            <li>
                <div class="<?php echo $userclass; ?>"><a href="#">Welcome <?php echo $_SESSION['user']; ?></a></div>
            </li>
            <li>
                <div class="<?php echo $userclass; ?>"><a href="logout.php">Logout</a></div>
            </li>
            <li><div class="<?php echo $classname; ?>">
                <div class="handle">Login</div>
                <div class="login" id="login">
                    <form is="log-form">
                    </form>
                </div>
            </div></li>
            <li><div class="<?php echo $classname; ?>">
                <div class="handle">Registrieren</div>
                <div class="hidden" id="register">
                    <form is="reg-form">
                    </form>
                </div>
            </div></li>
        </ul>
    </nav>

<div class="content">
<?php
 $rows = $num_rows['COUNT(*)'] + 1;
 for ($i=1; $i < $rows; $i++) {
    $query= "SELECT * FROM products WHERE id = '" . $i . "'";
    $sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($sql);
    product($row['name'], $row['description'], $row['price']);
}
?>
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
</body>
</html>
