<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Add Clients </title> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  </head>

  <body>
    <section id="container" class="">
    @include('admin.header.header')
     @include('admin.sidebar.sidebar')
    </section>


     <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Accounts Dashboard</h3>

        </div>
      </div>
                 <div class="row">
                  
                  <div class="col-sm-3">
                  <section class="panel"> 
                          <table class="table">
                              <thead>
                              <tr>
                                  <!-- <th>#</th> -->
                                  <th>Leads</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($Leads as $Lead)
                                <tr>
                                   <td>
                                   
                                    <a class="btn btn-primary" href="VLead">
                                     {{ $Lead->name_client }} </a>

                                   </td>
                             
                                </tr>
                            @endforeach
                              </tbody>
                          </table>
                      </section>
                  </div>
                  <div class="col-sm-3">
                   <section class="panel"> 
                          <table class="table">
                              <thead>
                              <tr>                            
                                  <th>Contact Made</th>
                             </tr>
                              </thead>
                              <tbody>
                              @foreach($Contacts as $Contact)
                                <tr>
                                  
                                  <td>
                                  <a class="btn btn-danger" href="clientpage/{{ $Lead->id }}">
                                  {{ $Contact->name_client }}
                                </a>
                                  </td>
                                
                                </tr>
                            @endforeach
                              </tbody>
                          </table>
                      </section>
                  </div>
                  <div class="col-sm-3">
                      <section class="panel"> 
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>Meeting</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($Meetings as $Meeting)
                                <tr>
                                  
                                  <td>
                                  <a class="btn btn-info" href="clientpage/{{ $Lead->id }}">
                                  
                            {{ $Meeting->name_client }}
                                </a>
                                  </td>
                                    @endforeach

                                </tr>
                          
                              </tbody>
                          </table>
                      </section>

                  </div>
                       <div class="col-lg-3">
                      <section class="panel"> 
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>Proposal Sent</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($Proposals as $Proposal)
                                <tr>
                                  <td>
                                  <a class="btn btn-success" href="clientpage/{{ $Lead->id }}">
                            {{ $Proposal->name_client }}
                                </a>
                                  </td>
                                    @endforeach

                                </tr>
                          
                              </tbody>
                          </table>
                      </section>

                  </div>

                  </div>

 

    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <script src="js/calendar-custom.js"></script>
  <script src="js/jquery.rateit.min.js"></script>
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/xcharts.min.js"></script>
  <script src="js/jquery.autosize.min.js"></script>
  <script src="js/jquery.placeholder.min.js"></script>
  <script src="js/gdp-data.js"></script>  
  <script src="js/morris.min.js"></script>
  <script src="js/sparklines.js"></script>  
  <script src="js/charts.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>   

  </body>

  </html>

