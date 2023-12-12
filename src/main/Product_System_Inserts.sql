
/*                     PRODUCTS                            */
/*                     Wheels                              */
INSERT INTO PRODUCTS Values ('1001','Wheel','Liquid Metal Shadow 18"','x','167.00','8');
INSERT INTO PRODUCTS Values ('1002','Wheel','Vision Boost 18"','x','167.00','12');
INSERT INTO PRODUCTS Values ('1003','Wheel','TSW Sebring 18"','x','255.00','4');
INSERT INTO PRODUCTS Values ('1004','Wheel','DRAG DR-69 17"','x','136.00','16');
INSERT INTO PRODUCTS Values ('1005','Wheel','Advanti Racing Storm S1 15"','x','151.00','18');

/*                     Brake Pads                              */
INSERT INTO PRODUCTS Values ('2001','BrakePads','SureStop Front Brake Pad Set','x','35.99','5');
INSERT INTO PRODUCTS Values ('2002','BrakePads','Powerstop Z16 Evolution Ceramic Front Brake Pad Set','x','52.99','3');
INSERT INTO PRODUCTS Values ('2003','BrakePads','Powerstop Z16 Evolution Ceramic Rear Brake Pad Set','x','33.99','4');
INSERT INTO PRODUCTS Values ('2004','BrakePads','Powerstop Z23 Evolution Sport Rear Brake Pad Set','x','33.99','6');
INSERT INTO PRODUCTS Values ('2005','BrakePads','Centric C-Tek Rear Semi-Metallic Brake Pads','x','14.49','2');

/*                     Tail Light                       */
INSERT INTO PRODUCTS Values ('3001','TailLight','Ford OEM Driver Side Tail Light Halogen','x','38.99','3');
INSERT INTO PRODUCTS Values ('3002','TailLight','Ford OEM Passenger Side Tail Light Halogen','x','50.99','3');
INSERT INTO PRODUCTS Values ('3003','TailLight','Anzo Driver and Passenger Side Tail Light LED','x','328.49','2');
INSERT INTO PRODUCTS Values ('3004','TailLight','Spyder Driver and Passenger Side Tail Light LED','x','300.49','4');
INSERT INTO PRODUCTS Values ('3005','TailLight','Morimoto Driver and Passenger Side Tail Light LED','x','500.00','6');

/*                     Air Filter                       */
INSERT INTO PRODUCTS Values ('4001','AirFilter','K&N Air Filter High Performance, Washable','x','64.99','9');
INSERT INTO PRODUCTS Values ('4002','AirFilter','Spectre Air Filter Performance, Oiled, Washable','x','47.99','25');
INSERT INTO PRODUCTS Values ('4003','AirFilter','AEM Air Performance, Dry, Washable','x','69.99','13');
INSERT INTO PRODUCTS Values ('4004','AirFilter','Motorcraft Air Filter, Non-Washable','x','17.49','5');
INSERT INTO PRODUCTS Values ('4005','AirFilter','AC Delco Air Filter, Non-Washable','x','20.49','8');

/*                     Mirror                       */
INSERT INTO PRODUCTS Values ('5001','Mirror','Kool Vue Driver and Passenger Side Mirrors, Power, Heated, Manual Fold, W/O Signal Light','x','102.49','6');
INSERT INTO PRODUCTS Values ('5002','Mirror','Kool Vue Driver and Passenger Side Mirrors, Power, Non-Heated, Manual Folding, W/O Signal Light','x','218.99','12');
INSERT INTO PRODUCTS Values ('5003','Mirror','Kool Vue Driver and Passenger Side Mirrors, Power, Heated, Manual Folding, W/ Signal Light','x','157.99','5');
INSERT INTO PRODUCTS Values ('5004','Mirror','Doorman Passenger Side Mirror, Power, Power Fold, W/ Signal Light','x','311.99','9');
INSERT INTO PRODUCTS Values ('5005','Mirror','Doorman Driver Side Mirror, Non-Power, Manual Fold, W/O Signal Light','x','176.99','7');

/*                  Oils And Fluids                         */
INSERT INTO PRODUCTS Values ('6001','OilsAndFluids','Valvoline High Mileage, Synthetic Belnd, Motor Oil 5 QT','x','21.97','30');
INSERT INTO PRODUCTS Values ('6002','OilsAndFluids','Mobil 1 Advanced, Full Synthetic, Motor Oil 5 QT','x','27.97','25');
INSERT INTO PRODUCTS Values ('6003','OilsAndFluids','Prestone All Vehicles, Antifreeze+Coolant, 1 Gal ','x','10.38','16');
INSERT INTO PRODUCTS Values ('6004','OilsAndFluids','Valvoline DEX/MERC, Automatic Transmission Fluid, 1 Gal','x','17.98','11');
INSERT INTO PRODUCTS Values ('6005','OilsAndFluids','Prestone Universal, Power Steering Fluid','x','3.22','36');

SELECT * FROM PRODUCTS;


/*                  Customers                        */
INSERT INTO CUSTOMERS Values ('0001','John Doe','123 Smith Ave','Chicago','IL', 'US', '60007', 'JohnDoe32@gmail.com', 'asD');
INSERT INTO CUSTOMERS Values ('0002','Jane Doe','164 Main St','Chicago', 'IL', 'US', '60007', 'JaneDoe23@gmail.com', 'ADe');
INSERT INTO CUSTOMERS Values ('0003','Tom Hill','23 Kings Rd','New York','NY', 'US','10001', 'TomHill0343@gmail.com', 'EDF');
INSERT INTO CUSTOMERS Values ('0004','Hank Smith','74 Kingsway Dr','New York','NY', 'US', '10001','HSmith@yahoo.com', 'ABC');
INSERT INTO CUSTOMERS Values ('0005','Mia Keller','29 Church St','New York','NY', 'US', '10044','MKeller@yahoo.com', 'abc');
 
SELECT * FROM CUSTOMERS;


/*                   Orders                            */
INSERT INTO ORDERS Values ('0001','0001','2023-11-23','Shipped');
INSERT INTO ORDERS Values ('0004','0002','2023-11-27','Complete');
INSERT INTO ORDERS Values ('0002','0003','2023-12-2','Pending');
INSERT INTO ORDERS Values ('0005','0004','2023-12-8','Shipped');
INSERT INTO ORDERS Values ('0003','0005','2023-12-9','Complete');

SELECT * FROM ORDERS;