<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" href="assets/images/rentrover.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>RentRover</title>
    <script src="fleet.html"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="hdr">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <img src="assets/images/rentrover.png" alt="logo">
          <a class="navbar-brand" href="index.php"><h2>RentRover</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="fleet.php">Cars</a></li>
           
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      
                      <a class="dropdown-item" href="team.php">Team</a>
                      <a class="dropdown-item" href="testimonials.php">Reviews</a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item">
                            <form class="nav-link" action="logout.php" method="post">
                                <button type="submit" class="btn btn-link logout-btn" name="logout">Logout</button>
                            </form>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4></h4>
              <h2>Available Cars</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
    <input class="search-box" type="text" placeholder="Search here" id="search-item" onkeyup="search()">

    <div class="filter">
    <label><input type="checkbox" id="filter-sedan" onchange="filterProducts()"> Sedan</label>
    <label><input type="checkbox" id="filter-sports" onchange="filterProducts()"> Sports</label>
    <label><input type="checkbox" id="filter-suv" onchange="filterProducts()"> SUV</label>
</div>

 
    
</section> 
    
  </ul></div>
    <div class="products" id="product-list">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/innova.webp" alt="">
              <div class="down-content">
                <h4>Toyota Innova</h4>
                <p class="type">SUV</p>
                <h6><small>from</small> ₱ 2,300 <small>per day</small></h6>

                <p> The perfect choice for your next journey. With its spacious interior, comfortable seating, and versatile design, the Innova offers both style and functionality for your travels.</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 7</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/grandia.png" alt="">

              <div class="down-content">
                <h4>Toyota Grandia</h4>
                <p class="type">SUV</p>
                <h6><small>from</small>₱ 4,990  <small>per day</small></h6>

                <p>The ultimate choice for luxury travel. With its elegant design, spacious cabin, and premium amenities, the Grandia offers a first-class experience for all passengers.</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 11</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 7</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/vios.png" alt="">

              <div class="down-content">
                <h4>Toyota Vios</h4>
                <p class="type">Sedan</p>

                <h6><small>from</small> ₱ 1,990 <small>per day</small></h6>

                <p>a compact sedan that combines style, performance, and reliability in one sleek package. With its modern design and aerodynamic profile, the Vios stands out on the road, making a statement wherever it goes. </p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>


          <div class="products">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="product-item">
                    <img src="assets/images/BMWM2.webp" alt="">
      
                    <div class="down-content">
                      <h4>BMW M2</h4>
                      <p class="type">Sports</p>
      
                      <h6><small>from</small> ₱ 5, 559 <small>per day</small></h6>
      
                      <p>compact coupe that embodies the essence of driving pleasure and precision engineering. With its muscular proportions, aggressive stance, and athletic design, the M2 exudes sportiness from every angle. </p>
      
                      <small>
                          <strong title="passegengers"><i class="fa fa-user"></i> 2</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                          <strong title="luggages"><i class="fa fa-briefcase"></i> 3</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                          <strong title="doors"><i class="fa fa-sign-out"></i> 2</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                          <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                      </small>
      
                      <span>
                        <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                      </span>
                    </div>
                  </div>
                </div>
      
                <div class="col-md-4">
                  <div class="product-item">
                    <img src="assets/images/mclarenp1.jpg" alt="mclaren">
      
                    <div class="down-content">
                      <h4>McLaren P1</h4>
                      <p class="type">sports</p>
      
                      <h6><small>from</small>₱ 89,990 <small>per day</small></h6>
      
                      <p>representing the pinnacle of performance and technology. This hypercar blends breathtaking design with cutting-edge aerodynamics to create a masterpiece of automotive artistry. Powered by a hybrid powertrain, the P1 delivers mind-bending acceleration and unparalleled handling, pushing the boundaries of what's possible on both road and track. </p>
      
                      <small>
                          <strong title="passegengers"><i class="fa fa-user"></i> 2</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                          <strong title="luggages"><i class="fa fa-briefcase"></i> 2</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                          <strong title="doors"><i class="fa fa-sign-out"></i> 2</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                          <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                      </small>
      
                      <span> 
                        <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                      </span>
                    </div>
                  </div>
                </div>
      
                <div class="col-md-4">
                  <div class="product-item">
                    <img src="assets/images/SubSTI.png" alt="Subaru WRX">
      
                    <div class="down-content">
                      <h4>Subaru WRX STI 2004</h4>
                      <p class="type">Sedan</p>
      
                      <h6><small>from</small> ₱ 8,990 <small>per day</small></h6>
      
                      <p>a legendary performance icon that continues to captivate enthusiasts with its rally-bred heritage and exhilarating driving dynamics. With its distinctive hood scoop, aggressive body lines, and iconic rear wing, the WRX STI commands attention wherever it goes. </p>
      
                      <small>
                          <strong title="passegengers"><i class="fa fa-user"></i>4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                          <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                          <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                          <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                      </small>
      
                      <span>
                        <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                      </span>
                    </div>
                  </div>
                </div>



                <div class="products">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="product-item">
                          <img src="assets/images/mirage.png" alt="">
            
                          <div class="down-content">
                            <h4>Mitsubishi Mirage G4</h4>
                            <p class="type">Sedan</p>
            
                            <h6><small>from</small> ₱ 2,690 <small>per day</small></h6>
            
                            <p> a compact sedan that combines fuel efficiency, practicality, and affordability in one stylish package. With its sleek exterior design and compact dimensions, the Mirage G4 is perfect for navigating tight city streets and crowded parking lots with ease.</p>
            
                            <small>
                                <strong title="passegengers"><i class="fa fa-user"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="luggages"><i class="fa fa-briefcase"></i> 3</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                            </small>
            
                            <span>
                              <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                            </span>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-md-4">
                        <div class="product-item">
                          <img src="assets/images/fortuner.jpg" alt="">
            
                          <div class="down-content">
                            <h4>Toyota Fortuner</h4>
                            <p class="type">SUV</p>
            
                            <h6><small>from</small>₱ 4,990  <small>per day</small></h6>
            
                            <p>a rugged yet refined SUV that combines versatility, reliability, and comfort to tackle any adventure with ease. Its bold and muscular exterior design hints at its off-road capabilities, while its spacious interior provides room for passengers and cargo alike.</p>
            
                            <small>
                                <strong title="passegengers"><i class="fa fa-user"></i> 8</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                            </small>
            
                            <span>
                              <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                            </span>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-md-4">
                        <div class="product-item">
                          <img src="assets/images/cadillacct6.webp" alt="">
            
                          <div class="down-content">
                            <h4>Cadillac CT6 Stretched</h4>
                            <p class="type">SUV</p>
            
                            <h6><small>from</small> ₱ 30,990 <small>per day</small></h6>
            
                            <p>The Cadillac CT6 Stretched is the epitome of luxury and sophistication offering unparalleled comfort and style for those who demand the very best. This elongated version of the iconic CT6 sedan provides additional legroom and space, ensuring a first-class experience for every passenger. </p>
            
                            <small>
                                <strong title="passegengers"><i class="fa fa-user"></i> 20</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="luggages"><i class="fa fa-briefcase"></i> 8</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                            </small>
            
                            <span>
                              <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                            </span>
                          </div>
                        </div>
                      </div>




          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-4-370x270." alt="">

              <div class="down-content">
                <h4></h4>
                <p class="type">SUV</p>

                <h6><small>from</small> $99 <small>per</small></h6> 

                <p>text here</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-5-370x270." alt="">

              <div class="down-content">
                <h4></h4>
                <p class="type">Sports</p>

                <h6><small>from</small> price <small></small></h6>

                <p>text here</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-6-370x270." alt="">

              <div class="down-content">
                <h4></h4>
                <p class="type">Sedan</p>

                <h6><small>from</small> price: <small></small></h6>

                <p>text</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>
</div>

          <div class="col-md-12">
            <ul class="pages">
              <li  class= "active"><a href="#">1</a></li>
              <li><a href="fleet2.php">2</a></li>
              <li><a href="fleet3.php">3</a></li>
              <li><a href="fleet4.php">4</a></li>
              <li><a href="fleet2.php"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
         
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
</div>


    <footer>
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <p>Copyright © 2024 RentRover</p>
        </div>
      </div>
    </div>
  </div>
</footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
                  <div class="modal-body">
                   <div class="contact-form">
                   <form id="bookingForm" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Pick-up location" required="" name="pickuploc">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Return location" required="" name="returnloc">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input type="datetime-local" class="form-control" placeholder="Pick-up date/time" required="" name="pickupdt">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input type="datetime-local" class="form-control" placeholder="Return date/time" required="" name="returndt">
                                </fieldset>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter full name" required="" name="fullName">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Enter email address" required="" name="email">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Enter phone" required="" name="phone">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                <label for="code">Discount Code:</label>
                                <input type="text" id="code" name="code">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="fileToUpload" >Upload Photo of driver's license:</label>
                                    <input type="file"  id="dlpic" name="dlpic">
                                </fieldset>
                            </div>
                        </div>
                        <!-- Move the button inside the form -->
                        <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-primary" onclick="book()">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/booking.js"></script>
    <script src="assets/js/search.js"></script>
  </body>

</html>
