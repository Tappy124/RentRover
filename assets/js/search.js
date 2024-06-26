const search = () => {
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const product = document.querySelectorAll(".product-item");

    for (var i = 0; i < product.length; i++) {
        let match = product[i].getElementsByTagName('h4')[0];

        if (match) {
            let textvalue = match.textContent || match.innerHTML;

            if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
                product[i].style.display = "";
            } else {
                product[i].style.display = "none";
            }
        }
    }
}
