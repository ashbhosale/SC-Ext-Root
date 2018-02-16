<?php

class Order_action_list_d829ab790335be61d0de77c2503447893099c121 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>Listing for Orders</h1>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	<table  class="tx_orderext" >

		<div class="container">

			<table class="table table-bordered">
				<thead>
		<tr>

			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['key'] = 'tx_orderext_domain_model_order.sendername';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</th>
			<th>';
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

$output0 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['key'] = 'tx_orderext_domain_model_order.orderpickupdate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '</th>
			<th>';
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
$arguments9['key'] = 'tx_orderext_domain_model_order.orderdetails';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['key'] = 'tx_orderext_domain_model_order.receivername';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['key'] = 'tx_orderext_domain_model_order.receiveraddress';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output0 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['key'] = 'tx_orderext_domain_model_order.orderdeliverydate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '</th>
			
		</tr>

				</thead>
				<tbody>

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
			<tr>
				<td><span> ';
$array21 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.sendername', $array21)]);

$output20 .= '</span></td>
				<td><span> ';
$array22 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.senderaddress', $array22)]);

$output20 .= '</span></td>
				<td><span> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('order.orderpickupdate', $array25);
};
$arguments23 = array();
$arguments23['date'] = NULL;
$arguments23['format'] = '';
$arguments23['base'] = NULL;
$renderChildrenClosure24 = $arguments23['date'] ? function() use ($arguments23) { return $arguments23['date']; } : $renderChildrenClosure24;
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output20 .= '</span></td>
				<td><span> ';
$array26 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.orderdetails', $array26)]);

$output20 .= '</span></td>
				<td><span> ';
$array27 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.receivername', $array27)]);

$output20 .= '</span></td>
				<td><span> ';
$array28 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.receiveraddress', $array28)]);

$output20 .= '</span></td>
				<td><span> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('order.orderdeliverydate', $array31);
};
$arguments29 = array();
$arguments29['date'] = NULL;
$arguments29['format'] = '';
$arguments29['base'] = NULL;
$renderChildrenClosure30 = $arguments29['date'] ? function() use ($arguments29) { return $arguments29['date']; } : $renderChildrenClosure30;
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output20 .= '</span></td>

				<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments32 = array();
$arguments32['action'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['controller'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['pluginName'] = NULL;
$arguments32['pageUid'] = NULL;
$arguments32['pageType'] = 0;
$arguments32['noCache'] = false;
$arguments32['noCacheHash'] = false;
$arguments32['section'] = '';
$arguments32['format'] = '';
$arguments32['linkAccessRestrictedPages'] = false;
$arguments32['additionalParams'] = array (
);
$arguments32['absolute'] = false;
$arguments32['addQueryString'] = false;
$arguments32['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments32['addQueryStringMethod'] = NULL;
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['name'] = NULL;
$arguments32['rel'] = NULL;
$arguments32['rev'] = NULL;
$arguments32['target'] = NULL;
$arguments32['action'] = 'edit';
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['order'] = $renderingContext->getVariableProvider()->getByPath('order', $array35);
$arguments32['arguments'] = $array34;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output20 .= '</td>
				<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments36 = array();
$arguments36['action'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['controller'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['pluginName'] = NULL;
$arguments36['pageUid'] = NULL;
$arguments36['pageType'] = 0;
$arguments36['noCache'] = false;
$arguments36['noCacheHash'] = false;
$arguments36['section'] = '';
$arguments36['format'] = '';
$arguments36['linkAccessRestrictedPages'] = false;
$arguments36['additionalParams'] = array (
);
$arguments36['absolute'] = false;
$arguments36['addQueryString'] = false;
$arguments36['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments36['addQueryStringMethod'] = NULL;
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['name'] = NULL;
$arguments36['rel'] = NULL;
$arguments36['rev'] = NULL;
$arguments36['target'] = NULL;
$arguments36['action'] = 'delete';
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['order'] = $renderingContext->getVariableProvider()->getByPath('order', $array39);
$arguments36['arguments'] = $array38;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output20 .= '</td>
			</tr>
		';
return $output20;
};
$arguments17 = array();
$arguments17['each'] = NULL;
$arguments17['as'] = NULL;
$arguments17['key'] = NULL;
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$array19 = array (
);$arguments17['each'] = $renderingContext->getVariableProvider()->getByPath('orders', $array19);
$arguments17['as'] = 'order';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
				</tbody>
	</table>
		</div>
	</table>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return 'New Order';
};
$arguments40 = array();
$arguments40['action'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['controller'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['pluginName'] = NULL;
$arguments40['pageUid'] = NULL;
$arguments40['pageType'] = 0;
$arguments40['noCache'] = false;
$arguments40['noCacheHash'] = false;
$arguments40['section'] = '';
$arguments40['format'] = '';
$arguments40['linkAccessRestrictedPages'] = false;
$arguments40['additionalParams'] = array (
);
$arguments40['absolute'] = false;
$arguments40['addQueryString'] = false;
$arguments40['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments40['addQueryStringMethod'] = NULL;
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['name'] = NULL;
$arguments40['rel'] = NULL;
$arguments40['rev'] = NULL;
$arguments40['target'] = NULL;
$arguments40['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output42 = '';

$output42 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['name'] = NULL;
$arguments43['name'] = 'Default';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output42 .= '
<head>
	<meta http-equiv="cache-control" content="public">
</head>
This Template is responsible for creating a table of domain objects.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
Resources:
Private:
Templates:
List.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
	<h1>Listing for Orders</h1>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['queueIdentifier'] = NULL;
$arguments48['as'] = NULL;

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '

	<table  class="tx_orderext" >

		<div class="container">

			<table class="table table-bordered">
				<thead>
		<tr>

			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['key'] = 'tx_orderext_domain_model_order.sendername';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output47 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['htmlEscape'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['key'] = 'tx_orderext_domain_model_order.senderaddress';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output47 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['key'] = 'tx_orderext_domain_model_order.orderpickupdate';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output47 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['key'] = 'tx_orderext_domain_model_order.orderdetails';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output47 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['htmlEscape'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['key'] = 'tx_orderext_domain_model_order.receivername';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output47 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['htmlEscape'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['key'] = 'tx_orderext_domain_model_order.receiveraddress';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output47 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['htmlEscape'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['key'] = 'tx_orderext_domain_model_order.orderdeliverydate';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output47 .= '</th>
			
		</tr>

				</thead>
				<tbody>

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
			<tr>
				<td><span> ';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.sendername', $array68)]);

$output67 .= '</span></td>
				<td><span> ';
$array69 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.senderaddress', $array69)]);

$output67 .= '</span></td>
				<td><span> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$array72 = array (
);return $renderingContext->getVariableProvider()->getByPath('order.orderpickupdate', $array72);
};
$arguments70 = array();
$arguments70['date'] = NULL;
$arguments70['format'] = '';
$arguments70['base'] = NULL;
$renderChildrenClosure71 = $arguments70['date'] ? function() use ($arguments70) { return $arguments70['date']; } : $renderChildrenClosure71;
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output67 .= '</span></td>
				<td><span> ';
$array73 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.orderdetails', $array73)]);

$output67 .= '</span></td>
				<td><span> ';
$array74 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.receivername', $array74)]);

$output67 .= '</span></td>
				<td><span> ';
$array75 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('order.receiveraddress', $array75)]);

$output67 .= '</span></td>
				<td><span> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$array78 = array (
);return $renderingContext->getVariableProvider()->getByPath('order.orderdeliverydate', $array78);
};
$arguments76 = array();
$arguments76['date'] = NULL;
$arguments76['format'] = '';
$arguments76['base'] = NULL;
$renderChildrenClosure77 = $arguments76['date'] ? function() use ($arguments76) { return $arguments76['date']; } : $renderChildrenClosure77;
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output67 .= '</span></td>

				<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments79 = array();
$arguments79['action'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['controller'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['pluginName'] = NULL;
$arguments79['pageUid'] = NULL;
$arguments79['pageType'] = 0;
$arguments79['noCache'] = false;
$arguments79['noCacheHash'] = false;
$arguments79['section'] = '';
$arguments79['format'] = '';
$arguments79['linkAccessRestrictedPages'] = false;
$arguments79['additionalParams'] = array (
);
$arguments79['absolute'] = false;
$arguments79['addQueryString'] = false;
$arguments79['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments79['addQueryStringMethod'] = NULL;
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['name'] = NULL;
$arguments79['rel'] = NULL;
$arguments79['rev'] = NULL;
$arguments79['target'] = NULL;
$arguments79['action'] = 'edit';
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['order'] = $renderingContext->getVariableProvider()->getByPath('order', $array82);
$arguments79['arguments'] = $array81;

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output67 .= '</td>
				<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments83 = array();
$arguments83['action'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['controller'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['pluginName'] = NULL;
$arguments83['pageUid'] = NULL;
$arguments83['pageType'] = 0;
$arguments83['noCache'] = false;
$arguments83['noCacheHash'] = false;
$arguments83['section'] = '';
$arguments83['format'] = '';
$arguments83['linkAccessRestrictedPages'] = false;
$arguments83['additionalParams'] = array (
);
$arguments83['absolute'] = false;
$arguments83['addQueryString'] = false;
$arguments83['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments83['addQueryStringMethod'] = NULL;
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['name'] = NULL;
$arguments83['rel'] = NULL;
$arguments83['rev'] = NULL;
$arguments83['target'] = NULL;
$arguments83['action'] = 'delete';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['order'] = $renderingContext->getVariableProvider()->getByPath('order', $array86);
$arguments83['arguments'] = $array85;

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output67 .= '</td>
			</tr>
		';
return $output67;
};
$arguments64 = array();
$arguments64['each'] = NULL;
$arguments64['as'] = NULL;
$arguments64['key'] = NULL;
$arguments64['reverse'] = false;
$arguments64['iteration'] = NULL;
$array66 = array (
);$arguments64['each'] = $renderingContext->getVariableProvider()->getByPath('orders', $array66);
$arguments64['as'] = 'order';

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output47 .= '
				</tbody>
	</table>
		</div>
	</table>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return 'New Order';
};
$arguments87 = array();
$arguments87['action'] = NULL;
$arguments87['arguments'] = array (
);
$arguments87['controller'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['pluginName'] = NULL;
$arguments87['pageUid'] = NULL;
$arguments87['pageType'] = 0;
$arguments87['noCache'] = false;
$arguments87['noCacheHash'] = false;
$arguments87['section'] = '';
$arguments87['format'] = '';
$arguments87['linkAccessRestrictedPages'] = false;
$arguments87['additionalParams'] = array (
);
$arguments87['absolute'] = false;
$arguments87['addQueryString'] = false;
$arguments87['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments87['addQueryStringMethod'] = NULL;
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['class'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['name'] = NULL;
$arguments87['rel'] = NULL;
$arguments87['rev'] = NULL;
$arguments87['target'] = NULL;
$arguments87['action'] = 'new';

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output47 .= '
';
return $output47;
};
$arguments45 = array();
$arguments45['name'] = NULL;
$arguments45['name'] = 'content';

$output42 .= NULL;

$output42 .= '
';

return $output42;
}


}
#