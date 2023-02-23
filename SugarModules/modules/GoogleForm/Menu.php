<?php

 if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;
 
if(ACLController::checkAccess('GoogleForm', 'edit', true)){
    $module_menu[]=array('index.php?module=GoogleForm&action=EditView&return_module=GoogleForm&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'GoogleForm');
}
if(ACLController::checkAccess('GoogleForm', 'list', true)){
    $module_menu[]=array('index.php?module=GoogleForm&action=index&return_module=GoogleForm&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'GoogleForm');
}
