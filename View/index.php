<?php include_once '../Config/database.php'; ?>
<?php include_once '../Model/User.php'; ?>

<!DOCTYPE html>
<?php include_once 'header.php'; ?>
<html lang="en">
<body>
<div class="container">

  <!--  <div class="panel panel-danger info">
      <div class="panel-heading">
      <?php
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
      ?>
    </div> -->

<br><br>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>e-mail</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>John</td>
            <td>Doe</td>
            <td>28</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Mary</td>
            <td>Moe</td>
            <td>25</td>
            <td>mary@example.com</td>
          </tr>
          <tr>
            <td>3</td>
            <td>July</td>
            <td>Dooley</td>
            <td>44</td>
            <td>july@example.com</td>
          </tr>
        <!--  <?php getUsers(); ?> -->
        </tbody>
        </table>
    </div>

<?php include_once 'footer.php'; ?>
</div>
</body>
</html>
