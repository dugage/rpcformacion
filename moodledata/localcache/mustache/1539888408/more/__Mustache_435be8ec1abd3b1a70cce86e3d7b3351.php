<?php

class __Mustache_435be8ec1abd3b1a70cce86e3d7b3351 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
