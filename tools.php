<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="files/imgs/favicon.ico">

    <title>Tools</title>

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
<?php
  if (isset($_GET['generator']) || (!isset($_GET['validator']) && !isset($_GET['combinator']))) {
    if (isset($_SESSION['rdml']) || isset($_POST['generate_file'])) $hide_flag = true;
    else $hide_flag = false;

?>
      <div class="row">
        <div class="card-deck">
          <div class="card border-secondary mb-3 bg-light col-8 text-justify">
            <div class="card-body">
              <p class="card-text">You generate an RDML file by uploading your data as tab-separated text files. A sample- and target annotation file is mandatory when uploading a quantification, raw amplification or raw melting data file. In addition to creating experiments and runs one by one, it is also possible to create an experiment/run structure by uploading a setup file. In this case only the data files will have to be added manually. More info on the format of the different input files can be found <a href="help.php" target="_blank" class="text-info ">here</a>.<br>In the left column of the page the number of unique targets, samples, experimenters and thermal cycling conditions present in the annotation files is shown between brackets, preceeded by the number of unique targets, samples, experimenters and thermal cycling conditions references in the data files.<br>If you supply an email address, the RDML file will be emailed to you.</p>
              </div>
          </div>
          <div class="card border-secondary mb-3 bg-light col-4">
            <div class="card-body">
              <h4 class="card-title">Sample files</h4>
              <ul>
                <li><a class="text-dark" href="target_annotation_file_PR_v1_1.txt" target="_blank">Target annotation file</a></li>
                <li><a class="text-dark" href="sample_annotation_file_PR_v1_1.txt" target="_blank">Sample annotation file</a></li>
                <li><a class="text-dark" href="experimenters_PR_v1_1.txt" target="_blank">Experimenter annotation file</a></li>
                <li><a class="text-dark" href="thermal_conditions_PR_v1_1.txt" target="_blank">Therm. Cyc. conditions file</a></li>
                <li><a class="text-dark" href="setup_file_PR_v1_1.txt" target="_blank">Setup file</a></li>
                <li><a class="text-dark" href="quantification_file_PR_v1_1.txt" target="_blank">Quantification data file</a></li>
                <li><a class="text-dark" href="raw_amplification_data_file_PR_v1_1.txt" target="_blank">Raw amplification data file</a></li>
                <li><a class="text-dark" href="raw_melting_data_file_PR_v1_1.txt" target="_blank">Raw melting data file</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4 border border-dark border-left-0 border-top-0 border-bottom-0">
          <div class="row">
            <div class="col-1"><img src="files/imgs/experimenter_button.png"/></div>
            <div class="col-11">experimenters</div>
          </div>
          <div class="row">
            <div class="col-1"><img src="files/imgs/target_button.png"/></div>
            <div class="col-11">targets</div>
          </div>
          <div class="row">
            <div class="col-1"><img src="files/imgs/sample_button.png"/></div>
            <div class="col-11">samples</div>
          </div>
          <div class="row">
            <div class="col-1"><img src="files/imgs/pcr_button.png"/></div>
            <div class="col-11">PCR conditions</div>
          </div>
          <form class="mt-4">
            <div class="form-group row">
              <label for="filename" class="col-3 col-form-label">Filename</label>
              <div class="col-9">
                <input type="text" class="form-control form-control-sm" id="filename" placeholder="Filename">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-3 col-form-label">Email</label>
              <div class="col-9">
                <input type="email" class="form-control form-control-sm" id="email" placeholder="Email">
                <small id="emailHelp" class="form-text text-muted text-right">Email address will not be stored</small>
              </div>
            </div>
            <input class="btn btn-outline-secondary btn-sm" type="reset" value="Reset">
            <input class="btn btn-outline-secondary btn-sm pull-right" type="submit" value="Generate RDML file">
          </form>
        </div>
        <div class="col-8">
          <div class="row">
            <div class="col-1"><img src="files/imgs/experimenter_button.png"/></div>
            <div class="col-11"><a data-toggle="collapse" class="text-dark" href="#add_exp" aria-expanded="false" aria-controls="add_exp">Add a list of experimenters</a></div>
          </div>
          <div class="collapse row" id="add_exp">
            <form class="form-inline col-8 ml-5 pl-5">
              <div class="form-group row">
                <div class="col-9">
                  <input type="file" class="form-control-file form-control-sm" id="experimenter_file" placeholder="Experimenter file">
                </div>
              </div>
              <input class="btn btn-outline-secondary btn-sm" type="submit" value="Submit">
            </form>
          </div>
          <div class="row">
            <div class="col-1"><img src="files/imgs/target_button.png"/></div>
            <div class="col-11"><a data-toggle="collapse" class="text-dark" href="#add_tar" aria-expanded="false" aria-controls="add_tar">Add a list of targets</a></div>
          </div>
          <div class="collapse row" id="add_tar">
            <form class="form-inline col-8 ml-5 pl-5">
              <div class="form-group row">
                <div class="col-9">
                  <input type="file" class="form-control-file form-control-sm" id="target_file" placeholder="Target file">
                </div>
              </div>
              <input class="btn btn-outline-secondary btn-sm" type="submit" value="Submit">
            </form>
          </div>
          <div class="row">
            <div class="col-1"><img src="files/imgs/sample_button.png"/></div>
            <div class="col-11"><a data-toggle="collapse" class="text-dark" href="#add_sal" aria-expanded="false" aria-controls="add_sal">Add a list of samples</a></div>
          </div>
          <div class="collapse row" id="add_sal">
            <form class="form-inline col-8 ml-5 pl-5">
              <div class="form-group row">
                <div class="col-9">
                  <input type="file" class="form-control-file form-control-sm" id="sample_file" placeholder="Sample file">
                </div>
              </div>
              <input class="btn btn-outline-secondary btn-sm" type="submit" value="Submit">
            </form>
          </div>
          <div class="row">
            <div class="col-1"><img src="files/imgs/pcr_button.png"/></div>
            <div class="col-11"><a data-toggle="collapse" class="text-dark" href="#add_pcr" aria-expanded="false" aria-controls="add_pcr">Add a list of thermal cycling conditions</a></div>
          </div>
          <div class="collapse row" id="add_pcr">
            <form class="form-inline col-8 ml-5 pl-5">
              <div class="form-group row">
                <div class="col-9">
                  <input type="file" class="form-control-file form-control-sm" id="pcr_file" placeholder="PCR file">
                </div>
              </div>
              <input class="btn btn-outline-secondary btn-sm" type="submit" value="Submit">
            </form>
          </div>
          <div class="row">
            <div class="col-1"><img src="files/imgs/experiment_button.png"/></div>
            <div class="col-11"><a data-toggle="collapse" class="text-dark" href="#add_set" aria-expanded="false" aria-controls="add_set">Add a new experiment or load a setup file</a></div>
          </div>
          <div class="collapse row" id="add_set">
            <form class="col-8 ml-5 pl-5">
              <div class="form-group row">
                <div class="col-6">
                  <input type="text" class="form-control form-control-sm" id="experiment_id" placeholder="Experiment ID">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-6">
                  <input type="text" class="form-control form-control-sm" id="experiment_descr" placeholder="Experiment description">
                </div>
                <div class="col-3">
                  <input class="btn btn-outline-secondary btn-sm" type="submit" value="Submit">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
<?php 
  }
  else {
    if (isset($_GET['combinator'])) {
?>
      <div class="row">
        <div class="col-4">
          <div class="card border-secondary mb-3 bg-light text-justify">
            <div class="card-body">
              <p class="card-text">This tool gives you the possibility to merge two RDML files. The files need to be compliant with the same RDML version in order for the tool to work. Currently only files compliant with version 1.1 of the RDML schema are accepted (RDML v1.0 will be added in the near future).</p>
            </div>
          </div>
        </div>
        <div class="col-8 row">
          <form class="mt-4 col-12">
            <div class="form-group row">
              <div class="col-1">
                <img src="files/imgs/rdml_button.png"/>
              </div>
              <label for="rdml_file_1" class="col-3 col-form-label">RDML file 1</label>
              <div class="col-8">
                <input type="file" class="form-control-file form-control-sm" id="rdml_file_1" placeholder="RDML file 1">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-1">
                <img src="files/imgs/rdml_button.png"/>
              </div>
              <label for="rdml_file_2" class="col-3 col-form-label">RDML file 2</label>
              <div class="col-8">
                <input type="file" class="form-control-file form-control-sm" id="rdml_file_2" placeholder="RDML file 1">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-1"></div>
              <label for="filename" class="col-3 col-form-label">Filename</label>
              <div class="col-8">
                <input type="text" class="form-control form-control-sm" id="filename" placeholder="Filename">
              </div>
            </div>
            <input class="btn btn-outline-secondary btn-sm pull-right" type="submit" value="Merge files">
          </form>
        </div>
      </div>
<?php 
    }
    else {
      if (isset($_GET['validator'])) {
?>
       <div class="row">
        <div class="col-4">
          <div class="card border-secondary mb-3 bg-light text-justify">
            <div class="card-body">
              <p class="card-text">The validator can be used to check if a RDML file is consistent with a certain version of the RDML schema. The tools uses XML validation functions incorporated in PHP and prints out possible error messages which can help in making the RDML file compliant with the schema.</p>
            </div>
          </div>
        </div>
        <div class="col-8 row">
          <form class="mt-4 col-12">
            <div class="form-group row">
              <div class="col-1">
                <img src="files/imgs/rdml_button.png"/>
              </div>
              <label for="rdml_file" class="col-3 col-form-label">RDML file</label>
              <div class="col-8">
                <input type="file" class="form-control-file form-control-sm" id="rdml_file" placeholder="RDML file">
              </div>
            </div>
            <input class="btn btn-outline-secondary btn-sm pull-right" type="submit" value="Validate files">
          </form>
        </div>
      </div>
<?php
      }
    }
  }
?>
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