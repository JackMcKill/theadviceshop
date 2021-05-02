<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">

    <aside id="login"><?php
        if (isset($_SESSION['username'])) {

            echo "Logged in as " . $_SESSION['username'] . "<br>";
            echo "<a href=\"account.php?page=$name\">Account</a> ";
        } else {
            echo "<aside id='login'><form action='login.php?page=<?php echo $name; ?>' method='post'><input name='username' id='username' type='text' placeholder='Username'><input name='submit' type='submit' value='Login'></form></aside>";
        }
        ?>

    </aside>

<a href="index.php"><h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1></a>
</header>
