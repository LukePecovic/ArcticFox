/*
-----------------------------------------------------
This MySQL file will create three seperate 
tables for the ArcticFox database, as well as fill it in with sample data. 
-----------------------------------------------------
*/ 

use site_db;

-- These will drop the tables if they exist on the database.
drop table if exists T4_Users;
drop table if exists T4_Items;
drop table if exists T4_Suppliers;
drop table if exists T4_Shipment;

-- Creates a table that will hold all necessary information for creating a user account.
create table if not exists T4_Users (
	userID int primary key unique auto_increment not null,
	username varchar(16) not null,
	fname varchar(16) not null,
	lname varchar(16) not null,
	password char(32) not null,
	password_hash char(32),
	lastPassChange timestamp not null,
	acctType enum('Shareholder', 'Employee', 'Admin'),
	active enum('Y','N') default ('Y') not null,
	DOB date default('2007-07-24') not null 
	
);

-- Account made for Professor Tokash, as well as the three members of Group 4.
insert into T4_Users (userID, username, fname, lname, password, lastPassChange, acctType, active) 
values (1, "ATokash445", "Andrew", "Tokash", "ProfAPT0", current_timestamp(), "Admin", "Y");
insert into T4_Users (username, fname, lname, password, lastPassChange, acctType, active, DOB) 
values ("ALopez327", "Antonio", "Lopez", "admin002", current_timestamp(), "Admin", "Y", "2001-09-13");
insert into T4_Users (username, fname, lname, password, lastPassChange, acctType, active, DOB) 
values ("IMarsh254", "Ian", "Marsh", "admin003", current_timestamp(), "Admin", "Y", "2001-09-04");
insert into T4_Users (username, fname, lname, password, lastPassChange, acctType, active, DOB) 
values ("LPecovic119", "Luke", "Pecovic", "admin004", current_timestamp(), "Admin", "Y", "2002-09-13");
insert into T4_Users (username, fname, lname, password, lastPassChange, acctType, active, DOB) 
values ("BillNye", "Bill", "Nye", "BillNye001", current_timestamp(), "Employee", "Y", "1920-09-13");
insert into T4_Users (username, fname, lname, password, lastPassChange, acctType, active, DOB) 
values ("BobRoss", "Bob", "Ross", "BobRoss001", current_timestamp(), "Employee", "Y", "1896-09-13");


-- Creates a table that will hold all necessary information for the products that we sell.
create table if not exists T4_Items (
	itemID int primary key unique auto_increment not null,
	itemName varchar(32) unique not null default("N/A"),
	itemPrice DEC(6,2) not null default(0.00),
	modelNum int unique,
	quantityAvailable int default(0),
	itemCategory enum('Clothing', 'Equipment', 'Unsorted') not null default('Unsorted'),
	active enum('Y','N') default ('Y') not null
);

-- Sample items that would be sold at our locations.
insert into T4_Items (itemID, itemName, itemPrice, modelNum, quantityAvailable, itemCategory) 
values (1, "Standard Snowboard Boot", 50, 144530, 4, "Equipment");
insert into T4_Items (itemName, itemPrice, modelNum, quantityAvailable, itemCategory) 
values ("Standard Snowboard", 60, 144531, 3, "Equipment");
insert into T4_Items (itemName, itemPrice, modelNum, quantityAvailable, itemCategory) 
values ("Standard Snowgloves", 25, 144532, 1, "Clothing");
insert into T4_Items (itemName, itemPrice, modelNum, quantityAvailable, itemCategory) 
values ("Snowboard Bindings", 70, 144533, 4, "Equipment");
insert into T4_Items (itemName, itemPrice, modelNum, quantityAvailable, itemCategory) 
values ("Snowboard Jacket", 200, 144534, 5, "Clothing");
insert into T4_Items (itemName, itemPrice, modelNum, quantityAvailable, itemCategory) 
values ("Snowboard Hoodie", 50, 144535, 2, "Clothing");
insert into T4_Items (itemName, itemPrice, modelNum, quantityAvailable, itemCategory) 
values ("Snowboard Socks", 20, 144536, 4, "Clothing");

-- Creates a table that holds information about our suppliers.
create table if not exists T4_Suppliers (
	supplierID int primary key unique auto_increment not null,
	supplierName varchar(30) not null default('N/A'),
	supplierEmail varchar(30) not null default('N/A'),
	supplierPhoneNumber varchar(30) default('N/A'),
	address text default('N/A'),
	active enum('Y','N') default ('Y') not null
);

-- Using a real-world snowboard supplier as an example in the database.
insert into T4_Suppliers (supplierID, supplierName, supplierEmail, supplierPhoneNumber, address) 
values (1, "Backcountry", "backcountry@gmail.com", "1-800-409-4502", "1640 W Redstone Center Dr. Ste. 115 Park City, UT 84098");

insert into T4_Suppliers (supplierName, supplierEmail, supplierPhoneNumber, address) 
values ("Capita", "info@capitasnowboarding.com", "1-206-932-0543", "4917 14th Ave NW Seattle, WA 98107");

insert into T4_Suppliers (supplierName, supplierEmail, supplierPhoneNumber, address) 
values ("Burton", "info@burton.com", "1-800-583-9341", "162 College Street Burlington, VT 05401");

insert into T4_Suppliers (supplierName, supplierEmail, supplierPhoneNumber, address) 
values ("Spyder", "info@spyder.com", "1-800-230-0993", "4740 Walnut St Boulder, CO, 80301-2538 United States");



-- Creates a table that keeps track of all shipments that come from our suppliers.
create table if not exists T4_Shipment (
	shipmentID int primary key unique auto_increment not null,
	
	-- Taken from the Item Table.
	itemID int,
	
	-- Taken from the Supplier Table.
	supplierID int,
	
	amount int
);

-- Creates a sample order of 16 gloves from Backcountry.
insert into T4_Shipment values (1, 144530, 1, 16);

-- Explains and shows all the tables that were created beforehand.
explain T4_Users;
select * from T4_Users;

explain T4_Items;
select * from T4_Items;

explain T4_Suppliers;
select * from T4_Suppliers;
 
explain T4_Shipment;
select * from T4_Shipment;
