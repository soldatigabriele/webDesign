<!--<script src="../../include/lightbox-master/lightbox.min.js"></script>-->
<script src="../../include/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>

<script>
    $(document).delegate('*[data-toggle="lightbox"]','click', function(){

        event.preventDefault();
        $(this).ekkoLightbox();

    });
</script>
</body>

</html>

