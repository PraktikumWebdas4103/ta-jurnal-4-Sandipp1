<?php
session_start();
error_reporting(0);
        $user = array(
                        "user" =>"sandi",
                        "pass"=>"sandi"            
                );
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
    
        $_SESSION["username"] = $_POST['username']; 
        echo header("Location: index.php");

    
    } else {
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
<table>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
    <tr>
    <td><label for="username">username</label></td>
    <td><input type="text" name="username" id="username"><br></td>
    </tr>
    <tr>
    <td><label for="password">password</label></td>
    <td><input type="password" name="password" id="password"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="submit" value="submit"></td>
    </tr>
    </table>
    </form>    
<?php } ?>