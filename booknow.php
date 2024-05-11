<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Admin Panel</title>
    <link rel="stylesheet" href="assets/css/add.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="add-car-form">
                <h2>Add New Car</h2>
                <form action="booking.php" method="post" enctype="multipart/form-data">
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


            </div>
        </div>
    </div>
</body>

</html>
