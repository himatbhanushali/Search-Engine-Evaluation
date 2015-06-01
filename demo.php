<p>
	<b>Domain/Host Name:</b>
	<input type="text" name="sitehost" id="sitehost" size='30' maxlength='50' value="">
	<input type="button" value="Grab Details" id="submit">
</p>
<ul id="showinfo">
</ul>
<script src="js/jquery-1.4.4.min.js"></script>
<script>
/* Here is Code for MYSQL Insert */
/*************************************/
$(document).ready(function() {
    $("#submit").click(function() {
        var sendurl = $("#sitehost").val();
        $("#showinfo").html('<li>Please wait.. <img src = "img/loading.gif"/></li>');
        $.ajax({
            type: "POST",
            url: "Class.Fetch.info.php",
            data: "sendurl=" + sendurl,
            success: function(status) {
                $("#showinfo").html(status);
            }
        });
    });
});
/*************************************/
/* CLose Here*/
</script>