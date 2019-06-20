<?php
// This file was auto-generated from sdk-root/src/data/health/2016-08-04/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>AWS Health</fullname> <p>The AWS Health API provides programmatic access to the AWS Health information that is presented in the <a href="https://phd.aws.amazon.com/phd/home#/">AWS Personal Health Dashboard</a>. You can get information about events that affect your AWS resources:</p> <ul> <li> <p> <a>DescribeEvents</a>: Summary information about events.</p> </li> <li> <p> <a>DescribeEventDetails</a>: Detailed information about one or more events.</p> </li> <li> <p> <a>DescribeAffectedEntities</a>: Information about AWS resources that are affected by one or more events.</p> </li> </ul> <p>In addition, these operations provide information about event types and summary counts of events or affected entities:</p> <ul> <li> <p> <a>DescribeEventTypes</a>: Information about the kinds of events that AWS Health tracks.</p> </li> <li> <p> <a>DescribeEventAggregates</a>: A count of the number of events that meet specified criteria.</p> </li> <li> <p> <a>DescribeEntityAggregates</a>: A count of the number of affected entities that meet specified criteria.</p> </li> </ul> <p>The Health API requires a Business or Enterprise support plan from <a href="http://aws.amazon.com/premiumsupport/">AWS Support</a>. Calling the Health API from an account that does not have a Business or Enterprise support plan causes a <code>SubscriptionRequiredException</code>. </p> <p>For authentication of requests, AWS Health uses the <a href="https://docs.aws.amazon.com/general/latest/gr/signature-version-4.html">Signature Version 4 Signing Process</a>.</p> <p>See the <a href="https://docs.aws.amazon.com/health/latest/ug/what-is-aws-health.html">AWS Health User Guide</a> for information about how to use the API.</p> <p> <b>Service Endpoint</b> </p> <p>The HTTP endpoint for the AWS Health API is:</p> <ul> <li> <p>https://health.us-east-1.amazonaws.com </p> </li> </ul>', 'operations' => [ 'DescribeAffectedEntities' => '<p>Returns a list of entities that have been affected by the specified events, based on the specified filter criteria. Entities can refer to individual customer resources, groups of customer resources, or any other construct, depending on the AWS service. Events that have impact beyond that of the affected entities, or where the extent of impact is unknown, include at least one entity indicating this.</p> <p>At least one event ARN is required. Results are sorted by the <code>lastUpdatedTime</code> of the entity, starting with the most recent.</p>', 'DescribeEntityAggregates' => '<p>Returns the number of entities that are affected by each of the specified events. If no events are specified, the counts of all affected entities are returned.</p>', 'DescribeEventAggregates' => '<p>Returns the number of events of each event type (issue, scheduled change, and account notification). If no filter is specified, the counts of all events in each category are returned.</p>', 'DescribeEventDetails' => '<p>Returns detailed information about one or more specified events. Information includes standard event data (region, service, etc., as returned by <a>DescribeEvents</a>), a detailed event description, and possible additional metadata that depends upon the nature of the event. Affected entities are not included; to retrieve those, use the <a>DescribeAffectedEntities</a> operation.</p> <p>If a specified event cannot be retrieved, an error message is returned for that event.</p>', 'DescribeEventTypes' => '<p>Returns the event types that meet the specified filter criteria. If no filter criteria are specified, all event types are returned, in no particular order.</p>', 'DescribeEvents' => '<p>Returns information about events that meet the specified filter criteria. Events are returned in a summary form and do not include the detailed description, any additional metadata that depends on the event type, or any affected resources. To retrieve that information, use the <a>DescribeEventDetails</a> and <a>DescribeAffectedEntities</a> operations.</p> <p>If no filter criteria are specified, all events are returned. Results are sorted by <code>lastModifiedTime</code>, starting with the most recent.</p>', ], 'shapes' => [ 'AffectedEntity' => [ 'base' => '<p>Information about an entity that is affected by a Health event.</p>', 'refs' => [ 'EntityList$member' => NULL, ], ], 'DateTimeRange' => [ 'base' => '<p>A range of dates and times that is used by the <a>EventFilter</a> and <a>EntityFilter</a> objects. If <code>from</code> is set and <code>to</code> is set: match items where the timestamp (<code>startTime</code>, <code>endTime</code>, or <code>lastUpdatedTime</code>) is between <code>from</code> and <code>to</code> inclusive. If <code>from</code> is set and <code>to</code> is not set: match items where the timestamp value is equal to or after <code>from</code>. If <code>from</code> is not set and <code>to</code> is set: match items where the timestamp value is equal to or before <code>to</code>.</p>', 'refs' => [ 'dateTimeRangeList$member' => NULL, ], ], 'DescribeAffectedEntitiesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeAffectedEntitiesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEntityAggregatesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEntityAggregatesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEventAggregatesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEventAggregatesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEventDetailsFailedSet' => [ 'base' => NULL, 'refs' => [ 'DescribeEventDetailsResponse$failedSet' => '<p>Error messages for any events that could not be retrieved.</p>', ], ], 'DescribeEventDetailsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEventDetailsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEventDetailsSuccessfulSet' => [ 'base' => NULL, 'refs' => [ 'DescribeEventDetailsResponse$successfulSet' => '<p>Information about the events that could be retrieved.</p>', ], ], 'DescribeEventTypesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEventTypesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEventsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEventsResponse' => [ 'base' => NULL, 'refs' => [], ], 'EntityAggregate' => [ 'base' => '<p>The number of entities that are affected by one or more events. Returned by the <a>DescribeEntityAggregates</a> operation.</p>', 'refs' => [ 'EntityAggregateList$member' => NULL, ], ], 'EntityAggregateList' => [ 'base' => NULL, 'refs' => [ 'DescribeEntityAggregatesResponse$entityAggregates' => '<p>The number of entities that are affected by each of the specified events.</p>', ], ], 'EntityFilter' => [ 'base' => '<p>The values to use to filter results from the <a>DescribeAffectedEntities</a> operation.</p>', 'refs' => [ 'DescribeAffectedEntitiesRequest$filter' => '<p>Values to narrow the results returned. At least one event ARN is required. </p>', ], ], 'EntityList' => [ 'base' => NULL, 'refs' => [ 'DescribeAffectedEntitiesResponse$entities' => '<p>The entities that match the filter criteria.</p>', ], ], 'Event' => [ 'base' => '<p>Summary information about an event, returned by the <a>DescribeEvents</a> operation. The <a>DescribeEventDetails</a> operation also returns this information, as well as the <a>EventDescription</a> and additional event metadata.</p>', 'refs' => [ 'EventDetails$event' => '<p>Summary information about the event.</p>', 'EventList$member' => NULL, ], ], 'EventAggregate' => [ 'base' => '<p>The number of events of each issue type. Returned by the <a>DescribeEventAggregates</a> operation.</p>', 'refs' => [ 'EventAggregateList$member' => NULL, ], ], 'EventAggregateList' => [ 'base' => NULL, 'refs' => [ 'DescribeEventAggregatesResponse$eventAggregates' => '<p>The number of events in each category that meet the optional filter criteria.</p>', ], ], 'EventArnsList' => [ 'base' => NULL, 'refs' => [ 'DescribeEntityAggregatesRequest$eventArns' => '<p>A list of event ARNs (unique identifiers). For example: <code>"arn:aws:health:us-east-1::event/EC2/EC2_INSTANCE_RETIREMENT_SCHEDULED/EC2_INSTANCE_RETIREMENT_SCHEDULED_ABC123-CDE456", "arn:aws:health:us-west-1::event/EBS/AWS_EBS_LOST_VOLUME/AWS_EBS_LOST_VOLUME_CHI789_JKL101"</code> </p>', ], ], 'EventDescription' => [ 'base' => '<p>The detailed description of the event. Included in the information returned by the <a>DescribeEventDetails</a> operation.</p>', 'refs' => [ 'EventDetails$eventDescription' => '<p>The most recent description of the event.</p>', ], ], 'EventDetails' => [ 'base' => '<p>Detailed information about an event. A combination of an <a>Event</a> object, an <a>EventDescription</a> object, and additional metadata about the event. Returned by the <a>DescribeEventDetails</a> operation.</p>', 'refs' => [ 'DescribeEventDetailsSuccessfulSet$member' => NULL, ], ], 'EventDetailsErrorItem' => [ 'base' => '<p>Error information returned when a <a>DescribeEventDetails</a> operation cannot find a specified event.</p>', 'refs' => [ 'DescribeEventDetailsFailedSet$member' => NULL, ], ], 'EventFilter' => [ 'base' => '<p>The values to use to filter results from the <a>DescribeEvents</a> and <a>DescribeEventAggregates</a> operations.</p>', 'refs' => [ 'DescribeEventAggregatesRequest$filter' => '<p>Values to narrow the results returned.</p>', 'DescribeEventsRequest$filter' => '<p>Values to narrow the results returned.</p>', ], ], 'EventList' => [ 'base' => NULL, 'refs' => [ 'DescribeEventsResponse$events' => '<p>The events that match the specified filter criteria.</p>', ], ], 'EventType' => [ 'base' => '<p>Metadata about a type of event that is reported by AWS Health. Data consists of the category (for example, <code>issue</code>), the service (for example, <code>EC2</code>), and the event type code (for example, <code>AWS_EC2_SYSTEM_MAINTENANCE_EVENT</code>).</p>', 'refs' => [ 'EventTypeList$member' => NULL, ], ], 'EventTypeCategoryList' => [ 'base' => NULL, 'refs' => [ 'EventTypeFilter$eventTypeCategories' => '<p>A list of event type category codes (<code>issue</code>, <code>scheduledChange</code>, or <code>accountNotification</code>).</p>', ], ], 'EventTypeCodeList' => [ 'base' => NULL, 'refs' => [ 'EventTypeFilter$eventTypeCodes' => '<p>A list of event type codes.</p>', ], ], 'EventTypeFilter' => [ 'base' => '<p>The values to use to filter results from the <a>DescribeEventTypes</a> operation.</p>', 'refs' => [ 'DescribeEventTypesRequest$filter' => '<p>Values to narrow the results returned.</p>', ], ], 'EventTypeList' => [ 'base' => NULL, 'refs' => [ 'DescribeEventTypesResponse$eventTypes' => '<p>A list of event types that match the filter criteria. Event types have a category (<code>issue</code>, <code>accountNotification</code>, or <code>scheduledChange</code>), a service (for example, <code>EC2</code>, <code>RDS</code>, <code>DATAPIPELINE</code>, <code>BILLING</code>), and a code (in the format <code>AWS_<i>SERVICE</i>_<i>DESCRIPTION</i> </code>; for example, <code>AWS_EC2_SYSTEM_MAINTENANCE_EVENT</code>).</p>', ], ], 'InvalidPaginationToken' => [ 'base' => '<p>The specified pagination token (<code>nextToken</code>) is not valid.</p>', 'refs' => [], ], 'UnsupportedLocale' => [ 'base' => '<p>The specified locale is not supported.</p>', 'refs' => [], ], 'accountId' => [ 'base' => NULL, 'refs' => [ 'AffectedEntity$awsAccountId' => '<p>The 12-digit AWS account number that contains the affected entity.</p>', ], ], 'aggregateValue' => [ 'base' => NULL, 'refs' => [ 'EventAggregate$aggregateValue' => '<p>The issue type for the associated count.</p>', ], ], 'availabilityZone' => [ 'base' => NULL, 'refs' => [ 'Event$availabilityZone' => '<p>The AWS Availability Zone of the event. For example, us-east-1a.</p>', 'availabilityZones$member' => NULL, ], ], 'availabilityZones' => [ 'base' => NULL, 'refs' => [ 'EventFilter$availabilityZones' => '<p>A list of AWS availability zones.</p>', ], ], 'count' => [ 'base' => NULL, 'refs' => [ 'EntityAggregate$count' => '<p>The number entities that match the criteria for the specified events.</p>', 'EventAggregate$count' => '<p>The number of events of the associated issue type.</p>', ], ], 'dateTimeRangeList' => [ 'base' => NULL, 'refs' => [ 'EntityFilter$lastUpdatedTimes' => '<p>A list of the most recent dates and times that the entity was updated.</p>', 'EventFilter$startTimes' => '<p>A list of dates and times that the event began.</p>', 'EventFilter$endTimes' => '<p>A list of dates and times that the event ended.</p>', 'EventFilter$lastUpdatedTimes' => '<p>A list of dates and times that the event was last updated.</p>', ], ], 'entityArn' => [ 'base' => NULL, 'refs' => [ 'AffectedEntity$entityArn' => '<p>The unique identifier for the entity. Format: <code>arn:aws:health:<i>entity-region</i>:<i>aws-account</i>:entity/<i>entity-id</i> </code>. Example: <code>arn:aws:health:us-east-1:111222333444:entity/AVh5GGT7ul1arKr1sE1K</code> </p>', 'entityArnList$member' => NULL, ], ], 'entityArnList' => [ 'base' => NULL, 'refs' => [ 'EntityFilter$entityArns' => '<p>A list of entity ARNs (unique identifiers).</p>', 'EventFilter$entityArns' => '<p>A list of entity ARNs (unique identifiers).</p>', ], ], 'entityStatusCode' => [ 'base' => NULL, 'refs' => [ 'AffectedEntity$statusCode' => '<p>The most recent status of the entity affected by the event. The possible values are <code>IMPAIRED</code>, <code>UNIMPAIRED</code>, and <code>UNKNOWN</code>.</p>', 'entityStatusCodeList$member' => NULL, ], ], 'entityStatusCodeList' => [ 'base' => NULL, 'refs' => [ 'EntityFilter$statusCodes' => '<p>A list of entity status codes (<code>IMPAIRED</code>, <code>UNIMPAIRED</code>, or <code>UNKNOWN</code>).</p>', ], ], 'entityUrl' => [ 'base' => NULL, 'refs' => [ 'AffectedEntity$entityUrl' => NULL, ], ], 'entityValue' => [ 'base' => NULL, 'refs' => [ 'AffectedEntity$entityValue' => '<p>The ID of the affected entity.</p>', 'entityValueList$member' => NULL, ], ], 'entityValueList' => [ 'base' => NULL, 'refs' => [ 'EntityFilter$entityValues' => '<p>A list of IDs for affected entities.</p>', 'EventFilter$entityValues' => '<p>A list of entity identifiers, such as EC2 instance IDs (<code>i-34ab692e</code>) or EBS volumes (<code>vol-426ab23e</code>).</p>', ], ], 'eventAggregateField' => [ 'base' => NULL, 'refs' => [ 'DescribeEventAggregatesRequest$aggregateField' => '<p>The only currently supported value is <code>eventTypeCategory</code>.</p>', ], ], 'eventArn' => [ 'base' => NULL, 'refs' => [ 'AffectedEntity$eventArn' => '<p>The unique identifier for the event. Format: <code>arn:aws:health:<i>event-region</i>::event/<i>SERVICE</i>/<i>EVENT_TYPE_CODE</i>/<i>EVENT_TYPE_PLUS_ID</i> </code>. Example: <code>Example: arn:aws:health:us-east-1::event/EC2/EC2_INSTANCE_RETIREMENT_SCHEDULED/EC2_INSTANCE_RETIREMENT_SCHEDULED_ABC123-DEF456</code> </p>', 'EntityAggregate$eventArn' => '<p>The unique identifier for the event. Format: <code>arn:aws:health:<i>event-region</i>::event/<i>SERVICE</i>/<i>EVENT_TYPE_CODE</i>/<i>EVENT_TYPE_PLUS_ID</i> </code>. Example: <code>Example: arn:aws:health:us-east-1::event/EC2/EC2_INSTANCE_RETIREMENT_SCHEDULED/EC2_INSTANCE_RETIREMENT_SCHEDULED_ABC123-DEF456</code> </p>', 'Event$arn' => '<p>The unique identifier for the event. Format: <code>arn:aws:health:<i>event-region</i>::event/<i>SERVICE</i>/<i>EVENT_TYPE_CODE</i>/<i>EVENT_TYPE_PLUS_ID</i> </code>. Example: <code>Example: arn:aws:health:us-east-1::event/EC2/EC2_INSTANCE_RETIREMENT_SCHEDULED/EC2_INSTANCE_RETIREMENT_SCHEDULED_ABC123-DEF456</code> </p>', 'EventArnsList$member' => NULL, 'EventDetailsErrorItem$eventArn' => '<p>The unique identifier for the event. Format: <code>arn:aws:health:<i>event-region</i>::event/<i>SERVICE</i>/<i>EVENT_TYPE_CODE</i>/<i>EVENT_TYPE_PLUS_ID</i> </code>. Example: <code>Example: arn:aws:health:us-east-1::event/EC2/EC2_INSTANCE_RETIREMENT_SCHEDULED/EC2_INSTANCE_RETIREMENT_SCHEDULED_ABC123-DEF456</code> </p>', 'eventArnList$member' => NULL, ], ], 'eventArnList' => [ 'base' => NULL, 'refs' => [ 'DescribeEventDetailsRequest$eventArns' => '<p>A list of event ARNs (unique identifiers). For example: <code>"arn:aws:health:us-east-1::event/EC2/EC2_INSTANCE_RETIREMENT_SCHEDULED/EC2_INSTANCE_RETIREMENT_SCHEDULED_ABC123-CDE456", "arn:aws:health:us-west-1::event/EBS/AWS_EBS_LOST_VOLUME/AWS_EBS_LOST_VOLUME_CHI789_JKL101"</code> </p>', 'EntityFilter$eventArns' => '<p>A list of event ARNs (unique identifiers). For example: <code>"arn:aws:health:us-east-1::event/EC2/EC2_INSTANCE_RETIREMENT_SCHEDULED/EC2_INSTANCE_RETIREMENT_SCHEDULED_ABC123-CDE456", "arn:aws:health:us-west-1::event/EBS/AWS_EBS_LOST_VOLUME/AWS_EBS_LOST_VOLUME_CHI789_JKL101"</code> </p>', 'EventFilter$eventArns' => '<p>A list of event ARNs (unique identifiers). For example: <code>"arn:aws:health:us-east-1::event/EC2/EC2_INSTANCE_RETIREMENT_SCHEDULED/EC2_INSTANCE_RETIREMENT_SCHEDULED_ABC123-CDE456", "arn:aws:health:us-west-1::event/EBS/AWS_EBS_LOST_VOLUME/AWS_EBS_LOST_VOLUME_CHI789_JKL101"</code> </p>', ], ], 'eventDescription' => [ 'base' => NULL, 'refs' => [ 'EventDescription$latestDescription' => '<p>The most recent description of the event.</p>', ], ], 'eventMetadata' => [ 'base' => NULL, 'refs' => [ 'EventDetails$eventMetadata' => '<p>Additional metadata about the event.</p>', ], ], 'eventStatusCode' => [ 'base' => NULL, 'refs' => [ 'Event$statusCode' => '<p>The most recent status of the event. Possible values are <code>open</code>, <code>closed</code>, and <code>upcoming</code>.</p>', 'eventStatusCodeList$member' => NULL, ], ], 'eventStatusCodeList' => [ 'base' => NULL, 'refs' => [ 'EventFilter$eventStatusCodes' => '<p>A list of event status codes.</p>', ], ], 'eventType' => [ 'base' => NULL, 'refs' => [ 'eventTypeList$member' => NULL, ], ], 'eventTypeCategory' => [ 'base' => NULL, 'refs' => [ 'Event$eventTypeCategory' => '<p>The category of the event. Possible values are <code>issue</code>, <code>scheduledChange</code>, and <code>accountNotification</code>.</p>', 'EventType$category' => '<p>A list of event type category codes (<code>issue</code>, <code>scheduledChange</code>, or <code>accountNotification</code>).</p>', 'EventTypeCategoryList$member' => NULL, 'eventTypeCategoryList$member' => NULL, ], ], 'eventTypeCategoryList' => [ 'base' => NULL, 'refs' => [ 'EventFilter$eventTypeCategories' => '<p>A list of event type category codes (<code>issue</code>, <code>scheduledChange</code>, or <code>accountNotification</code>).</p>', ], ], 'eventTypeCode' => [ 'base' => NULL, 'refs' => [ 'Event$eventTypeCode' => '<p>The unique identifier for the event type. The format is <code>AWS_<i>SERVICE</i>_<i>DESCRIPTION</i> </code>; for example, <code>AWS_EC2_SYSTEM_MAINTENANCE_EVENT</code>.</p>', 'EventType$code' => '<p>The unique identifier for the event type. The format is <code>AWS_<i>SERVICE</i>_<i>DESCRIPTION</i> </code>; for example, <code>AWS_EC2_SYSTEM_MAINTENANCE_EVENT</code>.</p>', 'EventTypeCodeList$member' => NULL, ], ], 'eventTypeList' => [ 'base' => NULL, 'refs' => [ 'EventFilter$eventTypeCodes' => '<p>A list of unique identifiers for event types. For example, <code>"AWS_EC2_SYSTEM_MAINTENANCE_EVENT","AWS_RDS_MAINTENANCE_SCHEDULED"</code> </p>', ], ], 'locale' => [ 'base' => NULL, 'refs' => [ 'DescribeAffectedEntitiesRequest$locale' => '<p>The locale (language) to return information in. English (en) is the default and the only supported value at this time.</p>', 'DescribeEventDetailsRequest$locale' => '<p>The locale (language) to return information in. English (en) is the default and the only supported value at this time.</p>', 'DescribeEventTypesRequest$locale' => '<p>The locale (language) to return information in. English (en) is the default and the only supported value at this time.</p>', 'DescribeEventsRequest$locale' => '<p>The locale (language) to return information in. English (en) is the default and the only supported value at this time.</p>', ], ], 'maxResults' => [ 'base' => NULL, 'refs' => [ 'DescribeAffectedEntitiesRequest$maxResults' => '<p>The maximum number of items to return in one batch, between 10 and 100, inclusive.</p>', 'DescribeEventAggregatesRequest$maxResults' => '<p>The maximum number of items to return in one batch, between 10 and 100, inclusive.</p>', 'DescribeEventTypesRequest$maxResults' => '<p>The maximum number of items to return in one batch, between 10 and 100, inclusive.</p>', 'DescribeEventsRequest$maxResults' => '<p>The maximum number of items to return in one batch, between 10 and 100, inclusive.</p>', ], ], 'metadataKey' => [ 'base' => NULL, 'refs' => [ 'eventMetadata$key' => NULL, ], ], 'metadataValue' => [ 'base' => NULL, 'refs' => [ 'eventMetadata$value' => NULL, ], ], 'nextToken' => [ 'base' => NULL, 'refs' => [ 'DescribeAffectedEntitiesRequest$nextToken' => '<p>If the results of a search are large, only a portion of the results are returned, and a <code>nextToken</code> pagination token is returned in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When all results have been returned, the response does not contain a pagination token value.</p>', 'DescribeAffectedEntitiesResponse$nextToken' => '<p>If the results of a search are large, only a portion of the results are returned, and a <code>nextToken</code> pagination token is returned in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When all results have been returned, the response does not contain a pagination token value.</p>', 'DescribeEventAggregatesRequest$nextToken' => '<p>If the results of a search are large, only a portion of the results are returned, and a <code>nextToken</code> pagination token is returned in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When all results have been returned, the response does not contain a pagination token value.</p>', 'DescribeEventAggregatesResponse$nextToken' => '<p>If the results of a search are large, only a portion of the results are returned, and a <code>nextToken</code> pagination token is returned in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When all results have been returned, the response does not contain a pagination token value.</p>', 'DescribeEventTypesRequest$nextToken' => '<p>If the results of a search are large, only a portion of the results are returned, and a <code>nextToken</code> pagination token is returned in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When all results have been returned, the response does not contain a pagination token value.</p>', 'DescribeEventTypesResponse$nextToken' => '<p>If the results of a search are large, only a portion of the results are returned, and a <code>nextToken</code> pagination token is returned in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When all results have been returned, the response does not contain a pagination token value.</p>', 'DescribeEventsRequest$nextToken' => '<p>If the results of a search are large, only a portion of the results are returned, and a <code>nextToken</code> pagination token is returned in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When all results have been returned, the response does not contain a pagination token value.</p>', 'DescribeEventsResponse$nextToken' => '<p>If the results of a search are large, only a portion of the results are returned, and a <code>nextToken</code> pagination token is returned in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When all results have been returned, the response does not contain a pagination token value.</p>', ], ], 'region' => [ 'base' => NULL, 'refs' => [ 'Event$region' => '<p>The AWS region name of the event.</p>', 'regionList$member' => NULL, ], ], 'regionList' => [ 'base' => NULL, 'refs' => [ 'EventFilter$regions' => '<p>A list of AWS regions.</p>', ], ], 'service' => [ 'base' => NULL, 'refs' => [ 'Event$service' => '<p>The AWS service that is affected by the event. For example, <code>EC2</code>, <code>RDS</code>.</p>', 'EventType$service' => '<p>The AWS service that is affected by the event. For example, <code>EC2</code>, <code>RDS</code>.</p>', 'serviceList$member' => NULL, ], ], 'serviceList' => [ 'base' => NULL, 'refs' => [ 'EventFilter$services' => '<p>The AWS services associated with the event. For example, <code>EC2</code>, <code>RDS</code>.</p>', 'EventTypeFilter$services' => '<p>The AWS services associated with the event. For example, <code>EC2</code>, <code>RDS</code>.</p>', ], ], 'string' => [ 'base' => NULL, 'refs' => [ 'EventDetailsErrorItem$errorName' => '<p>The name of the error.</p>', 'EventDetailsErrorItem$errorMessage' => '<p>A message that describes the error.</p>', 'InvalidPaginationToken$message' => NULL, 'UnsupportedLocale$message' => NULL, ], ], 'tagFilter' => [ 'base' => NULL, 'refs' => [ 'EntityFilter$tags' => '<p>A map of entity tags attached to the affected entity.</p>', 'EventFilter$tags' => '<p>A map of entity tags attached to the affected entity.</p>', ], ], 'tagKey' => [ 'base' => NULL, 'refs' => [ 'tagSet$key' => NULL, ], ], 'tagSet' => [ 'base' => NULL, 'refs' => [ 'AffectedEntity$tags' => '<p>A map of entity tags attached to the affected entity.</p>', 'tagFilter$member' => NULL, ], ], 'tagValue' => [ 'base' => NULL, 'refs' => [ 'tagSet$value' => NULL, ], ], 'timestamp' => [ 'base' => NULL, 'refs' => [ 'AffectedEntity$lastUpdatedTime' => '<p>The most recent time that the entity was updated.</p>', 'DateTimeRange$from' => '<p>The starting date and time of a time range.</p>', 'DateTimeRange$to' => '<p>The ending date and time of a time range.</p>', 'Event$startTime' => '<p>The date and time that the event began.</p>', 'Event$endTime' => '<p>The date and time that the event ended.</p>', 'Event$lastUpdatedTime' => '<p>The most recent date and time that the event was updated.</p>', ], ], ],];
