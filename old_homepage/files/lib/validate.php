<?php

  include_once("pclzip.php");

  function validate_file($filename,$file) {
	$tmp_directory = "./tmp/";
  
	$return = NULL;
	
	$zip = new PclZip($file);
    if (($zip->extract(PCLZIP_OPT_PATH,$tmp_directory) == 0) || (($list = $zip->listContent()) == 0)) {
        $return .= "Error : ";
        $return .= $zip->errorInfo(true);
        $return .= "#";
        return $return;
    }

    $unzippedfilename = $tmp_directory.$list[0]["filename"];
	
	$xml = simplexml_load_file($unzippedfilename);
	
	if ($xml === false) {
		$return .= $unzippedfilename."#Ã";
		$return .= "Unable to parse file#";	
		return $return;
	}
	  
	$attributes = $xml->attributes();	
	$version = $attributes['version'];	
	$version = str_replace(".","_",$version);
	
	if ($version == "1_0") $schema = "RDML_v".$version."_REC.xsd";	
	if ($version == "1_1") $schema = "RDML_v".$version."_PR.xsd";
	if ($version == "1_2") $schema = "RDML_v".$version."_REC.xsd";
	
    libxml_use_internal_errors(true);

    $xml = new DOMDocument();
    $xml->load($unzippedfilename);
	
    $flag = true;	
    $flag = $xml->schemaValidate($schema);

    if (!$flag) {
	    $errors = libxml_get_errors();
		
		foreach ($errors as $error) {
			if ($error->line != 0) {
			    switch ($error->level) {
					case LIBXML_ERR_WARNING : $return .= "Warning : ";
						break;
					case LIBXML_ERR_ERROR : $return .= "Error : ";
						break;
					case LIBXML_ERR_FATAL : $return .= "Fatal Error : ";
						break;
				}
				
				$return .= trim($error->message);
				if ($error->file) $return .= " in ".$filename;
				$return .= " on line ".$error->line."#";
			}
		}
	
		libxml_clear_errors();
    }
	
	//@unlink($file);
	@unlink($unzippedfilename);

    return $return;
  }

?>
