<?php namespace Fungku\NetSuite\Classes;

class ProjectTaskSearchRowBasic extends SearchRowBasic {
	public $actualWork;
	public $company;
	public $constraintType;
	public $contact;
	public $cost;
	public $costBase;
	public $costBaseBaseline;
	public $costBaseline;
	public $costBaseVariance;
	public $costVariance;
	public $costVariancePercent;
	public $createdDate;
	public $endDate;
	public $endDateBaseline;
	public $endDateVariance;
	public $estimatedWork;
	public $estimatedWorkBaseline;
	public $estimatedWorkVariance;
	public $estimatedWorkVariancePercent;
	public $externalId;
	public $finishByDate;
	public $id;
	public $internalId;
	public $isMilestone;
	public $isSummaryTask;
	public $lastModifiedDate;
	public $message;
	public $nonBillableTask;
	public $owner;
	public $parent;
	public $percentWorkComplete;
	public $predecessor;
	public $predecessorLagDays;
	public $predecessors;
	public $predecessorType;
	public $priority;
	public $remainingWork;
	public $startDate;
	public $startDateBaseline;
	public $startDateVariance;
	public $status;
	public $successor;
	public $successorType;
	public $title;
	public $customFieldList;
	static $paramtypesmap = array(
		"actualWork" => "SearchColumnDoubleField[]",
		"company" => "SearchColumnSelectField[]",
		"constraintType" => "SearchColumnEnumSelectField[]",
		"contact" => "SearchColumnSelectField[]",
		"cost" => "SearchColumnDoubleField[]",
		"costBase" => "SearchColumnDoubleField[]",
		"costBaseBaseline" => "SearchColumnDoubleField[]",
		"costBaseline" => "SearchColumnDoubleField[]",
		"costBaseVariance" => "SearchColumnDoubleField[]",
		"costVariance" => "SearchColumnDoubleField[]",
		"costVariancePercent" => "SearchColumnDoubleField[]",
		"createdDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"endDateBaseline" => "SearchColumnDateField[]",
		"endDateVariance" => "SearchColumnDoubleField[]",
		"estimatedWork" => "SearchColumnDoubleField[]",
		"estimatedWorkBaseline" => "SearchColumnDoubleField[]",
		"estimatedWorkVariance" => "SearchColumnDoubleField[]",
		"estimatedWorkVariancePercent" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"finishByDate" => "SearchColumnDateField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isMilestone" => "SearchColumnBooleanField[]",
		"isSummaryTask" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"message" => "SearchColumnStringField[]",
		"nonBillableTask" => "SearchColumnBooleanField[]",
		"owner" => "SearchColumnSelectField[]",
		"parent" => "SearchColumnSelectField[]",
		"percentWorkComplete" => "SearchColumnDoubleField[]",
		"predecessor" => "SearchColumnSelectField[]",
		"predecessorLagDays" => "SearchColumnDoubleField[]",
		"predecessors" => "SearchColumnStringField[]",
		"predecessorType" => "SearchColumnStringField[]",
		"priority" => "SearchColumnEnumSelectField[]",
		"remainingWork" => "SearchColumnDoubleField[]",
		"startDate" => "SearchColumnDateField[]",
		"startDateBaseline" => "SearchColumnDateField[]",
		"startDateVariance" => "SearchColumnDoubleField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"successor" => "SearchColumnSelectField[]",
		"successorType" => "SearchColumnStringField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

