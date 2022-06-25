<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">

</head>
<body style="background-color: #3884F1;">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> <!-- JS de bootstrap 5-->

    


        
            <ul class="circles">
              <section class="vh-100" style="background-color: #3884F1;">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                      <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                          <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://images.ctfassets.net/l45uzl17yu2j/78RRWY24hc07oAuykv89Ue/9bff450f8aa4f3761ca7e7e35fff6292/pexels-karolina-grabowska-4386433.webp"
                              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                          </div>
                          <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                              <form method="post">

                                <div class="d-flex align-items-center mb-3 pb-1">
                                  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                  <span class="h1 fw-bold mb-0">Inicio de Sesion</span>
                                </div>

                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa a tu cuenta</h5>

                                <div class="form-outline mb-4">
                                  <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                  <label class="form-label" for="form2Example17">Usuario</label>
                                </div>

                                <div class="form-outline mb-4">
                                  <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                  <label class="form-label" for="form2Example27">Contraseña</label>
                                </div>

                                <div class="pt-1 mb-4">
                                 
                                  <button type="submit" class="btn btn-primary btn-lg" name="login">Login</button>
                                  
                                </div>

                                <a class="small text-muted" href="#!">Olvidaste la contraseña?</a>
                            
                              </form>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                 
            </ul>
  

</body>
</html>



 
 <?php

  if (isset($_POST['login'])) {
  
  session_start();
  header('location: index.php');

  }

 
// manipulate session variables
?>