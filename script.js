
function showItemDetails(itemName) {
    const itemTitle = document.getElementById('itemTitle');
    const itemDescription = document.getElementById('itemDescription');
    const itemPrice = document.getElementById('itemPrice');


    switch(itemName) {
        case 'Espresso':
            itemTitle.innerText = 'Espresso';
            itemDescription.innerText = 'A shot of intense coffee';
            itemPrice.innerText = 'Price: $2.5';
            break;

    }


    document.getElementById('itemDetailsModal').style.display = 'block';
}

function closeItemDetailsModal() {
    document.getElementById('itemDetailsModal').style.display = 'none';
}
