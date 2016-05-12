<?php

/**
 * Park Address
 */
class AddressPark extends Address {
    /**
     *  Initialization.
     */
    protected function _init() {
        $this->_setAddressTypeId(Address::ADDRESS_TYPE_PARK);
    }

    public  function display() {
        $output = '<div style="background-color: aqua">';
        $output .= parent::display();
        $output .= '</div>';
        return $output;
    }
}