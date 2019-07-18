<script type="text/javascript">
function showDiv6(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
		
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "6")
		{
			displayDiv(prefix,"6");
		}
		else if(selectedOption == "SWITCHED OFF")
		{
			displayDiv(prefix,"SWITCHED OFF");
		}
		 
		else if(selectedOption == "TURN ON")
		{
			displayDiv(prefix,"TURN ON");
		} 
		 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script> 

<!--=========================================================================================================================--> 