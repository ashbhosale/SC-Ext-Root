<?php

class partial_Order_FormFields_2b7be9a30c41c0b29091b2d6dbcd3686960b0f68 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
    2 => NULL,
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'h' => 
  array (
    0 => 'OrderExt\\Orderext\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<label for="sendername">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'tx_orderext_domain_model_order.sendername';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['name'] = NULL;
$arguments3['value'] = NULL;
$arguments3['property'] = NULL;
$arguments3['autofocus'] = NULL;
$arguments3['disabled'] = NULL;
$arguments3['maxlength'] = NULL;
$arguments3['readonly'] = NULL;
$arguments3['size'] = NULL;
$arguments3['placeholder'] = NULL;
$arguments3['pattern'] = NULL;
$arguments3['errorClass'] = 'f3-form-error';
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['required'] = false;
$arguments3['type'] = 'text';
$arguments3['property'] = 'sendername';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '<br />
<label for="senderaddress">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['key'] = 'tx_orderext_domain_model_order.senderaddress';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['autofocus'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['maxlength'] = NULL;
$arguments7['readonly'] = NULL;
$arguments7['size'] = NULL;
$arguments7['placeholder'] = NULL;
$arguments7['pattern'] = NULL;
$arguments7['errorClass'] = 'f3-form-error';
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['required'] = false;
$arguments7['type'] = 'text';
$arguments7['property'] = 'senderaddress';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '<br />
<label for="orderpickupdate">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['key'] = 'tx_orderext_domain_model_order.orderpickupdate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['name'] = NULL;
$arguments11['value'] = NULL;
$arguments11['property'] = NULL;
$arguments11['autofocus'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['maxlength'] = NULL;
$arguments11['readonly'] = NULL;
$arguments11['size'] = NULL;
$arguments11['placeholder'] = NULL;
$arguments11['pattern'] = NULL;
$arguments11['errorClass'] = 'f3-form-error';
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['required'] = false;
$arguments11['type'] = 'text';
$arguments11['property'] = 'orderpickupdate';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('order.orderpickupdate', $array15);
};
$arguments13 = array();
$arguments13['date'] = NULL;
$arguments13['format'] = '';
$arguments13['base'] = NULL;
$renderChildrenClosure14 = $arguments13['date'] ? function() use ($arguments13) { return $arguments13['date']; } : $renderChildrenClosure14;$arguments11['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '<br />
<label for="orderdetails">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['key'] = NULL;
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['htmlEscape'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['key'] = 'tx_orderext_domain_model_order.orderdetails';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output0 .= '
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['name'] = NULL;
$arguments18['value'] = NULL;
$arguments18['property'] = NULL;
$arguments18['autofocus'] = NULL;
$arguments18['disabled'] = NULL;
$arguments18['maxlength'] = NULL;
$arguments18['readonly'] = NULL;
$arguments18['size'] = NULL;
$arguments18['placeholder'] = NULL;
$arguments18['pattern'] = NULL;
$arguments18['errorClass'] = 'f3-form-error';
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['required'] = false;
$arguments18['type'] = 'text';
$arguments18['property'] = 'orderdetails';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '<br />
<label for="receivername">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['key'] = 'tx_orderext_domain_model_order.receivername';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output0 .= '
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['autofocus'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['maxlength'] = NULL;
$arguments22['readonly'] = NULL;
$arguments22['size'] = NULL;
$arguments22['placeholder'] = NULL;
$arguments22['pattern'] = NULL;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['required'] = false;
$arguments22['type'] = 'text';
$arguments22['property'] = 'receivername';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output0 .= '<br />
<label for="receiveraddress">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['key'] = NULL;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['key'] = 'tx_orderext_domain_model_order.receiveraddress';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output0 .= '
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['property'] = NULL;
$arguments26['autofocus'] = NULL;
$arguments26['disabled'] = NULL;
$arguments26['maxlength'] = NULL;
$arguments26['readonly'] = NULL;
$arguments26['size'] = NULL;
$arguments26['placeholder'] = NULL;
$arguments26['pattern'] = NULL;
$arguments26['errorClass'] = 'f3-form-error';
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['required'] = false;
$arguments26['type'] = 'text';
$arguments26['property'] = 'receiveraddress';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '<br />
<label for="orderdeliverydate">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['key'] = 'tx_orderext_domain_model_order.orderdeliverydate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output0 .= '
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['name'] = NULL;
$arguments30['value'] = NULL;
$arguments30['property'] = NULL;
$arguments30['autofocus'] = NULL;
$arguments30['disabled'] = NULL;
$arguments30['maxlength'] = NULL;
$arguments30['readonly'] = NULL;
$arguments30['size'] = NULL;
$arguments30['placeholder'] = NULL;
$arguments30['pattern'] = NULL;
$arguments30['errorClass'] = 'f3-form-error';
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$arguments30['required'] = false;
$arguments30['type'] = 'text';
$arguments30['property'] = 'orderdeliverydate';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('order.orderdeliverydate', $array34);
};
$arguments32 = array();
$arguments32['date'] = NULL;
$arguments32['format'] = '';
$arguments32['base'] = NULL;
$renderChildrenClosure33 = $arguments32['date'] ? function() use ($arguments32) { return $arguments32['date']; } : $renderChildrenClosure33;$arguments30['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '<br />
';

return $output0;
}


}
#