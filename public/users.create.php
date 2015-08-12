<?php
//require_once ;
if (empty($_POST)) {
  print_r("Tom Lorne Mars");
}
else if (!empty($_POST)) {
  $query = 'INSERT INTO users (userName, password, email, phone, firstName, lastName)
      VALUES (:userName, :password, :email, :phone, :firstName, :lastName)';

  $stmt = $dbc->prepare($query);
  $stmt->bindValue(':userName',       $_POST['userName'], PDO::PARAM_STR);
  $stmt->bindValue(':password',       $_POST['password'], PDO::PARAM_STR);
  $stmt->bindValue(':email',          $_POST['email'],    PDO::PARAM_STR);
  $stmt->bindValue(':phone',          $_POST['phone'],    PDO::PARAM_STR);
  $stmt->bindValue(':firstName',      $_POST['firstName'], PDO::PARAM_STR);
  $stmt->bindValue(':lastName',       $_POST['lastName'], PDO::PARAM_STR);
  $stmt->execute();
  echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
?>
<html>
<body>
<h1 class="userCreate">Register</h1>
	<form>
        <div class="userCreate form-group">
            <label for="userName"></label>
            <input type="text" name="userName" class="form-control" id="userName" placeholder="userName">
        </div>
        <div class="userCreate form-group">
            <label for="password"></label>
            <input type="text" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="userCreate form-group">
            <label for="email"></label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="userCreate form-group">
            <label for="phone"></label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="userCreate form-group">
            <label for="firstName"></label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
        </div>
        <div class="userCreate form-group">
            <label for="lastName"></label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
        </div>
        <div class="userCreate form-group">
            <label for="image">File input</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit" class="userCreate btn-submit btn-default">Submit</button>
    </form>
</body>
</html>
