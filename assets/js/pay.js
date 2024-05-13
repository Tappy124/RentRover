function validateForm() {
    var form = document.getElementById('paymentForm');
    if (form.checkValidity()) {
        // If the form is valid, show the appropriate message
        document.getElementById('successMessage').style.display = 'block';
        document.getElementById('failedMessage').style.display = 'none';
        return true;
    } else {
        // If the form is invalid, show the appropriate message
        document.getElementById('successMessage').style.display = 'none';
        document.getElementById('failedMessage').style.display = 'block';
        return false;
    }
}