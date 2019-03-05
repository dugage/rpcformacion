<?php

class __Mustache_25adfa6534c73c2b82488877dcfd18f2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="grading-navigation" class="row-fluid">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="assignment-info" class="span4">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/course/view.php?id=';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('coursename'), $context);
        $buffer .= $value;
        $buffer .= '</a><br/>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/mod/assign/view.php?id=';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div role="tooltip" id="tooltip-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="accesshide">
';
        // 'duedate' section
        $value = $context->find('duedate');
        $buffer .= $this->section92ac5970ba3e3c4c74c16c64e9fe9c3f($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'cutoffdate' section
        $value = $context->find('cutoffdate');
        $buffer .= $this->section2740778e42f1e6f02e0e0aee1e27a745($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'duedate' section
        $value = $context->find('duedate');
        $buffer .= $this->section27b26c9ca97731c6ac82fdf8c219a321($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<br/>
';
        // 'caneditsettings' section
        $value = $context->find('caneditsettings');
        $buffer .= $this->section163db64819c30ffffb78084632976966($context, $indent, $value);
        // 'duedate' section
        $value = $context->find('duedate');
        $buffer .= $this->sectionD5c8ec1e62a33f7b5f143b2af7285dfb($context, $indent, $value);
        $buffer .= $indent . '</span>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="user-info" class="span4" data-assignmentid="';
        $value = $this->resolveValue($context->find('assignmentid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-groupid="';
        $value = $this->resolveValue($context->find('groupid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        if ($partial = $this->mustache->loadPartial('mod_assign/grading_navigation_user_info')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="user-selector" class="span4">
';
        $buffer .= $indent . '    <div class="alignment">
';
        if ($partial = $this->mustache->loadPartial('mod_assign/grading_navigation_user_selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section781e772b238ae1b16e35b70e16a1394f($context, $indent, $value);

        return $buffer;
    }

    private function sectionA16bbc9349eec7195a7f2e7ff15cd30c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'duedatecolon, mod_assign, {{duedatestr}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'duedatecolon, mod_assign, ';
                $value = $this->resolveValue($context->find('duedatestr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92ac5970ba3e3c4c74c16c64e9fe9c3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#str}}duedatecolon, mod_assign, {{duedatestr}}{{/str}}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA16bbc9349eec7195a7f2e7ff15cd30c($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2740778e42f1e6f02e0e0aee1e27a745(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<br>{{cutoffdatestr}}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<br>';
                $value = $this->resolveValue($context->find('cutoffdatestr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27b26c9ca97731c6ac82fdf8c219a321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<br>{{timeremainingstr}}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<br>';
                $value = $this->resolveValue($context->find('timeremainingstr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bb349a181ed9d49e19d879da5efd4de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'editsettings';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editsettings';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82369141a8c30400ef4727dfad7127d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core,{{#str}}editsettings{{/str}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/edit, core,';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0bb349a181ed9d49e19d879da5efd4de($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section163db64819c30ffffb78084632976966(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<a href="{{config.wwwroot}}/course/modedit.php?update={{cmid}}&return=1">{{#pix}}t/edit, core,{{#str}}editsettings{{/str}}{{/pix}}</a>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/course/modedit.php?update=';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&return=1">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section82369141a8c30400ef4727dfad7127d5($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5c8ec1e62a33f7b5f143b2af7285dfb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<small data-region="assignment-tooltip" aria-describedby="tooltip-{{uniqid}}">{{#str}}duedatecolon, mod_assign, {{duedatestr}}{{/str}}</small>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<small data-region="assignment-tooltip" aria-describedby="tooltip-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA16bbc9349eec7195a7f2e7ff15cd30c($context, $indent, $value);
                $buffer .= '</small>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section781e772b238ae1b16e35b70e16a1394f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'mod_assign/grading_navigation\', \'core/tooltip\'], function(GradingNavigation, ToolTip) {
    var nav = new GradingNavigation(\'[data-region="user-selector"]\');
    var tooltip = new ToolTip(\'[data-region="assignment-tooltip"]\');
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'mod_assign/grading_navigation\', \'core/tooltip\'], function(GradingNavigation, ToolTip) {
';
                $buffer .= $indent . '    var nav = new GradingNavigation(\'[data-region="user-selector"]\');
';
                $buffer .= $indent . '    var tooltip = new ToolTip(\'[data-region="assignment-tooltip"]\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
