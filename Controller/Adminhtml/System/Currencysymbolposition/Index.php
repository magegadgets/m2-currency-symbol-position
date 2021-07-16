<?php
/**
 * Copyright © 2021 Magegadgets. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Magegadgets\CurrencySymbolPosition\Controller\Adminhtml\System\Currencysymbolposition;

class Index extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Magegadgets_CurrencySymbolPosition::symbols_position';

    /**
     * Show Currency Symbol Position Management dialog
     *
     * @return void
     */
    public function execute()
    {
        // set active menu and breadcrumbs
        $this->_view->loadLayout();
        $this->_setActiveMenu(
            'Magegadgets_CurrencySymbolPosition::symbols_position'
        );

        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Currency Symbols Position'));
        $this->_view->renderLayout();
    }
}
