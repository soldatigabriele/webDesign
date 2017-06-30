<?php
require_once('inc/init.php');

if (!$user->isLoggedIn()) {
    $user = new User('Gabriele');
    $user->login();
    Redirect::to('index.php');
}
require_once('navigation.php');
if ($user->isLoggedIn()) {
    ?>

    <div class="col-md-12" style="background:#1b6d85;padding:10px">
        <div class="col-md-6 offset-md-3" style="background:white;border-radius: 25px">
            <div class="col-md-12" style="padding: 20px; ">
                <h2>ImageVault</h2>
                Store your images in a highly secure way. When you upload your images both the name and the content are
                encrypted.
                Even the owner of the website cannot access your data without knowing your password.
                <ul style="">
                    <li>Jpg and png types supported</li>
                    <li>Unlimited images upload</li>
                    <li>Up to 5MB per file</li>
                    <li>Secure data storage with name and content encryption</li>
                </ul>
                <img src="inc/img/1.jpg" alt="">
                <div class="clearfix"></div> <br>
                Unencrypted files are automatically removed after you leave the website!
                <div class="clearfix"></div> <br>
                <div style="width:450px;margin:auto;">
                    <div class="col-md-12 offset-md-2">
                        <h3>Try it!</h3>
                    </div>
                    <div class="col-md-12" style="border:1px solid #acacac;">
                        <div class="clearfix"><br></div>
                        <div class="offset-md-3">
                            <img src="img/images.png" alt="" style="max-width:220px;">
                        </div>
                        <div class="clearfix"><br></div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <form action="upload.php" method="POST">
                                    <input type="submit"
                                           class="showImage btn btn-block btn-outline-primary"
                                           name="Upload" value="Go to ImageVault">
                                </form>
                                <div class="clearfix"><br></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 clearfix"><br></div>
                    <div class="col-md-8 offset-md-2">
                        <form action="../../index.php" method="POST"><input type="submit"
                                                                            class="showImage btn btn-block btn-outline-gray"
                                                                            name="" value="Back to the Portfolio">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php } ?>

</body>
</html>
