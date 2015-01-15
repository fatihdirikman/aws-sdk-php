<?php return [
  'metadata' => [
    'apiVersion' => '2009-03-31',
    'endpointPrefix' => 'elasticmapreduce',
    'jsonVersion' => '1.1',
    'serviceAbbreviation' => 'Amazon EMR',
    'serviceFullName' => 'Amazon Elastic MapReduce',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'ElasticMapReduce',
    'timestampFormat' => 'unixTimestamp',
    'protocol' => 'json',
  ],
  'operations' => [
    'AddInstanceGroups' => [
      'name' => 'AddInstanceGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AddInstanceGroupsInput',
      ],
      'output' => [
        'shape' => 'AddInstanceGroupsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'error' => [
            'code' => 'InternalFailure',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'AddJobFlowSteps' => [
      'name' => 'AddJobFlowSteps',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AddJobFlowStepsInput',
      ],
      'output' => [
        'shape' => 'AddJobFlowStepsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'error' => [
            'code' => 'InternalFailure',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'AddTags' => [
      'name' => 'AddTags',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AddTagsInput',
      ],
      'output' => [
        'shape' => 'AddTagsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeCluster' => [
      'name' => 'DescribeCluster',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeClusterInput',
      ],
      'output' => [
        'shape' => 'DescribeClusterOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeJobFlows' => [
      'name' => 'DescribeJobFlows',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeJobFlowsInput',
      ],
      'output' => [
        'shape' => 'DescribeJobFlowsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'error' => [
            'code' => 'InternalFailure',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
      'deprecated' => true,
    ],
    'DescribeStep' => [
      'name' => 'DescribeStep',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeStepInput',
      ],
      'output' => [
        'shape' => 'DescribeStepOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'ListBootstrapActions' => [
      'name' => 'ListBootstrapActions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListBootstrapActionsInput',
      ],
      'output' => [
        'shape' => 'ListBootstrapActionsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'ListClusters' => [
      'name' => 'ListClusters',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListClustersInput',
      ],
      'output' => [
        'shape' => 'ListClustersOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'ListInstanceGroups' => [
      'name' => 'ListInstanceGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListInstanceGroupsInput',
      ],
      'output' => [
        'shape' => 'ListInstanceGroupsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'ListInstances' => [
      'name' => 'ListInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListInstancesInput',
      ],
      'output' => [
        'shape' => 'ListInstancesOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'ListSteps' => [
      'name' => 'ListSteps',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListStepsInput',
      ],
      'output' => [
        'shape' => 'ListStepsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'ModifyInstanceGroups' => [
      'name' => 'ModifyInstanceGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyInstanceGroupsInput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'error' => [
            'code' => 'InternalFailure',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'RemoveTags' => [
      'name' => 'RemoveTags',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RemoveTagsInput',
      ],
      'output' => [
        'shape' => 'RemoveTagsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'RunJobFlow' => [
      'name' => 'RunJobFlow',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RunJobFlowInput',
      ],
      'output' => [
        'shape' => 'RunJobFlowOutput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'error' => [
            'code' => 'InternalFailure',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'SetTerminationProtection' => [
      'name' => 'SetTerminationProtection',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SetTerminationProtectionInput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'error' => [
            'code' => 'InternalFailure',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'SetVisibleToAllUsers' => [
      'name' => 'SetVisibleToAllUsers',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SetVisibleToAllUsersInput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'error' => [
            'code' => 'InternalFailure',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'TerminateJobFlows' => [
      'name' => 'TerminateJobFlows',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'TerminateJobFlowsInput',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'error' => [
            'code' => 'InternalFailure',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'ActionOnFailure' => [
      'type' => 'string',
      'enum' => [
        'TERMINATE_JOB_FLOW',
        'TERMINATE_CLUSTER',
        'CANCEL_AND_WAIT',
        'CONTINUE',
      ],
    ],
    'AddInstanceGroupsInput' => [
      'type' => 'structure',
      'required' => [
        'InstanceGroups',
        'JobFlowId',
      ],
      'members' => [
        'InstanceGroups' => [
          'shape' => 'InstanceGroupConfigList',
        ],
        'JobFlowId' => [
          'shape' => 'XmlStringMaxLen256',
        ],
      ],
    ],
    'AddInstanceGroupsOutput' => [
      'type' => 'structure',
      'members' => [
        'JobFlowId' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'InstanceGroupIds' => [
          'shape' => 'InstanceGroupIdsList',
        ],
      ],
    ],
    'AddJobFlowStepsInput' => [
      'type' => 'structure',
      'required' => [
        'JobFlowId',
        'Steps',
      ],
      'members' => [
        'JobFlowId' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Steps' => [
          'shape' => 'StepConfigList',
        ],
      ],
    ],
    'AddJobFlowStepsOutput' => [
      'type' => 'structure',
      'members' => [
        'StepIds' => [
          'shape' => 'StepIdsList',
        ],
      ],
    ],
    'AddTagsInput' => [
      'type' => 'structure',
      'required' => [
        'ResourceId',
        'Tags',
      ],
      'members' => [
        'ResourceId' => [
          'shape' => 'ResourceId',
        ],
        'Tags' => [
          'shape' => 'TagList',
        ],
      ],
    ],
    'AddTagsOutput' => [
      'type' => 'structure',
      'members' => [],
    ],
    'Application' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'Version' => [
          'shape' => 'String',
        ],
        'Args' => [
          'shape' => 'StringList',
        ],
        'AdditionalInfo' => [
          'shape' => 'StringMap',
        ],
      ],
    ],
    'ApplicationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Application',
      ],
    ],
    'Boolean' => [
      'type' => 'boolean',
    ],
    'BootstrapActionConfig' => [
      'type' => 'structure',
      'required' => [
        'Name',
        'ScriptBootstrapAction',
      ],
      'members' => [
        'Name' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'ScriptBootstrapAction' => [
          'shape' => 'ScriptBootstrapActionConfig',
        ],
      ],
    ],
    'BootstrapActionConfigList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'BootstrapActionConfig',
      ],
    ],
    'BootstrapActionDetail' => [
      'type' => 'structure',
      'members' => [
        'BootstrapActionConfig' => [
          'shape' => 'BootstrapActionConfig',
        ],
      ],
    ],
    'BootstrapActionDetailList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'BootstrapActionDetail',
      ],
    ],
    'Cluster' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'ClusterId',
        ],
        'Name' => [
          'shape' => 'String',
        ],
        'Status' => [
          'shape' => 'ClusterStatus',
        ],
        'Ec2InstanceAttributes' => [
          'shape' => 'Ec2InstanceAttributes',
        ],
        'LogUri' => [
          'shape' => 'String',
        ],
        'RequestedAmiVersion' => [
          'shape' => 'String',
        ],
        'RunningAmiVersion' => [
          'shape' => 'String',
        ],
        'AutoTerminate' => [
          'shape' => 'Boolean',
        ],
        'TerminationProtected' => [
          'shape' => 'Boolean',
        ],
        'VisibleToAllUsers' => [
          'shape' => 'Boolean',
        ],
        'Applications' => [
          'shape' => 'ApplicationList',
        ],
        'Tags' => [
          'shape' => 'TagList',
        ],
        'ServiceRole' => [
          'shape' => 'String',
        ],
        'NormalizedInstanceHours' => [
          'shape' => 'Integer',
        ],
        'MasterPublicDnsName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ClusterId' => [
      'type' => 'string',
    ],
    'ClusterState' => [
      'type' => 'string',
      'enum' => [
        'STARTING',
        'BOOTSTRAPPING',
        'RUNNING',
        'WAITING',
        'TERMINATING',
        'TERMINATED',
        'TERMINATED_WITH_ERRORS',
      ],
    ],
    'ClusterStateChangeReason' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'ClusterStateChangeReasonCode',
        ],
        'Message' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ClusterStateChangeReasonCode' => [
      'type' => 'string',
      'enum' => [
        'INTERNAL_ERROR',
        'VALIDATION_ERROR',
        'INSTANCE_FAILURE',
        'BOOTSTRAP_FAILURE',
        'USER_REQUEST',
        'STEP_FAILURE',
        'ALL_STEPS_COMPLETED',
      ],
    ],
    'ClusterStateList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ClusterState',
      ],
    ],
    'ClusterStatus' => [
      'type' => 'structure',
      'members' => [
        'State' => [
          'shape' => 'ClusterState',
        ],
        'StateChangeReason' => [
          'shape' => 'ClusterStateChangeReason',
        ],
        'Timeline' => [
          'shape' => 'ClusterTimeline',
        ],
      ],
    ],
    'ClusterSummary' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'ClusterId',
        ],
        'Name' => [
          'shape' => 'String',
        ],
        'Status' => [
          'shape' => 'ClusterStatus',
        ],
        'NormalizedInstanceHours' => [
          'shape' => 'Integer',
        ],
      ],
    ],
    'ClusterSummaryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ClusterSummary',
      ],
    ],
    'ClusterTimeline' => [
      'type' => 'structure',
      'members' => [
        'CreationDateTime' => [
          'shape' => 'Date',
        ],
        'ReadyDateTime' => [
          'shape' => 'Date',
        ],
        'EndDateTime' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'Command' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'ScriptPath' => [
          'shape' => 'String',
        ],
        'Args' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'CommandList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Command',
      ],
    ],
    'Date' => [
      'type' => 'timestamp',
    ],
    'DescribeClusterInput' => [
      'type' => 'structure',
      'required' => [
        'ClusterId',
      ],
      'members' => [
        'ClusterId' => [
          'shape' => 'ClusterId',
        ],
      ],
    ],
    'DescribeClusterOutput' => [
      'type' => 'structure',
      'members' => [
        'Cluster' => [
          'shape' => 'Cluster',
        ],
      ],
    ],
    'DescribeJobFlowsInput' => [
      'type' => 'structure',
      'members' => [
        'CreatedAfter' => [
          'shape' => 'Date',
        ],
        'CreatedBefore' => [
          'shape' => 'Date',
        ],
        'JobFlowIds' => [
          'shape' => 'XmlStringList',
        ],
        'JobFlowStates' => [
          'shape' => 'JobFlowExecutionStateList',
        ],
      ],
    ],
    'DescribeJobFlowsOutput' => [
      'type' => 'structure',
      'members' => [
        'JobFlows' => [
          'shape' => 'JobFlowDetailList',
        ],
      ],
    ],
    'DescribeStepInput' => [
      'type' => 'structure',
      'required' => [
        'ClusterId',
        'StepId',
      ],
      'members' => [
        'ClusterId' => [
          'shape' => 'ClusterId',
        ],
        'StepId' => [
          'shape' => 'StepId',
        ],
      ],
    ],
    'DescribeStepOutput' => [
      'type' => 'structure',
      'members' => [
        'Step' => [
          'shape' => 'Step',
        ],
      ],
    ],
    'EC2InstanceIdsToTerminateList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceId',
      ],
    ],
    'Ec2InstanceAttributes' => [
      'type' => 'structure',
      'members' => [
        'Ec2KeyName' => [
          'shape' => 'String',
        ],
        'Ec2SubnetId' => [
          'shape' => 'String',
        ],
        'Ec2AvailabilityZone' => [
          'shape' => 'String',
        ],
        'IamInstanceProfile' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ErrorCode' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'ErrorMessage' => [
      'type' => 'string',
    ],
    'HadoopJarStepConfig' => [
      'type' => 'structure',
      'required' => [
        'Jar',
      ],
      'members' => [
        'Properties' => [
          'shape' => 'KeyValueList',
        ],
        'Jar' => [
          'shape' => 'XmlString',
        ],
        'MainClass' => [
          'shape' => 'XmlString',
        ],
        'Args' => [
          'shape' => 'XmlStringList',
        ],
      ],
    ],
    'HadoopStepConfig' => [
      'type' => 'structure',
      'members' => [
        'Jar' => [
          'shape' => 'String',
        ],
        'Properties' => [
          'shape' => 'StringMap',
        ],
        'MainClass' => [
          'shape' => 'String',
        ],
        'Args' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'Instance' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'InstanceId',
        ],
        'Ec2InstanceId' => [
          'shape' => 'InstanceId',
        ],
        'PublicDnsName' => [
          'shape' => 'String',
        ],
        'PublicIpAddress' => [
          'shape' => 'String',
        ],
        'PrivateDnsName' => [
          'shape' => 'String',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
        ],
        'Status' => [
          'shape' => 'InstanceStatus',
        ],
      ],
    ],
    'InstanceGroup' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'InstanceGroupId',
        ],
        'Name' => [
          'shape' => 'String',
        ],
        'Market' => [
          'shape' => 'MarketType',
        ],
        'InstanceGroupType' => [
          'shape' => 'InstanceGroupType',
        ],
        'BidPrice' => [
          'shape' => 'String',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
        ],
        'RequestedInstanceCount' => [
          'shape' => 'Integer',
        ],
        'RunningInstanceCount' => [
          'shape' => 'Integer',
        ],
        'Status' => [
          'shape' => 'InstanceGroupStatus',
        ],
      ],
    ],
    'InstanceGroupConfig' => [
      'type' => 'structure',
      'required' => [
        'InstanceRole',
        'InstanceType',
        'InstanceCount',
      ],
      'members' => [
        'Name' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Market' => [
          'shape' => 'MarketType',
        ],
        'InstanceRole' => [
          'shape' => 'InstanceRoleType',
        ],
        'BidPrice' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
        ],
      ],
    ],
    'InstanceGroupConfigList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceGroupConfig',
      ],
    ],
    'InstanceGroupDetail' => [
      'type' => 'structure',
      'required' => [
        'Market',
        'InstanceRole',
        'InstanceType',
        'InstanceRequestCount',
        'InstanceRunningCount',
        'State',
        'CreationDateTime',
      ],
      'members' => [
        'InstanceGroupId' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Name' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Market' => [
          'shape' => 'MarketType',
        ],
        'InstanceRole' => [
          'shape' => 'InstanceRoleType',
        ],
        'BidPrice' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
        ],
        'InstanceRequestCount' => [
          'shape' => 'Integer',
        ],
        'InstanceRunningCount' => [
          'shape' => 'Integer',
        ],
        'State' => [
          'shape' => 'InstanceGroupState',
        ],
        'LastStateChangeReason' => [
          'shape' => 'XmlString',
        ],
        'CreationDateTime' => [
          'shape' => 'Date',
        ],
        'StartDateTime' => [
          'shape' => 'Date',
        ],
        'ReadyDateTime' => [
          'shape' => 'Date',
        ],
        'EndDateTime' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'InstanceGroupDetailList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceGroupDetail',
      ],
    ],
    'InstanceGroupId' => [
      'type' => 'string',
    ],
    'InstanceGroupIdsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'XmlStringMaxLen256',
      ],
    ],
    'InstanceGroupList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceGroup',
      ],
    ],
    'InstanceGroupModifyConfig' => [
      'type' => 'structure',
      'required' => [
        'InstanceGroupId',
      ],
      'members' => [
        'InstanceGroupId' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
        ],
        'EC2InstanceIdsToTerminate' => [
          'shape' => 'EC2InstanceIdsToTerminateList',
        ],
      ],
    ],
    'InstanceGroupModifyConfigList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceGroupModifyConfig',
      ],
    ],
    'InstanceGroupState' => [
      'type' => 'string',
      'enum' => [
        'PROVISIONING',
        'BOOTSTRAPPING',
        'RUNNING',
        'RESIZING',
        'SUSPENDED',
        'TERMINATING',
        'TERMINATED',
        'ARRESTED',
        'SHUTTING_DOWN',
        'ENDED',
      ],
    ],
    'InstanceGroupStateChangeReason' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'InstanceGroupStateChangeReasonCode',
        ],
        'Message' => [
          'shape' => 'String',
        ],
      ],
    ],
    'InstanceGroupStateChangeReasonCode' => [
      'type' => 'string',
      'enum' => [
        'INTERNAL_ERROR',
        'VALIDATION_ERROR',
        'INSTANCE_FAILURE',
        'CLUSTER_TERMINATED',
      ],
    ],
    'InstanceGroupStatus' => [
      'type' => 'structure',
      'members' => [
        'State' => [
          'shape' => 'InstanceGroupState',
        ],
        'StateChangeReason' => [
          'shape' => 'InstanceGroupStateChangeReason',
        ],
        'Timeline' => [
          'shape' => 'InstanceGroupTimeline',
        ],
      ],
    ],
    'InstanceGroupTimeline' => [
      'type' => 'structure',
      'members' => [
        'CreationDateTime' => [
          'shape' => 'Date',
        ],
        'ReadyDateTime' => [
          'shape' => 'Date',
        ],
        'EndDateTime' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'InstanceGroupType' => [
      'type' => 'string',
      'enum' => [
        'MASTER',
        'CORE',
        'TASK',
      ],
    ],
    'InstanceGroupTypeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceGroupType',
      ],
    ],
    'InstanceId' => [
      'type' => 'string',
    ],
    'InstanceList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Instance',
      ],
    ],
    'InstanceRoleType' => [
      'type' => 'string',
      'enum' => [
        'MASTER',
        'CORE',
        'TASK',
      ],
    ],
    'InstanceState' => [
      'type' => 'string',
      'enum' => [
        'AWAITING_FULFILLMENT',
        'PROVISIONING',
        'BOOTSTRAPPING',
        'RUNNING',
        'TERMINATED',
      ],
    ],
    'InstanceStateChangeReason' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'InstanceStateChangeReasonCode',
        ],
        'Message' => [
          'shape' => 'String',
        ],
      ],
    ],
    'InstanceStateChangeReasonCode' => [
      'type' => 'string',
      'enum' => [
        'INTERNAL_ERROR',
        'VALIDATION_ERROR',
        'INSTANCE_FAILURE',
        'BOOTSTRAP_FAILURE',
        'CLUSTER_TERMINATED',
      ],
    ],
    'InstanceStatus' => [
      'type' => 'structure',
      'members' => [
        'State' => [
          'shape' => 'InstanceState',
        ],
        'StateChangeReason' => [
          'shape' => 'InstanceStateChangeReason',
        ],
        'Timeline' => [
          'shape' => 'InstanceTimeline',
        ],
      ],
    ],
    'InstanceTimeline' => [
      'type' => 'structure',
      'members' => [
        'CreationDateTime' => [
          'shape' => 'Date',
        ],
        'ReadyDateTime' => [
          'shape' => 'Date',
        ],
        'EndDateTime' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'InstanceType' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
    'Integer' => [
      'type' => 'integer',
    ],
    'InternalServerError' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InternalFailure',
        'httpStatusCode' => 500,
      ],
      'exception' => true,
    ],
    'InternalServerException' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
      'fault' => true,
    ],
    'InvalidRequestException' => [
      'type' => 'structure',
      'members' => [
        'ErrorCode' => [
          'shape' => 'ErrorCode',
        ],
        'Message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'JobFlowDetail' => [
      'type' => 'structure',
      'required' => [
        'JobFlowId',
        'Name',
        'ExecutionStatusDetail',
        'Instances',
      ],
      'members' => [
        'JobFlowId' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Name' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'LogUri' => [
          'shape' => 'XmlString',
        ],
        'AmiVersion' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'ExecutionStatusDetail' => [
          'shape' => 'JobFlowExecutionStatusDetail',
        ],
        'Instances' => [
          'shape' => 'JobFlowInstancesDetail',
        ],
        'Steps' => [
          'shape' => 'StepDetailList',
        ],
        'BootstrapActions' => [
          'shape' => 'BootstrapActionDetailList',
        ],
        'SupportedProducts' => [
          'shape' => 'SupportedProductsList',
        ],
        'VisibleToAllUsers' => [
          'shape' => 'Boolean',
        ],
        'JobFlowRole' => [
          'shape' => 'XmlString',
        ],
        'ServiceRole' => [
          'shape' => 'XmlString',
        ],
      ],
    ],
    'JobFlowDetailList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'JobFlowDetail',
      ],
    ],
    'JobFlowExecutionState' => [
      'type' => 'string',
      'enum' => [
        'STARTING',
        'BOOTSTRAPPING',
        'RUNNING',
        'WAITING',
        'SHUTTING_DOWN',
        'TERMINATED',
        'COMPLETED',
        'FAILED',
      ],
    ],
    'JobFlowExecutionStateList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'JobFlowExecutionState',
      ],
    ],
    'JobFlowExecutionStatusDetail' => [
      'type' => 'structure',
      'required' => [
        'State',
        'CreationDateTime',
      ],
      'members' => [
        'State' => [
          'shape' => 'JobFlowExecutionState',
        ],
        'CreationDateTime' => [
          'shape' => 'Date',
        ],
        'StartDateTime' => [
          'shape' => 'Date',
        ],
        'ReadyDateTime' => [
          'shape' => 'Date',
        ],
        'EndDateTime' => [
          'shape' => 'Date',
        ],
        'LastStateChangeReason' => [
          'shape' => 'XmlString',
        ],
      ],
    ],
    'JobFlowInstancesConfig' => [
      'type' => 'structure',
      'members' => [
        'MasterInstanceType' => [
          'shape' => 'InstanceType',
        ],
        'SlaveInstanceType' => [
          'shape' => 'InstanceType',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
        ],
        'InstanceGroups' => [
          'shape' => 'InstanceGroupConfigList',
        ],
        'Ec2KeyName' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Placement' => [
          'shape' => 'PlacementType',
        ],
        'KeepJobFlowAliveWhenNoSteps' => [
          'shape' => 'Boolean',
        ],
        'TerminationProtected' => [
          'shape' => 'Boolean',
        ],
        'HadoopVersion' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Ec2SubnetId' => [
          'shape' => 'XmlStringMaxLen256',
        ],
      ],
    ],
    'JobFlowInstancesDetail' => [
      'type' => 'structure',
      'required' => [
        'MasterInstanceType',
        'SlaveInstanceType',
        'InstanceCount',
      ],
      'members' => [
        'MasterInstanceType' => [
          'shape' => 'InstanceType',
        ],
        'MasterPublicDnsName' => [
          'shape' => 'XmlString',
        ],
        'MasterInstanceId' => [
          'shape' => 'XmlString',
        ],
        'SlaveInstanceType' => [
          'shape' => 'InstanceType',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
        ],
        'InstanceGroups' => [
          'shape' => 'InstanceGroupDetailList',
        ],
        'NormalizedInstanceHours' => [
          'shape' => 'Integer',
        ],
        'Ec2KeyName' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Ec2SubnetId' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Placement' => [
          'shape' => 'PlacementType',
        ],
        'KeepJobFlowAliveWhenNoSteps' => [
          'shape' => 'Boolean',
        ],
        'TerminationProtected' => [
          'shape' => 'Boolean',
        ],
        'HadoopVersion' => [
          'shape' => 'XmlStringMaxLen256',
        ],
      ],
    ],
    'KeyValue' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'XmlString',
        ],
        'Value' => [
          'shape' => 'XmlString',
        ],
      ],
    ],
    'KeyValueList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'KeyValue',
      ],
    ],
    'ListBootstrapActionsInput' => [
      'type' => 'structure',
      'required' => [
        'ClusterId',
      ],
      'members' => [
        'ClusterId' => [
          'shape' => 'ClusterId',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListBootstrapActionsOutput' => [
      'type' => 'structure',
      'members' => [
        'BootstrapActions' => [
          'shape' => 'CommandList',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListClustersInput' => [
      'type' => 'structure',
      'members' => [
        'CreatedAfter' => [
          'shape' => 'Date',
        ],
        'CreatedBefore' => [
          'shape' => 'Date',
        ],
        'ClusterStates' => [
          'shape' => 'ClusterStateList',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListClustersOutput' => [
      'type' => 'structure',
      'members' => [
        'Clusters' => [
          'shape' => 'ClusterSummaryList',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListInstanceGroupsInput' => [
      'type' => 'structure',
      'required' => [
        'ClusterId',
      ],
      'members' => [
        'ClusterId' => [
          'shape' => 'ClusterId',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListInstanceGroupsOutput' => [
      'type' => 'structure',
      'members' => [
        'InstanceGroups' => [
          'shape' => 'InstanceGroupList',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListInstancesInput' => [
      'type' => 'structure',
      'required' => [
        'ClusterId',
      ],
      'members' => [
        'ClusterId' => [
          'shape' => 'ClusterId',
        ],
        'InstanceGroupId' => [
          'shape' => 'InstanceGroupId',
        ],
        'InstanceGroupTypes' => [
          'shape' => 'InstanceGroupTypeList',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListInstancesOutput' => [
      'type' => 'structure',
      'members' => [
        'Instances' => [
          'shape' => 'InstanceList',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListStepsInput' => [
      'type' => 'structure',
      'required' => [
        'ClusterId',
      ],
      'members' => [
        'ClusterId' => [
          'shape' => 'ClusterId',
        ],
        'StepStates' => [
          'shape' => 'StepStateList',
        ],
        'StepIds' => [
          'shape' => 'XmlStringList',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListStepsOutput' => [
      'type' => 'structure',
      'members' => [
        'Steps' => [
          'shape' => 'StepSummaryList',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'Marker' => [
      'type' => 'string',
    ],
    'MarketType' => [
      'type' => 'string',
      'enum' => [
        'ON_DEMAND',
        'SPOT',
      ],
    ],
    'ModifyInstanceGroupsInput' => [
      'type' => 'structure',
      'members' => [
        'InstanceGroups' => [
          'shape' => 'InstanceGroupModifyConfigList',
        ],
      ],
    ],
    'NewSupportedProductsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SupportedProductConfig',
      ],
    ],
    'PlacementType' => [
      'type' => 'structure',
      'required' => [
        'AvailabilityZone',
      ],
      'members' => [
        'AvailabilityZone' => [
          'shape' => 'XmlString',
        ],
      ],
    ],
    'RemoveTagsInput' => [
      'type' => 'structure',
      'required' => [
        'ResourceId',
        'TagKeys',
      ],
      'members' => [
        'ResourceId' => [
          'shape' => 'ResourceId',
        ],
        'TagKeys' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'RemoveTagsOutput' => [
      'type' => 'structure',
      'members' => [],
    ],
    'ResourceId' => [
      'type' => 'string',
    ],
    'RunJobFlowInput' => [
      'type' => 'structure',
      'required' => [
        'Name',
        'Instances',
      ],
      'members' => [
        'Name' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'LogUri' => [
          'shape' => 'XmlString',
        ],
        'AdditionalInfo' => [
          'shape' => 'XmlString',
        ],
        'AmiVersion' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Instances' => [
          'shape' => 'JobFlowInstancesConfig',
        ],
        'Steps' => [
          'shape' => 'StepConfigList',
        ],
        'BootstrapActions' => [
          'shape' => 'BootstrapActionConfigList',
        ],
        'SupportedProducts' => [
          'shape' => 'SupportedProductsList',
        ],
        'NewSupportedProducts' => [
          'shape' => 'NewSupportedProductsList',
        ],
        'VisibleToAllUsers' => [
          'shape' => 'Boolean',
        ],
        'JobFlowRole' => [
          'shape' => 'XmlString',
        ],
        'ServiceRole' => [
          'shape' => 'XmlString',
        ],
        'Tags' => [
          'shape' => 'TagList',
        ],
      ],
    ],
    'RunJobFlowOutput' => [
      'type' => 'structure',
      'members' => [
        'JobFlowId' => [
          'shape' => 'XmlStringMaxLen256',
        ],
      ],
    ],
    'ScriptBootstrapActionConfig' => [
      'type' => 'structure',
      'required' => [
        'Path',
      ],
      'members' => [
        'Path' => [
          'shape' => 'XmlString',
        ],
        'Args' => [
          'shape' => 'XmlStringList',
        ],
      ],
    ],
    'SetTerminationProtectionInput' => [
      'type' => 'structure',
      'required' => [
        'JobFlowIds',
        'TerminationProtected',
      ],
      'members' => [
        'JobFlowIds' => [
          'shape' => 'XmlStringList',
        ],
        'TerminationProtected' => [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'SetVisibleToAllUsersInput' => [
      'type' => 'structure',
      'required' => [
        'JobFlowIds',
        'VisibleToAllUsers',
      ],
      'members' => [
        'JobFlowIds' => [
          'shape' => 'XmlStringList',
        ],
        'VisibleToAllUsers' => [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'Step' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'StepId',
        ],
        'Name' => [
          'shape' => 'String',
        ],
        'Config' => [
          'shape' => 'HadoopStepConfig',
        ],
        'ActionOnFailure' => [
          'shape' => 'ActionOnFailure',
        ],
        'Status' => [
          'shape' => 'StepStatus',
        ],
      ],
    ],
    'StepConfig' => [
      'type' => 'structure',
      'required' => [
        'Name',
        'HadoopJarStep',
      ],
      'members' => [
        'Name' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'ActionOnFailure' => [
          'shape' => 'ActionOnFailure',
        ],
        'HadoopJarStep' => [
          'shape' => 'HadoopJarStepConfig',
        ],
      ],
    ],
    'StepConfigList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'StepConfig',
      ],
    ],
    'StepDetail' => [
      'type' => 'structure',
      'required' => [
        'StepConfig',
        'ExecutionStatusDetail',
      ],
      'members' => [
        'StepConfig' => [
          'shape' => 'StepConfig',
        ],
        'ExecutionStatusDetail' => [
          'shape' => 'StepExecutionStatusDetail',
        ],
      ],
    ],
    'StepDetailList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'StepDetail',
      ],
    ],
    'StepExecutionState' => [
      'type' => 'string',
      'enum' => [
        'PENDING',
        'RUNNING',
        'CONTINUE',
        'COMPLETED',
        'CANCELLED',
        'FAILED',
        'INTERRUPTED',
      ],
    ],
    'StepExecutionStatusDetail' => [
      'type' => 'structure',
      'required' => [
        'State',
        'CreationDateTime',
      ],
      'members' => [
        'State' => [
          'shape' => 'StepExecutionState',
        ],
        'CreationDateTime' => [
          'shape' => 'Date',
        ],
        'StartDateTime' => [
          'shape' => 'Date',
        ],
        'EndDateTime' => [
          'shape' => 'Date',
        ],
        'LastStateChangeReason' => [
          'shape' => 'XmlString',
        ],
      ],
    ],
    'StepId' => [
      'type' => 'string',
    ],
    'StepIdsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'XmlStringMaxLen256',
      ],
    ],
    'StepState' => [
      'type' => 'string',
      'enum' => [
        'PENDING',
        'RUNNING',
        'COMPLETED',
        'CANCELLED',
        'FAILED',
        'INTERRUPTED',
      ],
    ],
    'StepStateChangeReason' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'StepStateChangeReasonCode',
        ],
        'Message' => [
          'shape' => 'String',
        ],
      ],
    ],
    'StepStateChangeReasonCode' => [
      'type' => 'string',
      'enum' => [
        'NONE',
      ],
    ],
    'StepStateList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'StepState',
      ],
    ],
    'StepStatus' => [
      'type' => 'structure',
      'members' => [
        'State' => [
          'shape' => 'StepState',
        ],
        'StateChangeReason' => [
          'shape' => 'StepStateChangeReason',
        ],
        'Timeline' => [
          'shape' => 'StepTimeline',
        ],
      ],
    ],
    'StepSummary' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'StepId',
        ],
        'Name' => [
          'shape' => 'String',
        ],
        'Config' => [
          'shape' => 'HadoopStepConfig',
        ],
        'ActionOnFailure' => [
          'shape' => 'ActionOnFailure',
        ],
        'Status' => [
          'shape' => 'StepStatus',
        ],
      ],
    ],
    'StepSummaryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'StepSummary',
      ],
    ],
    'StepTimeline' => [
      'type' => 'structure',
      'members' => [
        'CreationDateTime' => [
          'shape' => 'Date',
        ],
        'StartDateTime' => [
          'shape' => 'Date',
        ],
        'EndDateTime' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'String' => [
      'type' => 'string',
    ],
    'StringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'StringMap' => [
      'type' => 'map',
      'key' => [
        'shape' => 'String',
      ],
      'value' => [
        'shape' => 'String',
      ],
    ],
    'SupportedProductConfig' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'XmlStringMaxLen256',
        ],
        'Args' => [
          'shape' => 'XmlStringList',
        ],
      ],
    ],
    'SupportedProductsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'XmlStringMaxLen256',
      ],
    ],
    'Tag' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'String',
        ],
        'Value' => [
          'shape' => 'String',
        ],
      ],
    ],
    'TagList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Tag',
      ],
    ],
    'TerminateJobFlowsInput' => [
      'type' => 'structure',
      'required' => [
        'JobFlowIds',
      ],
      'members' => [
        'JobFlowIds' => [
          'shape' => 'XmlStringList',
        ],
      ],
    ],
    'XmlString' => [
      'type' => 'string',
      'min' => 0,
      'max' => 10280,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
    'XmlStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'XmlString',
      ],
    ],
    'XmlStringMaxLen256' => [
      'type' => 'string',
      'min' => 0,
      'max' => 256,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
  ],
];
