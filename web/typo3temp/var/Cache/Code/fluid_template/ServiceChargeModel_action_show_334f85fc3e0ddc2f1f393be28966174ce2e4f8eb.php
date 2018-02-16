<?php

class ServiceChargeModel_action_show_334f85fc3e0ddc2f1f393be28966174ce2e4f8eb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	<h1>Service Information</h1>
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
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['section'] = NULL;
$arguments3['partial'] = NULL;
$arguments3['delegate'] = NULL;
$arguments3['renderable'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['optional'] = false;
$arguments3['default'] = NULL;
$arguments3['contentAs'] = NULL;
$arguments3['partial'] = 'ServiceChargeModel/Properties';
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['serviceChargeModel'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel', $array6);
$arguments3['arguments'] = $array5;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
        <p>&nbsp;&nbsp; Description : Deliver grocery and fruits to your loved ones. Our range of product includes : </p>
        <ol>1. Pulses</ol>
        <ol>2. Edible Oils</ol>
        <ol>3. Dry fruits and nuts</ol>
        <ol>4. Spices</ol>
        <ol>5. Ghee</ol>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['alt'] = NULL;
$arguments13['ismap'] = NULL;
$arguments13['longdesc'] = NULL;
$arguments13['usemap'] = NULL;
$arguments13['src'] = NULL;
$arguments13['treatIdAsReference'] = NULL;
$arguments13['image'] = NULL;
$arguments13['crop'] = NULL;
$arguments13['cropVariant'] = 'default';
$arguments13['width'] = NULL;
$arguments13['height'] = NULL;
$arguments13['minWidth'] = NULL;
$arguments13['minHeight'] = NULL;
$arguments13['maxWidth'] = NULL;
$arguments13['maxHeight'] = NULL;
$arguments13['absolute'] = false;
$arguments13['src'] = 'EXT:servicechargeextension/Resources/Public/Images/grocery.jpg';
$arguments13['alt'] = 'alt text';

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
    ';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel.servicetype', $array10);
$array9['1'] = ' == \'Deliver Grocery\'}';

$expression11 = function($context) {return (($context["node0"]) == 'Deliver Grocery');};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
        <p>&nbsp;&nbsp; Description : Deliver various furniture items like: </p>
        <ol>1. Table</ol>
        <ol>2. Chair</ol>
        <ol>3. Bed</ol>
        <ol>4. Clock</ol>
        <ol>5. Desk</ol>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['alt'] = NULL;
$arguments21['ismap'] = NULL;
$arguments21['longdesc'] = NULL;
$arguments21['usemap'] = NULL;
$arguments21['src'] = NULL;
$arguments21['treatIdAsReference'] = NULL;
$arguments21['image'] = NULL;
$arguments21['crop'] = NULL;
$arguments21['cropVariant'] = 'default';
$arguments21['width'] = NULL;
$arguments21['height'] = NULL;
$arguments21['minWidth'] = NULL;
$arguments21['minHeight'] = NULL;
$arguments21['maxWidth'] = NULL;
$arguments21['maxHeight'] = NULL;
$arguments21['absolute'] = false;
$arguments21['src'] = 'EXT:servicechargeextension/Resources/Public/Images/furniture.jpg';
$arguments21['alt'] = 'alt text';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
    ';
return $output20;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel.servicetype', $array18);
$array17['1'] = ' == \'Deliver Furniture\'}';

$expression19 = function($context) {return (($context["node0"]) == 'Deliver Furniture');};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = $renderChildrenClosure16;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
        <p>&nbsp;&nbsp; Description : Deliver medicines for children,Old people </p>
        <ol>1. Eye drops</ol>
        <ol>2. Tablets or capsules</ol>
        <ol>3. Cream and Ointment</ol>
        <ol>4. Ear drops</ol>
        <ol>5. Bandage</ol>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['alt'] = NULL;
$arguments29['ismap'] = NULL;
$arguments29['longdesc'] = NULL;
$arguments29['usemap'] = NULL;
$arguments29['src'] = NULL;
$arguments29['treatIdAsReference'] = NULL;
$arguments29['image'] = NULL;
$arguments29['crop'] = NULL;
$arguments29['cropVariant'] = 'default';
$arguments29['width'] = NULL;
$arguments29['height'] = NULL;
$arguments29['minWidth'] = NULL;
$arguments29['minHeight'] = NULL;
$arguments29['maxWidth'] = NULL;
$arguments29['maxHeight'] = NULL;
$arguments29['absolute'] = false;
$arguments29['src'] = 'EXT:servicechargeextension/Resources/Public/Images/pharma.jpg';
$arguments29['alt'] = 'alt text';

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
    ';
return $output28;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel.servicetype', $array26);
$array25['1'] = ' == \'Deliver Pharmaceutical Items\'}';

$expression27 = function($context) {return (($context["node0"]) == 'Deliver Pharmaceutical Items');};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments23['__thenClosure'] = $renderChildrenClosure24;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
        <p>&nbsp;&nbsp; Description : Deliver fresh bakery items. Product list for the bakery items are: </p>
        <ol>1. Breads</ol>
        <ol>2. Cakes</ol>
        <ol>3. Muffins</ol>
        <ol>4. Pastries</ol>
        <ol>5. Biscuits</ol>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['alt'] = NULL;
$arguments37['ismap'] = NULL;
$arguments37['longdesc'] = NULL;
$arguments37['usemap'] = NULL;
$arguments37['src'] = NULL;
$arguments37['treatIdAsReference'] = NULL;
$arguments37['image'] = NULL;
$arguments37['crop'] = NULL;
$arguments37['cropVariant'] = 'default';
$arguments37['width'] = NULL;
$arguments37['height'] = NULL;
$arguments37['minWidth'] = NULL;
$arguments37['minHeight'] = NULL;
$arguments37['maxWidth'] = NULL;
$arguments37['maxHeight'] = NULL;
$arguments37['absolute'] = false;
$arguments37['src'] = 'EXT:servicechargeextension/Resources/Public/Images/bakery.jpg';
$arguments37['alt'] = 'alt text';

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
    ';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel.servicetype', $array34);
$array33['1'] = ' == \'Deliver Bakery Items\'}';

$expression35 = function($context) {return (($context["node0"]) == 'Deliver Bakery Items');};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return '<p>Back to list';
};
$arguments39 = array();
$arguments39['action'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['controller'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['pluginName'] = NULL;
$arguments39['pageUid'] = NULL;
$arguments39['pageType'] = 0;
$arguments39['noCache'] = false;
$arguments39['noCacheHash'] = false;
$arguments39['section'] = '';
$arguments39['format'] = '';
$arguments39['linkAccessRestrictedPages'] = false;
$arguments39['additionalParams'] = array (
);
$arguments39['absolute'] = false;
$arguments39['addQueryString'] = false;
$arguments39['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments39['addQueryStringMethod'] = NULL;
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['name'] = NULL;
$arguments39['rel'] = NULL;
$arguments39['rev'] = NULL;
$arguments39['target'] = NULL;
$arguments39['action'] = 'list';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '<br />
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output41 = '';

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['name'] = NULL;
$arguments42['name'] = 'Default';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output41 .= '

This Template is responsible for displaying a single view for a domain object

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
Resources:
Private:
Templates:
Show.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
	<h1>Service Information</h1>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['queueIdentifier'] = NULL;
$arguments47['as'] = NULL;

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['section'] = NULL;
$arguments49['partial'] = NULL;
$arguments49['delegate'] = NULL;
$arguments49['renderable'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['optional'] = false;
$arguments49['default'] = NULL;
$arguments49['contentAs'] = NULL;
$arguments49['partial'] = 'ServiceChargeModel/Properties';
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['serviceChargeModel'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel', $array52);
$arguments49['arguments'] = $array51;

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output46 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
        <p>&nbsp;&nbsp; Description : Deliver grocery and fruits to your loved ones. Our range of product includes : </p>
        <ol>1. Pulses</ol>
        <ol>2. Edible Oils</ol>
        <ol>3. Dry fruits and nuts</ol>
        <ol>4. Spices</ol>
        <ol>5. Ghee</ol>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['alt'] = NULL;
$arguments59['ismap'] = NULL;
$arguments59['longdesc'] = NULL;
$arguments59['usemap'] = NULL;
$arguments59['src'] = NULL;
$arguments59['treatIdAsReference'] = NULL;
$arguments59['image'] = NULL;
$arguments59['crop'] = NULL;
$arguments59['cropVariant'] = 'default';
$arguments59['width'] = NULL;
$arguments59['height'] = NULL;
$arguments59['minWidth'] = NULL;
$arguments59['minHeight'] = NULL;
$arguments59['maxWidth'] = NULL;
$arguments59['maxHeight'] = NULL;
$arguments59['absolute'] = false;
$arguments59['src'] = 'EXT:servicechargeextension/Resources/Public/Images/grocery.jpg';
$arguments59['alt'] = 'alt text';

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
    ';
return $output58;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel.servicetype', $array56);
$array55['1'] = ' == \'Deliver Grocery\'}';

$expression57 = function($context) {return (($context["node0"]) == 'Deliver Grocery');};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = $renderChildrenClosure54;

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output46 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
        <p>&nbsp;&nbsp; Description : Deliver various furniture items like: </p>
        <ol>1. Table</ol>
        <ol>2. Chair</ol>
        <ol>3. Bed</ol>
        <ol>4. Clock</ol>
        <ol>5. Desk</ol>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['alt'] = NULL;
$arguments67['ismap'] = NULL;
$arguments67['longdesc'] = NULL;
$arguments67['usemap'] = NULL;
$arguments67['src'] = NULL;
$arguments67['treatIdAsReference'] = NULL;
$arguments67['image'] = NULL;
$arguments67['crop'] = NULL;
$arguments67['cropVariant'] = 'default';
$arguments67['width'] = NULL;
$arguments67['height'] = NULL;
$arguments67['minWidth'] = NULL;
$arguments67['minHeight'] = NULL;
$arguments67['maxWidth'] = NULL;
$arguments67['maxHeight'] = NULL;
$arguments67['absolute'] = false;
$arguments67['src'] = 'EXT:servicechargeextension/Resources/Public/Images/furniture.jpg';
$arguments67['alt'] = 'alt text';

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
    ';
return $output66;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel.servicetype', $array64);
$array63['1'] = ' == \'Deliver Furniture\'}';

$expression65 = function($context) {return (($context["node0"]) == 'Deliver Furniture');};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = $renderChildrenClosure62;

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output46 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
        <p>&nbsp;&nbsp; Description : Deliver medicines for children,Old people </p>
        <ol>1. Eye drops</ol>
        <ol>2. Tablets or capsules</ol>
        <ol>3. Cream and Ointment</ol>
        <ol>4. Ear drops</ol>
        <ol>5. Bandage</ol>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['alt'] = NULL;
$arguments75['ismap'] = NULL;
$arguments75['longdesc'] = NULL;
$arguments75['usemap'] = NULL;
$arguments75['src'] = NULL;
$arguments75['treatIdAsReference'] = NULL;
$arguments75['image'] = NULL;
$arguments75['crop'] = NULL;
$arguments75['cropVariant'] = 'default';
$arguments75['width'] = NULL;
$arguments75['height'] = NULL;
$arguments75['minWidth'] = NULL;
$arguments75['minHeight'] = NULL;
$arguments75['maxWidth'] = NULL;
$arguments75['maxHeight'] = NULL;
$arguments75['absolute'] = false;
$arguments75['src'] = 'EXT:servicechargeextension/Resources/Public/Images/pharma.jpg';
$arguments75['alt'] = 'alt text';

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
    ';
return $output74;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel.servicetype', $array72);
$array71['1'] = ' == \'Deliver Pharmaceutical Items\'}';

$expression73 = function($context) {return (($context["node0"]) == 'Deliver Pharmaceutical Items');};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output46 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
        <p>&nbsp;&nbsp; Description : Deliver fresh bakery items. Product list for the bakery items are: </p>
        <ol>1. Breads</ol>
        <ol>2. Cakes</ol>
        <ol>3. Muffins</ol>
        <ol>4. Pastries</ol>
        <ol>5. Biscuits</ol>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
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
$arguments83['alt'] = NULL;
$arguments83['ismap'] = NULL;
$arguments83['longdesc'] = NULL;
$arguments83['usemap'] = NULL;
$arguments83['src'] = NULL;
$arguments83['treatIdAsReference'] = NULL;
$arguments83['image'] = NULL;
$arguments83['crop'] = NULL;
$arguments83['cropVariant'] = 'default';
$arguments83['width'] = NULL;
$arguments83['height'] = NULL;
$arguments83['minWidth'] = NULL;
$arguments83['minHeight'] = NULL;
$arguments83['maxWidth'] = NULL;
$arguments83['maxHeight'] = NULL;
$arguments83['absolute'] = false;
$arguments83['src'] = 'EXT:servicechargeextension/Resources/Public/Images/bakery.jpg';
$arguments83['alt'] = 'alt text';

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
    ';
return $output82;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('serviceChargeModel.servicetype', $array80);
$array79['1'] = ' == \'Deliver Bakery Items\'}';

$expression81 = function($context) {return (($context["node0"]) == 'Deliver Bakery Items');};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = $renderChildrenClosure78;

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output46 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return '<p>Back to list';
};
$arguments85 = array();
$arguments85['action'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['controller'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['pluginName'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['pageType'] = 0;
$arguments85['noCache'] = false;
$arguments85['noCacheHash'] = false;
$arguments85['section'] = '';
$arguments85['format'] = '';
$arguments85['linkAccessRestrictedPages'] = false;
$arguments85['additionalParams'] = array (
);
$arguments85['absolute'] = false;
$arguments85['addQueryString'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['addQueryStringMethod'] = NULL;
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = NULL;
$arguments85['rel'] = NULL;
$arguments85['rev'] = NULL;
$arguments85['target'] = NULL;
$arguments85['action'] = 'list';

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output46 .= '<br />
';
return $output46;
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['name'] = 'content';

$output41 .= NULL;

$output41 .= '























';

return $output41;
}


}
#