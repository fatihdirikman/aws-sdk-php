<?php return [
  'metadata' => [
    'apiVersion' => '2010-12-01',
    'endpointPrefix' => 'elasticbeanstalk',
    'serviceAbbreviation' => 'Elastic Beanstalk',
    'serviceFullName' => 'AWS Elastic Beanstalk',
    'signatureVersion' => 'v4',
    'xmlNamespace' => 'http://elasticbeanstalk.amazonaws.com/docs/2010-12-01/',
    'protocol' => 'query',
  ],
  'operations' => [
    'CheckDNSAvailability' => [
      'name' => 'CheckDNSAvailability',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CheckDNSAvailabilityMessage',
      ],
      'output' => [
        'shape' => 'CheckDNSAvailabilityResultMessage',
        'resultWrapper' => 'CheckDNSAvailabilityResult',
      ],
    ],
    'CreateApplication' => [
      'name' => 'CreateApplication',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateApplicationMessage',
      ],
      'output' => [
        'shape' => 'ApplicationDescriptionMessage',
        'resultWrapper' => 'CreateApplicationResult',
      ],
      'errors' => [
        [
          'shape' => 'TooManyApplicationsException',
          'error' => [
            'code' => 'TooManyApplicationsException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateApplicationVersion' => [
      'name' => 'CreateApplicationVersion',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateApplicationVersionMessage',
      ],
      'output' => [
        'shape' => 'ApplicationVersionDescriptionMessage',
        'resultWrapper' => 'CreateApplicationVersionResult',
      ],
      'errors' => [
        [
          'shape' => 'TooManyApplicationsException',
          'error' => [
            'code' => 'TooManyApplicationsException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyApplicationVersionsException',
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'S3LocationNotInServiceRegionException',
          'error' => [
            'code' => 'S3LocationNotInServiceRegionException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateConfigurationTemplate' => [
      'name' => 'CreateConfigurationTemplate',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateConfigurationTemplateMessage',
      ],
      'output' => [
        'shape' => 'ConfigurationSettingsDescription',
        'resultWrapper' => 'CreateConfigurationTemplateResult',
      ],
      'errors' => [
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyConfigurationTemplatesException',
          'error' => [
            'code' => 'TooManyConfigurationTemplatesException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateEnvironment' => [
      'name' => 'CreateEnvironment',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateEnvironmentMessage',
      ],
      'output' => [
        'shape' => 'EnvironmentDescription',
        'resultWrapper' => 'CreateEnvironmentResult',
      ],
      'errors' => [
        [
          'shape' => 'TooManyEnvironmentsException',
          'error' => [
            'code' => 'TooManyEnvironmentsException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateStorageLocation' => [
      'name' => 'CreateStorageLocation',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'output' => [
        'shape' => 'CreateStorageLocationResultMessage',
        'resultWrapper' => 'CreateStorageLocationResult',
      ],
      'errors' => [
        [
          'shape' => 'TooManyBucketsException',
          'error' => [
            'code' => 'TooManyBucketsException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'S3SubscriptionRequiredException',
          'error' => [
            'code' => 'S3SubscriptionRequiredException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteApplication' => [
      'name' => 'DeleteApplication',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteApplicationMessage',
      ],
      'errors' => [
        [
          'shape' => 'OperationInProgressException',
          'error' => [
            'code' => 'OperationInProgressFailure',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteApplicationVersion' => [
      'name' => 'DeleteApplicationVersion',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteApplicationVersionMessage',
      ],
      'errors' => [
        [
          'shape' => 'SourceBundleDeletionException',
          'error' => [
            'code' => 'SourceBundleDeletionFailure',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'OperationInProgressException',
          'error' => [
            'code' => 'OperationInProgressFailure',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'S3LocationNotInServiceRegionException',
          'error' => [
            'code' => 'S3LocationNotInServiceRegionException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteConfigurationTemplate' => [
      'name' => 'DeleteConfigurationTemplate',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteConfigurationTemplateMessage',
      ],
      'errors' => [
        [
          'shape' => 'OperationInProgressException',
          'error' => [
            'code' => 'OperationInProgressFailure',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteEnvironmentConfiguration' => [
      'name' => 'DeleteEnvironmentConfiguration',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteEnvironmentConfigurationMessage',
      ],
    ],
    'DescribeApplicationVersions' => [
      'name' => 'DescribeApplicationVersions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeApplicationVersionsMessage',
      ],
      'output' => [
        'shape' => 'ApplicationVersionDescriptionsMessage',
        'resultWrapper' => 'DescribeApplicationVersionsResult',
      ],
    ],
    'DescribeApplications' => [
      'name' => 'DescribeApplications',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeApplicationsMessage',
      ],
      'output' => [
        'shape' => 'ApplicationDescriptionsMessage',
        'resultWrapper' => 'DescribeApplicationsResult',
      ],
    ],
    'DescribeConfigurationOptions' => [
      'name' => 'DescribeConfigurationOptions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeConfigurationOptionsMessage',
      ],
      'output' => [
        'shape' => 'ConfigurationOptionsDescription',
        'resultWrapper' => 'DescribeConfigurationOptionsResult',
      ],
    ],
    'DescribeConfigurationSettings' => [
      'name' => 'DescribeConfigurationSettings',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeConfigurationSettingsMessage',
      ],
      'output' => [
        'shape' => 'ConfigurationSettingsDescriptions',
        'resultWrapper' => 'DescribeConfigurationSettingsResult',
      ],
    ],
    'DescribeEnvironmentResources' => [
      'name' => 'DescribeEnvironmentResources',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeEnvironmentResourcesMessage',
      ],
      'output' => [
        'shape' => 'EnvironmentResourceDescriptionsMessage',
        'resultWrapper' => 'DescribeEnvironmentResourcesResult',
      ],
      'errors' => [
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeEnvironments' => [
      'name' => 'DescribeEnvironments',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeEnvironmentsMessage',
      ],
      'output' => [
        'shape' => 'EnvironmentDescriptionsMessage',
        'resultWrapper' => 'DescribeEnvironmentsResult',
      ],
    ],
    'DescribeEvents' => [
      'name' => 'DescribeEvents',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeEventsMessage',
      ],
      'output' => [
        'shape' => 'EventDescriptionsMessage',
        'resultWrapper' => 'DescribeEventsResult',
      ],
    ],
    'ListAvailableSolutionStacks' => [
      'name' => 'ListAvailableSolutionStacks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'output' => [
        'shape' => 'ListAvailableSolutionStacksResultMessage',
        'resultWrapper' => 'ListAvailableSolutionStacksResult',
      ],
    ],
    'RebuildEnvironment' => [
      'name' => 'RebuildEnvironment',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RebuildEnvironmentMessage',
      ],
      'errors' => [
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'RequestEnvironmentInfo' => [
      'name' => 'RequestEnvironmentInfo',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RequestEnvironmentInfoMessage',
      ],
    ],
    'RestartAppServer' => [
      'name' => 'RestartAppServer',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RestartAppServerMessage',
      ],
    ],
    'RetrieveEnvironmentInfo' => [
      'name' => 'RetrieveEnvironmentInfo',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RetrieveEnvironmentInfoMessage',
      ],
      'output' => [
        'shape' => 'RetrieveEnvironmentInfoResultMessage',
        'resultWrapper' => 'RetrieveEnvironmentInfoResult',
      ],
    ],
    'SwapEnvironmentCNAMEs' => [
      'name' => 'SwapEnvironmentCNAMEs',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SwapEnvironmentCNAMEsMessage',
      ],
    ],
    'TerminateEnvironment' => [
      'name' => 'TerminateEnvironment',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'TerminateEnvironmentMessage',
      ],
      'output' => [
        'shape' => 'EnvironmentDescription',
        'resultWrapper' => 'TerminateEnvironmentResult',
      ],
      'errors' => [
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateApplication' => [
      'name' => 'UpdateApplication',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateApplicationMessage',
      ],
      'output' => [
        'shape' => 'ApplicationDescriptionMessage',
        'resultWrapper' => 'UpdateApplicationResult',
      ],
    ],
    'UpdateApplicationVersion' => [
      'name' => 'UpdateApplicationVersion',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateApplicationVersionMessage',
      ],
      'output' => [
        'shape' => 'ApplicationVersionDescriptionMessage',
        'resultWrapper' => 'UpdateApplicationVersionResult',
      ],
    ],
    'UpdateConfigurationTemplate' => [
      'name' => 'UpdateConfigurationTemplate',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateConfigurationTemplateMessage',
      ],
      'output' => [
        'shape' => 'ConfigurationSettingsDescription',
        'resultWrapper' => 'UpdateConfigurationTemplateResult',
      ],
      'errors' => [
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateEnvironment' => [
      'name' => 'UpdateEnvironment',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateEnvironmentMessage',
      ],
      'output' => [
        'shape' => 'EnvironmentDescription',
        'resultWrapper' => 'UpdateEnvironmentResult',
      ],
      'errors' => [
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ValidateConfigurationSettings' => [
      'name' => 'ValidateConfigurationSettings',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ValidateConfigurationSettingsMessage',
      ],
      'output' => [
        'shape' => 'ConfigurationSettingsValidationMessages',
        'resultWrapper' => 'ValidateConfigurationSettingsResult',
      ],
      'errors' => [
        [
          'shape' => 'InsufficientPrivilegesException',
          'error' => [
            'code' => 'InsufficientPrivilegesException',
            'httpStatusCode' => 403,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'ApplicationDescription' => [
      'type' => 'structure',
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'DateCreated' => [
          'shape' => 'CreationDate',
        ],
        'DateUpdated' => [
          'shape' => 'UpdateDate',
        ],
        'Versions' => [
          'shape' => 'VersionLabelsList',
        ],
        'ConfigurationTemplates' => [
          'shape' => 'ConfigurationTemplateNamesList',
        ],
      ],
    ],
    'ApplicationDescriptionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ApplicationDescription',
      ],
    ],
    'ApplicationDescriptionMessage' => [
      'type' => 'structure',
      'members' => [
        'Application' => [
          'shape' => 'ApplicationDescription',
        ],
      ],
    ],
    'ApplicationDescriptionsMessage' => [
      'type' => 'structure',
      'members' => [
        'Applications' => [
          'shape' => 'ApplicationDescriptionList',
        ],
      ],
    ],
    'ApplicationName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 100,
    ],
    'ApplicationNamesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ApplicationName',
      ],
    ],
    'ApplicationVersionDescription' => [
      'type' => 'structure',
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'SourceBundle' => [
          'shape' => 'S3Location',
        ],
        'DateCreated' => [
          'shape' => 'CreationDate',
        ],
        'DateUpdated' => [
          'shape' => 'UpdateDate',
        ],
      ],
    ],
    'ApplicationVersionDescriptionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ApplicationVersionDescription',
      ],
    ],
    'ApplicationVersionDescriptionMessage' => [
      'type' => 'structure',
      'members' => [
        'ApplicationVersion' => [
          'shape' => 'ApplicationVersionDescription',
        ],
      ],
    ],
    'ApplicationVersionDescriptionsMessage' => [
      'type' => 'structure',
      'members' => [
        'ApplicationVersions' => [
          'shape' => 'ApplicationVersionDescriptionList',
        ],
      ],
    ],
    'AutoCreateApplication' => [
      'type' => 'boolean',
    ],
    'AutoScalingGroup' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'ResourceId',
        ],
      ],
    ],
    'AutoScalingGroupList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AutoScalingGroup',
      ],
    ],
    'AvailableSolutionStackDetailsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SolutionStackDescription',
      ],
    ],
    'AvailableSolutionStackNamesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SolutionStackName',
      ],
    ],
    'CheckDNSAvailabilityMessage' => [
      'type' => 'structure',
      'required' => [
        'CNAMEPrefix',
      ],
      'members' => [
        'CNAMEPrefix' => [
          'shape' => 'DNSCnamePrefix',
        ],
      ],
    ],
    'CheckDNSAvailabilityResultMessage' => [
      'type' => 'structure',
      'members' => [
        'Available' => [
          'shape' => 'CnameAvailability',
        ],
        'FullyQualifiedCNAME' => [
          'shape' => 'DNSCname',
        ],
      ],
    ],
    'CnameAvailability' => [
      'type' => 'boolean',
    ],
    'ConfigurationDeploymentStatus' => [
      'type' => 'string',
      'enum' => [
        'deployed',
        'pending',
        'failed',
      ],
    ],
    'ConfigurationOptionDefaultValue' => [
      'type' => 'string',
    ],
    'ConfigurationOptionDescription' => [
      'type' => 'structure',
      'members' => [
        'Namespace' => [
          'shape' => 'OptionNamespace',
        ],
        'Name' => [
          'shape' => 'ConfigurationOptionName',
        ],
        'DefaultValue' => [
          'shape' => 'ConfigurationOptionDefaultValue',
        ],
        'ChangeSeverity' => [
          'shape' => 'ConfigurationOptionSeverity',
        ],
        'UserDefined' => [
          'shape' => 'UserDefinedOption',
        ],
        'ValueType' => [
          'shape' => 'ConfigurationOptionValueType',
        ],
        'ValueOptions' => [
          'shape' => 'ConfigurationOptionPossibleValues',
        ],
        'MinValue' => [
          'shape' => 'OptionRestrictionMinValue',
        ],
        'MaxValue' => [
          'shape' => 'OptionRestrictionMaxValue',
        ],
        'MaxLength' => [
          'shape' => 'OptionRestrictionMaxLength',
        ],
        'Regex' => [
          'shape' => 'OptionRestrictionRegex',
        ],
      ],
    ],
    'ConfigurationOptionDescriptionsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ConfigurationOptionDescription',
      ],
    ],
    'ConfigurationOptionName' => [
      'type' => 'string',
    ],
    'ConfigurationOptionPossibleValue' => [
      'type' => 'string',
    ],
    'ConfigurationOptionPossibleValues' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ConfigurationOptionPossibleValue',
      ],
    ],
    'ConfigurationOptionSetting' => [
      'type' => 'structure',
      'members' => [
        'Namespace' => [
          'shape' => 'OptionNamespace',
        ],
        'OptionName' => [
          'shape' => 'ConfigurationOptionName',
        ],
        'Value' => [
          'shape' => 'ConfigurationOptionValue',
        ],
      ],
    ],
    'ConfigurationOptionSettingsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ConfigurationOptionSetting',
      ],
    ],
    'ConfigurationOptionSeverity' => [
      'type' => 'string',
    ],
    'ConfigurationOptionValue' => [
      'type' => 'string',
    ],
    'ConfigurationOptionValueType' => [
      'type' => 'string',
      'enum' => [
        'Scalar',
        'List',
      ],
    ],
    'ConfigurationOptionsDescription' => [
      'type' => 'structure',
      'members' => [
        'SolutionStackName' => [
          'shape' => 'SolutionStackName',
        ],
        'Options' => [
          'shape' => 'ConfigurationOptionDescriptionsList',
        ],
      ],
    ],
    'ConfigurationSettingsDescription' => [
      'type' => 'structure',
      'members' => [
        'SolutionStackName' => [
          'shape' => 'SolutionStackName',
        ],
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'DeploymentStatus' => [
          'shape' => 'ConfigurationDeploymentStatus',
        ],
        'DateCreated' => [
          'shape' => 'CreationDate',
        ],
        'DateUpdated' => [
          'shape' => 'UpdateDate',
        ],
        'OptionSettings' => [
          'shape' => 'ConfigurationOptionSettingsList',
        ],
      ],
    ],
    'ConfigurationSettingsDescriptionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ConfigurationSettingsDescription',
      ],
    ],
    'ConfigurationSettingsDescriptions' => [
      'type' => 'structure',
      'members' => [
        'ConfigurationSettings' => [
          'shape' => 'ConfigurationSettingsDescriptionList',
        ],
      ],
    ],
    'ConfigurationSettingsValidationMessages' => [
      'type' => 'structure',
      'members' => [
        'Messages' => [
          'shape' => 'ValidationMessagesList',
        ],
      ],
    ],
    'ConfigurationTemplateName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 100,
    ],
    'ConfigurationTemplateNamesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ConfigurationTemplateName',
      ],
    ],
    'CreateApplicationMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
      ],
    ],
    'CreateApplicationVersionMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
        'VersionLabel',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'SourceBundle' => [
          'shape' => 'S3Location',
        ],
        'AutoCreateApplication' => [
          'shape' => 'AutoCreateApplication',
        ],
      ],
    ],
    'CreateConfigurationTemplateMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
        'TemplateName',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'SolutionStackName' => [
          'shape' => 'SolutionStackName',
        ],
        'SourceConfiguration' => [
          'shape' => 'SourceConfiguration',
        ],
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'OptionSettings' => [
          'shape' => 'ConfigurationOptionSettingsList',
        ],
      ],
    ],
    'CreateEnvironmentMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
        'EnvironmentName',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'CNAMEPrefix' => [
          'shape' => 'DNSCnamePrefix',
        ],
        'Tier' => [
          'shape' => 'EnvironmentTier',
        ],
        'Tags' => [
          'shape' => 'Tags',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'SolutionStackName' => [
          'shape' => 'SolutionStackName',
        ],
        'OptionSettings' => [
          'shape' => 'ConfigurationOptionSettingsList',
        ],
        'OptionsToRemove' => [
          'shape' => 'OptionsSpecifierList',
        ],
      ],
    ],
    'CreateStorageLocationResultMessage' => [
      'type' => 'structure',
      'members' => [
        'S3Bucket' => [
          'shape' => 'S3Bucket',
        ],
      ],
    ],
    'CreationDate' => [
      'type' => 'timestamp',
    ],
    'DNSCname' => [
      'type' => 'string',
      'min' => 1,
      'max' => 255,
    ],
    'DNSCnamePrefix' => [
      'type' => 'string',
      'min' => 4,
      'max' => 63,
    ],
    'DeleteApplicationMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'TerminateEnvByForce' => [
          'shape' => 'TerminateEnvForce',
        ],
      ],
    ],
    'DeleteApplicationVersionMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
        'VersionLabel',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'DeleteSourceBundle' => [
          'shape' => 'DeleteSourceBundle',
        ],
      ],
    ],
    'DeleteConfigurationTemplateMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
        'TemplateName',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
      ],
    ],
    'DeleteEnvironmentConfigurationMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
        'EnvironmentName',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
      ],
    ],
    'DeleteSourceBundle' => [
      'type' => 'boolean',
    ],
    'DescribeApplicationVersionsMessage' => [
      'type' => 'structure',
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'VersionLabels' => [
          'shape' => 'VersionLabelsList',
        ],
      ],
    ],
    'DescribeApplicationsMessage' => [
      'type' => 'structure',
      'members' => [
        'ApplicationNames' => [
          'shape' => 'ApplicationNamesList',
        ],
      ],
    ],
    'DescribeConfigurationOptionsMessage' => [
      'type' => 'structure',
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'SolutionStackName' => [
          'shape' => 'SolutionStackName',
        ],
        'Options' => [
          'shape' => 'OptionsSpecifierList',
        ],
      ],
    ],
    'DescribeConfigurationSettingsMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
      ],
    ],
    'DescribeEnvironmentResourcesMessage' => [
      'type' => 'structure',
      'members' => [
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
      ],
    ],
    'DescribeEnvironmentsMessage' => [
      'type' => 'structure',
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'EnvironmentIds' => [
          'shape' => 'EnvironmentIdList',
        ],
        'EnvironmentNames' => [
          'shape' => 'EnvironmentNamesList',
        ],
        'IncludeDeleted' => [
          'shape' => 'IncludeDeleted',
        ],
        'IncludedDeletedBackTo' => [
          'shape' => 'IncludeDeletedBackTo',
        ],
      ],
    ],
    'DescribeEventsMessage' => [
      'type' => 'structure',
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'RequestId' => [
          'shape' => 'RequestId',
        ],
        'Severity' => [
          'shape' => 'EventSeverity',
        ],
        'StartTime' => [
          'shape' => 'TimeFilterStart',
        ],
        'EndTime' => [
          'shape' => 'TimeFilterEnd',
        ],
        'MaxRecords' => [
          'shape' => 'MaxRecords',
        ],
        'NextToken' => [
          'shape' => 'Token',
        ],
      ],
    ],
    'Description' => [
      'type' => 'string',
      'max' => 200,
    ],
    'Ec2InstanceId' => [
      'type' => 'string',
    ],
    'EndpointURL' => [
      'type' => 'string',
    ],
    'EnvironmentDescription' => [
      'type' => 'structure',
      'members' => [
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'SolutionStackName' => [
          'shape' => 'SolutionStackName',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'EndpointURL' => [
          'shape' => 'EndpointURL',
        ],
        'CNAME' => [
          'shape' => 'DNSCname',
        ],
        'DateCreated' => [
          'shape' => 'CreationDate',
        ],
        'DateUpdated' => [
          'shape' => 'UpdateDate',
        ],
        'Status' => [
          'shape' => 'EnvironmentStatus',
        ],
        'Health' => [
          'shape' => 'EnvironmentHealth',
        ],
        'Resources' => [
          'shape' => 'EnvironmentResourcesDescription',
        ],
        'Tier' => [
          'shape' => 'EnvironmentTier',
        ],
      ],
    ],
    'EnvironmentDescriptionsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'EnvironmentDescription',
      ],
    ],
    'EnvironmentDescriptionsMessage' => [
      'type' => 'structure',
      'members' => [
        'Environments' => [
          'shape' => 'EnvironmentDescriptionsList',
        ],
      ],
    ],
    'EnvironmentHealth' => [
      'type' => 'string',
      'enum' => [
        'Green',
        'Yellow',
        'Red',
        'Grey',
      ],
    ],
    'EnvironmentId' => [
      'type' => 'string',
    ],
    'EnvironmentIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'EnvironmentId',
      ],
    ],
    'EnvironmentInfoDescription' => [
      'type' => 'structure',
      'members' => [
        'InfoType' => [
          'shape' => 'EnvironmentInfoType',
        ],
        'Ec2InstanceId' => [
          'shape' => 'Ec2InstanceId',
        ],
        'SampleTimestamp' => [
          'shape' => 'SampleTimestamp',
        ],
        'Message' => [
          'shape' => 'Message',
        ],
      ],
    ],
    'EnvironmentInfoDescriptionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'EnvironmentInfoDescription',
      ],
    ],
    'EnvironmentInfoType' => [
      'type' => 'string',
      'enum' => [
        'tail',
      ],
    ],
    'EnvironmentName' => [
      'type' => 'string',
      'min' => 4,
      'max' => 23,
    ],
    'EnvironmentNamesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'EnvironmentName',
      ],
    ],
    'EnvironmentResourceDescription' => [
      'type' => 'structure',
      'members' => [
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'AutoScalingGroups' => [
          'shape' => 'AutoScalingGroupList',
        ],
        'Instances' => [
          'shape' => 'InstanceList',
        ],
        'LaunchConfigurations' => [
          'shape' => 'LaunchConfigurationList',
        ],
        'LoadBalancers' => [
          'shape' => 'LoadBalancerList',
        ],
        'Triggers' => [
          'shape' => 'TriggerList',
        ],
        'Queues' => [
          'shape' => 'QueueList',
        ],
      ],
    ],
    'EnvironmentResourceDescriptionsMessage' => [
      'type' => 'structure',
      'members' => [
        'EnvironmentResources' => [
          'shape' => 'EnvironmentResourceDescription',
        ],
      ],
    ],
    'EnvironmentResourcesDescription' => [
      'type' => 'structure',
      'members' => [
        'LoadBalancer' => [
          'shape' => 'LoadBalancerDescription',
        ],
      ],
    ],
    'EnvironmentStatus' => [
      'type' => 'string',
      'enum' => [
        'Launching',
        'Updating',
        'Ready',
        'Terminating',
        'Terminated',
      ],
    ],
    'EnvironmentTier' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'Type' => [
          'shape' => 'String',
        ],
        'Version' => [
          'shape' => 'String',
        ],
      ],
    ],
    'EventDate' => [
      'type' => 'timestamp',
    ],
    'EventDescription' => [
      'type' => 'structure',
      'members' => [
        'EventDate' => [
          'shape' => 'EventDate',
        ],
        'Message' => [
          'shape' => 'EventMessage',
        ],
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'RequestId' => [
          'shape' => 'RequestId',
        ],
        'Severity' => [
          'shape' => 'EventSeverity',
        ],
      ],
    ],
    'EventDescriptionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'EventDescription',
      ],
    ],
    'EventDescriptionsMessage' => [
      'type' => 'structure',
      'members' => [
        'Events' => [
          'shape' => 'EventDescriptionList',
        ],
        'NextToken' => [
          'shape' => 'Token',
        ],
      ],
    ],
    'EventMessage' => [
      'type' => 'string',
    ],
    'EventSeverity' => [
      'type' => 'string',
      'enum' => [
        'TRACE',
        'DEBUG',
        'INFO',
        'WARN',
        'ERROR',
        'FATAL',
      ],
    ],
    'FileTypeExtension' => [
      'type' => 'string',
      'min' => 1,
      'max' => 100,
    ],
    'IncludeDeleted' => [
      'type' => 'boolean',
    ],
    'IncludeDeletedBackTo' => [
      'type' => 'timestamp',
    ],
    'Instance' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
        ],
      ],
    ],
    'InstanceList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Instance',
      ],
    ],
    'InsufficientPrivilegesException' => [
      'type' => 'structure',
      'members' => [
      ],
      'error' => [
        'code' => 'InsufficientPrivilegesException',
        'httpStatusCode' => 403,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'Integer' => [
      'type' => 'integer',
    ],
    'LaunchConfiguration' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'ResourceId',
        ],
      ],
    ],
    'LaunchConfigurationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'LaunchConfiguration',
      ],
    ],
    'ListAvailableSolutionStacksResultMessage' => [
      'type' => 'structure',
      'members' => [
        'SolutionStacks' => [
          'shape' => 'AvailableSolutionStackNamesList',
        ],
        'SolutionStackDetails' => [
          'shape' => 'AvailableSolutionStackDetailsList',
        ],
      ],
    ],
    'Listener' => [
      'type' => 'structure',
      'members' => [
        'Protocol' => [
          'shape' => 'String',
        ],
        'Port' => [
          'shape' => 'Integer',
        ],
      ],
    ],
    'LoadBalancer' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'ResourceId',
        ],
      ],
    ],
    'LoadBalancerDescription' => [
      'type' => 'structure',
      'members' => [
        'LoadBalancerName' => [
          'shape' => 'String',
        ],
        'Domain' => [
          'shape' => 'String',
        ],
        'Listeners' => [
          'shape' => 'LoadBalancerListenersDescription',
        ],
      ],
    ],
    'LoadBalancerList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'LoadBalancer',
      ],
    ],
    'LoadBalancerListenersDescription' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Listener',
      ],
    ],
    'MaxRecords' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 1000,
    ],
    'Message' => [
      'type' => 'string',
    ],
    'OperationInProgressException' => [
      'type' => 'structure',
      'members' => [
      ],
      'error' => [
        'code' => 'OperationInProgressFailure',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'OptionNamespace' => [
      'type' => 'string',
    ],
    'OptionRestrictionMaxLength' => [
      'type' => 'integer',
    ],
    'OptionRestrictionMaxValue' => [
      'type' => 'integer',
    ],
    'OptionRestrictionMinValue' => [
      'type' => 'integer',
    ],
    'OptionRestrictionRegex' => [
      'type' => 'structure',
      'members' => [
        'Pattern' => [
          'shape' => 'RegexPattern',
        ],
        'Label' => [
          'shape' => 'RegexLabel',
        ],
      ],
    ],
    'OptionSpecification' => [
      'type' => 'structure',
      'members' => [
        'Namespace' => [
          'shape' => 'OptionNamespace',
        ],
        'OptionName' => [
          'shape' => 'ConfigurationOptionName',
        ],
      ],
    ],
    'OptionsSpecifierList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'OptionSpecification',
      ],
    ],
    'Queue' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'URL' => [
          'shape' => 'String',
        ],
      ],
    ],
    'QueueList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Queue',
      ],
    ],
    'RebuildEnvironmentMessage' => [
      'type' => 'structure',
      'members' => [
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
      ],
    ],
    'RegexLabel' => [
      'type' => 'string',
    ],
    'RegexPattern' => [
      'type' => 'string',
    ],
    'RequestEnvironmentInfoMessage' => [
      'type' => 'structure',
      'required' => [
        'InfoType',
      ],
      'members' => [
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'InfoType' => [
          'shape' => 'EnvironmentInfoType',
        ],
      ],
    ],
    'RequestId' => [
      'type' => 'string',
    ],
    'ResourceId' => [
      'type' => 'string',
    ],
    'RestartAppServerMessage' => [
      'type' => 'structure',
      'members' => [
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
      ],
    ],
    'RetrieveEnvironmentInfoMessage' => [
      'type' => 'structure',
      'required' => [
        'InfoType',
      ],
      'members' => [
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'InfoType' => [
          'shape' => 'EnvironmentInfoType',
        ],
      ],
    ],
    'RetrieveEnvironmentInfoResultMessage' => [
      'type' => 'structure',
      'members' => [
        'EnvironmentInfo' => [
          'shape' => 'EnvironmentInfoDescriptionList',
        ],
      ],
    ],
    'S3Bucket' => [
      'type' => 'string',
      'max' => 255,
    ],
    'S3Key' => [
      'type' => 'string',
      'max' => 1024,
    ],
    'S3Location' => [
      'type' => 'structure',
      'members' => [
        'S3Bucket' => [
          'shape' => 'S3Bucket',
        ],
        'S3Key' => [
          'shape' => 'S3Key',
        ],
      ],
    ],
    'S3LocationNotInServiceRegionException' => [
      'type' => 'structure',
      'members' => [
      ],
      'error' => [
        'code' => 'S3LocationNotInServiceRegionException',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'S3SubscriptionRequiredException' => [
      'type' => 'structure',
      'members' => [
      ],
      'error' => [
        'code' => 'S3SubscriptionRequiredException',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'SampleTimestamp' => [
      'type' => 'timestamp',
    ],
    'SolutionStackDescription' => [
      'type' => 'structure',
      'members' => [
        'SolutionStackName' => [
          'shape' => 'SolutionStackName',
        ],
        'PermittedFileTypes' => [
          'shape' => 'SolutionStackFileTypeList',
        ],
      ],
    ],
    'SolutionStackFileTypeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'FileTypeExtension',
      ],
    ],
    'SolutionStackName' => [
      'type' => 'string',
      'max' => 100,
    ],
    'SourceBundleDeletionException' => [
      'type' => 'structure',
      'members' => [
      ],
      'error' => [
        'code' => 'SourceBundleDeletionFailure',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'SourceConfiguration' => [
      'type' => 'structure',
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
      ],
    ],
    'String' => [
      'type' => 'string',
    ],
    'SwapEnvironmentCNAMEsMessage' => [
      'type' => 'structure',
      'members' => [
        'SourceEnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'SourceEnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'DestinationEnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'DestinationEnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
      ],
    ],
    'Tag' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'TagKey',
        ],
        'Value' => [
          'shape' => 'TagValue',
        ],
      ],
    ],
    'TagKey' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
    ],
    'TagValue' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'Tags' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Tag',
      ],
    ],
    'TerminateEnvForce' => [
      'type' => 'boolean',
    ],
    'TerminateEnvironmentMessage' => [
      'type' => 'structure',
      'members' => [
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'TerminateResources' => [
          'shape' => 'TerminateEnvironmentResources',
        ],
      ],
    ],
    'TerminateEnvironmentResources' => [
      'type' => 'boolean',
    ],
    'TimeFilterEnd' => [
      'type' => 'timestamp',
    ],
    'TimeFilterStart' => [
      'type' => 'timestamp',
    ],
    'Token' => [
      'type' => 'string',
    ],
    'TooManyApplicationVersionsException' => [
      'type' => 'structure',
      'members' => [
      ],
      'exception' => true,
    ],
    'TooManyApplicationsException' => [
      'type' => 'structure',
      'members' => [
      ],
      'error' => [
        'code' => 'TooManyApplicationsException',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'TooManyBucketsException' => [
      'type' => 'structure',
      'members' => [
      ],
      'error' => [
        'code' => 'TooManyBucketsException',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'TooManyConfigurationTemplatesException' => [
      'type' => 'structure',
      'members' => [
      ],
      'error' => [
        'code' => 'TooManyConfigurationTemplatesException',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'TooManyEnvironmentsException' => [
      'type' => 'structure',
      'members' => [
      ],
      'error' => [
        'code' => 'TooManyEnvironmentsException',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'Trigger' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'ResourceId',
        ],
      ],
    ],
    'TriggerList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Trigger',
      ],
    ],
    'UpdateApplicationMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
      ],
    ],
    'UpdateApplicationVersionMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
        'VersionLabel',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
      ],
    ],
    'UpdateConfigurationTemplateMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
        'TemplateName',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'OptionSettings' => [
          'shape' => 'ConfigurationOptionSettingsList',
        ],
        'OptionsToRemove' => [
          'shape' => 'OptionsSpecifierList',
        ],
      ],
    ],
    'UpdateDate' => [
      'type' => 'timestamp',
    ],
    'UpdateEnvironmentMessage' => [
      'type' => 'structure',
      'members' => [
        'EnvironmentId' => [
          'shape' => 'EnvironmentId',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'Tier' => [
          'shape' => 'EnvironmentTier',
        ],
        'VersionLabel' => [
          'shape' => 'VersionLabel',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'OptionSettings' => [
          'shape' => 'ConfigurationOptionSettingsList',
        ],
        'OptionsToRemove' => [
          'shape' => 'OptionsSpecifierList',
        ],
      ],
    ],
    'UserDefinedOption' => [
      'type' => 'boolean',
    ],
    'ValidateConfigurationSettingsMessage' => [
      'type' => 'structure',
      'required' => [
        'ApplicationName',
        'OptionSettings',
      ],
      'members' => [
        'ApplicationName' => [
          'shape' => 'ApplicationName',
        ],
        'TemplateName' => [
          'shape' => 'ConfigurationTemplateName',
        ],
        'EnvironmentName' => [
          'shape' => 'EnvironmentName',
        ],
        'OptionSettings' => [
          'shape' => 'ConfigurationOptionSettingsList',
        ],
      ],
    ],
    'ValidationMessage' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'ValidationMessageString',
        ],
        'Severity' => [
          'shape' => 'ValidationSeverity',
        ],
        'Namespace' => [
          'shape' => 'OptionNamespace',
        ],
        'OptionName' => [
          'shape' => 'ConfigurationOptionName',
        ],
      ],
    ],
    'ValidationMessageString' => [
      'type' => 'string',
    ],
    'ValidationMessagesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ValidationMessage',
      ],
    ],
    'ValidationSeverity' => [
      'type' => 'string',
      'enum' => [
        'error',
        'warning',
      ],
    ],
    'VersionLabel' => [
      'type' => 'string',
      'min' => 1,
      'max' => 100,
    ],
    'VersionLabelsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VersionLabel',
      ],
    ],
  ],
];
