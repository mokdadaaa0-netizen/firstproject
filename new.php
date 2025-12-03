<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

// Create connection
$new = new mysqli($servername, $username, $password,$database);

// Check connection
if ($new->connect_error) {
  die("Connection failed: " . $new->connect_error);
}
