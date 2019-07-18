<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery Ajax Live Search - DEMO</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Custom styles for this template -->
<link href="starter-template.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
      <div class="starter-template">
		<div class="page-header">
			<h1>jQuery Ajax Live Search <small>DEMO</small></h1>
		</div>
        <form role="form" method="post">
		  <div class="form-group">
			<input type="text" class="form-control" id="keyword" placeholder="Enter keyword">
		  </div>
		</form>
		<ul id="content"></ul>
		
	  </div>
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {
		$('#keyword').on('input', function() {
			var searchKeyword = $(this).val();
			if (searchKeyword.length >= 3) {
				$.post('search.php', { keywords: searchKeyword }, function(data) {
					$('ul#content').empty()
					$.each(data, function() {
						$('ul#content').append('<li><a href="example.php?id=' + this.id + '">' + this.title + '</a></li>');
					});
				}, "json");
			}
		});
	});
	</script>
  </body>
</html>
