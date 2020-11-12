<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // collect value of input field
    $namecheck=$_REQUEST['name'];
    if (empty($namecheck)){
        ?>
        <div class="container" >
        <div class="alert alert-danger">
            <strong><h2>Lỗi !</h2></strong>Tên không được để trống.
        </div>
</div>
    <?php    
        include ('1.php');
        exit();
    }
          $magv=$_POST['magv'];
          $name = $_POST['name'];
          $gender = $_POST['gender'];
          $birthday = $_POST['birthday'];
          $sdt = $_POST['sdt'];
          $email = $_POST['email'];  
          $diachi = $_POST['diachi'];
          $daymon = $_POST['daymon'];

          $conn=mysqli_connect('localhost', 'root' , '' , 'ktr');
          if(!$conn){
              die(" <h2>Lỗi kết nối</h2> " . $conn->connect_error);
          }
          $sql="INSERT INTO `gv`( `magv`, `name`, `gender`, `birthday`, `sdt`, `email`, `diachi`, `daymon` )
          VALUES ( '$magv' , '$name' , '$gender' , '$birthday' , '$sdt' ,'$email' , '$diachi' , '$daymon' )";
          if (mysqli_query($conn, $sql)) {
              ?>  
              <div class="alert alert-success">
                <strong><h2>Thành công!</h2></strong>Thông tin được cập nhật thành công.
                </div>
            <?php  include ('2.php');
          } else {
              echo "<h2>Lỗi:</h2> " . $sql . "<br>" . mysqli_error($conn);
          }
          mysqli_close($conn);
      }     
?>
<!doctype html>
<html lang="en">
  <head>
    <title>INSERT DATA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
