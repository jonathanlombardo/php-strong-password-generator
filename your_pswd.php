<?php
session_start();

if (!isset($_SESSION["pwd"])) {
  session_unset();
  session_destroy();
  header("Location: ./");
  exit;
}

$pwd = $_SESSION["pwd"];
session_unset();
session_destroy();
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
      padding: 0;
    }

    li {
      width: fit-content;
      margin: 0 auto;
      margin-top: 10px;
      margin-bottom: 20px;
      position: relative;
    }

    .copy-text {
      position: absolute;
      top: calc(100% + 3px);
      left: 50%;
      transform: translateX(-50%);
      transition: .4s;
    }
  </style>
</head>

<body>
  <div class="container pt-3">
    <h1 class="text-center">Pasword Generator VaiSereno!</h1>
    <p class="text-center">Generiamo password strong da giovedì scorso </p>
    <div class="card">
      <div class="card-header text-center">
        La tua password
      </div>
      <ul>
        <li>
          <h2 id="pwd">
            <?= $pwd ?>
          </h2>
        </li>
        <li>
          <button type="button" id="copy-pwd" class="btn btn-primary">Copia la password</button>
          <div class="copy-text mx-auto opacity-0">Copied</div>

        </li>
      </ul>
      <div class="card-footer text-center">
        <a href="./" type="submit" class="btn btn-success">Genera nuova password serena!</a>
      </div>
    </div>
  </div>

  <script>
    const pwd = document.querySelector("#pwd").innerText.trim();
    const copyBtn = document.querySelector("#copy-pwd");
    const copyTextEl = document.querySelector(".copy-text");
    let clock = false;

    copyBtn.addEventListener("click", () => {
      clearTimeout(clock)
      navigator.clipboard.writeText(pwd);
      copyTextEl.classList.remove("opacity-0");

      clock = setTimeout(() => {
        copyTextEl.classList.add("opacity-0");
      }, 1000)

    });

  </script>

</body>

</html>