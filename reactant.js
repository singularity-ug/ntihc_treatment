<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		else if(selectedOption == "PREGNANCY RELATED SERVICES")
		{
			displayDiv(prefix,"PREGNANCY RELATED SERVICES");
		}
		else if(selectedOption == "MEDICAL SERVICES")
		{
			displayDiv(prefix,"MEDICAL SERVICES");
		}
		else if(selectedOption == "COUNSELLING SERVICES")
		{
			displayDiv(prefix,"COUNSELLING SERVICES");
		}
		else if(selectedOption == "OUTREACH")
		{
			displayDiv(prefix,"OUTREACH");
		}
		else if(selectedOption == "OTHER SERVICES")
		{
			displayDiv(prefix,"OTHER SERVICES");
		}
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>


<!--=========================================================================================================================-->