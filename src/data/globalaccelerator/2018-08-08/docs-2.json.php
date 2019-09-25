<?php
// This file was auto-generated from sdk-root/src/data/globalaccelerator/2018-08-08/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>AWS Global Accelerator</fullname> <p>This is the <i>AWS Global Accelerator API Reference</i>. This guide is for developers who need detailed information about AWS Global Accelerator API actions, data types, and errors. For more information about Global Accelerator features, see the <a href="https://docs.aws.amazon.com/global-accelerator/latest/dg/Welcome.html">AWS Global Accelerator Developer Guide</a>. </p> <p>AWS Global Accelerator is a network layer service in which you create accelerators to improve availability and performance for internet applications used by a global audience. </p> <important> <p>You must specify the US-West-2 (Oregon) Region to create or update accelerators.</p> </important> <p>Global Accelerator provides you with static IP addresses that you associate with your accelerator. These IP addresses are anycast from the AWS edge network and distribute incoming application traffic across multiple endpoint resources in multiple AWS Regions, which increases the availability of your applications. Endpoints can be Elastic IP addresses, Network Load Balancers, and Application Load Balancers that are located in one AWS Region or multiple Regions.</p> <p>Global Accelerator uses the AWS global network to route traffic to the optimal regional endpoint based on health, client location, and policies that you configure. The service reacts instantly to changes in health or configuration to ensure that internet traffic from clients is directed to only healthy endpoints.</p> <p>Global Accelerator includes components that work together to help you improve performance and availability for your applications:</p> <dl> <dt>Static IP address</dt> <dd> <p>AWS Global Accelerator provides you with a set of static IP addresses which are anycast from the AWS edge network and serve as the single fixed entry points for your clients. If you already have Elastic Load Balancing or Elastic IP address resources set up for your applications, you can easily add those to Global Accelerator to allow the resources to be accessed by a Global Accelerator static IP address.</p> </dd> <dt>Accelerator</dt> <dd> <p>An accelerator directs traffic to optimal endpoints over the AWS global network to improve availability and performance for your internet applications that have a global audience. Each accelerator includes one or more listeners.</p> </dd> <dt>Network zone</dt> <dd> <p>A network zone services the static IP addresses for your accelerator from a unique IP subnet. Similar to an AWS Availability Zone, a network zone is an isolated unit with its own set of physical infrastructure. When you configure an accelerator, Global Accelerator allocates two IPv4 addresses for it. If one IP address from a network zone becomes unavailable due to IP address blocking by certain client networks, or network disruptions, then client applications can retry on the healthy static IP address from the other isolated network zone.</p> </dd> <dt>Listener</dt> <dd> <p>A listener processes inbound connections from clients to Global Accelerator, based on the protocol and port that you configure. Each listener has one or more endpoint groups associated with it, and traffic is forwarded to endpoints in one of the groups. You associate endpoint groups with listeners by specifying the Regions that you want to distribute traffic to. Traffic is distributed to optimal endpoints within the endpoint groups associated with a listener.</p> </dd> <dt>Endpoint group</dt> <dd> <p>Each endpoint group is associated with a specific AWS Region. Endpoint groups include one or more endpoints in the Region. You can increase or reduce the percentage of traffic that would be otherwise directed to an endpoint group by adjusting a setting called a <i>traffic dial</i>. The traffic dial lets you easily do performance testing or blue/green deployment testing for new releases across different AWS Regions, for example. </p> </dd> <dt>Endpoint</dt> <dd> <p>An endpoint is an Elastic IP address, Network Load Balancer, or Application Load Balancer. Traffic is routed to endpoints based on several factors, including the geo-proximity to the user, the health of the endpoint, and the configuration options that you choose, such as endpoint weights. For each endpoint, you can configure weights, which are numbers that you can use to specify the proportion of traffic to route to each one. This can be useful, for example, to do performance testing within a Region.</p> </dd> </dl>', 'operations' => [ 'CreateAccelerator' => '<p>Create an accelerator. An accelerator includes one or more listeners that process inbound connections and direct traffic to one or more endpoint groups, each of which includes endpoints, such as Network Load Balancers. To see an AWS CLI example of creating an accelerator, scroll down to <b>Example</b>.</p> <important> <p>You must specify the US-West-2 (Oregon) Region to create or update accelerators.</p> </important>', 'CreateEndpointGroup' => '<p>Create an endpoint group for the specified listener. An endpoint group is a collection of endpoints in one AWS Region. To see an AWS CLI example of creating an endpoint group, scroll down to <b>Example</b>.</p>', 'CreateListener' => '<p>Create a listener to process inbound connections from clients to an accelerator. Connections arrive to assigned static IP addresses on a port, port range, or list of port ranges that you specify. To see an AWS CLI example of creating a listener, scroll down to <b>Example</b>.</p>', 'DeleteAccelerator' => '<p>Delete an accelerator. Note: before you can delete an accelerator, you must disable it and remove all dependent resources (listeners and endpoint groups).</p>', 'DeleteEndpointGroup' => '<p>Delete an endpoint group from a listener.</p>', 'DeleteListener' => '<p>Delete a listener from an accelerator.</p>', 'DescribeAccelerator' => '<p>Describe an accelerator. To see an AWS CLI example of describing an accelerator, scroll down to <b>Example</b>.</p>', 'DescribeAcceleratorAttributes' => '<p>Describe the attributes of an accelerator.</p>', 'DescribeEndpointGroup' => '<p>Describe an endpoint group.</p>', 'DescribeListener' => '<p>Describe a listener.</p>', 'ListAccelerators' => '<p>List the accelerators for an AWS account.</p>', 'ListEndpointGroups' => '<p>List the endpoint groups that are associated with a listener.</p>', 'ListListeners' => '<p>List the listeners for an accelerator.</p>', 'UpdateAccelerator' => '<p>Update an accelerator. To see an AWS CLI example of updating an accelerator, scroll down to <b>Example</b>.</p> <important> <p>You must specify the US-West-2 (Oregon) Region to create or update accelerators.</p> </important>', 'UpdateAcceleratorAttributes' => '<p>Update the attributes for an accelerator. To see an AWS CLI example of updating an accelerator to enable flow logs, scroll down to <b>Example</b>.</p>', 'UpdateEndpointGroup' => '<p>Update an endpoint group. To see an AWS CLI example of updating an endpoint group, scroll down to <b>Example</b>.</p>', 'UpdateListener' => '<p>Update a listener.</p>', ], 'shapes' => [ 'Accelerator' => [ 'base' => '<p>An accelerator is a complex type that includes one or more listeners that process inbound connections and then direct traffic to one or more endpoint groups, each of which includes endpoints, such as load balancers.</p>', 'refs' => [ 'Accelerators$member' => NULL, 'CreateAcceleratorResponse$Accelerator' => '<p>The accelerator that is created by specifying a listener and the supported IP address types.</p>', 'DescribeAcceleratorResponse$Accelerator' => '<p>The description of the accelerator.</p>', 'UpdateAcceleratorResponse$Accelerator' => '<p>Information about the updated accelerator.</p>', ], ], 'AcceleratorAttributes' => [ 'base' => '<p>Attributes of an accelerator.</p>', 'refs' => [ 'DescribeAcceleratorAttributesResponse$AcceleratorAttributes' => '<p>The attributes of the accelerator.</p>', 'UpdateAcceleratorAttributesResponse$AcceleratorAttributes' => '<p>Updated attributes for the accelerator.</p>', ], ], 'AcceleratorNotDisabledException' => [ 'base' => '<p>The accelerator that you specified could not be disabled.</p>', 'refs' => [], ], 'AcceleratorNotFoundException' => [ 'base' => '<p>The accelerator that you specified doesn\'t exist.</p>', 'refs' => [], ], 'AcceleratorStatus' => [ 'base' => NULL, 'refs' => [ 'Accelerator$Status' => '<p>Describes the deployment status of the accelerator.</p>', ], ], 'Accelerators' => [ 'base' => NULL, 'refs' => [ 'ListAcceleratorsResponse$Accelerators' => '<p>The list of accelerators for a customer account.</p>', ], ], 'AccessDeniedException' => [ 'base' => '<p>You don\'t have access permission.</p>', 'refs' => [], ], 'AssociatedEndpointGroupFoundException' => [ 'base' => '<p>The listener that you specified has an endpoint group associated with it. You must remove all dependent resources from a listener before you can delete it.</p>', 'refs' => [], ], 'AssociatedListenerFoundException' => [ 'base' => '<p>The accelerator that you specified has a listener associated with it. You must remove all dependent resources from an accelerator before you can delete it.</p>', 'refs' => [], ], 'ClientAffinity' => [ 'base' => NULL, 'refs' => [ 'CreateListenerRequest$ClientAffinity' => '<p>Client affinity lets you direct all requests from a user to the same endpoint, if you have stateful applications, regardless of the port and protocol of the client request. Clienty affinity gives you control over whether to always route each client to the same specific endpoint.</p> <p>AWS Global Accelerator uses a consistent-flow hashing algorithm to choose the optimal endpoint for a connection. If client affinity is <code>NONE</code>, Global Accelerator uses the "five-tuple" (5-tuple) properties—source IP address, source port, destination IP address, destination port, and protocol—to select the hash value, and then chooses the best endpoint. However, with this setting, if someone uses different ports to connect to Global Accelerator, their connections might not be always routed to the same endpoint because the hash value changes. </p> <p>If you want a given client to always be routed to the same endpoint, set client affinity to <code>SOURCE_IP</code> instead. When you use the <code>SOURCE_IP</code> setting, Global Accelerator uses the "two-tuple" (2-tuple) properties— source (client) IP address and destination IP address—to select the hash value.</p> <p>The default value is <code>NONE</code>.</p>', 'Listener$ClientAffinity' => '<p>Client affinity lets you direct all requests from a user to the same endpoint, if you have stateful applications, regardless of the port and protocol of the client request. Clienty affinity gives you control over whether to always route each client to the same specific endpoint.</p> <p>AWS Global Accelerator uses a consistent-flow hashing algorithm to choose the optimal endpoint for a connection. If client affinity is <code>NONE</code>, Global Accelerator uses the "five-tuple" (5-tuple) properties—source IP address, source port, destination IP address, destination port, and protocol—to select the hash value, and then chooses the best endpoint. However, with this setting, if someone uses different ports to connect to Global Accelerator, their connections might not be always routed to the same endpoint because the hash value changes. </p> <p>If you want a given client to always be routed to the same endpoint, set client affinity to <code>SOURCE_IP</code> instead. When you use the <code>SOURCE_IP</code> setting, Global Accelerator uses the "two-tuple" (2-tuple) properties— source (client) IP address and destination IP address—to select the hash value.</p> <p>The default value is <code>NONE</code>.</p>', 'UpdateListenerRequest$ClientAffinity' => '<p>Client affinity lets you direct all requests from a user to the same endpoint, if you have stateful applications, regardless of the port and protocol of the client request. Clienty affinity gives you control over whether to always route each client to the same specific endpoint.</p> <p>AWS Global Accelerator uses a consistent-flow hashing algorithm to choose the optimal endpoint for a connection. If client affinity is <code>NONE</code>, Global Accelerator uses the "five-tuple" (5-tuple) properties—source IP address, source port, destination IP address, destination port, and protocol—to select the hash value, and then chooses the best endpoint. However, with this setting, if someone uses different ports to connect to Global Accelerator, their connections might not be always routed to the same endpoint because the hash value changes. </p> <p>If you want a given client to always be routed to the same endpoint, set client affinity to <code>SOURCE_IP</code> instead. When you use the <code>SOURCE_IP</code> setting, Global Accelerator uses the "two-tuple" (2-tuple) properties— source (client) IP address and destination IP address—to select the hash value.</p> <p>The default value is <code>NONE</code>.</p>', ], ], 'CreateAcceleratorRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateAcceleratorResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateEndpointGroupRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateEndpointGroupResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateListenerRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateListenerResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteAcceleratorRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteEndpointGroupRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteListenerRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeAcceleratorAttributesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeAcceleratorAttributesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeAcceleratorRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeAcceleratorResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEndpointGroupRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEndpointGroupResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeListenerRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeListenerResponse' => [ 'base' => NULL, 'refs' => [], ], 'EndpointConfiguration' => [ 'base' => '<p>A complex type for endpoints.</p>', 'refs' => [ 'EndpointConfigurations$member' => NULL, ], ], 'EndpointConfigurations' => [ 'base' => NULL, 'refs' => [ 'CreateEndpointGroupRequest$EndpointConfigurations' => '<p>The list of endpoint objects.</p>', 'UpdateEndpointGroupRequest$EndpointConfigurations' => '<p>The list of endpoint objects.</p>', ], ], 'EndpointDescription' => [ 'base' => '<p>A complex type for an endpoint. Each endpoint group can include one or more endpoints, such as load balancers.</p>', 'refs' => [ 'EndpointDescriptions$member' => NULL, ], ], 'EndpointDescriptions' => [ 'base' => NULL, 'refs' => [ 'EndpointGroup$EndpointDescriptions' => '<p>The list of endpoint objects.</p>', ], ], 'EndpointGroup' => [ 'base' => '<p>A complex type for the endpoint group. An AWS Region can have only one endpoint group for a specific listener. </p>', 'refs' => [ 'CreateEndpointGroupResponse$EndpointGroup' => '<p>The information about the endpoint group that was created.</p>', 'DescribeEndpointGroupResponse$EndpointGroup' => '<p>The description of an endpoint group.</p>', 'EndpointGroups$member' => NULL, 'UpdateEndpointGroupResponse$EndpointGroup' => '<p>The information about the endpoint group that was updated.</p>', ], ], 'EndpointGroupAlreadyExistsException' => [ 'base' => '<p>The endpoint group that you specified already exists.</p>', 'refs' => [], ], 'EndpointGroupNotFoundException' => [ 'base' => '<p>The endpoint group that you specified doesn\'t exist.</p>', 'refs' => [], ], 'EndpointGroups' => [ 'base' => NULL, 'refs' => [ 'ListEndpointGroupsResponse$EndpointGroups' => '<p>The list of the endpoint groups associated with a listener.</p>', ], ], 'EndpointWeight' => [ 'base' => NULL, 'refs' => [ 'EndpointConfiguration$Weight' => '<p>The weight associated with the endpoint. When you add weights to endpoints, you configure AWS Global Accelerator to route traffic based on proportions that you specify. For example, you might specify endpoint weights of 4, 5, 5, and 6 (sum=20). The result is that 4/20 of your traffic, on average, is routed to the first endpoint, 5/20 is routed both to the second and third endpoints, and 6/20 is routed to the last endpoint. For more information, see <a href="https://docs.aws.amazon.com/global-accelerator/latest/dg/about-endpoints-endpoint-weights.html">Endpoint Weights</a> in the <i>AWS Global Accelerator Developer Guide</i>.</p>', 'EndpointDescription$Weight' => '<p>The weight associated with the endpoint. When you add weights to endpoints, you configure AWS Global Accelerator to route traffic based on proportions that you specify. For example, you might specify endpoint weights of 4, 5, 5, and 6 (sum=20). The result is that 4/20 of your traffic, on average, is routed to the first endpoint, 5/20 is routed both to the second and third endpoints, and 6/20 is routed to the last endpoint. For more information, see <a href="https://docs.aws.amazon.com/global-accelerator/latest/dg/about-endpoints-endpoint-weights.html">Endpoint Weights</a> in the <i>AWS Global Accelerator Developer Guide</i>. </p>', ], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'AcceleratorNotDisabledException$Message' => NULL, 'AcceleratorNotFoundException$Message' => NULL, 'AccessDeniedException$Message' => NULL, 'AssociatedEndpointGroupFoundException$Message' => NULL, 'AssociatedListenerFoundException$Message' => NULL, 'EndpointGroupAlreadyExistsException$Message' => NULL, 'EndpointGroupNotFoundException$Message' => NULL, 'InternalServiceErrorException$Message' => NULL, 'InvalidArgumentException$Message' => NULL, 'InvalidNextTokenException$Message' => NULL, 'InvalidPortRangeException$Message' => NULL, 'LimitExceededException$Message' => NULL, 'ListenerNotFoundException$Message' => NULL, ], ], 'GenericBoolean' => [ 'base' => NULL, 'refs' => [ 'Accelerator$Enabled' => '<p>Indicates whether the accelerator is enabled. The value is true or false. The default value is true. </p> <p>If the value is set to true, the accelerator cannot be deleted. If set to false, accelerator can be deleted.</p>', 'AcceleratorAttributes$FlowLogsEnabled' => '<p>Indicates whether flow logs are enabled. The default value is false. If the value is true, <code>FlowLogsS3Bucket</code> and <code>FlowLogsS3Prefix</code> must be specified.</p> <p>For more information, see <a href="https://docs.aws.amazon.com/global-accelerator/latest/dg/monitoring-global-accelerator.flow-logs.html">Flow Logs</a> in the <i>AWS Global Accelerator Developer Guide</i>.</p>', 'CreateAcceleratorRequest$Enabled' => '<p>Indicates whether an accelerator is enabled. The value is true or false. The default value is true. </p> <p>If the value is set to true, an accelerator cannot be deleted. If set to false, the accelerator can be deleted.</p>', 'EndpointConfiguration$ClientIPPreservationEnabled' => '<p>Indicates whether client IP address preservation is enabled for an Application Load Balancer endpoint. The value is true or false. The default value is true for new accelerators. </p> <p>If the value is set to true, the client\'s IP address is preserved in the <code>X-Forwarded-For</code> request header as traffic travels to applications on the Application Load Balancer endpoint fronted by the accelerator.</p> <p>For more information, see <a href="https://docs.aws.amazon.com/global-accelerator/latest/dg/introduction-how-it-works-client-ip.html"> Viewing Client IP Addresses in AWS Global Accelerator</a> in the <i>AWS Global Accelerator Developer Guide</i>.</p>', 'EndpointDescription$ClientIPPreservationEnabled' => '<p>Indicates whether client IP address preservation is enabled for an Application Load Balancer endpoint. The value is true or false. The default value is true for new accelerators. </p> <p>If the value is set to true, the client\'s IP address is preserved in the <code>X-Forwarded-For</code> request header as traffic travels to applications on the Application Load Balancer endpoint fronted by the accelerator.</p> <p>For more information, see <a href="https://docs.aws.amazon.com/global-accelerator/latest/dg/introduction-how-it-works-client-ip.html"> Viewing Client IP Addresses in AWS Global Accelerator</a> in the <i>AWS Global Accelerator Developer Guide</i>.</p>', 'UpdateAcceleratorAttributesRequest$FlowLogsEnabled' => '<p>Update whether flow logs are enabled. The default value is false. If the value is true, <code>FlowLogsS3Bucket</code> and <code>FlowLogsS3Prefix</code> must be specified.</p> <p>For more information, see <a href="https://docs.aws.amazon.com/global-accelerator/latest/dg/monitoring-global-accelerator.flow-logs.html">Flow Logs</a> in the <i>AWS Global Accelerator Developer Guide</i>.</p>', 'UpdateAcceleratorRequest$Enabled' => '<p>Indicates whether an accelerator is enabled. The value is true or false. The default value is true. </p> <p>If the value is set to true, the accelerator cannot be deleted. If set to false, the accelerator can be deleted.</p>', ], ], 'GenericString' => [ 'base' => NULL, 'refs' => [ 'Accelerator$AcceleratorArn' => '<p>The Amazon Resource Name (ARN) of the accelerator.</p>', 'Accelerator$Name' => '<p>The name of the accelerator. The name must contain only alphanumeric characters or hyphens (-), and must not begin or end with a hyphen.</p>', 'Accelerator$DnsName' => '<p>The Domain Name System (DNS) name that Global Accelerator creates that points to your accelerator\'s static IP addresses. </p> <p>The naming convention for the DNS name is: a lower case letter a, followed by a 16-bit random hex string, followed by .awsglobalaccelerator.com. For example: a1234567890abcdef.awsglobalaccelerator.com.</p> <p>For more information about the default DNS name, see <a href="https://docs.aws.amazon.com/global-accelerator/latest/dg/about-accelerators.html#about-accelerators.dns-addressing">Support for DNS Addressing in Global Accelerator</a> in the <i>AWS Global Accelerator Developer Guide</i>.</p>', 'AcceleratorAttributes$FlowLogsS3Bucket' => '<p>The name of the Amazon S3 bucket for the flow logs. Attribute is required if <code>FlowLogsEnabled</code> is <code>true</code>. The bucket must exist and have a bucket policy that grants AWS Global Accelerator permission to write to the bucket.</p>', 'AcceleratorAttributes$FlowLogsS3Prefix' => '<p>The prefix for the location in the Amazon S3 bucket for the flow logs. Attribute is required if <code>FlowLogsEnabled</code> is <code>true</code>. If you don’t specify a prefix, the flow logs are stored in the root of the bucket.</p>', 'CreateAcceleratorRequest$Name' => '<p>The name of an accelerator. The name can have a maximum of 32 characters, must contain only alphanumeric characters or hyphens (-), and must not begin or end with a hyphen.</p>', 'CreateEndpointGroupRequest$ListenerArn' => '<p>The Amazon Resource Name (ARN) of the listener.</p>', 'CreateEndpointGroupRequest$EndpointGroupRegion' => '<p>The name of the AWS Region where the endpoint group is located. A listener can have only one endpoint group in a specific Region.</p>', 'CreateEndpointGroupRequest$HealthCheckPath' => '<p>If the protocol is HTTP/S, then this specifies the path that is the destination for health check targets. The default value is slash (/).</p>', 'CreateListenerRequest$AcceleratorArn' => '<p>The Amazon Resource Name (ARN) of your accelerator.</p>', 'DeleteAcceleratorRequest$AcceleratorArn' => '<p>The Amazon Resource Name (ARN) of an accelerator.</p>', 'DeleteEndpointGroupRequest$EndpointGroupArn' => '<p>The Amazon Resource Name (ARN) of the endpoint group to delete.</p>', 'DeleteListenerRequest$ListenerArn' => '<p>The Amazon Resource Name (ARN) of the listener.</p>', 'DescribeAcceleratorAttributesRequest$AcceleratorArn' => '<p>The Amazon Resource Name (ARN) of the accelerator with the attributes that you want to describe.</p>', 'DescribeAcceleratorRequest$AcceleratorArn' => '<p>The Amazon Resource Name (ARN) of the accelerator to describe.</p>', 'DescribeEndpointGroupRequest$EndpointGroupArn' => '<p>The Amazon Resource Name (ARN) of the endpoint group to describe.</p>', 'DescribeListenerRequest$ListenerArn' => '<p>The Amazon Resource Name (ARN) of the listener to describe.</p>', 'EndpointConfiguration$EndpointId' => '<p>An ID for the endpoint. If the endpoint is a Network Load Balancer or Application Load Balancer, this is the Amazon Resource Name (ARN) of the resource. If the endpoint is an Elastic IP address, this is the Elastic IP address allocation ID.</p>', 'EndpointDescription$EndpointId' => '<p>An ID for the endpoint. If the endpoint is a Network Load Balancer or Application Load Balancer, this is the Amazon Resource Name (ARN) of the resource. If the endpoint is an Elastic IP address, this is the Elastic IP address allocation ID. An Application Load Balancer can be either internal or internet-facing.</p>', 'EndpointDescription$HealthReason' => '<p>The reason code associated with why the endpoint is not healthy. If the endpoint state is healthy, a reason code is not provided.</p> <p>If the endpoint state is <b>unhealthy</b>, the reason code can be one of the following values:</p> <ul> <li> <p> <b>Timeout</b>: The health check requests to the endpoint are timing out before returning a status.</p> </li> <li> <p> <b>Failed</b>: The health check failed, for example because the endpoint response was invalid (malformed).</p> </li> </ul> <p>If the endpoint state is <b>initial</b>, the reason code can be one of the following values:</p> <ul> <li> <p> <b>ProvisioningInProgress</b>: The endpoint is in the process of being provisioned.</p> </li> <li> <p> <b>InitialHealthChecking</b>: Global Accelerator is still setting up the minimum number of health checks for the endpoint that are required to determine its health status.</p> </li> </ul>', 'EndpointGroup$EndpointGroupArn' => '<p>The Amazon Resource Name (ARN) of the endpoint group.</p>', 'EndpointGroup$EndpointGroupRegion' => '<p>The AWS Region that this endpoint group belongs.</p>', 'EndpointGroup$HealthCheckPath' => '<p>If the protocol is HTTP/S, then this value provides the ping path that Global Accelerator uses for the destination on the endpoints for health checks. The default is slash (/).</p>', 'IpSet$IpFamily' => '<p>The types of IP addresses included in this IP set.</p>', 'ListAcceleratorsRequest$NextToken' => '<p>The token for the next set of results. You receive this token from a previous call.</p>', 'ListAcceleratorsResponse$NextToken' => '<p>The token for the next set of results. You receive this token from a previous call.</p>', 'ListEndpointGroupsRequest$ListenerArn' => '<p>The Amazon Resource Name (ARN) of the listener.</p>', 'ListEndpointGroupsRequest$NextToken' => '<p>The token for the next set of results. You receive this token from a previous call.</p>', 'ListEndpointGroupsResponse$NextToken' => '<p>The token for the next set of results. You receive this token from a previous call.</p>', 'ListListenersRequest$AcceleratorArn' => '<p>The Amazon Resource Name (ARN) of the accelerator for which you want to list listener objects.</p>', 'ListListenersRequest$NextToken' => '<p>The token for the next set of results. You receive this token from a previous call.</p>', 'ListListenersResponse$NextToken' => '<p>The token for the next set of results. You receive this token from a previous call.</p>', 'Listener$ListenerArn' => '<p>The Amazon Resource Name (ARN) of the listener.</p>', 'UpdateAcceleratorAttributesRequest$AcceleratorArn' => '<p>The Amazon Resource Name (ARN) of the accelerator that you want to update.</p>', 'UpdateAcceleratorAttributesRequest$FlowLogsS3Bucket' => '<p>The name of the Amazon S3 bucket for the flow logs. Attribute is required if <code>FlowLogsEnabled</code> is <code>true</code>. The bucket must exist and have a bucket policy that grants AWS Global Accelerator permission to write to the bucket.</p>', 'UpdateAcceleratorAttributesRequest$FlowLogsS3Prefix' => '<p>Update the prefix for the location in the Amazon S3 bucket for the flow logs. Attribute is required if <code>FlowLogsEnabled</code> is <code>true</code>. If you don’t specify a prefix, the flow logs are stored in the root of the bucket.</p>', 'UpdateAcceleratorRequest$AcceleratorArn' => '<p>The Amazon Resource Name (ARN) of the accelerator to update.</p>', 'UpdateAcceleratorRequest$Name' => '<p>The name of the accelerator. The name can have a maximum of 32 characters, must contain only alphanumeric characters or hyphens (-), and must not begin or end with a hyphen.</p>', 'UpdateEndpointGroupRequest$EndpointGroupArn' => '<p>The Amazon Resource Name (ARN) of the endpoint group.</p>', 'UpdateEndpointGroupRequest$HealthCheckPath' => '<p>If the protocol is HTTP/S, then this specifies the path that is the destination for health check targets. The default value is slash (/).</p>', 'UpdateListenerRequest$ListenerArn' => '<p>The Amazon Resource Name (ARN) of the listener to update.</p>', ], ], 'HealthCheckIntervalSeconds' => [ 'base' => NULL, 'refs' => [ 'CreateEndpointGroupRequest$HealthCheckIntervalSeconds' => '<p>The time—10 seconds or 30 seconds—between each health check for an endpoint. The default value is 30.</p>', 'EndpointGroup$HealthCheckIntervalSeconds' => '<p>The time—10 seconds or 30 seconds—between health checks for each endpoint. The default value is 30.</p>', 'UpdateEndpointGroupRequest$HealthCheckIntervalSeconds' => '<p>The time—10 seconds or 30 seconds—between each health check for an endpoint. The default value is 30.</p>', ], ], 'HealthCheckPort' => [ 'base' => NULL, 'refs' => [ 'CreateEndpointGroupRequest$HealthCheckPort' => '<p>The port that AWS Global Accelerator uses to check the health of endpoints that are part of this endpoint group. The default port is the listener port that this endpoint group is associated with. If listener port is a list of ports, Global Accelerator uses the first port in the list.</p>', 'EndpointGroup$HealthCheckPort' => '<p>The port that Global Accelerator uses to perform health checks on endpoints that are part of this endpoint group. </p> <p>The default port is the port for the listener that this endpoint group is associated with. If the listener port is a list, Global Accelerator uses the first specified port in the list of ports.</p>', 'UpdateEndpointGroupRequest$HealthCheckPort' => '<p>The port that AWS Global Accelerator uses to check the health of endpoints that are part of this endpoint group. The default port is the listener port that this endpoint group is associated with. If the listener port is a list of ports, Global Accelerator uses the first port in the list.</p>', ], ], 'HealthCheckProtocol' => [ 'base' => NULL, 'refs' => [ 'CreateEndpointGroupRequest$HealthCheckProtocol' => '<p>The protocol that AWS Global Accelerator uses to check the health of endpoints that are part of this endpoint group. The default value is TCP.</p>', 'EndpointGroup$HealthCheckProtocol' => '<p>The protocol that Global Accelerator uses to perform health checks on endpoints that are part of this endpoint group. The default value is TCP.</p>', 'UpdateEndpointGroupRequest$HealthCheckProtocol' => '<p>The protocol that AWS Global Accelerator uses to check the health of endpoints that are part of this endpoint group. The default value is TCP.</p>', ], ], 'HealthState' => [ 'base' => NULL, 'refs' => [ 'EndpointDescription$HealthState' => '<p>The health status of the endpoint.</p>', ], ], 'IdempotencyToken' => [ 'base' => NULL, 'refs' => [ 'CreateAcceleratorRequest$IdempotencyToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency—that is, the uniqueness—of an accelerator.</p>', 'CreateEndpointGroupRequest$IdempotencyToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency—that is, the uniqueness—of the request.</p>', 'CreateListenerRequest$IdempotencyToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency—that is, the uniqueness—of the request.</p>', ], ], 'InternalServiceErrorException' => [ 'base' => '<p>There was an internal error for AWS Global Accelerator.</p>', 'refs' => [], ], 'InvalidArgumentException' => [ 'base' => '<p>An argument that you specified is invalid.</p>', 'refs' => [], ], 'InvalidNextTokenException' => [ 'base' => '<p>There isn\'t another item to return.</p>', 'refs' => [], ], 'InvalidPortRangeException' => [ 'base' => '<p>The port numbers that you specified are not valid numbers or are not unique for this accelerator.</p>', 'refs' => [], ], 'IpAddress' => [ 'base' => NULL, 'refs' => [ 'IpAddresses$member' => NULL, ], ], 'IpAddressType' => [ 'base' => NULL, 'refs' => [ 'Accelerator$IpAddressType' => '<p>The value for the address type must be IPv4. </p>', 'CreateAcceleratorRequest$IpAddressType' => '<p>The value for the address type must be IPv4. </p>', 'UpdateAcceleratorRequest$IpAddressType' => '<p>The value for the address type must be IPv4. </p>', ], ], 'IpAddresses' => [ 'base' => NULL, 'refs' => [ 'IpSet$IpAddresses' => '<p>The array of IP addresses in the IP address set. An IP address set can have a maximum of two IP addresses.</p>', ], ], 'IpSet' => [ 'base' => '<p>A complex type for the set of IP addresses for an accelerator.</p>', 'refs' => [ 'IpSets$member' => NULL, ], ], 'IpSets' => [ 'base' => NULL, 'refs' => [ 'Accelerator$IpSets' => '<p>The static IP addresses that Global Accelerator associates with the accelerator.</p>', ], ], 'LimitExceededException' => [ 'base' => '<p>Processing your request would cause you to exceed an AWS Global Accelerator limit.</p>', 'refs' => [], ], 'ListAcceleratorsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListAcceleratorsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListEndpointGroupsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListEndpointGroupsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListListenersRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListListenersResponse' => [ 'base' => NULL, 'refs' => [], ], 'Listener' => [ 'base' => '<p>A complex type for a listener.</p>', 'refs' => [ 'CreateListenerResponse$Listener' => '<p>The listener that you\'ve created.</p>', 'DescribeListenerResponse$Listener' => '<p>The description of a listener.</p>', 'Listeners$member' => NULL, 'UpdateListenerResponse$Listener' => '<p>Information for the updated listener.</p>', ], ], 'ListenerNotFoundException' => [ 'base' => '<p>The listener that you specified doesn\'t exist.</p>', 'refs' => [], ], 'Listeners' => [ 'base' => NULL, 'refs' => [ 'ListListenersResponse$Listeners' => '<p>The list of listeners for an accelerator.</p>', ], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListAcceleratorsRequest$MaxResults' => '<p>The number of Global Accelerator objects that you want to return with this call. The default value is 10.</p>', 'ListEndpointGroupsRequest$MaxResults' => '<p>The number of endpoint group objects that you want to return with this call. The default value is 10.</p>', 'ListListenersRequest$MaxResults' => '<p>The number of listener objects that you want to return with this call. The default value is 10.</p>', ], ], 'PortNumber' => [ 'base' => NULL, 'refs' => [ 'PortRange$FromPort' => '<p>The first port in the range of ports, inclusive.</p>', 'PortRange$ToPort' => '<p>The last port in the range of ports, inclusive.</p>', ], ], 'PortRange' => [ 'base' => '<p>A complex type for a range of ports for a listener.</p>', 'refs' => [ 'PortRanges$member' => NULL, ], ], 'PortRanges' => [ 'base' => NULL, 'refs' => [ 'CreateListenerRequest$PortRanges' => '<p>The list of port ranges to support for connections from clients to your accelerator.</p>', 'Listener$PortRanges' => '<p>The list of port ranges for the connections from clients to the accelerator.</p>', 'UpdateListenerRequest$PortRanges' => '<p>The updated list of port ranges for the connections from clients to the accelerator.</p>', ], ], 'Protocol' => [ 'base' => NULL, 'refs' => [ 'CreateListenerRequest$Protocol' => '<p>The protocol for connections from clients to your accelerator.</p>', 'Listener$Protocol' => '<p>The protocol for the connections from clients to the accelerator.</p>', 'UpdateListenerRequest$Protocol' => '<p>The updated protocol for the connections from clients to the accelerator.</p>', ], ], 'ThresholdCount' => [ 'base' => NULL, 'refs' => [ 'CreateEndpointGroupRequest$ThresholdCount' => '<p>The number of consecutive health checks required to set the state of a healthy endpoint to unhealthy, or to set an unhealthy endpoint to healthy. The default value is 3.</p>', 'EndpointGroup$ThresholdCount' => '<p>The number of consecutive health checks required to set the state of a healthy endpoint to unhealthy, or to set an unhealthy endpoint to healthy. The default value is 3.</p>', 'UpdateEndpointGroupRequest$ThresholdCount' => '<p>The number of consecutive health checks required to set the state of a healthy endpoint to unhealthy, or to set an unhealthy endpoint to healthy. The default value is 3.</p>', ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'Accelerator$CreatedTime' => '<p>The date and time that the accelerator was created.</p>', 'Accelerator$LastModifiedTime' => '<p>The date and time that the accelerator was last modified.</p>', ], ], 'TrafficDialPercentage' => [ 'base' => NULL, 'refs' => [ 'CreateEndpointGroupRequest$TrafficDialPercentage' => '<p>The percentage of traffic to send to an AWS Region. Additional traffic is distributed to other endpoint groups for this listener. </p> <p>Use this action to increase (dial up) or decrease (dial down) traffic to a specific Region. The percentage is applied to the traffic that would otherwise have been routed to the Region based on optimal routing.</p> <p>The default value is 100.</p>', 'EndpointGroup$TrafficDialPercentage' => '<p>The percentage of traffic to send to an AWS Region. Additional traffic is distributed to other endpoint groups for this listener. </p> <p>Use this action to increase (dial up) or decrease (dial down) traffic to a specific Region. The percentage is applied to the traffic that would otherwise have been routed to the Region based on optimal routing.</p> <p>The default value is 100.</p>', 'UpdateEndpointGroupRequest$TrafficDialPercentage' => '<p>The percentage of traffic to send to an AWS Region. Additional traffic is distributed to other endpoint groups for this listener. </p> <p>Use this action to increase (dial up) or decrease (dial down) traffic to a specific Region. The percentage is applied to the traffic that would otherwise have been routed to the Region based on optimal routing.</p> <p>The default value is 100.</p>', ], ], 'UpdateAcceleratorAttributesRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateAcceleratorAttributesResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateAcceleratorRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateAcceleratorResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateEndpointGroupRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateEndpointGroupResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateListenerRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateListenerResponse' => [ 'base' => NULL, 'refs' => [], ], ],];
