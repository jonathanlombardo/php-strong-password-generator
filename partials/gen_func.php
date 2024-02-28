<?php
function genPassword($len, $capital, $number, $special)
{
  $chars = [
    "lower_char" => "abcdefghijklmnopqrstuvwxyz",
    "capital_char" => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
    "number_char" => "0123456789",
    "special_char" => "!?#@.-_",
  ];

  $pwd = "";

  while (strlen($pwd) < $len) {

    $rnd = rand(0, strlen($chars["lower_char"]) - 1);
    $pwd .= $chars["lower_char"][$rnd];

    if ($capital) {
      $rnd = rand(0, strlen($chars["capital_char"]) - 1);
      $pwd .= $chars["capital_char"][$rnd];
    }

    if ($number) {
      $rnd = rand(0, strlen($chars["number_char"]) - 1);
      $pwd .= $chars["number_char"][$rnd];
    }

    if ($special) {
      $rnd = rand(0, strlen($chars["special_char"]) - 1);
      $pwd .= $chars["special_char"][$rnd];
    }

  }

  $pwd = str_shuffle($pwd);

  return $pwd;

}