<?php echo js('assets/js/jquery.js') ?>



<?php echo js('assets/js/jquery-1.12.0.min.js') ?>
<?php echo js('https://npmcdn.com/flickity@1.1.2/dist/flickity.pkgd.js') ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php echo js('assets/js/scroll.js') ?>
<!-- ScriptSmooth Scroll -->
<script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
<!-- End Script Smooth Scroll -->

</body>

</html>
