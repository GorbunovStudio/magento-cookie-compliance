<?php
class Magecomp_Cookiecompliance_Block_Adminhtml_System_Config_Editor extends Mage_Adminhtml_Block_System_Config_Form_Field implements Varien_Data_Form_Element_Renderer_Interface{
   protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element){
	   $element->setWysiwyg(true);
	   $wysiwyg_config = Mage::getSingleton('cms/wysiwyg_config')->getConfig(
    	array(
		       'add_widgets' => false,
       	 	   'add_variables' => false,
		       'add_images' => true,
		       'files_browser_window_url'=> $this->getBaseUrl() . 'admin/cms_wysiwyg_images/index/',
            ));
		$element->setConfig($wysiwyg_config);
        return parent::_getElementHtml($element);
    }
	protected function _prepareLayout()
	{
		$this->getLayout()->getBlock('head')->setCanLoadExtJs(true);       
		$this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
		$head = $this->getLayout()->getBlock('head');
				$head->addItem('js','lib/uploader/flow.min.js')
						->addItem('js','lib/uploader/fusty-flow.js')
						->addItem('js','lib/uploader/fusty-flow-factory.js')
							->addItem('js','mage/adminhtml/uploader/instance.js')
					   ->addItem('js', 'prototype/window.js')
					  ->addItem('js_css', 'prototype/windows/themes/default.css')
					  ->addCss('lib/prototype/windows/themes/magento.css')
					  ->addItem('js', 'mage/adminhtml/variables.js')
					  ->addItem('js','lib/flex.js')
					  ->addItem('js','lib/FABridge.js')
					  ->addItem('js','mage/adminhtml/flexuploader.js')
					  ->addItem('js','mage/adminhtml/browser.js');
		
		
		return parent::_prepareLayout();
    }
}