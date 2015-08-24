<?php
require 'db.php';
require 'functions.php';
use Blog\DB;
$conn = DB\connect($config);
if (! $conn) die("Problem connecting to the db");