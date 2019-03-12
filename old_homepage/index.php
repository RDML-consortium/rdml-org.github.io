<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="files/imgs/favicon.ico">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font awesome web font -->
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/user.css" rel="stylesheet">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="files/imgs/RDML_logo_round.png" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="files.php">Data Standard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="development_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Development</a>
            <div class="dropdown-menu" aria-labelledby="development_menu">
              <a class="dropdown-item" href="http://sourceforge.net/forum/?group_id=214529" target="_blank">Discussion forum</a>
              <a class="dropdown-item" href="http://sourceforge.net/projects/rdml/" target="_blank">Repository</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="miqe.php">MIQE</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="tools_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>
            <div class="dropdown-menu" aria-labelledby="tools_menu">
              <!-- <a class="dropdown-item" href="tools.php">Generator</a>
              <a class="dropdown-item" href="tools.php?validator">Validator</a>
              <a class="dropdown-item" href="tools.php?combinator">Merge files</a> -->
              <a class="dropdown-item" href="http://sourceforge.net/projects/qpcr-ninja/" target="_blank">RDML Ninja</a>
              <a class="dropdown-item" href="software.php">RDML compliant software</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="consortium_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consortium</a>
            <div class="dropdown-menu" aria-labelledby="consortium_menu">
              <a class="dropdown-item" href="consortium.php">About</a>
              <a class="dropdown-item" href="supporters.php">Developers and supporters</a>
              <a class="dropdown-item" href="support.php">Join or support</a>
            </div>
          </li>
        </ul>
        <span class="navbar-text">
          <h3>Real-time PCR Data Markup Language</h3>
        </span>
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="card border-secondary mb-3">
            <div class="card-body">
              <h4 class="card-title">Tools</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a class="text-dark" href="http://sourceforge.net/projects/qpcr-ninja/" target="_blank">RDML Ninja</a></li>
                <li class="list-group-item"><a class="text-dark" href="software.php">RDML compliant software</a></li>
              </ul>
            </div>
            <div class="card-footer text-center">
              <a href="support.php" class="text-dark">Join or support</a>
            </div>
          </div>
        </div>
        <div class="col-9 text-justify">
          <p>The Real-time PCR Data Markup Language (RDML) is a structured and universal data standard for exchanging quantitative PCR (qPCR) data. The data standard should contain sufficient information to understand the experimental setup, re-analyse the data and interpret the results.<br>The data standard is a compressed text file in Extensible Markup Language (XML) and enables transparent exchange of annotated qPCR data between instrument software and third-party data analysis packages, between colleagues and collaborators, and between authors, peer reviewers, journals and readers.</p>
          <p>To support the usage of this data standard, <!-- both an on-line RDML file generator and file validator are available, as well as -->a reference implementation and file editor software (called RDML-Ninja). Further, we are delighted to see acceptance of the data standard by several qPCR instrument providers, as well as 3rd party software implementations.</p>
          <br>
          <br>
          <div class="row justify-content-center">
            <div class="col-7">
              <img src="files/imgs/RDML_interactions.png"/>
            </div>
          </div>
        </div>
      </div>      
    </div>
<?php
date_default_timezone_set("Europe/Brussels");
?>
    <footer class="footer bg-light fixed-bottom">
      <div class="row justify-content-between">
        <span class="text-muted d-inline-block"><a href="mailto:info@rdml.org?Subject=[RDML] - Message/question" class="text-muted">info@rdml.org</a></span>
        <span class="text-muted d-inline-block">&copy; 2008-<?php echo date("Y"); ?> RDML Consortium</span>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js2"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
