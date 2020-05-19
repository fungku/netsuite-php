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
 * generated:  2020-05-19 05:16:33 PM UTC
 */

namespace NetSuite\Classes;

class CustomerSubsidiaryRelationshipSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $depositBalance;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isPrimarySub;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $primaryCurrency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unbilledOrders;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "balance" => "SearchDoubleField",
        "depositBalance" => "SearchDoubleField",
        "entity" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isPrimarySub" => "SearchBooleanField",
        "primaryCurrency" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "unbilledOrders" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
