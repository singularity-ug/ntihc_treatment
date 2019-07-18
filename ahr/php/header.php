  <nav class="navbar navbar-inverse  navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">  </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="../admin/home_user.php">Dashboard</a></li>
        <li > <a href="appraisal1.php"> New Appraisal </a> </li>


           <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Approvals
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="datatable/myappraisals_supervisor.php">Pending</a></li>
                <li><a href="datatable/myappraisals_supervisor_cp.php">Completed</a></li>
            </ul>
            </li>

            <li><a href="datatable/myappraisals.php">My Appraisals</a></li>
 

            </ul>

            <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0)"><span class="glyphicon glyphicon-user"></span> WELCOME: &nbsp <?php echo $nameofuser; ?> &nbsp </a> </li>
            <li><a href="javascript:void(0)"><span class="glyphicon glyphicon-user"></span> PFN:  &nbsp <?php echo $pf; ?>  &nbsp;&nbsp  </a> </li>
            <li><a href="../../index.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
            </ul>
      </div>
    </nav>
