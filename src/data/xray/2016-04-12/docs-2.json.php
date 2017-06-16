<?php
// This file was auto-generated from sdk-root/src/data/xray/2016-04-12/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>AWS X-Ray provides APIs for managing debug traces and retrieving service maps and other data created by processing those traces.</p>', 'operations' => [ 'BatchGetTraces' => '<p>Retrieves a list of traces specified by ID. Each trace is a collection of segment documents that originates from a single request. Use <code>GetTraceSummaries</code> to get a list of trace IDs.</p>', 'GetServiceGraph' => '<p>Retrieves a document that describes services that process incoming requests, and downstream services that they call as a result. Root services process incoming requests and make calls to downstream services. Root services are applications that use the AWS X-Ray SDK. Downstream services can be other applications, AWS resources, HTTP web APIs, or SQL databases.</p>', 'GetTraceGraph' => '<p>Retrieves a service graph for one or more specific trace IDs.</p>', 'GetTraceSummaries' => '<p>Retrieves IDs and metadata for traces available for a specified time frame using an optional filter. To get the full traces, pass the trace IDs to <code>BatchGetTraces</code>.</p> <p>A filter expression can target traced requests that hit specific service nodes or edges, have errors, or come from a known user. For example, the following filter expression targets traces that pass through <code>api.example.com</code>:</p> <p> <code>service("api.example.com")</code> </p> <p>This filter expression finds traces that have an annotation named <code>account</code> with the value <code>12345</code>:</p> <p> <code>annotation.account = "12345"</code> </p> <p>For a full list of indexed fields and keywords that you can use in filter expressions, see <a href="http://docs.aws.amazon.com/xray/latest/devguide/xray-console-filters.html">Using Filter Expressions</a> in the <i>AWS X-Ray Developer Guide</i>.</p>', 'PutTelemetryRecords' => '<p>Used by the AWS X-Ray daemon to upload telemetry.</p>', 'PutTraceSegments' => '<p>Uploads segment documents to AWS X-Ray. The X-Ray SDK generates segment documents and sends them to the X-Ray daemon, which uploads them in batches. A segment document can be a completed segment, an in-progress segment, or an array of subsegments.</p> <p>Segments must include the following fields. For the full segment document schema, see <a href="http://docs.aws.amazon.com/xray/latest/devguide/xray-api-segmentdocuments.html">AWS X-Ray Segment Documents</a> in the <i>AWS X-Ray Developer Guide</i>.</p> <p class="title"> <b>Required Segment Document Fields</b> </p> <ul> <li> <p> <code>name</code> - The name of the service that handled the request.</p> </li> <li> <p> <code>id</code> - A 64-bit identifier for the segment, unique among segments in the same trace, in 16 hexadecimal digits.</p> </li> <li> <p> <code>trace_id</code> - A unique identifier that connects all segments and subsegments originating from a single client request.</p> </li> <li> <p> <code>start_time</code> - Time the segment or subsegment was created, in floating point seconds in epoch time, accurate to milliseconds. For example, <code>1480615200.010</code> or <code>1.480615200010E9</code>.</p> </li> <li> <p> <code>end_time</code> - Time the segment or subsegment was closed. For example, <code>1480615200.090</code> or <code>1.480615200090E9</code>. Specify either an <code>end_time</code> or <code>in_progress</code>.</p> </li> <li> <p> <code>in_progress</code> - Set to <code>true</code> instead of specifying an <code>end_time</code> to record that a segment has been started, but is not complete. Send an in progress segment when your application receives a request that will take a long time to serve, to trace the fact that the request was received. When the response is sent, send the complete segment to overwrite the in-progress segment.</p> </li> </ul> <p>A <code>trace_id</code> consists of three numbers separated by hyphens. For example, 1-58406520-a006649127e371903a2de979. This includes:</p> <p class="title"> <b>Trace ID Format</b> </p> <ul> <li> <p>The version number, i.e. <code>1</code>.</p> </li> <li> <p>The time of the original request, in Unix epoch time, in 8 hexadecimal digits. For example, 10:00AM December 2nd, 2016 PST in epoch time is <code>1480615200</code> seconds, or <code>58406520</code> in hexadecimal.</p> </li> <li> <p>A 96-bit identifier for the trace, globally unique, in 24 hexadecimal digits.</p> </li> </ul>', ], 'shapes' => [ 'Alias' => [ 'base' => '<p>An alias for an edge.</p>', 'refs' => [ 'AliasList$member' => NULL, ], ], 'AliasList' => [ 'base' => NULL, 'refs' => [ 'Edge$Aliases' => '<p>Aliases for the edge.</p>', ], ], 'AliasNames' => [ 'base' => NULL, 'refs' => [ 'Alias$Names' => '<p>A list of names for the alias, including the canonical name.</p>', ], ], 'AnnotationKey' => [ 'base' => NULL, 'refs' => [ 'Annotations$key' => NULL, ], ], 'AnnotationValue' => [ 'base' => '<p>Value of a segment annotation. Has one of three value types: Number, Boolean or String.</p>', 'refs' => [ 'ValueWithServiceIds$AnnotationValue' => '<p>Values of the annotation.</p>', ], ], 'Annotations' => [ 'base' => NULL, 'refs' => [ 'TraceSummary$Annotations' => '<p>Annotations from the trace\'s segment documents.</p>', ], ], 'BackendConnectionErrors' => [ 'base' => '<p/>', 'refs' => [ 'TelemetryRecord$BackendConnectionErrors' => '<p/>', ], ], 'BatchGetTracesRequest' => [ 'base' => NULL, 'refs' => [], ], 'BatchGetTracesResult' => [ 'base' => NULL, 'refs' => [], ], 'Double' => [ 'base' => NULL, 'refs' => [ 'HistogramEntry$Value' => '<p>The value of the entry.</p>', ], ], 'Edge' => [ 'base' => '<p>Information about a connection between two services.</p>', 'refs' => [ 'EdgeList$member' => NULL, ], ], 'EdgeList' => [ 'base' => NULL, 'refs' => [ 'Service$Edges' => '<p>Connections to downstream services.</p>', ], ], 'EdgeStatistics' => [ 'base' => '<p>Response statistics for an edge.</p>', 'refs' => [ 'Edge$SummaryStatistics' => '<p>Response statistics for segments on the edge.</p>', ], ], 'ErrorStatistics' => [ 'base' => '<p>Information about requests that failed with a 4xx Client Error status code.</p>', 'refs' => [ 'EdgeStatistics$ErrorStatistics' => '<p>Information about requests that failed with a 4xx Client Error status code.</p>', 'ServiceStatistics$ErrorStatistics' => '<p>Information about requests that failed with a 4xx Client Error status code.</p>', ], ], 'FaultStatistics' => [ 'base' => '<p>Information about requests that failed with a 5xx Server Error status code.</p>', 'refs' => [ 'EdgeStatistics$FaultStatistics' => '<p>Information about requests that failed with a 5xx Server Error status code.</p>', 'ServiceStatistics$FaultStatistics' => '<p>Information about requests that failed with a 5xx Server Error status code.</p>', ], ], 'FilterExpression' => [ 'base' => NULL, 'refs' => [ 'GetTraceSummariesRequest$FilterExpression' => '<p>Specify a filter expression to retrieve trace summaries for services or requests that meet certain requirements.</p>', ], ], 'GetServiceGraphRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetServiceGraphResult' => [ 'base' => NULL, 'refs' => [], ], 'GetTraceGraphRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTraceGraphResult' => [ 'base' => NULL, 'refs' => [], ], 'GetTraceSummariesRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTraceSummariesResult' => [ 'base' => NULL, 'refs' => [], ], 'Histogram' => [ 'base' => NULL, 'refs' => [ 'Edge$ResponseTimeHistogram' => '<p>A histogram that maps the spread of client response times on an edge.</p>', 'Service$DurationHistogram' => '<p>A histogram that maps the spread of service durations.</p>', 'Service$ResponseTimeHistogram' => '<p>A histogram that maps the spread of service response times.</p>', ], ], 'HistogramEntry' => [ 'base' => '<p>An entry in a histogram for a statistic. A histogram maps the range of observed values on the X axis, and the prevalence of each value on the Y axis.</p>', 'refs' => [ 'Histogram$member' => NULL, ], ], 'Http' => [ 'base' => '<p>Information about an HTTP request.</p>', 'refs' => [ 'TraceSummary$Http' => '<p>Information about the HTTP request served by the trace.</p>', ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'HistogramEntry$Count' => '<p>The prevalence of the entry.</p>', ], ], 'InvalidRequestException' => [ 'base' => '<p>The request is missing required parameters or has invalid parameters.</p>', 'refs' => [], ], 'NullableBoolean' => [ 'base' => NULL, 'refs' => [ 'AnnotationValue$BooleanValue' => '<p>Value for a Boolean annotation.</p>', 'GetTraceSummariesRequest$Sampling' => '<p>Set to <code>true</code> to get summaries for only a subset of available traces.</p>', 'Service$Root' => '<p>Indicates that the service was the first service to process a request.</p>', 'TraceSummary$HasFault' => '<p>One or more of the segment documents has a 500 series error.</p>', 'TraceSummary$HasError' => '<p>One or more of the segment documents has a 400 series error.</p>', 'TraceSummary$HasThrottle' => '<p>One or more of the segment documents has a 429 throttling error.</p>', 'TraceSummary$IsPartial' => '<p>One or more of the segment documents is in progress.</p>', ], ], 'NullableDouble' => [ 'base' => NULL, 'refs' => [ 'AnnotationValue$NumberValue' => '<p>Value for a Number annotation.</p>', 'EdgeStatistics$TotalResponseTime' => '<p>The aggregate response time of completed requests.</p>', 'ServiceStatistics$TotalResponseTime' => '<p>The aggregate response time of completed requests.</p>', 'Trace$Duration' => '<p>The length of time in seconds between the start time of the root segment and the end time of the last segment that completed.</p>', 'TraceSummary$Duration' => '<p>The length of time in seconds between the start time of the root segment and the end time of the last segment that completed.</p>', 'TraceSummary$ResponseTime' => '<p>The length of time in seconds between the start and end times of the root segment. If the service performs work asynchronously, the response time measures the time before the response is sent to the user, while the duration measures the amount of time before the last traced activity completes.</p>', ], ], 'NullableInteger' => [ 'base' => NULL, 'refs' => [ 'BackendConnectionErrors$TimeoutCount' => '<p/>', 'BackendConnectionErrors$ConnectionRefusedCount' => '<p/>', 'BackendConnectionErrors$HTTPCode4XXCount' => '<p/>', 'BackendConnectionErrors$HTTPCode5XXCount' => '<p/>', 'BackendConnectionErrors$UnknownHostCount' => '<p/>', 'BackendConnectionErrors$OtherCount' => '<p/>', 'Edge$ReferenceId' => '<p>Identifier of the edge. Unique within a service map.</p>', 'Http$HttpStatus' => '<p>The response status.</p>', 'Service$ReferenceId' => '<p>Identifier for the service. Unique within the service map.</p>', 'TelemetryRecord$SegmentsReceivedCount' => '<p/>', 'TelemetryRecord$SegmentsSentCount' => '<p/>', 'TelemetryRecord$SegmentsSpilloverCount' => '<p/>', 'TelemetryRecord$SegmentsRejectedCount' => '<p/>', ], ], 'NullableLong' => [ 'base' => NULL, 'refs' => [ 'EdgeStatistics$OkCount' => '<p>The number of requests that completed with a 2xx Success status code.</p>', 'EdgeStatistics$TotalCount' => '<p>The total number of completed requests.</p>', 'ErrorStatistics$ThrottleCount' => '<p>The number of requests that failed with a 419 throttling status code.</p>', 'ErrorStatistics$OtherCount' => '<p>The number of requests that failed with untracked 4xx Client Error status codes.</p>', 'ErrorStatistics$TotalCount' => '<p>The total number of requests that failed with a 4xx Client Error status code.</p>', 'FaultStatistics$OtherCount' => '<p>The number of requests that failed with untracked 5xx Server Error status codes.</p>', 'FaultStatistics$TotalCount' => '<p>The total number of requests that failed with a 5xx Server Error status code.</p>', 'GetTraceSummariesResult$TracesProcessedCount' => '<p>The number of traces that were processed to get this set of summaries.</p>', 'ServiceStatistics$OkCount' => '<p>The number of requests that completed with a 2xx Success status code.</p>', 'ServiceStatistics$TotalCount' => '<p>The total number of completed requests.</p>', ], ], 'PutTelemetryRecordsRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutTelemetryRecordsResult' => [ 'base' => NULL, 'refs' => [], ], 'PutTraceSegmentsRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutTraceSegmentsResult' => [ 'base' => NULL, 'refs' => [], ], 'Segment' => [ 'base' => '<p>A segment from a trace that has been ingested by the X-Ray service. The segment can be compiled from documents uploaded with <a>PutTraceSegments</a>, or an <code>inferred</code> segment for a downstream service, generated from a subsegment sent by the service that called it.</p>', 'refs' => [ 'SegmentList$member' => NULL, ], ], 'SegmentDocument' => [ 'base' => NULL, 'refs' => [ 'Segment$Document' => '<p>The segment document</p>', ], ], 'SegmentId' => [ 'base' => NULL, 'refs' => [ 'Segment$Id' => '<p>The segment\'s ID.</p>', ], ], 'SegmentList' => [ 'base' => NULL, 'refs' => [ 'Trace$Segments' => '<p>Segment documents for the segments and subsegments that comprise the trace.</p>', ], ], 'Service' => [ 'base' => '<p>Information about an application that processed requests, users that made requests, or downstream services, resources and applications that an application used.</p>', 'refs' => [ 'ServiceList$member' => NULL, ], ], 'ServiceId' => [ 'base' => '<p/>', 'refs' => [ 'ServiceIds$member' => NULL, ], ], 'ServiceIds' => [ 'base' => NULL, 'refs' => [ 'TraceSummary$ServiceIds' => '<p>Service IDs from the trace\'s segment documents.</p>', 'TraceUser$ServiceIds' => '<p>Services that the user\'s request hit.</p>', 'ValueWithServiceIds$ServiceIds' => '<p>Services to which the annotation applies.</p>', ], ], 'ServiceList' => [ 'base' => NULL, 'refs' => [ 'GetServiceGraphResult$Services' => '<p>The services that have processed a traced request during the specified time frame.</p>', 'GetTraceGraphResult$Services' => '<p>The services that have processed one of the specified requests.</p>', ], ], 'ServiceNames' => [ 'base' => NULL, 'refs' => [ 'Service$Names' => '<p>A list of names for the service, including the canonical name.</p>', 'ServiceId$Names' => '<p/>', ], ], 'ServiceStatistics' => [ 'base' => '<p>Response statistics for a service.</p>', 'refs' => [ 'Service$SummaryStatistics' => '<p>Aggregated statistics for the service.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'Alias$Name' => '<p>The canonical name of the alias.</p>', 'Alias$Type' => '<p>The type of the alias.</p>', 'AliasNames$member' => NULL, 'AnnotationValue$StringValue' => '<p>Value for a String annotation.</p>', 'BatchGetTracesRequest$NextToken' => '<p>Pagination token. Not used.</p>', 'BatchGetTracesResult$NextToken' => '<p>Pagination token. Not used.</p>', 'GetServiceGraphRequest$NextToken' => '<p>Pagination token. Not used.</p>', 'GetServiceGraphResult$NextToken' => '<p>Pagination token. Not used.</p>', 'GetTraceGraphRequest$NextToken' => '<p>Pagination token. Not used.</p>', 'GetTraceGraphResult$NextToken' => '<p>Pagination token. Not used.</p>', 'GetTraceSummariesRequest$NextToken' => '<p>Specify the pagination token returned by a previous request to retrieve the next page of results.</p>', 'GetTraceSummariesResult$NextToken' => '<p>If the requested time frame contained more than one page of results, you can use this token to retrieve the next page. The first page contains the most most recent results, closest to the end of the time frame.</p>', 'Http$HttpURL' => '<p>The request URL.</p>', 'Http$HttpMethod' => '<p>The request method.</p>', 'Http$UserAgent' => '<p>The request\'s user agent string.</p>', 'Http$ClientIp' => '<p>The IP address of the requestor.</p>', 'PutTelemetryRecordsRequest$EC2InstanceId' => '<p/>', 'PutTelemetryRecordsRequest$Hostname' => '<p/>', 'PutTelemetryRecordsRequest$ResourceARN' => '<p/>', 'Service$Name' => '<p>The canonical name of the service.</p>', 'Service$AccountId' => '<p>Identifier of the AWS account in which the service runs.</p>', 'Service$Type' => '<p>The type of service.</p> <ul> <li> <p>AWS Resource - The type of an AWS resource. For example, <code>AWS::EC2::Instance</code> for a application running on Amazon EC2 or <code>AWS::DynamoDB::Table</code> for an Amazon DynamoDB table that the application used.</p> </li> <li> <p>AWS Service - The type of an AWS service. For example, <code>AWS::DynamoDB</code> for downstream calls to Amazon DynamoDB that didn\'t target a specific table.</p> </li> <li> <p> <code>client</code> - Represents the clients that sent requests to a root service.</p> </li> <li> <p> <code>remote</code> - A downstream service of indeterminate type.</p> </li> </ul>', 'Service$State' => '<p>The service\'s state.</p>', 'ServiceId$Name' => '<p/>', 'ServiceId$AccountId' => '<p/>', 'ServiceId$Type' => '<p/>', 'ServiceNames$member' => NULL, 'TraceUser$UserName' => '<p>The user\'s name.</p>', 'UnprocessedTraceSegment$Id' => '<p>The segment\'s ID.</p>', 'UnprocessedTraceSegment$ErrorCode' => '<p>The error that caused processing to fail.</p>', 'UnprocessedTraceSegment$Message' => '<p>The error message.</p>', ], ], 'TelemetryRecord' => [ 'base' => '<p/>', 'refs' => [ 'TelemetryRecordList$member' => NULL, ], ], 'TelemetryRecordList' => [ 'base' => NULL, 'refs' => [ 'PutTelemetryRecordsRequest$TelemetryRecords' => '<p/>', ], ], 'ThrottledException' => [ 'base' => '<p>The request exceeds the maximum number of requests per second.</p>', 'refs' => [], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'Edge$StartTime' => '<p>The start time of the first segment on the edge.</p>', 'Edge$EndTime' => '<p>The end time of the last segment on the edge.</p>', 'GetServiceGraphRequest$StartTime' => '<p>The start of the time frame for which to generate a graph.</p>', 'GetServiceGraphRequest$EndTime' => '<p>The end of the time frame for which to generate a graph.</p>', 'GetServiceGraphResult$StartTime' => '<p>The start of the time frame for which the graph was generated.</p>', 'GetServiceGraphResult$EndTime' => '<p>The end of the time frame for which the graph was generated.</p>', 'GetTraceSummariesRequest$StartTime' => '<p>The start of the time frame for which to retrieve traces.</p>', 'GetTraceSummariesRequest$EndTime' => '<p>The end of the time frame for which to retrieve traces.</p>', 'GetTraceSummariesResult$ApproximateTime' => '<p>The start time of this page of results.</p>', 'Service$StartTime' => '<p>The start time of the first segment that the service generated.</p>', 'Service$EndTime' => '<p>The end time of the last segment that the service generated.</p>', 'TelemetryRecord$Timestamp' => '<p/>', ], ], 'Trace' => [ 'base' => '<p>A collection of segment documents with matching trace IDs.</p>', 'refs' => [ 'TraceList$member' => NULL, ], ], 'TraceId' => [ 'base' => NULL, 'refs' => [ 'Trace$Id' => '<p>The unique identifier for the request that generated the trace\'s segments and subsegments.</p>', 'TraceIdList$member' => NULL, 'TraceSummary$Id' => '<p>The unique identifier for the request that generated the trace\'s segments and subsegments.</p>', 'UnprocessedTraceIdList$member' => NULL, ], ], 'TraceIdList' => [ 'base' => NULL, 'refs' => [ 'BatchGetTracesRequest$TraceIds' => '<p>Specify the trace IDs of requests for which to retrieve segments.</p>', 'GetTraceGraphRequest$TraceIds' => '<p>Trace IDs of requests for which to generate a service graph.</p>', ], ], 'TraceList' => [ 'base' => NULL, 'refs' => [ 'BatchGetTracesResult$Traces' => '<p>Full traces for the specified requests.</p>', ], ], 'TraceSegmentDocument' => [ 'base' => NULL, 'refs' => [ 'TraceSegmentDocumentList$member' => NULL, ], ], 'TraceSegmentDocumentList' => [ 'base' => NULL, 'refs' => [ 'PutTraceSegmentsRequest$TraceSegmentDocuments' => '<p>A string containing a JSON document defining one or more segments or subsegments.</p>', ], ], 'TraceSummary' => [ 'base' => '<p>Metadata generated from the segment documents in a trace.</p>', 'refs' => [ 'TraceSummaryList$member' => NULL, ], ], 'TraceSummaryList' => [ 'base' => NULL, 'refs' => [ 'GetTraceSummariesResult$TraceSummaries' => '<p>Trace IDs and metadata for traces that were found in the specified time frame.</p>', ], ], 'TraceUser' => [ 'base' => '<p>Information about a user recorded in segment documents.</p>', 'refs' => [ 'TraceUsers$member' => NULL, ], ], 'TraceUsers' => [ 'base' => NULL, 'refs' => [ 'TraceSummary$Users' => '<p>Users from the trace\'s segment documents.</p>', ], ], 'UnprocessedTraceIdList' => [ 'base' => NULL, 'refs' => [ 'BatchGetTracesResult$UnprocessedTraceIds' => '<p>Trace IDs of requests that haven\'t been processed.</p>', ], ], 'UnprocessedTraceSegment' => [ 'base' => '<p>Information about a segment that failed processing.</p>', 'refs' => [ 'UnprocessedTraceSegmentList$member' => NULL, ], ], 'UnprocessedTraceSegmentList' => [ 'base' => NULL, 'refs' => [ 'PutTraceSegmentsResult$UnprocessedTraceSegments' => '<p>Segments that failed processing.</p>', ], ], 'ValueWithServiceIds' => [ 'base' => '<p>Information about a segment annotation.</p>', 'refs' => [ 'ValuesWithServiceIds$member' => NULL, ], ], 'ValuesWithServiceIds' => [ 'base' => NULL, 'refs' => [ 'Annotations$value' => NULL, ], ], ],];
