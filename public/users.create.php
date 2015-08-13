<?php
//require_once ;
if (empty($_POST)) {
  (" ");
}
else if (!empty($_POST)) {
  $query = 'INSERT INTO bat_user(first_name, last_name, user_name, password, email)
            VALUES (:first_name, :last_name, :user_name, :password, :email)';

  $stmt = $dbc->prepare($query);
  $stmt->bindValue(':first_name', $user['user_name'], PDO::PARAM_STR);
  $stmt->bindValue(':last_name', $user['user_name'], PDO::PARAM_STR);
  $stmt->bindValue(':user_name', $user['user_name'], PDO::PARAM_STR);
  $stmt->bindValue(':password', $user['password'], PDO::PARAM_STR);
  $stmt->bindValue(':email', $user['email'], PDO::PARAM_STR);
  $stmt->execute();
  // echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Register
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Please create a new user profile</h4>
      </div>
      <div class="modal-body">
        <form>
              <div class="userCreate form-group">
                  <label for="first_name"></label>
                  <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
              </div>
              <div class="userCreate form-group">
                  <label for="last_name"></label>
                  <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
              </div>
              <div class="userCreate form-group">
                  <label for="user_name"></label>
                  <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Username">
              </div>
              <div class="userCreate form-group">
                  <label for="password"></label>
                  <input type="text" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="userCreate form-group">
                  <label for="email"></label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <button type="submit" class="userCreate btn-submit btn-default">Submit</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
