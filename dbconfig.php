<?php

$link = mysqli_connect('localhost', 'root', '', 'rnd');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  