<script type="text/javascript">
function showDiv7(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
		
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "7")
		{
			displayDiv(prefix,"7");
		}
		else if(selectedOption == "NOT REQUIRED")
		{
			displayDiv(prefix,"NOT REQUIRED");
		}
		 
		else if(selectedOption == "REQUIRED")
		{
			displayDiv(prefix,"REQUIRED");
		} 
		 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script> 

<!--=========================================================================================================================--> 