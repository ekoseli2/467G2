USE z1979224;

DROP TABLE IF EXISTS ORDERS,PRODUCTS,CUSTOMERS;

CREATE TABLE PRODUCTS (
    productID INT PRIMARY KEY,
    partName VARCHAR(50),
    partDescription VARCHAR(1000),
    partPicture VARCHAR(50),
    partPrice DOUBLE,
    partQuantity INT
);

CREATE TABLE CUSTOMERS (
    customerID int(20) NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
    customerName VARCHAR(100),
    Address1 VARCHAR(100),
    City VARCHAR(100),
    State CHAR(2),
    Country CHAR(2),
    PostalCode VARCHAR(5),
    customerEmail VARCHAR(50) UNIQUE,
    PSW VARCHAR(50)
);

CREATE TABLE ORDERS (
    customerID INT,
    orderID INT,
    orderDate DATE,
    orderStatus VARCHAR(50),
    PRIMARY KEY(orderID),
    FOREIGN KEY (customerID) REFERENCES CUSTOMERS(customerID)
);

SHOW Tables;
DESCRIBE PRODUCTS;
DESCRIBE CUSTOMERS;
DESCRIBE ORDERS;