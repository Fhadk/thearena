<?php
echo "here";
try{
		return new PDO("mysql:host=72.167.233.15; dbname=theoperacinesta", "theoperacinesta", "the0pera!");
		}
			catch (PDOException $err) {  
			echo "error";
            $err->getMessage() . "<br/>";
            file_put_contents('PDOErrors.txt',$err, FILE_APPEND);  // write some details to an error-log outside public_html  
            die();  //  terminate connection
        }
?>