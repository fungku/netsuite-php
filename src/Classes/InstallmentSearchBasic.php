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
 * generated:  2019-10-18 12:11:30 PM UTC
 */

namespace NetSuite\Classes;

class InstallmentSearchBasic extends SearchRecordBasic {
    public $amount;
    public $amountPaid;
    public $amountRemaining;
    public $daysOverdue;
    public $dueDate;
    public $fxAmount;
    public $fxAmountPaid;
    public $fxAmountRemaining;
    public $installmentNumber;
    public $customFieldList;
    static $paramtypesmap = array(
        "amount" => "SearchDoubleField",
        "amountPaid" => "SearchDoubleField",
        "amountRemaining" => "SearchDoubleField",
        "daysOverdue" => "SearchLongField",
        "dueDate" => "SearchDateField",
        "fxAmount" => "SearchDoubleField",
        "fxAmountPaid" => "SearchDoubleField",
        "fxAmountRemaining" => "SearchDoubleField",
        "installmentNumber" => "SearchLongField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
