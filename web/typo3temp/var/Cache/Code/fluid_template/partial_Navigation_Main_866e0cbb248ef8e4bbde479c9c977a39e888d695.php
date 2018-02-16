<?php

class partial_Navigation_Main_866e0cbb248ef8e4bbde479c9c977a39e888d695 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<header class="navbar navbar-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.navigation.style', $array1)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array5);

$expression6 = function($context) {return ($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['then'] = ' navbar-has-image';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.type', $array10);

$expression11 = function($context) {return ($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['else'] = ' navbar-top';
$output12 = '';

$output12 .= ' navbar-';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.navigation.type', $array13)]);

$output12 .= ' navbar-fixed-';
$array14 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.navigation.type', $array14)]);
$arguments7['then'] = $output12;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '">
    <div class="container">
        <div class="navbar-header navbar-header-main">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                        <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['src'] = NULL;
$arguments53['treatIdAsReference'] = false;
$arguments53['image'] = NULL;
$arguments53['crop'] = NULL;
$arguments53['cropVariant'] = 'default';
$arguments53['width'] = NULL;
$arguments53['height'] = NULL;
$arguments53['minWidth'] = NULL;
$arguments53['minHeight'] = NULL;
$arguments53['maxWidth'] = NULL;
$arguments53['maxHeight'] = NULL;
$arguments53['absolute'] = false;
$array55 = array (
);$arguments53['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array55);

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output52 .= '" alt="';
$array56 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array56)]);

$output52 .= '" height="';
$array57 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array57)]);

$output52 .= '" width="';
$array58 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array58)]);

$output52 .= '">
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['src'] = NULL;
$arguments59['treatIdAsReference'] = false;
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
$array61 = array (
);$arguments59['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array61);

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output52 .= '" alt="';
$array62 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array62)]);

$output52 .= '" height="';
$array63 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array63)]);

$output52 .= '" width="';
$array64 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array64)]);

$output52 .= '">
                    ';
return $output52;
};
$arguments48 = array();
$arguments48['pageUid'] = NULL;
$arguments48['additionalParams'] = array (
);
$arguments48['pageType'] = 0;
$arguments48['noCache'] = false;
$arguments48['noCacheHash'] = false;
$arguments48['section'] = '';
$arguments48['linkAccessRestrictedPages'] = false;
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments48['addQueryStringMethod'] = NULL;
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['target'] = NULL;
$arguments48['rel'] = NULL;
$array50 = array (
);$arguments48['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array50);
$arguments48['class'] = 'navbar-brand navbar-brand-image';
$array51 = array (
);$arguments48['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array51);

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
                ';
return $output47;
};
$arguments45 = array();

$output44 .= '';

$output44 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$array72 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array72)]);
};
$arguments68 = array();
$arguments68['pageUid'] = NULL;
$arguments68['additionalParams'] = array (
);
$arguments68['pageType'] = 0;
$arguments68['noCache'] = false;
$arguments68['noCacheHash'] = false;
$arguments68['section'] = '';
$arguments68['linkAccessRestrictedPages'] = false;
$arguments68['absolute'] = false;
$arguments68['addQueryString'] = false;
$arguments68['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments68['addQueryStringMethod'] = NULL;
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['target'] = NULL;
$arguments68['rel'] = NULL;
$array70 = array (
);$arguments68['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array70);
$arguments68['class'] = 'navbar-brand';
$array71 = array (
);$arguments68['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array71);

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
                ';
return $output67;
};
$arguments65 = array();
$arguments65['if'] = NULL;

$output44 .= '';

$output44 .= '
            ';
return $output44;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array42);

$expression43 = function($context) {return ($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                        <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['src'] = NULL;
$arguments23['treatIdAsReference'] = false;
$arguments23['image'] = NULL;
$arguments23['crop'] = NULL;
$arguments23['cropVariant'] = 'default';
$arguments23['width'] = NULL;
$arguments23['height'] = NULL;
$arguments23['minWidth'] = NULL;
$arguments23['minHeight'] = NULL;
$arguments23['maxWidth'] = NULL;
$arguments23['maxHeight'] = NULL;
$arguments23['absolute'] = false;
$array25 = array (
);$arguments23['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array25);

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '" alt="';
$array26 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array26)]);

$output22 .= '" height="';
$array27 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array27)]);

$output22 .= '" width="';
$array28 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array28)]);

$output22 .= '">
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['src'] = NULL;
$arguments29['treatIdAsReference'] = false;
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
$array31 = array (
);$arguments29['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array31);

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output22 .= '" alt="';
$array32 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array32)]);

$output22 .= '" height="';
$array33 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array33)]);

$output22 .= '" width="';
$array34 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array34)]);

$output22 .= '">
                    ';
return $output22;
};
$arguments18 = array();
$arguments18['pageUid'] = NULL;
$arguments18['additionalParams'] = array (
);
$arguments18['pageType'] = 0;
$arguments18['noCache'] = false;
$arguments18['noCacheHash'] = false;
$arguments18['section'] = '';
$arguments18['linkAccessRestrictedPages'] = false;
$arguments18['absolute'] = false;
$arguments18['addQueryString'] = false;
$arguments18['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments18['addQueryStringMethod'] = NULL;
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['target'] = NULL;
$arguments18['rel'] = NULL;
$array20 = array (
);$arguments18['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array20);
$arguments18['class'] = 'navbar-brand navbar-brand-image';
$array21 = array (
);$arguments18['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array21);

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                ';
return $output17;
};
$arguments15['__elseClosures'][] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$array40 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array40)]);
};
$arguments36 = array();
$arguments36['pageUid'] = NULL;
$arguments36['additionalParams'] = array (
);
$arguments36['pageType'] = 0;
$arguments36['noCache'] = false;
$arguments36['noCacheHash'] = false;
$arguments36['section'] = '';
$arguments36['linkAccessRestrictedPages'] = false;
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
$arguments36['target'] = NULL;
$arguments36['rel'] = NULL;
$array38 = array (
);$arguments36['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array38);
$arguments36['class'] = 'navbar-brand';
$array39 = array (
);$arguments36['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array39);

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                ';
return $output35;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return '
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            ';
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array76);

$expression77 = function($context) {return ($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output0 .= '
            <span class="navbar-header-border-bottom"></span>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
            <nav class="navbar-collapse collapse" role="navigation">
                <ul class="nav navbar-nav navbar-main">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output362 = '';

$output362 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return '
                                </ul>
                                <ul class="nav navbar-nav navbar-main">
                            ';
};
$arguments363 = array();

$output362 .= '';

$output362 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
                                <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments368 = array();
$arguments368['then'] = NULL;
$arguments368['else'] = NULL;
$arguments368['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array371);

$expression372 = function($context) {return ($context["node0"]);};
$arguments368['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression372(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array370)
					),
					$renderingContext
				);
$arguments368['then'] = 'active';

$output367 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output367 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['then'] = NULL;
$arguments373['else'] = NULL;
$arguments373['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array375 = array();
$array376 = array (
);$array375['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array376);

$expression377 = function($context) {return ($context["node0"]);};
$arguments373['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression377(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array375)
					),
					$renderingContext
				);
$arguments373['then'] = 'dropdown dropdown-hover';

$output367 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output367 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output507 = '';

$output507 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output510 = '';

$output510 .= '
                                            <a href="';
$array511 = array (
);
$output510 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array511)]);

$output510 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments512 = array();
$arguments512['then'] = NULL;
$arguments512['else'] = NULL;
$arguments512['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array514 = array();
$array515 = array (
);$array514['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array515);

$expression516 = function($context) {return ($context["node0"]);};
$arguments512['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression516(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array514)
					),
					$renderingContext
				);
$output517 = '';

$output517 .= ' target="';
$array518 = array (
);
$output517 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array518)]);

$output517 .= '"';
$arguments512['then'] = $output517;

$output510 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output510 .= ' title="';
$array519 = array (
);
$output510 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array519)]);

$output510 .= '" class="dropdown-link">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$output525 = '';

$output525 .= '
                                                    <span class="navbar-item-icon">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments526 = array();
$arguments526['additionalAttributes'] = NULL;
$arguments526['data'] = NULL;
$arguments526['class'] = NULL;
$arguments526['dir'] = NULL;
$arguments526['id'] = NULL;
$arguments526['lang'] = NULL;
$arguments526['style'] = NULL;
$arguments526['title'] = NULL;
$arguments526['accesskey'] = NULL;
$arguments526['tabindex'] = NULL;
$arguments526['onclick'] = NULL;
$arguments526['alt'] = NULL;
$arguments526['ismap'] = NULL;
$arguments526['longdesc'] = NULL;
$arguments526['usemap'] = NULL;
$arguments526['src'] = NULL;
$arguments526['treatIdAsReference'] = NULL;
$arguments526['image'] = NULL;
$arguments526['crop'] = NULL;
$arguments526['cropVariant'] = 'default';
$arguments526['width'] = NULL;
$arguments526['height'] = NULL;
$arguments526['minWidth'] = NULL;
$arguments526['minHeight'] = NULL;
$arguments526['maxWidth'] = NULL;
$arguments526['maxHeight'] = NULL;
$arguments526['absolute'] = false;
$array528 = array (
);$arguments526['image'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0', $array528);
$array529 = array (
);$arguments526['alt'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.alternative', $array529);
$array530 = array (
);$arguments526['title'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.title', $array530);
$array531 = array (
);$arguments526['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array531);
$array532 = array (
);$arguments526['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array532);

$output525 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output525 .= '
                                                    </span>
                                                ';
return $output525;
};
$arguments520 = array();
$arguments520['then'] = NULL;
$arguments520['else'] = NULL;
$arguments520['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array522 = array();
$array523 = array (
);$array522['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon', $array523);

$expression524 = function($context) {return ($context["node0"]);};
$arguments520['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression524(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array522)
					),
					$renderingContext
				);
$arguments520['__thenClosure'] = $renderChildrenClosure521;

$output510 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output510 .= '
                                                <span class="navbar-item-text">';
$array533 = array (
);
$output510 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array533)]);

$output510 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
$output537 = '';

$output537 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
$output574 = '';

$output574 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$output577 = '';

$output577 .= '
                                                            <li class="dropdown-header">';
$array578 = array (
);
$output577 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array578)]);

$output577 .= '</li>
                                                        ';
return $output577;
};
$arguments575 = array();

$output574 .= '';

$output574 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
$output581 = '';

$output581 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments582 = array();
$arguments582['then'] = NULL;
$arguments582['else'] = NULL;
$arguments582['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array584 = array();
$array585 = array (
);$array584['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array585);

$expression586 = function($context) {return ($context["node0"]);};
$arguments582['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression586(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array584)
					),
					$renderingContext
				);
$arguments582['then'] = 'active';

$output581 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);

$output581 .= '">
                                                                <a href="';
$array587 = array (
);
$output581 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array587)]);

$output581 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments588 = array();
$arguments588['then'] = NULL;
$arguments588['else'] = NULL;
$arguments588['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array590 = array();
$array591 = array (
);$array590['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array591);

$expression592 = function($context) {return ($context["node0"]);};
$arguments588['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression592(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array590)
					),
					$renderingContext
				);
$output593 = '';

$output593 .= ' target="';
$array594 = array (
);
$output593 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array594)]);

$output593 .= '"';
$arguments588['then'] = $output593;

$output581 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext);

$output581 .= ' title="';
$array595 = array (
);
$output581 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array595)]);

$output581 .= '">
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
$output601 = '';

$output601 .= '
                                                                        <span class="navbar-item-icon">
                                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['additionalAttributes'] = NULL;
$arguments602['data'] = NULL;
$arguments602['class'] = NULL;
$arguments602['dir'] = NULL;
$arguments602['id'] = NULL;
$arguments602['lang'] = NULL;
$arguments602['style'] = NULL;
$arguments602['title'] = NULL;
$arguments602['accesskey'] = NULL;
$arguments602['tabindex'] = NULL;
$arguments602['onclick'] = NULL;
$arguments602['alt'] = NULL;
$arguments602['ismap'] = NULL;
$arguments602['longdesc'] = NULL;
$arguments602['usemap'] = NULL;
$arguments602['src'] = NULL;
$arguments602['treatIdAsReference'] = NULL;
$arguments602['image'] = NULL;
$arguments602['crop'] = NULL;
$arguments602['cropVariant'] = 'default';
$arguments602['width'] = NULL;
$arguments602['height'] = NULL;
$arguments602['minWidth'] = NULL;
$arguments602['minHeight'] = NULL;
$arguments602['maxWidth'] = NULL;
$arguments602['maxHeight'] = NULL;
$arguments602['absolute'] = false;
$array604 = array (
);$arguments602['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array604);
$array605 = array (
);$arguments602['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array605);
$array606 = array (
);$arguments602['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array606);
$array607 = array (
);$arguments602['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array607);
$array608 = array (
);$arguments602['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array608);

$output601 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output601 .= '
                                                                        </span>
                                                                    ';
return $output601;
};
$arguments596 = array();
$arguments596['then'] = NULL;
$arguments596['else'] = NULL;
$arguments596['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array598 = array();
$array599 = array (
);$array598['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array599);

$expression600 = function($context) {return ($context["node0"]);};
$arguments596['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression600(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array598)
					),
					$renderingContext
				);
$arguments596['__thenClosure'] = $renderChildrenClosure597;

$output581 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);

$output581 .= '
                                                                    <span class="navbar-item-text">';
$array609 = array (
);
$output581 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array609)]);

$output581 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output581;
};
$arguments579 = array();
$arguments579['if'] = NULL;

$output574 .= '';

$output574 .= '
                                                    ';
return $output574;
};
$arguments538 = array();
$arguments538['then'] = NULL;
$arguments538['else'] = NULL;
$arguments538['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array571 = array();
$array572 = array (
);$array571['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array572);

$expression573 = function($context) {return ($context["node0"]);};
$arguments538['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression573(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array571)
					),
					$renderingContext
				);
$arguments538['__thenClosure'] = function() use ($renderingContext, $self) {
$output540 = '';

$output540 .= '
                                                            <li class="dropdown-header">';
$array541 = array (
);
$output540 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array541)]);

$output540 .= '</li>
                                                        ';
return $output540;
};
$arguments538['__elseClosures'][] = function() use ($renderingContext, $self) {
$output542 = '';

$output542 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments543 = array();
$arguments543['then'] = NULL;
$arguments543['else'] = NULL;
$arguments543['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array545 = array();
$array546 = array (
);$array545['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array546);

$expression547 = function($context) {return ($context["node0"]);};
$arguments543['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression547(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array545)
					),
					$renderingContext
				);
$arguments543['then'] = 'active';

$output542 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext);

$output542 .= '">
                                                                <a href="';
$array548 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array548)]);

$output542 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['then'] = NULL;
$arguments549['else'] = NULL;
$arguments549['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array551 = array();
$array552 = array (
);$array551['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array552);

$expression553 = function($context) {return ($context["node0"]);};
$arguments549['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression553(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array551)
					),
					$renderingContext
				);
$output554 = '';

$output554 .= ' target="';
$array555 = array (
);
$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array555)]);

$output554 .= '"';
$arguments549['then'] = $output554;

$output542 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output542 .= ' title="';
$array556 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array556)]);

$output542 .= '">
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
$output562 = '';

$output562 .= '
                                                                        <span class="navbar-item-icon">
                                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments563 = array();
$arguments563['additionalAttributes'] = NULL;
$arguments563['data'] = NULL;
$arguments563['class'] = NULL;
$arguments563['dir'] = NULL;
$arguments563['id'] = NULL;
$arguments563['lang'] = NULL;
$arguments563['style'] = NULL;
$arguments563['title'] = NULL;
$arguments563['accesskey'] = NULL;
$arguments563['tabindex'] = NULL;
$arguments563['onclick'] = NULL;
$arguments563['alt'] = NULL;
$arguments563['ismap'] = NULL;
$arguments563['longdesc'] = NULL;
$arguments563['usemap'] = NULL;
$arguments563['src'] = NULL;
$arguments563['treatIdAsReference'] = NULL;
$arguments563['image'] = NULL;
$arguments563['crop'] = NULL;
$arguments563['cropVariant'] = 'default';
$arguments563['width'] = NULL;
$arguments563['height'] = NULL;
$arguments563['minWidth'] = NULL;
$arguments563['minHeight'] = NULL;
$arguments563['maxWidth'] = NULL;
$arguments563['maxHeight'] = NULL;
$arguments563['absolute'] = false;
$array565 = array (
);$arguments563['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array565);
$array566 = array (
);$arguments563['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array566);
$array567 = array (
);$arguments563['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array567);
$array568 = array (
);$arguments563['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array568);
$array569 = array (
);$arguments563['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array569);

$output562 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext);

$output562 .= '
                                                                        </span>
                                                                    ';
return $output562;
};
$arguments557 = array();
$arguments557['then'] = NULL;
$arguments557['else'] = NULL;
$arguments557['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array559 = array();
$array560 = array (
);$array559['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array560);

$expression561 = function($context) {return ($context["node0"]);};
$arguments557['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression561(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array559)
					),
					$renderingContext
				);
$arguments557['__thenClosure'] = $renderChildrenClosure558;

$output542 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments557, $renderChildrenClosure558, $renderingContext);

$output542 .= '
                                                                    <span class="navbar-item-text">';
$array570 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array570)]);

$output542 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output542;
};

$output537 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext);

$output537 .= '
                                                ';
return $output537;
};
$arguments534 = array();
$arguments534['each'] = NULL;
$arguments534['as'] = NULL;
$arguments534['key'] = NULL;
$arguments534['reverse'] = false;
$arguments534['iteration'] = NULL;
$array536 = array (
);$arguments534['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array536);
$arguments534['as'] = 'child';

$output510 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output510 .= '
                                            </ul>
                                        ';
return $output510;
};
$arguments508 = array();

$output507 .= '';

$output507 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
$output612 = '';

$output612 .= '
                                            <a href="';
$array613 = array (
);
$output612 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array613)]);

$output612 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure615 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments614 = array();
$arguments614['then'] = NULL;
$arguments614['else'] = NULL;
$arguments614['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array616 = array();
$array617 = array (
);$array616['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array617);

$expression618 = function($context) {return ($context["node0"]);};
$arguments614['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression618(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array616)
					),
					$renderingContext
				);
$output619 = '';

$output619 .= ' target="';
$array620 = array (
);
$output619 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array620)]);

$output619 .= '"';
$arguments614['then'] = $output619;

$output612 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments614, $renderChildrenClosure615, $renderingContext);

$output612 .= ' title="';
$array621 = array (
);
$output612 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array621)]);

$output612 .= '">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
$output627 = '';

$output627 .= '
                                                    <span class="navbar-item-icon">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments628 = array();
$arguments628['additionalAttributes'] = NULL;
$arguments628['data'] = NULL;
$arguments628['class'] = NULL;
$arguments628['dir'] = NULL;
$arguments628['id'] = NULL;
$arguments628['lang'] = NULL;
$arguments628['style'] = NULL;
$arguments628['title'] = NULL;
$arguments628['accesskey'] = NULL;
$arguments628['tabindex'] = NULL;
$arguments628['onclick'] = NULL;
$arguments628['alt'] = NULL;
$arguments628['ismap'] = NULL;
$arguments628['longdesc'] = NULL;
$arguments628['usemap'] = NULL;
$arguments628['src'] = NULL;
$arguments628['treatIdAsReference'] = NULL;
$arguments628['image'] = NULL;
$arguments628['crop'] = NULL;
$arguments628['cropVariant'] = 'default';
$arguments628['width'] = NULL;
$arguments628['height'] = NULL;
$arguments628['minWidth'] = NULL;
$arguments628['minHeight'] = NULL;
$arguments628['maxWidth'] = NULL;
$arguments628['maxHeight'] = NULL;
$arguments628['absolute'] = false;
$array630 = array (
);$arguments628['image'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0', $array630);
$array631 = array (
);$arguments628['alt'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.alternative', $array631);
$array632 = array (
);$arguments628['title'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.title', $array632);
$array633 = array (
);$arguments628['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array633);
$array634 = array (
);$arguments628['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array634);

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext);

$output627 .= '
                                                    </span>
                                                ';
return $output627;
};
$arguments622 = array();
$arguments622['then'] = NULL;
$arguments622['else'] = NULL;
$arguments622['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array624 = array();
$array625 = array (
);$array624['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon', $array625);

$expression626 = function($context) {return ($context["node0"]);};
$arguments622['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression626(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array624)
					),
					$renderingContext
				);
$arguments622['__thenClosure'] = $renderChildrenClosure623;

$output612 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext);

$output612 .= '
                                                <span class="navbar-item-text">';
$array635 = array (
);
$output612 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array635)]);

$output612 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output612;
};
$arguments610 = array();
$arguments610['if'] = NULL;

$output507 .= '';

$output507 .= '
                                    ';
return $output507;
};
$arguments378 = array();
$arguments378['then'] = NULL;
$arguments378['else'] = NULL;
$arguments378['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array504 = array();
$array505 = array (
);$array504['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array505);

$expression506 = function($context) {return ($context["node0"]);};
$arguments378['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression506(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array504)
					),
					$renderingContext
				);
$arguments378['__thenClosure'] = function() use ($renderingContext, $self) {
$output380 = '';

$output380 .= '
                                            <a href="';
$array381 = array (
);
$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array381)]);

$output380 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$arguments382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array384 = array();
$array385 = array (
);$array384['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array385);

$expression386 = function($context) {return ($context["node0"]);};
$arguments382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array384)
					),
					$renderingContext
				);
$output387 = '';

$output387 .= ' target="';
$array388 = array (
);
$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array388)]);

$output387 .= '"';
$arguments382['then'] = $output387;

$output380 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output380 .= ' title="';
$array389 = array (
);
$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array389)]);

$output380 .= '" class="dropdown-link">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
                                                    <span class="navbar-item-icon">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['additionalAttributes'] = NULL;
$arguments396['data'] = NULL;
$arguments396['class'] = NULL;
$arguments396['dir'] = NULL;
$arguments396['id'] = NULL;
$arguments396['lang'] = NULL;
$arguments396['style'] = NULL;
$arguments396['title'] = NULL;
$arguments396['accesskey'] = NULL;
$arguments396['tabindex'] = NULL;
$arguments396['onclick'] = NULL;
$arguments396['alt'] = NULL;
$arguments396['ismap'] = NULL;
$arguments396['longdesc'] = NULL;
$arguments396['usemap'] = NULL;
$arguments396['src'] = NULL;
$arguments396['treatIdAsReference'] = NULL;
$arguments396['image'] = NULL;
$arguments396['crop'] = NULL;
$arguments396['cropVariant'] = 'default';
$arguments396['width'] = NULL;
$arguments396['height'] = NULL;
$arguments396['minWidth'] = NULL;
$arguments396['minHeight'] = NULL;
$arguments396['maxWidth'] = NULL;
$arguments396['maxHeight'] = NULL;
$arguments396['absolute'] = false;
$array398 = array (
);$arguments396['image'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0', $array398);
$array399 = array (
);$arguments396['alt'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.alternative', $array399);
$array400 = array (
);$arguments396['title'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.title', $array400);
$array401 = array (
);$arguments396['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array401);
$array402 = array (
);$arguments396['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array402);

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
                                                    </span>
                                                ';
return $output395;
};
$arguments390 = array();
$arguments390['then'] = NULL;
$arguments390['else'] = NULL;
$arguments390['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array392 = array();
$array393 = array (
);$array392['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon', $array393);

$expression394 = function($context) {return ($context["node0"]);};
$arguments390['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array392)
					),
					$renderingContext
				);
$arguments390['__thenClosure'] = $renderChildrenClosure391;

$output380 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output380 .= '
                                                <span class="navbar-item-text">';
$array403 = array (
);
$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array403)]);

$output380 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output407 = '';

$output407 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
                                                            <li class="dropdown-header">';
$array448 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array448)]);

$output447 .= '</li>
                                                        ';
return $output447;
};
$arguments445 = array();

$output444 .= '';

$output444 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments452 = array();
$arguments452['then'] = NULL;
$arguments452['else'] = NULL;
$arguments452['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array454 = array();
$array455 = array (
);$array454['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array455);

$expression456 = function($context) {return ($context["node0"]);};
$arguments452['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression456(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array454)
					),
					$renderingContext
				);
$arguments452['then'] = 'active';

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output451 .= '">
                                                                <a href="';
$array457 = array (
);
$output451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array457)]);

$output451 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['then'] = NULL;
$arguments458['else'] = NULL;
$arguments458['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array460 = array();
$array461 = array (
);$array460['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array461);

$expression462 = function($context) {return ($context["node0"]);};
$arguments458['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression462(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array460)
					),
					$renderingContext
				);
$output463 = '';

$output463 .= ' target="';
$array464 = array (
);
$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array464)]);

$output463 .= '"';
$arguments458['then'] = $output463;

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output451 .= ' title="';
$array465 = array (
);
$output451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array465)]);

$output451 .= '">
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$output471 = '';

$output471 .= '
                                                                        <span class="navbar-item-icon">
                                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments472 = array();
$arguments472['additionalAttributes'] = NULL;
$arguments472['data'] = NULL;
$arguments472['class'] = NULL;
$arguments472['dir'] = NULL;
$arguments472['id'] = NULL;
$arguments472['lang'] = NULL;
$arguments472['style'] = NULL;
$arguments472['title'] = NULL;
$arguments472['accesskey'] = NULL;
$arguments472['tabindex'] = NULL;
$arguments472['onclick'] = NULL;
$arguments472['alt'] = NULL;
$arguments472['ismap'] = NULL;
$arguments472['longdesc'] = NULL;
$arguments472['usemap'] = NULL;
$arguments472['src'] = NULL;
$arguments472['treatIdAsReference'] = NULL;
$arguments472['image'] = NULL;
$arguments472['crop'] = NULL;
$arguments472['cropVariant'] = 'default';
$arguments472['width'] = NULL;
$arguments472['height'] = NULL;
$arguments472['minWidth'] = NULL;
$arguments472['minHeight'] = NULL;
$arguments472['maxWidth'] = NULL;
$arguments472['maxHeight'] = NULL;
$arguments472['absolute'] = false;
$array474 = array (
);$arguments472['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array474);
$array475 = array (
);$arguments472['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array475);
$array476 = array (
);$arguments472['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array476);
$array477 = array (
);$arguments472['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array477);
$array478 = array (
);$arguments472['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array478);

$output471 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output471 .= '
                                                                        </span>
                                                                    ';
return $output471;
};
$arguments466 = array();
$arguments466['then'] = NULL;
$arguments466['else'] = NULL;
$arguments466['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array468 = array();
$array469 = array (
);$array468['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array469);

$expression470 = function($context) {return ($context["node0"]);};
$arguments466['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression470(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array468)
					),
					$renderingContext
				);
$arguments466['__thenClosure'] = $renderChildrenClosure467;

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output451 .= '
                                                                    <span class="navbar-item-text">';
$array479 = array (
);
$output451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array479)]);

$output451 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output451;
};
$arguments449 = array();
$arguments449['if'] = NULL;

$output444 .= '';

$output444 .= '
                                                    ';
return $output444;
};
$arguments408 = array();
$arguments408['then'] = NULL;
$arguments408['else'] = NULL;
$arguments408['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array441 = array();
$array442 = array (
);$array441['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array442);

$expression443 = function($context) {return ($context["node0"]);};
$arguments408['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression443(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array441)
					),
					$renderingContext
				);
$arguments408['__thenClosure'] = function() use ($renderingContext, $self) {
$output410 = '';

$output410 .= '
                                                            <li class="dropdown-header">';
$array411 = array (
);
$output410 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array411)]);

$output410 .= '</li>
                                                        ';
return $output410;
};
$arguments408['__elseClosures'][] = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['then'] = NULL;
$arguments413['else'] = NULL;
$arguments413['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array415 = array();
$array416 = array (
);$array415['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array416);

$expression417 = function($context) {return ($context["node0"]);};
$arguments413['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression417(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array415)
					),
					$renderingContext
				);
$arguments413['then'] = 'active';

$output412 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output412 .= '">
                                                                <a href="';
$array418 = array (
);
$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array418)]);

$output412 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments419 = array();
$arguments419['then'] = NULL;
$arguments419['else'] = NULL;
$arguments419['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array421 = array();
$array422 = array (
);$array421['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array422);

$expression423 = function($context) {return ($context["node0"]);};
$arguments419['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression423(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array421)
					),
					$renderingContext
				);
$output424 = '';

$output424 .= ' target="';
$array425 = array (
);
$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array425)]);

$output424 .= '"';
$arguments419['then'] = $output424;

$output412 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output412 .= ' title="';
$array426 = array (
);
$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array426)]);

$output412 .= '">
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
                                                                        <span class="navbar-item-icon">
                                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['additionalAttributes'] = NULL;
$arguments433['data'] = NULL;
$arguments433['class'] = NULL;
$arguments433['dir'] = NULL;
$arguments433['id'] = NULL;
$arguments433['lang'] = NULL;
$arguments433['style'] = NULL;
$arguments433['title'] = NULL;
$arguments433['accesskey'] = NULL;
$arguments433['tabindex'] = NULL;
$arguments433['onclick'] = NULL;
$arguments433['alt'] = NULL;
$arguments433['ismap'] = NULL;
$arguments433['longdesc'] = NULL;
$arguments433['usemap'] = NULL;
$arguments433['src'] = NULL;
$arguments433['treatIdAsReference'] = NULL;
$arguments433['image'] = NULL;
$arguments433['crop'] = NULL;
$arguments433['cropVariant'] = 'default';
$arguments433['width'] = NULL;
$arguments433['height'] = NULL;
$arguments433['minWidth'] = NULL;
$arguments433['minHeight'] = NULL;
$arguments433['maxWidth'] = NULL;
$arguments433['maxHeight'] = NULL;
$arguments433['absolute'] = false;
$array435 = array (
);$arguments433['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array435);
$array436 = array (
);$arguments433['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array436);
$array437 = array (
);$arguments433['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array437);
$array438 = array (
);$arguments433['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array438);
$array439 = array (
);$arguments433['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array439);

$output432 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output432 .= '
                                                                        </span>
                                                                    ';
return $output432;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array429 = array();
$array430 = array (
);$array429['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array430);

$expression431 = function($context) {return ($context["node0"]);};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression431(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array429)
					),
					$renderingContext
				);
$arguments427['__thenClosure'] = $renderChildrenClosure428;

$output412 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output412 .= '
                                                                    <span class="navbar-item-text">';
$array440 = array (
);
$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array440)]);

$output412 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output412;
};

$output407 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output407 .= '
                                                ';
return $output407;
};
$arguments404 = array();
$arguments404['each'] = NULL;
$arguments404['as'] = NULL;
$arguments404['key'] = NULL;
$arguments404['reverse'] = false;
$arguments404['iteration'] = NULL;
$array406 = array (
);$arguments404['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array406);
$arguments404['as'] = 'child';

$output380 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output380 .= '
                                            </ul>
                                        ';
return $output380;
};
$arguments378['__elseClosures'][] = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
                                            <a href="';
$array481 = array (
);
$output480 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array481)]);

$output480 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments482 = array();
$arguments482['then'] = NULL;
$arguments482['else'] = NULL;
$arguments482['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array484 = array();
$array485 = array (
);$array484['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array485);

$expression486 = function($context) {return ($context["node0"]);};
$arguments482['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression486(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array484)
					),
					$renderingContext
				);
$output487 = '';

$output487 .= ' target="';
$array488 = array (
);
$output487 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array488)]);

$output487 .= '"';
$arguments482['then'] = $output487;

$output480 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output480 .= ' title="';
$array489 = array (
);
$output480 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array489)]);

$output480 .= '">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$output495 = '';

$output495 .= '
                                                    <span class="navbar-item-icon">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['additionalAttributes'] = NULL;
$arguments496['data'] = NULL;
$arguments496['class'] = NULL;
$arguments496['dir'] = NULL;
$arguments496['id'] = NULL;
$arguments496['lang'] = NULL;
$arguments496['style'] = NULL;
$arguments496['title'] = NULL;
$arguments496['accesskey'] = NULL;
$arguments496['tabindex'] = NULL;
$arguments496['onclick'] = NULL;
$arguments496['alt'] = NULL;
$arguments496['ismap'] = NULL;
$arguments496['longdesc'] = NULL;
$arguments496['usemap'] = NULL;
$arguments496['src'] = NULL;
$arguments496['treatIdAsReference'] = NULL;
$arguments496['image'] = NULL;
$arguments496['crop'] = NULL;
$arguments496['cropVariant'] = 'default';
$arguments496['width'] = NULL;
$arguments496['height'] = NULL;
$arguments496['minWidth'] = NULL;
$arguments496['minHeight'] = NULL;
$arguments496['maxWidth'] = NULL;
$arguments496['maxHeight'] = NULL;
$arguments496['absolute'] = false;
$array498 = array (
);$arguments496['image'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0', $array498);
$array499 = array (
);$arguments496['alt'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.alternative', $array499);
$array500 = array (
);$arguments496['title'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.title', $array500);
$array501 = array (
);$arguments496['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array501);
$array502 = array (
);$arguments496['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array502);

$output495 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output495 .= '
                                                    </span>
                                                ';
return $output495;
};
$arguments490 = array();
$arguments490['then'] = NULL;
$arguments490['else'] = NULL;
$arguments490['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array492 = array();
$array493 = array (
);$array492['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon', $array493);

$expression494 = function($context) {return ($context["node0"]);};
$arguments490['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression494(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array492)
					),
					$renderingContext
				);
$arguments490['__thenClosure'] = $renderChildrenClosure491;

$output480 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output480 .= '
                                                <span class="navbar-item-text">';
$array503 = array (
);
$output480 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array503)]);

$output480 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output480;
};

$output367 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output367 .= '
                                </li>
                            ';
return $output367;
};
$arguments365 = array();
$arguments365['if'] = NULL;

$output362 .= '';

$output362 .= '
                        ';
return $output362;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array359 = array();
$array360 = array (
);$array359['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.spacer', $array360);

$expression361 = function($context) {return ($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression361(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array359)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                </ul>
                                <ul class="nav navbar-nav navbar-main">
                            ';
};
$arguments88['__elseClosures'][] = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                                <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array94);

$expression95 = function($context) {return ($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['then'] = 'active';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array99);

$expression100 = function($context) {return ($context["node0"]);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments96['then'] = 'dropdown dropdown-hover';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output90 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
                                            <a href="';
$array234 = array (
);
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array234)]);

$output233 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array238 = array (
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array238);

$expression239 = function($context) {return ($context["node0"]);};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);
$output240 = '';

$output240 .= ' target="';
$array241 = array (
);
$output240 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array241)]);

$output240 .= '"';
$arguments235['then'] = $output240;

$output233 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output233 .= ' title="';
$array242 = array (
);
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array242)]);

$output233 .= '" class="dropdown-link">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
                                                    <span class="navbar-item-icon">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['additionalAttributes'] = NULL;
$arguments249['data'] = NULL;
$arguments249['class'] = NULL;
$arguments249['dir'] = NULL;
$arguments249['id'] = NULL;
$arguments249['lang'] = NULL;
$arguments249['style'] = NULL;
$arguments249['title'] = NULL;
$arguments249['accesskey'] = NULL;
$arguments249['tabindex'] = NULL;
$arguments249['onclick'] = NULL;
$arguments249['alt'] = NULL;
$arguments249['ismap'] = NULL;
$arguments249['longdesc'] = NULL;
$arguments249['usemap'] = NULL;
$arguments249['src'] = NULL;
$arguments249['treatIdAsReference'] = NULL;
$arguments249['image'] = NULL;
$arguments249['crop'] = NULL;
$arguments249['cropVariant'] = 'default';
$arguments249['width'] = NULL;
$arguments249['height'] = NULL;
$arguments249['minWidth'] = NULL;
$arguments249['minHeight'] = NULL;
$arguments249['maxWidth'] = NULL;
$arguments249['maxHeight'] = NULL;
$arguments249['absolute'] = false;
$array251 = array (
);$arguments249['image'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0', $array251);
$array252 = array (
);$arguments249['alt'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.alternative', $array252);
$array253 = array (
);$arguments249['title'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.title', $array253);
$array254 = array (
);$arguments249['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array254);
$array255 = array (
);$arguments249['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array255);

$output248 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output248 .= '
                                                    </span>
                                                ';
return $output248;
};
$arguments243 = array();
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$arguments243['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon', $array246);

$expression247 = function($context) {return ($context["node0"]);};
$arguments243['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments243['__thenClosure'] = $renderChildrenClosure244;

$output233 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output233 .= '
                                                <span class="navbar-item-text">';
$array256 = array (
);
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array256)]);

$output233 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
                                                            <li class="dropdown-header">';
$array301 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array301)]);

$output300 .= '</li>
                                                        ';
return $output300;
};
$arguments298 = array();

$output297 .= '';

$output297 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['then'] = NULL;
$arguments305['else'] = NULL;
$arguments305['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array307 = array();
$array308 = array (
);$array307['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array308);

$expression309 = function($context) {return ($context["node0"]);};
$arguments305['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression309(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array307)
					),
					$renderingContext
				);
$arguments305['then'] = 'active';

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output304 .= '">
                                                                <a href="';
$array310 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array310)]);

$output304 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['then'] = NULL;
$arguments311['else'] = NULL;
$arguments311['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array313 = array();
$array314 = array (
);$array313['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array314);

$expression315 = function($context) {return ($context["node0"]);};
$arguments311['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression315(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array313)
					),
					$renderingContext
				);
$output316 = '';

$output316 .= ' target="';
$array317 = array (
);
$output316 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array317)]);

$output316 .= '"';
$arguments311['then'] = $output316;

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output304 .= ' title="';
$array318 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array318)]);

$output304 .= '">
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
                                                                        <span class="navbar-item-icon">
                                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['additionalAttributes'] = NULL;
$arguments325['data'] = NULL;
$arguments325['class'] = NULL;
$arguments325['dir'] = NULL;
$arguments325['id'] = NULL;
$arguments325['lang'] = NULL;
$arguments325['style'] = NULL;
$arguments325['title'] = NULL;
$arguments325['accesskey'] = NULL;
$arguments325['tabindex'] = NULL;
$arguments325['onclick'] = NULL;
$arguments325['alt'] = NULL;
$arguments325['ismap'] = NULL;
$arguments325['longdesc'] = NULL;
$arguments325['usemap'] = NULL;
$arguments325['src'] = NULL;
$arguments325['treatIdAsReference'] = NULL;
$arguments325['image'] = NULL;
$arguments325['crop'] = NULL;
$arguments325['cropVariant'] = 'default';
$arguments325['width'] = NULL;
$arguments325['height'] = NULL;
$arguments325['minWidth'] = NULL;
$arguments325['minHeight'] = NULL;
$arguments325['maxWidth'] = NULL;
$arguments325['maxHeight'] = NULL;
$arguments325['absolute'] = false;
$array327 = array (
);$arguments325['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array327);
$array328 = array (
);$arguments325['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array328);
$array329 = array (
);$arguments325['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array329);
$array330 = array (
);$arguments325['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array330);
$array331 = array (
);$arguments325['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array331);

$output324 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
                                                                        </span>
                                                                    ';
return $output324;
};
$arguments319 = array();
$arguments319['then'] = NULL;
$arguments319['else'] = NULL;
$arguments319['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array321 = array();
$array322 = array (
);$array321['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array322);

$expression323 = function($context) {return ($context["node0"]);};
$arguments319['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression323(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array321)
					),
					$renderingContext
				);
$arguments319['__thenClosure'] = $renderChildrenClosure320;

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output304 .= '
                                                                    <span class="navbar-item-text">';
$array332 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array332)]);

$output304 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output304;
};
$arguments302 = array();
$arguments302['if'] = NULL;

$output297 .= '';

$output297 .= '
                                                    ';
return $output297;
};
$arguments261 = array();
$arguments261['then'] = NULL;
$arguments261['else'] = NULL;
$arguments261['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array295);

$expression296 = function($context) {return ($context["node0"]);};
$arguments261['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$arguments261['__thenClosure'] = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
                                                            <li class="dropdown-header">';
$array264 = array (
);
$output263 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array264)]);

$output263 .= '</li>
                                                        ';
return $output263;
};
$arguments261['__elseClosures'][] = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['then'] = NULL;
$arguments266['else'] = NULL;
$arguments266['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array268 = array();
$array269 = array (
);$array268['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array269);

$expression270 = function($context) {return ($context["node0"]);};
$arguments266['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);
$arguments266['then'] = 'active';

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '">
                                                                <a href="';
$array271 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array271)]);

$output265 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$arguments272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array275);

$expression276 = function($context) {return ($context["node0"]);};
$arguments272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$output277 = '';

$output277 .= ' target="';
$array278 = array (
);
$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array278)]);

$output277 .= '"';
$arguments272['then'] = $output277;

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output265 .= ' title="';
$array279 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array279)]);

$output265 .= '">
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                                                                        <span class="navbar-item-icon">
                                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['additionalAttributes'] = NULL;
$arguments286['data'] = NULL;
$arguments286['class'] = NULL;
$arguments286['dir'] = NULL;
$arguments286['id'] = NULL;
$arguments286['lang'] = NULL;
$arguments286['style'] = NULL;
$arguments286['title'] = NULL;
$arguments286['accesskey'] = NULL;
$arguments286['tabindex'] = NULL;
$arguments286['onclick'] = NULL;
$arguments286['alt'] = NULL;
$arguments286['ismap'] = NULL;
$arguments286['longdesc'] = NULL;
$arguments286['usemap'] = NULL;
$arguments286['src'] = NULL;
$arguments286['treatIdAsReference'] = NULL;
$arguments286['image'] = NULL;
$arguments286['crop'] = NULL;
$arguments286['cropVariant'] = 'default';
$arguments286['width'] = NULL;
$arguments286['height'] = NULL;
$arguments286['minWidth'] = NULL;
$arguments286['minHeight'] = NULL;
$arguments286['maxWidth'] = NULL;
$arguments286['maxHeight'] = NULL;
$arguments286['absolute'] = false;
$array288 = array (
);$arguments286['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array288);
$array289 = array (
);$arguments286['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array289);
$array290 = array (
);$arguments286['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array290);
$array291 = array (
);$arguments286['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array291);
$array292 = array (
);$arguments286['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array292);

$output285 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
                                                                        </span>
                                                                    ';
return $output285;
};
$arguments280 = array();
$arguments280['then'] = NULL;
$arguments280['else'] = NULL;
$arguments280['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array282 = array();
$array283 = array (
);$array282['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array283);

$expression284 = function($context) {return ($context["node0"]);};
$arguments280['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array282)
					),
					$renderingContext
				);
$arguments280['__thenClosure'] = $renderChildrenClosure281;

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output265 .= '
                                                                    <span class="navbar-item-text">';
$array293 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array293)]);

$output265 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output265;
};

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
                                                ';
return $output260;
};
$arguments257 = array();
$arguments257['each'] = NULL;
$arguments257['as'] = NULL;
$arguments257['key'] = NULL;
$arguments257['reverse'] = false;
$arguments257['iteration'] = NULL;
$array259 = array (
);$arguments257['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array259);
$arguments257['as'] = 'child';

$output233 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output233 .= '
                                            </ul>
                                        ';
return $output233;
};
$arguments231 = array();

$output230 .= '';

$output230 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
                                            <a href="';
$array336 = array (
);
$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array336)]);

$output335 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['then'] = NULL;
$arguments337['else'] = NULL;
$arguments337['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array339 = array();
$array340 = array (
);$array339['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array340);

$expression341 = function($context) {return ($context["node0"]);};
$arguments337['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression341(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array339)
					),
					$renderingContext
				);
$output342 = '';

$output342 .= ' target="';
$array343 = array (
);
$output342 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array343)]);

$output342 .= '"';
$arguments337['then'] = $output342;

$output335 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output335 .= ' title="';
$array344 = array (
);
$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array344)]);

$output335 .= '">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
                                                    <span class="navbar-item-icon">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['additionalAttributes'] = NULL;
$arguments351['data'] = NULL;
$arguments351['class'] = NULL;
$arguments351['dir'] = NULL;
$arguments351['id'] = NULL;
$arguments351['lang'] = NULL;
$arguments351['style'] = NULL;
$arguments351['title'] = NULL;
$arguments351['accesskey'] = NULL;
$arguments351['tabindex'] = NULL;
$arguments351['onclick'] = NULL;
$arguments351['alt'] = NULL;
$arguments351['ismap'] = NULL;
$arguments351['longdesc'] = NULL;
$arguments351['usemap'] = NULL;
$arguments351['src'] = NULL;
$arguments351['treatIdAsReference'] = NULL;
$arguments351['image'] = NULL;
$arguments351['crop'] = NULL;
$arguments351['cropVariant'] = 'default';
$arguments351['width'] = NULL;
$arguments351['height'] = NULL;
$arguments351['minWidth'] = NULL;
$arguments351['minHeight'] = NULL;
$arguments351['maxWidth'] = NULL;
$arguments351['maxHeight'] = NULL;
$arguments351['absolute'] = false;
$array353 = array (
);$arguments351['image'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0', $array353);
$array354 = array (
);$arguments351['alt'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.alternative', $array354);
$array355 = array (
);$arguments351['title'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.title', $array355);
$array356 = array (
);$arguments351['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array356);
$array357 = array (
);$arguments351['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array357);

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '
                                                    </span>
                                                ';
return $output350;
};
$arguments345 = array();
$arguments345['then'] = NULL;
$arguments345['else'] = NULL;
$arguments345['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array347 = array();
$array348 = array (
);$array347['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon', $array348);

$expression349 = function($context) {return ($context["node0"]);};
$arguments345['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array347)
					),
					$renderingContext
				);
$arguments345['__thenClosure'] = $renderChildrenClosure346;

$output335 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output335 .= '
                                                <span class="navbar-item-text">';
$array358 = array (
);
$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array358)]);

$output335 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output335;
};
$arguments333 = array();
$arguments333['if'] = NULL;

$output230 .= '';

$output230 .= '
                                    ';
return $output230;
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array227 = array();
$array228 = array (
);$array227['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array228);

$expression229 = function($context) {return ($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression229(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array227)
					),
					$renderingContext
				);
$arguments101['__thenClosure'] = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                                            <a href="';
$array104 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array104)]);

$output103 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array108);

$expression109 = function($context) {return ($context["node0"]);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);
$output110 = '';

$output110 .= ' target="';
$array111 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array111)]);

$output110 .= '"';
$arguments105['then'] = $output110;

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output103 .= ' title="';
$array112 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array112)]);

$output103 .= '" class="dropdown-link">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                                                    <span class="navbar-item-icon">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['alt'] = NULL;
$arguments119['ismap'] = NULL;
$arguments119['longdesc'] = NULL;
$arguments119['usemap'] = NULL;
$arguments119['src'] = NULL;
$arguments119['treatIdAsReference'] = NULL;
$arguments119['image'] = NULL;
$arguments119['crop'] = NULL;
$arguments119['cropVariant'] = 'default';
$arguments119['width'] = NULL;
$arguments119['height'] = NULL;
$arguments119['minWidth'] = NULL;
$arguments119['minHeight'] = NULL;
$arguments119['maxWidth'] = NULL;
$arguments119['maxHeight'] = NULL;
$arguments119['absolute'] = false;
$array121 = array (
);$arguments119['image'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0', $array121);
$array122 = array (
);$arguments119['alt'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.alternative', $array122);
$array123 = array (
);$arguments119['title'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.title', $array123);
$array124 = array (
);$arguments119['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array124);
$array125 = array (
);$arguments119['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array125);

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
                                                    </span>
                                                ';
return $output118;
};
$arguments113 = array();
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon', $array116);

$expression117 = function($context) {return ($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments113['__thenClosure'] = $renderChildrenClosure114;

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output103 .= '
                                                <span class="navbar-item-text">';
$array126 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array126)]);

$output103 .= '</span>
                                                <b class="caret"></b>
                                                <span class="bar"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                                                            <li class="dropdown-header">';
$array171 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array171)]);

$output170 .= '</li>
                                                        ';
return $output170;
};
$arguments168 = array();

$output167 .= '';

$output167 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['then'] = NULL;
$arguments175['else'] = NULL;
$arguments175['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array178);

$expression179 = function($context) {return ($context["node0"]);};
$arguments175['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$arguments175['then'] = 'active';

$output174 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '">
                                                                <a href="';
$array180 = array (
);
$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array180)]);

$output174 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$arguments181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array184);

$expression185 = function($context) {return ($context["node0"]);};
$arguments181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);
$output186 = '';

$output186 .= ' target="';
$array187 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array187)]);

$output186 .= '"';
$arguments181['then'] = $output186;

$output174 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output174 .= ' title="';
$array188 = array (
);
$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array188)]);

$output174 .= '">
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                                                                        <span class="navbar-item-icon">
                                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['additionalAttributes'] = NULL;
$arguments195['data'] = NULL;
$arguments195['class'] = NULL;
$arguments195['dir'] = NULL;
$arguments195['id'] = NULL;
$arguments195['lang'] = NULL;
$arguments195['style'] = NULL;
$arguments195['title'] = NULL;
$arguments195['accesskey'] = NULL;
$arguments195['tabindex'] = NULL;
$arguments195['onclick'] = NULL;
$arguments195['alt'] = NULL;
$arguments195['ismap'] = NULL;
$arguments195['longdesc'] = NULL;
$arguments195['usemap'] = NULL;
$arguments195['src'] = NULL;
$arguments195['treatIdAsReference'] = NULL;
$arguments195['image'] = NULL;
$arguments195['crop'] = NULL;
$arguments195['cropVariant'] = 'default';
$arguments195['width'] = NULL;
$arguments195['height'] = NULL;
$arguments195['minWidth'] = NULL;
$arguments195['minHeight'] = NULL;
$arguments195['maxWidth'] = NULL;
$arguments195['maxHeight'] = NULL;
$arguments195['absolute'] = false;
$array197 = array (
);$arguments195['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array197);
$array198 = array (
);$arguments195['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array198);
$array199 = array (
);$arguments195['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array199);
$array200 = array (
);$arguments195['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array200);
$array201 = array (
);$arguments195['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array201);

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
                                                                        </span>
                                                                    ';
return $output194;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array192);

$expression193 = function($context) {return ($context["node0"]);};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$arguments189['__thenClosure'] = $renderChildrenClosure190;

$output174 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output174 .= '
                                                                    <span class="navbar-item-text">';
$array202 = array (
);
$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array202)]);

$output174 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output174;
};
$arguments172 = array();
$arguments172['if'] = NULL;

$output167 .= '';

$output167 .= '
                                                    ';
return $output167;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array165);

$expression166 = function($context) {return ($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                                                            <li class="dropdown-header">';
$array134 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array134)]);

$output133 .= '</li>
                                                        ';
return $output133;
};
$arguments131['__elseClosures'][] = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                                                            <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array139);

$expression140 = function($context) {return ($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments136['then'] = 'active';

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '">
                                                                <a href="';
$array141 = array (
);
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array141)]);

$output135 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$arguments142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array145);

$expression146 = function($context) {return ($context["node0"]);};
$arguments142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$output147 = '';

$output147 .= ' target="';
$array148 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array148)]);

$output147 .= '"';
$arguments142['then'] = $output147;

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output135 .= ' title="';
$array149 = array (
);
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array149)]);

$output135 .= '">
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
                                                                        <span class="navbar-item-icon">
                                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['class'] = NULL;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['title'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$arguments156['alt'] = NULL;
$arguments156['ismap'] = NULL;
$arguments156['longdesc'] = NULL;
$arguments156['usemap'] = NULL;
$arguments156['src'] = NULL;
$arguments156['treatIdAsReference'] = NULL;
$arguments156['image'] = NULL;
$arguments156['crop'] = NULL;
$arguments156['cropVariant'] = 'default';
$arguments156['width'] = NULL;
$arguments156['height'] = NULL;
$arguments156['minWidth'] = NULL;
$arguments156['minHeight'] = NULL;
$arguments156['maxWidth'] = NULL;
$arguments156['maxHeight'] = NULL;
$arguments156['absolute'] = false;
$array158 = array (
);$arguments156['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array158);
$array159 = array (
);$arguments156['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array159);
$array160 = array (
);$arguments156['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array160);
$array161 = array (
);$arguments156['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array161);
$array162 = array (
);$arguments156['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array162);

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
                                                                        </span>
                                                                    ';
return $output155;
};
$arguments150 = array();
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$arguments150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array153);

$expression154 = function($context) {return ($context["node0"]);};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$arguments150['__thenClosure'] = $renderChildrenClosure151;

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output135 .= '
                                                                    <span class="navbar-item-text">';
$array163 = array (
);
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array163)]);

$output135 .= '</span>
                                                                </a>
                                                            </li>
                                                        ';
return $output135;
};

$output130 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
                                                ';
return $output130;
};
$arguments127 = array();
$arguments127['each'] = NULL;
$arguments127['as'] = NULL;
$arguments127['key'] = NULL;
$arguments127['reverse'] = false;
$arguments127['iteration'] = NULL;
$array129 = array (
);$arguments127['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array129);
$arguments127['as'] = 'child';

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output103 .= '
                                            </ul>
                                        ';
return $output103;
};
$arguments101['__elseClosures'][] = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                                            <a href="';
$array204 = array (
);
$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array204)]);

$output203 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['then'] = NULL;
$arguments205['else'] = NULL;
$arguments205['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array207 = array();
$array208 = array (
);$array207['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array208);

$expression209 = function($context) {return ($context["node0"]);};
$arguments205['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array207)
					),
					$renderingContext
				);
$output210 = '';

$output210 .= ' target="';
$array211 = array (
);
$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array211)]);

$output210 .= '"';
$arguments205['then'] = $output210;

$output203 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output203 .= ' title="';
$array212 = array (
);
$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array212)]);

$output203 .= '">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
                                                    <span class="navbar-item-icon">
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['additionalAttributes'] = NULL;
$arguments219['data'] = NULL;
$arguments219['class'] = NULL;
$arguments219['dir'] = NULL;
$arguments219['id'] = NULL;
$arguments219['lang'] = NULL;
$arguments219['style'] = NULL;
$arguments219['title'] = NULL;
$arguments219['accesskey'] = NULL;
$arguments219['tabindex'] = NULL;
$arguments219['onclick'] = NULL;
$arguments219['alt'] = NULL;
$arguments219['ismap'] = NULL;
$arguments219['longdesc'] = NULL;
$arguments219['usemap'] = NULL;
$arguments219['src'] = NULL;
$arguments219['treatIdAsReference'] = NULL;
$arguments219['image'] = NULL;
$arguments219['crop'] = NULL;
$arguments219['cropVariant'] = 'default';
$arguments219['width'] = NULL;
$arguments219['height'] = NULL;
$arguments219['minWidth'] = NULL;
$arguments219['minHeight'] = NULL;
$arguments219['maxWidth'] = NULL;
$arguments219['maxHeight'] = NULL;
$arguments219['absolute'] = false;
$array221 = array (
);$arguments219['image'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0', $array221);
$array222 = array (
);$arguments219['alt'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.alternative', $array222);
$array223 = array (
);$arguments219['title'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon.0.title', $array223);
$array224 = array (
);$arguments219['width'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.width', $array224);
$array225 = array (
);$arguments219['height'] = $renderingContext->getVariableProvider()->getByPath('settings.navigation.icon.height', $array225);

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '
                                                    </span>
                                                ';
return $output218;
};
$arguments213 = array();
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.icon', $array216);

$expression217 = function($context) {return ($context["node0"]);};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments213['__thenClosure'] = $renderChildrenClosure214;

$output203 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output203 .= '
                                                <span class="navbar-item-text">';
$array226 = array (
);
$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array226)]);

$output203 .= '</span>
                                                <span class="bar"></span>
                                            </a>
                                        ';
return $output203;
};

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output90 .= '
                                </li>
                            ';
return $output90;
};

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                    ';
return $output87;
};
$arguments84 = array();
$arguments84['each'] = NULL;
$arguments84['as'] = NULL;
$arguments84['key'] = NULL;
$arguments84['reverse'] = false;
$arguments84['iteration'] = NULL;
$array86 = array (
);$arguments84['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array86);
$arguments84['as'] = 'mainnavigationItem';

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
                </ul>
            </nav>
        ';
return $output83;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array81);

$expression82 = function($context) {return ($context["node0"]);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = $renderChildrenClosure79;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output0 .= '
    </div>
</header>

';

return $output0;
}


}
#