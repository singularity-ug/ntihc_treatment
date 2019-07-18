var alltime = setInterval(function(){
          var now = new Date();
          var datetime = dateToString(now);
          var time     = fmt(now.getHours())+':'+fmt(now.getMinutes())+':'+fmt(now.getSeconds());

    /*      document.getElementById('datereported').value=datetime;
          document.getElementById('Edatereported').value=datetime;
          document.getElementById('timereported').value=time;
          document.getElementById('Etimereported').value=time; */
   },500);

function fmt(integ){ if (integ<10) {  return '0'+integ;} else { return  ''+integ;}}
