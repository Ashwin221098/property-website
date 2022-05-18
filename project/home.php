<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
         <h5  class="fw-bolder text-white m-0"><i class="text-white icofont-home"></i> GRAND <span class="text-primary">Choice</span></h5>
      </div>
      <div class="mob-nav w-50">
         <ul class="d-flex justify-content-end align-item-center m-0">
            <li class="nav-item">
               <a class="nav-link text-white" href="#">Hi, Welcome</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icofont-waiter-alt"></i></a>
               <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-white" href="login-register.php">Login & Register</a></li>
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
                        <li><a class="dropdown-item text-white" href="login-register.php">Login & Register</a></li>
                     </ul>
                 </li>
              </ul>      
              </nav>
          </div>  
       </div>   
    </header>   

    <!-- sidebar section -->
    <section class="sidebar navbar-expand d-flex flex-column align-item-start bg-dark" id="sidebar">
        <h6 class="text-primary pt-3 ps-4">Quick links</h6>
        <ul class="navbar-nav d-flex flex-column ps-5">
            <li class="nav-item pb-2">
                <a href="buy.php" class="nav-link text-light pl-4">Buy</a>
            </li>
            <li class="nav-item pb-2">
                <a href="sell.php" class="nav-link text-light pl-4">Sell</a>
            </li>
            <li class="nav-item pb-2">
                <a href="#" class="nav-link text-light pl-4">Legal opinion</a>
            </li>
            <li class="nav-item pb-2">
                <a href="#" class="nav-link text-light pl-4">Loan Support</a>
            </li>
        </ul>
    </section>
     
    <!-- hero section -->
    <section class="my-container">
         <div id="hero">
            <div class="container-fulid">
               <button type="button" class="btn" style="margin-top: 20px; margin-left:12px; font-size: 12px;" id="menu-btn">Quicklinks</button>
               <div class="hero-content">
                  <h2 style="margin-top: 22%; padding-left:28px;">Welcome to <span class="text-primary">GRAND <span class="text-dark">Choice</span></span></h2>
                  <p style="padding-left:28px;">Our vision to give a <span class="text-primary">GRAND</span> property for your Choice</p>
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