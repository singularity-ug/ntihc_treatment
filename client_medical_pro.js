<script type="text/javascript">
function showDiv2(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
		
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		else if(selectedOption == "GENERAL")
		{
			displayDiv(prefix,"GENERAL");
		}
		else if(selectedOption == "ART")
		{
			displayDiv(prefix,"ART");
		}
		else if(selectedOption == "PREGNANCY")
		{
			displayDiv(prefix,"PREGNANCY");
		}
		else if(selectedOption == "BODY CHANGES")
		{
			displayDiv(prefix,"BODY CHANGES");
		}
		else if(selectedOption == "SEXUAL HEALTH")
		{
			displayDiv(prefix,"SEXUAL HEALTH");
		}
		else if(selectedOption == "STI")
		{
			displayDiv(prefix,"STI");
		}
		else if(selectedOption == "SGBV")
		{
			displayDiv(prefix,"SGBV");
		}
		else if(selectedOption == "BAGANDA")
		{
			displayDiv(prefix,"BAGANDA");
		}
		else if(selectedOption == "BAGISU")
		{
			displayDiv(prefix,"BAGISU");
		}
		else if(selectedOption == "BAGUNGU")
		{
			displayDiv(prefix,"BAGUNGU");
		}
		else if(selectedOption == "BAGWE")
		{
			displayDiv(prefix,"BAGWE");
		} 
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>


<!--=========================================================================================================================-->