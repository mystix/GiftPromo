<?php

/**
 * Column filter display for qty max
 *
 * @category   ProxiBlue
 * @package    ProxiBlue_GiftPromo
 * @author     Lucas van Staden (support@proxiblue.com.au)
 */
class ProxiBlue_GiftPromo_Block_Adminhtml_Widget_Grid_Column_Filter_GiftQtyMax
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Filter_Abstract
{
    public function getHtml()
    {
        $html = '<div style="font-size:9px; text-align: center; padding-top: 13px;">0 = No Limits</div>';

        return $html;
    }
}
