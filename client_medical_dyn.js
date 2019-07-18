<script type="text/javascript">
 <script> 

function searchpro() {
  var xhttp;
  var st =document.getElementById("NTIHCNO").value;
  if (st.length == 0) {
    document.getElementById("recievedids").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("recievedids").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/IMMS/php/view_demography.php?RID="+st, true);
  xhttp.send();
}


function update(thiss) {
  var xhttp;
 var s= thiss;
    if (s.length == 0) {
    document.getElementById("recievedids").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("recievedids").innerHTML = '';
    document.getElementById("NTIHCNO").value=s;
    document.getElementById("pats").innerHTML = this.responseText;


    }
  };
  xhttp.open("GET", "http://localhost/ntihc/UpdateDemography.php?RID="+s, true);
  xhttp.send();
}

var pn = [];
    pn["v1"] = 0;
    pn["v2"] = 0;
    pn["v3"] = 0;
    pn["v4"] = 0;
    pn["v5"] = 0;
    pn["v6"] = 0;
var x="0,0,0,0,0,0";

function adss(selectorint){
    pn["v"+selectorint] = pn["v"+selectorint]+1;
     var obj=  document.getElementById('fields'+selectorint);
     var opts = [];
      opts[0] = ["",""];
      opts[1] = ["Select general ","AIDS SYMPTOMS","CONF. PREV. HIV STATUS","CURRENT HIV RISK","FEEL ILL","FURTHER STUDIES","ILL RELATIVE/PARTNER","LOST RELATIVE/PARTNER","NEW PARTNER","OTHERS","PAST HIV RISK","PREGNANCY","STD SYMPTOMS","TO GET MARRIED","TRAVEL ABROAD"];

      opts[2] = ["Select pregnancy","CAREER GUIDANCE","CULTURE","FOLLOW UP","GBV","HYGIENE","NUTRITION","OTHERS","R/SHIP WITH PARENTS","R/SHIP WITH PARTNER","R/SHIP WITH PEERS"];

      opts[3] = ["Select SGBV","ANGER","ANXIETY","DEFILEMENT","DEPRESSION","GBV-PSYCHOLOGICAL","GUILTY","HOSTILITY","RAPE","STRESS","TRAUMA"];

      opts[4] = ["Select health","HIV/AIDS","SEXUAL ABUSE","SEXUAL PROBLEMS","STDS-SEXUAL HEALTH"];

      opts[5] = ["Select STI","ABNORMAL VAGINAL DISCHARGE","GENITAL ULCER","GROWTHS IN GENITALS","HERPES SIMPLEX","HERPES ZOSTA","HIV/AIDS","ITCHING IN GENITAL","PAINFUL GENITALS","SWELLING IN GENITALS","SYPHILLIS","URETHRAL DISCHARGE","VAGINAL DISCHARGE"];

      opts[6] = ["Select body changes","ACNE","BODY ODOUR","BREAST CHANGES","MENSTRUAL RELATED PROBLEMS","MENSTRUATION","NORMAL VAGINAL DISCHARGE","SIZE OF SEX ORGANS","VIRGINITY","WET DREAMS"];


var optsss = [];
for (var i = 0; i < opts.length; i++) {
optsss.push( opts[i])
}

x=  pn["v1"] +","+ pn["v2"] +","+pn["v3"]+","+pn["v4"]+","+pn["v5"]+","+pn["v6"];

var node = document.createElement('p');
  node.appendChild(document.createTextNode("Row "+pn["v"+selectorint]+"  ."));

var node1 = document.createElement('select');
    document.getElementById('values').value=x;
    node1.id   = 'fields'+selectorint+'_'+pn["v"+selectorint];
    node1.name = 'fields'+selectorint+'_'+pn["v"+selectorint];
    node1.type ='text';

for(var i =0; i<optsss[selectorint].length;i++) {
    var options = document.createElement('option');
        options.value=optsss[selectorint][i];
        options.text =optsss[selectorint][i];
        node1.appendChild(options);}
node.appendChild(node1);
  obj.appendChild(node);
 
}

function remove(sid){
      var  field='fields'+sid;
      var c = document.getElementById(field).childElementCount;
      var obj = document.getElementById(field);
      if(c<=0){}
      else{   obj.removeChild( obj.childNodes[c]);
             pn["v"+sid] = pn["v"+sid]-1;
             x=  pn["v1"] +","+ pn["v2"] +","+pn["v3"]+","+pn["v4"]+","+pn["v5"]+","+pn["v6"];
             document.getElementById('values').value=x;
          }
}

function save(){}

</script>

  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>