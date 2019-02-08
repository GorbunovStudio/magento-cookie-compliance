<?php

class Magecomp_Cookiecompliance_Model_Config_Position
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'top', 'label' => 'Top'),
            array('value' => 'bottom', 'label' => 'Bottom'),
			array('value' => 'top-left', 'label' => 'Top Left'),
			array('value' => 'top-right', 'label' => 'Top Right'),
			array('value' => 'bottom-left', 'label' => 'Bottom Left'),
			array('value' => 'bottom-right', 'label' => 'Bottom Right'),
        );
    }
}
