
    // Function to set the form action URL dynamically
    function setBookingFormAction(vehicleName) {
      var form = document.getElementById('bookingForm');
      form.action = 'booking.php?vehicle=' + encodeURIComponent(vehicleName);
    }

    // Function to handle booking
    function book() {
      // Additional booking logic here...
    }

    // Add event listener to each "Book Now" button
    document.querySelectorAll('a[data-toggle="modal"]').forEach(button => {
      button.addEventListener('click', function() {
        var vehicleName = this.closest('.product-item').querySelector('h4').innerText;
        setBookingFormAction(vehicleName);
      });
    });
