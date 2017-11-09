<?php
/*$user_id=$this->session->userdata('id');
if(!$user_id){

  redirect('user/login_view');
}*/

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">Bienvenido Usuario:</h3></th>

        </tr>
          <tr>
            <td>Nombre</td>
            <td><?php echo $this->session->userdata('nombre'); ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $this->session->userdata('email');  ?></td>
          </tr>
          <tr>
            <td>Age</td>
            <td><?php echo $this->session->userdata('cumpleanios');  ?></td>
          </tr>
    </div>
  </div>
<a href="<?php echo base_url('autorizar/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>
