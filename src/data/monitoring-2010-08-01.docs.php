<?php return [
  'operations' => [
    'DeleteAlarms' => '<p> Deletes all specified alarms. In the event of an error, no alarms are deleted. </p>',
    'DescribeAlarmHistory' => '<p> Retrieves history for the specified alarm. Filter alarms by date range or item type. If an alarm name is not specified, Amazon CloudWatch returns histories for all of the owner\'s alarms. </p>',
    'DescribeAlarms' => '<p> Retrieves alarms with the specified names. If no name is specified, all alarms for the user are returned. Alarms can be retrieved by using only a prefix for the alarm name, the alarm state, or a prefix for any action. </p>',
    'DescribeAlarmsForMetric' => '<p> Retrieves all alarms for a single metric. Specify a statistic, period, or unit to filter the set of alarms further. </p>',
    'DisableAlarmActions' => '<p> Disables actions for the specified alarms. When an alarm\'s actions are disabled the alarm\'s state may change, but none of the alarm\'s actions will execute. </p>',
    'EnableAlarmActions' => '<p> Enables actions for the specified alarms. </p>',
    'GetMetricStatistics' => '<p> Gets statistics for the specified metric. </p> <p> The maximum number of data points returned from a single <code>GetMetricStatistics</code> request is 1,440, wereas the maximum number of data points that can be queried is 50,850. If you make a request that generates more than 1,440 data points, Amazon CloudWatch returns an error. In such a case, you can alter the request by narrowing the specified time range or increasing the specified period. Alternatively, you can make multiple requests across adjacent time ranges. </p> <p> Amazon CloudWatch aggregates data points based on the length of the <code>period</code> that you specify. For example, if you request statistics with a one-minute granularity, Amazon CloudWatch aggregates data points with time stamps that fall within the same one-minute period. In such a case, the data points queried can greatly outnumber the data points returned. </p> <p> The following examples show various statistics allowed by the data point query maximum of 50,850 when you call <code>GetMetricStatistics</code> on Amazon EC2 instances with detailed (one-minute] monitoring enabled: </p> <ul> <li>Statistics for up to 400 instances for a span of one hour</li> <li>Statistics for up to 35 instances over a span of 24 hours</li> <li>Statistics for up to 2 instances over a span of 2 weeks</li> </ul> <p> For information about the namespace, metric names, and dimensions that other Amazon Web Services products use to send metrics to Cloudwatch, go to <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/CW_Support_For_AWS.html">Amazon CloudWatch Metrics, Namespaces, and Dimensions Reference</a> in the <i>Amazon CloudWatch Developer Guide</i>. </p>',
    'ListMetrics' => '<p> Returns a list of valid metrics stored for the AWS account owner. Returned metrics can be used with <a>GetMetricStatistics</a> to obtain statistical data for a given metric. </p>',
    'PutMetricAlarm' => '<p> Creates or updates an alarm and associates it with the specified Amazon CloudWatch metric. Optionally, this operation can associate one or more Amazon Simple Notification Service resources with the alarm. </p> <p> When this operation creates an alarm, the alarm state is immediately set to <code>INSUFFICIENT_DATA</code>. The alarm is evaluated and its <code>StateValue</code> is set appropriately. Any actions associated with the <code>StateValue</code> is then executed. </p>',
    'PutMetricData' => '<p> Publishes metric data points to Amazon CloudWatch. Amazon Cloudwatch associates the data points with the specified metric. If the specified metric does not exist, Amazon CloudWatch creates the metric. It can take up to fifteen minutes for a new metric to appear in calls to the <a>ListMetrics</a> action.</p> <p> The size of a <function>PutMetricData</function> request is limited to 8 KB for HTTP GET requests and 40 KB for HTTP POST requests. </p> <important> Although the <code>Value</code> parameter accepts numbers of type <code>Double</code>, Amazon CloudWatch truncates values with very large exponents. Values with base-10 exponents greater than 126 (1 x 10^126] are truncated. Likewise, values with base-10 exponents less than -130 (1 x 10^-130] are also truncated. </important> <p>Data that is timestamped 24 hours or more in the past may take in excess of 48 hours to become available from submission time using <code>GetMetricStatistics</code>.</p>',
    'SetAlarmState' => '<p> Temporarily sets the state of an alarm. When the updated <code>StateValue</code> differs from the previous value, the action configured for the appropriate state is invoked. This is not a permanent change. The next periodic alarm check (in about a minute] will set the alarm to its actual state. </p>',
  ],
  'service' => '<p>This is the <i>Amazon CloudWatch API Reference</i>. This guide provides detailed information about Amazon CloudWatch actions, data types, parameters, and errors. For detailed information about Amazon CloudWatch features and their associated API calls, go to the <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide">Amazon CloudWatch Developer Guide</a>. </p> <p>Amazon CloudWatch is a web service that enables you to publish, monitor, and manage various metrics, as well as configure alarm actions based on data from metrics. For more information about this product go to <a href="http://aws.amazon.com/cloudwatch">http://aws.amazon.com/cloudwatch</a>. </p> <p> For information about the namespace, metric names, and dimensions that other Amazon Web Services products use to send metrics to Cloudwatch, go to <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/CW_Support_For_AWS.html">Amazon CloudWatch Metrics, Namespaces, and Dimensions Reference</a> in the <i>Amazon CloudWatch Developer Guide</i>. </p> <p>Use the following links to get started using the <i>Amazon CloudWatch API Reference</i>:</p> <ul> <li> <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/APIReference/API_Operations.html">Actions</a>: An alphabetical list of all Amazon CloudWatch actions.</li> <li> <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/APIReference/API_Types.html">Data Types</a>: An alphabetical list of all Amazon CloudWatch data types.</li> <li> <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/APIReference/CommonParameters.html">Common Parameters</a>: Parameters that all Query actions can use.</li> <li> <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/APIReference/CommonErrors.html">Common Errors</a>: Client and server errors that all actions can return.</li> <li> <a href="http://docs.aws.amazon.com/general/latest/gr/index.html?rande.html">Regions and Endpoints</a>: Itemized regions and endpoints for all AWS products.</li> <li> <a href="http://monitoring.amazonaws.com/doc/2010-08-01/CloudWatch.wsdl">WSDL Location</a>: http://monitoring.amazonaws.com/doc/2010-08-01/CloudWatch.wsdl</li> </ul> <p>In addition to using the Amazon CloudWatch API, you can also use the following SDKs and third-party libraries to access Amazon CloudWatch programmatically.</p> <ul> <li><a href="http://aws.amazon.com/documentation/sdkforjava/">AWS SDK for Java Documentation</a></li> <li><a href="http://aws.amazon.com/documentation/sdkfornet/">AWS SDK for .NET Documentation</a></li> <li><a href="http://aws.amazon.com/documentation/sdkforphp/">AWS SDK for PHP Documentation</a></li> <li><a href="http://aws.amazon.com/documentation/sdkforruby/">AWS SDK for Ruby Documentation</a></li> </ul> <p>Developers in the AWS developer community also provide their own libraries, which you can find at the following AWS developer centers:</p> <ul> <li><a href="http://aws.amazon.com/java/">AWS Java Developer Center</a></li> <li><a href="http://aws.amazon.com/php/">AWS PHP Developer Center</a></li> <li><a href="http://aws.amazon.com/python/">AWS Python Developer Center</a></li> <li><a href="http://aws.amazon.com/ruby/">AWS Ruby Developer Center</a></li> <li><a href="http://aws.amazon.com/net/">AWS Windows and .NET Developer Center</a></li> </ul>',
  'shapes' => [
    'ActionPrefix' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmsInput$ActionPrefix' => '<p> The action name prefix. </p>',
      ],
    ],
    'ActionsEnabled' => [
      'base' => NULL,
      'refs' => [
        'MetricAlarm$ActionsEnabled' => '<p> Indicates whether actions should be executed during any changes to the alarm\'s state. </p>',
        'PutMetricAlarmInput$ActionsEnabled' => '<p> Indicates whether or not actions should be executed during any changes to the alarm\'s state. </p>',
      ],
    ],
    'AlarmArn' => [
      'base' => NULL,
      'refs' => [
        'MetricAlarm$AlarmArn' => '<p> The Amazon Resource Name (ARN] of the alarm. </p>',
      ],
    ],
    'AlarmDescription' => [
      'base' => NULL,
      'refs' => [
        'MetricAlarm$AlarmDescription' => '<p> The description for the alarm. </p>',
        'PutMetricAlarmInput$AlarmDescription' => '<p> The description for the alarm. </p>',
      ],
    ],
    'AlarmHistoryItem' => [
      'base' => '<p> The <code>AlarmHistoryItem</code> data type contains descriptive information about the history of a specific alarm. If you call <a>DescribeAlarmHistory</a>, Amazon CloudWatch returns this data type as part of the <a>DescribeAlarmHistoryResult</a> data type. </p>',
      'refs' => [
        'AlarmHistoryItems$member' => NULL,
      ],
    ],
    'AlarmHistoryItems' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmHistoryOutput$AlarmHistoryItems' => '<p> A list of alarm histories in JSON format. </p>',
      ],
    ],
    'AlarmName' => [
      'base' => NULL,
      'refs' => [
        'AlarmHistoryItem$AlarmName' => '<p> The descriptive name for the alarm. </p>',
        'AlarmNames$member' => NULL,
        'DescribeAlarmHistoryInput$AlarmName' => '<p> The name of the alarm. </p>',
        'MetricAlarm$AlarmName' => '<p> The name of the alarm. </p>',
        'PutMetricAlarmInput$AlarmName' => '<p> The descriptive name for the alarm. This name must be unique within the user\'s AWS account </p>',
        'SetAlarmStateInput$AlarmName' => '<p> The descriptive name for the alarm. This name must be unique within the user\'s AWS account. The maximum length is 255 characters. </p>',
      ],
    ],
    'AlarmNamePrefix' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmsInput$AlarmNamePrefix' => '<p> The alarm name prefix. <code>AlarmNames</code> cannot be specified if this parameter is specified. </p>',
      ],
    ],
    'AlarmNames' => [
      'base' => NULL,
      'refs' => [
        'DeleteAlarmsInput$AlarmNames' => '<p> A list of alarms to be deleted. </p>',
        'DescribeAlarmsInput$AlarmNames' => '<p> A list of alarm names to retrieve information for. </p>',
        'DisableAlarmActionsInput$AlarmNames' => '<p> The names of the alarms to disable actions for. </p>',
        'EnableAlarmActionsInput$AlarmNames' => '<p> The names of the alarms to enable actions for. </p>',
      ],
    ],
    'AwsQueryErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'InvalidParameterCombinationException$message' => '<p></p>',
        'InvalidParameterValueException$message' => '<p></p>',
        'MissingRequiredParameterException$message' => '<p></p>',
      ],
    ],
    'ComparisonOperator' => [
      'base' => NULL,
      'refs' => [
        'MetricAlarm$ComparisonOperator' => '<p> The arithmetic operation to use when comparing the specified <code>Statistic</code> and <code>Threshold</code>. The specified <code>Statistic</code> value is used as the first operand. </p>',
        'PutMetricAlarmInput$ComparisonOperator' => '<p> The arithmetic operation to use when comparing the specified <code>Statistic</code> and <code>Threshold</code>. The specified <code>Statistic</code> value is used as the first operand. </p>',
      ],
    ],
    'Datapoint' => [
      'base' => '<p> The <code>Datapoint</code> data type encapsulates the statistical data that Amazon CloudWatch computes from metric data. </p>',
      'refs' => [
        'Datapoints$member' => NULL,
      ],
    ],
    'DatapointValue' => [
      'base' => NULL,
      'refs' => [
        'Datapoint$SampleCount' => '<p> The number of metric values that contributed to the aggregate value of this datapoint. </p>',
        'Datapoint$Average' => '<p> The average of metric values that correspond to the datapoint. </p>',
        'Datapoint$Sum' => '<p> The sum of metric values used for the datapoint. </p>',
        'Datapoint$Minimum' => '<p> The minimum metric value used for the datapoint. </p>',
        'Datapoint$Maximum' => '<p> The maximum of the metric value used for the datapoint. </p>',
        'MetricDatum$Value' => '<p> The value for the metric. </p> <important>Although the <code>Value</code> parameter accepts numbers of type <code>Double</code>, Amazon CloudWatch truncates values with very large exponents. Values with base-10 exponents greater than 126 (1 x 10^126] are truncated. Likewise, values with base-10 exponents less than -130 (1 x 10^-130] are also truncated. </important>',
        'StatisticSet$SampleCount' => '<p> The number of samples used for the statistic set. </p>',
        'StatisticSet$Sum' => '<p> The sum of values for the sample set. </p>',
        'StatisticSet$Minimum' => '<p> The minimum value of the sample set. </p>',
        'StatisticSet$Maximum' => '<p> The maximum value of the sample set. </p>',
      ],
    ],
    'Datapoints' => [
      'base' => NULL,
      'refs' => [
        'GetMetricStatisticsOutput$Datapoints' => '<p> The datapoints for the specified metric. </p>',
      ],
    ],
    'DeleteAlarmsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAlarmHistoryInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAlarmHistoryOutput' => [
      'base' => '<p> The output for the <a>DescribeAlarmHistory</a> action. </p>',
      'refs' => [],
    ],
    'DescribeAlarmsForMetricInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAlarmsForMetricOutput' => [
      'base' => '<p> The output for the <a>DescribeAlarmsForMetric</a> action. </p>',
      'refs' => [],
    ],
    'DescribeAlarmsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeAlarmsOutput' => [
      'base' => '<p> The output for the <a>DescribeAlarms</a> action. </p>',
      'refs' => [],
    ],
    'Dimension' => [
      'base' => '<p> The <code>Dimension</code> data type further expands on the identity of a metric using a Name, Value pair. </p> <p>For examples that use one or more dimensions, see <a>PutMetricData</a>.</p>',
      'refs' => [
        'Dimensions$member' => NULL,
      ],
    ],
    'DimensionFilter' => [
      'base' => '<p> The <code>DimensionFilter</code> data type is used to filter <a>ListMetrics</a> results. </p>',
      'refs' => [
        'DimensionFilters$member' => NULL,
      ],
    ],
    'DimensionFilters' => [
      'base' => NULL,
      'refs' => [
        'ListMetricsInput$Dimensions' => '<p> A list of dimensions to filter against. </p>',
      ],
    ],
    'DimensionName' => [
      'base' => NULL,
      'refs' => [
        'Dimension$Name' => '<p> The name of the dimension. </p>',
        'DimensionFilter$Name' => '<p> The dimension name to be matched. </p>',
      ],
    ],
    'DimensionValue' => [
      'base' => NULL,
      'refs' => [
        'Dimension$Value' => '<p> The value representing the dimension measurement </p>',
        'DimensionFilter$Value' => '<p> The value of the dimension to be matched. </p>',
      ],
    ],
    'Dimensions' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmsForMetricInput$Dimensions' => '<p> The list of dimensions associated with the metric. </p>',
        'GetMetricStatisticsInput$Dimensions' => '<p> A list of dimensions describing qualities of the metric. </p>',
        'Metric$Dimensions' => '<p> A list of dimensions associated with the metric. </p>',
        'MetricAlarm$Dimensions' => '<p> The list of dimensions associated with the alarm\'s associated metric. </p>',
        'MetricDatum$Dimensions' => '<p> A list of dimensions associated with the metric. Note, when using the Dimensions value in a query, you need to append .member.N to it (e.g., Dimensions.member.N]. </p>',
        'PutMetricAlarmInput$Dimensions' => '<p> The dimensions for the alarm\'s associated metric. </p>',
      ],
    ],
    'DisableAlarmActionsInput' => [
      'base' => '<p> </p>',
      'refs' => [],
    ],
    'EnableAlarmActionsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'InvalidFormatFault$message' => '<p></p>',
        'InvalidNextToken$message' => '<p></p>',
        'LimitExceededFault$message' => '<p></p>',
        'ResourceNotFound$message' => '<p></p>',
      ],
    ],
    'EvaluationPeriods' => [
      'base' => NULL,
      'refs' => [
        'MetricAlarm$EvaluationPeriods' => '<p> The number of periods over which data is compared to the specified threshold. </p>',
        'PutMetricAlarmInput$EvaluationPeriods' => '<p> The number of periods over which data is compared to the specified threshold. </p>',
      ],
    ],
    'FaultDescription' => [
      'base' => NULL,
      'refs' => [
        'InternalServiceFault$Message' => '<p></p>',
      ],
    ],
    'GetMetricStatisticsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetMetricStatisticsOutput' => [
      'base' => '<p> The output for the <a>GetMetricStatistics</a> action. </p>',
      'refs' => [],
    ],
    'HistoryData' => [
      'base' => NULL,
      'refs' => [
        'AlarmHistoryItem$HistoryData' => '<p> Machine-readable data about the alarm in JSON format. </p>',
      ],
    ],
    'HistoryItemType' => [
      'base' => NULL,
      'refs' => [
        'AlarmHistoryItem$HistoryItemType' => '<p> The type of alarm history item. </p>',
        'DescribeAlarmHistoryInput$HistoryItemType' => '<p> The type of alarm histories to retrieve. </p>',
      ],
    ],
    'HistorySummary' => [
      'base' => NULL,
      'refs' => [
        'AlarmHistoryItem$HistorySummary' => '<p> A human-readable summary of the alarm history. </p>',
      ],
    ],
    'InternalServiceFault' => [
      'base' => '<p> Indicates that the request processing has failed due to some unknown error, exception, or failure. </p>',
      'refs' => [],
    ],
    'InvalidFormatFault' => [
      'base' => '<p> Data was not syntactically valid JSON. </p>',
      'refs' => [],
    ],
    'InvalidNextToken' => [
      'base' => '<p> The next token specified is invalid. </p>',
      'refs' => [],
    ],
    'InvalidParameterCombinationException' => [
      'base' => '<p> Parameters that must not be used together were used together. </p>',
      'refs' => [],
    ],
    'InvalidParameterValueException' => [
      'base' => '<p> Bad or out-of-range value was supplied for the input parameter. </p>',
      'refs' => [],
    ],
    'LimitExceededFault' => [
      'base' => '<p> The quota for alarms for this customer has already been reached. </p>',
      'refs' => [],
    ],
    'ListMetricsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListMetricsOutput' => [
      'base' => '<p> The output for the <a>ListMetrics</a> action. </p>',
      'refs' => [],
    ],
    'MaxRecords' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmHistoryInput$MaxRecords' => '<p> The maximum number of alarm history records to retrieve. </p>',
        'DescribeAlarmsInput$MaxRecords' => '<p> The maximum number of alarm descriptions to retrieve. </p>',
      ],
    ],
    'Metric' => [
      'base' => '<p> The <code>Metric</code> data type contains information about a specific metric. If you call <a>ListMetrics</a>, Amazon CloudWatch returns information contained by this data type. </p> <p> The example in the Examples section publishes two metrics named buffers and latency. Both metrics are in the examples namespace. Both metrics have two dimensions, InstanceID and InstanceType. </p>',
      'refs' => [
        'Metrics$member' => NULL,
      ],
    ],
    'MetricAlarm' => [
      'base' => '<p> The <a>MetricAlarm</a> data type represents an alarm. You can use <a>PutMetricAlarm</a> to create or update an alarm. </p>',
      'refs' => [
        'MetricAlarms$member' => NULL,
      ],
    ],
    'MetricAlarms' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmsForMetricOutput$MetricAlarms' => '<p> A list of information for each alarm with the specified metric. </p>',
        'DescribeAlarmsOutput$MetricAlarms' => '<p> A list of information for the specified alarms. </p>',
      ],
    ],
    'MetricData' => [
      'base' => NULL,
      'refs' => [
        'PutMetricDataInput$MetricData' => '<p> A list of data describing the metric. </p>',
      ],
    ],
    'MetricDatum' => [
      'base' => '<p> The <code>MetricDatum</code> data type encapsulates the information sent with <a>PutMetricData</a> to either create a new metric or add new values to be aggregated into an existing metric. </p>',
      'refs' => [
        'MetricData$member' => NULL,
      ],
    ],
    'MetricLabel' => [
      'base' => NULL,
      'refs' => [
        'GetMetricStatisticsOutput$Label' => '<p> A label describing the specified metric. </p>',
      ],
    ],
    'MetricName' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmsForMetricInput$MetricName' => '<p> The name of the metric. </p>',
        'GetMetricStatisticsInput$MetricName' => '<p> The name of the metric, with or without spaces. </p>',
        'ListMetricsInput$MetricName' => '<p> The name of the metric to filter against. </p>',
        'Metric$MetricName' => '<p> The name of the metric. </p>',
        'MetricAlarm$MetricName' => '<p> The name of the alarm\'s metric. </p>',
        'MetricDatum$MetricName' => '<p> The name of the metric. </p>',
        'PutMetricAlarmInput$MetricName' => '<p> The name for the alarm\'s associated metric. </p>',
      ],
    ],
    'Metrics' => [
      'base' => NULL,
      'refs' => [
        'ListMetricsOutput$Metrics' => '<p> A list of metrics used to generate statistics for an AWS account. </p>',
      ],
    ],
    'MissingRequiredParameterException' => [
      'base' => '<p> An input parameter that is mandatory for processing the request is not supplied. </p>',
      'refs' => [],
    ],
    'Namespace' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmsForMetricInput$Namespace' => '<p> The namespace of the metric. </p>',
        'GetMetricStatisticsInput$Namespace' => '<p> The namespace of the metric, with or without spaces. </p>',
        'ListMetricsInput$Namespace' => '<p> The namespace to filter against. </p>',
        'Metric$Namespace' => '<p> The namespace of the metric. </p>',
        'MetricAlarm$Namespace' => '<p> The namespace of alarm\'s associated metric. </p>',
        'PutMetricAlarmInput$Namespace' => '<p> The namespace for the alarm\'s associated metric. </p>',
        'PutMetricDataInput$Namespace' => '<p> The namespace for the metric data. </p>',
      ],
    ],
    'NextToken' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmHistoryInput$NextToken' => '<p> The token returned by a previous call to indicate that there is more data available. </p>',
        'DescribeAlarmHistoryOutput$NextToken' => '<p> A string that marks the start of the next batch of returned results. </p>',
        'DescribeAlarmsInput$NextToken' => '<p> The token returned by a previous call to indicate that there is more data available. </p>',
        'DescribeAlarmsOutput$NextToken' => '<p> A string that marks the start of the next batch of returned results. </p>',
        'ListMetricsInput$NextToken' => '<p> The token returned by a previous call to indicate that there is more data available. </p>',
        'ListMetricsOutput$NextToken' => '<p> A string that marks the start of the next batch of returned results. </p>',
      ],
    ],
    'Period' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmsForMetricInput$Period' => '<p> The period in seconds over which the statistic is applied. </p>',
        'GetMetricStatisticsInput$Period' => '<p> The granularity, in seconds, of the returned datapoints. <code>Period</code> must be at least 60 seconds and must be a multiple of 60. The default value is 60. </p>',
        'MetricAlarm$Period' => '<p> The period in seconds over which the statistic is applied. </p>',
        'PutMetricAlarmInput$Period' => '<p> The period in seconds over which the specified statistic is applied. </p>',
      ],
    ],
    'PutMetricAlarmInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PutMetricDataInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ResourceList' => [
      'base' => NULL,
      'refs' => [
        'MetricAlarm$OKActions' => '<p> The list of actions to execute when this alarm transitions into an <code>OK</code> state from any other state. Each action is specified as an Amazon Resource Number (ARN]. Currently the only actions supported are publishing to an Amazon SNS topic and triggering an Auto Scaling policy. </p>',
        'MetricAlarm$AlarmActions' => '<p> The list of actions to execute when this alarm transitions into an <code>ALARM</code> state from any other state. Each action is specified as an Amazon Resource Number (ARN]. Currently the only actions supported are publishing to an Amazon SNS topic and triggering an Auto Scaling policy. </p>',
        'MetricAlarm$InsufficientDataActions' => '<p> The list of actions to execute when this alarm transitions into an <code>INSUFFICIENT_DATA</code> state from any other state. Each action is specified as an Amazon Resource Number (ARN]. Currently the only actions supported are publishing to an Amazon SNS topic or triggering an Auto Scaling policy. </p> <important>The current WSDL lists this attribute as <code>UnknownActions</code>.</important>',
        'PutMetricAlarmInput$OKActions' => '<p> The list of actions to execute when this alarm transitions into an <code>OK</code> state from any other state. Each action is specified as an Amazon Resource Number (ARN]. Currently the only action supported is publishing to an Amazon SNS topic or an Amazon Auto Scaling policy. </p>',
        'PutMetricAlarmInput$AlarmActions' => '<p> The list of actions to execute when this alarm transitions into an <code>ALARM</code> state from any other state. Each action is specified as an Amazon Resource Number (ARN]. Currently the only action supported is publishing to an Amazon SNS topic or an Amazon Auto Scaling policy. </p>',
        'PutMetricAlarmInput$InsufficientDataActions' => '<p> The list of actions to execute when this alarm transitions into an <code>INSUFFICIENT_DATA</code> state from any other state. Each action is specified as an Amazon Resource Number (ARN]. Currently the only action supported is publishing to an Amazon SNS topic or an Amazon Auto Scaling policy. </p>',
      ],
    ],
    'ResourceName' => [
      'base' => NULL,
      'refs' => [
        'ResourceList$member' => NULL,
      ],
    ],
    'ResourceNotFound' => [
      'base' => '<p> The named resource does not exist. </p>',
      'refs' => [],
    ],
    'SetAlarmStateInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'StandardUnit' => [
      'base' => NULL,
      'refs' => [
        'Datapoint$Unit' => '<p> The standard unit used for the datapoint. </p>',
        'DescribeAlarmsForMetricInput$Unit' => '<p> The unit for the metric. </p>',
        'GetMetricStatisticsInput$Unit' => '<p> The unit for the metric. </p>',
        'MetricAlarm$Unit' => '<p> The unit of the alarm\'s associated metric. </p>',
        'MetricDatum$Unit' => '<p> The unit of the metric. </p>',
        'PutMetricAlarmInput$Unit' => '<p> The unit for the alarm\'s associated metric. </p>',
      ],
    ],
    'StateReason' => [
      'base' => NULL,
      'refs' => [
        'MetricAlarm$StateReason' => '<p> A human-readable explanation for the alarm\'s state. </p>',
        'SetAlarmStateInput$StateReason' => '<p> The reason that this alarm is set to this specific state (in human-readable text format] </p>',
      ],
    ],
    'StateReasonData' => [
      'base' => NULL,
      'refs' => [
        'MetricAlarm$StateReasonData' => '<p> An explanation for the alarm\'s state in machine-readable JSON format </p>',
        'SetAlarmStateInput$StateReasonData' => '<p> The reason that this alarm is set to this specific state (in machine-readable JSON format] </p>',
      ],
    ],
    'StateValue' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmsInput$StateValue' => '<p> The state value to be used in matching alarms. </p>',
        'MetricAlarm$StateValue' => '<p> The state value for the alarm. </p>',
        'SetAlarmStateInput$StateValue' => '<p> The value of the state. </p>',
      ],
    ],
    'Statistic' => [
      'base' => NULL,
      'refs' => [
        'DescribeAlarmsForMetricInput$Statistic' => '<p> The statistic for the metric. </p>',
        'MetricAlarm$Statistic' => '<p> The statistic to apply to the alarm\'s associated metric. </p>',
        'PutMetricAlarmInput$Statistic' => '<p> The statistic to apply to the alarm\'s associated metric. </p>',
        'Statistics$member' => NULL,
      ],
    ],
    'StatisticSet' => [
      'base' => '<p> The <code>StatisticSet</code> data type describes the <code>StatisticValues</code> component of <a>MetricDatum</a>, and represents a set of statistics that describes a specific metric. </p>',
      'refs' => [
        'MetricDatum$StatisticValues' => '<p> A set of statistical values describing the metric. </p>',
      ],
    ],
    'Statistics' => [
      'base' => NULL,
      'refs' => [
        'GetMetricStatisticsInput$Statistics' => '<p> The metric statistics to return. For information about specific statistics returned by GetMetricStatistics, go to <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/index.html?CHAP_TerminologyandKeyConcepts.html#Statistic">Statistics</a> in the <i>Amazon CloudWatch Developer Guide</i>. </p> <p> Valid Values: <code>Average | Sum | SampleCount | Maximum | Minimum</code> </p>',
      ],
    ],
    'Threshold' => [
      'base' => NULL,
      'refs' => [
        'MetricAlarm$Threshold' => '<p> The value against which the specified statistic is compared. </p>',
        'PutMetricAlarmInput$Threshold' => '<p> The value against which the specified statistic is compared. </p>',
      ],
    ],
    'Timestamp' => [
      'base' => NULL,
      'refs' => [
        'AlarmHistoryItem$Timestamp' => '<p> The time stamp for the alarm history item. Amazon CloudWatch uses Coordinated Universal Time (UTC] when returning time stamps, which do not accommodate seasonal adjustments such as daylight savings time. For more information, see <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/cloudwatch_concepts.html#about_timestamp">Time stamps</a> in the <i>Amazon CloudWatch Developer Guide</i>. </p>',
        'Datapoint$Timestamp' => '<p> The time stamp used for the datapoint. Amazon CloudWatch uses Coordinated Universal Time (UTC] when returning time stamps, which do not accommodate seasonal adjustments such as daylight savings time. For more information, see <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/cloudwatch_concepts.html#about_timestamp">Time stamps</a> in the <i>Amazon CloudWatch Developer Guide</i>. </p>',
        'DescribeAlarmHistoryInput$StartDate' => '<p> The starting date to retrieve alarm history. </p>',
        'DescribeAlarmHistoryInput$EndDate' => '<p> The ending date to retrieve alarm history. </p>',
        'GetMetricStatisticsInput$StartTime' => '<p> The time stamp to use for determining the first datapoint to return. The value specified is inclusive; results include datapoints with the time stamp specified. </p>',
        'GetMetricStatisticsInput$EndTime' => '<p> The time stamp to use for determining the last datapoint to return. The value specified is exclusive; results will include datapoints up to the time stamp specified. </p>',
        'MetricAlarm$AlarmConfigurationUpdatedTimestamp' => '<p> The time stamp of the last update to the alarm configuration. Amazon CloudWatch uses Coordinated Universal Time (UTC] when returning time stamps, which do not accommodate seasonal adjustments such as daylight savings time. For more information, see <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/cloudwatch_concepts.html#about_timestamp">Time stamps</a> in the <i>Amazon CloudWatch Developer Guide</i>. </p>',
        'MetricAlarm$StateUpdatedTimestamp' => '<p> The time stamp of the last update to the alarm\'s state. Amazon CloudWatch uses Coordinated Universal Time (UTC] when returning time stamps, which do not accommodate seasonal adjustments such as daylight savings time. For more information, see <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/cloudwatch_concepts.html#about_timestamp">Time stamps</a> in the <i>Amazon CloudWatch Developer Guide</i>. </p>',
        'MetricDatum$Timestamp' => '<p> The time stamp used for the metric. If not specified, the default value is set to the time the metric data was received. Amazon CloudWatch uses Coordinated Universal Time (UTC] when returning time stamps, which do not accommodate seasonal adjustments such as daylight savings time. For more information, see <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/DeveloperGuide/cloudwatch_concepts.html#about_timestamp">Time stamps</a> in the <i>Amazon CloudWatch Developer Guide</i>. </p>',
      ],
    ],
  ],
];
