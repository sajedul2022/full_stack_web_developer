<?php

// ini_set("display_errors", 1);

// try{
//     $fh = fopen("file.txt", "r");

//     if(!$fh){
//         throw new Exception("Could not open the file");
//     }
// }catch (Exception $e){
//     echo $e->getMessage();
// } finally {
//      fclose($fh);
// }

?>

<?php

ini_set("display_errors", 1);

try{
    $fh = require("contacts.php");

    if(!$fh){
        throw new Exception("Could not open the file");
    }
}catch (Exception $e){
    echo $e->getMessage();
}
?>