<?php

//session_start();
require_once "ad.show.php";
require_once "users.create.php";
require_once "create_form_test.php";
//require_once "bat_login.php";

 ?>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-static-top">
              <a class="navbar-brand page-scroll" href="#page-top">
                  <i class="fa fa-play-circle"></i>  <span class="light">Holy Batschelet!</span>
              </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                  <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#browse">Browse</a>
                  </li>
                  <li>
                      <a href="#" data-toggle="modal" data-target="#loginModal">Log In</a>

                  </li>
                  <li>
                      <a href="#" data-toggle="modal" data-target="#registerModal">Sign Up</a>
                  </li>
                  <li>
                      <a href="#" data-toggle="modal" data-target="#myModal">List your Bat Ad</a>
                  </li>

              </ul>

          </div>
          <!-- /.navbar-collapse -->
          </nav>

          <!-- REGISTER MODAL -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="registerModalLabel">Please create a new alter ego</h4>
</div>
<div class="modal-body">
  <form method="POST" action="Index.php">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Submit</button>
        </div>

    </form>
</div>
</div>
</div>
</div>
<!-- END REGISTER MODAL -->

<!-- Modal -->
                        <div class="modal fade container" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Create Ad</h4>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="Index.php" enctype="multipart/form-data">
                                      <fieldset>
                                      <div class="adCreate form-group">
                                          <label for="item_name"></label>
                                          <input type="text" name="item_name" class="form-control" id="item_name" placeholder="Item Name">
                                      </div>
                                      <div class="adCreate form-group input-group">
                                        <label for="price"></label>
                                        <span class="input-group-addon">$</span>
                                        <input type="number" name="price"class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon">.00</span>
                                      </div>
                                      <div class="adCreate form-group">
                                          <label for="used_against"></label>
                                          <input type="text" name="used_against" class="form-control" id="used_against" placeholder="Used Against">
                                      </div>
                                      <div class="adCreate form-group">
                                          <label for="bat_condition"></label>
                                          <input type="text" name="bat_condition" class="form-control" id="bat_condition" placeholder="Condition">
                                      </div>
                                      <div class="adCreate form-group">
                                          <label for="generation"></label>
                                          <input type="text" name="generation" class="form-control" id="generation" placeholder="Generation">
                                      </div>
                                      <div class="adCreate form-group">
                                          <label for="image">File input</label>
                                          <input type="file" name="image" id="image">
                                      </div>

                                      </div>
                                      <div class="adCreate form-group center">
                                          <label for="description"></label>
                                          <input type="text" name="description" class="form-control" id="description" placeholder="Description">
                                      </div>

                                      <button type="submit" class="adCreate btn-submit btn-default">Submit</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    <div class="modal-footer">

                                </form>
                              </div>
                            </div>
                          </div>


                          <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="loginModalLabel">Please enter your username and password</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="bat_login.php">
                          				<label>Username</label>
                          				<input type="text" name="login_user_name" id="login_user_name"><br>
                          				<label>Password</label>
                          				<input type="text" name="login_password" id="login_password"><br>
                          				<input type="submit">
                                          <div class="modal-footer">
                                          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-warning">Submit</button>
                                          </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
