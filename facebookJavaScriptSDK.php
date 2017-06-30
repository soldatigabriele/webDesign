<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
// The response object is returned with a status field that lets the
// app know the current login status of the person.
// Full docs on the response object can be found in the documentation
// for FB.getLoginStatus().
        if (response.status === 'connected') {
// Logged into your app and Facebook.
            testAPI();
        } else if (response.status === 'not_authorized') {
// The person is logged into Facebook, but not your app.
            document.getElementById('status').innerHTML = 'Please log ' +
                'into this app.';
        } else {
// The person is not logged into Facebook, so we're not sure if
// they are logged into this app or not.
            document.getElementById('status').innerHTML = 'Please log ' +
                'into Facebook.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function () {
        FB.init({
            appId: '419295464861058',
            cookie: true,  // enable cookies to allow the server to access
// the session
            xfbml: true,  // parse social plugins on this page
            version: 'v2.7' // use graph api version 2.5
        });

        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
            document.getElementById('res').innerHTML = response.status;
        });

    };

    // Load the SDK asynchronously
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
//        FB.api('/me', function (response) {
//            console.log("me");
//            console.log(response);
//            document.getElementById('status').innerHTML =
//                'Name: ' + response.name + ' Username:' + response.email + ' gender: ' + response.gender;
//        });
        FB.api(
            '/me',
            {"fields": "id,name,email,gender,cover"},
            function (response) {
                console.log(response);
                document.getElementById('status').innerHTML =
                    'Name: ' + response.name + ' Username:' + response.email + ' gender: ' + response.gender+ '<img src="'+response.cover.source+'">';

            }
        );
    }
</script>

<?php
//$secret = '7be764f61fa230133909405b1232a479';
?>
RES:
<div id="res">NON CONNESSO</div>
<p> Name: </p>
<div id="name"></div>
<p> Surname: </p>
<div id="surname"></div>
<div id="status">LOGGING IN</div>
<!--<div class="fb-like" data-share="true" data-width="450" data-show-faces="true"> </div>-->
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<script>
    document.getElementById("name").innerHTML = name;
</script>
</body>
</html>
