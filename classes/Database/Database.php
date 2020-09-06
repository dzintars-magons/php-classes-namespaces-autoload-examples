<?php

namespace Database;

class Database
{

    public function connectToDatabase()
    {
        $conn = mysqli_connect('localhost', 'root', 'root', 'php_mvc_05_09_2020');
       
        if($conn->connect_error){
            die("conn error" . $conn->connect_error);
        } else {
            echo "CONNECTED SUCCESSFULLY";
        }
    }

    public function addWords()
    {
        $this->connectToDatabase();
        $conn = mysqli_connect('localhost', 'root', 'root', 'php_mvc_05_09_2020');

        // if($conn == false) {
        //     die("ERROR: COULD NOT CONNECT" . mysqli_connect_error());
        // }
        //The mysqli_real_escape_string() function escapes special characters in a string 
        //and create a legal SQL string to provide security against SQL injection
        $wordOne = mysqli_real_escape_string($conn, $_REQUEST['word-1']);
        $wordTwo = mysqli_real_escape_string($conn, $_REQUEST['word-2']);
        $wordThree = mysqli_real_escape_string($conn, $_REQUEST['word-3']);
        $errorMessage = "You forgot to enter a word!";
        //below does not work idk y
        // if(empty($_POST['word-1'] || $_POST['word-2'] || $_POST['word-3'])) {
        //     $wordOne = "";
        //     $wordTwo = "";
        //     $wordThree = "";
        //     die($errorMessage) ;
        //  }
        // Attempt insert query execution
        $sql = "INSERT INTO words (word_1, word_2, word_3) VALUES ('$wordOne', '$wordTwo', '$wordThree')";
       
        if(mysqli_query($conn, $sql)){
            echo "<br>Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
    }

    public function clean()
    {
        $conn = mysqli_connect('localhost', 'root', 'root', 'php_mvc_05_09_2020');

        if($conn == false) {
            die("ERROR: COULD NOT CONNECT" . mysqli_connect_error());
        }

        $sql = "DELETE FROM words WHERE word_2='' OR word_3 =''";
       
        if(mysqli_query($conn, $sql)){
            echo "<br>CLEANED SUCCESFULLY";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        mysqli_close($conn);

    }

    public function search()
    {
        $conn = mysqli_connect('localhost', 'root', 'root', 'php_mvc_05_09_2020');
        if($conn == false) {
            die("ERROR: COULD NOT CONNECT" . mysqli_connect_error());
        }
        $wordOne = mysqli_real_escape_string($conn, $_REQUEST['word-1']);
        $wordTwo = mysqli_real_escape_string($conn, $_REQUEST['word-2']);
        $wordThree = mysqli_real_escape_string($conn, $_REQUEST['word-3']);
        $errorMessage = "<br> Does not exist in database!";
        $sql = "SELECT word_1 from words WHERE word_1 = '$wordOne'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            echo "<br>WORD " . $wordOne . " exists in database.";
         } else  {
            echo "Word " . $wordOne . " " . $errorMessage;
         }
         mysqli_close($conn);
     
    }

}