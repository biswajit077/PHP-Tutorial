<?php
require 'functions.php';
require 'config.php';

$conn = connect($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'],'blog');
$results = query($conn,'SELECT *FROM users');

require 'index.view.php';