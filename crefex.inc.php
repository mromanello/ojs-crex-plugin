<?php 
import('classes.plugins.GenericPlugin'); 
class crefexPlugin extends GenericPlugin { 
    function register($category, $path) { 
        if (parent::register($category, $path)) { 
            HookRegistry::register('TemplateManager::display',array(&$this, 'callback')); 
            return true; 
        } 
        return false; 
    } 
    function getName() { 
        return 'CRefExPlugin'; 
    } 
    function getDisplayName() { 
        return 'CRefEx Plugin'; 
    } 
    function getDescription() { 
        return 'Integrates CRefEx into OJS'; 
    } 
    function callback($hookName, $args) { 
        $templateMgr =& $args[0]; 
        $template =& $args[1]; 
        $output =& $args[4]; 
        #$output = $templateMgr;
        if($template==='article/article.tpl'){
        	#die($output);
        }
        $templateMgr->addJavascript($this->getPluginPath() . '/grab.js');
        
        #return true;
        return false;
    } 
} 
?>