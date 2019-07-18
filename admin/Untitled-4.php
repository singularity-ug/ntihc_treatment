<input type="text" id="startdate">
<input type="text" id="enddate">
<input type="text" id="days">

<script src="https://code.jquery.com/jquery-1.8.3.js"></script>
<script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" />
<script>
$(document).ready(function() {

$( "#startdate,#enddate" ).datepicker({
changeMonth: true,
changeYear: true,
firstDay: 1,
dateFormat: 'dd/mm/yy',
})

$( "#startdate" ).datepicker({ dateFormat: 'dd-mm-yy' });
$( "#enddate" ).datepicker({ dateFormat: 'dd-mm-yy' });

$('#enddate').change(function() {
var start = $('#startdate').datepicker('getDate');
var end   = $('#enddate').datepicker('getDate');

if (start<end) {
var days   = (end - start)/1000/60/60/24;
$('#days').val(days);
}
else {
alert ("You cant come back before you have been!");
$('#startdate').val("");
$('#enddate').val("");
$('#days').val("");
}
}); //end change function
}); //end ready
</script>



          <form>   
                        <script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("drop_date").value);
                var pickdt = new Date(document.getElementById("pick_date").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }

    </script>
</head>
<body>
    <div id="reserve_form">

    <div id="pickup_date"><p><label class="form">Pickup Date:</label><input type="date" class="textbox" id="pick_date" name="pickup_date" onchange="cal()"</p></div>

    <div id="dropoff_date"><p><label class="form">Dropoff Date:</label><input type="date" class="textbox" id="drop_date" name="dropoff_date" onchange="cal()"/></p></div>

    <div id="numdays"><label class="form">Number of days:</label><input type="text" class="textbox" id="numdays2" name="numdays"/></div>

    </div>
     
    </form>