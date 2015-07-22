    </div>

    <br /><br />
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="plugins/magnific-popup/magnific-popup.min.js"></script>

<script>
function findBootstrapEnvironment() {
    var envs = ['xs', 'sm', 'md', 'lg'];

    $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envs.length - 1; i >= 0; i--) {
        var env = envs[i];

        $el.addClass('hidden-'+env);
        if ($el.is(':hidden')) {
            $el.remove();
            return env
        }
    };
}

$(document).ready(function(){
    if(findBootstrapEnvironment() == "xs") {
        $(".details").each(function(e){
            $(this).css({top: $(".project").height()-$(this).outerHeight()});
        });
        $("#about").css({
            height: "80%"
        });
        $(".img-gray").css({
            "-webkit-filter": "none",
            filter: "none"
        });
    }
    else {
        $(".hopwork_widget").attr("data-width", $("#contact_infos").width()*0.90 );
        (function(d,id) {
        if (d.getElementById(id)) return;
        var s = d.createElement('script');
        var c = d.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'https://widgets.hopwork.com/1.0.0/js/sdk.wgt.min.js';
        c.parentNode.insertBefore(s, c);
        })(document,'hopwork-sdkjs-wgt');

        $(".details").css({top: $(".project").height()})
        $(".project").hover(function(){
            var details = $(this).find(".details");
            details.animate({top: $(this).height()-details.outerHeight()});
        }, function(){
            var details = $(this).find(".details");
            details.animate({top: $(this).outerHeight()});
        });
    }
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65439505-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
