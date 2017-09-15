<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="files/imgs/favicon.ico">

    <title>Data standard</title>

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
          <li class="nav-item active">
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
          <li class="nav-item dropdown">
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
      <div class="row">
        <div class="col-3">
          <div class="card border-secondary mb-3">
            <div class="card-body">
              <h4 class="card-title">Versions</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a class="text-dark" href="files.php?v=1.0">RDML v1.0</a></li>
                <li class="list-group-item"><a class="text-dark" href="files.php?v=1.1">RDML v1.1</a></li>
                <li class="list-group-item"><a class="text-dark" href="files.php?v=1.2">RDML v1.2</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-9 text-justify">
<?php
  if (isset($_GET['v']) && $_GET['v'] == "1.0") {
?>
          <p class="text-danger">The files below are compliant with the RDML v1.0 Recommendation (January 31, 2008)</p>
          <div class="row">
            <div class="col-6">
              <p><u>Overview</u></p>
              <a href='files/imgs/rdml_overview_big_v1_0_REC.png' target="_blank"><img src="files/imgs/rdml_overview_v1_1_WD.png" class="w-75"/></a>
              <div class="row">&nbsp;</div>
              <div class="row">&nbsp;</div>
              <p><u>Schema</u></p>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/RDML_v1_0_REC.xsd" target="_blank" class="text-info"><i class="fa fa-file-code-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/RDML_v1_0_REC.xsd" target="_blank" class="text-dark">RDML schema</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/imgs/rdml_schema_v1_0_REC.png" target="_blank" class="text-info"><i class="fa fa-file-image-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/imgs/rdml_schema_v1_0_REC.png" target="_blank" class="text-dark">Graphical view of the RDML schema</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/rdml_comp_ext_v1_0_REC.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/rdml_comp_ext_v1_0_REC.txt" target="_blank" class="text-dark">RDML File Compression and File Extension</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <p><u>Sample files</u></p>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/RDML_example_REC_v1.rdml" target="_blank" class="text-info"><i class="fa fa-file-zip-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/RDML_example_REC_v1.rdml" target="_blank" class="text-dark">example RDML file</a>&nbsp;<a id="help" href="help.php#rdmlFile" target="_blank" class="text-info"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                  <p>(data from Hoebeeck <i>et al.</i>, 2005 &nbsp;&nbsp;<a href="http://www.ncbi.nlm.nih.gov/pubmed/15608663" target="_blank"><img src="./files/imgs/pubmed.jpg" style="border: 0"></a> )</p>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/quantification_file_REC_v1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/quantification_file_REC_v1.txt" target="_blank" class="text-dark">Quantification file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/raw_amplification_data_file_REC_v1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/raw_amplification_data_file_REC_v1.txt" target="_blank" class="text-dark">Raw curve fluorescence data file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/raw_melting_data_file_REC_v1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/raw_melting_data_file_REC_v1.txt" target="_blank" class="text-dark">Raw melting data file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/run_annotation_file_REC_v1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/run_annotation_file_REC_v1.txt" target="_blank" class="text-dark">Run annotation file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/sample_annotation_file_REC_v1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/sample_annotation_file_REC_v1.txt" target="_blank" class="text-dark">Sample annotation file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/target_annotation_file_REC_v1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/target_annotation_file_REC_v1.txt" target="_blank" class="text-dark">Target annotation file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/experimenters_REC_v1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/experimenters_REC_v1.txt" target="_blank" class="text-dark">Experimenters annotation file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/thermal_conditions_REC_v1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/thermal_conditions_REC_v1.txt" target="_blank" class="text-dark">Thermal cycling conditions annotation file</a>
                </div>
              </div>
            </div>
          </div>
<?php
  }
  else {
    if ($_GET['v'] == "1.1") {
?>
          <h5>Changes from v1.0 to v1.1<a href="files/docs/changelog_v1_1.pdf" target="_blank" class="text-info float-right"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></h5>
          <p class="text-danger">The files below are compliant with the RDML v1.1 Recommendation (November 8, 2010)</p>
          <div class="row">
            <div class="col-6">
              <p><u>Overview</u></p>
              <a href='files/imgs/rdml_overview_big_v1_1_WD.png' target="_blank"><img src="files/imgs/rdml_overview_v1_1_WD.png" class="w-75"/></a>
              <div class="row">&nbsp;</div>
              <div class="row">&nbsp;</div>
              <p><u>Schema</u></p>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/RDML_v1_1_REC.xsd" target="_blank" class="text-info"><i class="fa fa-file-code-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/RDML_v1_1_REC.xsd" target="_blank" class="text-dark">RDML schema</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/imgs/RDML_v1_1_REC.png" target="_blank" class="text-info"><i class="fa fa-file-image-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/imgs/RDML_v1_1_REC.png" target="_blank" class="text-dark">Graphical view of the RDML schema</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <p><u>Sample files</u></p>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/RDML_example_REC_v1_1.rdml" target="_blank" class="text-info"><i class="fa fa-file-zip-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/RDML_example_REC_v1_1.rdml" target="_blank" class="text-dark">example RDML file</a>&nbsp;<a id="help" href="help.php#rdmlFile" target="_blank" class="text-info"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                  <p>(data from Hoebeeck <i>et al.</i>, 2005 &nbsp;&nbsp;<a href="http://www.ncbi.nlm.nih.gov/pubmed/15608663" target="_blank"><img src="./files/imgs/pubmed.jpg" style="border: 0"></a> )</p>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/quantification_file_REC_v1_1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/quantification_file_REC_v1_1.txt" target="_blank" class="text-dark">Quantification file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/raw_amplification_data_file_REC_v1_1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/raw_amplification_data_file_REC_v1_1.txt" target="_blank" class="text-dark">Raw curve fluorescence data file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/raw_melting_data_file_REC_v1_1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/raw_melting_data_file_REC_v1_1.txt" target="_blank" class="text-dark">Raw melting data file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/sample_annotation_file_REC_v1_1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/sample_annotation_file_REC_v1_1.txt" target="_blank" class="text-dark">Sample annotation file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/target_annotation_file_REC_v1_1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/target_annotation_file_REC_v1_1.txt" target="_blank" class="text-dark">Target annotation file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/experimenters_REC_v1_1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/experimenters_REC_v1_1.txt" target="_blank" class="text-dark">Experimenters annotation file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/thermal_conditions_REC_v1_1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/thermal_conditions_REC_v1_1.txt" target="_blank" class="text-dark">Thermal cycling conditions annotation file</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/setup_file_REC_v1_1.txt" target="_blank" class="text-info"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/setup_file_REC_v1_1.txt" target="_blank" class="text-dark">Setup file</a>
                </div>
              </div>
            </div>
          </div>
<?php
    }
    if (!isset($_GET['v']) || $_GET['v'] == "1.2") {
?>
          <h5>Introduction to RDML v1.2</h5>
          <p>The RDML file format is developed by the RDML consortium and can be used free of charge. The RDML file format was created to encourage the exchange, publication, revision and re-analysis of raw qPCR data. The core of an RDML file is an experiment, not a PCR run. Therefore all the information is collected which is required to understand an experiment. The structure of the file format was inspired by a database structure. In the file are several master elements, which are then referred to in other parts of the file. This structure allows to reduce the amount of redundant information and encourages the user to provide useful information.</p>
          <p><a data-toggle="collapse" href="#more1_2" aria-expanded="true" aria-controls="more1_2" class="text-info">Show more</a></p>
          <div class="collapse" id="more1_2">
            <p>The master elements are:
              <ul>
                <li>experimenter (contact information of the experimenter)</li>
                <li>documentation (pieces of information to be used at many places)</li>
                <li>dye (dye type, used by targets)</li>
                <li>sample (description of a sample)</li>
                <li>target (description of a targets)</li>
                <li>thermal cycling conditions (description of the cycling conditions)</li>
                <li>experiment (a collection of several qPCR runs)</li>
              </ul>
            </p>
            <p>Each master element has a unique id attribute, by which it can be referenced In other elements of the file. This allows describing the samples and targets only once in the file and then reference them in the reactions in a qPCR plate using the respective ids. We suppose that a laboratory will research only some targets and therefore will be able to provide this information once. The software should allow to extract all the master elements (except the experiment element) from one other file when creating a new file and thereby does not require the user to fill in all this information by hand.</p>
            <p>In an RDML file the concept of a sample is an absolutely identical template solution at the moment of adding it to the qPCR reaction. Therefore, different dilutions (e.g. serial dilutions of a standard curve) require different ids. The only exception would be technical replicates, which would be considered one sample because they are all made using the solution from one stock. Also different dilutions would require different ids, because the solutions are at the moment of adding to the qPCR reaction of different concentration. We suggest adding the concentration to the id and making it thereby unique (e.g. STDsample-100).</p>
            <p>The concept of a target is the primer (and probe) mix added to the sample to specifically amplify the template target. Targets need to refer to dyes. Identical targets using different dyes are considered different and require different target ids. We suggest adding the dye to the target name (e.g. Actin_FAM and Actin_Cy5).</p>
            <p>Thermal cycling conditions allow describing the steps a thermocycler goes through to amplify the DNA. It is a very flexible way to model all programs. It can also be used to describe a regular PCR or a cDNA synthesis program.</p>
            <p>The experiment contains the data collected during one or more qPCR runs. Each run contains one or more qPCR reactions. Each reaction contains one sample (which is referred to by its id) and one or more data elements (one for each target (also referred by its id)). Multiple data elements are only required for a multiplex reaction, in which several targets are simultaneously measured (using different dyes). If the reactions are measured in different runs, the data should be stored as separate runs. The data elements require a Cq value and can optionally contain the recorded fluorescence values. The raw (non-background corrected) fluorescence data should include instrument related corrections except for baseline/background correction (in order to allow alternative background correction or Cq value determination methods to be used for re-evaluation). In other words, correction for empty wells and corrections for the loading (as for example using a passive reference dye) are calculated into these fluorescence values according to the qPCR instrument software algorithm (which is trusted to be good). Importantly, the RDML file aims to contain data that is comparable across all instruments instead of matching instrument specific data and correction approaches.</p>
            <p>The documentation elements constitute the multi-purpose documentation system in an RDML file. Such an element is basically a text field that has an unique id. From many places in the RDML file, a reference can be made to these document element ids, which makes it very versatile and  allows to document almost everything. If for example some samples were treated differently, the difference can be described in a documentation element and reference in the samples. Each sample can have an unlimited number of these elements and because they are referenced by id, the file remains small, even if e.g. a long description is used for all samples. The use of documentation elements is not only limited to samples, it can be used at various places in an RDML file. Some elements have also  description strings. These strings are unique to the element and should be used if the description is only required to a few elements.</p>
            <p>Please be aware that the strings in an RDML file should be in the unicode format utf-8.</p>
            <h5>RDML File Compression and File extensions</h5>
            <p>The xml file containing the RDML compliant data should be stored in a file named rdml_data.xml. This file should be compressed using pkzip compatible compression into an archive. The archive can have any name, but instead of having the extension .zip it should have the extension .rdml (preferably) or .rdm.</p>
            <p>RDML compatible software should be able to read compressed .rdml or .rdm files as well as uncompressed .xml files.</p>
            <p>The XML file should be encoded in UTF-8, \n should be used as newline character and a point "." as decimal separator.</p>
            <p>XML is used to be human readable. All id strings in the file should be unique short names as provided by the user. Do not use random generated strings as ids, as they should be displayed to the user for example to identify different samples.</p>
            <p>If several strings have to be combined, use a ";" semicolon as separator. This is required for example in the "excl" element in the "data" section of the "react": The different reasons for exclusion have to be separated by ";" semicolons. Do not set the value to "false" if it should be included, just do not set this element.</p>
          </div>

          <h5>Changes from v1.1 to v1.2<a href="files/docs/changelog_v1_2.pdf" target="_blank" class="text-info float-right"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></h5>
          <p class="text-danger">The files below are compliant with the RDML v1.2 Recommendation (October 2, 2014)</p>
          <div class="row">
            <div class="col-6">
              <p><u>Overview</u></p>
              <a href='files/imgs/rdml_overview_1_2_large.png' target="_blank"><img src="files/imgs/rdml_overview_1_2_small.png" class="w-75"/></a>
            </div>
            <div class="col-6">
              <p><u>Schema</u></p>
              <div class="row">
                <div class="col-1">
                  <a href="files/docs/RDML_v1_2_REC.xsd" target="_blank" class="text-info"><i class="fa fa-file-code-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/docs/RDML_v1_2_REC.xsd" target="_blank" class="text-dark">RDML schema</a>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-1">
                  <a href="files/imgs/RDML_v1_2_REC.png" target="_blank" class="text-info"><i class="fa fa-file-image-o fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="col-11">
                  <a href="files/imgs/RDML_v1_2_REC.png" target="_blank" class="text-dark">Graphical view of the RDML schema</a>
                </div>
              </div>
            </div>
          </div>
<?php
    }
  }
?>
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
