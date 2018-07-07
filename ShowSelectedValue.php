<script>
function showDetails(id)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("details").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","test.php?q="+id,true);
xmlhttp.send();
}
</script>
<select name="users" onchange="showDetails(this.value)">
<option value="">Select:</option>
<option value="1">1</option>
<option value="2">2</option>
</select>
<div id='details'></div>