<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Turnauskaavio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet-custom.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Turnauskaavio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Turnauskaavio</h1>
          <p class="lead"></p>

          <div class=row>
            <div class="col-lg-6">
              <h2> SARJA F7</h2>
              <h3>Lisää joukkue</h3>
              <form action="addItem7.php" method="post">
                  <input type="text" name="joukkueNimi" placeholder="Joukkueen nimi"/>
                  <input type="text" name="yhtNimi" placeholder="Yhteyshenkilön nimi"/>
                  <input type="text" name="yhtEmail" placeholder="Yhteyshenkilön sähköposti"/>
                  <input type="text" name="yhtPhone" placeholder="Yhteyshenkilön puhelinnumero"/>
                  <input type="submit" value="Lisää"/>
                </form>
                <br>
              <?php
                require_once('db.php');

                // JOUKKUE
                $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f7";
                $result = $conn->query($sql);
                if ($result->num_rows >0) {
                echo '<table id="play">';
                echo '<tr><th>Joukkue</th><th>Yhteyshenkilön nimi</th><th>Yhteyshenkilön s-posti</th><th>Yhteyshenkilön puhelin</th></tr>';
                while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . $row["joukkueNimi"]. "</td>
                          <td>" . $row["yhtNimi"]. "</td>
                          <td>" . $row["yhtEmail"]. "</td>
                          <td>" . $row["yhtPhone"]. "</td>
                       </tr>";
                }
                echo "</table>";
                }
                else {
                echo "0 results";
                }
                ?>
              </div>

            <div class="col-lg-6">
              <h2> SARJA F8</h2>
              <h3>Lisää joukkue</h3>
              <form action="addItem8.php" method="post">
                  <input type="text" name="joukkueNimi" placeholder="Joukkueen nimi"/>
                  <input type="text" name="yhtNimi" placeholder="Yhteyshenkilön nimi"/>
                  <input type="text" name="yhtEmail" placeholder="Yhteyshenkilön sähköposti"/>
                  <input type="text" name="yhtPhone" placeholder="Yhteyshenkilön puhelinnumero"/>
                  <input type="submit" value="Lisää"/>
                </form>
                <br>
              <?php
                require_once('db.php');

                // JOUKKUE
                  $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f8";
                  $result = $conn->query($sql);
                  if ($result->num_rows >0) {
                    echo '<table id="play">';
                    echo '<tr><th>Joukkue</th><th>Yhteyshenkilön nimi</th><th>Yhteyshenkilön s-posti</th><th>Yhteyshenkilön puhelin</th></tr>';
                    while($row = $result->fetch_assoc()) {
                      echo "<tr>
                              <td>" . $row["joukkueNimi"]. "</td>
                              <td>" . $row["yhtNimi"]. "</td>
                              <td>" . $row["yhtEmail"]. "</td>
                              <td>" . $row["yhtPhone"]. "</td>
                           </tr>";
                    }
                    echo "</table>";
                    }
                  else {
                    echo "0 results";
                  }
                  ?>
            </div>
          </div>

          <div class=row>
            <div class="col-lg-6">
              <h2> SARJA F9</h2>
              <h3>Lisää joukkue</h3>
              <form action="addItem9.php" method="post">
                    <input type="text" name="joukkueNimi" placeholder="Joukkueen nimi"/>
                    <input type="text" name="yhtNimi" placeholder="Yhteyshenkilön nimi"/>
                    <input type="text" name="yhtEmail" placeholder="Yhteyshenkilön sähköposti"/>
                    <input type="text" name="yhtPhone" placeholder="Yhteyshenkilön puhelinnumero"/>
                    <input type="submit" value="Lisää"/>
                  </form>
                  <br>
              <?php
                    require_once('db.php');

                    // JOUKKUE
                      $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f9";
                      $result = $conn->query($sql);
                      if ($result->num_rows >0) {
                        echo '<table id="play">';
                        echo '<tr><th>Joukkue</th><th>Yhteyshenkilön nimi</th><th>Yhteyshenkilön s-posti</th><th>Yhteyshenkilön puhelin</th></tr>';
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>
                                  <td>" . $row["joukkueNimi"]. "</td>
                                  <td>" . $row["yhtNimi"]. "</td>
                                  <td>" . $row["yhtEmail"]. "</td>
                                  <td>" . $row["yhtPhone"]. "</td>
                               </tr>";
                        }
                        echo "</table>";
                        }
                      else {
                        echo "0 results";
                      }
                      ?>
            </div>

            <div class="col-lg-6">
              <h2> SARJA F10</h2>
              <h3>Lisää joukkue</h3>
              <form action="addItem10.php" method="post">
                    <input type="text" name="joukkueNimi" placeholder="Joukkueen nimi"/>
                    <input type="text" name="yhtNimi" placeholder="Yhteyshenkilön nimi"/>
                    <input type="text" name="yhtEmail" placeholder="Yhteyshenkilön sähköposti"/>
                    <input type="text" name="yhtPhone" placeholder="Yhteyshenkilön puhelinnumero"/>
                    <input type="submit" value="Lisää"/>
                  </form>
                    <br>
              <?php
                  require_once('db.php');

                  // JOUKKUE
                    $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f10";
                    $result = $conn->query($sql);
                    if ($result->num_rows >0) {
                            echo '<table id="play">';
                            echo '<tr><th>Joukkue</th><th>Yhteyshenkilön nimi</th><th>Yhteyshenkilön s-posti</th><th>Yhteyshenkilön puhelin</th></tr>';
                            while($row = $result->fetch_assoc()) {
                              echo "<tr>
                                      <td>" . $row["joukkueNimi"]. "</td>
                                      <td>" . $row["yhtNimi"]. "</td>
                                      <td>" . $row["yhtEmail"]. "</td>
                                      <td>" . $row["yhtPhone"]. "</td>
                                   </tr>";
                            }
                            echo "</table>";
                            }
                    else {
                      echo "0 results";
                    }
                    ?>
            </div>
          </div>

<?php
/*
            //SARJA
              $sql = "SELECT nimi, joukkueLkm, minJoukkue, maxJoukkue FROM sarja";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                echo '<table>';
                echo '<tr><th>Nimi</th><th>Joukkue lukumäärä</th><th>Minimi joukkueiden määrä</th><th>Maksimi joukkueiden määrä</th></tr>';
                while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . $row["nimi"]. "</td>
                          <td>" . $row["joukkueLkm"]. "</td>
                          <td>" . $row["minJoukkue"]. "</td>
                          <td>" . $row["maxJoukkue"]. "</td>
                       </tr>";
                }
                echo "</table>";
              }
              else {
                echo "0 results";
              }

            //TURNAUS
              $sql = "SELECT nimi, aika, paikka, minJoukkue, maxJoukkue FROM turnaus";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                echo '<table>';
                echo '<tr><th>Nimi</th><th>Aika</th><th>Paikka</th><th>Minimi joukkuemäärä</th><th>Maksimi joukkuemäärä</th></tr>';
                while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . $row["nimi"]. "</td>
                          <td>" . $row["aika"]. "</td>
                          <td>" . $row["paikka"]. "</td>
                          <td>" . $row["minJoukkue"]. "</td>
                          <td>" . $row["maxJoukkue"]."</td>
                      </tr>";
                }
                echo "</table>";
              }
              else {
                echo "0 results";
              }
              */

            $conn->close();

          ?>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
