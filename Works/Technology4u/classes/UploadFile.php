<?php

//questa classe permette di eseguire l'upoload di un file online dopo averla validata

class UploadFile
{
    private $_directory = "uploads/",
            $_file,
            $_image,
            $_estensione,
            $_check,
            $_nomeFile,
            $_uploadOk = 1;

/// setto le variabili file e estensione partendo dall'immagine caricata dall'utente
    public function __construct($image = null,$name){
        $this->_image = $image;
        $this->_file = $this->_directory.$name;
        $this->_estensione = pathinfo($this->_directory.basename($image["name"]), PATHINFO_EXTENSION);
    }

    public function validate(){
        // controllo se è un'immagine
        $this->_check = getimagesize($this->_image["tmp_name"]);
        if ($this->_check !== false) {
            $this->_uploadOk = 1;
        } else {
            echo "Il file non è un immagine: ";
            $this->_uploadOk = 0;
        }
        // Controllo se il file esiste già
        if (file_exists($this->_file)) {
            echo "File già presente nel server: ";
            $this->_uploadOk = 0;
        }
        //controllo la dimensione del file (max 5MB)
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "Il file è troppo grande";
            $this->_uploadOk = 0;
        }
        // permette solo jpg
        if ($this->_estensione != "jpg") {
            echo "Sono permessi solo jpg.<br>";
            $this->_uploadOk = 0;
        }
    }

//    eseguo l'upload
    public function upload()
    {
        //se ci sono errori
        if ($this->_uploadOk == 0) {
            echo " error<br>";
            //altrimenti
        } else {
            $this->_nomeFile = $this->_file.'.'.$this->_estensione;
            if (move_uploaded_file($this->_image["tmp_name"], ($this->_nomeFile))) {
                echo basename($this->_image["name"]) . " uplodade<br>";
            } else {
                echo "An error occurred, please try again.<br>";
            }
        }
    }

    public function nomeFile(){
        return $this->_nomeFile;
    }

    public static function eliminaImmagine($file){
        unlink($file);
    }

}



