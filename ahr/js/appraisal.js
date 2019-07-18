
jQuery(document).ready(function() {

    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"], .registration-form input[type="password"], .registration-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function() {
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;

    	parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
    			$(this).removeClass('input-error');
    		    	});

    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
	    		$(this).next().fadeIn();
	    	});
    	}

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function() {
    	$(this).parents('fieldset').fadeOut(400, function() {
    		$(this).prev().fadeIn();
    	});
    });

    // submit
    $('.registration-form').on('submit', function(e) {

    	$(this).find('input[type="text"], input[type="password"], textarea').each(function() {
    		//	$(this).removeClass('input-error');

    	});
    });


});


function calcOnkeyup(elem){
  var table = document.getElementById('dataTable2');
	var rowCount = table.rows.length;
  var sum=0;
  var count =0;

/*  for(var x=1;x<=11;x++){
    var v1 = document.getElementById('r_'+x).value;
    if(v1==''){}
    else{
      count++;
      sum=sum + parseFloat(v1);
      var av = sum/count;
      document.getElementById('totals').innerHTML=''+av;
    }
  }*/

  for(var i=1;i<rowCount;i++){
  var val =  table.rows[i].cells[5].childNodes[1].value;
  if(val==''){}
  else{
    count++;
    sum = sum + parseFloat(val);
    var average = sum/count;
    //increment number of items count and sum count
    //show the average
    document.getElementById('totals').innerHTML = '' + average;
    document.getElementById('o_self').value = '' + average;
      document.getElementById('o_self1').value = '' + average;
  }
  }
//  var rowid = elem.parentNode.parentNode;
}


function calcOnkeyup1(elem){
  var table = document.getElementById('dataTable2');
	var rowCount = table.rows.length;
  var sum=0;
  var count =0;

  for(var i=1;i<rowCount;i++){
  var val =  table.rows[i].cells[5].childNodes[3].value;
  if(val==''){}
  else{
      console.log(val);
    count++;
    sum = sum + parseFloat(val);
    var average = sum/count;
    //increment number of items count and sum count
    //show the average
    document.getElementById('totals').innerHTML = '' + average;
    document.getElementById('o_sup').value = '' + average;
      document.getElementById('o_self1').value = '' + average;
  }
  }
//  var rowid = elem.parentNode.parentNode;
}

function calcOnkeyup2(elem){
  var table = document.getElementById('dataTable2');
	var rowCount = table.rows.length;
  var sum=0;
  var count =0;

  for(var i=1;i<rowCount;i++){
  var val =  table.rows[i].cells[5].childNodes[5].value;
  if(val==''){}
  else{
      console.log(val);
    count++;
    sum = sum + parseFloat(val);
    var average = sum/count;
    //increment number of items count and sum count
    //show the average
    document.getElementById('totals').innerHTML = '' + average;
    document.getElementById('o_agreed').value = '' + average;
      document.getElementById('o_self1').value = '' + average;
  }
  }
//  var rowid = elem.parentNode.parentNode;
}
