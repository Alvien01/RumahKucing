<?php 

include 'koneksi.php';
if(isset($_POST['login'])) {
  $requestUsername = $_POST['username'];
  $requestPassword = $_POST['password'];

  $sql = "SELECT * FROM tb_admin WHERE username = '$requestUsername'";
  list($id, $email, $password,  $username) = mysqli_fetch_row(mysqli_query($koneksi, $sql));
  $result = mysqli_query($koneksi, $sql);
  var_dump($result);
  if(mysqli_num_rows($result) > 0) {
    if (password_verify($requestPassword, $password)) {
        while($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['is_login'] = true;
            header('location:admin.php');
        }
      } else { 
          echo "
          <script>
            alert('email atau password anda salah, Silahkan coba lagi');
            window.location = 'login.php';
          </script>
          ";
      }
    } else { 
        echo "
        <script>
          alert('email atau password anda salah, Silahkan coba lagi');
          window.location = 'login.php';
        </script>
        ";
    }
}

?>
