<?php
require_once('navigation.php');
?>
<div class="col-md-12" style="background:#438cc1;padding:20px">
    <div class="col-md-6 offset-md-3 offset-xl-3 col-xl-6"
         style="width:600px;background:white;border-radius: 25px;padding:50px 20px 50px 20px;">
        <div class="col-md-12" style="">
            <div class="col-md-12" style>
                <span style="text-align: center;"><h2>EasyRetrieve</h2></span>
                <div class="col-md-12 clearfix"><br></div>
                This Web App lets users retrieve images from Google Street View and from Instagram.
                (Instagram recently blocked his REST services, so it is no more possible to use it)
            </div>
            <div class="col-md-12 clearfix"><br></div>
            <div class="col-md-12 offset-md-1 divImage">
                <img src="inc/img/Picture2.jpg" class="image" alt="">
            </div>
            <div class="col-md-12 clearfix"><br></div>
            <div class="col-md-12">
                You can search images by tags, coordinates or by the user that uploaded it. It is possible to select
                the number of pictures to retrieve and the dimension.
            </div>
            <div class="col-md-12 clearfix"><br></div>
            <div class="col-md-12 offset-md-1 divImage">
                <img src="inc/img/Picture1.jpg" class="image" alt="">
            </div>
            <div class="col-md-12 clearfix"><br></div>
            <div class="col-md-12">
                In order to download images from Google StreetView you have to insert the coordinates of the location.
            </div>
            <div class="col-md-12 clearfix"><br></div>
            <div class="col-md-12 offset-md-1 divImage">
                <img src="inc/img/Picture3.jpg" class="image" alt="">
            </div>
            <div class="col-md-12 clearfix"><br></div>
            <div class="col-md-12">
                The images are then stored in a folder in your computer, but you can see it also directly within the
                Web App, where you can also delete it.<br>
            </div>
            <div class="col-md-12 clearfix"><br></div>
            <div class="col-md-12 offset-md-1 divImage" style="height:100px;">
                <img src="inc/img/Picture4.jpg" class="image" alt="">
            </div>
        </div>
        <div class="col-md-12 clearfix"><br><br><br></div>
        <div class="col-md-8 offset-md-2">
            <div class="col-md-12" style="border:1px solid #acacac;">
                <div class="clearfix"><br></div>
                <div class="offset-md-2">
                    <img src="../../img/ER.jpg" alt="" style="max-width:220px;">
                </div>
                <div class="clearfix"><br></div>
                <div class="col-md-12">
                    <form action="http://www.gabrielesoldati.altervista.org/gabrielesoldati/streetview/login/index.php"
                          method="POST">
                        <input type="submit"
                               class="showImage btn btn-block btn-outline-primary"
                               name="Upload" value="Go to EasyRetrieve">
                    </form>
                    <div class="clearfix"><br></div>
                </div>
            </div>
            <div class="col-md-12 clearfix"><br></div>
            <form action="../../index.php" method="POST"><input type="submit"
                                                                class="showImage btn btn-block btn-outline-gray"
                                                                name="" value="Back to the Portfolio"></form>
        </div>
    </div>

</div>

</body>
</html>
