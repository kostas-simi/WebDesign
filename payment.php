<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Stephen King - Αγορά Βιβλίου</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: #2c95c7;">
  <table class="nav_bar">
  <tr>
    <td><a href="awards.html">Βραβεία και Κριτικές</a></td>
    <td><a href="index.html">Αρχική</a></td>
    <td><a href="cinema.html">Κινηματογράφος</a></td>
  </tr>
  <tr><td><a href="message.html" >Αποστολή Μηνύματος</a></td>
      <td style="border: 0px;"></td>
    <td><a href="payment.html">Αγορά Βιβλίου</td>
  </tr>
</table>
<br><br><br>
  <h2 style="color: #d8e257;"><em><u>Αγορά Βιβλίων</u></em></h2>
  <p><b>Στοιχεία Παραγγελίας</b></p>
<form method="post">
    <table class="order_table">
    <tr><td><label for="date">Ημερομηνία :</label></td>
    <td><input type="text" id="date" ></td></tr>
    <tr><td><label for="mail">E-Mail: </label></td>
      <td><input type="text" id="mail" name="mail" placeholder="your@email.com"></td></tr>
  <tr><td><label for="product">Αριθμός Τίτλων<sup>*</sup> :</label></td>
    <td><select id="product" name="product" required onchange="change();">
          <option value="Ο Τελευταίος Πιστολέρο">Ο Τελευταίος Πιστολέρο</option>
          <option value="Το Κάλεσμα Των Τριών">Το Κάλεσμα Των Τριών</option>
          <option value="Οι Ρημαγμένοι Τόποι">Οι Ρημαγμένοι Τόποι</option>
          <option value="Οι Λύκοι Της Κάλα">Οι Λύκοι Της Κάλα</option>
          <option value="Το Πράσινο Μίλι">Το Πράσινο Μίλι</option>
      </select></td></tr>
    <tr><td><label for="quantity">Αριθμός Αντιτύπων Τίτλων<sup>*</sup>:</label></td>
      <td><input type="number"  value="0" min="0" id="quantity" name="quantity" onchange="change();"></td></tr>
    </table>
    <fieldset style="border: 2px solid green;">
      <legend>Στοιχεία Κάρτας</legend>
      <table class="order_table">
      <tr><td><label for="payment_method">Επιλέξτε Τύπο Κάρτας<sup>*</sup> :</td>
        <td><div style="font-weight: normal;">
          <input type="radio" name="payment_method" value="visa">VISA
          <input type="radio" name="payment_method" value="master">MASTERCARD
          <input type="radio" name="payment_method" value="ame_ex">AMERICAN EXPRESS
        </td></tr></div>
              <tr><td><label for="cd_num">Αριθμός Κάρτας<sup>*</sup>:</label></td>
                <td><input type="text" id="cd_num" name="card"></td></tr>
                <tr><td><label for="holder_name">Όνομα Κατόχου<sup>*</sup>:</td>
                  <td><input type="text" id="holder_name" name="name" required></td></tr>
                <tr><td><label for="expiry">Ημερομηνία Λήξης<sup>*</sup>:</label></td>
                  <td><input type="month" name="date" id="expiry" required></td></tr>
                <tr><td><label for="sec_code">Κωδικός Ασφαλείας<sup>*</sup>:</label></td>
                  <td><input type="text" size="3" maxlength="4" id="sec_code" name="code" required></td></tr>

      </table>
      </fieldset>
    </table>
<input type="reset" value="Εκκαθάριση Στοιχέιων"> <input type="submit" value="Καταχώρηση Κράτησης" onclick="ClickMe();">
<input type="hidden"  name="tax" id="tax" >

</form>
<p id="sum"></p>
<p id="timi" name="timi"></p>

<form method="get">
  <input type="text" name="search-mail" placeholder="Αναζήτηση Βάση Mail">
  <input type="submit" value="Search">

</form>



<script>
  function change()
  {
    pricing(document.getElementById('product').value,document.getElementById('quantity').value);
  }

      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //o ianourios einai to 0
      var yyyy = today.getFullYear();

      if(dd<10) {
          dd = '0'+dd;
      }

      if(mm<10) {
          mm = '0'+mm;
      }

      today = mm + '/' + dd + '/' + yyyy;
      document.getElementById('date').value = today;


    function CheckRequired(prod,quant)
    {
      if (prod == ""){
        alert('Παρακαλούμε συμπληρώστε τα απαιτούμενα πεδία.');
      }
      if (quant == "0"){
        alert('Παρακαλούμε συμπληρώστε τα απαιτούμενα πεδία.');
      }
    }



    function ClickMe()
    {
      CheckRequired(document.getElementById('product').value,document.getElementById('quantity').value);
      isNumber(document.getElementById('cd_num').value,document.getElementById('sec_code').value);
      latin(document.getElementById('holder_name').value);
    }

    function isNumber(card,sec)
    {
      if (isNaN(card)){
        alert('Το πεδίο Αριθμός Κάρτας δέχεται μόνο αριθμούς!');
      }
      if (isNaN(sec)){
        alert('Το πεδίο Κωδικός Ασφαλείας δέχεται μόνο αριθμούς!');
      }
      if (sec.length > 3){
        alert('Το πεδίο Κωδικός Ασφαλείας δέχεται μέχρι 3 ψηφία!');
      }
    }
      function pricing(prod,quant)
      {
        var posot = parseInt(quant);
        var price = 0;

        if (prod == "Ο Τελευταίος Πιστολέρο"){
          price = 10;
        }
         if (prod == "Το Κάλεσμα Των Τριών"){
          price = 8;
        }
        if (prod == "Οι Ρημαγμένοι Τόποι"){
          price = 24;
        }
        if (prod == "Οι Λύκοι Της Κάλα"){
          price = 13;
        }
        if (prod == "Το Πράσινο Μίλι"){
          price = 15;
        }
        var total = price * posot;
        var taxed = total + total * 11/100;
        result = ("<h3>Σύνολο: </h3>"+price+"*"+posot+"="+total+"euros + Φ.Π.Α.(11%)=")
        document.getElementById('sum').innerHTML = result;
        document.getElementById('timi').innerHTML = taxed;
        document.getElementById('tax').value = taxed;
      }


      function latin(name){
        if (!(/^[a-zA-Z\s]*$/.test(name))){
        alert('Παρακαλώ εισάγετε το όνομα σας με λατινικούς χαρακτήρες.');
      }
      }
</script>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "payment_data";
  if (isset($_POST["mail"])){
  //   Δημιουργία  σύνδεσης
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }

  mysqli_set_charset($conn, "utf8");

  $sql = "INSERT INTO data (MAIL,PRODUCT,QUANTITY,TYPE,CARD,NAME,EXPI,CODE,PRICE)
          VALUES ('".$_POST["mail"]."','".$_POST["product"]."','".$_POST["quantity"]."','".$_POST["payment_method"]."','".$_POST["card"]."','".$_POST["name"]."','".$_POST["date"]."','".$_POST["code"]."','".$_POST["tax"]."')";

  $result = mysqli_query($conn,$sql);



  mysqli_close($conn);
}

  if (isset($_GET["search-mail"])){
  $conn2 = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn2){
    die("Connection failed: " . mysqli_connect_error());
  }

  mysqli_set_charset($conn2, "utf8");

  $sql2 = "SELECT PRODUCT,QUANTITY,PRICE FROM data WHERE MAIL='".$_GET['search-mail']."'";

  $result2 = mysqli_query($conn2,$sql2);

  if(mysqli_num_rows($result2) > 0) {
    echo "<table style='border:1px solid black'>";
    echo"<tr><th>PRODUCT</th><th>QUANTITY</th><th>PRICE</th></tr>";
// εκτύπωση αποτελεσμάτων
while($row = mysqli_fetch_assoc($result2)) {
  echo "<tr><td>".$row['PRODUCT']."</td>".
  "<td>".$row['QUANTITY']."</td>".
  "<td>".$row['PRICE']."</td></tr>";
  }
    echo "</table>" ;
  } else {
    echo "0 εγγραφές βρέθηκαν ";
  }
  mysqli_close($conn2);
}
?>

</body>
</html>
