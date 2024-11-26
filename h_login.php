<section class="content">
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Login User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
              <?php
if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and 
    password='$password'");

if(mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    $_SESSION['user'] = $data;
    echo '<script>alert("Selamat Datang, '.$data['nama'].' "); 
    location.href="index.php";</script>';
   }
    else{ 
        echo '<script>alert("Username/password tidak sesuai.");</script>';
      }
}

 ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
          
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </section>
            </div>
            
</body>
</html>