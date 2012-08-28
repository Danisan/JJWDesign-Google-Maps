<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Jjwg_MapsViewQuick_Radius_Display extends SugarView {

  function Jjwg_MapsViewQuick_Radius_Display() {
    parent::SugarView();
  }
  
  function display() {
    
    global $sugar_config;
    global $currentModule;
    
    $url = 'index.php?module='.$currentModule.'&action=map_markers';
    foreach (array_keys($_REQUEST) as $key) {
      // Exclude certain request parameters
      if (!in_array($key, array('action', 'module', 'entryPoint', 'record', 'relate_id'))) {
        $url .= '&'.$key.'='.urlencode($_REQUEST[$key]);
      }
    }
    
?>
<h2><?php echo htmlspecialchars($_REQUEST['quick_address']); ?></h2>
<iframe src="<?php echo $url; ?>" 
	width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto"><p>Sorry, 
    your browser does not support iframes.</p></iframe>
<p>iframe: <a href="<?php echo htmlspecialchars($url); ?>"><?php echo $url; ?></a></p>

<?php

 	}
}

?>