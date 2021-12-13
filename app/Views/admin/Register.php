<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $title ;?></title>
  </head>
  <body class="p-3 mb-2 bg-light text-dark"><br><br>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container-sm">
    <div class="row gx-5">
    <div class="col">
    <div class="d-flex justify-content-center">
    <div class="card" style="width: 27.5rem;">
        <div class="card-body">
            <h3 class="card-title" style="margin-top: 10px;margin-bottom: 10px;">From Add Users</h3>
            <hr>
            <div class="position-absolute top-50 start-50 translate-middle" style="width: 300px">
            <?php if(isset($validation)) { ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $validation->listErrors() ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>
            </div>
            <form id="database" action="<?php echo base_url('/RS/succes') ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" name="namaPengguna" id="namaPengguna">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="text" class="form-control" name="Password">
            </div>
            <div style="margin-top: 10px;margin-bottom: 10px;">
                <button type="submit" class="btn btn-primary"> Add </button>
                <a href="/" class="btn btn-secondary"> Back </a>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</div>
</div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>