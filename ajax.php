<html>
<head>
</head>
<body>
    <form action="" method="post">
        <select name="state" class="Destination">
            <option value="GOA">1. GOA</option>
            <option value="Gujarat">2. Gujarat</option>
            <option value="Rajasthan">3. Rajasthan</option>
        </select> 
        <input type="submit" value="Submit">
        <div class='ShowSelectedValueDiv'>
               //Add This Div
        </div>
    </form>
<script>
$('.Destination').change(function(){
    var Destination=$('.Destination').val();
    $.ajax({url:"ShowSelectedValue.php?Destination="+Destination,cache:false,success:function(result){
        $(".ShowSelectedValueDiv").html(result);
    }});
});
</script>
</body>
</html>