function checkPayment() {

    //gets card details
    const cardNumber = document.getElementById('cardNumber');
    const expDate = document.getElementById('expDate');
    const purchaseAmt = document.getElementById('purchaseAmt');

    //checks for any invalid inputs
    if (cardNumber.value.length < 10) {
        alert('Invalid Credit Card number');
        return false;
    }

    //generates a random authorization code
    const response = Math.floor(Math.random() * Math.floor(10000));

    //display the code to the user
    if (response) {
        alert(`Payment authorized: ${response}`);
    }
    else {
        alert('Payment declined');
    }
    return true;
}