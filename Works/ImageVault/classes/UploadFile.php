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
        $_error = array();

/// setto le variabili file e estensione partendo dall'immagine caricata dall'utente
    public function __construct($image = null, $nome)
    {
        $this->_image = $image;
        $this->_file = $this->_directory . $nome;
        $this->_estensione = pathinfo($this->_directory . basename($image["name"]), PATHINFO_EXTENSION);
    }

    public function validate()
    {
        // controllo se è un'immagine
        $this->_check = getimagesize($this->_image["tmp_name"]);
        if ($this->_check == false) {
            $this->_error[] = "The file is not valid! ";
        }
        // Controllo se il file esiste già
        if (file_exists($this->_file)) {
            $this->_error[] = "File already exists";
        }
        //controllo la dimensione del file (max 5MB)
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            $this->_error[] = "File is too big (max 5MB)";
        }
        // permette solo jpg
        if ($this->_estensione == "JPG" || $this->_estensione == "jpg") {
            $this->_estensione = 'jpg';
        } elseif ($this->_estensione == "PNG" || $this->_estensione == "png") {
            $this->_estensione = 'png';
        } else {
            $this->_error[] = "You can upload only PNG or JPG.<br>";
        }
    }

//    eseguo l'upload
    public
    function upload()
    {
        //se ci sono errori
        $errors = $this->hasErrors();
        if ($errors != 1) {
            foreach($errors as $error){echo $error.'<br>';};
        } else {
            $this->_nomeFile = $this->_file . '.' . $this->_estensione;
            if (move_uploaded_file($this->_image["tmp_name"], ($this->_nomeFile))) {
                echo basename($this->_image["name"]) . " has been uploaded and encrypted!<br>";
            }
        }
    }

    public
    function nomeFile()
    {
        return $this->_nomeFile;
    }

    public function fileExtension()
    {
        return $this->_estensione;
    }

    public
    static function eliminaImmagine($file)
    {
        unlink($file);
    }

    public
    function hasErrors()
    {
        if(!empty($this->_error)){
            return $this->_error;
        }else{
            return true;
        }
    }
}



