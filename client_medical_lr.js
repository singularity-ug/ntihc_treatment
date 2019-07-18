<script type="text/javascript">
function showDiv8(prefix,chooser) 
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
		else if(selectedOption == "OFF")
		{
			displayDiv(prefix,"OFF");
		}
		 
		else if(selectedOption == "ON")
		{
			displayDiv(prefix,"ON");
		} 
		 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script> 

<!--=========================================================================================================================--> 