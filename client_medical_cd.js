<script type="text/javascript">
function showDiv3(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
		
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		else if(selectedOption == "YES")
		{
			displayDiv(prefix,"YES");
		}
		else if(selectedOption == "NO")
		{
			displayDiv(prefix,"NO");
		}
		 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script> 

<!--=========================================================================================================================--> 