<?php

// Tulislah sintaks SQL untuk membuat tabel-tabel berikut: 1. table customers ( id integer auto increment primary key, name varchar(255), email varchar 255); 2. table orders (id integer auto increment primary key, amount integer, customer_id integer foreign key references id on customers).
CREATE TABLE customers(
	id int NOT NULL primary key AUTO_INCREMENT,
	nama varchar(255), 
	email varchar (255)
);

CREATE TABLE orders(
	id int NOT NULL primary key AUTO_INCREMENT,
	amount int, 
	customer_id int,
	FOREIGN KEY (customer_id) REFERENCES customers(id)
);
?>
