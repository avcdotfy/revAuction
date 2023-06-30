    <!-- ./wrapper -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="{{ asset('dist/js/jquery.dataTables.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/sidebar.js') }}"></script>
    <script>
        jQuery.fn.liScroll = function(settings) {
            settings = jQuery.extend({
                travelocity: 0.03
            }, settings);
            return this.each(function() {
                var $strip = jQuery(this);
                $strip.addClass("newsticker")
                var stripHeight = 1;
                $strip.find("li").each(function(i) {
                    stripHeight += jQuery(this, i).outerHeight(
                        true); // thanks to Michael Haszprunar and Fabien Volpi
                });
                var $mask = $strip.wrap("<div class='mask'></div>");
                var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");
                var containerHeight = $strip.parent().parent().height(); //a.k.a. 'mask' width   
                $strip.height(stripHeight);
                var totalTravel = stripHeight;
                var defTiming = totalTravel / settings.travelocity; // thanks to Scott Waye     
                function scrollnews(spazio, tempo) {
                    $strip.animate({
                        top: '-=' + spazio
                    }, tempo, "linear", function() {
                        $strip.css("top", containerHeight);
                        scrollnews(totalTravel, defTiming);
                    });
                }
                scrollnews(totalTravel, defTiming);
                $strip.hover(function() {
                        jQuery(this).stop();
                    },
                    function() {
                        var offset = jQuery(this).offset();
                        var residualSpace = offset.top + stripHeight;
                        var residualTime = residualSpace / settings.travelocity;
                        scrollnews(residualSpace, residualTime);
                    });
            });
        };

        $(function() {
            $("ul#ticker01").liScroll();
        });
    </script>
