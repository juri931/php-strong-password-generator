<?php

  $error = '';

?>

<?php include_once __DIR__ . '../data/functions.php';?>


<?php include_once __DIR__ . './partials/head.php';?>

<body>

  <?php include_once __DIR__ . './partials/header.php';?>

  <main class="container">

    <table class="table">
      <tbody>
        <tr>
          <td>Lunghezza password:</td>
          <td>
            <form action="index.php" method="GET">
              <input type="text" class="form-control" id="number" name="number">
            </form>
          </td>
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
            <button type="submit" class="btn btn-primary">Invia</button>
            <button class="btn btn-secondary">Annulla</button>
          </td>
        </tr>
      </tbody>
    </table>

  </main>
  
</body>
</html>