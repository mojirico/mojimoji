<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
  if($error_message) {
      echo $error_message;
  }
?>

<?php
  // session_start();
  $error_message = "";
  if(isset($_POST["login"])) {

      if($_POST["user_name"] == "webtan" && $_POST["password"] == "webtan_pass") {
          $_SESSION["user_name"] = $_POST["user_name"];
          $login_success_url = "login_success.php";
          header("Location: {$signin_success_url}");
          exit;
      }
  $error_message = "※ID、もしくはパスワードが間違っています。<br>もう一度入力して下さい。";
  }
?>


<!doctype html>
<html lang="ja">
<body>
<div class="container-fluid">
  <div class="container-md">

    <form action="index.php" method="POST">
      <p>ログインID：<input type="text" name="user_name"></p>
      <p>パスワード：<input type="password" name="password"></p>
      <input type="submit" name="login" value="ログイン">
    </form>



  </div>
  </div>
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
