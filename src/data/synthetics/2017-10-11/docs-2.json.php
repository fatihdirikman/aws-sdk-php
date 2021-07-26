<?php
// This file was auto-generated from sdk-root/src/data/synthetics/2017-10-11/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>Amazon CloudWatch Synthetics</fullname> <p>You can use Amazon CloudWatch Synthetics to continually monitor your services. You can create and manage <i>canaries</i>, which are modular, lightweight scripts that monitor your endpoints and APIs from the outside-in. You can set up your canaries to run 24 hours a day, once per minute. The canaries help you check the availability and latency of your web services and troubleshoot anomalies by investigating load time data, screenshots of the UI, logs, and metrics. The canaries seamlessly integrate with CloudWatch ServiceLens to help you trace the causes of impacted nodes in your applications. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/ServiceLens.html">Using ServiceLens to Monitor the Health of Your Applications</a> in the <i>Amazon CloudWatch User Guide</i>.</p> <p>Before you create and manage canaries, be aware of the security considerations. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/servicelens_canaries_security.html">Security Considerations for Synthetics Canaries</a>.</p>', 'operations' => [ 'CreateCanary' => '<p>Creates a canary. Canaries are scripts that monitor your endpoints and APIs from the outside-in. Canaries help you check the availability and latency of your web services and troubleshoot anomalies by investigating load time data, screenshots of the UI, logs, and metrics. You can set up a canary to run continuously or just once. </p> <p>Do not use <code>CreateCanary</code> to modify an existing canary. Use <a href="https://docs.aws.amazon.com/AmazonSynthetics/latest/APIReference/API_UpdateCanary.html">UpdateCanary</a> instead.</p> <p>To create canaries, you must have the <code>CloudWatchSyntheticsFullAccess</code> policy. If you are creating a new IAM role for the canary, you also need the the <code>iam:CreateRole</code>, <code>iam:CreatePolicy</code> and <code>iam:AttachRolePolicy</code> permissions. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_Roles">Necessary Roles and Permissions</a>.</p> <p>Do not include secrets or proprietary information in your canary names. The canary name makes up part of the Amazon Resource Name (ARN) for the canary, and the ARN is included in outbound calls over the internet. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/servicelens_canaries_security.html">Security Considerations for Synthetics Canaries</a>.</p>', 'DeleteCanary' => '<p>Permanently deletes the specified canary.</p> <p>When you delete a canary, resources used and created by the canary are not automatically deleted. After you delete a canary that you do not intend to use again, you should also delete the following:</p> <ul> <li> <p>The Lambda functions and layers used by this canary. These have the prefix <code>cwsyn-<i>MyCanaryName</i> </code>.</p> </li> <li> <p>The CloudWatch alarms created for this canary. These alarms have a name of <code>Synthetics-SharpDrop-Alarm-<i>MyCanaryName</i> </code>.</p> </li> <li> <p>Amazon S3 objects and buckets, such as the canary\'s artifact location.</p> </li> <li> <p>IAM roles created for the canary. If they were created in the console, these roles have the name <code> role/service-role/CloudWatchSyntheticsRole-<i>MyCanaryName</i> </code>.</p> </li> <li> <p>CloudWatch Logs log groups created for the canary. These logs groups have the name <code>/aws/lambda/cwsyn-<i>MyCanaryName</i> </code>. </p> </li> </ul> <p>Before you delete a canary, you might want to use <code>GetCanary</code> to display the information about this canary. Make note of the information returned by this operation so that you can delete these resources after you delete the canary.</p>', 'DescribeCanaries' => '<p>This operation returns a list of the canaries in your account, along with full details about each canary.</p> <p>This operation does not have resource-level authorization, so if a user is able to use <code>DescribeCanaries</code>, the user can see all of the canaries in the account. A deny policy can only be used to restrict access to all canaries. It cannot be used on specific resources. </p>', 'DescribeCanariesLastRun' => '<p>Use this operation to see information from the most recent run of each canary that you have created.</p>', 'DescribeRuntimeVersions' => '<p>Returns a list of Synthetics canary runtime versions. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_Library.html"> Canary Runtime Versions</a>.</p>', 'GetCanary' => '<p>Retrieves complete information about one canary. You must specify the name of the canary that you want. To get a list of canaries and their names, use <a href="https://docs.aws.amazon.com/AmazonSynthetics/latest/APIReference/API_DescribeCanaries.html">DescribeCanaries</a>.</p>', 'GetCanaryRuns' => '<p>Retrieves a list of runs for a specified canary.</p>', 'ListTagsForResource' => '<p>Displays the tags associated with a canary.</p>', 'StartCanary' => '<p>Use this operation to run a canary that has already been created. The frequency of the canary runs is determined by the value of the canary\'s <code>Schedule</code>. To see a canary\'s schedule, use <a href="https://docs.aws.amazon.com/AmazonSynthetics/latest/APIReference/API_GetCanary.html">GetCanary</a>.</p>', 'StopCanary' => '<p>Stops the canary to prevent all future runs. If the canary is currently running, Synthetics stops waiting for the current run of the specified canary to complete. The run that is in progress completes on its own, publishes metrics, and uploads artifacts, but it is not recorded in Synthetics as a completed run.</p> <p>You can use <code>StartCanary</code> to start it running again with the canary’s current schedule at any point in the future. </p>', 'TagResource' => '<p>Assigns one or more tags (key-value pairs) to the specified canary. </p> <p>Tags can help you organize and categorize your resources. You can also use them to scope user permissions, by granting a user permission to access or change only resources with certain tag values.</p> <p>Tags don\'t have any semantic meaning to Amazon Web Services and are interpreted strictly as strings of characters.</p> <p>You can use the <code>TagResource</code> action with a canary that already has tags. If you specify a new tag key for the alarm, this tag is appended to the list of tags associated with the alarm. If you specify a tag key that is already associated with the alarm, the new tag value that you specify replaces the previous value for that tag.</p> <p>You can associate as many as 50 tags with a canary.</p>', 'UntagResource' => '<p>Removes one or more tags from the specified canary.</p>', 'UpdateCanary' => '<p>Use this operation to change the settings of a canary that has already been created.</p> <p>You can\'t use this operation to update the tags of an existing canary. To change the tags of an existing canary, use <a href="https://docs.aws.amazon.com/AmazonSynthetics/latest/APIReference/API_TagResource.html">TagResource</a>.</p>', ], 'shapes' => [ 'BaseScreenshot' => [ 'base' => NULL, 'refs' => [ 'BaseScreenshots$member' => NULL, ], ], 'BaseScreenshotConfigIgnoreCoordinate' => [ 'base' => NULL, 'refs' => [ 'BaseScreenshotIgnoreCoordinates$member' => NULL, ], ], 'BaseScreenshotIgnoreCoordinates' => [ 'base' => NULL, 'refs' => [ 'BaseScreenshot$IgnoreCoordinates' => NULL, ], ], 'BaseScreenshots' => [ 'base' => NULL, 'refs' => [ 'VisualReferenceInput$BaseScreenshots' => NULL, 'VisualReferenceOutput$BaseScreenshots' => NULL, ], ], 'Blob' => [ 'base' => NULL, 'refs' => [ 'CanaryCodeInput$ZipFile' => '<p>If you input your canary script directly into the canary instead of referring to an S3 location, the value of this parameter is the base64-encoded contents of the .zip file that contains the script. It can be up to 5 MB.</p>', ], ], 'Canaries' => [ 'base' => NULL, 'refs' => [ 'DescribeCanariesResponse$Canaries' => '<p>Returns an array. Each item in the array contains the full information about one canary.</p>', ], ], 'CanariesLastRun' => [ 'base' => NULL, 'refs' => [ 'DescribeCanariesLastRunResponse$CanariesLastRun' => '<p>An array that contains the information from the most recent run of each canary.</p>', ], ], 'Canary' => [ 'base' => '<p>This structure contains all information about one canary in your account.</p>', 'refs' => [ 'Canaries$member' => NULL, 'CreateCanaryResponse$Canary' => '<p>The full details about the canary you have created.</p>', 'GetCanaryResponse$Canary' => '<p>A strucure that contains the full information about the canary.</p>', ], ], 'CanaryArn' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceRequest$ResourceArn' => '<p>The ARN of the canary that you want to view tags for.</p> <p>The ARN format of a canary is <code>arn:aws:synthetics:<i>Region</i>:<i>account-id</i>:canary:<i>canary-name</i> </code>.</p>', 'TagResourceRequest$ResourceArn' => '<p>The ARN of the canary that you\'re adding tags to.</p> <p>The ARN format of a canary is <code>arn:aws:synthetics:<i>Region</i>:<i>account-id</i>:canary:<i>canary-name</i> </code>.</p>', 'UntagResourceRequest$ResourceArn' => '<p>The ARN of the canary that you\'re removing tags from.</p> <p>The ARN format of a canary is <code>arn:aws:synthetics:<i>Region</i>:<i>account-id</i>:canary:<i>canary-name</i> </code>.</p>', ], ], 'CanaryCodeInput' => [ 'base' => '<p>Use this structure to input your script code for the canary. This structure contains the Lambda handler with the location where the canary should start running the script. If the script is stored in an S3 bucket, the bucket name, key, and version are also included. If the script was passed into the canary directly, the script code is contained in the value of <code>Zipfile</code>. </p>', 'refs' => [ 'CreateCanaryRequest$Code' => '<p>A structure that includes the entry point from which the canary should start running your script. If the script is stored in an S3 bucket, the bucket name, key, and version are also included. </p>', 'UpdateCanaryRequest$Code' => '<p>A structure that includes the entry point from which the canary should start running your script. If the script is stored in an S3 bucket, the bucket name, key, and version are also included. </p>', ], ], 'CanaryCodeOutput' => [ 'base' => '<p>This structure contains information about the canary\'s Lambda handler and where its code is stored by CloudWatch Synthetics.</p>', 'refs' => [ 'Canary$Code' => NULL, ], ], 'CanaryLastRun' => [ 'base' => '<p>This structure contains information about the most recent run of a single canary.</p>', 'refs' => [ 'CanariesLastRun$member' => NULL, ], ], 'CanaryName' => [ 'base' => NULL, 'refs' => [ 'Canary$Name' => '<p>The name of the canary.</p>', 'CanaryLastRun$CanaryName' => '<p>The name of the canary.</p>', 'CanaryRun$Name' => '<p>The name of the canary.</p>', 'CreateCanaryRequest$Name' => '<p>The name for this canary. Be sure to give it a descriptive name that distinguishes it from other canaries in your account.</p> <p>Do not include secrets or proprietary information in your canary names. The canary name makes up part of the canary ARN, and the ARN is included in outbound calls over the internet. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/servicelens_canaries_security.html">Security Considerations for Synthetics Canaries</a>.</p>', 'DeleteCanaryRequest$Name' => '<p>The name of the canary that you want to delete. To find the names of your canaries, use <a href="https://docs.aws.amazon.com/AmazonSynthetics/latest/APIReference/API_DescribeCanaries.html">DescribeCanaries</a>.</p>', 'GetCanaryRequest$Name' => '<p>The name of the canary that you want details for.</p>', 'GetCanaryRunsRequest$Name' => '<p>The name of the canary that you want to see runs for.</p>', 'StartCanaryRequest$Name' => '<p>The name of the canary that you want to run. To find canary names, use <a href="https://docs.aws.amazon.com/AmazonSynthetics/latest/APIReference/API_DescribeCanaries.html">DescribeCanaries</a>.</p>', 'StopCanaryRequest$Name' => '<p>The name of the canary that you want to stop. To find the names of your canaries, use <a href="https://docs.aws.amazon.com/AmazonSynthetics/latest/APIReference/API_DescribeCanaries.html">DescribeCanaries</a>.</p>', 'UpdateCanaryRequest$Name' => '<p>The name of the canary that you want to update. To find the names of your canaries, use <a href="https://docs.aws.amazon.com/AmazonSynthetics/latest/APIReference/API_DescribeCanaries.html">DescribeCanaries</a>.</p> <p>You cannot change the name of a canary that has already been created.</p>', ], ], 'CanaryRun' => [ 'base' => '<p>This structure contains the details about one run of one canary.</p>', 'refs' => [ 'CanaryLastRun$LastRun' => '<p>The results from this canary\'s most recent run.</p>', 'CanaryRuns$member' => NULL, ], ], 'CanaryRunConfigInput' => [ 'base' => '<p>A structure that contains input information for a canary run.</p>', 'refs' => [ 'CreateCanaryRequest$RunConfig' => '<p>A structure that contains the configuration for individual canary runs, such as timeout value.</p>', 'UpdateCanaryRequest$RunConfig' => '<p>A structure that contains the timeout value that is used for each individual run of the canary.</p>', ], ], 'CanaryRunConfigOutput' => [ 'base' => '<p>A structure that contains information about a canary run.</p>', 'refs' => [ 'Canary$RunConfig' => NULL, ], ], 'CanaryRunState' => [ 'base' => NULL, 'refs' => [ 'CanaryRunStatus$State' => '<p>The current state of the run.</p>', ], ], 'CanaryRunStateReasonCode' => [ 'base' => NULL, 'refs' => [ 'CanaryRunStatus$StateReasonCode' => '<p>If this value is <code>CANARY_FAILURE</code>, an exception occurred in the canary code. If this value is <code>EXECUTION_FAILURE</code>, an exception occurred in CloudWatch Synthetics.</p>', ], ], 'CanaryRunStatus' => [ 'base' => '<p>This structure contains the status information about a canary run.</p>', 'refs' => [ 'CanaryRun$Status' => '<p>The status of this run.</p>', ], ], 'CanaryRunTimeline' => [ 'base' => '<p>This structure contains the start and end times of a single canary run.</p>', 'refs' => [ 'CanaryRun$Timeline' => '<p>A structure that contains the start and end times of this run.</p>', ], ], 'CanaryRuns' => [ 'base' => NULL, 'refs' => [ 'GetCanaryRunsResponse$CanaryRuns' => '<p>An array of structures. Each structure contains the details of one of the retrieved canary runs.</p>', ], ], 'CanaryScheduleInput' => [ 'base' => '<p>This structure specifies how often a canary is to make runs and the date and time when it should stop making runs.</p>', 'refs' => [ 'CreateCanaryRequest$Schedule' => '<p>A structure that contains information about how often the canary is to run and when these test runs are to stop.</p>', 'UpdateCanaryRequest$Schedule' => '<p>A structure that contains information about how often the canary is to run, and when these runs are to stop.</p>', ], ], 'CanaryScheduleOutput' => [ 'base' => '<p>How long, in seconds, for the canary to continue making regular runs according to the schedule in the <code>Expression</code> value.</p>', 'refs' => [ 'Canary$Schedule' => '<p>A structure that contains information about how often the canary is to run, and when these runs are to stop.</p>', ], ], 'CanaryState' => [ 'base' => NULL, 'refs' => [ 'CanaryStatus$State' => '<p>The current state of the canary.</p>', ], ], 'CanaryStateReasonCode' => [ 'base' => NULL, 'refs' => [ 'CanaryStatus$StateReasonCode' => '<p>If the canary cannot run or has failed, this field displays the reason.</p>', ], ], 'CanaryStatus' => [ 'base' => '<p>A structure that contains the current state of the canary.</p>', 'refs' => [ 'Canary$Status' => '<p>A structure that contains information about the canary\'s status.</p>', ], ], 'CanaryTimeline' => [ 'base' => '<p>This structure contains information about when the canary was created and modified.</p>', 'refs' => [ 'Canary$Timeline' => '<p>A structure that contains information about when the canary was created, modified, and most recently run.</p>', ], ], 'ConflictException' => [ 'base' => '<p>A conflicting operation is already in progress.</p>', 'refs' => [], ], 'CreateCanaryRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateCanaryResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteCanaryRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteCanaryResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeCanariesLastRunRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeCanariesLastRunResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeCanariesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeCanariesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeRuntimeVersionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeRuntimeVersionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'EnvironmentVariableName' => [ 'base' => NULL, 'refs' => [ 'EnvironmentVariablesMap$key' => NULL, ], ], 'EnvironmentVariableValue' => [ 'base' => NULL, 'refs' => [ 'EnvironmentVariablesMap$value' => NULL, ], ], 'EnvironmentVariablesMap' => [ 'base' => NULL, 'refs' => [ 'CanaryRunConfigInput$EnvironmentVariables' => '<p>Specifies the keys and values to use for any environment variables used in the canary script. Use the following format:</p> <p>{ "key1" : "value1", "key2" : "value2", ...}</p> <p>Keys must start with a letter and be at least two characters. The total size of your environment variables cannot exceed 4 KB. You can\'t specify any Lambda reserved environment variables as the keys for your environment variables. For more information about reserved keys, see <a href="https://docs.aws.amazon.com/lambda/latest/dg/configuration-envvars.html#configuration-envvars-runtime"> Runtime environment variables</a>.</p>', ], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'ConflictException$Message' => NULL, 'InternalServerException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ValidationException$Message' => NULL, ], ], 'FunctionArn' => [ 'base' => NULL, 'refs' => [ 'Canary$EngineArn' => '<p>The ARN of the Lambda function that is used as your canary\'s engine. For more information about Lambda ARN format, see <a href="https://docs.aws.amazon.com/lambda/latest/dg/lambda-api-permissions-ref.html">Resources and Conditions for Lambda Actions</a>.</p>', ], ], 'GetCanaryRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetCanaryResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetCanaryRunsRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetCanaryRunsResponse' => [ 'base' => NULL, 'refs' => [], ], 'InternalServerException' => [ 'base' => '<p>An unknown internal error occurred.</p>', 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxCanaryResults' => [ 'base' => NULL, 'refs' => [ 'DescribeCanariesRequest$MaxResults' => '<p>Specify this parameter to limit how many canaries are returned each time you use the <code>DescribeCanaries</code> operation. If you omit this parameter, the default of 100 is used.</p>', ], ], 'MaxFifteenMinutesInSeconds' => [ 'base' => NULL, 'refs' => [ 'CanaryRunConfigInput$TimeoutInSeconds' => '<p>How long the canary is allowed to run before it must stop. You can\'t set this time to be longer than the frequency of the runs of this canary.</p> <p>If you omit this field, the frequency of the canary is used as this value, up to a maximum of 14 minutes.</p>', 'CanaryRunConfigOutput$TimeoutInSeconds' => '<p>How long the canary is allowed to run before it must stop.</p>', ], ], 'MaxOneYearInSeconds' => [ 'base' => NULL, 'refs' => [ 'CanaryScheduleInput$DurationInSeconds' => '<p>How long, in seconds, for the canary to continue making regular runs according to the schedule in the <code>Expression</code> value. If you specify 0, the canary continues making runs until you stop it. If you omit this field, the default of 0 is used.</p>', 'CanaryScheduleOutput$DurationInSeconds' => '<p>How long, in seconds, for the canary to continue making regular runs after it was created. The runs are performed according to the schedule in the <code>Expression</code> value.</p>', ], ], 'MaxSize100' => [ 'base' => NULL, 'refs' => [ 'DescribeCanariesLastRunRequest$MaxResults' => '<p>Specify this parameter to limit how many runs are returned each time you use the <code>DescribeLastRun</code> operation. If you omit this parameter, the default of 100 is used.</p>', 'DescribeRuntimeVersionsRequest$MaxResults' => '<p>Specify this parameter to limit how many runs are returned each time you use the <code>DescribeRuntimeVersions</code> operation. If you omit this parameter, the default of 100 is used.</p>', 'GetCanaryRunsRequest$MaxResults' => '<p>Specify this parameter to limit how many runs are returned each time you use the <code>GetCanaryRuns</code> operation. If you omit this parameter, the default of 100 is used.</p>', ], ], 'MaxSize1024' => [ 'base' => NULL, 'refs' => [ 'Canary$SuccessRetentionPeriodInDays' => '<p>The number of days to retain data about successful runs of this canary.</p>', 'Canary$FailureRetentionPeriodInDays' => '<p>The number of days to retain data about failed runs of this canary.</p>', 'CreateCanaryRequest$SuccessRetentionPeriodInDays' => '<p>The number of days to retain data about successful runs of this canary. If you omit this field, the default of 31 days is used. The valid range is 1 to 455 days.</p>', 'CreateCanaryRequest$FailureRetentionPeriodInDays' => '<p>The number of days to retain data about failed runs of this canary. If you omit this field, the default of 31 days is used. The valid range is 1 to 455 days.</p>', 'UpdateCanaryRequest$SuccessRetentionPeriodInDays' => '<p>The number of days to retain data about successful runs of this canary.</p>', 'UpdateCanaryRequest$FailureRetentionPeriodInDays' => '<p>The number of days to retain data about failed runs of this canary.</p>', ], ], 'MaxSize3008' => [ 'base' => NULL, 'refs' => [ 'CanaryRunConfigInput$MemoryInMB' => '<p>The maximum amount of memory available to the canary while it is running, in MB. This value must be a multiple of 64.</p>', 'CanaryRunConfigOutput$MemoryInMB' => '<p>The maximum amount of memory available to the canary while it is running, in MB. This value must be a multiple of 64.</p>', ], ], 'NullableBoolean' => [ 'base' => NULL, 'refs' => [ 'CanaryRunConfigInput$ActiveTracing' => '<p>Specifies whether this canary is to use active X-Ray tracing when it runs. Active tracing enables this canary run to be displayed in the ServiceLens and X-Ray service maps even if the canary does not hit an endpoint that has X-Ray tracing enabled. Using X-Ray tracing incurs charges. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_tracing.html"> Canaries and X-Ray tracing</a>.</p> <p>You can enable active tracing only for canaries that use version <code>syn-nodejs-2.0</code> or later for their canary runtime.</p>', 'CanaryRunConfigOutput$ActiveTracing' => '<p>Displays whether this canary run used active X-Ray tracing. </p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>One of the specified resources was not found.</p>', 'refs' => [], ], 'RoleArn' => [ 'base' => NULL, 'refs' => [ 'Canary$ExecutionRoleArn' => '<p>The ARN of the IAM role used to run the canary. This role must include <code>lambda.amazonaws.com</code> as a principal in the trust policy.</p>', 'CreateCanaryRequest$ExecutionRoleArn' => '<p>The ARN of the IAM role to be used to run the canary. This role must already exist, and must include <code>lambda.amazonaws.com</code> as a principal in the trust policy. The role must also have the following permissions:</p> <ul> <li> <p> <code>s3:PutObject</code> </p> </li> <li> <p> <code>s3:GetBucketLocation</code> </p> </li> <li> <p> <code>s3:ListAllMyBuckets</code> </p> </li> <li> <p> <code>cloudwatch:PutMetricData</code> </p> </li> <li> <p> <code>logs:CreateLogGroup</code> </p> </li> <li> <p> <code>logs:CreateLogStream</code> </p> </li> <li> <p> <code>logs:PutLogEvents</code> </p> </li> </ul>', 'UpdateCanaryRequest$ExecutionRoleArn' => '<p>The ARN of the IAM role to be used to run the canary. This role must already exist, and must include <code>lambda.amazonaws.com</code> as a principal in the trust policy. The role must also have the following permissions:</p> <ul> <li> <p> <code>s3:PutObject</code> </p> </li> <li> <p> <code>s3:GetBucketLocation</code> </p> </li> <li> <p> <code>s3:ListAllMyBuckets</code> </p> </li> <li> <p> <code>cloudwatch:PutMetricData</code> </p> </li> <li> <p> <code>logs:CreateLogGroup</code> </p> </li> <li> <p> <code>logs:CreateLogStream</code> </p> </li> <li> <p> <code>logs:CreateLogStream</code> </p> </li> </ul>', ], ], 'RuntimeVersion' => [ 'base' => '<p>This structure contains information about one canary runtime version. For more information about runtime versions, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_Library.html"> Canary Runtime Versions</a>.</p>', 'refs' => [ 'RuntimeVersionList$member' => NULL, ], ], 'RuntimeVersionList' => [ 'base' => NULL, 'refs' => [ 'DescribeRuntimeVersionsResponse$RuntimeVersions' => '<p>An array of objects that display the details about each Synthetics canary runtime version.</p>', ], ], 'SecurityGroupId' => [ 'base' => NULL, 'refs' => [ 'SecurityGroupIds$member' => NULL, ], ], 'SecurityGroupIds' => [ 'base' => NULL, 'refs' => [ 'VpcConfigInput$SecurityGroupIds' => '<p>The IDs of the security groups for this canary.</p>', 'VpcConfigOutput$SecurityGroupIds' => '<p>The IDs of the security groups for this canary.</p>', ], ], 'StartCanaryRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartCanaryResponse' => [ 'base' => NULL, 'refs' => [], ], 'StopCanaryRequest' => [ 'base' => NULL, 'refs' => [], ], 'StopCanaryResponse' => [ 'base' => NULL, 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'BaseScreenshot$ScreenshotName' => NULL, 'Canary$ArtifactS3Location' => '<p>The location in Amazon S3 where Synthetics stores artifacts from the runs of this canary. Artifacts include the log file, screenshots, and HAR files.</p>', 'Canary$RuntimeVersion' => '<p>Specifies the runtime version to use for the canary. For more information about runtime versions, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_Library.html"> Canary Runtime Versions</a>.</p>', 'CanaryCodeInput$S3Bucket' => '<p>If your canary script is located in S3, specify the bucket name here. Do not include <code>s3://</code> as the start of the bucket name.</p>', 'CanaryCodeInput$S3Key' => '<p>The S3 key of your script. For more information, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/UsingObjects.html">Working with Amazon S3 Objects</a>.</p>', 'CanaryCodeInput$S3Version' => '<p>The S3 version ID of your script.</p>', 'CanaryCodeInput$Handler' => '<p>The entry point to use for the source code when running the canary. This value must end with the string <code>.handler</code>. The string is limited to 29 characters or fewer.</p>', 'CanaryCodeOutput$SourceLocationArn' => '<p>The ARN of the Lambda layer where Synthetics stores the canary script code.</p>', 'CanaryCodeOutput$Handler' => '<p>The entry point to use for the source code when running the canary.</p>', 'CanaryRun$ArtifactS3Location' => '<p>The location where the canary stored artifacts from the run. Artifacts include the log file, screenshots, and HAR files.</p>', 'CanaryRunStatus$StateReason' => '<p>If run of the canary failed, this field contains the reason for the error.</p>', 'CanaryScheduleInput$Expression' => '<p>A <code>rate</code> expression or a <code>cron</code> expression that defines how often the canary is to run.</p> <p>For a rate expression, The syntax is <code>rate(<i>number unit</i>)</code>. <i>unit</i> can be <code>minute</code>, <code>minutes</code>, or <code>hour</code>. </p> <p>For example, <code>rate(1 minute)</code> runs the canary once a minute, <code>rate(10 minutes)</code> runs it once every 10 minutes, and <code>rate(1 hour)</code> runs it once every hour. You can specify a frequency between <code>rate(1 minute)</code> and <code>rate(1 hour)</code>.</p> <p>Specifying <code>rate(0 minute)</code> or <code>rate(0 hour)</code> is a special value that causes the canary to run only once when it is started.</p> <p>Use <code>cron(<i>expression</i>)</code> to specify a cron expression. You can\'t schedule a canary to wait for more than a year before running. For information about the syntax for cron expressions, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_cron.html"> Scheduling canary runs using cron</a>.</p>', 'CanaryScheduleOutput$Expression' => '<p>A <code>rate</code> expression or a <code>cron</code> expression that defines how often the canary is to run.</p> <p>For a rate expression, The syntax is <code>rate(<i>number unit</i>)</code>. <i>unit</i> can be <code>minute</code>, <code>minutes</code>, or <code>hour</code>. </p> <p>For example, <code>rate(1 minute)</code> runs the canary once a minute, <code>rate(10 minutes)</code> runs it once every 10 minutes, and <code>rate(1 hour)</code> runs it once every hour. You can specify a frequency between <code>rate(1 minute)</code> and <code>rate(1 hour)</code>.</p> <p>Specifying <code>rate(0 minute)</code> or <code>rate(0 hour)</code> is a special value that causes the canary to run only once when it is started.</p> <p>Use <code>cron(<i>expression</i>)</code> to specify a cron expression. For information about the syntax for cron expressions, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_cron.html"> Scheduling canary runs using cron</a>.</p>', 'CanaryStatus$StateReason' => '<p>If the canary has insufficient permissions to run, this field provides more details.</p>', 'CreateCanaryRequest$ArtifactS3Location' => '<p>The location in Amazon S3 where Synthetics stores artifacts from the test runs of this canary. Artifacts include the log file, screenshots, and HAR files. The name of the S3 bucket can\'t include a period (.).</p>', 'CreateCanaryRequest$RuntimeVersion' => '<p>Specifies the runtime version to use for the canary. For a list of valid runtime versions and more information about runtime versions, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_Library.html"> Canary Runtime Versions</a>.</p>', 'RuntimeVersion$VersionName' => '<p>The name of the runtime version. For a list of valid runtime versions, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_Library.html"> Canary Runtime Versions</a>.</p>', 'RuntimeVersion$Description' => '<p>A description of the runtime version, created by Amazon.</p>', 'UpdateCanaryRequest$RuntimeVersion' => '<p>Specifies the runtime version to use for the canary. For a list of valid runtime versions and for more information about runtime versions, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_Library.html"> Canary Runtime Versions</a>.</p>', 'VisualReferenceInput$BaseCanaryRunId' => NULL, 'VisualReferenceOutput$BaseCanaryRunId' => NULL, ], ], 'SubnetId' => [ 'base' => NULL, 'refs' => [ 'SubnetIds$member' => NULL, ], ], 'SubnetIds' => [ 'base' => NULL, 'refs' => [ 'VpcConfigInput$SubnetIds' => '<p>The IDs of the subnets where this canary is to run.</p>', 'VpcConfigOutput$SubnetIds' => '<p>The IDs of the subnets where this canary is to run.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>The list of tag keys to remove from the resource.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'Canary$Tags' => '<p>The list of key-value pairs that are associated with the canary.</p>', 'CreateCanaryRequest$Tags' => '<p>A list of key-value pairs to associate with the canary. You can associate as many as 50 tags with a canary.</p> <p>Tags can help you organize and categorize your resources. You can also use them to scope user permissions, by granting a user permission to access or change only the resources that have certain tag values.</p>', 'ListTagsForResourceResponse$Tags' => '<p>The list of tag keys and values associated with the canary that you specified.</p>', 'TagResourceRequest$Tags' => '<p>The list of key-value pairs to associate with the canary.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'CanaryRunTimeline$Started' => '<p>The start time of the run.</p>', 'CanaryRunTimeline$Completed' => '<p>The end time of the run.</p>', 'CanaryTimeline$Created' => '<p>The date and time the canary was created.</p>', 'CanaryTimeline$LastModified' => '<p>The date and time the canary was most recently modified.</p>', 'CanaryTimeline$LastStarted' => '<p>The date and time that the canary\'s most recent run started.</p>', 'CanaryTimeline$LastStopped' => '<p>The date and time that the canary\'s most recent run ended.</p>', 'RuntimeVersion$ReleaseDate' => '<p>The date that the runtime version was released.</p>', 'RuntimeVersion$DeprecationDate' => '<p>If this runtime version is deprecated, this value is the date of deprecation.</p>', ], ], 'Token' => [ 'base' => NULL, 'refs' => [ 'DescribeCanariesLastRunRequest$NextToken' => '<p>A token that indicates that there is more data available. You can use this token in a subsequent <code>DescribeCanaries</code> operation to retrieve the next set of results.</p>', 'DescribeCanariesLastRunResponse$NextToken' => '<p>A token that indicates that there is more data available. You can use this token in a subsequent <code>DescribeCanariesLastRun</code> operation to retrieve the next set of results.</p>', 'DescribeCanariesRequest$NextToken' => '<p>A token that indicates that there is more data available. You can use this token in a subsequent operation to retrieve the next set of results.</p>', 'DescribeCanariesResponse$NextToken' => '<p>A token that indicates that there is more data available. You can use this token in a subsequent <code>DescribeCanaries</code> operation to retrieve the next set of results.</p>', 'DescribeRuntimeVersionsRequest$NextToken' => '<p>A token that indicates that there is more data available. You can use this token in a subsequent <code>DescribeRuntimeVersions</code> operation to retrieve the next set of results.</p>', 'DescribeRuntimeVersionsResponse$NextToken' => '<p>A token that indicates that there is more data available. You can use this token in a subsequent <code>DescribeRuntimeVersions</code> operation to retrieve the next set of results.</p>', 'GetCanaryRunsRequest$NextToken' => '<p>A token that indicates that there is more data available. You can use this token in a subsequent <code>GetCanaryRuns</code> operation to retrieve the next set of results.</p>', 'GetCanaryRunsResponse$NextToken' => '<p>A token that indicates that there is more data available. You can use this token in a subsequent <code>GetCanaryRuns</code> operation to retrieve the next set of results.</p>', ], ], 'UUID' => [ 'base' => NULL, 'refs' => [ 'Canary$Id' => '<p>The unique ID of this canary.</p>', 'CanaryRun$Id' => '<p>A unique ID that identifies this canary run.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateCanaryRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateCanaryResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>A parameter could not be validated.</p>', 'refs' => [], ], 'VisualReferenceInput' => [ 'base' => NULL, 'refs' => [ 'UpdateCanaryRequest$VisualReference' => NULL, ], ], 'VisualReferenceOutput' => [ 'base' => NULL, 'refs' => [ 'Canary$VisualReference' => NULL, ], ], 'VpcConfigInput' => [ 'base' => '<p>If this canary is to test an endpoint in a VPC, this structure contains information about the subnets and security groups of the VPC endpoint. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_VPC.html"> Running a Canary in a VPC</a>.</p>', 'refs' => [ 'CreateCanaryRequest$VpcConfig' => '<p>If this canary is to test an endpoint in a VPC, this structure contains information about the subnet and security groups of the VPC endpoint. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_VPC.html"> Running a Canary in a VPC</a>.</p>', 'UpdateCanaryRequest$VpcConfig' => '<p>If this canary is to test an endpoint in a VPC, this structure contains information about the subnet and security groups of the VPC endpoint. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_VPC.html"> Running a Canary in a VPC</a>.</p>', ], ], 'VpcConfigOutput' => [ 'base' => '<p>If this canary is to test an endpoint in a VPC, this structure contains information about the subnets and security groups of the VPC endpoint. For more information, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/monitoring/CloudWatch_Synthetics_Canaries_VPC.html"> Running a Canary in a VPC</a>.</p>', 'refs' => [ 'Canary$VpcConfig' => NULL, ], ], 'VpcId' => [ 'base' => NULL, 'refs' => [ 'VpcConfigOutput$VpcId' => '<p>The IDs of the VPC where this canary is to run.</p>', ], ], ],];
