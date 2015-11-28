

	
		<form name='f2' class="form-horizontal" method='post' action='graph.php'>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Name</label>
		<div class="controls">
		<input type="text" id="inputEmail" placeholder="name" class='span3' name='name'>
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="inputPassword">Gender</label>
		<div class="controls">
		<select name='gen'> <option value="1"> Male </option >
<option value="2"> Female</option >

</select>
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="Year">Year</label>
		<div class="controls">
		<select name='yr'>
<script type='text/javascript'>

for(i=1944; i<=2013; i++)
{
 document.writeln("<option value='"+i+"'>"+i+"</option>")
}


</script>
</select>
		</div>
		</div>
	
		<button type="submit" class="btn btn-primary">Submit</button> <br>
		
        	</div>

