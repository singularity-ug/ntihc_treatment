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
		else if(selectedOption == "PROTESTANT")
		{
			displayDiv(prefix,"PROTESTANT");
		}
		else if(selectedOption == "CATHOLIC")
		{
			displayDiv(prefix,"CATHOLIC");
		}
		else if(selectedOption == "MUSLIM")
		{
			displayDiv(prefix,"MUSLIM");
		}
		else if(selectedOption == "BORN AGAIN")
		{
			displayDiv(prefix,"BORN AGAIN");
		}
		else if(selectedOption == "OTHERS")
		{
			displayDiv(prefix,"OTHERS");
		}
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script> 

<!--=========================================================================================================================--> 