<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Page</title>
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
               <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icofont-waiter-alt" style="font-size: 25px;"></i></a>
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
         <h6 class="text-primary pt-3 ps-4">Filter</h6>
         <div class="p-4">
            <form action="buy2.php">
               <input class="form-control mb-4" type="search" placeholder="Add more..." aria-label="Search">
               <div class="" role="group" aria-label="Button group with nested dropdown">
                  <div class="btn-select mb-4" role="group">
                     <select class="form-select" aria-label="Default select example">
                        <option selected>City</option>
                        <option value="">Chennai</option>
                        <option value="">Hyderabad</option>
                        <option value="">Mumbai</option>
                        <option value="">Bangalore</option>
                        <option value="">Noida</option>
                        <option value="">Kochi</option>
                     </select>
                  </div>
                  <div class="btn-select mb-4" role="group">
                     <select class="form-select" aria-label="Default select example">
                        <option selected>Area</option>
                        <option value="">Pallikaranai</option>
                        <option value="">Medavakkam</option>
                        <option value="">Guindy</option>
                        <option value="">T.Nagar</option>
                        <option value="">Adyar</option>
                        <option value="">Thiruvanmiyur</option>
                     </select>
                  </div>
                  <div class="btn-select mb-4" role="group">
                     <div class="text-white">
                        <h6 style="font-size: 12px;">Price Range: ₹ 0 to ₹ 5 Crores</h6>
                     </div>
                     <div class="range-in">
                        <input type="range" class="form-range" min="0" max="5" step="0.5">
                     </div>
                  </div>
                  <button type="submit" class="btn rounded float-end btn-primary">Search</button>
               </div>
            </form>
         </div>
    </section>
     
    <!-- property-lists section -->
    <section class="my-container">
       <div id="Property-lists">
         <h6 class="text-primary ms-4 pt-4">Home > Buy</h6>
         <button type="button" class="btn" style="margin-top: 20px; margin-left:12px; font-size: 12px;" id="menu-btn">Filter</button>
         <h6 class="ms-4 pt-2">Properties For Sale<span class="text-primary">.....</span></h6>
         <div class="album m-3">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-4">
                    <div class="property">
                        <img src="images/flat2.jpg" class="w-100">
                      <div class="card-body">
                         <h6 class="card-title">Villa 1</h6>
                         <p class="card-text">This West facing home is over 1300 sqft. & is in a convenient location. You get ample & dedicated parking space for bike with this home.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                         <li class="list-group-item"><span class="fw-bold text-secondary">Type :</span> 2 BHK</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Rate :</span> 26 Lakhs</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Posted on :</span> 10 Feb, 2022</li>
                         <li class="list-group-item">Pallikaranai, Chennai</li>
                      </ul>
                      <div class="card-body">
                         <a href="buy3.php" class="card-link text-decoration-none">More Details</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="property">
                        <img src="images/flat3.jpg" class="w-100">
                      <div class="card-body">
                         <h6 class="card-title">Villa 2</h6>
                         <p class="card-text">This West facing home is over 1500 sqft. & is in a convenient location. You get ample & dedicated parking space for bike with this home.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                         <li class="list-group-item"><span class="fw-bold text-secondary">Type :</span> 3 BHK</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Rate :</span> 56 Lakhs</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Posted on :</span> 18 Feb, 2022</li>
                         <li class="list-group-item">Adyar, Chennai</li>
                      </ul>
                      <div class="card-body">
                         <a href="buy3.php" class="card-link text-decoration-none">More Details</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="property">
                        <img src="images/flat4.jpg" class="w-100">
                      <div class="card-body">
                         <h6 class="card-title">Villa 3</h6>
                         <p class="card-text">This West facing home is over 2000 sqft. & is in a convenient location. You get ample & dedicated parking space for bike with this home.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                         <li class="list-group-item"><span class="fw-bold text-secondary">Type :</span> 5 BHK</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Rate :</span> 80 Lakhs</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Posted on :</span> 27 Feb, 2022</li>
                         <li class="list-group-item">ECR, Chennai</li>
                      </ul>
                      <div class="card-body">
                         <a href="buy3.php" class="card-link text-decoration-none">More Details</a>
                      </div>
                    </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-4">
                    <div class="property">
                        <img src="images/flat5.jpg" class="w-100">
                      <div class="card-body">
                         <h6 class="card-title">Villa 4</h6>
                         <p class="card-text">This West facing home is over 2500 sqft. & is in a convenient location. You get ample & dedicated parking space for bike with this home.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                         <li class="list-group-item"><span class="fw-bold text-secondary">Type :</span> 5 BHK</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Rate :</span> 1.6 Crores</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Posted on :</span> 8 Jan, 2022</li>
                         <li class="list-group-item">ECR, Chennai</li>
                      </ul>
                      <div class="card-body">
                         <a href="buy3.php" class="card-link text-decoration-none">More Details</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="property">
                        <img src="images/flat6.jpg" class="w-100">
                      <div class="card-body">
                         <h6 class="card-title">Villa 5</h6>
                         <p class="card-text">This West facing home is over 3800 sqft. & is in a convenient location. You get ample & dedicated parking space for bike with this home.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                         <li class="list-group-item"><span class="fw-bold text-secondary">Type :</span> 5 BHK</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Rate :</span> 2.2 Crores</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Posted on :</span> 19 Jan, 2022</li>
                         <li class="list-group-item">Besant nagar, Chennai</li>
                      </ul>
                      <div class="card-body">
                         <a href="buy3.php" class="card-link text-decoration-none">More Details</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="property">
                        <img src="images/flat7.jpg" class="w-100">
                      <div class="card-body">
                         <h6 class="card-title">Villa 7</h6>
                         <p class="card-text">This West facing home is over 5000 sqft. & is in a convenient location. You get ample & dedicated parking space for bike with this home.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                         <li class="list-group-item"><span class="fw-bold text-secondary">Type :</span> 6 BHK</li>
                         <li class="list-group-item"><span class="fw-bold text-secondary">Rate :</span> 3.7 Crores</li>
                         <li class="list-group-item"><span class="fw-bold text-secondaryb">Posted on :</span> 9 Dec, 2021</li>
                         <li class="list-group-item">ECR, Chennai</li>
                      </ul>
                      <div class="card-body">
                         <a href="buy3.php" class="card-link text-decoration-none">More Details</a>
                      </div>
                    </div>
                  </div>
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