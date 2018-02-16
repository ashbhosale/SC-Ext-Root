<?php

class partial_Carousel_Item_Header_5047b8c16ed716bb4d2016ee241a9f683b8de254 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
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
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
    <div class="valign" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.text_color', $array9);

$expression10 = function($context) {return ($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$output11 = '';

$output11 .= 'style="color: ';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.text_color', $array12)]);

$output11 .= ';"';
$arguments6['then'] = $output11;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '>
        <div class="vcontainer">
            <div class="carousel-text-inner">
                <h';
$array13 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.header_layout', $array13)]);

$output5 .= ' class="text-center awesome">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.header', $array16);
};
$arguments14 = array();
$arguments14['value'] = NULL;
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$renderChildrenClosure15 = $arguments14['value'] ? function() use ($arguments14) { return $arguments14['value']; } : $renderChildrenClosure15;
$output5 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output5 .= '</h';
$array17 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.header_layout', $array17)]);

$output5 .= '>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                    <h';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.subheader_layout', $array24)]);

$output23 .= ' class="text-center awesome">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array27);
};
$arguments25 = array();
$arguments25['value'] = NULL;
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$renderChildrenClosure26 = $arguments25['value'] ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;
$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output23 .= '</h';
$array28 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.subheader_layout', $array28)]);

$output23 .= '>
                ';
return $output23;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array21);

$expression22 = function($context) {return ($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = $renderChildrenClosure19;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output5 .= '
            </div>
        </div>
    </div>
';
return $output5;
};
$arguments1 = array();
$arguments1['pageUid'] = NULL;
$arguments1['additionalParams'] = array (
);
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['target'] = NULL;
$arguments1['rel'] = NULL;
$array3 = array (
);$arguments1['pageUid'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array3);
// Rendering Array
$array4 = array();
$array4['draggable'] = 'false';
$arguments1['additionalAttributes'] = $array4;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#