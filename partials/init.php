<?php

require_once __DIR__ . "/gen_func.php";

$min_len = 4;
$max_len = 20;

$form_sent = !empty($_GET);

if ($form_sent) {
  $pswd_len =
    isset($_GET["pswd-len"]) &&
    (int) $_GET["pswd-len"] >= $min_len &&
    (int) $_GET["pswd-len"] <= $max_len ?
    (int) $_GET["pswd-len"] :
    false;

  $pswd_capital = isset($_GET["capital-char"]) ? (bool) $_GET["capital-char"] : false;
  $pswd_number = isset($_GET["number-char"]) ? (bool) $_GET["number-char"] : false;
  $pswd_special = isset($_GET["special-char"]) ? (bool) $_GET["special-char"] : false;

  if ($pswd_len) {
    $pwd = genPassword($pswd_len, $pswd_capital, $pswd_number, $pswd_special);

    session_start();
    $_SESSION["pwd"] = $pwd;
    header('Location: ./your_pswd.php');
  }


}