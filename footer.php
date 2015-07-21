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
    }
    else {
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
</body>
</html>
