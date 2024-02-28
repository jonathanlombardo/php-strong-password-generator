<?php
require_once __DIR__ . "/partials/init.php";
require_once __DIR__ . "/partials/gen_func.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>VaiSereno</title>
  <style>
    ul {
      list-style: none;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    li {
      width: fit-content;
      margin: 0 auto;
      margin-top: 10px;
      margin-bottom: 10px;

    }
  </style>
</head>

<body>
  <div class="container pt-3">
    <h1 class="text-center">Pasword Generator VaiSereno!</h1>
    <p class="text-center">Generiamo password strong da giovedì scorso </p>
    <form method="GET">
      <div class="card">
        <div class="card-header text-center">
          Impostazioni
        </div>
        <ul>
          <li class="d-flex align-items-center gap-2">
            <label for="pswd-len" class="form-label m-0">Lunghezza Password</label>
            <input class="form-control w-auto" type="number" min="<?= $min_len ?>" max="<?= $max_len ?>" value="<?= $max_len ?>" id="pswd-len" name="pswd-len" required>
          </li>
          <li class="">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="true" id="capital-char" name="capital-char" checked>
              <label class="form-check-label" for="capital-char">
                Lettere Maiuscole (AA)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="true" id="number-char" name="number-char" checked>
              <label class="form-check-label" for="number-char">
                Numeri (123)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="true" id="special-char" name="special-char" checked>
              <label class="form-check-label" for="special-char">
                Caratteri speciali (!#@)
              </label>
            </div>
          </li>
        </ul>
        <div class="card-footer text-center">
          <button type="submit" class="btn btn-success">Genera password serena!</button>
        </div>
      </div>
    </form>
  </div>

</body>

</html>