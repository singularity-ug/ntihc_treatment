<script type="text/javascript">
function showDiv4(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
		
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		else if(selectedOption == "HCG REQUIRED")
		{
			displayDiv(prefix,"HCG REQUIRED");
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