<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <script src="js/staff.js"></script>
</head>
<body>
    <header>
      <?php require_once("imports/header.php"); ?>
    </header>
    <div id="content">
        <h1>Staff</h1>

        <form  method="post">            

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input id="user" type="text" placeholder="Enter Username" name="uname" required>
                </br>
                <label for="psw"><b>Password</b></label>
                <input id="password"type="password" placeholder="Enter Password" name="psw" required>
                </br>
                <button id = "submit" type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            
        </form>

    </div>
    <footer>
      <?php require_once("imports/footer.php"); ?>
    </footer>
</body>
</html>