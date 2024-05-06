const filterProducts = () => {
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const filterSedan = document.getElementById("filter-sedan").checked;
    const filterSports = document.getElementById("filter-sports").checked;
    const filterSUV = document.getElementById("filter-suv").checked;
    const product = document.querySelectorAll(".product-item");

    for (let i = 0; i < product.length; i++) {
        let match = product[i].getElementsByTagName('h4')[0];
        let type = product[i].getElementsByTagName('p')[0].textContent.toUpperCase();

        if (match) {
            let textvalue = match.textContent || match.innerHTML;

            if (
                (textvalue.toUpperCase().indexOf(searchbox) > -1) &&
                (filterSedan && type.indexOf("SEDAN") > -1 || !filterSedan) &&
                (filterSports && type.indexOf("SPORTS") > -1 || !filterSports) &&
                (filterSUV && type.indexOf("SUV") > -1 || !filterSUV)
            ) {
                product[i].style.display = "";
            } else {
                product[i].style.display = "none";
            }
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
