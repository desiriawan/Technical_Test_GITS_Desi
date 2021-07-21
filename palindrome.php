<!DOCTYPE html>
<html>
<head>
     <title>palindrom</title>
</head>
<body>

 <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
  <h1>Cek kalimat palindrom</h1>
  <input type="text" name="palindrome" placeholder="Masukan Kata-kata">
  <input type="submit" name="submit" value="Check">
 </form>

 <div class="result">
  <?php 
   if (isset($_POST['submit'])) {
    $palindrome = $_POST['palindrome'];
    $split = str_split($palindrome);
    $jml   = strlen($palindrome);
    $nama2 = "";
    for ($i=($jml-1); $i >= 0; $i--) { 
     $nama2 .= $split[$i];
    }

    if (strtolower($palindrome)==strtolower($nama2)) {
     echo "Kata <strong>$palindrome</strong> adalah Palindrom";
    }else{
     echo "Kata <strong>$palindrome</strong> bukan palindrom";
    }
   }
   ?> 
  </div>
</body>
</html>