<?php

    class fileread {

        public function getdata(){

            // $fh = fopen("info.txt", "r");

            // while(!feof($fh)){
            //     $data = fgets($fh);
            //     echo $data. "<br>";
            // }

            // or

            $lines = file("info.txt");

            foreach($lines as $line){
                echo $line. "<br>";
            }

        }
    }

    $obj = new fileread();
    $obj->getdata();


?>