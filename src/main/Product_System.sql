CREATE TABLE PRODUCTS (
    productID INT PRIMARY KEY,
    partName VARCHAR(50),
    partDescription VARCHAR(1000),
    partPicture VARCHAR(50),
    partPrice DOUBLE,
    partQuantity INT
);

CREATE TABLE CUSTOMERS (
    customerID INT PRIMARY KEY,
    customerName VARCHAR(100),
    customerEmail VARCHAR(50)
);

CREATE TABLE ORDERS (
    orderID INT PRIMARY KEY,
    orderDate DATE,
    orderStatus VARCHAR(50),
    FOREIGN KEY (customerID) REFERENCES CUSTOMERS(customerID)
);

CREATE TABLE INVENTORY (
    partNum INT PRIMARY KEY,
    quantityONhand INT,
    FOREIGN KEY (partNum) REFERENCES PRODUCTS(partNum)
);