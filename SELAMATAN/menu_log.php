<html>
  <head>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style-login.css">
    </head>
  <body>
    <br>
    <br>
    <h1 style="text-align: center;">Selamat Datang di Database Absensi<br/> XI PPLG 1</h1>

<div class="kotak_login">
  <p class="tulisan_login">Login admin</p>

  <form method='post'>
    <label>Username</label>
    <input type="text" name="name" class="form_login" placeholder="Username .." required>

    <label>Password</label>
    <input type="password" name="pass" class="form_login" placeholder="Password .." required>

    <input type="submit" class="tombol_login" value="Login" name="submit-btn">

    <br/>
    <br/>
    <center>
      <a class="link" href="sekretaris.php">Login Sebagai Sekretaris</a>
    </center>
  </form>

</div>
      
      <?php
      if(isset($_POST['submit-btn'])){
          $user="admin";
          $pass="ameliaa";
          $username = $_POST['name'];
          $password = $_POST['pass'];
          if($username == $user && $password == $pass) {
              header ("location: input.php" );
          }
          else {
              echo "<div class='alert alert-danger' role='alert'>
              Eyak! Ketahuan mau login ilegal *>* wkwkwkwk!!
            </div>";
          }
      }
    ?>
  </body>


</html>
