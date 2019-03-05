<?php

class __Mustache_b5888c13f6a317cc0694e647c733a1bc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div data-region="managetemplates">
';
        $buffer .= $indent . '<div class="pull-left">
';
        // 'navigation' section
        $value = $context->find('navigation');
        $buffer .= $this->section6d4af991aa56073211a0edc4e22533f1($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<table class="generaltable fullwidth managetemplates">
';
        $buffer .= $indent . '    <caption>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBc3498208ec08200919ebc50787f4242($context, $indent, $value);
        $buffer .= '</caption>
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2ca35cee6d0aec993c70e8b509f4e279($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section90c1d8099fef946d3189832d85e9dda0($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0a4ad6414ce07fe057eaaa27ac1230ae($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6a1322c6565f41374b0000292a58679d($context, $indent, $value);
        $buffer .= '</th>
';
        // 'canmanage' section
        $value = $context->find('canmanage');
        $buffer .= $this->section5f2802adf249970e5dcd50cd4df12d33($context, $indent, $value);
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody class="drag-parentnode">
';
        // 'templates' section
        $value = $context->find('templates');
        $buffer .= $this->section4eba4a3093daf574579e27a567139ff6($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';
        // 'templates' inverted section
        $value = $context->find('templates');
        if (empty($value)) {
            
            $buffer .= $indent . '<p class="alert alert-info">
';
            $buffer .= $indent . '    ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section7d40f9f86ef33af9129718d085a802e1($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '</p>
';
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section6dcab2db062018d3a4d6571e960b2035($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6d4af991aa56073211a0edc4e22533f1(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc3498208ec08200919ebc50787f4242(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'listtemplatescaption, tool_lp';
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
                
                $buffer .= 'listtemplatescaption, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ca35cee6d0aec993c70e8b509f4e279(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'templatename, tool_lp';
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
                
                $buffer .= 'templatename, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90c1d8099fef946d3189832d85e9dda0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'category, tool_lp';
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
                
                $buffer .= 'category, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a4ad6414ce07fe057eaaa27ac1230ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'cohorts, core_cohort';
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
                
                $buffer .= 'cohorts, core_cohort';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a1322c6565f41374b0000292a58679d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'userplans, core_competency';
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
                
                $buffer .= 'userplans, core_competency';
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

    private function section5f2802adf249970e5dcd50cd4df12d33(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '            <th scope="col">';
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

    private function sectionDf976870e5dbb97c0ac7298e3aa37fe6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenhint, tool_lp';
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
                
                $buffer .= 'hiddenhint, tool_lp';
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

    private function sectionD6ca624295af3af9607a0cbaf61be786(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 't/copy';
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
                
                $buffer .= 't/copy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf623b389543c67317818195dc1f9292(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'duplicate';
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
                
                $buffer .= 'duplicate';
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

    private function section5c4efbf09df79e92bc113046cfa7b4f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'createlearningplans, tool_lp';
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
                
                $buffer .= 'createlearningplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6695629c78a02aacea444a1e6b5684a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcohortstosync, tool_lp';
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
                
                $buffer .= 'addcohortstosync, tool_lp';
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

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
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
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD45418f446a0de961b4b7a5cf01eb0a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul class="templateactions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{pluginbaseurl}}/edittemplate.php?id={{id}}&amp;pagecontextid={{pagecontextid}}&amp;return=templates">
                                {{#pix}}t/edit{{/pix}} {{#str}}edit{{/str}}
                            </a>
                        </li>
                        <li>
                            <a data-action="duplicatetemplate" data-templateid="{{id}}" href="#">
                                {{#pix}}t/copy{{/pix}} {{#str}}duplicate{{/str}}
                            </a>
                        </li>
                        <li>
                            <a href="{{pluginbaseurl}}/template_plans.php?id={{id}}&amp;pagecontextid={{pagecontextid}}">
                                {{#pix}}t/add{{/pix}} {{#str}}createlearningplans, tool_lp{{/str}}
                            </a>
                        </li>
                        <li>
                            <a href="{{pluginbaseurl}}/template_cohorts.php?id={{id}}&amp;pagecontextid={{pagecontextid}}">
                                {{#pix}}t/add{{/pix}} {{#str}}addcohortstosync, tool_lp{{/str}}
                            </a>
                        </li>
                        <li>
                            <a data-action="deletetemplate" data-templateid="{{id}}" href="#">
                                {{#pix}}t/delete{{/pix}} {{#str}}delete{{/str}}
                            </a>
                        </li>
                    </ul>
                </li>
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
                
                $buffer .= $indent . '            <ul class="templateactions">
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
                $buffer .= '/edittemplate.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;return=templates">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a data-action="duplicatetemplate" data-templateid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" href="#">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionD6ca624295af3af9607a0cbaf61be786($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBf623b389543c67317818195dc1f9292($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/template_plans.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section22ee337edf54458589e0dbd973a89fe1($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5c4efbf09df79e92bc113046cfa7b4f9($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/template_cohorts.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section22ee337edf54458589e0dbd973a89fe1($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE6695629c78a02aacea444a1e6b5684a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a data-action="deletetemplate" data-templateid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" href="#">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section164e871b9170fd2140595670ad4f9c08($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4eba4a3093daf574579e27a567139ff6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr class="drag-samenode" data-templateid="{{id}}">
            <td><a href="{{pluginbaseurl}}/templatecompetencies.php?templateid={{id}}&amp;pagecontextid={{pagecontextid}}">{{{shortname}}}</a></span> {{^visible}}{{#str}}hiddenhint, tool_lp{{/str}}{{/visible}}</td>
            <td>{{contextnamenoprefix}}</td>
            <td><a class="template-cohorts" href="{{pluginbaseurl}}/template_cohorts.php?id={{id}}&amp;pagecontextid={{pagecontextid}}">{{cohortscount}}</a></td>
            <td><a class="template-userplans" href="{{pluginbaseurl}}/template_plans.php?id={{id}}&amp;pagecontextid={{pagecontextid}}">{{planscount}}</a></td>
            <td>
            {{#canmanage}}
            <ul class="templateactions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{pluginbaseurl}}/edittemplate.php?id={{id}}&amp;pagecontextid={{pagecontextid}}&amp;return=templates">
                                {{#pix}}t/edit{{/pix}} {{#str}}edit{{/str}}
                            </a>
                        </li>
                        <li>
                            <a data-action="duplicatetemplate" data-templateid="{{id}}" href="#">
                                {{#pix}}t/copy{{/pix}} {{#str}}duplicate{{/str}}
                            </a>
                        </li>
                        <li>
                            <a href="{{pluginbaseurl}}/template_plans.php?id={{id}}&amp;pagecontextid={{pagecontextid}}">
                                {{#pix}}t/add{{/pix}} {{#str}}createlearningplans, tool_lp{{/str}}
                            </a>
                        </li>
                        <li>
                            <a href="{{pluginbaseurl}}/template_cohorts.php?id={{id}}&amp;pagecontextid={{pagecontextid}}">
                                {{#pix}}t/add{{/pix}} {{#str}}addcohortstosync, tool_lp{{/str}}
                            </a>
                        </li>
                        <li>
                            <a data-action="deletetemplate" data-templateid="{{id}}" href="#">
                                {{#pix}}t/delete{{/pix}} {{#str}}delete{{/str}}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
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
                
                $buffer .= $indent . '        <tr class="drag-samenode" data-templateid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <td><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/templatecompetencies.php?templateid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= $value;
                $buffer .= '</a></span> ';
                // 'visible' inverted section
                $value = $context->find('visible');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionDf976870e5dbb97c0ac7298e3aa37fe6($context, $indent, $value);
                }
                $buffer .= '</td>
';
                $buffer .= $indent . '            <td>';
                $value = $this->resolveValue($context->find('contextnamenoprefix'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '            <td><a class="template-cohorts" href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/template_cohorts.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('cohortscount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></td>
';
                $buffer .= $indent . '            <td><a class="template-userplans" href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/template_plans.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('planscount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></td>
';
                $buffer .= $indent . '            <td>
';
                // 'canmanage' section
                $value = $context->find('canmanage');
                $buffer .= $this->sectionD45418f446a0de961b4b7a5cf01eb0a2($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d40f9f86ef33af9129718d085a802e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'notemplates, tool_lp';
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
                
                $buffer .= 'notemplates, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dcab2db062018d3a4d6571e960b2035(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
// Initialise the JS.
require([\'tool_lp/templateactions\',
         \'tool_lp/menubar\'],
        function(actionsMod, menubar) {

    actionsMod.init({{pagecontextid}});

    menubar.enhance(\'.templateactions\', {
        \'[data-action="deletetemplate"]\': actionsMod.deleteHandler,
        \'[data-action="duplicatetemplate"]\': actionsMod.duplicateHandler
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
                
                $buffer .= $indent . '// Initialise the JS.
';
                $buffer .= $indent . 'require([\'tool_lp/templateactions\',
';
                $buffer .= $indent . '         \'tool_lp/menubar\'],
';
                $buffer .= $indent . '        function(actionsMod, menubar) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    actionsMod.init(';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    menubar.enhance(\'.templateactions\', {
';
                $buffer .= $indent . '        \'[data-action="deletetemplate"]\': actionsMod.deleteHandler,
';
                $buffer .= $indent . '        \'[data-action="duplicatetemplate"]\': actionsMod.duplicateHandler
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
