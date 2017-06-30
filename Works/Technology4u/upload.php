<?php

require_once 'navigation.php';

$user = new User();
if ($user->isLoggedIn()) {

    if (isset($_POST['submit'])) {
        $upload = new UploadFile($_FILES["fileToUpload"], $user->data()->username . '_' . $_POST[titolo]);
        $upload->validate();
        $upload->upload();

        // genero una chiave per criptare e decriptare le immagini partendo dalla password dell'utente
        $key = hash('md5', $user->data()->password);
        $crypt = new Encryption($key);

// nome del file da criptare
        $filename = $upload->nomeFile();
//nome del file criptato
//        $fileCriptato = UPLOADDIR.'fileCriptato';
        if ($_POST["titolo"] == 'CIf') {
            $fileCriptato = UPLOADDIR . hash('md5', 'CIf' . $user->data()->idUtente);
        } elseif ($_POST["titolo"] == 'CIr') {
            $fileCriptato = UPLOADDIR . hash('md5', 'CIr' . $user->data()->idUtente);
        } elseif ($_POST["titolo"] == 'CF') {
            $fileCriptato = UPLOADDIR . hash('md5', 'CF' . $user->data()->idUtente);
        }

        $encrypted_string = $crypt->encrypt(base64_encode(file_get_contents($filename)));
//salva il file codificato
        file_put_contents($fileCriptato, $encrypted_string);
// elimino le immagini originali
        UploadFile::eliminaImmagine($filename);

    }

// verifico che se esistono delle immagini già caricate dall'utente
    $CIf = file_exists(UPLOADDIR . hash('md5', 'CIf' . $user->data()->idUtente));
    $CIr = file_exists(UPLOADDIR . hash('md5', 'CIr' . $user->data()->idUtente));
    $CF = file_exists(UPLOADDIR . hash('md5', 'CF' . $user->data()->idUtente));

    if(isset($_POST['mostra'])) {
        
        echo '<div class="homeContainer" style="background: ">
                <div class="col-md-8">
                    <form action="upload.php" method="POST">                
                        <input type="submit" class="btn btn-primary" name="indietro" value="Back">
                    </form>
                     <div class="clearfix"></div><br>
               ';

                // genero una chiave per criptare e decriptare le immagini partendo dalla password dell'utente
                $key = hash('md5', $user->data()->password);
                $crypt = new Encryption($key);

                // per ogni file verifico se esiste e in tal caso lo decodifico. una volta mostrata l'immagine la elimino
                if ($CIf) {
                    $fileCriptato = UPLOADDIR . hash('md5', 'CIf' . $user->data()->idUtente);
                    $fileDecriptato = UPLOADDIR . $user->data()->idUtente . 'CIf.jpg';
                    //decodifica del file
                    $decrypted_string = base64_decode($crypt->decrypt(file_get_contents($fileCriptato)));
                    //salvataggio del file decodificato
                    file_put_contents($fileDecriptato, $decrypted_string);
                    echo '<div class="col-md-8">ID 1:<br> <img src="' . $fileDecriptato . '" height="300px"></div>';
                }
                if ($CIr) {
                    $fileCriptato = UPLOADDIR . hash('md5', 'CIr' . $user->data()->idUtente);
                    $fileDecriptato = UPLOADDIR . $user->data()->idUtente . 'CIr.jpg';
                    $decrypted_string = base64_decode($crypt->decrypt(file_get_contents($fileCriptato)));
                    file_put_contents($fileDecriptato, $decrypted_string);
                    echo '<div class="col-md-8">ID 2:<br> <img src="' . $fileDecriptato . '" height="300px"></div>';
                }
                if ($CF) {
                    $fileCriptato = UPLOADDIR . hash('md5', 'CF' . $user->data()->idUtente);
                    $fileDecriptato = UPLOADDIR . $user->data()->idUtente . 'CF.jpg';
                    $decrypted_string = base64_decode($crypt->decrypt(file_get_contents($fileCriptato)));
                    file_put_contents($fileDecriptato, $decrypted_string);
                    echo '<div class="col-md-8">Passport: <br><img src="' . $fileDecriptato . '" height="300px"></div>';
                }

                echo '
                    <div class="clearfix"></div><br>
                        <div class="col-md-12">
                                Go <a href="upload.php">back</a> 
                        </div>
                    </div>
                    <div class="clearfix"></div><br>
                </div> <!-- chiusura homeContainer-->
            ';



    }else {

        ?>

        <div class="homeContainer" >
            <div class="group col-md-7">
                <div class="clearfix"></div><br>
                <div class="col-md-12" style="padding: 20px 0px 20px 0px;">
                    <div class="col-md-12" style="padding-top:10px;">
                        <p>You can upload only Jpegs smaller than 5MB</p><br>
                        <form action="upload.php" class="form-group" method="post" enctype="multipart/form-data">
                            <div class="col-md-4">
                                <input type="hidden" name="titolo" value="CIf"><?php if ($CIf) {echo 'Scan already exists<br>';}else{echo 'ID 1:';} ?>
                            </div>
                            <div class="col-md-4">
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" class="form-control btn btn-success" value="<?php if ($CIf) {echo 'Update';}else{echo 'Upload';} ?>" name="submit">
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div><br>
                    <div class="col-md-12">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="col-md-4">
                                <input type="hidden" name="titolo" value="CIr"><?php if ($CIr) {echo 'Scan already exists<br>';}else{echo 'ID 2:';} ?>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" class="form-control btn btn-success" value="<?php if ($CIr) {echo 'Update';}else{echo 'Upload';} ?>" name="submit">
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div><br>
                    <div class="col-md-12">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="col-md-4">
                                <input type="hidden" name="titolo" value="CF"><?php if ($CF) {echo 'Scan already exists<br>';}else{echo 'Passport:';} ?>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" class="form-control btn btn-success" value="<?php if ($CF) {echo 'Update';}else{echo 'Upload';} ?>" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12"><br></div>
                <?php
                if($CF||$CIf||$CIr){
                    ?>
                    <div class="col-md-4"
                         style="padding: 20px 0px 20px 0px;">
                        <div class="col-md-12">
                            <form action="" method="POST">
                                <input type="submit" class="btn btn-primary" name="mostra" value="Show Documents">
                            </form>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
            <div class="clearfix"></div><br>
        </div>

        <?php
    }

    include 'footer.php';


// se l'utente non è loggato lo reindirizzo
} else {
    Redirect::to('home.php');
}
