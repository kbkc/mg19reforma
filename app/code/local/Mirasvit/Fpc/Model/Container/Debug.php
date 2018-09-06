<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at https://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   mirasvit/extension_fpc
 * @version   1.0.87
 * @copyright Copyright (C) 2018 Mirasvit (https://mirasvit.com/)
 */



class Mirasvit_Fpc_Model_Container_Debug extends Mirasvit_Fpc_Model_Container_Abstract
{
    protected function _getCacheId()
    {
        if (Mirasvit_Fpc_Model_Config::isDebug()) {
            return 'CONTAINER_FPC_DEBUG_'.microtime(true);
        }

        return false;
    }

    /**
     * Render block content.
     *
     * @return string
     */
    protected function _renderBlock()
    {
        $block = $this->_placeholder->getAttribute('block');
        $template = $this->_placeholder->getAttribute('template');

        $block = new $block();
        $block->setTemplate($template);
        $block->setLayout(Mage::app()->getLayout());

        return $block->toHtml();
    }
}