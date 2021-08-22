<?php

  include("connection.php");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
  

if (!$mysqli->query('CREATE TRIGGER pricecheck BEFORE INSERT on service FOR EACH ROW IF NEW.price<50 then set NEW.price=50; END IF;')) {
    echo "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->query('CREATE TRIGGER ratingscheck BEFORE UPDATE on order_info FOR EACH ROW IF NEW.ratings>5 then set NEW.ratings=5; END IF;')) {
    echo "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->query('CREATE TRIGGER datecheck BEFORE INSERT on order_info FOR EACH ROW IF NEW.date<CURDATE() then set NEW.date=CURDATE(); END IF;')) {
    echo "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}


?>