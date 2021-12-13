<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My css -->
    <link rel="stylesheet" href="<?php echo base_url('plugin/Css/style.css');?>">
    
    
    <title><?php echo $title; ?></title>
</head>  
<body>
<section id="Navbar">
  <div id="side-bar">
      <h1>Admin</h1>
      <div class="list-1">
        <div class="profile">
        <div class="img-box">
            <img src="<?php echo base_url('plugin/assets/avatar-user.png');?>" alt="">
        </div>
        <div class="name">
            <h2>Fadel Mahamid</h2>
            <p>fadelmahamid@gmail.com</p>
        </div>
        </div>
        <ul>
            <li class="list">
                <a href="/">
                    <span class="far fa-list-alt"></span>
                    Data Users
                </a>
            </li>
            <li class="list">
                <a href="/RS/UserOn">
                    <span class="far fa-user"></span>
                    User Active
                </a>
            </li>
            <li class="list">
                <a href="/RS/UserOff">
                    <span class="far fa-user"></span>
                    User Non Active
                </a>
            </li>
        </ul>
      </div>
      <div class="list-2">
          <ul>
              <li class="list">
                  <a href="/RS/Login">
                    <span><ion-icon name="log-in-outline"></ion-icon></span>
                    Login
                  </a>
              </li>
              <li class="list">
                  <a href="/RS/Register">
                    <span><ion-icon name="medkit-outline"></ion-icon></span>
                    Register
                  </a>
              </li>
              <li class="list">
                  <a href="">
                    <span><ion-icon name="settings-outline"></ion-icon></span>
                    Setting
                  </a>
              </li>
          </ul>
      </div>
  </div>
  <div id="top-bar">
        <div class="search">
          <span class="fas fa-search"></span>
          <input type="text" name="" id="" placeholder="Search for a user">
        </div>
        <div class="icon">
            <span class="far fa-bell"></span>
        </div>
    </div>

    <?php $this->renderSection('content');?>

    <footer>

</footer>
</section>

<script>
    // const list = document.querySelectorAll('.list');
    //     function activelink(){
    //         list.forEach((item) => 
    //         item.classList.remove('active'));
    //         this.classList.add('active')
    //     }
    //     list.forEach((item) => 
    //     item.addEventListener('click', activelink));
</script>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://kit.fontawesome.com/7346f1ceb6.js" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>