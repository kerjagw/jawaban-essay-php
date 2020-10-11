<?php

// 14.
// < Soal essay 4 >

// Bersambung dari < soal essay 3 > Tulislah sintaks SQL untuk menambahkan data pada tabel orders dan customers 
INSERT INTO customers (nama, email) values 
	("John Doe", "john@doe.com"),
	("Jane Doe", "jane@doe.com");

INSERT INTO orders (amount, customer_id) VALUES
	(500, 1),
	(200, 2),
	(750, 2),
	(250, 1),
	(400, 2);
?>
