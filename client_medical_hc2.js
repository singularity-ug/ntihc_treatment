<script type="text/javascript">
function showDiv5(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
		
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
		else if(selectedOption == "NEGATIVE")
		{
			displayDiv(prefix,"NEGATIVE");
		}
		 
		else if(selectedOption == "POSITIVE")
		{
			displayDiv(prefix,"POSITIVE");
		} 
		 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script> 

<!--=========================================================================================================================--> 