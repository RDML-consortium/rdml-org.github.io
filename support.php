<?php
  include_once("functions.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="files/imgs/favicon.ico">

    <title>Join</title>

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
          <li class="nav-item dropdown active">
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
  $name = $_POST["name"];
  $email = strtolower($_POST["email"]);
  $function = $_POST["function"];
  $institute_company = $_POST["institute_company"];
  $city = $_POST["city"];
  $country = $_POST["country"];
  $date=date("Y-m-d");
  if (isset($_POST['name']) && $_POST['name'] != '') {

    $name_slashed = addslashes($_POST['name']);
    $email_slashed = addslashes($_POST["email"]);
    $institute_company_slashed = addslashes($_POST["institute_company"]);
    $country_slashed = addslashes($_POST["country"]);
    $city_slashed = addslashes($_POST["city"]);
    $function_slashed = addslashes($_POST["function"]);
    $supporter = addslashes($_POST["supporter"]);
    $insert_query="INSERT INTO rdml_supporters (date,name,email,institute_company,country,function,city,consortium) VALUES ('$date','$name_slashed','$email_slashed','$institute_company_slashed','$country_slashed','$function_slashed','$city_slashed','$supporter')";

   
    $credentials = read_credentials('config.xml');
    $conn = connect_db($credentials);

    if (mysqli_query($conn,$insert_query)){
      echo 'Insert successful';
    } else {
      die(mysql_error());
    }
    mysqli_close($conn);

  }
?>
      <div class="row">
        <div class="col-12 mb-3">
          <div class="alert alert-success" role="alert" id="banner_succes">
            <a href="#" class="close" data-dismiss="alert">&times;</a>Thank you for your support. You will be notified of changes or updates.
          </div>
          <div class="alert alert-danger" role="alert" id="banner_fail">
            <a href="#" class="close" data-dismiss="alert">&times;</a>Please correct the errors in your form and try again</a>.
          </div>
          <p>If you support the need and concept of <a href="index.php" class="text-info">RDML</a>, please complete this form.<br>While we welcome any support, please have your supervisor or director complete this form for you (if possible).</p>
        </div>
      </div>
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <form method="POST" action="support.php" id="support_form" novalidate>
            <div class="form-group row">
              <label for="name" class="col-3 col-form-label">Name</label>
              <div class="col-9">
                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Name" required>
                <div class="invalid-feedback">Please provide a valid name</div>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-3 col-form-label">Email address</label>
              <div class="col-9">
                <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Email address" required>
                <div class="invalid-feedback">Please provide a valid email address</div>
                <small id="emailHelp" class="form-text text-muted text-right">Email address will not be made public</small>
              </div>
            </div>
            <div class="form-group row">
              <label for="institute_company" class="col-3 col-form-label">Institute or company</label>
              <div class="col-9">
                <input type="text" class="form-control form-control-sm" id="institute_company" name="institute_company" placeholder="Institute or company" required>
                <div class="invalid-feedback">Please provide a valid institue or company</div>
              </div>
            </div>
            <div class="form-group row">
              <label for="function" class="col-3 col-form-label">Job function - Position - Title</label>
              <div class="col-9">
                <input type="text" class="form-control form-control-sm" id="function" name="function" placeholder="Job function - Position - Title" required>
                <div class="invalid-feedback">Please provide a valid job function</div>
              </div>
            </div>
            <div class="form-group row">
              <label for="city" class="col-3 col-form-label">City</label>
              <div class="col-9">
                <input type="text" class="form-control form-control-sm" id="city" name="city" placeholder="City" required>
                <div class="invalid-feedback">Please provide a valid city</div>
              </div>
            </div>
            <div class="form-group row">
              <label for="country" class="col-3 col-form-label">Country</label>
              <div class="col-9">
                <select class="form-control form-control-sm custom-select" id="country" name="country">
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium" selected>Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Bouvet Island">Bouvet Island</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Congo, Democratic Republic Of">Congo, Democratic Republic Of</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Ivory Coast">Ivory Coast</option>
                  <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="East Timor">East Timor</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Territories">French Southern Territories</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran">Iran</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea, Democratic Peoples Republic Of">Korea, Democratic Peoples Republic Of</option>
                  <option value="Korea, Republic Of">Korea, Republic Of</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Laos">Laos</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libya">Libya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia, Republic Of">Macedonia, Republic Of</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
                  <option value="Moldova">Moldova</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Palestinian Authority">Palestinian Authority</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russian Federation">Russian Federation</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="St. Helena">St. Helena</option>
                  <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syria</option>
                  <option value="Taiwan">Taiwan 
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States Of America">United States Of America</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican">Vatican</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                  <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                  <option value="Western Sahara">Western Sahara</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Yugoslavia">Yugoslavia</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="supporter" class="col-3 col-form-label">Type of memberschip</label>
              <div class="col-9">
                <select class="form-control form-control-sm custom-select" id="supporter" name="supporter">
                  <option value="supporter">Supporter</option>
                  <option value="member">Member</option>
                </select>
              </div>
            </div>
            <!-- <div class="form-group row">
              <div class="col-3"></div>
              <div class="col-1">
                <input id="num1" class="sum" type="text" name="num1" value="<?php //echo rand(1,4) ?>" readonly="readonly" >
              </div>
              <div class="col-1">
                +
              </div>
              <div class="col-1">
                <input id="num2" class="sum" type="text" name="num2" value="<?php //echo rand(5,9) ?>" readonly="readonly" >
              </div>
              <div class="col-1">
                =
              </div>
              <div class="col-5">
                <input type="text" class="form-control form-control-sm" id="captcha" name="captcha" maxlength="2" required>
                <div class="invalid-feedback">Incorrect value</div>
              </div>
            </div> -->
            <input class="btn btn-outline-secondary btn-sm" type="reset" value="Reset">
            <input class="btn btn-outline-secondary btn-sm pull-right submit_form" type="button" value="Submit" name="submit">
          </form>
        </div>
        <div class="col-2"></div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- User javascript -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/user.js"></script>
  </body>
</html>