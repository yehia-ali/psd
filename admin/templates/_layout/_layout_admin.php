<?php
function _header_admin($pagetitle){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>AlphaWare</title>
        <link rel = "stylesheet" type = "text/css" href="templates/css/style.css" media="all">
        <link rel="stylesheet" type="text/css" href="templates/css/bootstrap.css">
        <script src="templates/js/bootstrap.js"></script>
        <script src="templates/js/jquery-1.7.2.min.js"></script>
        <script src="templates/js/carousel.js"></script>
        <script src="templates/js/button.js"></script>
        <script src="templates/js/dropdown.js"></script>
        <script src="templates/js/tab.js"></script>
        <script src="templates/js/tooltip.js"></script>
        <script src="templates/js/popover.js"></script>
        <script src="templates/js/collapse.js"></script>
        <script src="templates/js/modal.js"></script>
        <script src="templates/js/scrollspy.js"></script>
        <script src="templates/js/alert.js"></script>
        <script src="templates/js/transition.js"></script>
        <script src="templates/js/bootstrap.min.js"></script>
        <script src="templates/javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
        <script src="templates/jscript/jquery-1.9.1.js" type="text/javascript"></script>

        <!--Le Facebox-->
        <link href="templates/facefiles/facebox.css" media="screen" rel="stylesheet" type="text/css" />
        <script src="templates/facefiles/jquery-1.9.js" type="text/javascript"></script>
        <script src="templates/facefiles/jquery-1.2.2.pack.js" type="text/javascript"></script>
        <script src="templates/facefiles/facebox.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('a[rel*=facebox]').facebox()
            })
        </script>
    </head>
    <?php
}
function _footer_admin(){
    ?>
    </body>
</html>
    <script type="text/javascript">
        $(document).ready( function() {

            $('.remove').click( function() {

                var id = $(this).attr("id");


                if(confirm("Are you sure you want to delete this product?")){


                    $.ajax({
                        type: "POST",
                        url: "../function/remove.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                            $(".del"+id).fadeOut(2000, function(){ $(this).remove();});
                        }
                    });
                }else{
                    return false;}
            });
        });

    </script>

<?php
}
?>