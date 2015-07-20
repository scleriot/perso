    <br /><br />
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="plugins/magnific-popup/magnific-popup.min.js"></script>

<script>
$(document).ready(function(){
$(".details").css({top: $(".project").height()})
$(".project").hover(function(){
    var details = $(this).find(".details");
    details.animate({top: $(this).height()-details.outerHeight()});
}, function(){
    var details = $(this).find(".details");
    details.animate({top: $(this).outerHeight()});
});
});
</script>
</body>
</html>
