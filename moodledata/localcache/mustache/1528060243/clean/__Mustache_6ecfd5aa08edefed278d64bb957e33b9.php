<?php

class __Mustache_6ecfd5aa08edefed278d64bb957e33b9 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $value = $this->resolveValue($context->find('fromname'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
