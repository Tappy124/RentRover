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
                <li class="nav-item"><a class="nav-link" href="offers.php">Offers</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      
                      <a class="dropdown-item" href="team.php">Team</a>
                      <a class="dropdown-item" href="testimonials.php">Reviews</a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
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
    <input id="gfg" type="text" placeholder="Search here"> <button>Search</button>
    <button id="filter-button" class="button">Filter</button>
<div id="filter-container" class="filters">
  <ul class="filters__list">
    <li>
  <input id="f1" type="checkbox" />
    <label for="f1">SUV</label>
    </li>
        <li>
  <input id="f2" type="checkbox" />
    <label for="f2">Sports Car</label>
    </li>
        <li>
  <input id="f3" type="checkbox" />
    <label for="f3">Compact</label>
    </li>
    
    
  </ul></div>
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/innova.webp" alt="">

              <div class="down-content">
                <h4>Toyota Innova</h4>

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
                <h4>Large: Premium</h4>

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
                    <img src="assets/images/innova.webp" alt="">
      
                    <div class="down-content">
                      <h4>Toyota Innova</h4>
      
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
                      <h4>Large: Premium</h4>
      
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
                          <img src="assets/images/innova.webp" alt="">
            
                          <div class="down-content">
                            <h4>Toyota Innova</h4>
            
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
                            <h4>Large: Premium</h4>
            
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




          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-4-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Large: Premium</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6> 

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
              <img src="assets/images/product-5-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Large: Premium</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

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
              <img src="assets/images/product-6-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Large: Premium</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

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

          <div class="col-md-12">
            <ul class="pages">
              <li><a href="fleet.php">1</a></li>
              <li><a href="fleet2.php">2</a></li>
              <li class= "active"><a href="fleet3.php">3</a></li>
              <li><a href="fleet4.php">4</a></li>
              <li><a href="fleet4.php"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
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
              <form action="booking.php" method="post" >
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
                            <input type="datetime-local" class="form-control" placeholder="Pick-up date/time" required="" name= "pickupdt">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="datetime-local" class="form-control" placeholder="Return date/time" required="" name= "returndt">
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
                          <label for="fileToUpload">Upload Photo of drivers license:</label>
                          <input type="file" name="fileToUpload" id="fileToUpload">
                        
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      var button = document.getElementById("filter-button");
var container = document.getElementById("filter-container");
var input = document.querySelectorAll("input");

button.onclick = function (e) {
  e.stopPropagation();
  if (container.classList.contains("filters--active")) {
    container.classList.remove("filters--active");
  } else {
    container.classList.add("filters--active");
  }
};

container.onclick = function (e) {
  e.stopPropagation();
};

window.onclick = function () {
  container.classList.remove("filters--active");
};

console.log(input);

for (var i = 0; i < input.length; i++) {
  var currentInput = input[i];

  currentInput.onclick = function () {
    var isChecked = false;
    for (var j = 0; j < input.length; j++) {
      if (input[j].checked) {
        isChecked = true;
        break;
      }
    }

    if (isChecked) {
      button.classList.add("button--highlight");
    } else {
      button.classList.remove("button--highlight");
    }
  };
}

  </script>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
