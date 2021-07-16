<?php
/**
 * Copyright © 2021 Magegadgets. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Magegadgets\CurrencySymbolPosition\Controller\Adminhtml\System\Currencysymbolposition;

class Save extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Magegadgets_CurrencySymbolPosition::symbols_position';

    /**
     * Save custom Currency symbol position
     *
     * @return void
     */
    public function execute()
    {
        $symbolsDataArray = $this->getRequest()->getParam('custom_currency_symbol_position', null);

        try {
            $this->_objectManager->create(\Magegadgets\CurrencySymbolPosition\Model\System\CurrencySymbolPosition::class)
                ->setPositionData($symbolsDataArray);
            $this->messageManager->addSuccess(__('You applied the custom currency symbol positions.'));
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }

        $this->getResponse()->setRedirect($this->_redirect->getRedirectUrl($this->getUrl('*')));
    }
}
