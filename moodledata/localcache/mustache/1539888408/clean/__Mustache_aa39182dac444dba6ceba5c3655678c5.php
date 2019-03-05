<?php

class __Mustache_aa39182dac444dba6ceba5c3655678c5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="user-evidence-list">
';
        $buffer .= $indent . '<div class="pull-left">
';
        // 'navigation' section
        $value = $context->find('navigation');
        $buffer .= $this->sectionAf45191b283287eecfe6ac283c4d6ecb($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<table class="generaltable fullwidth">
';
        $buffer .= $indent . '    <caption>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCe5421d4c649771b9085da30d4f4d996($context, $indent, $value);
        $buffer .= '</caption>
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th scope="col" width="20%">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section02e7eb8a8e77aa4382e5720adcf40e3c($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section189c206abd0228c59683660c5bc09803($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD532848551486d26a3a5f99d66e538e7($context, $indent, $value);
        $buffer .= ' (';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6cf3cf31f053d15ce18f5e7bf34f2d21($context, $indent, $value);
        $buffer .= ' / ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionFdf4b712aeac4344ee4d7982a4acedd6($context, $indent, $value);
        $buffer .= ')</th>
';
        // 'canmanage' section
        $value = $context->find('canmanage');
        $buffer .= $this->section5ec0873d80956799c9d70ee3dd32c44f($context, $indent, $value);
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        // 'evidence' section
        $value = $context->find('evidence');
        $buffer .= $this->section8e273d7edaa264a31685b3af88c91012($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';
        $buffer .= $indent . '
';
        // 'evidence' inverted section
        $value = $context->find('evidence');
        if (empty($value)) {
            
            $buffer .= $indent . '    <p class="alert alert-info">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section8a8c2ab79873ca00f2d66adeb9d83be3($context, $indent, $value);
            $buffer .= '</p>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionCf42503cecd41af8c5403c4a50513510($context, $indent, $value);

        return $buffer;
    }

    private function sectionAf45191b283287eecfe6ac283c4d6ecb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{.}}}
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
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe5421d4c649771b9085da30d4f4d996(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'listofevidence, tool_lp';
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
                
                $buffer .= 'listofevidence, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02e7eb8a8e77aa4382e5720adcf40e3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'userevidencename, tool_lp';
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
                
                $buffer .= 'userevidencename, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section189c206abd0228c59683660c5bc09803(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'userevidencesummary, tool_lp';
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
                
                $buffer .= 'userevidencesummary, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD532848551486d26a3a5f99d66e538e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'linkedcompetencies, tool_lp';
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
                
                $buffer .= 'linkedcompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cf3cf31f053d15ce18f5e7bf34f2d21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'status, tool_lp';
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
                
                $buffer .= 'status, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdf4b712aeac4344ee4d7982a4acedd6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'reviewer, tool_lp';
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
                
                $buffer .= 'reviewer, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4df404defbaa4e47c852157743964c8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions, tool_lp';
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
                
                $buffer .= 'actions, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ec0873d80956799c9d70ee3dd32c44f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <th scope="col">{{#str}}actions, tool_lp{{/str}}</th>
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
                
                $buffer .= $indent . '                <th scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4df404defbaa4e47c852157743964c8c($context, $indent, $value);
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f09300ddc1d5f291cff6463e2af0981(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'url, tool_lp';
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
                
                $buffer .= 'url, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ff77f92121f9db79b574c83b3f34a15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>{{#pix}}url, tool_lp{{/pix}} <a href="{{url}}" title="{{url}}">{{urlshort}}</a></li>
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
                
                $buffer .= $indent . '                            <li>';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0f09300ddc1d5f291cff6463e2af0981($context, $indent, $value);
                $buffer .= ' <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('urlshort'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1543f2641deb3acf923f9b3e44ee468c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li><img src="{{iconurl}}" alt=""> <a href="{{url}}" title="{{filename}}">{{filenameshort}}</a></li>
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
                
                $buffer .= $indent . '                            <li><img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt=""> <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('filenameshort'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21fa25196f4eaecd42da4371c474be60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <ul class="user-evidence-documents">
                        {{#url}}
                            <li>{{#pix}}url, tool_lp{{/pix}} <a href="{{url}}" title="{{url}}">{{urlshort}}</a></li>
                        {{/url}}
                        {{#files}}
                            <li><img src="{{iconurl}}" alt=""> <a href="{{url}}" title="{{filename}}">{{filenameshort}}</a></li>
                        {{/files}}
                    </ul>
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
                
                $buffer .= $indent . '                    <ul class="user-evidence-documents">
';
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->section3ff77f92121f9db79b574c83b3f34a15($context, $indent, $value);
                // 'files' section
                $value = $context->find('files');
                $buffer .= $this->section1543f2641deb3acf923f9b3e44ee468c($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section014e982de6e3fa35f51d311acc54be91(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' / {{usercompetency.reviewer.fullname}}';
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
                
                $buffer .= ' / ';
                $value = $this->resolveValue($context->findDot('usercompetency.reviewer.fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ee1e15fd63a3f8cb24e718f5fe5a91e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li>
                            {{{competency.shortname}}} <small><em>{{competency.idnumber}}</em></small> ({{usercompetency.statusname}}{{#usercompetency.reviewer.fullname}} / {{usercompetency.reviewer.fullname}}{{/usercompetency.reviewer.fullname}})
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
                
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->findDot('competency.shortname'), $context);
                $buffer .= $value;
                $buffer .= ' <small><em>';
                $value = $this->resolveValue($context->findDot('competency.idnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</em></small> (';
                $value = $this->resolveValue($context->findDot('usercompetency.statusname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                // 'usercompetency.reviewer.fullname' section
                $value = $context->findDot('usercompetency.reviewer.fullname');
                $buffer .= $this->section014e982de6e3fa35f51d311acc54be91($context, $indent, $value);
                $buffer .= ')
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e3ad786640a07cab32419f85ae33a27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <ul class="user-evidence-competencies">
                    {{#usercompetencies}}
                        <li>
                            {{{competency.shortname}}} <small><em>{{competency.idnumber}}</em></small> ({{usercompetency.statusname}}{{#usercompetency.reviewer.fullname}} / {{usercompetency.reviewer.fullname}}{{/usercompetency.reviewer.fullname}})
                        </li>
                    {{/usercompetencies}}
                    </ul>
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
                
                $buffer .= $indent . '                    <ul class="user-evidence-competencies">
';
                // 'usercompetencies' section
                $value = $context->find('usercompetencies');
                $buffer .= $this->section5ee1e15fd63a3f8cb24e718f5fe5a91e($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
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
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06156a95c0067bea78d4929542c7acc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit';
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
                
                $buffer .= 't/edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB949b1038391d2dcd15e71e8747e8d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'editthisuserevidence, tool_lp';
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
                
                $buffer .= 'editthisuserevidence, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22ee337edf54458589e0dbd973a89fe1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 't/add';
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
                
                $buffer .= 't/add';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1bd883c9caac0f80b97abfaa6f3a05b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'linkcompetencies, tool_lp';
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
                
                $buffer .= 'linkcompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72cd2fc938bdbe048ba9c9d83ab1cc16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li>
                            <a href="#" data-action="link-competency">
                                {{#pix}}t/add{{/pix}} {{#str}}linkcompetencies, tool_lp{{/str}}
                            </a>
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
                
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a href="#" data-action="link-competency">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section22ee337edf54458589e0dbd973a89fe1($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD1bd883c9caac0f80b97abfaa6f3a05b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42541c7aa52ef056472697b2f491023d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'sendcompetenciestoreview, tool_lp';
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
                
                $buffer .= 'sendcompetenciestoreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section164e871b9170fd2140595670ad4f9c08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete';
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
                
                $buffer .= 't/delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1813357bb4929e13f4d65bf597563ede(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'deletethisuserevidence, tool_lp';
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
                
                $buffer .= 'deletethisuserevidence, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01ff23bd894d655e9755c5f6004e5c89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <td>
                <div style="display: inline-block;">
                <ul title="{{#str}}edit{{/str}}" class="user-evidence-actions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{pluginbaseurl}}/user_evidence_edit.php?id={{id}}&amp;userid={{userid}}&amp;return=list">
                                {{#pix}}t/edit{{/pix}} {{#str}}editthisuserevidence, tool_lp{{/str}}
                            </a>
                        </li>
                        {{#userhasplan}}
                        <li>
                            <a href="#" data-action="link-competency">
                                {{#pix}}t/add{{/pix}} {{#str}}linkcompetencies, tool_lp{{/str}}
                            </a>
                        </li>
                        {{/userhasplan}}
                        <li>
                            <a data-action="send-competencies-review" href="#">
                                {{#pix}}t/edit{{/pix}} {{#str}}sendcompetenciestoreview, tool_lp{{/str}}
                            </a>
                        </li>
                        <li>
                            <a data-action="user-evidence-delete" href="#">
                                {{#pix}}t/delete{{/pix}} {{#str}}deletethisuserevidence, tool_lp{{/str}}
                            </a>
                        </li>
                    </ul>
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
                
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <div style="display: inline-block;">
';
                $buffer .= $indent . '                <ul title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '" class="user-evidence-actions">
';
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                    <a href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '</a><b class="caret"></b>
';
                $buffer .= $indent . '                    <ul class="dropdown-menu">
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/user_evidence_edit.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;userid=';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;return=list">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB949b1038391d2dcd15e71e8747e8d53($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                // 'userhasplan' section
                $value = $context->find('userhasplan');
                $buffer .= $this->section72cd2fc938bdbe048ba9c9d83ab1cc16($context, $indent, $value);
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a data-action="send-competencies-review" href="#">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section42541c7aa52ef056472697b2f491023d($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a data-action="user-evidence-delete" href="#">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section164e871b9170fd2140595670ad4f9c08($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1813357bb4929e13f4d65bf597563ede($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e273d7edaa264a31685b3af88c91012(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr data-region=\'user-evidence-node\' data-id="{{id}}" data-userid="{{userid}}">
            <td><a href="{{pluginbaseurl}}/user_evidence.php?id={{id}}">{{{name}}}</a></td>
            <td>
                {{^hasurlorfiles}}
                    -
                {{/hasurlorfiles}}
                {{#hasurlorfiles}}
                    <ul class="user-evidence-documents">
                        {{#url}}
                            <li>{{#pix}}url, tool_lp{{/pix}} <a href="{{url}}" title="{{url}}">{{urlshort}}</a></li>
                        {{/url}}
                        {{#files}}
                            <li><img src="{{iconurl}}" alt=""> <a href="{{url}}" title="{{filename}}">{{filenameshort}}</a></li>
                        {{/files}}
                    </ul>
                {{/hasurlorfiles}}
            </td>
            <td>
                {{^competencycount}}
                -
                {{/competencycount}}
                {{#competencycount}}
                    <ul class="user-evidence-competencies">
                    {{#usercompetencies}}
                        <li>
                            {{{competency.shortname}}} <small><em>{{competency.idnumber}}</em></small> ({{usercompetency.statusname}}{{#usercompetency.reviewer.fullname}} / {{usercompetency.reviewer.fullname}}{{/usercompetency.reviewer.fullname}})
                        </li>
                    {{/usercompetencies}}
                    </ul>
                {{/competencycount}}
            </td>
            {{#canmanage}}
            <td>
                <div style="display: inline-block;">
                <ul title="{{#str}}edit{{/str}}" class="user-evidence-actions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{pluginbaseurl}}/user_evidence_edit.php?id={{id}}&amp;userid={{userid}}&amp;return=list">
                                {{#pix}}t/edit{{/pix}} {{#str}}editthisuserevidence, tool_lp{{/str}}
                            </a>
                        </li>
                        {{#userhasplan}}
                        <li>
                            <a href="#" data-action="link-competency">
                                {{#pix}}t/add{{/pix}} {{#str}}linkcompetencies, tool_lp{{/str}}
                            </a>
                        </li>
                        {{/userhasplan}}
                        <li>
                            <a data-action="send-competencies-review" href="#">
                                {{#pix}}t/edit{{/pix}} {{#str}}sendcompetenciestoreview, tool_lp{{/str}}
                            </a>
                        </li>
                        <li>
                            <a data-action="user-evidence-delete" href="#">
                                {{#pix}}t/delete{{/pix}} {{#str}}deletethisuserevidence, tool_lp{{/str}}
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
            {{/canmanage}}
            </td>
        </tr>
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
                
                $buffer .= $indent . '        <tr data-region=\'user-evidence-node\' data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-userid="';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <td><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/user_evidence.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</a></td>
';
                $buffer .= $indent . '            <td>
';
                // 'hasurlorfiles' inverted section
                $value = $context->find('hasurlorfiles');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    -
';
                }
                // 'hasurlorfiles' section
                $value = $context->find('hasurlorfiles');
                $buffer .= $this->section21fa25196f4eaecd42da4371c474be60($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                // 'competencycount' inverted section
                $value = $context->find('competencycount');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                -
';
                }
                // 'competencycount' section
                $value = $context->find('competencycount');
                $buffer .= $this->section7e3ad786640a07cab32419f85ae33a27($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                // 'canmanage' section
                $value = $context->find('canmanage');
                $buffer .= $this->section01ff23bd894d655e9755c5f6004e5c89($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a8c2ab79873ca00f2d66adeb9d83be3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'nouserevidence, tool_lp';
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
                
                $buffer .= 'nouserevidence, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf42503cecd41af8c5403c4a50513510(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/user_evidence_actions\'], function(UserEvidenceActions) {
    var uea = new UserEvidenceActions(\'list\');
    uea.enhanceMenubar(\'.user-evidence-actions\')
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
                
                $buffer .= $indent . 'require([\'tool_lp/user_evidence_actions\'], function(UserEvidenceActions) {
';
                $buffer .= $indent . '    var uea = new UserEvidenceActions(\'list\');
';
                $buffer .= $indent . '    uea.enhanceMenubar(\'.user-evidence-actions\')
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
