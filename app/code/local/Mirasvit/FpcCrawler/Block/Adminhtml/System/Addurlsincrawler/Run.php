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


class Mirasvit_FpcCrawler_Block_Adminhtml_System_Addurlsincrawler_Run extends Mage_Adminhtml_Block_Abstract
{
    public function getWorker()
    {
        return Mage::getSingleton('fpccrawler/system_addurlsincrawler_worker');
    }

}
