<?php
require('Userregister.php');
$conn=mysqli_connect("localhost","root","","avrdb");
$sel_query="select * from user";
$result=mysqli_query($conn,$sel_query);
$msg="";
if (isset($_GET['ins']) && $_GET['ins']=='succ') {
    $msg="registed succesfully";
  }
$conn=mysqli_connect("localhost","root","","avrdb");
if(isset($_POST['form_post_flag']) && $_POST['form_post_flag']==1) {
$insert_query="insert into user(
    user_name,
    user_password,
    user_mobile,
    user_mail,
    user_address,
    user_city,
    user_state) values (
    '".$_POST['uname']."',    
    '".$_POST['pwd']."',
    '".$_POST['mobno']."',
    '".$_POST['email']."',
    '".$_POST['address']."',
    '".$_POST['city']."',
    '".$_POST['state']."')";  
$result=mysqli_query($conn,$insert_query);
header("Location:login-register.php?ins=succ");
}      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register Page</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="./css/icofont.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
   
    <!-- Mobile header section-->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark p-2" aria-label="Sixth navbar example" style="border-bottom:1px solid #60676E; padding: 0.8rem !important;">
        <div class="container-fluid">
        <div>
            <h5  class="bolder text-white"><i class="text-white icofont-home"></i> GRAND <span class="text-primary">Choice</span></h5>
        </div>
        <div class="mob-nav w-50">
          <ul class="d-flex justify-content-end align-item-center m-0">
            <li class="nav-item">
               <a class="nav-link text-white" href="#">Hi, Welcome</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icofont-waiter-alt" style="font-size: 25px;"></i></a>
               <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-white" href="login.php">Login & Register</a></li>
               </ul>
            </li>
            <li style="list-style-type: none;" class="nav-item">
               <button class="navbar-toggler collapsed text-white pt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="icofont-navigation-menu"></i>
               </button>
            </li>
          </ul>
        </div>
        <div class="navbar-collapse collapse mt-2" id="navbarsExample06">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
               <li class="nav-item">
                  <a class="nav-link text-white" href="home.php">Home</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Properties</a>
                     <ul class="dropdown-menu  dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="buy.php">Buy</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-white" href="sell.php">Sell</a></li>
                     </ul>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consulting</a>
                     <ul class="dropdown-menu  dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="#">Legal Opinion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-white" href="#">documentation</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-white" href="#">Loan Processing Support</a></li>
                     </ul>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="about.php">About Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="contact.php">Contact</a>
               </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Desktop header section-->
    <header id="header" class="bg-dark p-2" style="border-bottom:1px solid #60676E; padding-bottom: 0 !important;">
       <div class="container-fluid">
          <div class="row">
              <div class="col-3 col-lg-3 text-primary">
                 <h5  class="bolder text-white"><i class="text-white icofont-home"></i> GRAND <span class="text-primary">Choice</span></h5>
              </div>
              <nav class="col-9 col-lg-9">
              <ul class="nav justify-content-end">
                 <li class="nav-item">
                     <a class="nav-link" href="home.php">Home</a>
                 </li>  
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Properties</a>
                     <ul class="dropdown-menu  dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="buy.php">Buy</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-white" href="sell.php">Sell</a></li>
                     </ul>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consulting</a>
                     <ul class="dropdown-menu  dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="#">Legal Opinion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-white" href="#">documentation</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-white" href="#">Loan Processing Support</a></li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="about.php">About Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact</a>
                 </li>
                 <li class="nav-item" style="border-left: 1px solid white; height: 0%;">
                     <a class="nav-link text-white" href="#">Hi, Welcome</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icofont-waiter-alt" style="font-size: 25px;"></i></a>
                     <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="login.php">Login & Register</a></li>
                     </ul>
                 </li>
              </ul>      
              </nav>
          </div>  
       </div>   
     </header>   

     <!-- Login & register Form section-->
     <section id="login-register">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="login-box" class="p-4 mx-5 rounded" style="box-shadow: 0 0 5px #0B5ED7">
                        <form id="login-form" class="form" action="home.php" method="post">
                            <h3 class="text-center text-primary">Login</h3>
                            <div class="form-group">
                                <label class="text-primary">Username:</label><br>
                                <input type="text" name="username" id="username" placeholder="Enter your username" class="form-control mb-2">
                            </div>
                            <div class="form-group position-relative">
                                <label class="text-primary">Password:</label><br>
                                <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <a href="#" class="text-primary" style="font-size: 13px;">Forgot password</a>
                            </div>   
                            <div class="login-btn text-center">
                                <input type="submit" name="submit" class="btn btn-primary" value="Login">
                            </div> 
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                  <div id="register-box" class="p-4 mx-5 rounded" style="box-shadow: 0 0 5px #0B5ED7">
                     <span class="text-success"><?php echo $msg; ?></span>
                     <form id="register-form" class="form" action="login-register.php" method="post">
                        <input type="hidden" name="form_post_flag" value="1">
                        <h3 class="text-center text-primary">Register</h3>
                           <div class="row text-primary mb-2">
                              <div class="col">
                                 <label for="">Name:</label>
                                 <input type="text" id="uname" class="form-control" name="uname" placeholder="Enter your name">
                                 <span class="text-danger"><?php echo $uname_error; ?></span>
                              </div>
                              <div class="col">
                                 <label for="">Password:</label>
                                 <input type="password" id="pwd" class="form-control" name="pwd" placeholder="Enter your password">
                                 <span class="text-danger"><?php echo $pwd_error; ?></span>
                              </div>
                        </div>
                        <div class="row text-primary mb-2">
                           <div class="col">
                              <label for="">Mobile No:</label>
                              <input type="text" id="mobno" class="form-control" name="mobno" placeholder="Enter your mobile no">
                              <span class="text-danger"><?php echo $mobno_error; ?></span>
                           </div>
                          <div class="col">
                              <label for="">Email:</label>
                              <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email id">
                              <span class="text-danger"><?php echo $email_error; ?></span>
                           </div>
                        </div>
                        <div class="text-primary mb-2">
                           <label for="">Address:</label>
                           <textarea id="address" class="form-control" name="address" placeholder="Enter your address"></textarea>
                        </div>
                        <div class="row text-primary mb-4">
                           <div class="col">
                              <label for="">City:</label>
                              <select id="city" class="form-select" name="city" aria-label="Default select example">
                                 <option selected>Choose...</option>
                                 <option value="">Chennai</option>
                                 <option value="">Hyderabad</option>
                                 <option value="">Mumbai</option>
                                 <option value="">Bangalore</option>
                                 <option value="">Noida</option>
                                 <option value="">Kochi</option>
                              </select>
                           </div>
                           <div class="col">
                              <label for="">State:</label>
                              <select id="state" class="form-select" name="state" aria-label="Default select example">
                                 <option selected>Choose</option>
                                 <option value="">Tamil Nadu</option>
                                 <option value="">Telangana</option>
                                 <option value="">maharashtra</option>
                                 <option value="">Karnataka</option>
                                 <option value="">Uttar Pradesh</option>
                                 <option value="">Kerala</option>
                              </select>
                           </div>
                        </div>
                        <input id="submit" type="submit" name="submit" class="btn btn-primary mx-auto d-block" value="Register">
                     </form>
                  </div>
               </div>
            </div>
        </div>
    </section>

    <!-- footer section-->
    <footer class="pt-3 px-2 bg-dark" style="border-top: 1px solid #60676E;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-5 text-primary">
                  <h5 class="bolder text-white"><i class="text-white icofont-home"></i> GRAND <span class="text-primary">Choice</span>  <span class="text-white" style="font-size: 12px;">© 2022 Company, Inc</span></h5>
               </div>
               <div class="col-7">
                   <ul class="d-flex justify-content-end list-unstyled">
                      <li class="ms-3"><a class="text-white text-decoration-none" href="#"><i class="icofont-facebook"></i></a></li>
                      <li class="ms-3"><a class="text-white text-decoration-none" href="#"><i class="icofont-instagram"></i></a></li>
                      <li class="ms-3"><a class="text-white text-decoration-none" href="#"><i class="icofont-brand-whatsapp"></i></a></li>
                      <li class="ms-3"><a class="text-white text-decoration-none" href="#"><i class="icofont-web"></i></a></li>
                   </ul>
               </div>   
            </div>
         </div>    
    </footer>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>  

    <!-- custom js -->
    <script src="./js/script.js"></script>
   
</body>

</html>