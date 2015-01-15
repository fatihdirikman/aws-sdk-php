<?php return [
  'metadata' => [
    'apiVersion' => '2014-11-13',
    'endpointPrefix' => 'ecs',
    'serviceAbbreviation' => 'Amazon ECS',
    'serviceFullName' => 'Amazon EC2 Container Service',
    'signatureVersion' => 'v4',
    'signingName' => 'ecs',
    'xmlNamespace' => 'http://ecs.amazonaws.com/doc/2014-11-13/',
    'protocol' => 'query',
  ],
  'operations' => [
    'CreateCluster' => [
      'name' => 'CreateCluster',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateClusterRequest',
      ],
      'output' => [
        'shape' => 'CreateClusterResponse',
        'resultWrapper' => 'CreateClusterResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'DeleteCluster' => [
      'name' => 'DeleteCluster',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteClusterRequest',
      ],
      'output' => [
        'shape' => 'DeleteClusterResponse',
        'resultWrapper' => 'DeleteClusterResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'DeregisterContainerInstance' => [
      'name' => 'DeregisterContainerInstance',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeregisterContainerInstanceRequest',
      ],
      'output' => [
        'shape' => 'DeregisterContainerInstanceResponse',
        'resultWrapper' => 'DeregisterContainerInstanceResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'DeregisterTaskDefinition' => [
      'name' => 'DeregisterTaskDefinition',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeregisterTaskDefinitionRequest',
      ],
      'output' => [
        'shape' => 'DeregisterTaskDefinitionResponse',
        'resultWrapper' => 'DeregisterTaskDefinitionResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeClusters' => [
      'name' => 'DescribeClusters',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeClustersRequest',
      ],
      'output' => [
        'shape' => 'DescribeClustersResponse',
        'resultWrapper' => 'DescribeClustersResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeContainerInstances' => [
      'name' => 'DescribeContainerInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeContainerInstancesRequest',
      ],
      'output' => [
        'shape' => 'DescribeContainerInstancesResponse',
        'resultWrapper' => 'DescribeContainerInstancesResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeTaskDefinition' => [
      'name' => 'DescribeTaskDefinition',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTaskDefinitionRequest',
      ],
      'output' => [
        'shape' => 'DescribeTaskDefinitionResponse',
        'resultWrapper' => 'DescribeTaskDefinitionResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeTasks' => [
      'name' => 'DescribeTasks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTasksRequest',
      ],
      'output' => [
        'shape' => 'DescribeTasksResponse',
        'resultWrapper' => 'DescribeTasksResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'DiscoverPollEndpoint' => [
      'name' => 'DiscoverPollEndpoint',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DiscoverPollEndpointRequest',
      ],
      'output' => [
        'shape' => 'DiscoverPollEndpointResponse',
        'resultWrapper' => 'DiscoverPollEndpointResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
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
        'shape' => 'ListClustersRequest',
      ],
      'output' => [
        'shape' => 'ListClustersResponse',
        'resultWrapper' => 'ListClustersResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'ListContainerInstances' => [
      'name' => 'ListContainerInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListContainerInstancesRequest',
      ],
      'output' => [
        'shape' => 'ListContainerInstancesResponse',
        'resultWrapper' => 'ListContainerInstancesResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'ListTaskDefinitions' => [
      'name' => 'ListTaskDefinitions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListTaskDefinitionsRequest',
      ],
      'output' => [
        'shape' => 'ListTaskDefinitionsResponse',
        'resultWrapper' => 'ListTaskDefinitionsResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'ListTasks' => [
      'name' => 'ListTasks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListTasksRequest',
      ],
      'output' => [
        'shape' => 'ListTasksResponse',
        'resultWrapper' => 'ListTasksResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'RegisterContainerInstance' => [
      'name' => 'RegisterContainerInstance',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RegisterContainerInstanceRequest',
      ],
      'output' => [
        'shape' => 'RegisterContainerInstanceResponse',
        'resultWrapper' => 'RegisterContainerInstanceResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'RegisterTaskDefinition' => [
      'name' => 'RegisterTaskDefinition',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RegisterTaskDefinitionRequest',
      ],
      'output' => [
        'shape' => 'RegisterTaskDefinitionResponse',
        'resultWrapper' => 'RegisterTaskDefinitionResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'RunTask' => [
      'name' => 'RunTask',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RunTaskRequest',
      ],
      'output' => [
        'shape' => 'RunTaskResponse',
        'resultWrapper' => 'RunTaskResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'StartTask' => [
      'name' => 'StartTask',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StartTaskRequest',
      ],
      'output' => [
        'shape' => 'StartTaskResponse',
        'resultWrapper' => 'StartTaskResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'StopTask' => [
      'name' => 'StopTask',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StopTaskRequest',
      ],
      'output' => [
        'shape' => 'StopTaskResponse',
        'resultWrapper' => 'StopTaskResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'SubmitContainerStateChange' => [
      'name' => 'SubmitContainerStateChange',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SubmitContainerStateChangeRequest',
      ],
      'output' => [
        'shape' => 'SubmitContainerStateChangeResponse',
        'resultWrapper' => 'SubmitContainerStateChangeResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
    'SubmitTaskStateChange' => [
      'name' => 'SubmitTaskStateChange',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SubmitTaskStateChangeRequest',
      ],
      'output' => [
        'shape' => 'SubmitTaskStateChangeResponse',
        'resultWrapper' => 'SubmitTaskStateChangeResult',
      ],
      'errors' => [
        [
          'shape' => 'ServerException',
          'exception' => true,
        ],
        [
          'shape' => 'ClientException',
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'Boolean' => [
      'type' => 'boolean',
    ],
    'BoxedBoolean' => [
      'type' => 'boolean',
      'box' => true,
    ],
    'BoxedInteger' => [
      'type' => 'integer',
      'box' => true,
    ],
    'ClientException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'exception' => true,
    ],
    'Cluster' => [
      'type' => 'structure',
      'members' => [
        'clusterArn' => [
          'shape' => 'String',
        ],
        'clusterName' => [
          'shape' => 'String',
        ],
        'status' => [
          'shape' => 'String',
        ],
      ],
    ],
    'Clusters' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Cluster',
      ],
    ],
    'Container' => [
      'type' => 'structure',
      'members' => [
        'containerArn' => [
          'shape' => 'String',
        ],
        'taskArn' => [
          'shape' => 'String',
        ],
        'name' => [
          'shape' => 'String',
        ],
        'lastStatus' => [
          'shape' => 'String',
        ],
        'exitCode' => [
          'shape' => 'BoxedInteger',
        ],
        'reason' => [
          'shape' => 'String',
        ],
        'networkBindings' => [
          'shape' => 'NetworkBindings',
        ],
      ],
    ],
    'ContainerDefinition' => [
      'type' => 'structure',
      'members' => [
        'name' => [
          'shape' => 'String',
        ],
        'image' => [
          'shape' => 'String',
        ],
        'cpu' => [
          'shape' => 'Integer',
        ],
        'memory' => [
          'shape' => 'Integer',
        ],
        'links' => [
          'shape' => 'StringList',
        ],
        'portMappings' => [
          'shape' => 'PortMappingList',
        ],
        'essential' => [
          'shape' => 'BoxedBoolean',
        ],
        'entryPoint' => [
          'shape' => 'StringList',
        ],
        'command' => [
          'shape' => 'StringList',
        ],
        'environment' => [
          'shape' => 'EnvironmentVariables',
        ],
      ],
    ],
    'ContainerDefinitions' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ContainerDefinition',
      ],
    ],
    'ContainerInstance' => [
      'type' => 'structure',
      'members' => [
        'containerInstanceArn' => [
          'shape' => 'String',
        ],
        'ec2InstanceId' => [
          'shape' => 'String',
        ],
        'remainingResources' => [
          'shape' => 'Resources',
        ],
        'registeredResources' => [
          'shape' => 'Resources',
        ],
        'status' => [
          'shape' => 'String',
        ],
        'agentConnected' => [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'ContainerInstances' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ContainerInstance',
      ],
    ],
    'ContainerOverride' => [
      'type' => 'structure',
      'members' => [
        'name' => [
          'shape' => 'String',
        ],
        'command' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'ContainerOverrides' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ContainerOverride',
      ],
    ],
    'Containers' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Container',
      ],
    ],
    'CreateClusterRequest' => [
      'type' => 'structure',
      'members' => [
        'clusterName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateClusterResponse' => [
      'type' => 'structure',
      'members' => [
        'cluster' => [
          'shape' => 'Cluster',
        ],
      ],
    ],
    'DeleteClusterRequest' => [
      'type' => 'structure',
      'required' => [
        'cluster',
      ],
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteClusterResponse' => [
      'type' => 'structure',
      'members' => [
        'cluster' => [
          'shape' => 'Cluster',
        ],
      ],
    ],
    'DeregisterContainerInstanceRequest' => [
      'type' => 'structure',
      'required' => [
        'containerInstance',
      ],
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'containerInstance' => [
          'shape' => 'String',
        ],
        'force' => [
          'shape' => 'BoxedBoolean',
        ],
      ],
    ],
    'DeregisterContainerInstanceResponse' => [
      'type' => 'structure',
      'members' => [
        'containerInstance' => [
          'shape' => 'ContainerInstance',
        ],
      ],
    ],
    'DeregisterTaskDefinitionRequest' => [
      'type' => 'structure',
      'required' => [
        'taskDefinition',
      ],
      'members' => [
        'taskDefinition' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeregisterTaskDefinitionResponse' => [
      'type' => 'structure',
      'members' => [
        'taskDefinition' => [
          'shape' => 'TaskDefinition',
        ],
      ],
    ],
    'DescribeClustersRequest' => [
      'type' => 'structure',
      'members' => [
        'clusters' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'DescribeClustersResponse' => [
      'type' => 'structure',
      'members' => [
        'clusters' => [
          'shape' => 'Clusters',
        ],
        'failures' => [
          'shape' => 'Failures',
        ],
      ],
    ],
    'DescribeContainerInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'containerInstances',
      ],
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'containerInstances' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'DescribeContainerInstancesResponse' => [
      'type' => 'structure',
      'members' => [
        'containerInstances' => [
          'shape' => 'ContainerInstances',
        ],
        'failures' => [
          'shape' => 'Failures',
        ],
      ],
    ],
    'DescribeTaskDefinitionRequest' => [
      'type' => 'structure',
      'required' => [
        'taskDefinition',
      ],
      'members' => [
        'taskDefinition' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeTaskDefinitionResponse' => [
      'type' => 'structure',
      'members' => [
        'taskDefinition' => [
          'shape' => 'TaskDefinition',
        ],
      ],
    ],
    'DescribeTasksRequest' => [
      'type' => 'structure',
      'required' => [
        'tasks',
      ],
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'tasks' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'DescribeTasksResponse' => [
      'type' => 'structure',
      'members' => [
        'tasks' => [
          'shape' => 'Tasks',
        ],
        'failures' => [
          'shape' => 'Failures',
        ],
      ],
    ],
    'DiscoverPollEndpointRequest' => [
      'type' => 'structure',
      'members' => [
        'containerInstance' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DiscoverPollEndpointResponse' => [
      'type' => 'structure',
      'members' => [
        'endpoint' => [
          'shape' => 'String',
        ],
      ],
    ],
    'Double' => [
      'type' => 'double',
    ],
    'EnvironmentVariables' => [
      'type' => 'list',
      'member' => [
        'shape' => 'KeyValuePair',
      ],
    ],
    'Failure' => [
      'type' => 'structure',
      'members' => [
        'arn' => [
          'shape' => 'String',
        ],
        'reason' => [
          'shape' => 'String',
        ],
      ],
    ],
    'Failures' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Failure',
      ],
    ],
    'Integer' => [
      'type' => 'integer',
    ],
    'KeyValuePair' => [
      'type' => 'structure',
      'members' => [
        'name' => [
          'shape' => 'String',
        ],
        'value' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ListClustersRequest' => [
      'type' => 'structure',
      'members' => [
        'nextToken' => [
          'shape' => 'String',
        ],
        'maxResults' => [
          'shape' => 'BoxedInteger',
        ],
      ],
    ],
    'ListClustersResponse' => [
      'type' => 'structure',
      'members' => [
        'clusterArns' => [
          'shape' => 'StringList',
        ],
        'nextToken' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ListContainerInstancesRequest' => [
      'type' => 'structure',
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'nextToken' => [
          'shape' => 'String',
        ],
        'maxResults' => [
          'shape' => 'BoxedInteger',
        ],
      ],
    ],
    'ListContainerInstancesResponse' => [
      'type' => 'structure',
      'members' => [
        'containerInstanceArns' => [
          'shape' => 'StringList',
        ],
        'nextToken' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ListTaskDefinitionsRequest' => [
      'type' => 'structure',
      'members' => [
        'familyPrefix' => [
          'shape' => 'String',
        ],
        'nextToken' => [
          'shape' => 'String',
        ],
        'maxResults' => [
          'shape' => 'BoxedInteger',
        ],
      ],
    ],
    'ListTaskDefinitionsResponse' => [
      'type' => 'structure',
      'members' => [
        'taskDefinitionArns' => [
          'shape' => 'StringList',
        ],
        'nextToken' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ListTasksRequest' => [
      'type' => 'structure',
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'containerInstance' => [
          'shape' => 'String',
        ],
        'family' => [
          'shape' => 'String',
        ],
        'nextToken' => [
          'shape' => 'String',
        ],
        'maxResults' => [
          'shape' => 'BoxedInteger',
        ],
      ],
    ],
    'ListTasksResponse' => [
      'type' => 'structure',
      'members' => [
        'taskArns' => [
          'shape' => 'StringList',
        ],
        'nextToken' => [
          'shape' => 'String',
        ],
      ],
    ],
    'Long' => [
      'type' => 'long',
    ],
    'NetworkBinding' => [
      'type' => 'structure',
      'members' => [
        'bindIP' => [
          'shape' => 'String',
        ],
        'containerPort' => [
          'shape' => 'BoxedInteger',
        ],
        'hostPort' => [
          'shape' => 'BoxedInteger',
        ],
      ],
    ],
    'NetworkBindings' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NetworkBinding',
      ],
    ],
    'PortMapping' => [
      'type' => 'structure',
      'members' => [
        'containerPort' => [
          'shape' => 'Integer',
        ],
        'hostPort' => [
          'shape' => 'Integer',
        ],
      ],
    ],
    'PortMappingList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PortMapping',
      ],
    ],
    'RegisterContainerInstanceRequest' => [
      'type' => 'structure',
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'instanceIdentityDocument' => [
          'shape' => 'String',
        ],
        'instanceIdentityDocumentSignature' => [
          'shape' => 'String',
        ],
        'totalResources' => [
          'shape' => 'Resources',
        ],
      ],
    ],
    'RegisterContainerInstanceResponse' => [
      'type' => 'structure',
      'members' => [
        'containerInstance' => [
          'shape' => 'ContainerInstance',
        ],
      ],
    ],
    'RegisterTaskDefinitionRequest' => [
      'type' => 'structure',
      'required' => [
        'family',
        'containerDefinitions',
      ],
      'members' => [
        'family' => [
          'shape' => 'String',
        ],
        'containerDefinitions' => [
          'shape' => 'ContainerDefinitions',
        ],
      ],
    ],
    'RegisterTaskDefinitionResponse' => [
      'type' => 'structure',
      'members' => [
        'taskDefinition' => [
          'shape' => 'TaskDefinition',
        ],
      ],
    ],
    'Resource' => [
      'type' => 'structure',
      'members' => [
        'name' => [
          'shape' => 'String',
        ],
        'type' => [
          'shape' => 'String',
        ],
        'doubleValue' => [
          'shape' => 'Double',
        ],
        'longValue' => [
          'shape' => 'Long',
        ],
        'integerValue' => [
          'shape' => 'Integer',
        ],
        'stringSetValue' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'Resources' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Resource',
      ],
    ],
    'RunTaskRequest' => [
      'type' => 'structure',
      'required' => [
        'taskDefinition',
      ],
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'taskDefinition' => [
          'shape' => 'String',
        ],
        'overrides' => [
          'shape' => 'TaskOverride',
        ],
        'count' => [
          'shape' => 'BoxedInteger',
        ],
      ],
    ],
    'RunTaskResponse' => [
      'type' => 'structure',
      'members' => [
        'tasks' => [
          'shape' => 'Tasks',
        ],
        'failures' => [
          'shape' => 'Failures',
        ],
      ],
    ],
    'ServerException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'exception' => true,
    ],
    'StartTaskRequest' => [
      'type' => 'structure',
      'required' => [
        'taskDefinition',
        'containerInstances',
      ],
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'taskDefinition' => [
          'shape' => 'String',
        ],
        'overrides' => [
          'shape' => 'TaskOverride',
        ],
        'containerInstances' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'StartTaskResponse' => [
      'type' => 'structure',
      'members' => [
        'tasks' => [
          'shape' => 'Tasks',
        ],
        'failures' => [
          'shape' => 'Failures',
        ],
      ],
    ],
    'StopTaskRequest' => [
      'type' => 'structure',
      'required' => [
        'task',
      ],
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'task' => [
          'shape' => 'String',
        ],
      ],
    ],
    'StopTaskResponse' => [
      'type' => 'structure',
      'members' => [
        'task' => [
          'shape' => 'Task',
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
    'SubmitContainerStateChangeRequest' => [
      'type' => 'structure',
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'task' => [
          'shape' => 'String',
        ],
        'containerName' => [
          'shape' => 'String',
        ],
        'status' => [
          'shape' => 'String',
        ],
        'exitCode' => [
          'shape' => 'BoxedInteger',
        ],
        'reason' => [
          'shape' => 'String',
        ],
        'networkBindings' => [
          'shape' => 'NetworkBindings',
        ],
      ],
    ],
    'SubmitContainerStateChangeResponse' => [
      'type' => 'structure',
      'members' => [
        'acknowledgment' => [
          'shape' => 'String',
        ],
      ],
    ],
    'SubmitTaskStateChangeRequest' => [
      'type' => 'structure',
      'members' => [
        'cluster' => [
          'shape' => 'String',
        ],
        'task' => [
          'shape' => 'String',
        ],
        'status' => [
          'shape' => 'String',
        ],
        'reason' => [
          'shape' => 'String',
        ],
      ],
    ],
    'SubmitTaskStateChangeResponse' => [
      'type' => 'structure',
      'members' => [
        'acknowledgment' => [
          'shape' => 'String',
        ],
      ],
    ],
    'Task' => [
      'type' => 'structure',
      'members' => [
        'taskArn' => [
          'shape' => 'String',
        ],
        'clusterArn' => [
          'shape' => 'String',
        ],
        'taskDefinitionArn' => [
          'shape' => 'String',
        ],
        'containerInstanceArn' => [
          'shape' => 'String',
        ],
        'overrides' => [
          'shape' => 'TaskOverride',
        ],
        'lastStatus' => [
          'shape' => 'String',
        ],
        'desiredStatus' => [
          'shape' => 'String',
        ],
        'containers' => [
          'shape' => 'Containers',
        ],
      ],
    ],
    'TaskDefinition' => [
      'type' => 'structure',
      'members' => [
        'taskDefinitionArn' => [
          'shape' => 'String',
        ],
        'containerDefinitions' => [
          'shape' => 'ContainerDefinitions',
        ],
        'family' => [
          'shape' => 'String',
        ],
        'revision' => [
          'shape' => 'Integer',
        ],
      ],
    ],
    'TaskOverride' => [
      'type' => 'structure',
      'members' => [
        'containerOverrides' => [
          'shape' => 'ContainerOverrides',
        ],
      ],
    ],
    'Tasks' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Task',
      ],
    ],
  ],
];
