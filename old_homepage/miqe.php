<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="files/imgs/favicon.ico">

    <title>MIQE</title>

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
          <li class="nav-item active">
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
        <div class="col-12 text-justify">
          <h5>MIQE: Minimum Information for Publication of Quantitative Real-Time PCR Experiments</h5>
          <p>The RDML file format is a recommended element in the Minimum Information for Publication of Quantitative Real-Time PCR Experiments (MIQE) guidelines (<a href="clinchem.2008.112797v1.pdf" target="_blank" class="text-info">Bustin et al., Clinical Chemistry, 2009</a>).</p>
          <p>The aim of MIQE, coordinated by a group of research-active scientists and coordinated under the umbrella of <a href="http://www.mibbi.org" target="_blank" class="text-info">MIBBI</a> (Minimum Information for Biological and Biomedical Investigations) is to provide authors, reviewers and editors specifications for the minimum information that must be reported for a qPCR experiment in order to ensure its relevance, accuracy, correct interpretation and repeatability. A checklist, which should be submitted along with the paper, is available for authors in preparing a manuscript employing qPCR</p>
          <div class="row pb-2">
            <div class="col-1">
              <a href="files/docs/clinchem.2008.112797v1.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="col-11">Download the MIQE paper</div>
          </div>
          <div class="row pb-2">
            <div class="col-1">
              <a href="files/docs/MIQE_checklist.xls" target="_blank" class="text-info pr-2"><i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i></a><a href="files/docs/MIQE_checklist.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="col-11">Download the MIQE checklist</div>
          </div>
          <div class="row mb-5">
            <div class="col-1">
              <a href="files/docs/20090325_Letter-to-Editors.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="col-11">Letter to Editors inviting them to adopt the MIQE standard for their papers</div>
          </div>
          <h6>Checklist for Quantitative PCR Assays</h6>
          <figure class="figure">
            <table class="table table-responsive table-sm table-bordered">
              	<thead>
                	<tr>
	                  	<th class="text-center">Item to check</th>
						<th class="text-center">Importance</th>
                	</tr>
              	</thead>
				<tbody>
					<tr class="table-inverse">
						<td colspan="2">Experimental design</td>
					</tr>
					<tr>
						<td>Definition of experimental and control groups</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>Number within each group</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Assay carried out by core lab or investigator's lab?</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-secondary">
						<td>Acknowledgement of authors' contributions</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-inverse">
						<td colspan="2">Sample</td>
					</tr>
					<tr>
						<td>Description</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Volume/mass of sample processed</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td class="pl-5">Microdissection or macrodissection</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>Processing procedure</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5">If frozen - how and how quickly?</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">If fixed - with what, how quickly?</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Sample storage conditions and duration (especially for FFPE samples)</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-inverse">
						<td colspan="2">Nucleic acid extraction</td>
					<tr class="table-secondary">
						<td>Procedure and/or instrumentation</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5">Name of kit and details of any modifications</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Source of additional reagents used</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>Details of DNase or RNase treatment</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>Contamination assessment (DNA or RNA)</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Nucleic acid quantification</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Instrument and method</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5">Purity (A260/A280)</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Yield</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>RNA integrity method/instrument</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">RIN/RQI or Cq of 3' and 5' transcripts</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5">Electrophoresis traces</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-secondary">
						<td>Inhibition testing (Cq dilutions, spike or other)</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-inverse">
						<td colspan="2">Reverse transcription</td>
					</tr>
					<tr>
						<td>Complete reaction conditions</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Amount of RNA and reaction volume</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5">Priming oligonucleotide (if using GSP) and concentration</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Reverse transcriptase and concentration</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5">Temperature and time</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Manufacturer of reagents and catalogue numbers</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>Cqs with and without RT</td>
						<td class="text-center">D*</td>
					</tr>
					<tr class="table-secondary">
						<td>Storage conditions of cDNA</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-inverse">
						<td colspan="2">qPCR target information</td>
					<tr>
						<td>If multiplex, efficiency and LOD of each assay</td>
						<td class="text-center">E</td>
					</tr> 
					<tr class="table-secondary">
						<td>Sequence accession number</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Location of amplicon</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Amplicon length</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5"><span class="font-italic">In silico</span> specificity screen (BLAST, etc)</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Pseudogenes, retropseudogenes or other homologs?</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td class="pl-5">Sequence alignment</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Secondary structure analysis of amplicon</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>Location of each primer by exon or intron (if applicable)</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">What splice variants are targeted?</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-inverse">
						<td colspan="2">qPCR oligonucleotides</td>
					<tr>
						<td>Primer sequences</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>RTPrimerDB identification number</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>Probe sequences</td>
						<td class="text-center">D**</td>
					</tr>
					<tr class="table-secondary">
						<td>Location and identity of any modifications</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Manufacturer of oligonucleotides</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-secondary">
						<td>Purification method</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-inverse">
						<td colspan="2">qPCR protocol</td>
					<tr>
						<td>Complete reaction conditions</td>
						<td class="text-center">E</td>
					</tr>   
					<tr class="table-secondary">
						<td class="pl-5" class="pl-5">Reaction volume and amount of cDNA/DNA</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5" class="pl-5">Primer, (probe), Mg++ and dNTP concentrations</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5" class="pl-5">Polymerase identity and concentration</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5" class="pl-5">Buffer/kit identity and manufacturer</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5" class="pl-5">Exact chemical constitution of the buffer</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td class="pl-5" class="pl-5">Additives (SYBR Green I, DMSO, etc.)</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>Manufacturer of plates/tubes and catalog number</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>Complete thermocycling parameters</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>Reaction setup (manual/robotic)</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>Manufacturer of qPCR instrument</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-inverse">
						<td colspan="2">qPCR validation</td>
					<tr class="table-secondary">
						<td>Evidence of optimisation (from gradients)</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>Specificity (gel, sequence, melt, or digest)</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>For SYBR Green I, Cq of the NCT</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Standard curves with slope and y-intercept</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">PCR efficiency calculated from slope</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5">Confidence interval for PCR efficiency or standard error</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">r2 of standard curve</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Linear dynamic range</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Cq variation at lower limit</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5">Confidence intervals throughout range</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-secondary">
						<td>Evidence for limit of detection</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>If multiplex, efficiency and LOD of each assay</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-inverse">
						<td colspan="2">Data analysis</td>
					<tr class="table-secondary">
						<td>qPCR analysis program (source, version)</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td class="pl-5">Cq method determination</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td class="pl-5">Outlier identification and disposition</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Results of NTCs</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>Justification of number and choice of reference genes</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Description of normalisation method</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>Number and concordance of biological replicates</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>Number and stage (RT or qPCR) of technical replicates</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>Repeatability (intra-assay variation)</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Reproducibility (inter-assay variation, %CV)</td>
						<td class="text-center">D</td>
					</tr>
					<tr class="table-secondary">
						<td>Power analysis</td>
						<td class="text-center">D</td>
					</tr>
					<tr>
						<td>Statistical methods for result significance</td>
						<td class="text-center">E</td>
					</tr>
					<tr class="table-secondary">
						<td>Software (source, version)</td>
						<td class="text-center">E</td>
					</tr>
					<tr>
						<td>Cq or raw data submission using RDML</td>
						<td class="text-center">D</td>
					</tr>
				</tbody>
            </table>
            <figcaption class="figure-caption text-justify">
              <p><span class="font-weight-bold">Table 1.</span> MIQE checklist for authors, reviewers and editors. All essential information (E) must be submitted with the manuscript.  Desirable information (D) should be submitted if available. If using primers obtained from RTPrimerDB, information on qPCR target, oligonucleotides, protocols and validation is available from that source.</p>
              <p>*: Assessing the absence of DNA using a no RT assay is essential when first extracting RNA. Once the sample has been validated as RDNA-free, inclusion of a no-RT control is desirable, but no longer essential.</p> 
              <p>**: Disclosure of the probe sequence is highly desirable and strongly encouraged. However, since not all commercial pre-designed assay vendors provide this information, it cannot be an essential requirement. Use of such assays is advised against.</p>
            </figcaption>
          </figure>
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
