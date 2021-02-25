<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2021-03-01 01:55:23 PM CST
 */

namespace NetSuite\Classes;

class CustomerAddressbook {
    /**
     * @var boolean
     */
    public $defaultShipping;
    /**
     * @var boolean
     */
    public $defaultBilling;
    /**
     * @var boolean
     */
    public $isResidential;
    /**
     * @var string
     */
    public $label;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $addressbookAddress;
    /**
     * @var string
     */
    public $internalId;
    static $paramtypesmap = array(
        "defaultShipping" => "boolean",
        "defaultBilling" => "boolean",
        "isResidential" => "boolean",
        "label" => "string",
        "addressbookAddress" => "Address",
        "internalId" => "string",
    );
}
