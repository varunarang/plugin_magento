<?php

class PayU_Account_Block_Form_PayuAccount extends PayU_Account_Block_Form_Abstract
{

    protected function _construct()
    {
        $this->setMethodTitle($this->__('Pay with PayU'));
        $this->setMethodLabelAfterHtml('<img src="' . $this->getPayuLogo() . '" alt="PayU" class="formPayuLogo" />');
        $this->setTemplate('payu_account/form.phtml');
        return parent::_construct();
    }

}
