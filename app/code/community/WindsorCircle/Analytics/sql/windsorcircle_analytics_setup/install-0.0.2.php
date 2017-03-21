<?php
$this->startSetup();
$entity = $this->getEntityTypeId('customer');
  
/* create the new attribute */
$this->addAttribute($entity, 'is_aliased', array(
		'type' => 'text',				/* input type */
		'label' => 'Aliased',	/* Label for the user to read */
		'input' => 'text',				/* input type */
		'visible' => FALSE,				/* users can see it */
		'required' => FALSE,			/* is it required, self-explanatory */
		'default_value' => 'default',	/* default value */
		'adminhtml_only' => '1'			/* use in admin html only */
));
 
/* save the setup */
$this->endSetup();
