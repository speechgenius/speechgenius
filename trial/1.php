<script src="style/js/jquery.min.js"></script>
<script>
$(document).ready(function (){
$(#search).keyup(function(){

    $.ajax({
    url:'back.php',
    type:'post',
    data:{search: $(this).val()},
    success:function(result){
        $("#result").html(result);
    }
});
});
});

</script>

<input type="text" id="search">
<span id="result"></span>
</body>
</html>