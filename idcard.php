<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Id Card - Bumi Padjajaran Kiwari</title>
  </head>
  <body>
      <div class="container">
          <div class="row mt-3 align-center">
              <div class="col-md-8">
                  <h1>Id Card Pegawai</h1>

                  <?php
                    include('koneksi.php');
                    if ($_GET) {
                    // collect value of input field 
                    ?>

                    <table class="table table-striped table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Name</th>
                        </thead>
                        <tbody>
                    <?php

                    $query = mysqli_query($conn, 'SELECT * FROM pegawai where id="'.$_GET['id'].'" ');
                    while($data = mysqli_fetch_array($query)){
                    ?> 
                      <tr>
                            <td>1</td>
                            <td><?php echo $data['nik']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    
                            
                        </tbody>
                    </table>

                    <?php
                    }
                    ?>

                    <?php
                        echo '';
                    ?>
                  

              </div>
          </div>
      </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: ootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>