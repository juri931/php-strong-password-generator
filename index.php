<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
  <link rel="stylesheet" href="./data/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>
<body>

  <header class="container text-center my-1">
    <h1>Strong password generator</h1>
    <h2>Genera una password sicura</h2>
    <h6>Nessun parametro valido inserito</h6>
  </header>

  <main class="container">

    <table class="table">
      <tbody>
        <tr>
          <td>Lunghezza password:</td>
          <td><input type="text"></td>
        </tr>
        
        <tr>
          <td>Consenti ripetizioni di uno o più caratteri:</td>
          <td>
            <input type="radio" name="si">
            <label for="si">Si</label>
            <br>
            <input type="radio" name="no">
            <label for="no">No</label>
          </td>
        </tr>
        
        <tr>
          <td></td>
          <td>
            <input type="checkbox" name="lettere">
            <label for="lettere">Lettere</label>
            <br>
            <input type="checkbox" name="numeri">
            <label for="numeri">Numeri</label>
            <br>
            <input type="checkbox" name="simboli">
            <label for="simboli">Simboli</label>
          </td>
        </tr>

        <tr>
          <td>
            <button class="btn btn-primary">Invia</button>
            <button class="btn btn-secondary">Annulla</button>
          </td>
        </tr>
      </tbody>
    </table>

  </main>
  
</body>
</html>