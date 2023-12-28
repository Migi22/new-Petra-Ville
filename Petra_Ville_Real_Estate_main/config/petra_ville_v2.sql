CREATE DATABASE petra_test;

use petra_test;

-- Admin Users Table
CREATE TABLE admin_users
(
  admin_id int(11)      NOT NULL AUTO_INCREMENT,
  username varchar(50)  NOT NULL,
  fname    varchar(50)  NOT NULL,
  lname    varchar(50)  NOT NULL,
  password varchar(255) NOT NULL,
  PRIMARY KEY (admin_id)
);

INSERT INTO `admin_users` (`admin_id`, `username`, `fname`, `lname`, `password`) VALUES
(1, 'superadmin', 'admin', 'admin', '$2y$10$XJ6GrmZ5lhX.yozcXy.KleQWy1VMLXTy4tedJocPgLCy5bbKYrQg.');
-- password (superadmin123)

-- Users Table
CREATE TABLE users
(
  user_id  int(11)      NOT NULL AUTO_INCREMENT,
  email    varchar(50)  NOT NULL,
  password varchar(255) NOT NULL,
  PRIMARY KEY (user_id)
);

-- Provinces Table
CREATE TABLE provinces
(
  province_id int(11)      NOT NULL AUTO_INCREMENT,
  province    varchar(50)  NOT NULL,
  PRIMARY KEY (province_id),
  UNIQUE (province)
);

-- Provinces Table
INSERT INTO provinces (province_id, province) VALUES
(1, 'None'),
(2, 'Batangas'),
(3, 'Cavite'),
(4, 'Cebu'),
(5, 'Davao del Sur'),
(6, 'Iloilo'),
(7, 'Laguna'),
(8, 'Metro Manila'),
(9, 'Negros Occidental'),
(10, 'Pampanga'),
(11, 'Rizal');


-- Inquiry Types Table
CREATE TABLE inquiry_types
(
  inquiry_type_id int(11)      NOT NULL AUTO_INCREMENT,
  inquiry_type    varchar(50)  NOT NULL,
  PRIMARY KEY (inquiry_type_id),
  UNIQUE (inquiry_type)
);

-- Inquiry Types Table
INSERT INTO inquiry_types (inquiry_type_id, inquiry_type) VALUES
(1, 'None'),
(2, 'Property Purchase Inquiries'),
(3, 'Rental Inquiries');

-- Unit Types Table
CREATE TABLE unit_types
(
  unit_type_id int(11)      NOT NULL AUTO_INCREMENT,
  unit_type    varchar(50)  NOT NULL,
  PRIMARY KEY (unit_type_id),
  UNIQUE (unit_type)
);

-- Unit Types Table
INSERT INTO unit_types (unit_type_id, unit_type) VALUES
(1, 'None'),
(2, 'Bungalow'),
(3, 'Condominium'),
(4, 'Tome Homes');

-- TCP Ranges Table
CREATE TABLE tcp_ranges
(
  tcp_range_id int(11)      NOT NULL AUTO_INCREMENT,
  tcp_range    varchar(50)  NOT NULL,
  PRIMARY KEY (tcp_range_id),
  UNIQUE (tcp_range)
);

-- TCP Ranges Table
INSERT INTO tcp_ranges (tcp_range_id, tcp_range) VALUES
(1, 'None'),
(2, 'Below Php 100,000'),
(3, 'Php 100,000 - Php 200,000'),
(4, 'Php 200,000 - Php 300,000');


-- Product Interests Table
CREATE TABLE product_interests
(
  product_interest_id int(11)      NOT NULL AUTO_INCREMENT,
  product_interest    varchar(50)  NOT NULL,
  PRIMARY KEY (product_interest_id),
  UNIQUE (product_interest)
);

-- Product Interests Table
INSERT INTO product_interests (product_interest_id, product_interest) VALUES
(1, 'None'),
(2, 'Lot Only'),
(3, 'Studio Unit'),
(4, '1 Bedroom'),
(5, '2 Bedrooms'),
(6, '3 Bedrooms'),
(7, '4 Bedrooms'),
(8, '5 Bedrooms');

-- Properties
CREATE TABLE properties
(
  property_id int(11) NOT NULL AUTO_INCREMENT,
  property_name varchar(50) NOT NULL,
  PRIMARY KEY (property_id),
  UNIQUE (property_name)
);

-- Properties
INSERT INTO properties (property_id, property_name) VALUES
(1, 'None'),
(2, 'Azure Skies Residences'),
(3, 'Blissful Breeze Apartments'),
(4, 'Crestview Meadows'),
(5, 'Eden Springs Residences'),
(6, 'Enchanted Grove Estates'),
(7, 'Golden Horizon Heights'),
(8, 'Harmony Haven Residences'),
(9, 'Horizon Haven Homes'),
(10, 'Lush Haven Apartments'),
(11, 'Majestic Pines Estates'),
(12, 'Mystic Meadows Estates'),
(13, 'Radiant Reflections Condos'),
(14, 'Radiant Ridge Villas'),
(15, 'Sapphire Shores Villas'),
(16, 'Serenity Springs Estates'),
(17, 'Solstice Sunsets Condos'),
(18, 'Summit View Residences'),
(19, 'Tranquil Terrace Homes'),
(20, 'Whispering Oaks Residences');

-- Inquiries Table
CREATE TABLE inquiries
(
  inquiry_id       int(11)      NOT NULL AUTO_INCREMENT,
  user_id          int(11), 
  first_name       varchar(50)  NOT NULL,
  last_name        varchar(50)  NOT NULL,
  email            varchar(100) NOT NULL,
  phone            varchar(20)  NOT NULL,
  province_id      int(11), 
  property_id      int(11),
  inquiry_type_id  int(11), 
  unit_type_id     int(11), 
  tcp_range_id     int(11), 
  product_interest_id int(11), 
  message          text         NOT NULL,
  submission_time  timestamp    NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (inquiry_id),
  FOREIGN KEY (user_id) REFERENCES users(user_id),
  FOREIGN KEY (province_id) REFERENCES provinces(province_id),
  FOREIGN KEY (property_id) REFERENCES properties(property_id), 
  FOREIGN KEY (inquiry_type_id) REFERENCES inquiry_types(inquiry_type_id),
  FOREIGN KEY (unit_type_id) REFERENCES unit_types(unit_type_id),
  FOREIGN KEY (tcp_range_id) REFERENCES tcp_ranges(tcp_range_id),
  FOREIGN KEY (product_interest_id) REFERENCES product_interests(product_interest_id)
);

