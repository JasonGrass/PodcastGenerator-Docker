<?php
############################################################
# PODCAST GENERATOR
#
# Created by Alberto Betella
# http://www.podcastgenerator.net
# 
# This is Free Software released under the GNU/GPL License.
############################################################

########### Security code, avoids cross-site scripting (Register Globals ON)
if (isset($_REQUEST['GLOBALS']) OR isset($_REQUEST['absoluteurl']) OR isset($_REQUEST['amilogged']) OR isset($_REQUEST['theme_path'])) { exit; } 
########### End

### Check if user is logged ###
	if (!isUserLogged()) { exit; }
###

//Get the XML document loaded into a variable (The xml parser must be previously included)

if (file_exists($absoluteurl."components/podcastgen_languages/podcastgen_languages.xml")) {


	//$xml = file_get_contents(absoluteurl.'components/podcastgen_languages/podcastgen_languages.xml');

	//Set up the parser object
//	$parser = new XMLParser($xml);

	//Parse the XML file with categories data...
//	$parser->Parse();



$parser = simplexml_load_file($absoluteurl.'components/podcastgen_languages/podcastgen_languages.xml','SimpleXMLElement',LIBXML_NOCDATA);

}



?>