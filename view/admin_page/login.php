<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../../src/stylesheet/loginstyle.css">
  <title>Admin Login</title>
</head>
<body>
  <?php
  include_once "../../src/php/db.php";
  $query = "SELECT * FROM settings";
  mysqli_query($conn, $query);
  ?>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="../../src/php/proses_login.php" class="signin-form" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" class="form-control" name="username" required>
                        <label for="form-control-placeholeder">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" class="form-control" required>
                        <label for="form-control-placeholeder">Password</label>
                    </div>
                    <!-- <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                    </div> -->
                    <button type="submit">Log in</button>
                    <!-- <div class="register">
                        <p>Don't have a account <a href="#">Register</a></p>
                    </div> -->
                    <div class="g-recapthca" data-sitekey="YOUR_SITE_KEY"></div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>