const searchInput = document.getElementById('searchInput');
const productRows = document.getElementsByClassName('product-row');

searchInput.addEventListener('keyup', function() {
    const searchTerm = searchInput.value.toLowerCase();

    for (let i = 0; i < productRows.length; i++) {
        const productName = productRows[i].getElementsByTagName('td')[0].innerText.toLowerCase();

        if (productName.includes(searchTerm)) {
            productRows[i].style.display = '';
        } else {
            productRows[i].style.display = 'none';
        }
    }
});
