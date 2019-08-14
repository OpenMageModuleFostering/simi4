<?php

/**

 */
class Simi_Simiconnector_Block_Adminhtml_Siminotification_Edit_Tab_Renderer_Sku extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {

    public function render(Varien_Object $row) {
        $checked = '';
        if (in_array($row->getId(), $this->_getSelectedProducts()))
            $checked = 'checked';
        $html = '<input type="radio" ' . $checked . ' name="selected" value="' . $row->getId() . '" class="checkbox" onclick="selectProduct(this)">';
        return sprintf('%s', $html);
    }

    protected function _getSelectedProducts() {
        $products = $this->getRequest()->getPost('selected', array());
        return $products;
    }

}
