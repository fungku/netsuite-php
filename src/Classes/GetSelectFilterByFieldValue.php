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

class GetSelectFilterByFieldValue {
    /**
     * @var string
     */
    public $sublist;
    /**
     * @var string
     */
    public $field;
    /**
     * @var string
     */
    public $internalId;
    static $paramtypesmap = array(
        "sublist" => "string",
        "field" => "string",
        "internalId" => "string",
    );
}
