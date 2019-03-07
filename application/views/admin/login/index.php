<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="<?php echo public_url() ?>admin/images/icon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo public_url() ?>admin/css/login.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="nobg loginPage" style="min-height:100%;">
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Đăng nhập Quản Trị</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" id="param_username" class="form-control" placeholder="UserName" required autofocus>
                <label for="param_username">Tên đăng nhập</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="param_password" class="form-control" placeholder="Password" required>
                <label for="param_password">Mật khẩu</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase dredB logMeIn" type="submit">Đăng Nhập</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>    
  <?php $this->load->view('admin/footer'); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html> 