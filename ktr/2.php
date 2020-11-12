<!doctype html>
<html lang="en">
  <head>
    <title>Liệt kê giáo viên</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head> 
  <body>
    <div class="container">
    <div class="heading">
       <h3><p class="text-center">Danh sách giáo viên</p></h3>
    </div>    
    <hr> 
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Sửa</th>
                <th>Xóa</th>
                <th>Mã GV</th>
                <th>Tên GV</th>
                <th>SĐT</th>
                <th>Dạy Môn</th>
            </tr>
        </thead>
        <tbody>
        <?php
                            require('connect.php');
                            include("funtion.php");
                            $users= getAllUsers();
                            foreach($users as $row){
                        ?>
                       
                        <tr>
                                <td scope="row">  
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="Checkbox">
                                    <label class="form-check-label" ></label>
                                </div>
                                
                                </td>
                                <td><a href="edit.php?id=<?= $row['id'] ?>"><i class="fas fa-edit"></i></a></td>
                                <td><a href="delete.php?id=<?= $row['id'] ?>"><i class="fas fa-times"></i></a> </td>
                                <td><?= $row['magv'] ;?></td>
                                <td><?= $row['name'] ;?></td>
                                <td><?= $row['sdt'] ;?></td>
                                <td><?php
                                    switch ($row['daymon']) {
                                        case 1:
                                          echo("Văn");
                                          break;
                                        case 2:
                                         echo("Toán");
                                          break;
                                        case 3:
                                          echo("Anh");
                                          break;
                                        case 4:
                                          echo("Vật Lý");
                                          break;
                                        case 5:
                                          echo("Hóa Học");
                                          break;
                                        case 6:
                                          echo("Sinh học");
                                          break;
                                        case 7:
                                         echo("Thể Chất");
                                          break;
                                        }
                                ?> 
                                </td>
                        </tr>
                        <?php
                            }
                            
                        ?> 
    </tbody>
</table>
                        <div>
                        <a href="1.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true"> + Thêm mới</a>
                        <a href="2.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true"> Cập nhật</a>
                        </div>
                    
                    
        
    
 </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>