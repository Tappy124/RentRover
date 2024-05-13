function filterProducts() {
    var sedanChecked = document.getElementById("filter-sedan").checked;
    var sportsChecked = document.getElementById("filter-sports").checked;
    var suvChecked = document.getElementById("filter-suv").checked;

    var products = document.querySelectorAll(".product-item");

    for (var i = 0; i < products.length; i++) {
        var product = products[i];
        var type = product.querySelector(".type").textContent.toLowerCase();

        if ((sedanChecked && type.includes("sedan")) || 
            (sportsChecked && type.includes("sports")) || 
            (suvChecked && type.includes("suv"))) {
            product.style.display = "block";
        } else {
            product.style.display = "none";
        }
    }
}


function book() {
    // Assume booking is successful
    // You can put your booking logic here

    // Show alert
    alert('Booking successful!');
}

function showNotification(message) {
    const notification = document.createElement('div');
    notification.classList.add('notification');
    notification.textContent = message;
    document.body.appendChild(notification);
    setTimeout(() => {
        notification.remove();
    }, 3000); // Remove notification after 3 seconds
} 


