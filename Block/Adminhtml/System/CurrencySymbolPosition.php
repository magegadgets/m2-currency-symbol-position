<?php
/**
 * Copyright © 2021 Magegadgets. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Magegadgets\CurrencySymbolPosition\Block\Adminhtml\System;

class CurrencySymbolPosition extends \Magento\Backend\Block\Widget\Form
{
    /**
     * @var \Magegadgets\CurrencySymbolPosition\Model\System\CurrencySymbolPositionFactory
     */
    protected $_symbolPositionSystemFactory;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magegadgets\CurrencySymbolPosition\Model\System\CurrencySymbolPositionFactory $symbolPositionSystemFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magegadgets\CurrencySymbolPosition\Model\System\CurrencySymbolPositionFactory $symbolPositionSystemFactory,
        array $data = []
    ) {
        $this->_symbolPositionSystemFactory = $symbolPositionSystemFactory;
        parent::__construct($context, $data);
    }

    /**
     * Constructor. Initialization required variables for class instance.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_system_currencysymbolpostion';
        parent::_construct();
    }

    /**
     * Custom currency symbol position properties
     *
     * @var array
     */
    protected $_postionData = [];

    /**
     * Prepares layout
     *
     * @return \Magento\Framework\View\Element\AbstractBlock
     */
    protected function _prepareLayout()
    {
        $this->getToolbar()->addChild(
            'save_button',
            \Magento\Backend\Block\Widget\Button::class,
            [
                'label' => __('Save Currency Symbols Position'),
                'class' => 'save primary save-currency-symbols-postion',
                'data_attribute' => [
                    'mage-init' => ['button' => ['event' => 'save', 'target' => '#currency-symbols-position-form']],
                ]
            ]
        );

        return parent::_prepareLayout();
    }

    /**
     * Returns page header
     *
     * @return \Magento\Framework\Phrase
     * @codeCoverageIgnore
     */
    public function getHeader()
    {
        return __('Currency Symbols Position');
    }

    /**
     * Returns URL for save action
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getFormActionUrl()
    {
        return $this->getUrl('adminhtml/*/save');
    }

    /**
     * Returns website id
     *
     * @return int
     * @codeCoverageIgnore
     */
    public function getWebsiteId()
    {
        return $this->getRequest()->getParam('website');
    }

    /**
     * Returns store id
     *
     * @return int
     * @codeCoverageIgnore
     */
    public function getStoreId()
    {
        return $this->getRequest()->getParam('store');
    }

    /**
     * Returns Custom currency symbol properties
     *
     * @return array
     */
    public function getCurrencySymbolsPositionData()
    {
        if (!$this->_postionData) {
            $this->_postionData = $this->_symbolPositionSystemFactory->create()->getPositionsData();
        }
        return $this->_postionData;
    }

    /**
     * Returns inheritance text
     *
     * @return \Magento\Framework\Phrase
     * @codeCoverageIgnore
     */
    public function getInheritText()
    {
        return __('Use Standard');
    }
}
