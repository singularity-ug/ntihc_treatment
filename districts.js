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
		else if(selectedOption == "KAMPALA")
		{
			displayDiv(prefix,"KAMPALA");
		}
		else if(selectedOption == "MUKONO")
		{
			displayDiv(prefix,"MUKONO");
		}
		else if(selectedOption == "WAKISO")
		{
			displayDiv(prefix,"WAKISO");
		}
		else if(selectedOption == "MPIGI")
		{
			displayDiv(prefix,"MPIGI");
		}
		else if(selectedOption == "KAYUNGA")
		{
			displayDiv(prefix,"KAYUNGA");
		}
		else if(selectedOption == "LUWERO")
		{
			displayDiv(prefix,"LUWERO");
		}
		else if(selectedOption == "BUTAMBALA")
		{
			displayDiv(prefix,"BUTAMBALA");
		}
		else if(selectedOption == "NAKASEKE")
		{
			displayDiv(prefix,"NAKASEKE");
		}
		else if(selectedOption == "GOMBA")
		{
			displayDiv(prefix,"GOMBA");
		}
		else if(selectedOption == "OTHERDISTRICT")
		{
			displayDiv(prefix,"OTHERDISTRICT");
		}
		 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script> 

<!--=========================================================================================================================--> 