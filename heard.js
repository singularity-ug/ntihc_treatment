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
		else if(selectedOption == "PEERS")
		{
			displayDiv(prefix,"PEERS");
		}
		else if(selectedOption == "PARENTS")
		{
			displayDiv(prefix,"PARENTS");
		}
		else if(selectedOption == "GUARDIAN")
		{
			displayDiv(prefix,"GUARDIAN");
		} 
		else if(selectedOption == "HEALTH WORKER")
		{
			displayDiv(prefix,"HEALTH WORKER");
		}
		else if(selectedOption == "OUTREACH")
		{
			displayDiv(prefix,"OUTREACH");
		}
		else if(selectedOption == "EMPLOYER")
		{
			displayDiv(prefix,"EMPLOYER");
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
		else if(selectedOption == "NEWS PAPER")
		{
			displayDiv(prefix,"NEWS PAPER");
		}
		else if(selectedOption == "RADIO")
		{
			displayDiv(prefix,"RADIO");
		}
		else if(selectedOption == "TV")
		{
			displayDiv(prefix,"TV");
		}
		else if(selectedOption == "FRIEND")
		{
			displayDiv(prefix,"FRIEND");
		} 
		else if(selectedOption == "IEC MATERIALS")
		{
			displayDiv(prefix,"IEC MATERIALS");
		}
		else if(selectedOption == "OTHERHAU")
		{
			displayDiv(prefix,"OTHERHAU");
		}
  
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>


<!--=========================================================================================================================-->
     