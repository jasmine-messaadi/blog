
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
</head>


<?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> Wrong password !
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> This account dosn't exist !
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 



<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Connection</p>

                <form class="mx-1 mx-md-4" action="connection-traitement.php" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example3c" class="form-control" name="login"/>
                      <label class="form-label" for="form3Example3c">Your Login</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" name="password" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>        

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                  </div>  

                </form>

                I don't have an account : <a href="../index.php">Sign up</a>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../img/gossip.gif" class="img-fluid" alt="gossip" width = "100%" height="auto">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




