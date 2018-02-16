<?php

class layout_Default_html_c0b059dc34fea784b4606a2f0ac43c8f2b8fdc19 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= 'frame-';
$array7 = array (
);
$output6 .= $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array7);
return $output6;
};
$arguments4 = array();
$arguments4['value'] = NULL;
$arguments4['name'] = NULL;
$arguments4['name'] = 'frameClass';
$renderChildrenClosure5 = $arguments4['value'] ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= 'frame-type-';
$array11 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('data.CType', $array11);
return $output10;
};
$arguments8 = array();
$arguments8['value'] = NULL;
$arguments8['name'] = NULL;
$arguments8['name'] = 'typeClass';
$renderChildrenClosure9 = $arguments8['value'] ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= 'frame-layout-';
$array15 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('data.layout', $array15);
return $output14;
};
$arguments12 = array();
$arguments12['value'] = NULL;
$arguments12['name'] = NULL;
$arguments12['name'] = 'layoutClass';
$renderChildrenClosure13 = $arguments12['value'] ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= 'frame-background-';
$array19 = array (
);
$output18 .= $renderingContext->getVariableProvider()->getByPath('data.background_color_class', $array19);
return $output18;
};
$arguments16 = array();
$arguments16['value'] = NULL;
$arguments16['name'] = NULL;
$arguments16['name'] = 'backgroundClass';
$renderChildrenClosure17 = $arguments16['value'] ? function() use ($arguments16) { return $arguments16['value']; } : $renderChildrenClosure17;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= 'frame-space-before-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array26);

$expression27 = function($context) {return ($context["node0"]);};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments23['else'] = 'none';
$array28 = array (
);$arguments23['then'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array28);

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);
return $output22;
};
$arguments20 = array();
$arguments20['value'] = NULL;
$arguments20['name'] = NULL;
$arguments20['name'] = 'spaceBeforeClass';
$renderChildrenClosure21 = $arguments20['value'] ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= 'frame-space-after-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array35);

$expression36 = function($context) {return ($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['else'] = 'none';
$array37 = array (
);$arguments32['then'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array37);

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
return $output31;
};
$arguments29 = array();
$arguments29['value'] = NULL;
$arguments29['name'] = NULL;
$arguments29['name'] = 'spaceAfterClass';
$renderChildrenClosure30 = $arguments29['value'] ? function() use ($arguments29) { return $arguments29['value']; } : $renderChildrenClosure30;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= 'background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['src'] = NULL;
$arguments193['treatIdAsReference'] = false;
$arguments193['image'] = NULL;
$arguments193['crop'] = NULL;
$arguments193['cropVariant'] = 'default';
$arguments193['width'] = NULL;
$arguments193['height'] = NULL;
$arguments193['minWidth'] = NULL;
$arguments193['minHeight'] = NULL;
$arguments193['maxWidth'] = NULL;
$arguments193['maxHeight'] = NULL;
$arguments193['absolute'] = false;
$array195 = array (
);$arguments193['image'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0', $array195);

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '\');';
return $output192;
};
$arguments187 = array();
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['0'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0', $array190);

$expression191 = function($context) {return ($context["node0"]);};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression191(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);
$arguments187['__thenClosure'] = $renderChildrenClosure188;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);
};
$arguments185 = array();
$arguments185['value'] = NULL;
$arguments185['name'] = NULL;
$arguments185['name'] = 'itemStyleImage';
$renderChildrenClosure186 = $arguments185['value'] ? function() use ($arguments185) { return $arguments185['value']; } : $renderChildrenClosure186;
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext)]);

$output184 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$array198 = array (
);return $renderingContext->getVariableProvider()->getByPath('itemStyleImage', $array198);
};
$arguments196 = array();
$arguments196['value'] = NULL;
$arguments196['name'] = NULL;
$arguments196['name'] = 'itemStyle';
$renderChildrenClosure197 = $arguments196['value'] ? function() use ($arguments196) { return $arguments196['value']; } : $renderChildrenClosure197;
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext)]);

$output184 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('itemStyleImage', $array204);

$expression205 = function($context) {return ($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['then'] = 'frame-has-backgroundimage';
$arguments201['else'] = 'frame-no-backgroundimage';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);
};
$arguments199 = array();
$arguments199['value'] = NULL;
$arguments199['name'] = NULL;
$arguments199['name'] = 'backgroundImageClass';
$renderChildrenClosure200 = $arguments199['value'] ? function() use ($arguments199) { return $arguments199['value']; } : $renderChildrenClosure200;
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext)]);

$output184 .= '

            <div id="c';
$array206 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array206)]);

$output184 .= '" class="frame ';
$array207 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameClass', $array207)]);

$output184 .= ' ';
$array208 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typeClass', $array208)]);

$output184 .= ' ';
$array209 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundClass', $array209)]);

$output184 .= ' ';
$array210 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClass', $array210)]);

$output184 .= ' ';
$array211 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass', $array211)]);

$output184 .= ' ';
$array212 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass', $array212)]);

$output184 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('itemStyle', $array216);

$expression217 = function($context) {return ($context["node0"]);};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$output218 = '';

$output218 .= ' style="';
$array219 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyle', $array219)]);

$output218 .= '"';
$arguments213['then'] = $output218;

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output184 .= '>
                <div class="frame-container">
                    <div class="frame-inner">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                            <a id="c';
$array226 = array (
);
$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array226)]);

$output225 .= '"></a>
                        ';
return $output225;
};
$arguments220 = array();
$arguments220['then'] = NULL;
$arguments220['else'] = NULL;
$arguments220['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array223);

$expression224 = function($context) {return ($context["node0"]);};
$arguments220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
$arguments220['__thenClosure'] = $renderChildrenClosure221;

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output184 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['section'] = NULL;
$arguments232['partial'] = NULL;
$arguments232['delegate'] = NULL;
$arguments232['renderable'] = NULL;
$arguments232['arguments'] = array (
);
$arguments232['optional'] = false;
$arguments232['default'] = NULL;
$arguments232['contentAs'] = NULL;
$arguments232['partial'] = 'DropIn/Before/All';
$arguments232['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output231 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
                        ';
return $output231;
};
$arguments227 = array();
$arguments227['section'] = NULL;
$arguments227['partial'] = NULL;
$arguments227['delegate'] = NULL;
$arguments227['renderable'] = NULL;
$arguments227['arguments'] = array (
);
$arguments227['optional'] = false;
$arguments227['default'] = NULL;
$arguments227['contentAs'] = NULL;
$arguments227['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array229['0'] = 'true';

$expression230 = function($context) {return TRUE;};
$arguments227['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output184 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['section'] = NULL;
$arguments240['partial'] = NULL;
$arguments240['delegate'] = NULL;
$arguments240['renderable'] = NULL;
$arguments240['arguments'] = array (
);
$arguments240['optional'] = false;
$arguments240['default'] = NULL;
$arguments240['contentAs'] = NULL;
$arguments240['partial'] = 'Header/All';
$arguments240['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
                        ';
return $output239;
};
$arguments235 = array();
$arguments235['section'] = NULL;
$arguments235['partial'] = NULL;
$arguments235['delegate'] = NULL;
$arguments235['renderable'] = NULL;
$arguments235['arguments'] = array (
);
$arguments235['optional'] = false;
$arguments235['default'] = NULL;
$arguments235['contentAs'] = NULL;
$arguments235['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array237['0'] = 'true';

$expression238 = function($context) {return TRUE;};
$arguments235['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression238(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output184 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['section'] = NULL;
$arguments243['partial'] = NULL;
$arguments243['delegate'] = NULL;
$arguments243['renderable'] = NULL;
$arguments243['arguments'] = array (
);
$arguments243['optional'] = false;
$arguments243['default'] = NULL;
$arguments243['contentAs'] = NULL;
$arguments243['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array245['0'] = 'true';

$expression246 = function($context) {return TRUE;};
$arguments243['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output184 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['section'] = NULL;
$arguments252['partial'] = NULL;
$arguments252['delegate'] = NULL;
$arguments252['renderable'] = NULL;
$arguments252['arguments'] = array (
);
$arguments252['optional'] = false;
$arguments252['default'] = NULL;
$arguments252['contentAs'] = NULL;
$arguments252['partial'] = 'Footer/All';
$arguments252['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
                        ';
return $output251;
};
$arguments247 = array();
$arguments247['section'] = NULL;
$arguments247['partial'] = NULL;
$arguments247['delegate'] = NULL;
$arguments247['renderable'] = NULL;
$arguments247['arguments'] = array (
);
$arguments247['optional'] = false;
$arguments247['default'] = NULL;
$arguments247['contentAs'] = NULL;
$arguments247['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array249['0'] = 'true';

$expression250 = function($context) {return TRUE;};
$arguments247['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output184 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['section'] = NULL;
$arguments260['partial'] = NULL;
$arguments260['delegate'] = NULL;
$arguments260['renderable'] = NULL;
$arguments260['arguments'] = array (
);
$arguments260['optional'] = false;
$arguments260['default'] = NULL;
$arguments260['contentAs'] = NULL;
$arguments260['partial'] = 'DropIn/After/All';
$arguments260['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output259 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
                        ';
return $output259;
};
$arguments255 = array();
$arguments255['section'] = NULL;
$arguments255['partial'] = NULL;
$arguments255['delegate'] = NULL;
$arguments255['renderable'] = NULL;
$arguments255['arguments'] = array (
);
$arguments255['optional'] = false;
$arguments255['default'] = NULL;
$arguments255['contentAs'] = NULL;
$arguments255['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array257 = array();
$array257['0'] = 'true';

$expression258 = function($context) {return TRUE;};
$arguments255['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression258(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array257)
					),
					$renderingContext
				);

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output184 .= '
                    </div>
                </div>
            </div>

        ';
return $output184;
};
$arguments182 = array();

$output181 .= '';

$output181 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '

            <a id="c';
$array266 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array266)]);

$output265 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
                <a id="c';
$array273 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array273)]);

$output272 .= '"></a>
            ';
return $output272;
};
$arguments267 = array();
$arguments267['then'] = NULL;
$arguments267['else'] = NULL;
$arguments267['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array270);

$expression271 = function($context) {return ($context["node0"]);};
$arguments267['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression271(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array269)
					),
					$renderingContext
				);
$arguments267['__thenClosure'] = $renderChildrenClosure268;

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output265 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
                <div class="';
$array280 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass', $array280)]);

$output279 .= '"></div>
            ';
return $output279;
};
$arguments274 = array();
$arguments274['then'] = NULL;
$arguments274['else'] = NULL;
$arguments274['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array277 = array (
);$array276['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array277);

$expression278 = function($context) {return ($context["node0"]);};
$arguments274['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
$arguments274['__thenClosure'] = $renderChildrenClosure275;

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output265 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['section'] = NULL;
$arguments286['partial'] = NULL;
$arguments286['delegate'] = NULL;
$arguments286['renderable'] = NULL;
$arguments286['arguments'] = array (
);
$arguments286['optional'] = false;
$arguments286['default'] = NULL;
$arguments286['contentAs'] = NULL;
$arguments286['partial'] = 'DropIn/Before/All';
$arguments286['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
            ';
return $output285;
};
$arguments281 = array();
$arguments281['section'] = NULL;
$arguments281['partial'] = NULL;
$arguments281['delegate'] = NULL;
$arguments281['renderable'] = NULL;
$arguments281['arguments'] = array (
);
$arguments281['optional'] = false;
$arguments281['default'] = NULL;
$arguments281['contentAs'] = NULL;
$arguments281['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array283 = array();
$array283['0'] = 'true';

$expression284 = function($context) {return TRUE;};
$arguments281['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array283)
					),
					$renderingContext
				);

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output265 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['section'] = NULL;
$arguments294['partial'] = NULL;
$arguments294['delegate'] = NULL;
$arguments294['renderable'] = NULL;
$arguments294['arguments'] = array (
);
$arguments294['optional'] = false;
$arguments294['default'] = NULL;
$arguments294['contentAs'] = NULL;
$arguments294['partial'] = 'Header/All';
$arguments294['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
            ';
return $output293;
};
$arguments289 = array();
$arguments289['section'] = NULL;
$arguments289['partial'] = NULL;
$arguments289['delegate'] = NULL;
$arguments289['renderable'] = NULL;
$arguments289['arguments'] = array (
);
$arguments289['optional'] = false;
$arguments289['default'] = NULL;
$arguments289['contentAs'] = NULL;
$arguments289['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array291 = array();
$array291['0'] = 'true';

$expression292 = function($context) {return TRUE;};
$arguments289['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array291)
					),
					$renderingContext
				);

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output265 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['section'] = NULL;
$arguments297['partial'] = NULL;
$arguments297['delegate'] = NULL;
$arguments297['renderable'] = NULL;
$arguments297['arguments'] = array (
);
$arguments297['optional'] = false;
$arguments297['default'] = NULL;
$arguments297['contentAs'] = NULL;
$arguments297['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array299 = array();
$array299['0'] = 'true';

$expression300 = function($context) {return TRUE;};
$arguments297['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression300(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array299)
					),
					$renderingContext
				);

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output265 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['section'] = NULL;
$arguments306['partial'] = NULL;
$arguments306['delegate'] = NULL;
$arguments306['renderable'] = NULL;
$arguments306['arguments'] = array (
);
$arguments306['optional'] = false;
$arguments306['default'] = NULL;
$arguments306['contentAs'] = NULL;
$arguments306['partial'] = 'Footer/All';
$arguments306['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
            ';
return $output305;
};
$arguments301 = array();
$arguments301['section'] = NULL;
$arguments301['partial'] = NULL;
$arguments301['delegate'] = NULL;
$arguments301['renderable'] = NULL;
$arguments301['arguments'] = array (
);
$arguments301['optional'] = false;
$arguments301['default'] = NULL;
$arguments301['contentAs'] = NULL;
$arguments301['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array303 = array();
$array303['0'] = 'true';

$expression304 = function($context) {return TRUE;};
$arguments301['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array303)
					),
					$renderingContext
				);

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output265 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['section'] = NULL;
$arguments314['partial'] = NULL;
$arguments314['delegate'] = NULL;
$arguments314['renderable'] = NULL;
$arguments314['arguments'] = array (
);
$arguments314['optional'] = false;
$arguments314['default'] = NULL;
$arguments314['contentAs'] = NULL;
$arguments314['partial'] = 'DropIn/After/All';
$arguments314['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output313 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
            ';
return $output313;
};
$arguments309 = array();
$arguments309['section'] = NULL;
$arguments309['partial'] = NULL;
$arguments309['delegate'] = NULL;
$arguments309['renderable'] = NULL;
$arguments309['arguments'] = array (
);
$arguments309['optional'] = false;
$arguments309['default'] = NULL;
$arguments309['contentAs'] = NULL;
$arguments309['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array311 = array();
$array311['0'] = 'true';

$expression312 = function($context) {return TRUE;};
$arguments309['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array311)
					),
					$renderingContext
				);

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output265 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
                <div class="';
$array323 = array (
);
$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass', $array323)]);

$output322 .= '"></div>
            ';
return $output322;
};
$arguments317 = array();
$arguments317['then'] = NULL;
$arguments317['else'] = NULL;
$arguments317['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array319 = array();
$array320 = array (
);$array319['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array320);

$expression321 = function($context) {return ($context["node0"]);};
$arguments317['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression321(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array319)
					),
					$renderingContext
				);
$arguments317['__thenClosure'] = $renderChildrenClosure318;

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output265 .= '

        ';
return $output265;
};
$arguments263 = array();
$arguments263['if'] = NULL;

$output181 .= '';

$output181 .= '
    ';
return $output181;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array179);
$array178['1'] = ' != none';

$expression180 = function($context) {return (($context["node0"]) != "none");};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments38['__thenClosure'] = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= 'background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['src'] = NULL;
$arguments49['treatIdAsReference'] = false;
$arguments49['image'] = NULL;
$arguments49['crop'] = NULL;
$arguments49['cropVariant'] = 'default';
$arguments49['width'] = NULL;
$arguments49['height'] = NULL;
$arguments49['minWidth'] = NULL;
$arguments49['minHeight'] = NULL;
$arguments49['maxWidth'] = NULL;
$arguments49['maxHeight'] = NULL;
$arguments49['absolute'] = false;
$array51 = array (
);$arguments49['image'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0', $array51);

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '\');';
return $output48;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0', $array46);

$expression47 = function($context) {return ($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = $renderChildrenClosure44;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);
};
$arguments41 = array();
$arguments41['value'] = NULL;
$arguments41['name'] = NULL;
$arguments41['name'] = 'itemStyleImage';
$renderChildrenClosure42 = $arguments41['value'] ? function() use ($arguments41) { return $arguments41['value']; } : $renderChildrenClosure42;
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('itemStyleImage', $array54);
};
$arguments52 = array();
$arguments52['value'] = NULL;
$arguments52['name'] = NULL;
$arguments52['name'] = 'itemStyle';
$renderChildrenClosure53 = $arguments52['value'] ? function() use ($arguments52) { return $arguments52['value']; } : $renderChildrenClosure53;
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output40 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('itemStyleImage', $array60);

$expression61 = function($context) {return ($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['then'] = 'frame-has-backgroundimage';
$arguments57['else'] = 'frame-no-backgroundimage';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);
};
$arguments55 = array();
$arguments55['value'] = NULL;
$arguments55['name'] = NULL;
$arguments55['name'] = 'backgroundImageClass';
$renderChildrenClosure56 = $arguments55['value'] ? function() use ($arguments55) { return $arguments55['value']; } : $renderChildrenClosure56;
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output40 .= '

            <div id="c';
$array62 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array62)]);

$output40 .= '" class="frame ';
$array63 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameClass', $array63)]);

$output40 .= ' ';
$array64 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typeClass', $array64)]);

$output40 .= ' ';
$array65 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundClass', $array65)]);

$output40 .= ' ';
$array66 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClass', $array66)]);

$output40 .= ' ';
$array67 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass', $array67)]);

$output40 .= ' ';
$array68 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass', $array68)]);

$output40 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('itemStyle', $array72);

$expression73 = function($context) {return ($context["node0"]);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$output74 = '';

$output74 .= ' style="';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyle', $array75)]);

$output74 .= '"';
$arguments69['then'] = $output74;

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output40 .= '>
                <div class="frame-container">
                    <div class="frame-inner">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                            <a id="c';
$array82 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array82)]);

$output81 .= '"></a>
                        ';
return $output81;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array79);

$expression80 = function($context) {return ($context["node0"]);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = $renderChildrenClosure77;

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['renderable'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['partial'] = 'DropIn/Before/All';
$arguments88['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                        ';
return $output87;
};
$arguments83 = array();
$arguments83['section'] = NULL;
$arguments83['partial'] = NULL;
$arguments83['delegate'] = NULL;
$arguments83['renderable'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['optional'] = false;
$arguments83['default'] = NULL;
$arguments83['contentAs'] = NULL;
$arguments83['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array85['0'] = 'true';

$expression86 = function($context) {return TRUE;};
$arguments83['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['section'] = NULL;
$arguments96['partial'] = NULL;
$arguments96['delegate'] = NULL;
$arguments96['renderable'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$arguments96['default'] = NULL;
$arguments96['contentAs'] = NULL;
$arguments96['partial'] = 'Header/All';
$arguments96['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
                        ';
return $output95;
};
$arguments91 = array();
$arguments91['section'] = NULL;
$arguments91['partial'] = NULL;
$arguments91['delegate'] = NULL;
$arguments91['renderable'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['optional'] = false;
$arguments91['default'] = NULL;
$arguments91['contentAs'] = NULL;
$arguments91['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array93['0'] = 'true';

$expression94 = function($context) {return TRUE;};
$arguments91['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['section'] = NULL;
$arguments99['partial'] = NULL;
$arguments99['delegate'] = NULL;
$arguments99['renderable'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['optional'] = false;
$arguments99['default'] = NULL;
$arguments99['contentAs'] = NULL;
$arguments99['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array101['0'] = 'true';

$expression102 = function($context) {return TRUE;};
$arguments99['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['section'] = NULL;
$arguments108['partial'] = NULL;
$arguments108['delegate'] = NULL;
$arguments108['renderable'] = NULL;
$arguments108['arguments'] = array (
);
$arguments108['optional'] = false;
$arguments108['default'] = NULL;
$arguments108['contentAs'] = NULL;
$arguments108['partial'] = 'Footer/All';
$arguments108['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
                        ';
return $output107;
};
$arguments103 = array();
$arguments103['section'] = NULL;
$arguments103['partial'] = NULL;
$arguments103['delegate'] = NULL;
$arguments103['renderable'] = NULL;
$arguments103['arguments'] = array (
);
$arguments103['optional'] = false;
$arguments103['default'] = NULL;
$arguments103['contentAs'] = NULL;
$arguments103['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array105['0'] = 'true';

$expression106 = function($context) {return TRUE;};
$arguments103['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
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
$arguments116['partial'] = 'DropIn/After/All';
$arguments116['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
                        ';
return $output115;
};
$arguments111 = array();
$arguments111['section'] = NULL;
$arguments111['partial'] = NULL;
$arguments111['delegate'] = NULL;
$arguments111['renderable'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['optional'] = false;
$arguments111['default'] = NULL;
$arguments111['contentAs'] = NULL;
$arguments111['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array113['0'] = 'true';

$expression114 = function($context) {return TRUE;};
$arguments111['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output40 .= '
                    </div>
                </div>
            </div>

        ';
return $output40;
};
$arguments38['__elseClosures'][] = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '

            <a id="c';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array120)]);

$output119 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                <a id="c';
$array127 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array127)]);

$output126 .= '"></a>
            ';
return $output126;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array124);

$expression125 = function($context) {return ($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = $renderChildrenClosure122;

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                <div class="';
$array134 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass', $array134)]);

$output133 .= '"></div>
            ';
return $output133;
};
$arguments128 = array();
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$arguments128['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array131);

$expression132 = function($context) {return ($context["node0"]);};
$arguments128['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments128['__thenClosure'] = $renderChildrenClosure129;

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['section'] = NULL;
$arguments140['partial'] = NULL;
$arguments140['delegate'] = NULL;
$arguments140['renderable'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['optional'] = false;
$arguments140['default'] = NULL;
$arguments140['contentAs'] = NULL;
$arguments140['partial'] = 'DropIn/Before/All';
$arguments140['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
            ';
return $output139;
};
$arguments135 = array();
$arguments135['section'] = NULL;
$arguments135['partial'] = NULL;
$arguments135['delegate'] = NULL;
$arguments135['renderable'] = NULL;
$arguments135['arguments'] = array (
);
$arguments135['optional'] = false;
$arguments135['default'] = NULL;
$arguments135['contentAs'] = NULL;
$arguments135['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array137['0'] = 'true';

$expression138 = function($context) {return TRUE;};
$arguments135['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['section'] = NULL;
$arguments148['partial'] = NULL;
$arguments148['delegate'] = NULL;
$arguments148['renderable'] = NULL;
$arguments148['arguments'] = array (
);
$arguments148['optional'] = false;
$arguments148['default'] = NULL;
$arguments148['contentAs'] = NULL;
$arguments148['partial'] = 'Header/All';
$arguments148['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output147 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
            ';
return $output147;
};
$arguments143 = array();
$arguments143['section'] = NULL;
$arguments143['partial'] = NULL;
$arguments143['delegate'] = NULL;
$arguments143['renderable'] = NULL;
$arguments143['arguments'] = array (
);
$arguments143['optional'] = false;
$arguments143['default'] = NULL;
$arguments143['contentAs'] = NULL;
$arguments143['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array145['0'] = 'true';

$expression146 = function($context) {return TRUE;};
$arguments143['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['section'] = NULL;
$arguments151['partial'] = NULL;
$arguments151['delegate'] = NULL;
$arguments151['renderable'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['optional'] = false;
$arguments151['default'] = NULL;
$arguments151['contentAs'] = NULL;
$arguments151['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array153['0'] = 'true';

$expression154 = function($context) {return TRUE;};
$arguments151['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['section'] = NULL;
$arguments160['partial'] = NULL;
$arguments160['delegate'] = NULL;
$arguments160['renderable'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['optional'] = false;
$arguments160['default'] = NULL;
$arguments160['contentAs'] = NULL;
$arguments160['partial'] = 'Footer/All';
$arguments160['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output159 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= '
            ';
return $output159;
};
$arguments155 = array();
$arguments155['section'] = NULL;
$arguments155['partial'] = NULL;
$arguments155['delegate'] = NULL;
$arguments155['renderable'] = NULL;
$arguments155['arguments'] = array (
);
$arguments155['optional'] = false;
$arguments155['default'] = NULL;
$arguments155['contentAs'] = NULL;
$arguments155['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array157['0'] = 'true';

$expression158 = function($context) {return TRUE;};
$arguments155['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['section'] = NULL;
$arguments168['partial'] = NULL;
$arguments168['delegate'] = NULL;
$arguments168['renderable'] = NULL;
$arguments168['arguments'] = array (
);
$arguments168['optional'] = false;
$arguments168['default'] = NULL;
$arguments168['contentAs'] = NULL;
$arguments168['partial'] = 'DropIn/After/All';
$arguments168['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
            ';
return $output167;
};
$arguments163 = array();
$arguments163['section'] = NULL;
$arguments163['partial'] = NULL;
$arguments163['delegate'] = NULL;
$arguments163['renderable'] = NULL;
$arguments163['arguments'] = array (
);
$arguments163['optional'] = false;
$arguments163['default'] = NULL;
$arguments163['contentAs'] = NULL;
$arguments163['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array165['0'] = 'true';

$expression166 = function($context) {return TRUE;};
$arguments163['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                <div class="';
$array177 = array (
);
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass', $array177)]);

$output176 .= '"></div>
            ';
return $output176;
};
$arguments171 = array();
$arguments171['then'] = NULL;
$arguments171['else'] = NULL;
$arguments171['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array174);

$expression175 = function($context) {return ($context["node0"]);};
$arguments171['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments171['__thenClosure'] = $renderChildrenClosure172;

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output119 .= '

        ';
return $output119;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#