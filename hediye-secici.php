<?php
$hediyeler = array("Oyuncak", "Kitap", "Müzik CD", "Çikolata", "Kalem");

if(isset($_POST['submit'])) {
  $rastgeleIndeks = array_rand($hediyeler);
  $seçilenHediye = $hediyeler[$rastgeleIndeks];
  echo "Tebrikler! Aldığınız hediyeniz: " . $seçilenHediye;
} else {
  echo '<form action="" method="post">
    <input type="submit" name="submit" value="Kutuyu Aç">
  </form>';
}
?>
