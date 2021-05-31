<?php

session_start();

$conn = pg_connect("postgres://uqklfdmkazqmix:dd986026523d25807783d81ce26bf9743e68964dfce989fdf9db39369daa04da@ec2-54-90-211-192.compute-1.amazonaws.com:5432/dc110dq94k9s9k") or die('No se ha podido conectar: ' . pg_last_error());

?>