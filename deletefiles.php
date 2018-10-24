<?php
//echo delete("text_files.txt");exit;
?>

<?php
$file = "home.php";
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }
?>