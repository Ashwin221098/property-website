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

    <!-- property-description section -->
    <div id="property-description">
        <div class="container-fluid">
            <h6 class="text-primary ms-3 pt-4">Home > Buy</h6>
            <table class="table table-borderless">
               <tr class="text-center">
                    <td>Casa Grand<br>
                        <span class="fw-bold text-secondary">Name</span>
                    </td> 
                    <td>5BHK Aparment OMR chennai<br>
                        <span class="fw-bold text-secondary">Address</span>
                    </td>
                    <td>3000 Sqft<br>
                        <span class="fw-bold text-secondary">Total Sqft</span>
                    </td>
                    <td>8000(INR)<br>
                        <span class="fw-bold text-secondary">per Sqft</span>
                    </td>
                    <td>1.5 Crores<br>
                        <span class="fw-bold text-secondary">Price</span>
                    </td>
                </tr>    
            </table>
        </div>
    </div>

    <!--middle-description section-->
    <div id="middle-description">
    <div class="container-fluid">
        <div class="row mb-2 mx-2">
            <div class="col-lg-7">
                <img src="./images/flat.jpg" class="w-100">
            </div>
            <div class="col-lg-5">
                <table class="table table-borderless mt-2">
                    <tr>
                        <td>2 Bedroom<br>
                            <span class="fw-bold text-secondary">No.of Bedroom</span> 
                        </td> 
                        <td>27/02/2022<br>
                            <span class="fw-bold text-secondary">Posted On</span> 
                        </td>
                    </tr>    
                    <tr>
                        <td>3 Bathroom<br>
                            <span class="fw-bold text-secondary">No. of Bathroom</span> 
                        </td> 
                        <td>Immediately<br>
                            <span class="fw-bold text-secondary">Possession</span> 
                        </td>
                    </tr>    
                    <tr>
                        <td>1<br>
                            <span class="fw-bold text-secondary">Balcony</span> 
                        </td> 
                        <td>Maple Cryst<br>
                            <span class="fw-bold text-secondary">Apartment</span> 
                        </td>
                    </tr>    
                    <tr>
                        <td>Bike and Car<br>
                            <span class="fw-bold text-secondary">Parking</span> 
                        </td> 
                        <td>None<br>
                            <span class="fw-bold text-secondary">Power Backup</span> 
                        </td>
                    </tr>    
                    <tr>
                        <td>5 years<br>
                            <span class="fw-bold text-secondary">Age of Building</span> 
                        </td> 
                        <td>Self Owned<br>
                            <span class="fw-bold text-secondary">Ownership Type</span> 
                        </td>
                    </tr>    
                    <tr>
                        <td>1300 Sq.Ft<br>
                            <span class="fw-bold text-secondary">Builtup Area</span> 
                        </td> 
                        <td>1000 Sq.Ft<br>
                            <span class="fw-bold text-secondary">Carpet Area</span> 
                        </td>
                    </tr>    
                    <tr>
                        <td>8661221668<br>
                            <span class="fw-bold text-secondary">Contact No</span> 
                        </td> 
                        <td>Mon-Fri 9.00am-5.00pm<br>
                            <span class="fw-bold text-secondary">Visting Hours</span> 
                        </td> 
                    </tr> 
                </table>    
            </div>
        </div>
    </div>

    <!-- detailed-description section -->
    <div id="detailed-description">
        <div class="container-fluid">
            <h6 class="text-secondary px-3">Description :</h6>
            <p class="px-3">
               STRUCTURE: R.C.C. Framed structure with high quality brick walls for external and internal portions.JOINERY: 
               Main door frames of teak wood and double side teakwood veneer hardcore flush doors with varnish Finishing. Other doors and windows in seasoned Country wood (padauk or sal). Doors will have flush Type shutters and windows will have M.S. Grills and Glazed shutters.
               FLOORING: Designed Vitrified Joint free Ceramic tiles, (24'x24') Flooring with skirting (with in limit of 8 color choice)
               KITCHEN: Polished Black Granite slab with S.S.Sink and sink Cocks for bore water. Glazed tiles dadoing above Platform Up to 2'0'' height type loft. (Tiles Colors Builders Choice)
               TOILETS: Concealed plumbing inside bathroom / toilets, Cp taps, showers and wall mixers, one white vitreous clay EWC at attached toilet with flush tank and one toilet. White washbasin inside (or) Outside of common bath room. Designed glazed tiles for wall dadoo to a height o 7’00” and suitable color matching tiles for the flooring with non-slippery tiles. Geyser point provision with hot and cold G.I. and PVC Piping with C.P. fittings white color washbasin (size: 21” x 17”) provision with fittings at attached Bath room .(Tiles color Builder’s Choice)
               WARDROBE SHELF: Single side loft and wardrobe provision with Cadappa slab at each bedrooms and utensils shelf in kitchen.
               ELECTRICAL: Multi core high quality copper wiring in concealed PVC Pipes with M C B. Three Phase changer with Recessed modular switches. High voltage Circuit for A.C., Geyser, Fridge and low voltage circuit for other, Wiring for phone and TV cable will be provided at hall and three bedrooms of each flat. Washing machine power point will be provided at service area.
               PAINTING: The walls will be plastered suitably to take two coat Cement based wall care patty and one coat wall Primer and two coats plastic Emulsion with roller Finish. Doors and windows will be painted with Enamel paint two coats with one coat wood primer. Ceiling will be painted with white cement primer coat white OBD two coats. (Color Builder’s choice)
               WATERSUPPLY ARRANGEMENTS: Deep Bore well & well for receiving ground water and underground sump to store water. Bore well water Connection in Kitchen Toilets. Arrangements for Pumping Bore and sump to overhead tank will be made, from these tanks lines will be run for each flat.
               COMMON ADDITIONAL AMENITES: Covered Car park with adequate space.Light Provisions for common area will be provided around the building and at staircase area.Lift Facilities
            </p>
        </div>
    </div>
                 
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