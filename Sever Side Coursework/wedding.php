<!DOCTYPE html>
<html>
<head>
<body>
<style type="text/css">
body {
	font-family: "Apple Chancery", Times, serif;
	background: Black;
}
.center {
	text-align:center;
}
body,td,th {
	color: white; 
}
.larger {
	font-size:larger;
	text-align:right;
}
table {
	margin-left:auto;
	margin-right:auto;
}

</style>
<img src="Wedding2.jpg" alt="Wedding" style="position: absolute; top:325px; left:50px; width:304px;height:228px;">
<img src="Wedding.jpg" alt="Wedding" style="position: absolute; top:75px; left:50px; width:304px;height:228px;">
<img src="JustMarried.jpg" alt="Wedding" style="position: absolute; top:325px; left:950px; width:304px;height:228px;">
<img src="Wedding3.jpg" alt="Wedding" style="position: absolute; top:75px; left:950px; width:304px;height:228px;">
</head>
<script type = "text/javascript" src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
  <script type="text/javascript">
	function get(){
		$.get('data.php', { partySize: form.partySize.value,
		                     date: form.date.value,
							 grade: form.grade.value},
		
		    function(output){
				$('#content').html(output).show();
			});
	}

</script>
<h1 class="center">Wedding Planner</h1>
<h2 class ="center">Start Planning Your Wedding Below!</h2>
<p>
  <form name="form">
    <table border="1">
      <tr>
        <th scope="col">Key</th>
        <th scope="col">Value</th>
      </tr>
      <tr>
        <td><label for="partySize">Party Size</label></td>
        <td>
          <input name="partySize" type="integer" class="larger" id="partySize" value="" size="5" />
        </td>
      </tr>
       <tr>
<td><label for="date">Date as dd/mm/yyyy</label></td>
<td><input name="date" type="text" class="larger" id="date" value="" size="12"/></td>
      </tr>
	  <tr>
	  <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( document ).tooltip();
  });
  </script>
        <td><label for="grade">Catering Grade</label></td>
        <td><input name="grade" type="text" class="larger" id="grade" value="" size="5" id="grade" title="Please select a grade between 1 and 5"/></td>
      </tr>
      <tr>
        <td>Confirm</td>
        <td><input type="button" name="submit" id="submit" value="Submit" class="larger" onClick="get()"/></td>
      </tr>
    </table>
  </form>
  </p>
  <div id="content"></div>
</body>
</html>
 