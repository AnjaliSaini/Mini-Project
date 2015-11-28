

	 
		<form name='f1' class="form-horizontal" method='post' action='top.php'>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Year</label>
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
		<div class="control-group">
		<label class="control-label" for="inputPassword">Gender</label>
		<div class="controls">
		<select name='gen'> <option value="1"> Male </option >
<option value="2"> Female<option value="3"> Both </option ></option >

</select>
		</div>
		</div>

<div class="control-group">
		<label class="control-label" for="inputPassword">Top Rank</label>
		<div class="controls">
		<select name='rank'> 
<script type='text/javascript'>

for(i=10; i<=1000; i+=10)
{
 document.writeln("<option value='"+i+"'>"+i+"</option>")
}


</script>
</select>
		</div>
		</div>

	
		<button type="submit" class="btn btn-primary">Submit</button></form>
		
        	

