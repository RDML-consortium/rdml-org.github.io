<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="files/imgs/favicon.ico">

    <title>Software</title>

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
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="files.php">Data Standard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="development_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Development</a>
            <div class="dropdown-menu" aria-labelledby="development_menu">
              <a class="dropdown-item" href="http://sourceforge.net/forum/?group_id=214529" target="_blank">Discussion forum</a>
              <a class="dropdown-item" href="http://sourceforge.net/projects/rdml/" target="_blank">Repository</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="miqe.php">MIQE</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="tools_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>
            <div class="dropdown-menu" aria-labelledby="tools_menu">
              <!-- <a class="dropdown-item" href="tools.php">Generator</a>
              <a class="dropdown-item" href="tools.php?validator">Validator</a>
              <a class="dropdown-item" href="tools.php?combinator">Merge files</a> -->
              <a class="dropdown-item" href="http://sourceforge.net/projects/qpcr-ninja/" target="_blank">RDML Ninja</a>
              <a class="dropdown-item" href="software.php">RDML compliant software</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="consortium_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consortium</a>
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
      <h6>RDML is supported by the following software</h6>
      <p class="text-muted pull-right">If your software supports RDML, please <a href="mailto:info@rdml.org" class="text-muted "><u>contact us</u></a></p>
      <div class="clearfix"></div>
      <table class="table table-responsive">
        <tbody>
          <tr class="table-inverse">
            <td colspan="5">Reference implementation and editor</td>
          </tr>
          <tr>
            <td class="text-center"><a href="http://sourceforge.net/projects/qpcr-ninja/" target="_blank"><img class="sw_img" src="files/imgs/RDML_logo_round.png"/></a></td>
            <td class="align-middle">RDML Ninja</td>
            <td class="align-middle">Andreas Untergasser</td>
            <td class="align-middle">RDML Editor</td>
            <td class="align-middle">RDML 1.2 compliant</td>
          </tr>
          <tr class="table-inverse">
            <td colspan="5">RDML compliant 3<sup>rd</sup> party software</td>
          </tr>
          <tr>
            <td class="text-center"><a href="http://www.qbaseplus.com" target="_blank"><img class="sw_img" src="files/imgs/qbaseplus.jpg"/></a></td>
            <td class="align-middle">qbase+</td>
            <td class="align-middle"><a href="http://www.biogazelle.com/" target="_blank" class="text-info">Biogazelle</a></td>
            <td class="align-middle">real-time PCR data-analysis software</td>
            <td class="align-middle">RDML 1.2 compliant</td>
          </tr>
          <tr class="table-secondary">
            <td class="text-center"><a href="http://www.primer3plus.com/cgi-bin/dev/primer3plus.cgi" target="_blank"><img class="sw_img" src="files/imgs/primer3plus_icon.png"/></a></td>
            <td class="align-middle">Primer3Plus</td>
            <td class="align-middle"><a href="http://www.ncbi.nlm.nih.gov/sites/entrez?holding=&db=pubmed&cmd=search&term=17485472" target="_blank" class="text-info">Untergasser et al.</a></td>
            <td class="align-middle">online primer design</td>
            <td class="align-middle">RDML 1.1 compliant</td>
          </tr>
          <tr>
            <td class="text-center"><a href="http://rdmldb.org/" target="_blank"><img class="sw_img" src="files/imgs/RDMLdb_logo.png"/></a></td>
            <td class="align-middle">RDMLdb</td>
            <td class="align-middle">Ghent University</td>
            <td class="align-middle">RDML data file database</td>
            <td class="align-middle">RDML 1.2 compliant</td>
          </tr>
          <tr class="table-secondary">
            <td class="text-center"><a href="http://www.rtprimerdb.org" target="_blank"><img class="sw_img" src="files/imgs/rtprimerdb_icon.gif"/></a></td>
            <td class="align-middle">RTPrimerDB</td>
            <td class="align-middle"><a href="http://www.ncbi.nlm.nih.gov/sites/entrez?holding=&db=pubmed&cmd=search&term=16381959" target="_blank" class="text-info">Pattyn et al.</a></td>
            <td class="align-middle">the real-time PCR primer and probe database</td>
            <td class="align-middle">RDML compliant</td>
          </tr>
          <tr>
            <td class="text-center"><a href="http://www.hartfaalcentrum.nl/index.php?main=files&fileName=LinRegPCR.zip&description=LinRegPCR:%20qPCR%20data%20analysis&sub=LinRegPCR" target="_blank"><img class="sw_img" src="files/imgs/linregpcr.png"/></a></td>
            <td class="align-middle">LinRegPCR</td>
            <td class="align-middle">J.M. Ruijter</td>
            <td class="align-middle">analysis of quantitative RT-PCR (qPCR) data</td>
            <td class="align-middle">RDML 1.2 compliant</td>
          </tr>
          <tr class="table-secondary">
            <td class="text-center"><a href="https://github.com/kablag/RDML" target="_blank"><img class="sw_img" src="files/imgs/R_RDML.png"/></a></td>
            <td class="align-middle">RDML R package</td>
            <td class="align-middle">Konstantin Blagodatskikh</td>
            <td class="align-middle">R Package for RDML handling</td>
            <td class="align-middle">RDML 1.1 compliant</td>
          </tr>
          <tr>
            <td class="text-center"><a href="https://github.com/ramiromagno/rdml" target="_blank"><img class="sw_img" src="https://raw.githubusercontent.com/ramiromagno/rdml/master/math_rdml_logo.png"/></a></td>
            <td class="align-middle">RDML Wolfram Mathematica package</td>
            <td class="align-middle">Ramiro Magno</td>
            <td class="align-middle">rdml: Mathematica package for Real-Time qPCR data</td>
            <td class="align-middle">RDML 1.2 compliant</td>
          </tr>
          <tr class="table-inverse">
            <td colspan="5">RDML compliant qPCR instrument software</td>
          </tr>
          <tr>
            <td class="text-center"><a href="http://www.bio-rad.com" target="_blank"><img class="sw_img" src="files/imgs/biorad.png"/></a></td>
            <td class="align-middle">CFX Manager</td>
            <td class="align-middle"><a href="http://www.bio-rad.com" target="_blank" class="text-info">Bio-Rad</a></td>
            <td class="align-middle">real-time qPCR instrument software</td>
            <td class="align-middle">RDML 1.1 compliant</td>
          </tr>
          <tr class="table-secondary">
            <td class="text-center"><a href="http://www.appliedbiosystems.com/absite/us/en/home/applications-technologies/real-time-pcr/real-time-pcr-instruments/stepone-steponeplus-systems.html?ICID=mp-rtpcr-stponesytm-1010" target="_blank"><img class="sw_img" src="files/imgs/lifetechnologies.png"/></a></td>
            <td class="align-middle">StepOne</td>
            <td class="align-middle"><a href="http://www.lifetechnologies.com" target="_blank" class="text-info">Life Technologies</a></td>
            <td class="align-middle">real-time qPCR instrument software</td>
            <td class="align-middle">RDML compliant</td>
          </tr>
          <tr>
            <td class="text-center"><a href="http://www.appliedbiosystems.com/absite/us/en/home/applications-technologies/real-time-pcr/real-time-pcr-instruments/QuantStudio-12K-Flex-Real-Time-RT-PCR-System.html" target="_blank"><img class="sw_img" src="files/imgs/lifetechnologies.png"/></a></td>
            <td class="align-middle">QuantStudio 12K Flex</td>
            <td class="align-middle"><a href="http://www.lifetechnologies.com" target="_blank" class="text-info">Life Technologies</a></td>
            <td class="align-middle">real-time qPCR instrument software</td>
            <td class="align-middle">RDML compliant</td>
          </tr>
          <tr class="table-secondary">
            <td class="text-center"><a href="http://www.invitrogen.com/site/us/en/home/Products-and-Services/Applications/PCR/real-time-pcr/real-time-pcr-instruments/viia-7-real-time-pcr-system.html" target="_blank"><img class="sw_img" src="files/imgs/lifetechnologies.png"/></a></td>
            <td class="align-middle">ViiA 7</td>
            <td class="align-middle"><a href="http://www.lifetechnologies.com" target="_blank" class="text-info">Life Technologies</a></td>
            <td class="align-middle">real-time qPCR instrument software</td>
            <td class="align-middle">RDML compliant</td>
          </tr>
          <tr>
            <td class="text-center"><a href="http://www.lightcycler96.com" target="_blank"><img class="sw_img" src="files/imgs/roche.png"/></a></td>
            <td class="align-middle">LightCycler 96</td>
            <td class="align-middle"><a href="http://www.lightcycler96.com" target="_blank" class="text-info">Roche</a></td>
            <td class="align-middle">real-time qPCR instrument software</td>
            <td class="align-middle">RDML 1.1 compliant</td>
          </tr>
          <tr class="table-secondary">
            <td class="text-center"><a href="http://www.qiagen.com/Products/Catalog/Automated-Solutions/Detection-and-Analysis/Rotor-Gene-Q" target="_blank"><img class="sw_img" src="files/imgs/qiagen.jpg"/></a></td>
            <td class="align-middle">Rotor-Gene Q</td>
            <td class="align-middle"><a href="http://www.qiagen.com/Products/Catalog/Automated-Solutions/Detection-and-Analysis/Rotor-Gene-Q" target="_blank" class="text-info">Qiagen</a></td>
            <td class="align-middle">real-time qPCR instrument software</td>
            <td class="align-middle">RDML 1.1 compliant</td>
          </tr>
          <tr>
            <td class="text-center"><a href="http://mygopcr.com" target="_blank"><img class="sw_img" src="files/imgs/MyGo_logo.jpg"/></a></td>
            <td class="align-middle">MyGo Pro & MyGo Mini</td>
            <td class="align-middle"><a href="http://mygopcr.com" target="_blank" class="text-info">IT-IS MyGo</a></td>
            <td class="align-middle">real-time qPCR instrument software</td>
            <td class="align-middle">RDML 1.2 compliant</td>
          </tr>
        </tbody>
      </table>
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