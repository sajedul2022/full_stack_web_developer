<!DOCTYPE html>
<html>
<body>

<?php
class differentClass{}
class parentClass {}
class childClass extends parentClass{}
$obj = new childClass();

if($obj instanceof childClass) {
  echo "The object is childClass<br>";
}

// The object is also an instance of the class it is derived from
if($obj instanceof parentClass) {
  echo "The object is parentClass<br>";
}

if($obj instanceof differentClass) {
    echo "The object is differentClass<br>";
  } else {
    echo "Sorry";
  }
?>

</body>
</html>
