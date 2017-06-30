    $(document).ready(function () {
        $("img.imgFade").mouseover(function () {
            $(this).fadeTo(300, 1);
        });
        $("img.imgFade").mouseout(function () {
            $(this).fadeTo(300, 0.5);
        });

//      Flickr images opacity
        $(".flickrImg").mouseover(function () {
            $(this).fadeTo(300, 1);
        });
        $(".flickrImg").mouseout(function () {
            $(this).fadeTo(300, 0.7);
        });

    });
    // navigation bar
    $(document).ready(function () {
        setBindings();
    });
function setBindings() {
    $('nav a').click(function (e) {
//            prevents the default animation
        e.preventDefault();
        var contentId = "index_" + e.currentTarget.id;
//            alert(contentId);
        $('html,body').animate({
            scrollTop: $("#" + contentId).offset().top
        }, 1200);

    })
}
    //jQuery images
    $(document).ready(function () {
        // slide effect
        var n = 1;
        $('#slide1').appear();
        $('#slide1').on('appear', function () {
            function removeClass() {
                if ($('#slide' + n).hasClass('transparent')) {
                    $("#slide" + n).fadeTo("slow", 1, function(){
                        n = n + 1;
                        removeClass();
                    });
                }
            }
            removeClass();
        });
        function resize(id) {
            var factor = 2;
            $(id).animate({
                top: '-=' + $(id).height() / factor,
                left: '-=' + $(id).width() / factor,
                width: $(id).width() * factor
            });
        }

        $("#content_web img").mouseover(function () {
            resize($(this).attr("id"));
        });

        //set image opacity on mouse over
        $(".websiteImage").mouseover(function(){$(this).animate({
            opacity:0.5,
        }, 300);
        });
        $(".websiteImage").mouseout(function(){$(this).animate({
            opacity:1,
        }, 300);
        });

        // change color icons
        $(function(){
            $('#imgInsta').hover(
                function(){ $('#imgInsta').attr('src','img/cont_instagramR.png'); },
                function(){ $('#imgInsta').attr('src','img/cont_instagram.png'); }
            );
        });
        $(function(){
            $('#imgFace').hover(
                function(){ $('#imgFace').attr('src','img/cont_facebookR.png'); },
                function(){ $('#imgFace').attr('src','img/cont_facebook.png'); }
            );
        });
        $(function(){
            $('#imgGit').hover(
                function(){ $('#imgGit').attr('src','img/githubR.png'); },
                function(){ $('#imgGit').attr('src','img/github.png'); }
            );
        });
        $(function(){
            $('#imgLink').hover(
                function(){ $('#imgLink').attr('src','img/cont_linkedinR.png'); },
                function(){ $('#imgLink').attr('src','img/cont_linkedin.png'); }
            );
        });

    });
