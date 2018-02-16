<?php

class Standard_action_Carousel_a66d03204ffa38de043fd512afd5cdd18e235b59 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <div id="carousel-';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array7)]);

$output6 .= '" class="carousel carousel-transition-';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.transition', $array8)]);

$output6 .= ' slide" data-interval="';
$array9 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array9)]);

$output6 .= '" data-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array13);

$expression14 = function($context) {return ($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['then'] = 'true';
$arguments10['else'] = 'false';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= 'background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['src'] = NULL;
$arguments27['treatIdAsReference'] = false;
$arguments27['image'] = NULL;
$arguments27['crop'] = NULL;
$arguments27['cropVariant'] = 'default';
$arguments27['width'] = NULL;
$arguments27['height'] = NULL;
$arguments27['minWidth'] = NULL;
$arguments27['minHeight'] = NULL;
$arguments27['maxWidth'] = NULL;
$arguments27['maxHeight'] = NULL;
$arguments27['absolute'] = false;
$array29 = array (
);$arguments27['image'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array29);
$array30 = array (
);$arguments27['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.background_image_maxwidth', $array30);

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '\');';
return $output26;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array24);

$expression25 = function($context) {return ($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
};
$arguments19 = array();
$arguments19['value'] = NULL;
$arguments19['name'] = NULL;
$arguments19['name'] = 'itemStyleImage';
$renderChildrenClosure20 = $arguments19['value'] ? function() use ($arguments19) { return $arguments19['value']; } : $renderChildrenClosure20;
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= 'background-color: ';
$array39 = array (
);
$output38 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array39);

$output38 .= ';';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array36);

$expression37 = function($context) {return ($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);
};
$arguments31 = array();
$arguments31['value'] = NULL;
$arguments31['name'] = NULL;
$arguments31['name'] = 'itemStyleColor';
$renderChildrenClosure32 = $arguments31['value'] ? function() use ($arguments31) { return $arguments31['value']; } : $renderChildrenClosure32;
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output18 .= '
                    <div class="item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array43);

$expression44 = function($context) {return ($context["node0"]);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments40['then'] = ' active';

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output18 .= ' carousel-item-type carousel-item-type-';
$array45 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array45)]);

$output18 .= '" data-itemno="';
$array46 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.index', $array46)]);

$output18 .= '" style="';
$array47 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyleImage', $array47)]);

$output18 .= ' ';
$array48 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyleColor', $array48)]);

$output18 .= '">
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
$output51 = '';

$output51 .= 'Carousel/Item/';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array54);
};
$arguments52 = array();

$output51 .= BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);
$arguments49['partial'] = $output51;
$arguments49['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output18 .= '
                    </div>
                ';
return $output18;
};
$arguments15 = array();
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$array17 = array (
);$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array17);
$arguments15['as'] = 'item';
$arguments15['iteration'] = 'iteration';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['section'] = NULL;
$arguments56['partial'] = NULL;
$arguments56['delegate'] = NULL;
$arguments56['renderable'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['optional'] = false;
$arguments56['default'] = NULL;
$arguments56['contentAs'] = NULL;
$arguments56['partial'] = 'Carousel/Control/Indicator';
$arguments56['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['section'] = NULL;
$arguments59['partial'] = NULL;
$arguments59['delegate'] = NULL;
$arguments59['renderable'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['optional'] = false;
$arguments59['default'] = NULL;
$arguments59['contentAs'] = NULL;
$arguments59['partial'] = 'Carousel/Control/Control';
$arguments59['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output6 .= '
        </div>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array4);

$expression5 = function($context) {return ($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output62 = '';

$output62 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['name'] = NULL;
$arguments63['name'] = 'Default';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output62 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
        <div id="carousel-';
$array74 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array74)]);

$output73 .= '" class="carousel carousel-transition-';
$array75 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.transition', $array75)]);

$output73 .= ' slide" data-interval="';
$array76 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array76)]);

$output73 .= '" data-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array80);

$expression81 = function($context) {return ($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['then'] = 'true';
$arguments77['else'] = 'false';

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output73 .= '" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= 'background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['src'] = NULL;
$arguments94['treatIdAsReference'] = false;
$arguments94['image'] = NULL;
$arguments94['crop'] = NULL;
$arguments94['cropVariant'] = 'default';
$arguments94['width'] = NULL;
$arguments94['height'] = NULL;
$arguments94['minWidth'] = NULL;
$arguments94['minHeight'] = NULL;
$arguments94['maxWidth'] = NULL;
$arguments94['maxHeight'] = NULL;
$arguments94['absolute'] = false;
$array96 = array (
);$arguments94['image'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array96);
$array97 = array (
);$arguments94['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.background_image_maxwidth', $array97);

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '\');';
return $output93;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array91);

$expression92 = function($context) {return ($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = $renderChildrenClosure89;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);
};
$arguments86 = array();
$arguments86['value'] = NULL;
$arguments86['name'] = NULL;
$arguments86['name'] = 'itemStyleImage';
$renderChildrenClosure87 = $arguments86['value'] ? function() use ($arguments86) { return $arguments86['value']; } : $renderChildrenClosure87;
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= 'background-color: ';
$array106 = array (
);
$output105 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array106);

$output105 .= ';';
return $output105;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array103);

$expression104 = function($context) {return ($context["node0"]);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = $renderChildrenClosure101;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);
};
$arguments98 = array();
$arguments98['value'] = NULL;
$arguments98['name'] = NULL;
$arguments98['name'] = 'itemStyleColor';
$renderChildrenClosure99 = $arguments98['value'] ? function() use ($arguments98) { return $arguments98['value']; } : $renderChildrenClosure99;
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output85 .= '
                    <div class="item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array110);

$expression111 = function($context) {return ($context["node0"]);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['then'] = ' active';

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output85 .= ' carousel-item-type carousel-item-type-';
$array112 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array112)]);

$output85 .= '" data-itemno="';
$array113 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.index', $array113)]);

$output85 .= '" style="';
$array114 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyleImage', $array114)]);

$output85 .= ' ';
$array115 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyleColor', $array115)]);

$output85 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['section'] = NULL;
$arguments116['partial'] = NULL;
$arguments116['delegate'] = NULL;
$arguments116['renderable'] = NULL;
$arguments116['arguments'] = array (
);
$arguments116['optional'] = false;
$arguments116['default'] = NULL;
$arguments116['contentAs'] = NULL;
$output118 = '';

$output118 .= 'Carousel/Item/';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$array121 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array121);
};
$arguments119 = array();

$output118 .= BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);
$arguments116['partial'] = $output118;
$arguments116['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output85 .= '
                    </div>
                ';
return $output85;
};
$arguments82 = array();
$arguments82['each'] = NULL;
$arguments82['as'] = NULL;
$arguments82['key'] = NULL;
$arguments82['reverse'] = false;
$arguments82['iteration'] = NULL;
$array84 = array (
);$arguments82['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array84);
$arguments82['as'] = 'item';
$arguments82['iteration'] = 'iteration';

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output73 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['section'] = NULL;
$arguments123['partial'] = NULL;
$arguments123['delegate'] = NULL;
$arguments123['renderable'] = NULL;
$arguments123['arguments'] = array (
);
$arguments123['optional'] = false;
$arguments123['default'] = NULL;
$arguments123['contentAs'] = NULL;
$arguments123['partial'] = 'Carousel/Control/Indicator';
$arguments123['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output73 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['section'] = NULL;
$arguments126['partial'] = NULL;
$arguments126['delegate'] = NULL;
$arguments126['renderable'] = NULL;
$arguments126['arguments'] = array (
);
$arguments126['optional'] = false;
$arguments126['default'] = NULL;
$arguments126['contentAs'] = NULL;
$arguments126['partial'] = 'Carousel/Control/Control';
$arguments126['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output73 .= '
        </div>
    ';
return $output73;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array71);

$expression72 = function($context) {return ($context["node0"]);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = $renderChildrenClosure69;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '

';
return $output67;
};
$arguments65 = array();
$arguments65['name'] = NULL;
$arguments65['name'] = 'Main';

$output62 .= NULL;

$output62 .= '

';

return $output62;
}


}
#