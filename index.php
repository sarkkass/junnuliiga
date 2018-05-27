<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Turnauskaavio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet-custom.css" rel="stylesheet">



	<script>
  function validateForm7() {
    var check = document.forms["sub7"]["joukkueNimi"].value;
      if (check == null || check == "") {
        alert("Ole hyvä ja täytä tiedot");
        return false;
      }
    }
  function validateForm8() {
      var check = document.forms["sub8"]["joukkueNimi"].value;
        if (check == null || check == "") {
          alert("Ole hyvä ja täytä tiedot");
          return false;
        }
      }
  function validateForm9() {
      var check = document.forms["sub9"]["joukkueNimi"].value;
        if (check == null || check == "") {
          alert("Ole hyvä ja täytä tiedot");
          return false;
        }
      }


	</script>

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


          <!-- SARJA F7 -->
          <div class=row>
            <div class="col-lg-12">
              <h1> SARJA F7</h1>
            </div>

          <!-- LISÄÄ JOUKKUE -->
          <div class="col-lg-5">
            <h3>Lisää joukkue</h3>
            <form name="sub7" onsubmit="return validateForm7()" action="addItem7.php" method="POST">
                  <input type="text" name="joukkueNimi" placeholder="Joukkueen nimi"/>
                  <input type="text" name="yhtNimi" placeholder="Yhteyshenkilön nimi"/>
                  <input type="text" name="yhtEmail" placeholder="Yhteyshenkilön sähköposti"/>
                  <input type="text" name="yhtPhone" placeholder="Yhteyshenkilön puhelinnumero"/>
                  <br>
                  <input type="submit" value="Lisää"/>
                </form>
              </div>

          <!-- TURNAUSTAULUKKO -->
          <div class="col-lg-7">
            <h2>Turnaustaulukko</h2>
                <table>
                  <tr>
                    <th>Aika</th>
                    <th>Kenttä</th>
                    <th>Lohko</th>
                    <th>Joukkue 1</th>
                    <th>Joukkue 2</th>
                  </tr>
                  <tr>
                    <td>9:00</td>
                    <td>Kenttä 1</td>
                    <td>Lohko A</td>
                    <td><?php
                        require_once('db.php');

                        //9:00 MATSI JOUKKUE 1
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 0";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                    <td><?php
                        //9:00 MATSI JOUKKUE 2
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 1";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                  </tr>
                  <tr>
                    <td>9:30</td>
                    <td>Kenttä 1</td>
                    <td>Lohko A</td>
                    <td><?php
                        require_once('db.php');

                        //9:30 MATSI JOUKKUE 1
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 2";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                    <td><?php

                        //9:30 MATSI JOUKKUE 2
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 3";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                  </tr>
                  <tr>
                    <td>10:00</td>
                    <td>Kenttä 1</td>
                    <td>Lohko A</td>
                    <td><?php
                        require_once('db.php');

                        //10:00 MATSI JOUKKUE 1
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 0";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                    <td><?php
                        //10:00 MATSI JOUKKUE 2
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 2";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                  </tr>
                  <tr>
                    <td>10:30</td>
                    <td>Kenttä 1</td>
                    <td>Lohko A</td>
                    <td><?php
                        require_once('db.php');

                        //10:30 MATSI JOUKKUE 1
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 1";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                    <td><?php
                        //10:30 MATSI JOUKKUE 1
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 3";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                  </tr>
                  <tr>
                    <td>11:00</td>
                    <td>Kenttä 1</td>
                    <td>Lohko B</td>
                    <td><?php
                        require_once('db.php');

                        //11:00 MATSI JOUKKUE 1
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 4";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                    <td><?php
                        //11:00 MATSI JOUKKUE 2
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 5";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                  </tr>
                  <tr>
                    <td>11:30</td>
                    <td>Kenttä 1</td>
                    <td>Lohko B</td>
                    <td><?php
                        require_once('db.php');
                        //11:30 MATSI JOUKKUE 1
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 6";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                    <td><?php
                        //11:30 MATSI JOUKKUE 2
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 7";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                  </tr>
                  <tr>
                    <td>12:00</td>
                    <td>Kenttä 1</td>
                    <td>Lohko B</td>
                    <td><?php
                        require_once('db.php');

                        //12:00 MATSI JOUKKUE 1
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 4";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                    <td><?php
                        //12:00 MATSI JOUKKUE 2
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 6";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                  </tr>
                  <tr>
                    <td>12:30</td>
                    <td>Kenttä 1</td>
                    <td>Lohko B</td>
                    <td><?php
                        //12:30 MATSI JOUKKUE 1
                        require_once('db.php');
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 5";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                    <td><?php
                        //12:30 MATSI JOUKKUE 2
                        $sql = "SELECT joukkueNimi FROM sarja_f7 LIMIT 1 OFFSET 7";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                        } /*
                        else {
                          echo "0 results";
                        } */
                        ?></td>
                  </tr>
                </table>
              </div>

          <!-- JOUKKUETAULUKKO -->
          <div class="row">
                <div class="col-lg-12">
                <h3>Joukkuetaulukko</h3>
                  <table id="play">
                    <tr>
                      <th>Joukkue</th>
                      <th>Yhteyshenkilön nimi</th>
                      <th>Yhteyshenkilön s-posti</th>
                      <th>Yhteyshenkilön puhelin</th>
                    </tr>

                    <?php
                      require_once('db.php');

                      // JOUKKUE
                      $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f7 LIMIT 4 OFFSET 0";
                      $result = $conn->query($sql);
                      if ($result->num_rows >0) {
                        echo '<tr><th colspan="4" style="text-align:center;">Lohko A</th><tr>';
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>
                              <td>" . $row["joukkueNimi"]. "</td>
                              <td>" . $row["yhtNimi"]. "</td>
                              <td>" . $row["yhtEmail"]. "</td>
                              <td>" . $row["yhtPhone"]. "</td>
                              </tr>";
                        }
                        echo "";
                      }
                      /*
                      else {
                        echo "0 results";
                      } */
                      ?>
                  </table>

                  <?php
                    $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f7 LIMIT 4 OFFSET 4";
                    $result = $conn->query($sql);
                    if ($result->num_rows >0) {
                      echo '<table id="play">';
                      echo '<tr><th>Joukkue</th><th>Yhteyshenkilön nimi</th><th>Yhteyshenkilön s-posti</th><th>Yhteyshenkilön puhelin</th></tr>';
                      echo '<tr><th colspan="4" style="text-align:center;">Lohko B</th><tr>';
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
                    /*
                    else {
                      echo "0 results";
                    } */
                  ?>

                </div>
              </div>



          <!-- SARJA F8 -->
          <div class=row>
              <div class="col-lg-12">
                <h1> SARJA F8</h1>
              </div>

          <!-- LISÄÄ JOUKKUE -->
          <div class="col-lg-5">
                <h3>Lisää joukkue</h3>
                  <form name="sub" onsubmit="return validateForm()" action="addItem8.php" method="POST">
                      <input type="text" name="joukkueNimi" placeholder="Joukkueen nimi"/>
                      <input type="text" name="yhtNimi" placeholder="Yhteyshenkilön nimi"/>
                      <input type="text" name="yhtEmail" placeholder="Yhteyshenkilön sähköposti"/>
                      <input type="text" name="yhtPhone" placeholder="Yhteyshenkilön puhelinnumero"/>
                      <br>
                      <input type="submit" value="Lisää"/>
                    </form>
                  </div>

          <!-- TURNAUSTAULUKKO -->
          <div class="col-lg-7">
                <h2>Turnaustaulukko</h2>
                  <table>
                      <tr>
                        <th>Aika</th>
                        <th>Kenttä</th>
                        <th>Lohko</th>
                        <th>Joukkue 1</th>
                        <th>Joukkue 2</th>
                      </tr>
                      <tr>
                        <td>9:00</td>
                        <td>Kenttä 2</td>
                        <td>Lohko A</td>
                        <td><?php
                            require_once('db.php');

                            //9:00 MATSI JOUKKUE 1
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 0";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                        <td><?php
                            //9:00 MATSI JOUKKUE 2
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                      </tr>
                      <tr>
                        <td>9:30</td>
                        <td>Kenttä 2</td>
                        <td>Lohko A</td>
                        <td><?php
                            require_once('db.php');

                            //9:30 MATSI JOUKKUE 1
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 2";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                        <td><?php

                            //9:30 MATSI JOUKKUE 2
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 3";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                      </tr>
                      <tr>
                        <td>10:00</td>
                        <td>Kenttä 2</td>
                        <td>Lohko A</td>
                        <td><?php
                            require_once('db.php');

                            //10:00 MATSI JOUKKUE 1
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 0";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                        <td><?php
                            //10:00 MATSI JOUKKUE 2
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 2";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                      </tr>
                      <tr>
                        <td>10:30</td>
                        <td>Kenttä 2</td>
                        <td>Lohko A</td>
                        <td><?php
                            require_once('db.php');

                            //10:30 MATSI JOUKKUE 1
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                        <td><?php
                            //10:30 MATSI JOUKKUE 1
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 3";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                      </tr>
                      <tr>
                        <td>11:00</td>
                        <td>Kenttä 2</td>
                        <td>Lohko B</td>
                        <td><?php
                            require_once('db.php');

                            //11:00 MATSI JOUKKUE 1
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 4";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                        <td><?php
                            //11:00 MATSI JOUKKUE 2
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 5";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                      </tr>
                      <tr>
                        <td>11:30</td>
                        <td>Kenttä 2</td>
                        <td>Lohko B</td>
                        <td><?php
                            require_once('db.php');
                            //11:30 MATSI JOUKKUE 1
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 6";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                        <td><?php
                            //11:30 MATSI JOUKKUE 2
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 7";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                      </tr>
                      <tr>
                        <td>12:00</td>
                        <td>Kenttä 2</td>
                        <td>Lohko B</td>
                        <td><?php
                            require_once('db.php');

                            //12:00 MATSI JOUKKUE 1
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 4";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                        <td><?php
                            //12:00 MATSI JOUKKUE 2
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 6";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                      </tr>
                      <tr>
                        <td>12:30</td>
                        <td>Kenttä 2</td>
                        <td>Lohko B</td>
                        <td><?php
                            //12:30 MATSI JOUKKUE 1
                            require_once('db.php');
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 5";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                        <td><?php
                            //12:30 MATSI JOUKKUE 2
                            $sql = "SELECT joukkueNimi FROM sarja_f8 LIMIT 1 OFFSET 7";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                echo $row["joukkueNimi"];}
                            } /*
                            else {
                              echo "0 results";
                            } */
                            ?></td>
                      </tr>
                    </table>
              </div>

          <!-- JOUKKUETAULUKKO -->
          <div class="row">
                <div class="col-lg-12">
                  <h3>Joukkuetaulukko</h3>
                      <table id="play">
                        <tr>
                          <th>Joukkue</th>
                          <th>Yhteyshenkilön nimi</th>
                          <th>Yhteyshenkilön s-posti</th>
                          <th>Yhteyshenkilön puhelin</th>
                        </tr>

                        <?php
                          require_once('db.php');

                          // JOUKKUE
                          $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f8 LIMIT 4 OFFSET 0";
                          $result = $conn->query($sql);
                          if ($result->num_rows >0) {
                            echo '<tr><th colspan="4" style="text-align:center;">Lohko A</th><tr>';
                            while($row = $result->fetch_assoc()) {
                              echo "<tr>
                                  <td>" . $row["joukkueNimi"]. "</td>
                                  <td>" . $row["yhtNimi"]. "</td>
                                  <td>" . $row["yhtEmail"]. "</td>
                                  <td>" . $row["yhtPhone"]. "</td>
                                  </tr>";
                            }
                            echo "";
                          }
                          /*
                          else {
                            echo "0 results";
                          } */
                          ?>
                      </table>

                      <?php
                        $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f8 LIMIT 4 OFFSET 4";
                        $result = $conn->query($sql);
                        if ($result->num_rows >0) {
                          echo '<table id="play">';
                          echo '<tr><th>Joukkue</th><th>Yhteyshenkilön nimi</th><th>Yhteyshenkilön s-posti</th><th>Yhteyshenkilön puhelin</th></tr>';
                          echo '<tr><th colspan="4" style="text-align:center;">Lohko B</th><tr>';
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
                        /*
                        else {
                          echo "0 results";
                        } */
                      ?>

                    </div>
                </div>


          <!-- SARJA F9 -->
          <div class=row>
            <div class="col-lg-12">
              <h1> SARJA F9</h1>
            </div>

          <!-- LISÄÄ JOUKKUE -->
          <div class="col-lg-5">
                <h3>Lisää joukkue</h3>
                  <form name="sub" onsubmit="return validateForm()" action="addItem9.php" method="POST">
                      <input type="text" name="joukkueNimi" placeholder="Joukkueen nimi"/>
                      <input type="text" name="yhtNimi" placeholder="Yhteyshenkilön nimi"/>
                      <input type="text" name="yhtEmail" placeholder="Yhteyshenkilön sähköposti"/>
                      <input type="text" name="yhtPhone" placeholder="Yhteyshenkilön puhelinnumero"/>
                      <br>
                      <input type="submit" value="Lisää"/>
                    </form>
          </div>

          <!-- TURNAUSTAULUKKO -->
          <div class="col-lg-7">
            <h2>Turnaustaulukko</h2>
              <table>
                <tr>
                  <th>Aika</th>
                  <th>Kenttä</th>
                  <th>Lohko</th>
                  <th>Joukkue 1</th>
                  <th>Joukkue 2</th>
                </tr>
                <tr>
                  <td>9:00</td>
                  <td>Kenttä 2</td>
                  <td>Lohko A</td>
                  <td><?php
                                  require_once('db.php');

                                  //9:00 MATSI JOUKKUE 1
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 0";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                  <td><?php
                                  //9:00 MATSI JOUKKUE 2
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 1";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                </tr>
                <tr>
                  <td>9:30</td>
                  <td>Kenttä 2</td>
                  <td>Lohko A</td>
                  <td><?php
                        require_once('db.php');

                        //9:30 MATSI JOUKKUE 1
                        $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 2";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            echo $row["joukkueNimi"];}
                          } /*
                        else {
                        echo "0 results";
                      } */
                      ?></td>
                  <td><?php

                                  //9:30 MATSI JOUKKUE 2
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 3";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                            </tr>
                  <tr>
                    <td>10:00</td>
                    <td>Kenttä 2</td>
                    <td>Lohko A</td>
                    <td><?php
                                  require_once('db.php');

                                  //10:00 MATSI JOUKKUE 1
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 0";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                    <td><?php
                                  //10:00 MATSI JOUKKUE 2
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 2";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                            </tr>
                            <tr>
                              <td>10:30</td>
                              <td>Kenttä 2</td>
                              <td>Lohko A</td>
                              <td><?php
                                  require_once('db.php');

                                  //10:30 MATSI JOUKKUE 1
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 1";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                              <td><?php
                                  //10:30 MATSI JOUKKUE 1
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 3";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                            </tr>
                            <tr>
                              <td>11:00</td>
                              <td>Kenttä 2</td>
                              <td>Lohko B</td>
                              <td><?php
                                  require_once('db.php');

                                  //11:00 MATSI JOUKKUE 1
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 4";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                              <td><?php
                                  //11:00 MATSI JOUKKUE 2
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 5";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                            </tr>
                            <tr>
                              <td>11:30</td>
                              <td>Kenttä 2</td>
                              <td>Lohko B</td>
                              <td><?php
                                  require_once('db.php');
                                  //11:30 MATSI JOUKKUE 1
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 6";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                              <td><?php
                                  //11:30 MATSI JOUKKUE 2
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 7";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                            </tr>
                            <tr>
                              <td>12:00</td>
                              <td>Kenttä 2</td>
                              <td>Lohko B</td>
                              <td><?php
                                  require_once('db.php');

                                  //12:00 MATSI JOUKKUE 1
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 4";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                              <td><?php
                                  //12:00 MATSI JOUKKUE 2
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 6";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                            </tr>
                            <tr>
                              <td>12:30</td>
                              <td>Kenttä 2</td>
                              <td>Lohko B</td>
                              <td><?php
                                  //12:30 MATSI JOUKKUE 1
                                  require_once('db.php');
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 5";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                              <td><?php
                                  //12:30 MATSI JOUKKUE 2
                                  $sql = "SELECT joukkueNimi FROM sarja_f9 LIMIT 1 OFFSET 7";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo $row["joukkueNimi"];}
                                  } /*
                                  else {
                                    echo "0 results";
                                  } */
                                  ?></td>
                            </tr>
              </table>
          </div>

          <!-- JOUKKUETAULUKKO -->
          <div class="row">
            <div class="col-lg-12">
              <h3>Joukkuetaulukko</h3>
                <table id="play">
                  <tr>
                    <th>Joukkue</th>
                    <th>Yhteyshenkilön nimi</th>
                    <th>Yhteyshenkilön s-posti</th>
                    <th>Yhteyshenkilön puhelin</th>
                  </tr>
                  <?php
                    require_once('db.php');

                    // JOUKKUE
                    $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f9 LIMIT 4 OFFSET 0";
                    $result = $conn->query($sql);
                    if ($result->num_rows >0) {
                      echo '<tr><th colspan="4" style="text-align:center;">Lohko A</th><tr>';
                      while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["joukkueNimi"]. "</td>
                                <td>" . $row["yhtNimi"]. "</td>
                                <td>" . $row["yhtEmail"]. "</td>
                                <td>" . $row["yhtPhone"]. "</td>
                              </tr>";
                      }
                      echo "";
                  }
                                /*
                                else {
                                  echo "0 results";
                                } */
                                ?>
                </table>
                <?php
                  $sql = "SELECT joukkueNimi, yhtNimi, yhtEmail, yhtPhone FROM sarja_f9 LIMIT 4 OFFSET 4";
                  $result = $conn->query($sql);
                  if ($result->num_rows >0) {
                    echo '<table id="play">';
                        echo '<tr><th>Joukkue</th><th>Yhteyshenkilön nimi</th><th>Yhteyshenkilön s-posti</th><th>Yhteyshenkilön puhelin</th></tr>';
                                echo '<tr><th colspan="4" style="text-align:center;">Lohko B</th><tr>';
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
                              /*
                              else {
                                echo "0 results";
                              } */
                 ?>
            </div>
          </div>




            <div class="col-lg-6">
              <h1> SARJA E10</h1>
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
