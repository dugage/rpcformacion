<?php

class __Mustache_c692d32c33169eef0e55b67ebc202d8a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'tagscount' section
        $value = $context->find('tagscount');
        $buffer .= $this->section695be05dd90607c235894f2021b70ae0($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section33e66d938e28bd0bf1fbb26c634e4d20($context, $indent, $value);

        return $buffer;
    }

    private function sectionF45dcbaabc3bf070391b82e0702a7169(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <b>{{label}}:</b>
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
                
                $buffer .= $indent . '    <b>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ':</b>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC97881a730b88ac5af39b988a93d9309(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="overlimit"';
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
                
                $buffer .= 'class="overlimit"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35cd54248ef1a2a54527fd6114b87692(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'standardtag';
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
                
                $buffer .= 'standardtag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC61238b517eb852bc32204d2302eb1cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="flagged-tag">{{name}}</span></a>
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
                
                $buffer .= $indent . '                    <span class="flagged-tag">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8231bd104a9d0dbaf957444b14bd45e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li {{#overlimit}}class="overlimit"{{/overlimit}}>
                <a href="{{viewurl}}" class="label label-info {{#isstandard}}standardtag{{/isstandard}}" >
                {{#flag}}
                    <span class="flagged-tag">{{name}}</span></a>
                {{/flag}}
                {{^flag}}
                    {{name}}</a>
                {{/flag}}
            </li>
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
                
                $buffer .= $indent . '            <li ';
                // 'overlimit' section
                $value = $context->find('overlimit');
                $buffer .= $this->sectionC97881a730b88ac5af39b988a93d9309($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="label label-info ';
                // 'isstandard' section
                $value = $context->find('isstandard');
                $buffer .= $this->section35cd54248ef1a2a54527fd6114b87692($context, $indent, $value);
                $buffer .= '" >
';
                // 'flag' section
                $value = $context->find('flag');
                $buffer .= $this->sectionC61238b517eb852bc32204d2302eb1cd($context, $indent, $value);
                // 'flag' inverted section
                $value = $context->find('flag');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88b25ad7fde04eac92bb3043d7e6ed40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'moretags, core_tag';
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
                
                $buffer .= 'moretags, core_tag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c41e879729f0a186e15bde6fbb7ab5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'lesstags, core_tag';
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
                
                $buffer .= 'lesstags, core_tag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40e9b5dae5b1aca71f88038434c2e0a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="visibleifjs">
                <a href="#" class="tagmorelink">{{#str}}moretags, core_tag{{/str}}</a>
            </li>
            <li class="visibleifjs">
                <a href="#" class="taglesslink">{{#str}}lesstags, core_tag{{/str}}</a>
            </li>
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
                
                $buffer .= $indent . '            <li class="visibleifjs">
';
                $buffer .= $indent . '                <a href="#" class="tagmorelink">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section88b25ad7fde04eac92bb3043d7e6ed40($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $buffer .= $indent . '            <li class="visibleifjs">
';
                $buffer .= $indent . '                <a href="#" class="taglesslink">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5c41e879729f0a186e15bde6fbb7ab5d($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section695be05dd90607c235894f2021b70ae0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="tag_list hideoverlimit {{classes}}">
    {{#label}}
    <b>{{label}}:</b>
    {{/label}}
    <ul class="inline-list">
        {{#tags}}
            <li {{#overlimit}}class="overlimit"{{/overlimit}}>
                <a href="{{viewurl}}" class="label label-info {{#isstandard}}standardtag{{/isstandard}}" >
                {{#flag}}
                    <span class="flagged-tag">{{name}}</span></a>
                {{/flag}}
                {{^flag}}
                    {{name}}</a>
                {{/flag}}
            </li>
        {{/tags}}
        {{#overflow}}
            <li class="visibleifjs">
                <a href="#" class="tagmorelink">{{#str}}moretags, core_tag{{/str}}</a>
            </li>
            <li class="visibleifjs">
                <a href="#" class="taglesslink">{{#str}}lesstags, core_tag{{/str}}</a>
            </li>
        {{/overflow}}
    </ul>
    </div>
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
                
                $buffer .= $indent . '    <div class="tag_list hideoverlimit ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'label' section
                $value = $context->find('label');
                $buffer .= $this->sectionF45dcbaabc3bf070391b82e0702a7169($context, $indent, $value);
                $buffer .= $indent . '    <ul class="inline-list">
';
                // 'tags' section
                $value = $context->find('tags');
                $buffer .= $this->section8231bd104a9d0dbaf957444b14bd45e2($context, $indent, $value);
                // 'overflow' section
                $value = $context->find('overflow');
                $buffer .= $this->section40e9b5dae5b1aca71f88038434c2e0a5($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33e66d938e28bd0bf1fbb26c634e4d20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    $(\'.tag_list .tagmorelink\').click(function(e) {
        e.preventDefault();
        $(this).closest(\'.tag_list\').removeClass(\'hideoverlimit\');
    });
    $(\'.tag_list .taglesslink\').click(function(e) {
        e.preventDefault();
        $(this).closest(\'.tag_list\').addClass(\'hideoverlimit\');
    });
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
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    $(\'.tag_list .tagmorelink\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        $(this).closest(\'.tag_list\').removeClass(\'hideoverlimit\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    $(\'.tag_list .taglesslink\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        $(this).closest(\'.tag_list\').addClass(\'hideoverlimit\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
