// Load SQL.js to use SQL without server-side
console.log(window.db);

// Query for all product fields
const result = window.db.exec('SELECT * FROM PRODUCTS');
// Handle the result by populating page
console.log('Query Result:', result);
const productContainer = document.getElementById('product-container');
productContainer.innerHTML = JSON.stringify(result);

if (result.length > 0 && result[0].values.length > 0) {
  const products = result[0].values;

  products.forEach(productData => {
    const [productID, partName, partDescription, partPicture, partPrice, partQuantity] = productData;

    // Create html elements
    const productCard = document.createElement('div');
    productCard.classList.add('product-card');

    // assign formatting to the content variables if required
    const productNameElement = document.createElement('h3');
    productNameElement.textContent = partName;
    const productPriceElement = document.createElement('p');
    productPriceElement.textContent = `$${partPrice.toFixed(2)}`;
    const productDescriptionElement = document.createElement('p');
    productDescriptionElement.textContent = partDescription;
    //const partPicture = document    reformat these as binary BLOB data
    const productPartQuantityElement = document.createElement('p');
    productPartQuantityElement.textContent = partQuantity;

    // append to the productcard element for creation in html
    productCard.appendChild(productNameElement);
    productCard.appendChild(productPriceElement);
    productCard.appendChild(productDescriptionElement);
    productCard.appendChild(productPartQuantityElement);

    productContainer.appendChild(productCard);
  });
} else {
  console.log('No products in database');
}