<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="files/imgs/favicon.ico">

    <title>News</title>

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
          <li class="nav-item active">
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
        <!-- <div class="col-1"></div>
        <div class="col-3"></div>
        <div class="col-8"></div> -->
        <div class="col-12">
          <table class="table table-responsive">
            <tbody>
              <tr class="table-light">
                <th scope="row">2017</th>
                <td>June 12</td>
                <td></td>
                <td><span class="font-italic">"rdml: A Mathematica package for parsing and importing Real-Time qPCR data"</span> by Magno, Duarte, Andrade and Palmeirim in <a href="https://bmcresnotes.biomedcentral.com/articles/10.1186/s13104-017-2533-9" target="_blank" class="text-info">BMC Research Notes</a></td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">2015</th>
                <td>June 20</td>
                <td><a href="http://www.biomedcentral.com/content/pdf/s12859-015-0637-6.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td><span class="font-italic">"RDML-Ninja and RDMLdb for standardized exchange of qPCR data"</span> in BMC Bioinformatics</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row"></th>
                <td>March 25</td>
                <td><a href="files/docs/Freising_Untergasser_RDML_2015.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td><span class="font-italic">"RDML Data Format - Ready For The Next Level?"</span> by Andreas Untergasser at the 7th international qPCR & NGS Event, Freising, Germany</td>
              </tr>
              <tr class="table-light">
                <th scope="row">2014</th>
                <td>October 2</td>
                <td></td>
                <td>RDML version 1.2 is released. Find out <a href="files.php" class="text-info">what's new</a></td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>October 1</td>
                <td></td>
                <td>The 2009 RDML paper (Lefever et al.) hit the 85 citation mark today according to <a href="http://scholar.google.be/scholar?cites=5589601804129054120&as_sdt=2005&sciodt=0,5&hl=en" target="_blank" class="text-info">Google Scholar</a></td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>September 30</td>
                <td></td>
                <td>RDML package for R added to the Tools section (RDML compliant software)</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>August 26</td>
                <td></td>
                <td>RDMLdb database for qPCR data files in RDML format added to the Tools section (RDML compliant software)</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">2013</th>
                <td>March 18</td>
                <td></td>
                <td><span class="font-italic"><a href="http://www.econferences.de/four-years-of-rdml-qpcr-data-format-achievements-and-opportunities/" target="_blank" class="text-info">"Four years of RDML qPCR data format - Achievements and Opportunities"</a></span> by Andreas Untergasser</td>
              </tr>
              <tr class="table-light">
                <th scope="row">2012</th>
                <td>April 24</td>
                <td><a href="files/docs/LinRegPCR-qbasePLUS.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td>Biogazelle and LinRegPCR established a data analysis pipeline from LinRegPCR to qbase+ based on the RDML format</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">2011</th>
                <td>November 29</td>
                <td></td>
                <td>Roche announced that the instrument software of the LightCycler96 is now RDML v1.1 compliant</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row"></th>
                <td>March 18</td>
                <td><a href="files/docs/miqe_2011_03_18.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td><span class="font-italic"><a href="http://www.clinchem.org/content/57/6/919.long" target="_blank" class="text-info">"Primer Sequence Disclosure: A Clarification of the MIQE Guidelines"</a></span> in Clinical Chemistry</td>
              </tr>
              <tr class="table-light">
                <th scope="row">2010</th>
                <td>September 21</td>
                <td><a href="files/docs/miqe_precis_2010_09_21.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td><a href="http://blogs.biomedcentral.com/on-biology/2010/09/21/miqe-precis-with-reference-to-reference-genes/" target="_blank" class="text-info">BioMed Central series journals</a> require adherence to minimal guidelines</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>September 1</td>
                <td></td>
                <td>Nucleic Acids Research recommends the <a href="http://www.oxfordjournals.org/our_journals/nar/for_authors/ed_policy.html" target="_blank" class="text-info">MIQE guidelines</a> to its authors</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>April 1</td>
                <td></td>
                <td><span class="font-italic"><a href="http://www.dddmag.com/article-Documenting-Real-Time-PCR-41310.aspx" target="_blank" class="text-info">"Documenting real-time PCR"</a></span> in Drug Discovery & Development</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>March 22</td>
                <td></td>
                <td>Step up to the <a href="http://www.biosciencetechnology.com/White-Papers/2010/03/Step-up-to-the-MIQE-Bio-Rad/" target="_blank" class="text-info">MIQE</a></td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>January 22</td>
                <td></td>
                <td>Publishing Data that conform to the <a href="http://www.biosciencetechnology.com/Application-Notes/2010/01/PCR-A-Practical-Approach-to-qPCR-Bio-Rad/" target="_blank" class="text-info">MIQE guidelines</a></td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">2009</th>
                <td>August 1</td>
                <td></td>
                <td>PCR Technology Review: <span class="font-italic"><a href="http://www.genengnews.com/gen-articles/pcr-technology-review-standardization-of-qpcr-and-rt-qpcr/2992/" target="_blank" class="text-info">"Standardization of qPCR and RT-qPCR"</a></span> in Genetic Engineering & Biotechnology News (Vol. 29, No. 14)</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row"></th>
                <td>May 29</td>
                <td></td>
                <td>Genome web article <span class="font-italic"><a href="http://www.genomeweb.com/dxpgx/qpcr-grows" target="_blank" class="text-info">"qPCR grows up"</a></span> reporting on MIQE and RDML</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row"></th>
                <td>March 27</td>
                <td><a href="files/docs/clinchem.2008.112797v1.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td><span class="font-italic">"The MIQE Guidelines: Minimum Information for Publication of Quantitative Real-Time PCR Experiments"</span> is published by Bustin et al. in Clinical Chemistry</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row"></th>
                <td>March 11</td>
                <td><a href="files/docs/RDML_Freising_2009.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td>Steve Lefever presents RDML at the <a href="http://www.qpcr2009.net/" target="_blank" class="text-info">4th International qPCR Symposium</a> ,Freising, Germany</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row"></th>
                <td>February 17</td>
                <td></td>
                <td><span class="font-italic">"RDML: structured language and reporting guidelines for real-time quantitative PCR data"</span> is published by Lefever, Hellemans et al. in <a href="http://nar.oxfordjournals.org/cgi/content/abstract/gkp056" target="_blank" class="text-info">Nucleic Acids Reseach</a></td>
              </tr>
              <tr class="table-secondary">
                <th scope="row"></th>
                <td>January 31</td>
                <td></td>
                <td>Release of RDML Recommendation v1.0</td>
              </tr>
              <tr class="table-light">
                <th scope="row">2008</th>
                <td>December 3</td>
                <td><a href="files/docs/Eur_Pharm_Rev_2008_Bustin.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td>Stephen Bustin's paper in European Pharmaceutical Review has a great figure depicting RDML as an essential component of a reliable qPCR assay [<a href="files/imgs/bustin.png" target="_blank" class="text-info">high quality figure</a>]</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>October 6</td>
                <td></td>
                <td>Filip Pattyn presents RDML at the <a href="http://www.beneluxqpcrsymposium.org" target="_blank" class="text-info">1st Benelux qPCR Symposium, Ghent, Belgium</a></td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>August 7</td>
                <td><a href="http://www.nature.com/nbt/journal/v26/n8/pdf/nbt.1411.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td>The MIBBI project paper is published in Nature Biotechnology. MIqPCR is one of the 21 official Minimal Information checklists</a></td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>May 14</td>
                <td></td>
                <td>Professor Stephen Bustin (London, UK) puts <span class="font-italic"><a href="http://topics.scirus.com/qPCR_Assay_Quality_assessment.html# " target="_blank" class="text-info">RDML and MIBBI as part of the solution for the current lack of qPCR Assay Quality assessment</a></span></td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>April 20-23</td>
                <td><a href="files/docs/RDML_poster_CHI_qPCR_meeting_2008.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td>Jo Vandesompele presents RDML at the <a href="http://www.healthtech.com/qpc/overview.aspx" target="_blank" class="text-info">CHIs 4th Annual Quantitative PCR: Getting the Basics Right</a>, San Diego, USA</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>April 1</td>
                <td><a href="files/docs/EBN3-4_08_RDML.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td><span class="font-italic">"A new standard for qPCR data: RDML"</span> in European Biotechnology News (Issue 03-04/2008)</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>April 1</td>
                <td><a href="files/docs/LW2_08_RMDL.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td><span class="font-italic">"PCR-Standardisierung: RDML - neuer Standard für qPCR-Daten"</span> in Laborwelt (Nr.2/2008, 9. Jahrgang)</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>April 1</td>
                <td></td>
                <td>RDML joins <a href="http://www.mibbi.org/" target="_blank" class="text-info">MIBBI</a></td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>January 1</td>
                <td></td>
                <td>Birth of the RDML consortium and new website</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">2007</th>
                <td>March 26-30</td>
                <td><a href="files/docs/RDML_Freising_2007.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td>Jan Hellemans moderates the RDML discussion at the <a href="http://qpcr2007.gene-quantification.info/" target="_blank" class="text-info">3rd International qPCR Symposium</a>, Freising-Weihenstephan, Germany</td>
              </tr>
              <tr class="table-light">
                <th scope="row">2005</th>
                <td>October 1</td>
                <td></td>
                <td>RDML website and discussion forum online</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>September 5-7</td>
                <td><a href="files/docs/RDML_Freising_2005.pdf" target="_blank" class="text-info"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                <td>Jan Hellemans presents RDML at the <a href="http://qpcr2005.gene-quantification.info/" target="_blank" class="text-info">2nd International qPCR Symposium</a>, Freising-Weihenstephan, Germany</td>
              </tr>
              <tr class="table-light">
                <th scope="row"></th>
                <td>July 1</td>
                <td></td>
                <td>Jan Hellemans and Jo Vandesompele start the RDML initiative</td>
              </tr>
            </tbody>
          </table>
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