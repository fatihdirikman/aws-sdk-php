<?php return [
  'metadata' => [
    'apiVersion' => '2014-10-01',
    'endpointPrefix' => 'ec2',
    'serviceAbbreviation' => 'Amazon EC2',
    'serviceFullName' => 'Amazon Elastic Compute Cloud',
    'signatureVersion' => 'v4',
    'xmlNamespace' => 'http://ec2.amazonaws.com/doc/2014-10-01',
    'protocol' => 'ec2',
  ],
  'operations' => [
    'AcceptVpcPeeringConnection' => [
      'name' => 'AcceptVpcPeeringConnection',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AcceptVpcPeeringConnectionRequest',
      ],
      'output' => [
        'shape' => 'AcceptVpcPeeringConnectionResult',
      ],
    ],
    'AllocateAddress' => [
      'name' => 'AllocateAddress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AllocateAddressRequest',
      ],
      'output' => [
        'shape' => 'AllocateAddressResult',
      ],
    ],
    'AssignPrivateIpAddresses' => [
      'name' => 'AssignPrivateIpAddresses',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AssignPrivateIpAddressesRequest',
      ],
    ],
    'AssociateAddress' => [
      'name' => 'AssociateAddress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AssociateAddressRequest',
      ],
      'output' => [
        'shape' => 'AssociateAddressResult',
      ],
    ],
    'AssociateDhcpOptions' => [
      'name' => 'AssociateDhcpOptions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AssociateDhcpOptionsRequest',
      ],
    ],
    'AssociateRouteTable' => [
      'name' => 'AssociateRouteTable',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AssociateRouteTableRequest',
      ],
      'output' => [
        'shape' => 'AssociateRouteTableResult',
      ],
    ],
    'AttachClassicLinkVpc' => [
      'name' => 'AttachClassicLinkVpc',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AttachClassicLinkVpcRequest',
      ],
      'output' => [
        'shape' => 'AttachClassicLinkVpcResult',
      ],
    ],
    'AttachInternetGateway' => [
      'name' => 'AttachInternetGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AttachInternetGatewayRequest',
      ],
    ],
    'AttachNetworkInterface' => [
      'name' => 'AttachNetworkInterface',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AttachNetworkInterfaceRequest',
      ],
      'output' => [
        'shape' => 'AttachNetworkInterfaceResult',
      ],
    ],
    'AttachVolume' => [
      'name' => 'AttachVolume',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AttachVolumeRequest',
      ],
      'output' => [
        'shape' => 'VolumeAttachment',
        'locationName' => 'attachment',
      ],
    ],
    'AttachVpnGateway' => [
      'name' => 'AttachVpnGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AttachVpnGatewayRequest',
      ],
      'output' => [
        'shape' => 'AttachVpnGatewayResult',
      ],
    ],
    'AuthorizeSecurityGroupEgress' => [
      'name' => 'AuthorizeSecurityGroupEgress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AuthorizeSecurityGroupEgressRequest',
      ],
    ],
    'AuthorizeSecurityGroupIngress' => [
      'name' => 'AuthorizeSecurityGroupIngress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AuthorizeSecurityGroupIngressRequest',
      ],
    ],
    'BundleInstance' => [
      'name' => 'BundleInstance',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'BundleInstanceRequest',
      ],
      'output' => [
        'shape' => 'BundleInstanceResult',
      ],
    ],
    'CancelBundleTask' => [
      'name' => 'CancelBundleTask',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CancelBundleTaskRequest',
      ],
      'output' => [
        'shape' => 'CancelBundleTaskResult',
      ],
    ],
    'CancelConversionTask' => [
      'name' => 'CancelConversionTask',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CancelConversionRequest',
      ],
    ],
    'CancelExportTask' => [
      'name' => 'CancelExportTask',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CancelExportTaskRequest',
      ],
    ],
    'CancelReservedInstancesListing' => [
      'name' => 'CancelReservedInstancesListing',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CancelReservedInstancesListingRequest',
      ],
      'output' => [
        'shape' => 'CancelReservedInstancesListingResult',
      ],
    ],
    'CancelSpotInstanceRequests' => [
      'name' => 'CancelSpotInstanceRequests',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CancelSpotInstanceRequestsRequest',
      ],
      'output' => [
        'shape' => 'CancelSpotInstanceRequestsResult',
      ],
    ],
    'ConfirmProductInstance' => [
      'name' => 'ConfirmProductInstance',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ConfirmProductInstanceRequest',
      ],
      'output' => [
        'shape' => 'ConfirmProductInstanceResult',
      ],
    ],
    'CopyImage' => [
      'name' => 'CopyImage',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CopyImageRequest',
      ],
      'output' => [
        'shape' => 'CopyImageResult',
      ],
    ],
    'CopySnapshot' => [
      'name' => 'CopySnapshot',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CopySnapshotRequest',
      ],
      'output' => [
        'shape' => 'CopySnapshotResult',
      ],
    ],
    'CreateCustomerGateway' => [
      'name' => 'CreateCustomerGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateCustomerGatewayRequest',
      ],
      'output' => [
        'shape' => 'CreateCustomerGatewayResult',
      ],
    ],
    'CreateDhcpOptions' => [
      'name' => 'CreateDhcpOptions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateDhcpOptionsRequest',
      ],
      'output' => [
        'shape' => 'CreateDhcpOptionsResult',
      ],
    ],
    'CreateImage' => [
      'name' => 'CreateImage',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateImageRequest',
      ],
      'output' => [
        'shape' => 'CreateImageResult',
      ],
    ],
    'CreateInstanceExportTask' => [
      'name' => 'CreateInstanceExportTask',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateInstanceExportTaskRequest',
      ],
      'output' => [
        'shape' => 'CreateInstanceExportTaskResult',
      ],
    ],
    'CreateInternetGateway' => [
      'name' => 'CreateInternetGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateInternetGatewayRequest',
      ],
      'output' => [
        'shape' => 'CreateInternetGatewayResult',
      ],
    ],
    'CreateKeyPair' => [
      'name' => 'CreateKeyPair',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateKeyPairRequest',
      ],
      'output' => [
        'shape' => 'KeyPair',
        'locationName' => 'keyPair',
      ],
    ],
    'CreateNetworkAcl' => [
      'name' => 'CreateNetworkAcl',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateNetworkAclRequest',
      ],
      'output' => [
        'shape' => 'CreateNetworkAclResult',
      ],
    ],
    'CreateNetworkAclEntry' => [
      'name' => 'CreateNetworkAclEntry',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateNetworkAclEntryRequest',
      ],
    ],
    'CreateNetworkInterface' => [
      'name' => 'CreateNetworkInterface',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateNetworkInterfaceRequest',
      ],
      'output' => [
        'shape' => 'CreateNetworkInterfaceResult',
      ],
    ],
    'CreatePlacementGroup' => [
      'name' => 'CreatePlacementGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreatePlacementGroupRequest',
      ],
    ],
    'CreateReservedInstancesListing' => [
      'name' => 'CreateReservedInstancesListing',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateReservedInstancesListingRequest',
      ],
      'output' => [
        'shape' => 'CreateReservedInstancesListingResult',
      ],
    ],
    'CreateRoute' => [
      'name' => 'CreateRoute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateRouteRequest',
      ],
    ],
    'CreateRouteTable' => [
      'name' => 'CreateRouteTable',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateRouteTableRequest',
      ],
      'output' => [
        'shape' => 'CreateRouteTableResult',
      ],
    ],
    'CreateSecurityGroup' => [
      'name' => 'CreateSecurityGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateSecurityGroupRequest',
      ],
      'output' => [
        'shape' => 'CreateSecurityGroupResult',
      ],
    ],
    'CreateSnapshot' => [
      'name' => 'CreateSnapshot',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateSnapshotRequest',
      ],
      'output' => [
        'shape' => 'Snapshot',
        'locationName' => 'snapshot',
      ],
    ],
    'CreateSpotDatafeedSubscription' => [
      'name' => 'CreateSpotDatafeedSubscription',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateSpotDatafeedSubscriptionRequest',
      ],
      'output' => [
        'shape' => 'CreateSpotDatafeedSubscriptionResult',
      ],
    ],
    'CreateSubnet' => [
      'name' => 'CreateSubnet',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateSubnetRequest',
      ],
      'output' => [
        'shape' => 'CreateSubnetResult',
      ],
    ],
    'CreateTags' => [
      'name' => 'CreateTags',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateTagsRequest',
      ],
    ],
    'CreateVolume' => [
      'name' => 'CreateVolume',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateVolumeRequest',
      ],
      'output' => [
        'shape' => 'Volume',
        'locationName' => 'volume',
      ],
    ],
    'CreateVpc' => [
      'name' => 'CreateVpc',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateVpcRequest',
      ],
      'output' => [
        'shape' => 'CreateVpcResult',
      ],
    ],
    'CreateVpcPeeringConnection' => [
      'name' => 'CreateVpcPeeringConnection',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateVpcPeeringConnectionRequest',
      ],
      'output' => [
        'shape' => 'CreateVpcPeeringConnectionResult',
      ],
    ],
    'CreateVpnConnection' => [
      'name' => 'CreateVpnConnection',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateVpnConnectionRequest',
      ],
      'output' => [
        'shape' => 'CreateVpnConnectionResult',
      ],
    ],
    'CreateVpnConnectionRoute' => [
      'name' => 'CreateVpnConnectionRoute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateVpnConnectionRouteRequest',
      ],
    ],
    'CreateVpnGateway' => [
      'name' => 'CreateVpnGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateVpnGatewayRequest',
      ],
      'output' => [
        'shape' => 'CreateVpnGatewayResult',
      ],
    ],
    'DeleteCustomerGateway' => [
      'name' => 'DeleteCustomerGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteCustomerGatewayRequest',
      ],
    ],
    'DeleteDhcpOptions' => [
      'name' => 'DeleteDhcpOptions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteDhcpOptionsRequest',
      ],
    ],
    'DeleteInternetGateway' => [
      'name' => 'DeleteInternetGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteInternetGatewayRequest',
      ],
    ],
    'DeleteKeyPair' => [
      'name' => 'DeleteKeyPair',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteKeyPairRequest',
      ],
    ],
    'DeleteNetworkAcl' => [
      'name' => 'DeleteNetworkAcl',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteNetworkAclRequest',
      ],
    ],
    'DeleteNetworkAclEntry' => [
      'name' => 'DeleteNetworkAclEntry',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteNetworkAclEntryRequest',
      ],
    ],
    'DeleteNetworkInterface' => [
      'name' => 'DeleteNetworkInterface',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteNetworkInterfaceRequest',
      ],
    ],
    'DeletePlacementGroup' => [
      'name' => 'DeletePlacementGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeletePlacementGroupRequest',
      ],
    ],
    'DeleteRoute' => [
      'name' => 'DeleteRoute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteRouteRequest',
      ],
    ],
    'DeleteRouteTable' => [
      'name' => 'DeleteRouteTable',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteRouteTableRequest',
      ],
    ],
    'DeleteSecurityGroup' => [
      'name' => 'DeleteSecurityGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteSecurityGroupRequest',
      ],
    ],
    'DeleteSnapshot' => [
      'name' => 'DeleteSnapshot',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteSnapshotRequest',
      ],
    ],
    'DeleteSpotDatafeedSubscription' => [
      'name' => 'DeleteSpotDatafeedSubscription',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteSpotDatafeedSubscriptionRequest',
      ],
    ],
    'DeleteSubnet' => [
      'name' => 'DeleteSubnet',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteSubnetRequest',
      ],
    ],
    'DeleteTags' => [
      'name' => 'DeleteTags',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteTagsRequest',
      ],
    ],
    'DeleteVolume' => [
      'name' => 'DeleteVolume',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteVolumeRequest',
      ],
    ],
    'DeleteVpc' => [
      'name' => 'DeleteVpc',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteVpcRequest',
      ],
    ],
    'DeleteVpcPeeringConnection' => [
      'name' => 'DeleteVpcPeeringConnection',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteVpcPeeringConnectionRequest',
      ],
      'output' => [
        'shape' => 'DeleteVpcPeeringConnectionResult',
      ],
    ],
    'DeleteVpnConnection' => [
      'name' => 'DeleteVpnConnection',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteVpnConnectionRequest',
      ],
    ],
    'DeleteVpnConnectionRoute' => [
      'name' => 'DeleteVpnConnectionRoute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteVpnConnectionRouteRequest',
      ],
    ],
    'DeleteVpnGateway' => [
      'name' => 'DeleteVpnGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteVpnGatewayRequest',
      ],
    ],
    'DeregisterImage' => [
      'name' => 'DeregisterImage',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeregisterImageRequest',
      ],
    ],
    'DescribeAccountAttributes' => [
      'name' => 'DescribeAccountAttributes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeAccountAttributesRequest',
      ],
      'output' => [
        'shape' => 'DescribeAccountAttributesResult',
      ],
    ],
    'DescribeAddresses' => [
      'name' => 'DescribeAddresses',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeAddressesRequest',
      ],
      'output' => [
        'shape' => 'DescribeAddressesResult',
      ],
    ],
    'DescribeAvailabilityZones' => [
      'name' => 'DescribeAvailabilityZones',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeAvailabilityZonesRequest',
      ],
      'output' => [
        'shape' => 'DescribeAvailabilityZonesResult',
      ],
    ],
    'DescribeBundleTasks' => [
      'name' => 'DescribeBundleTasks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeBundleTasksRequest',
      ],
      'output' => [
        'shape' => 'DescribeBundleTasksResult',
      ],
    ],
    'DescribeClassicLinkInstances' => [
      'name' => 'DescribeClassicLinkInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeClassicLinkInstancesRequest',
      ],
      'output' => [
        'shape' => 'DescribeClassicLinkInstancesResult',
      ],
    ],
    'DescribeConversionTasks' => [
      'name' => 'DescribeConversionTasks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeConversionTasksRequest',
      ],
      'output' => [
        'shape' => 'DescribeConversionTasksResult',
      ],
    ],
    'DescribeCustomerGateways' => [
      'name' => 'DescribeCustomerGateways',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCustomerGatewaysRequest',
      ],
      'output' => [
        'shape' => 'DescribeCustomerGatewaysResult',
      ],
    ],
    'DescribeDhcpOptions' => [
      'name' => 'DescribeDhcpOptions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeDhcpOptionsRequest',
      ],
      'output' => [
        'shape' => 'DescribeDhcpOptionsResult',
      ],
    ],
    'DescribeExportTasks' => [
      'name' => 'DescribeExportTasks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeExportTasksRequest',
      ],
      'output' => [
        'shape' => 'DescribeExportTasksResult',
      ],
    ],
    'DescribeImageAttribute' => [
      'name' => 'DescribeImageAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeImageAttributeRequest',
      ],
      'output' => [
        'shape' => 'ImageAttribute',
        'locationName' => 'imageAttribute',
      ],
    ],
    'DescribeImages' => [
      'name' => 'DescribeImages',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeImagesRequest',
      ],
      'output' => [
        'shape' => 'DescribeImagesResult',
      ],
    ],
    'DescribeInstanceAttribute' => [
      'name' => 'DescribeInstanceAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeInstanceAttributeRequest',
      ],
      'output' => [
        'shape' => 'InstanceAttribute',
      ],
    ],
    'DescribeInstanceStatus' => [
      'name' => 'DescribeInstanceStatus',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeInstanceStatusRequest',
      ],
      'output' => [
        'shape' => 'DescribeInstanceStatusResult',
      ],
    ],
    'DescribeInstances' => [
      'name' => 'DescribeInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeInstancesRequest',
      ],
      'output' => [
        'shape' => 'DescribeInstancesResult',
      ],
    ],
    'DescribeInternetGateways' => [
      'name' => 'DescribeInternetGateways',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeInternetGatewaysRequest',
      ],
      'output' => [
        'shape' => 'DescribeInternetGatewaysResult',
      ],
    ],
    'DescribeKeyPairs' => [
      'name' => 'DescribeKeyPairs',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeKeyPairsRequest',
      ],
      'output' => [
        'shape' => 'DescribeKeyPairsResult',
      ],
    ],
    'DescribeNetworkAcls' => [
      'name' => 'DescribeNetworkAcls',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeNetworkAclsRequest',
      ],
      'output' => [
        'shape' => 'DescribeNetworkAclsResult',
      ],
    ],
    'DescribeNetworkInterfaceAttribute' => [
      'name' => 'DescribeNetworkInterfaceAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeNetworkInterfaceAttributeRequest',
      ],
      'output' => [
        'shape' => 'DescribeNetworkInterfaceAttributeResult',
      ],
    ],
    'DescribeNetworkInterfaces' => [
      'name' => 'DescribeNetworkInterfaces',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeNetworkInterfacesRequest',
      ],
      'output' => [
        'shape' => 'DescribeNetworkInterfacesResult',
      ],
    ],
    'DescribePlacementGroups' => [
      'name' => 'DescribePlacementGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribePlacementGroupsRequest',
      ],
      'output' => [
        'shape' => 'DescribePlacementGroupsResult',
      ],
    ],
    'DescribeRegions' => [
      'name' => 'DescribeRegions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeRegionsRequest',
      ],
      'output' => [
        'shape' => 'DescribeRegionsResult',
      ],
    ],
    'DescribeReservedInstances' => [
      'name' => 'DescribeReservedInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeReservedInstancesRequest',
      ],
      'output' => [
        'shape' => 'DescribeReservedInstancesResult',
      ],
    ],
    'DescribeReservedInstancesListings' => [
      'name' => 'DescribeReservedInstancesListings',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeReservedInstancesListingsRequest',
      ],
      'output' => [
        'shape' => 'DescribeReservedInstancesListingsResult',
      ],
    ],
    'DescribeReservedInstancesModifications' => [
      'name' => 'DescribeReservedInstancesModifications',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeReservedInstancesModificationsRequest',
      ],
      'output' => [
        'shape' => 'DescribeReservedInstancesModificationsResult',
      ],
    ],
    'DescribeReservedInstancesOfferings' => [
      'name' => 'DescribeReservedInstancesOfferings',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeReservedInstancesOfferingsRequest',
      ],
      'output' => [
        'shape' => 'DescribeReservedInstancesOfferingsResult',
      ],
    ],
    'DescribeRouteTables' => [
      'name' => 'DescribeRouteTables',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeRouteTablesRequest',
      ],
      'output' => [
        'shape' => 'DescribeRouteTablesResult',
      ],
    ],
    'DescribeSecurityGroups' => [
      'name' => 'DescribeSecurityGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSecurityGroupsRequest',
      ],
      'output' => [
        'shape' => 'DescribeSecurityGroupsResult',
      ],
    ],
    'DescribeSnapshotAttribute' => [
      'name' => 'DescribeSnapshotAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSnapshotAttributeRequest',
      ],
      'output' => [
        'shape' => 'DescribeSnapshotAttributeResult',
      ],
    ],
    'DescribeSnapshots' => [
      'name' => 'DescribeSnapshots',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSnapshotsRequest',
      ],
      'output' => [
        'shape' => 'DescribeSnapshotsResult',
      ],
    ],
    'DescribeSpotDatafeedSubscription' => [
      'name' => 'DescribeSpotDatafeedSubscription',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSpotDatafeedSubscriptionRequest',
      ],
      'output' => [
        'shape' => 'DescribeSpotDatafeedSubscriptionResult',
      ],
    ],
    'DescribeSpotInstanceRequests' => [
      'name' => 'DescribeSpotInstanceRequests',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSpotInstanceRequestsRequest',
      ],
      'output' => [
        'shape' => 'DescribeSpotInstanceRequestsResult',
      ],
    ],
    'DescribeSpotPriceHistory' => [
      'name' => 'DescribeSpotPriceHistory',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSpotPriceHistoryRequest',
      ],
      'output' => [
        'shape' => 'DescribeSpotPriceHistoryResult',
      ],
    ],
    'DescribeSubnets' => [
      'name' => 'DescribeSubnets',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSubnetsRequest',
      ],
      'output' => [
        'shape' => 'DescribeSubnetsResult',
      ],
    ],
    'DescribeTags' => [
      'name' => 'DescribeTags',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTagsRequest',
      ],
      'output' => [
        'shape' => 'DescribeTagsResult',
      ],
    ],
    'DescribeVolumeAttribute' => [
      'name' => 'DescribeVolumeAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVolumeAttributeRequest',
      ],
      'output' => [
        'shape' => 'DescribeVolumeAttributeResult',
      ],
    ],
    'DescribeVolumeStatus' => [
      'name' => 'DescribeVolumeStatus',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVolumeStatusRequest',
      ],
      'output' => [
        'shape' => 'DescribeVolumeStatusResult',
      ],
    ],
    'DescribeVolumes' => [
      'name' => 'DescribeVolumes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVolumesRequest',
      ],
      'output' => [
        'shape' => 'DescribeVolumesResult',
      ],
    ],
    'DescribeVpcAttribute' => [
      'name' => 'DescribeVpcAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVpcAttributeRequest',
      ],
      'output' => [
        'shape' => 'DescribeVpcAttributeResult',
      ],
    ],
    'DescribeVpcClassicLink' => [
      'name' => 'DescribeVpcClassicLink',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVpcClassicLinkRequest',
      ],
      'output' => [
        'shape' => 'DescribeVpcClassicLinkResult',
      ],
    ],
    'DescribeVpcPeeringConnections' => [
      'name' => 'DescribeVpcPeeringConnections',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVpcPeeringConnectionsRequest',
      ],
      'output' => [
        'shape' => 'DescribeVpcPeeringConnectionsResult',
      ],
    ],
    'DescribeVpcs' => [
      'name' => 'DescribeVpcs',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVpcsRequest',
      ],
      'output' => [
        'shape' => 'DescribeVpcsResult',
      ],
    ],
    'DescribeVpnConnections' => [
      'name' => 'DescribeVpnConnections',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVpnConnectionsRequest',
      ],
      'output' => [
        'shape' => 'DescribeVpnConnectionsResult',
      ],
    ],
    'DescribeVpnGateways' => [
      'name' => 'DescribeVpnGateways',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVpnGatewaysRequest',
      ],
      'output' => [
        'shape' => 'DescribeVpnGatewaysResult',
      ],
    ],
    'DetachClassicLinkVpc' => [
      'name' => 'DetachClassicLinkVpc',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DetachClassicLinkVpcRequest',
      ],
      'output' => [
        'shape' => 'DetachClassicLinkVpcResult',
      ],
    ],
    'DetachInternetGateway' => [
      'name' => 'DetachInternetGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DetachInternetGatewayRequest',
      ],
    ],
    'DetachNetworkInterface' => [
      'name' => 'DetachNetworkInterface',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DetachNetworkInterfaceRequest',
      ],
    ],
    'DetachVolume' => [
      'name' => 'DetachVolume',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DetachVolumeRequest',
      ],
      'output' => [
        'shape' => 'VolumeAttachment',
        'locationName' => 'attachment',
      ],
    ],
    'DetachVpnGateway' => [
      'name' => 'DetachVpnGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DetachVpnGatewayRequest',
      ],
    ],
    'DisableVgwRoutePropagation' => [
      'name' => 'DisableVgwRoutePropagation',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DisableVgwRoutePropagationRequest',
      ],
    ],
    'DisableVpcClassicLink' => [
      'name' => 'DisableVpcClassicLink',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DisableVpcClassicLinkRequest',
      ],
      'output' => [
        'shape' => 'DisableVpcClassicLinkResult',
      ],
    ],
    'DisassociateAddress' => [
      'name' => 'DisassociateAddress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DisassociateAddressRequest',
      ],
    ],
    'DisassociateRouteTable' => [
      'name' => 'DisassociateRouteTable',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DisassociateRouteTableRequest',
      ],
    ],
    'EnableVgwRoutePropagation' => [
      'name' => 'EnableVgwRoutePropagation',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'EnableVgwRoutePropagationRequest',
      ],
    ],
    'EnableVolumeIO' => [
      'name' => 'EnableVolumeIO',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'EnableVolumeIORequest',
      ],
    ],
    'EnableVpcClassicLink' => [
      'name' => 'EnableVpcClassicLink',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'EnableVpcClassicLinkRequest',
      ],
      'output' => [
        'shape' => 'EnableVpcClassicLinkResult',
      ],
    ],
    'GetConsoleOutput' => [
      'name' => 'GetConsoleOutput',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetConsoleOutputRequest',
      ],
      'output' => [
        'shape' => 'GetConsoleOutputResult',
      ],
    ],
    'GetPasswordData' => [
      'name' => 'GetPasswordData',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetPasswordDataRequest',
      ],
      'output' => [
        'shape' => 'GetPasswordDataResult',
      ],
    ],
    'ImportInstance' => [
      'name' => 'ImportInstance',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ImportInstanceRequest',
      ],
      'output' => [
        'shape' => 'ImportInstanceResult',
      ],
    ],
    'ImportKeyPair' => [
      'name' => 'ImportKeyPair',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ImportKeyPairRequest',
      ],
      'output' => [
        'shape' => 'ImportKeyPairResult',
      ],
    ],
    'ImportVolume' => [
      'name' => 'ImportVolume',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ImportVolumeRequest',
      ],
      'output' => [
        'shape' => 'ImportVolumeResult',
      ],
    ],
    'ModifyImageAttribute' => [
      'name' => 'ModifyImageAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyImageAttributeRequest',
      ],
    ],
    'ModifyInstanceAttribute' => [
      'name' => 'ModifyInstanceAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyInstanceAttributeRequest',
      ],
    ],
    'ModifyNetworkInterfaceAttribute' => [
      'name' => 'ModifyNetworkInterfaceAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyNetworkInterfaceAttributeRequest',
      ],
    ],
    'ModifyReservedInstances' => [
      'name' => 'ModifyReservedInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyReservedInstancesRequest',
      ],
      'output' => [
        'shape' => 'ModifyReservedInstancesResult',
      ],
    ],
    'ModifySnapshotAttribute' => [
      'name' => 'ModifySnapshotAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifySnapshotAttributeRequest',
      ],
    ],
    'ModifySubnetAttribute' => [
      'name' => 'ModifySubnetAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifySubnetAttributeRequest',
      ],
    ],
    'ModifyVolumeAttribute' => [
      'name' => 'ModifyVolumeAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyVolumeAttributeRequest',
      ],
    ],
    'ModifyVpcAttribute' => [
      'name' => 'ModifyVpcAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyVpcAttributeRequest',
      ],
    ],
    'MonitorInstances' => [
      'name' => 'MonitorInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'MonitorInstancesRequest',
      ],
      'output' => [
        'shape' => 'MonitorInstancesResult',
      ],
    ],
    'PurchaseReservedInstancesOffering' => [
      'name' => 'PurchaseReservedInstancesOffering',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PurchaseReservedInstancesOfferingRequest',
      ],
      'output' => [
        'shape' => 'PurchaseReservedInstancesOfferingResult',
      ],
    ],
    'RebootInstances' => [
      'name' => 'RebootInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RebootInstancesRequest',
      ],
    ],
    'RegisterImage' => [
      'name' => 'RegisterImage',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RegisterImageRequest',
      ],
      'output' => [
        'shape' => 'RegisterImageResult',
      ],
    ],
    'RejectVpcPeeringConnection' => [
      'name' => 'RejectVpcPeeringConnection',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RejectVpcPeeringConnectionRequest',
      ],
      'output' => [
        'shape' => 'RejectVpcPeeringConnectionResult',
      ],
    ],
    'ReleaseAddress' => [
      'name' => 'ReleaseAddress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ReleaseAddressRequest',
      ],
    ],
    'ReplaceNetworkAclAssociation' => [
      'name' => 'ReplaceNetworkAclAssociation',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ReplaceNetworkAclAssociationRequest',
      ],
      'output' => [
        'shape' => 'ReplaceNetworkAclAssociationResult',
      ],
    ],
    'ReplaceNetworkAclEntry' => [
      'name' => 'ReplaceNetworkAclEntry',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ReplaceNetworkAclEntryRequest',
      ],
    ],
    'ReplaceRoute' => [
      'name' => 'ReplaceRoute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ReplaceRouteRequest',
      ],
    ],
    'ReplaceRouteTableAssociation' => [
      'name' => 'ReplaceRouteTableAssociation',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ReplaceRouteTableAssociationRequest',
      ],
      'output' => [
        'shape' => 'ReplaceRouteTableAssociationResult',
      ],
    ],
    'ReportInstanceStatus' => [
      'name' => 'ReportInstanceStatus',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ReportInstanceStatusRequest',
      ],
    ],
    'RequestSpotInstances' => [
      'name' => 'RequestSpotInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RequestSpotInstancesRequest',
      ],
      'output' => [
        'shape' => 'RequestSpotInstancesResult',
      ],
    ],
    'ResetImageAttribute' => [
      'name' => 'ResetImageAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ResetImageAttributeRequest',
      ],
    ],
    'ResetInstanceAttribute' => [
      'name' => 'ResetInstanceAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ResetInstanceAttributeRequest',
      ],
    ],
    'ResetNetworkInterfaceAttribute' => [
      'name' => 'ResetNetworkInterfaceAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ResetNetworkInterfaceAttributeRequest',
      ],
    ],
    'ResetSnapshotAttribute' => [
      'name' => 'ResetSnapshotAttribute',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ResetSnapshotAttributeRequest',
      ],
    ],
    'RevokeSecurityGroupEgress' => [
      'name' => 'RevokeSecurityGroupEgress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RevokeSecurityGroupEgressRequest',
      ],
    ],
    'RevokeSecurityGroupIngress' => [
      'name' => 'RevokeSecurityGroupIngress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RevokeSecurityGroupIngressRequest',
      ],
    ],
    'RunInstances' => [
      'name' => 'RunInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RunInstancesRequest',
      ],
      'output' => [
        'shape' => 'Reservation',
        'locationName' => 'reservation',
      ],
    ],
    'StartInstances' => [
      'name' => 'StartInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StartInstancesRequest',
      ],
      'output' => [
        'shape' => 'StartInstancesResult',
      ],
    ],
    'StopInstances' => [
      'name' => 'StopInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StopInstancesRequest',
      ],
      'output' => [
        'shape' => 'StopInstancesResult',
      ],
    ],
    'TerminateInstances' => [
      'name' => 'TerminateInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'TerminateInstancesRequest',
      ],
      'output' => [
        'shape' => 'TerminateInstancesResult',
      ],
    ],
    'UnassignPrivateIpAddresses' => [
      'name' => 'UnassignPrivateIpAddresses',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UnassignPrivateIpAddressesRequest',
      ],
    ],
    'UnmonitorInstances' => [
      'name' => 'UnmonitorInstances',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UnmonitorInstancesRequest',
      ],
      'output' => [
        'shape' => 'UnmonitorInstancesResult',
      ],
    ],
  ],
  'shapes' => [
    'AcceptVpcPeeringConnectionRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcPeeringConnectionId' => [
          'shape' => 'String',
          'locationName' => 'vpcPeeringConnectionId',
        ],
      ],
    ],
    'AcceptVpcPeeringConnectionResult' => [
      'type' => 'structure',
      'members' => [
        'VpcPeeringConnection' => [
          'shape' => 'VpcPeeringConnection',
          'locationName' => 'vpcPeeringConnection',
        ],
      ],
    ],
    'AccountAttribute' => [
      'type' => 'structure',
      'members' => [
        'AttributeName' => [
          'shape' => 'String',
          'locationName' => 'attributeName',
        ],
        'AttributeValues' => [
          'shape' => 'AccountAttributeValueList',
          'locationName' => 'attributeValueSet',
        ],
      ],
    ],
    'AccountAttributeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AccountAttribute',
        'locationName' => 'item',
      ],
    ],
    'AccountAttributeName' => [
      'type' => 'string',
      'enum' => [
        'supported-platforms',
        'default-vpc',
      ],
    ],
    'AccountAttributeNameStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AccountAttributeName',
        'locationName' => 'attributeName',
      ],
    ],
    'AccountAttributeValue' => [
      'type' => 'structure',
      'members' => [
        'AttributeValue' => [
          'shape' => 'String',
          'locationName' => 'attributeValue',
        ],
      ],
    ],
    'AccountAttributeValueList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AccountAttributeValue',
        'locationName' => 'item',
      ],
    ],
    'Address' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'PublicIp' => [
          'shape' => 'String',
          'locationName' => 'publicIp',
        ],
        'AllocationId' => [
          'shape' => 'String',
          'locationName' => 'allocationId',
        ],
        'AssociationId' => [
          'shape' => 'String',
          'locationName' => 'associationId',
        ],
        'Domain' => [
          'shape' => 'DomainType',
          'locationName' => 'domain',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'NetworkInterfaceOwnerId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceOwnerId',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
      ],
    ],
    'AddressList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Address',
        'locationName' => 'item',
      ],
    ],
    'AllocateAddressRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Domain' => [
          'shape' => 'DomainType',
        ],
      ],
    ],
    'AllocateAddressResult' => [
      'type' => 'structure',
      'members' => [
        'PublicIp' => [
          'shape' => 'String',
          'locationName' => 'publicIp',
        ],
        'Domain' => [
          'shape' => 'DomainType',
          'locationName' => 'domain',
        ],
        'AllocationId' => [
          'shape' => 'String',
          'locationName' => 'allocationId',
        ],
      ],
    ],
    'AllocationIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'AllocationId',
      ],
    ],
    'ArchitectureValues' => [
      'type' => 'string',
      'enum' => [
        'i386',
        'x86_64',
      ],
    ],
    'AssignPrivateIpAddressesRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkInterfaceId',
      ],
      'members' => [
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'PrivateIpAddresses' => [
          'shape' => 'PrivateIpAddressStringList',
          'locationName' => 'privateIpAddress',
        ],
        'SecondaryPrivateIpAddressCount' => [
          'shape' => 'Integer',
          'locationName' => 'secondaryPrivateIpAddressCount',
        ],
        'AllowReassignment' => [
          'shape' => 'Boolean',
          'locationName' => 'allowReassignment',
        ],
      ],
    ],
    'AssociateAddressRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
        ],
        'PublicIp' => [
          'shape' => 'String',
        ],
        'AllocationId' => [
          'shape' => 'String',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'AllowReassociation' => [
          'shape' => 'Boolean',
          'locationName' => 'allowReassociation',
        ],
      ],
    ],
    'AssociateAddressResult' => [
      'type' => 'structure',
      'members' => [
        'AssociationId' => [
          'shape' => 'String',
          'locationName' => 'associationId',
        ],
      ],
    ],
    'AssociateDhcpOptionsRequest' => [
      'type' => 'structure',
      'required' => [
        'DhcpOptionsId',
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'DhcpOptionsId' => [
          'shape' => 'String',
        ],
        'VpcId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'AssociateRouteTableRequest' => [
      'type' => 'structure',
      'required' => [
        'SubnetId',
        'RouteTableId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'RouteTableId' => [
          'shape' => 'String',
          'locationName' => 'routeTableId',
        ],
      ],
    ],
    'AssociateRouteTableResult' => [
      'type' => 'structure',
      'members' => [
        'AssociationId' => [
          'shape' => 'String',
          'locationName' => 'associationId',
        ],
      ],
    ],
    'AttachClassicLinkVpcRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
        'VpcId',
        'Groups',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'Groups' => [
          'shape' => 'GroupIdStringList',
          'locationName' => 'SecurityGroupId',
        ],
      ],
    ],
    'AttachClassicLinkVpcResult' => [
      'type' => 'structure',
      'members' => [
        'Return' => [
          'shape' => 'Boolean',
          'locationName' => 'return',
        ],
      ],
    ],
    'AttachInternetGatewayRequest' => [
      'type' => 'structure',
      'required' => [
        'InternetGatewayId',
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InternetGatewayId' => [
          'shape' => 'String',
          'locationName' => 'internetGatewayId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
      ],
    ],
    'AttachNetworkInterfaceRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkInterfaceId',
        'InstanceId',
        'DeviceIndex',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'DeviceIndex' => [
          'shape' => 'Integer',
          'locationName' => 'deviceIndex',
        ],
      ],
    ],
    'AttachNetworkInterfaceResult' => [
      'type' => 'structure',
      'members' => [
        'AttachmentId' => [
          'shape' => 'String',
          'locationName' => 'attachmentId',
        ],
      ],
    ],
    'AttachVolumeRequest' => [
      'type' => 'structure',
      'required' => [
        'VolumeId',
        'InstanceId',
        'Device',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VolumeId' => [
          'shape' => 'String',
        ],
        'InstanceId' => [
          'shape' => 'String',
        ],
        'Device' => [
          'shape' => 'String',
        ],
      ],
    ],
    'AttachVpnGatewayRequest' => [
      'type' => 'structure',
      'required' => [
        'VpnGatewayId',
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpnGatewayId' => [
          'shape' => 'String',
        ],
        'VpcId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'AttachVpnGatewayResult' => [
      'type' => 'structure',
      'members' => [
        'VpcAttachment' => [
          'shape' => 'VpcAttachment',
          'locationName' => 'attachment',
        ],
      ],
    ],
    'AttachmentStatus' => [
      'type' => 'string',
      'enum' => [
        'attaching',
        'attached',
        'detaching',
        'detached',
      ],
    ],
    'AttributeBooleanValue' => [
      'type' => 'structure',
      'members' => [
        'Value' => [
          'shape' => 'Boolean',
          'locationName' => 'value',
        ],
      ],
    ],
    'AttributeValue' => [
      'type' => 'structure',
      'members' => [
        'Value' => [
          'shape' => 'String',
          'locationName' => 'value',
        ],
      ],
    ],
    'AuthorizeSecurityGroupEgressRequest' => [
      'type' => 'structure',
      'required' => [
        'GroupId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupId' => [
          'shape' => 'String',
          'locationName' => 'groupId',
        ],
        'SourceSecurityGroupName' => [
          'shape' => 'String',
          'locationName' => 'sourceSecurityGroupName',
        ],
        'SourceSecurityGroupOwnerId' => [
          'shape' => 'String',
          'locationName' => 'sourceSecurityGroupOwnerId',
        ],
        'IpProtocol' => [
          'shape' => 'String',
          'locationName' => 'ipProtocol',
        ],
        'FromPort' => [
          'shape' => 'Integer',
          'locationName' => 'fromPort',
        ],
        'ToPort' => [
          'shape' => 'Integer',
          'locationName' => 'toPort',
        ],
        'CidrIp' => [
          'shape' => 'String',
          'locationName' => 'cidrIp',
        ],
        'IpPermissions' => [
          'shape' => 'IpPermissionList',
          'locationName' => 'ipPermissions',
        ],
      ],
    ],
    'AuthorizeSecurityGroupIngressRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupName' => [
          'shape' => 'String',
        ],
        'GroupId' => [
          'shape' => 'String',
        ],
        'SourceSecurityGroupName' => [
          'shape' => 'String',
        ],
        'SourceSecurityGroupOwnerId' => [
          'shape' => 'String',
        ],
        'IpProtocol' => [
          'shape' => 'String',
        ],
        'FromPort' => [
          'shape' => 'Integer',
        ],
        'ToPort' => [
          'shape' => 'Integer',
        ],
        'CidrIp' => [
          'shape' => 'String',
        ],
        'IpPermissions' => [
          'shape' => 'IpPermissionList',
        ],
      ],
    ],
    'AvailabilityZone' => [
      'type' => 'structure',
      'members' => [
        'ZoneName' => [
          'shape' => 'String',
          'locationName' => 'zoneName',
        ],
        'State' => [
          'shape' => 'AvailabilityZoneState',
          'locationName' => 'zoneState',
        ],
        'RegionName' => [
          'shape' => 'String',
          'locationName' => 'regionName',
        ],
        'Messages' => [
          'shape' => 'AvailabilityZoneMessageList',
          'locationName' => 'messageSet',
        ],
      ],
    ],
    'AvailabilityZoneList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AvailabilityZone',
        'locationName' => 'item',
      ],
    ],
    'AvailabilityZoneMessage' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'String',
          'locationName' => 'message',
        ],
      ],
    ],
    'AvailabilityZoneMessageList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AvailabilityZoneMessage',
        'locationName' => 'item',
      ],
    ],
    'AvailabilityZoneState' => [
      'type' => 'string',
      'enum' => [
        'available',
      ],
    ],
    'BlockDeviceMapping' => [
      'type' => 'structure',
      'members' => [
        'VirtualName' => [
          'shape' => 'String',
          'locationName' => 'virtualName',
        ],
        'DeviceName' => [
          'shape' => 'String',
          'locationName' => 'deviceName',
        ],
        'Ebs' => [
          'shape' => 'EbsBlockDevice',
          'locationName' => 'ebs',
        ],
        'NoDevice' => [
          'shape' => 'String',
          'locationName' => 'noDevice',
        ],
      ],
    ],
    'BlockDeviceMappingList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'BlockDeviceMapping',
        'locationName' => 'item',
      ],
    ],
    'BlockDeviceMappingRequestList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'BlockDeviceMapping',
        'locationName' => 'BlockDeviceMapping',
      ],
    ],
    'Boolean' => [
      'type' => 'boolean',
    ],
    'BundleIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'BundleId',
      ],
    ],
    'BundleInstanceRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
        'Storage',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
        ],
        'Storage' => [
          'shape' => 'Storage',
        ],
      ],
    ],
    'BundleInstanceResult' => [
      'type' => 'structure',
      'members' => [
        'BundleTask' => [
          'shape' => 'BundleTask',
          'locationName' => 'bundleInstanceTask',
        ],
      ],
    ],
    'BundleTask' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'BundleId' => [
          'shape' => 'String',
          'locationName' => 'bundleId',
        ],
        'State' => [
          'shape' => 'BundleTaskState',
          'locationName' => 'state',
        ],
        'StartTime' => [
          'shape' => 'DateTime',
          'locationName' => 'startTime',
        ],
        'UpdateTime' => [
          'shape' => 'DateTime',
          'locationName' => 'updateTime',
        ],
        'Storage' => [
          'shape' => 'Storage',
          'locationName' => 'storage',
        ],
        'Progress' => [
          'shape' => 'String',
          'locationName' => 'progress',
        ],
        'BundleTaskError' => [
          'shape' => 'BundleTaskError',
          'locationName' => 'error',
        ],
      ],
    ],
    'BundleTaskError' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'String',
          'locationName' => 'code',
        ],
        'Message' => [
          'shape' => 'String',
          'locationName' => 'message',
        ],
      ],
    ],
    'BundleTaskList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'BundleTask',
        'locationName' => 'item',
      ],
    ],
    'BundleTaskState' => [
      'type' => 'string',
      'enum' => [
        'pending',
        'waiting-for-shutdown',
        'bundling',
        'storing',
        'cancelling',
        'complete',
        'failed',
      ],
    ],
    'CancelBundleTaskRequest' => [
      'type' => 'structure',
      'required' => [
        'BundleId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'BundleId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CancelBundleTaskResult' => [
      'type' => 'structure',
      'members' => [
        'BundleTask' => [
          'shape' => 'BundleTask',
          'locationName' => 'bundleInstanceTask',
        ],
      ],
    ],
    'CancelConversionRequest' => [
      'type' => 'structure',
      'required' => [
        'ConversionTaskId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ConversionTaskId' => [
          'shape' => 'String',
          'locationName' => 'conversionTaskId',
        ],
        'ReasonMessage' => [
          'shape' => 'String',
          'locationName' => 'reasonMessage',
        ],
      ],
    ],
    'CancelExportTaskRequest' => [
      'type' => 'structure',
      'required' => [
        'ExportTaskId',
      ],
      'members' => [
        'ExportTaskId' => [
          'shape' => 'String',
          'locationName' => 'exportTaskId',
        ],
      ],
    ],
    'CancelReservedInstancesListingRequest' => [
      'type' => 'structure',
      'required' => [
        'ReservedInstancesListingId',
      ],
      'members' => [
        'ReservedInstancesListingId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesListingId',
        ],
      ],
    ],
    'CancelReservedInstancesListingResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesListings' => [
          'shape' => 'ReservedInstancesListingList',
          'locationName' => 'reservedInstancesListingsSet',
        ],
      ],
    ],
    'CancelSpotInstanceRequestState' => [
      'type' => 'string',
      'enum' => [
        'active',
        'open',
        'closed',
        'cancelled',
        'completed',
      ],
    ],
    'CancelSpotInstanceRequestsRequest' => [
      'type' => 'structure',
      'required' => [
        'SpotInstanceRequestIds',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SpotInstanceRequestIds' => [
          'shape' => 'SpotInstanceRequestIdList',
          'locationName' => 'SpotInstanceRequestId',
        ],
      ],
    ],
    'CancelSpotInstanceRequestsResult' => [
      'type' => 'structure',
      'members' => [
        'CancelledSpotInstanceRequests' => [
          'shape' => 'CancelledSpotInstanceRequestList',
          'locationName' => 'spotInstanceRequestSet',
        ],
      ],
    ],
    'CancelledSpotInstanceRequest' => [
      'type' => 'structure',
      'members' => [
        'SpotInstanceRequestId' => [
          'shape' => 'String',
          'locationName' => 'spotInstanceRequestId',
        ],
        'State' => [
          'shape' => 'CancelSpotInstanceRequestState',
          'locationName' => 'state',
        ],
      ],
    ],
    'CancelledSpotInstanceRequestList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CancelledSpotInstanceRequest',
        'locationName' => 'item',
      ],
    ],
    'ClassicLinkInstance' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'Groups' => [
          'shape' => 'GroupIdentifierList',
          'locationName' => 'groupSet',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'ClassicLinkInstanceList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ClassicLinkInstance',
        'locationName' => 'item',
      ],
    ],
    'ConfirmProductInstanceRequest' => [
      'type' => 'structure',
      'required' => [
        'ProductCode',
        'InstanceId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ProductCode' => [
          'shape' => 'String',
        ],
        'InstanceId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ConfirmProductInstanceResult' => [
      'type' => 'structure',
      'members' => [
        'OwnerId' => [
          'shape' => 'String',
          'locationName' => 'ownerId',
        ],
      ],
    ],
    'ContainerFormat' => [
      'type' => 'string',
      'enum' => [
        'ova',
      ],
    ],
    'ConversionIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'item',
      ],
    ],
    'ConversionTask' => [
      'type' => 'structure',
      'required' => [
        'ConversionTaskId',
        'State',
      ],
      'members' => [
        'ConversionTaskId' => [
          'shape' => 'String',
          'locationName' => 'conversionTaskId',
        ],
        'ExpirationTime' => [
          'shape' => 'String',
          'locationName' => 'expirationTime',
        ],
        'ImportInstance' => [
          'shape' => 'ImportInstanceTaskDetails',
          'locationName' => 'importInstance',
        ],
        'ImportVolume' => [
          'shape' => 'ImportVolumeTaskDetails',
          'locationName' => 'importVolume',
        ],
        'State' => [
          'shape' => 'ConversionTaskState',
          'locationName' => 'state',
        ],
        'StatusMessage' => [
          'shape' => 'String',
          'locationName' => 'statusMessage',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'ConversionTaskState' => [
      'type' => 'string',
      'enum' => [
        'active',
        'cancelling',
        'cancelled',
        'completed',
      ],
    ],
    'CopyImageRequest' => [
      'type' => 'structure',
      'required' => [
        'SourceRegion',
        'SourceImageId',
        'Name',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SourceRegion' => [
          'shape' => 'String',
        ],
        'SourceImageId' => [
          'shape' => 'String',
        ],
        'Name' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
        'ClientToken' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CopyImageResult' => [
      'type' => 'structure',
      'members' => [
        'ImageId' => [
          'shape' => 'String',
          'locationName' => 'imageId',
        ],
      ],
    ],
    'CopySnapshotRequest' => [
      'type' => 'structure',
      'required' => [
        'SourceRegion',
        'SourceSnapshotId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SourceRegion' => [
          'shape' => 'String',
        ],
        'SourceSnapshotId' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
        'DestinationRegion' => [
          'shape' => 'String',
          'locationName' => 'destinationRegion',
        ],
        'PresignedUrl' => [
          'shape' => 'String',
          'locationName' => 'presignedUrl',
        ],
      ],
    ],
    'CopySnapshotResult' => [
      'type' => 'structure',
      'members' => [
        'SnapshotId' => [
          'shape' => 'String',
          'locationName' => 'snapshotId',
        ],
      ],
    ],
    'CreateCustomerGatewayRequest' => [
      'type' => 'structure',
      'required' => [
        'Type',
        'PublicIp',
        'BgpAsn',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Type' => [
          'shape' => 'GatewayType',
        ],
        'PublicIp' => [
          'shape' => 'String',
          'locationName' => 'IpAddress',
        ],
        'BgpAsn' => [
          'shape' => 'Integer',
        ],
      ],
    ],
    'CreateCustomerGatewayResult' => [
      'type' => 'structure',
      'members' => [
        'CustomerGateway' => [
          'shape' => 'CustomerGateway',
          'locationName' => 'customerGateway',
        ],
      ],
    ],
    'CreateDhcpOptionsRequest' => [
      'type' => 'structure',
      'required' => [
        'DhcpConfigurations',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'DhcpConfigurations' => [
          'shape' => 'NewDhcpConfigurationList',
          'locationName' => 'dhcpConfiguration',
        ],
      ],
    ],
    'CreateDhcpOptionsResult' => [
      'type' => 'structure',
      'members' => [
        'DhcpOptions' => [
          'shape' => 'DhcpOptions',
          'locationName' => 'dhcpOptions',
        ],
      ],
    ],
    'CreateImageRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
        'Name',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'Name' => [
          'shape' => 'String',
          'locationName' => 'name',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'NoReboot' => [
          'shape' => 'Boolean',
          'locationName' => 'noReboot',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'BlockDeviceMappingRequestList',
          'locationName' => 'blockDeviceMapping',
        ],
      ],
    ],
    'CreateImageResult' => [
      'type' => 'structure',
      'members' => [
        'ImageId' => [
          'shape' => 'String',
          'locationName' => 'imageId',
        ],
      ],
    ],
    'CreateInstanceExportTaskRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
      ],
      'members' => [
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'TargetEnvironment' => [
          'shape' => 'ExportEnvironment',
          'locationName' => 'targetEnvironment',
        ],
        'ExportToS3Task' => [
          'shape' => 'ExportToS3TaskSpecification',
          'locationName' => 'exportToS3',
        ],
      ],
    ],
    'CreateInstanceExportTaskResult' => [
      'type' => 'structure',
      'members' => [
        'ExportTask' => [
          'shape' => 'ExportTask',
          'locationName' => 'exportTask',
        ],
      ],
    ],
    'CreateInternetGatewayRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
      ],
    ],
    'CreateInternetGatewayResult' => [
      'type' => 'structure',
      'members' => [
        'InternetGateway' => [
          'shape' => 'InternetGateway',
          'locationName' => 'internetGateway',
        ],
      ],
    ],
    'CreateKeyPairRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyName',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'KeyName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateNetworkAclEntryRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkAclId',
        'RuleNumber',
        'Protocol',
        'RuleAction',
        'Egress',
        'CidrBlock',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkAclId' => [
          'shape' => 'String',
          'locationName' => 'networkAclId',
        ],
        'RuleNumber' => [
          'shape' => 'Integer',
          'locationName' => 'ruleNumber',
        ],
        'Protocol' => [
          'shape' => 'String',
          'locationName' => 'protocol',
        ],
        'RuleAction' => [
          'shape' => 'RuleAction',
          'locationName' => 'ruleAction',
        ],
        'Egress' => [
          'shape' => 'Boolean',
          'locationName' => 'egress',
        ],
        'CidrBlock' => [
          'shape' => 'String',
          'locationName' => 'cidrBlock',
        ],
        'IcmpTypeCode' => [
          'shape' => 'IcmpTypeCode',
          'locationName' => 'Icmp',
        ],
        'PortRange' => [
          'shape' => 'PortRange',
          'locationName' => 'portRange',
        ],
      ],
    ],
    'CreateNetworkAclRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
      ],
    ],
    'CreateNetworkAclResult' => [
      'type' => 'structure',
      'members' => [
        'NetworkAcl' => [
          'shape' => 'NetworkAcl',
          'locationName' => 'networkAcl',
        ],
      ],
    ],
    'CreateNetworkInterfaceRequest' => [
      'type' => 'structure',
      'required' => [
        'SubnetId',
      ],
      'members' => [
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'Groups' => [
          'shape' => 'SecurityGroupIdStringList',
          'locationName' => 'SecurityGroupId',
        ],
        'PrivateIpAddresses' => [
          'shape' => 'PrivateIpAddressSpecificationList',
          'locationName' => 'privateIpAddresses',
        ],
        'SecondaryPrivateIpAddressCount' => [
          'shape' => 'Integer',
          'locationName' => 'secondaryPrivateIpAddressCount',
        ],
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
      ],
    ],
    'CreateNetworkInterfaceResult' => [
      'type' => 'structure',
      'members' => [
        'NetworkInterface' => [
          'shape' => 'NetworkInterface',
          'locationName' => 'networkInterface',
        ],
      ],
    ],
    'CreatePlacementGroupRequest' => [
      'type' => 'structure',
      'required' => [
        'GroupName',
        'Strategy',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupName' => [
          'shape' => 'String',
          'locationName' => 'groupName',
        ],
        'Strategy' => [
          'shape' => 'PlacementStrategy',
          'locationName' => 'strategy',
        ],
      ],
    ],
    'CreateReservedInstancesListingRequest' => [
      'type' => 'structure',
      'required' => [
        'ReservedInstancesId',
        'InstanceCount',
        'PriceSchedules',
        'ClientToken',
      ],
      'members' => [
        'ReservedInstancesId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesId',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
          'locationName' => 'instanceCount',
        ],
        'PriceSchedules' => [
          'shape' => 'PriceScheduleSpecificationList',
          'locationName' => 'priceSchedules',
        ],
        'ClientToken' => [
          'shape' => 'String',
          'locationName' => 'clientToken',
        ],
      ],
    ],
    'CreateReservedInstancesListingResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesListings' => [
          'shape' => 'ReservedInstancesListingList',
          'locationName' => 'reservedInstancesListingsSet',
        ],
      ],
    ],
    'CreateRouteRequest' => [
      'type' => 'structure',
      'required' => [
        'RouteTableId',
        'DestinationCidrBlock',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'RouteTableId' => [
          'shape' => 'String',
          'locationName' => 'routeTableId',
        ],
        'DestinationCidrBlock' => [
          'shape' => 'String',
          'locationName' => 'destinationCidrBlock',
        ],
        'GatewayId' => [
          'shape' => 'String',
          'locationName' => 'gatewayId',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'VpcPeeringConnectionId' => [
          'shape' => 'String',
          'locationName' => 'vpcPeeringConnectionId',
        ],
      ],
    ],
    'CreateRouteTableRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
      ],
    ],
    'CreateRouteTableResult' => [
      'type' => 'structure',
      'members' => [
        'RouteTable' => [
          'shape' => 'RouteTable',
          'locationName' => 'routeTable',
        ],
      ],
    ],
    'CreateSecurityGroupRequest' => [
      'type' => 'structure',
      'required' => [
        'GroupName',
        'Description',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupName' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'GroupDescription',
        ],
        'VpcId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateSecurityGroupResult' => [
      'type' => 'structure',
      'members' => [
        'GroupId' => [
          'shape' => 'String',
          'locationName' => 'groupId',
        ],
      ],
    ],
    'CreateSnapshotRequest' => [
      'type' => 'structure',
      'required' => [
        'VolumeId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VolumeId' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateSpotDatafeedSubscriptionRequest' => [
      'type' => 'structure',
      'required' => [
        'Bucket',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Bucket' => [
          'shape' => 'String',
          'locationName' => 'bucket',
        ],
        'Prefix' => [
          'shape' => 'String',
          'locationName' => 'prefix',
        ],
      ],
    ],
    'CreateSpotDatafeedSubscriptionResult' => [
      'type' => 'structure',
      'members' => [
        'SpotDatafeedSubscription' => [
          'shape' => 'SpotDatafeedSubscription',
          'locationName' => 'spotDatafeedSubscription',
        ],
      ],
    ],
    'CreateSubnetRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcId',
        'CidrBlock',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcId' => [
          'shape' => 'String',
        ],
        'CidrBlock' => [
          'shape' => 'String',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateSubnetResult' => [
      'type' => 'structure',
      'members' => [
        'Subnet' => [
          'shape' => 'Subnet',
          'locationName' => 'subnet',
        ],
      ],
    ],
    'CreateTagsRequest' => [
      'type' => 'structure',
      'required' => [
        'Resources',
        'Tags',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Resources' => [
          'shape' => 'ResourceIdList',
          'locationName' => 'ResourceId',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'Tag',
        ],
      ],
    ],
    'CreateVolumePermission' => [
      'type' => 'structure',
      'members' => [
        'UserId' => [
          'shape' => 'String',
          'locationName' => 'userId',
        ],
        'Group' => [
          'shape' => 'PermissionGroup',
          'locationName' => 'group',
        ],
      ],
    ],
    'CreateVolumePermissionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CreateVolumePermission',
        'locationName' => 'item',
      ],
    ],
    'CreateVolumePermissionModifications' => [
      'type' => 'structure',
      'members' => [
        'Add' => [
          'shape' => 'CreateVolumePermissionList',
        ],
        'Remove' => [
          'shape' => 'CreateVolumePermissionList',
        ],
      ],
    ],
    'CreateVolumeRequest' => [
      'type' => 'structure',
      'required' => [
        'AvailabilityZone',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Size' => [
          'shape' => 'Integer',
        ],
        'SnapshotId' => [
          'shape' => 'String',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
        ],
        'VolumeType' => [
          'shape' => 'VolumeType',
        ],
        'Iops' => [
          'shape' => 'Integer',
        ],
        'Encrypted' => [
          'shape' => 'Boolean',
          'locationName' => 'encrypted',
        ],
        'KmsKeyId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateVpcPeeringConnectionRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'PeerVpcId' => [
          'shape' => 'String',
          'locationName' => 'peerVpcId',
        ],
        'PeerOwnerId' => [
          'shape' => 'String',
          'locationName' => 'peerOwnerId',
        ],
      ],
    ],
    'CreateVpcPeeringConnectionResult' => [
      'type' => 'structure',
      'members' => [
        'VpcPeeringConnection' => [
          'shape' => 'VpcPeeringConnection',
          'locationName' => 'vpcPeeringConnection',
        ],
      ],
    ],
    'CreateVpcRequest' => [
      'type' => 'structure',
      'required' => [
        'CidrBlock',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'CidrBlock' => [
          'shape' => 'String',
        ],
        'InstanceTenancy' => [
          'shape' => 'Tenancy',
          'locationName' => 'instanceTenancy',
        ],
      ],
    ],
    'CreateVpcResult' => [
      'type' => 'structure',
      'members' => [
        'Vpc' => [
          'shape' => 'Vpc',
          'locationName' => 'vpc',
        ],
      ],
    ],
    'CreateVpnConnectionRequest' => [
      'type' => 'structure',
      'required' => [
        'Type',
        'CustomerGatewayId',
        'VpnGatewayId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Type' => [
          'shape' => 'String',
        ],
        'CustomerGatewayId' => [
          'shape' => 'String',
        ],
        'VpnGatewayId' => [
          'shape' => 'String',
        ],
        'Options' => [
          'shape' => 'VpnConnectionOptionsSpecification',
          'locationName' => 'options',
        ],
      ],
    ],
    'CreateVpnConnectionResult' => [
      'type' => 'structure',
      'members' => [
        'VpnConnection' => [
          'shape' => 'VpnConnection',
          'locationName' => 'vpnConnection',
        ],
      ],
    ],
    'CreateVpnConnectionRouteRequest' => [
      'type' => 'structure',
      'required' => [
        'VpnConnectionId',
        'DestinationCidrBlock',
      ],
      'members' => [
        'VpnConnectionId' => [
          'shape' => 'String',
        ],
        'DestinationCidrBlock' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateVpnGatewayRequest' => [
      'type' => 'structure',
      'required' => [
        'Type',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Type' => [
          'shape' => 'GatewayType',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateVpnGatewayResult' => [
      'type' => 'structure',
      'members' => [
        'VpnGateway' => [
          'shape' => 'VpnGateway',
          'locationName' => 'vpnGateway',
        ],
      ],
    ],
    'CurrencyCodeValues' => [
      'type' => 'string',
      'enum' => [
        'USD',
      ],
    ],
    'CustomerGateway' => [
      'type' => 'structure',
      'members' => [
        'CustomerGatewayId' => [
          'shape' => 'String',
          'locationName' => 'customerGatewayId',
        ],
        'State' => [
          'shape' => 'String',
          'locationName' => 'state',
        ],
        'Type' => [
          'shape' => 'String',
          'locationName' => 'type',
        ],
        'IpAddress' => [
          'shape' => 'String',
          'locationName' => 'ipAddress',
        ],
        'BgpAsn' => [
          'shape' => 'String',
          'locationName' => 'bgpAsn',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'CustomerGatewayIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'CustomerGatewayId',
      ],
    ],
    'CustomerGatewayList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CustomerGateway',
        'locationName' => 'item',
      ],
    ],
    'DatafeedSubscriptionState' => [
      'type' => 'string',
      'enum' => [
        'Active',
        'Inactive',
      ],
    ],
    'DateTime' => [
      'type' => 'timestamp',
    ],
    'DeleteCustomerGatewayRequest' => [
      'type' => 'structure',
      'required' => [
        'CustomerGatewayId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'CustomerGatewayId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteDhcpOptionsRequest' => [
      'type' => 'structure',
      'required' => [
        'DhcpOptionsId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'DhcpOptionsId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteInternetGatewayRequest' => [
      'type' => 'structure',
      'required' => [
        'InternetGatewayId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InternetGatewayId' => [
          'shape' => 'String',
          'locationName' => 'internetGatewayId',
        ],
      ],
    ],
    'DeleteKeyPairRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyName',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'KeyName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteNetworkAclEntryRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkAclId',
        'RuleNumber',
        'Egress',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkAclId' => [
          'shape' => 'String',
          'locationName' => 'networkAclId',
        ],
        'RuleNumber' => [
          'shape' => 'Integer',
          'locationName' => 'ruleNumber',
        ],
        'Egress' => [
          'shape' => 'Boolean',
          'locationName' => 'egress',
        ],
      ],
    ],
    'DeleteNetworkAclRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkAclId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkAclId' => [
          'shape' => 'String',
          'locationName' => 'networkAclId',
        ],
      ],
    ],
    'DeleteNetworkInterfaceRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkInterfaceId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
      ],
    ],
    'DeletePlacementGroupRequest' => [
      'type' => 'structure',
      'required' => [
        'GroupName',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupName' => [
          'shape' => 'String',
          'locationName' => 'groupName',
        ],
      ],
    ],
    'DeleteRouteRequest' => [
      'type' => 'structure',
      'required' => [
        'RouteTableId',
        'DestinationCidrBlock',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'RouteTableId' => [
          'shape' => 'String',
          'locationName' => 'routeTableId',
        ],
        'DestinationCidrBlock' => [
          'shape' => 'String',
          'locationName' => 'destinationCidrBlock',
        ],
      ],
    ],
    'DeleteRouteTableRequest' => [
      'type' => 'structure',
      'required' => [
        'RouteTableId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'RouteTableId' => [
          'shape' => 'String',
          'locationName' => 'routeTableId',
        ],
      ],
    ],
    'DeleteSecurityGroupRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupName' => [
          'shape' => 'String',
        ],
        'GroupId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteSnapshotRequest' => [
      'type' => 'structure',
      'required' => [
        'SnapshotId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SnapshotId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteSpotDatafeedSubscriptionRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
      ],
    ],
    'DeleteSubnetRequest' => [
      'type' => 'structure',
      'required' => [
        'SubnetId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SubnetId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteTagsRequest' => [
      'type' => 'structure',
      'required' => [
        'Resources',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Resources' => [
          'shape' => 'ResourceIdList',
          'locationName' => 'resourceId',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tag',
        ],
      ],
    ],
    'DeleteVolumeRequest' => [
      'type' => 'structure',
      'required' => [
        'VolumeId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VolumeId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteVpcPeeringConnectionRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcPeeringConnectionId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcPeeringConnectionId' => [
          'shape' => 'String',
          'locationName' => 'vpcPeeringConnectionId',
        ],
      ],
    ],
    'DeleteVpcPeeringConnectionResult' => [
      'type' => 'structure',
      'members' => [
        'Return' => [
          'shape' => 'Boolean',
          'locationName' => 'return',
        ],
      ],
    ],
    'DeleteVpcRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteVpnConnectionRequest' => [
      'type' => 'structure',
      'required' => [
        'VpnConnectionId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpnConnectionId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteVpnConnectionRouteRequest' => [
      'type' => 'structure',
      'required' => [
        'VpnConnectionId',
        'DestinationCidrBlock',
      ],
      'members' => [
        'VpnConnectionId' => [
          'shape' => 'String',
        ],
        'DestinationCidrBlock' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteVpnGatewayRequest' => [
      'type' => 'structure',
      'required' => [
        'VpnGatewayId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpnGatewayId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeregisterImageRequest' => [
      'type' => 'structure',
      'required' => [
        'ImageId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ImageId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeAccountAttributesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'AttributeNames' => [
          'shape' => 'AccountAttributeNameStringList',
          'locationName' => 'attributeName',
        ],
      ],
    ],
    'DescribeAccountAttributesResult' => [
      'type' => 'structure',
      'members' => [
        'AccountAttributes' => [
          'shape' => 'AccountAttributeList',
          'locationName' => 'accountAttributeSet',
        ],
      ],
    ],
    'DescribeAddressesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'PublicIps' => [
          'shape' => 'PublicIpStringList',
          'locationName' => 'PublicIp',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'AllocationIds' => [
          'shape' => 'AllocationIdList',
          'locationName' => 'AllocationId',
        ],
      ],
    ],
    'DescribeAddressesResult' => [
      'type' => 'structure',
      'members' => [
        'Addresses' => [
          'shape' => 'AddressList',
          'locationName' => 'addressesSet',
        ],
      ],
    ],
    'DescribeAvailabilityZonesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ZoneNames' => [
          'shape' => 'ZoneNameStringList',
          'locationName' => 'ZoneName',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeAvailabilityZonesResult' => [
      'type' => 'structure',
      'members' => [
        'AvailabilityZones' => [
          'shape' => 'AvailabilityZoneList',
          'locationName' => 'availabilityZoneInfo',
        ],
      ],
    ],
    'DescribeBundleTasksRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'BundleIds' => [
          'shape' => 'BundleIdStringList',
          'locationName' => 'BundleId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeBundleTasksResult' => [
      'type' => 'structure',
      'members' => [
        'BundleTasks' => [
          'shape' => 'BundleTaskList',
          'locationName' => 'bundleInstanceTasksSet',
        ],
      ],
    ],
    'DescribeClassicLinkInstancesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceIds' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'InstanceId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
        'MaxResults' => [
          'shape' => 'Integer',
          'locationName' => 'maxResults',
        ],
      ],
    ],
    'DescribeClassicLinkInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'Instances' => [
          'shape' => 'ClassicLinkInstanceList',
          'locationName' => 'instancesSet',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeConversionTaskList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ConversionTask',
        'locationName' => 'item',
      ],
    ],
    'DescribeConversionTasksRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'filter',
        ],
        'ConversionTaskIds' => [
          'shape' => 'ConversionIdStringList',
          'locationName' => 'conversionTaskId',
        ],
      ],
    ],
    'DescribeConversionTasksResult' => [
      'type' => 'structure',
      'members' => [
        'ConversionTasks' => [
          'shape' => 'DescribeConversionTaskList',
          'locationName' => 'conversionTasks',
        ],
      ],
    ],
    'DescribeCustomerGatewaysRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'CustomerGatewayIds' => [
          'shape' => 'CustomerGatewayIdStringList',
          'locationName' => 'CustomerGatewayId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeCustomerGatewaysResult' => [
      'type' => 'structure',
      'members' => [
        'CustomerGateways' => [
          'shape' => 'CustomerGatewayList',
          'locationName' => 'customerGatewaySet',
        ],
      ],
    ],
    'DescribeDhcpOptionsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'DhcpOptionsIds' => [
          'shape' => 'DhcpOptionsIdStringList',
          'locationName' => 'DhcpOptionsId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeDhcpOptionsResult' => [
      'type' => 'structure',
      'members' => [
        'DhcpOptions' => [
          'shape' => 'DhcpOptionsList',
          'locationName' => 'dhcpOptionsSet',
        ],
      ],
    ],
    'DescribeExportTasksRequest' => [
      'type' => 'structure',
      'members' => [
        'ExportTaskIds' => [
          'shape' => 'ExportTaskIdStringList',
          'locationName' => 'exportTaskId',
        ],
      ],
    ],
    'DescribeExportTasksResult' => [
      'type' => 'structure',
      'members' => [
        'ExportTasks' => [
          'shape' => 'ExportTaskList',
          'locationName' => 'exportTaskSet',
        ],
      ],
    ],
    'DescribeImageAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'ImageId',
        'Attribute',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ImageId' => [
          'shape' => 'String',
        ],
        'Attribute' => [
          'shape' => 'ImageAttributeName',
        ],
      ],
    ],
    'DescribeImagesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ImageIds' => [
          'shape' => 'ImageIdStringList',
          'locationName' => 'ImageId',
        ],
        'Owners' => [
          'shape' => 'OwnerStringList',
          'locationName' => 'Owner',
        ],
        'ExecutableUsers' => [
          'shape' => 'ExecutableByStringList',
          'locationName' => 'ExecutableBy',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeImagesResult' => [
      'type' => 'structure',
      'members' => [
        'Images' => [
          'shape' => 'ImageList',
          'locationName' => 'imagesSet',
        ],
      ],
    ],
    'DescribeInstanceAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
        'Attribute',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'Attribute' => [
          'shape' => 'InstanceAttributeName',
          'locationName' => 'attribute',
        ],
      ],
    ],
    'DescribeInstanceStatusRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceIds' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'InstanceId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'NextToken' => [
          'shape' => 'String',
        ],
        'MaxResults' => [
          'shape' => 'Integer',
        ],
        'IncludeAllInstances' => [
          'shape' => 'Boolean',
          'locationName' => 'includeAllInstances',
        ],
      ],
    ],
    'DescribeInstanceStatusResult' => [
      'type' => 'structure',
      'members' => [
        'InstanceStatuses' => [
          'shape' => 'InstanceStatusList',
          'locationName' => 'instanceStatusSet',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeInstancesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceIds' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'InstanceId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
        'MaxResults' => [
          'shape' => 'Integer',
          'locationName' => 'maxResults',
        ],
      ],
    ],
    'DescribeInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'Reservations' => [
          'shape' => 'ReservationList',
          'locationName' => 'reservationSet',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeInternetGatewaysRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InternetGatewayIds' => [
          'shape' => 'ValueStringList',
          'locationName' => 'internetGatewayId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeInternetGatewaysResult' => [
      'type' => 'structure',
      'members' => [
        'InternetGateways' => [
          'shape' => 'InternetGatewayList',
          'locationName' => 'internetGatewaySet',
        ],
      ],
    ],
    'DescribeKeyPairsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'KeyNames' => [
          'shape' => 'KeyNameStringList',
          'locationName' => 'KeyName',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeKeyPairsResult' => [
      'type' => 'structure',
      'members' => [
        'KeyPairs' => [
          'shape' => 'KeyPairList',
          'locationName' => 'keySet',
        ],
      ],
    ],
    'DescribeNetworkAclsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkAclIds' => [
          'shape' => 'ValueStringList',
          'locationName' => 'NetworkAclId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeNetworkAclsResult' => [
      'type' => 'structure',
      'members' => [
        'NetworkAcls' => [
          'shape' => 'NetworkAclList',
          'locationName' => 'networkAclSet',
        ],
      ],
    ],
    'DescribeNetworkInterfaceAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkInterfaceId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'Attribute' => [
          'shape' => 'NetworkInterfaceAttribute',
          'locationName' => 'attribute',
        ],
      ],
    ],
    'DescribeNetworkInterfaceAttributeResult' => [
      'type' => 'structure',
      'members' => [
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'Description' => [
          'shape' => 'AttributeValue',
          'locationName' => 'description',
        ],
        'SourceDestCheck' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'sourceDestCheck',
        ],
        'Groups' => [
          'shape' => 'GroupIdentifierList',
          'locationName' => 'groupSet',
        ],
        'Attachment' => [
          'shape' => 'NetworkInterfaceAttachment',
          'locationName' => 'attachment',
        ],
      ],
    ],
    'DescribeNetworkInterfacesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkInterfaceIds' => [
          'shape' => 'NetworkInterfaceIdList',
          'locationName' => 'NetworkInterfaceId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'filter',
        ],
      ],
    ],
    'DescribeNetworkInterfacesResult' => [
      'type' => 'structure',
      'members' => [
        'NetworkInterfaces' => [
          'shape' => 'NetworkInterfaceList',
          'locationName' => 'networkInterfaceSet',
        ],
      ],
    ],
    'DescribePlacementGroupsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupNames' => [
          'shape' => 'PlacementGroupStringList',
          'locationName' => 'groupName',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribePlacementGroupsResult' => [
      'type' => 'structure',
      'members' => [
        'PlacementGroups' => [
          'shape' => 'PlacementGroupList',
          'locationName' => 'placementGroupSet',
        ],
      ],
    ],
    'DescribeRegionsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'RegionNames' => [
          'shape' => 'RegionNameStringList',
          'locationName' => 'RegionName',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeRegionsResult' => [
      'type' => 'structure',
      'members' => [
        'Regions' => [
          'shape' => 'RegionList',
          'locationName' => 'regionInfo',
        ],
      ],
    ],
    'DescribeReservedInstancesListingsRequest' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesId',
        ],
        'ReservedInstancesListingId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesListingId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'filters',
        ],
      ],
    ],
    'DescribeReservedInstancesListingsResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesListings' => [
          'shape' => 'ReservedInstancesListingList',
          'locationName' => 'reservedInstancesListingsSet',
        ],
      ],
    ],
    'DescribeReservedInstancesModificationsRequest' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesModificationIds' => [
          'shape' => 'ReservedInstancesModificationIdStringList',
          'locationName' => 'ReservedInstancesModificationId',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeReservedInstancesModificationsResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesModifications' => [
          'shape' => 'ReservedInstancesModificationList',
          'locationName' => 'reservedInstancesModificationsSet',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeReservedInstancesOfferingsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ReservedInstancesOfferingIds' => [
          'shape' => 'ReservedInstancesOfferingIdStringList',
          'locationName' => 'ReservedInstancesOfferingId',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
        ],
        'ProductDescription' => [
          'shape' => 'RIProductDescription',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'InstanceTenancy' => [
          'shape' => 'Tenancy',
          'locationName' => 'instanceTenancy',
        ],
        'OfferingType' => [
          'shape' => 'OfferingTypeValues',
          'locationName' => 'offeringType',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
        'MaxResults' => [
          'shape' => 'Integer',
          'locationName' => 'maxResults',
        ],
        'IncludeMarketplace' => [
          'shape' => 'Boolean',
        ],
        'MinDuration' => [
          'shape' => 'Long',
        ],
        'MaxDuration' => [
          'shape' => 'Long',
        ],
        'MaxInstanceCount' => [
          'shape' => 'Integer',
        ],
      ],
    ],
    'DescribeReservedInstancesOfferingsResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesOfferings' => [
          'shape' => 'ReservedInstancesOfferingList',
          'locationName' => 'reservedInstancesOfferingsSet',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeReservedInstancesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ReservedInstancesIds' => [
          'shape' => 'ReservedInstancesIdStringList',
          'locationName' => 'ReservedInstancesId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'OfferingType' => [
          'shape' => 'OfferingTypeValues',
          'locationName' => 'offeringType',
        ],
      ],
    ],
    'DescribeReservedInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstances' => [
          'shape' => 'ReservedInstancesList',
          'locationName' => 'reservedInstancesSet',
        ],
      ],
    ],
    'DescribeRouteTablesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'RouteTableIds' => [
          'shape' => 'ValueStringList',
          'locationName' => 'RouteTableId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeRouteTablesResult' => [
      'type' => 'structure',
      'members' => [
        'RouteTables' => [
          'shape' => 'RouteTableList',
          'locationName' => 'routeTableSet',
        ],
      ],
    ],
    'DescribeSecurityGroupsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupNames' => [
          'shape' => 'GroupNameStringList',
          'locationName' => 'GroupName',
        ],
        'GroupIds' => [
          'shape' => 'GroupIdStringList',
          'locationName' => 'GroupId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeSecurityGroupsResult' => [
      'type' => 'structure',
      'members' => [
        'SecurityGroups' => [
          'shape' => 'SecurityGroupList',
          'locationName' => 'securityGroupInfo',
        ],
      ],
    ],
    'DescribeSnapshotAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'SnapshotId',
        'Attribute',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SnapshotId' => [
          'shape' => 'String',
        ],
        'Attribute' => [
          'shape' => 'SnapshotAttributeName',
        ],
      ],
    ],
    'DescribeSnapshotAttributeResult' => [
      'type' => 'structure',
      'members' => [
        'SnapshotId' => [
          'shape' => 'String',
          'locationName' => 'snapshotId',
        ],
        'CreateVolumePermissions' => [
          'shape' => 'CreateVolumePermissionList',
          'locationName' => 'createVolumePermission',
        ],
        'ProductCodes' => [
          'shape' => 'ProductCodeList',
          'locationName' => 'productCodes',
        ],
      ],
    ],
    'DescribeSnapshotsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SnapshotIds' => [
          'shape' => 'SnapshotIdStringList',
          'locationName' => 'SnapshotId',
        ],
        'OwnerIds' => [
          'shape' => 'OwnerStringList',
          'locationName' => 'Owner',
        ],
        'RestorableByUserIds' => [
          'shape' => 'RestorableByStringList',
          'locationName' => 'RestorableBy',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeSnapshotsResult' => [
      'type' => 'structure',
      'members' => [
        'Snapshots' => [
          'shape' => 'SnapshotList',
          'locationName' => 'snapshotSet',
        ],
      ],
    ],
    'DescribeSpotDatafeedSubscriptionRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
      ],
    ],
    'DescribeSpotDatafeedSubscriptionResult' => [
      'type' => 'structure',
      'members' => [
        'SpotDatafeedSubscription' => [
          'shape' => 'SpotDatafeedSubscription',
          'locationName' => 'spotDatafeedSubscription',
        ],
      ],
    ],
    'DescribeSpotInstanceRequestsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SpotInstanceRequestIds' => [
          'shape' => 'SpotInstanceRequestIdList',
          'locationName' => 'SpotInstanceRequestId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeSpotInstanceRequestsResult' => [
      'type' => 'structure',
      'members' => [
        'SpotInstanceRequests' => [
          'shape' => 'SpotInstanceRequestList',
          'locationName' => 'spotInstanceRequestSet',
        ],
      ],
    ],
    'DescribeSpotPriceHistoryRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'StartTime' => [
          'shape' => 'DateTime',
          'locationName' => 'startTime',
        ],
        'EndTime' => [
          'shape' => 'DateTime',
          'locationName' => 'endTime',
        ],
        'InstanceTypes' => [
          'shape' => 'InstanceTypeList',
          'locationName' => 'InstanceType',
        ],
        'ProductDescriptions' => [
          'shape' => 'ProductDescriptionList',
          'locationName' => 'ProductDescription',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'MaxResults' => [
          'shape' => 'Integer',
          'locationName' => 'maxResults',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeSpotPriceHistoryResult' => [
      'type' => 'structure',
      'members' => [
        'SpotPriceHistory' => [
          'shape' => 'SpotPriceHistoryList',
          'locationName' => 'spotPriceHistorySet',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeSubnetsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SubnetIds' => [
          'shape' => 'SubnetIdStringList',
          'locationName' => 'SubnetId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeSubnetsResult' => [
      'type' => 'structure',
      'members' => [
        'Subnets' => [
          'shape' => 'SubnetList',
          'locationName' => 'subnetSet',
        ],
      ],
    ],
    'DescribeTagsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'MaxResults' => [
          'shape' => 'Integer',
          'locationName' => 'maxResults',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeTagsResult' => [
      'type' => 'structure',
      'members' => [
        'Tags' => [
          'shape' => 'TagDescriptionList',
          'locationName' => 'tagSet',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeVolumeAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'VolumeId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VolumeId' => [
          'shape' => 'String',
        ],
        'Attribute' => [
          'shape' => 'VolumeAttributeName',
        ],
      ],
    ],
    'DescribeVolumeAttributeResult' => [
      'type' => 'structure',
      'members' => [
        'VolumeId' => [
          'shape' => 'String',
          'locationName' => 'volumeId',
        ],
        'AutoEnableIO' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'autoEnableIO',
        ],
        'ProductCodes' => [
          'shape' => 'ProductCodeList',
          'locationName' => 'productCodes',
        ],
      ],
    ],
    'DescribeVolumeStatusRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VolumeIds' => [
          'shape' => 'VolumeIdStringList',
          'locationName' => 'VolumeId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'NextToken' => [
          'shape' => 'String',
        ],
        'MaxResults' => [
          'shape' => 'Integer',
        ],
      ],
    ],
    'DescribeVolumeStatusResult' => [
      'type' => 'structure',
      'members' => [
        'VolumeStatuses' => [
          'shape' => 'VolumeStatusList',
          'locationName' => 'volumeStatusSet',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeVolumesRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VolumeIds' => [
          'shape' => 'VolumeIdStringList',
          'locationName' => 'VolumeId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
        'MaxResults' => [
          'shape' => 'Integer',
          'locationName' => 'maxResults',
        ],
      ],
    ],
    'DescribeVolumesResult' => [
      'type' => 'structure',
      'members' => [
        'Volumes' => [
          'shape' => 'VolumeList',
          'locationName' => 'volumeSet',
        ],
        'NextToken' => [
          'shape' => 'String',
          'locationName' => 'nextToken',
        ],
      ],
    ],
    'DescribeVpcAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcId' => [
          'shape' => 'String',
        ],
        'Attribute' => [
          'shape' => 'VpcAttributeName',
        ],
      ],
    ],
    'DescribeVpcAttributeResult' => [
      'type' => 'structure',
      'members' => [
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'EnableDnsSupport' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'enableDnsSupport',
        ],
        'EnableDnsHostnames' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'enableDnsHostnames',
        ],
      ],
    ],
    'DescribeVpcClassicLinkRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcIds' => [
          'shape' => 'VpcClassicLinkIdList',
          'locationName' => 'VpcId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeVpcClassicLinkResult' => [
      'type' => 'structure',
      'members' => [
        'Vpcs' => [
          'shape' => 'VpcClassicLinkList',
          'locationName' => 'vpcSet',
        ],
      ],
    ],
    'DescribeVpcPeeringConnectionsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcPeeringConnectionIds' => [
          'shape' => 'ValueStringList',
          'locationName' => 'VpcPeeringConnectionId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeVpcPeeringConnectionsResult' => [
      'type' => 'structure',
      'members' => [
        'VpcPeeringConnections' => [
          'shape' => 'VpcPeeringConnectionList',
          'locationName' => 'vpcPeeringConnectionSet',
        ],
      ],
    ],
    'DescribeVpcsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcIds' => [
          'shape' => 'VpcIdStringList',
          'locationName' => 'VpcId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeVpcsResult' => [
      'type' => 'structure',
      'members' => [
        'Vpcs' => [
          'shape' => 'VpcList',
          'locationName' => 'vpcSet',
        ],
      ],
    ],
    'DescribeVpnConnectionsRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpnConnectionIds' => [
          'shape' => 'VpnConnectionIdStringList',
          'locationName' => 'VpnConnectionId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeVpnConnectionsResult' => [
      'type' => 'structure',
      'members' => [
        'VpnConnections' => [
          'shape' => 'VpnConnectionList',
          'locationName' => 'vpnConnectionSet',
        ],
      ],
    ],
    'DescribeVpnGatewaysRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpnGatewayIds' => [
          'shape' => 'VpnGatewayIdStringList',
          'locationName' => 'VpnGatewayId',
        ],
        'Filters' => [
          'shape' => 'FilterList',
          'locationName' => 'Filter',
        ],
      ],
    ],
    'DescribeVpnGatewaysResult' => [
      'type' => 'structure',
      'members' => [
        'VpnGateways' => [
          'shape' => 'VpnGatewayList',
          'locationName' => 'vpnGatewaySet',
        ],
      ],
    ],
    'DetachClassicLinkVpcRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
      ],
    ],
    'DetachClassicLinkVpcResult' => [
      'type' => 'structure',
      'members' => [
        'Return' => [
          'shape' => 'Boolean',
          'locationName' => 'return',
        ],
      ],
    ],
    'DetachInternetGatewayRequest' => [
      'type' => 'structure',
      'required' => [
        'InternetGatewayId',
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InternetGatewayId' => [
          'shape' => 'String',
          'locationName' => 'internetGatewayId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
      ],
    ],
    'DetachNetworkInterfaceRequest' => [
      'type' => 'structure',
      'required' => [
        'AttachmentId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'AttachmentId' => [
          'shape' => 'String',
          'locationName' => 'attachmentId',
        ],
        'Force' => [
          'shape' => 'Boolean',
          'locationName' => 'force',
        ],
      ],
    ],
    'DetachVolumeRequest' => [
      'type' => 'structure',
      'required' => [
        'VolumeId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VolumeId' => [
          'shape' => 'String',
        ],
        'InstanceId' => [
          'shape' => 'String',
        ],
        'Device' => [
          'shape' => 'String',
        ],
        'Force' => [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DetachVpnGatewayRequest' => [
      'type' => 'structure',
      'required' => [
        'VpnGatewayId',
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpnGatewayId' => [
          'shape' => 'String',
        ],
        'VpcId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeviceType' => [
      'type' => 'string',
      'enum' => [
        'ebs',
        'instance-store',
      ],
    ],
    'DhcpConfiguration' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'String',
          'locationName' => 'key',
        ],
        'Values' => [
          'shape' => 'DhcpConfigurationValueList',
          'locationName' => 'valueSet',
        ],
      ],
    ],
    'DhcpConfigurationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DhcpConfiguration',
        'locationName' => 'item',
      ],
    ],
    'DhcpOptions' => [
      'type' => 'structure',
      'members' => [
        'DhcpOptionsId' => [
          'shape' => 'String',
          'locationName' => 'dhcpOptionsId',
        ],
        'DhcpConfigurations' => [
          'shape' => 'DhcpConfigurationList',
          'locationName' => 'dhcpConfigurationSet',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'DhcpOptionsIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'DhcpOptionsId',
      ],
    ],
    'DhcpOptionsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DhcpOptions',
        'locationName' => 'item',
      ],
    ],
    'DisableVgwRoutePropagationRequest' => [
      'type' => 'structure',
      'required' => [
        'RouteTableId',
        'GatewayId',
      ],
      'members' => [
        'RouteTableId' => [
          'shape' => 'String',
        ],
        'GatewayId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DisableVpcClassicLinkRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
      ],
    ],
    'DisableVpcClassicLinkResult' => [
      'type' => 'structure',
      'members' => [
        'Return' => [
          'shape' => 'Boolean',
          'locationName' => 'return',
        ],
      ],
    ],
    'DisassociateAddressRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'PublicIp' => [
          'shape' => 'String',
        ],
        'AssociationId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DisassociateRouteTableRequest' => [
      'type' => 'structure',
      'required' => [
        'AssociationId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'AssociationId' => [
          'shape' => 'String',
          'locationName' => 'associationId',
        ],
      ],
    ],
    'DiskImage' => [
      'type' => 'structure',
      'members' => [
        'Image' => [
          'shape' => 'DiskImageDetail',
        ],
        'Description' => [
          'shape' => 'String',
        ],
        'Volume' => [
          'shape' => 'VolumeDetail',
        ],
      ],
    ],
    'DiskImageDescription' => [
      'type' => 'structure',
      'required' => [
        'Format',
        'Size',
        'ImportManifestUrl',
      ],
      'members' => [
        'Format' => [
          'shape' => 'DiskImageFormat',
          'locationName' => 'format',
        ],
        'Size' => [
          'shape' => 'Long',
          'locationName' => 'size',
        ],
        'ImportManifestUrl' => [
          'shape' => 'String',
          'locationName' => 'importManifestUrl',
        ],
        'Checksum' => [
          'shape' => 'String',
          'locationName' => 'checksum',
        ],
      ],
    ],
    'DiskImageDetail' => [
      'type' => 'structure',
      'required' => [
        'Format',
        'Bytes',
        'ImportManifestUrl',
      ],
      'members' => [
        'Format' => [
          'shape' => 'DiskImageFormat',
          'locationName' => 'format',
        ],
        'Bytes' => [
          'shape' => 'Long',
          'locationName' => 'bytes',
        ],
        'ImportManifestUrl' => [
          'shape' => 'String',
          'locationName' => 'importManifestUrl',
        ],
      ],
    ],
    'DiskImageFormat' => [
      'type' => 'string',
      'enum' => [
        'VMDK',
        'RAW',
        'VHD',
      ],
    ],
    'DiskImageList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DiskImage',
      ],
    ],
    'DiskImageVolumeDescription' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Size' => [
          'shape' => 'Long',
          'locationName' => 'size',
        ],
        'Id' => [
          'shape' => 'String',
          'locationName' => 'id',
        ],
      ],
    ],
    'DomainType' => [
      'type' => 'string',
      'enum' => [
        'vpc',
        'standard',
      ],
    ],
    'Double' => [
      'type' => 'double',
    ],
    'EbsBlockDevice' => [
      'type' => 'structure',
      'members' => [
        'SnapshotId' => [
          'shape' => 'String',
          'locationName' => 'snapshotId',
        ],
        'VolumeSize' => [
          'shape' => 'Integer',
          'locationName' => 'volumeSize',
        ],
        'DeleteOnTermination' => [
          'shape' => 'Boolean',
          'locationName' => 'deleteOnTermination',
        ],
        'VolumeType' => [
          'shape' => 'VolumeType',
          'locationName' => 'volumeType',
        ],
        'Iops' => [
          'shape' => 'Integer',
          'locationName' => 'iops',
        ],
        'Encrypted' => [
          'shape' => 'Boolean',
          'locationName' => 'encrypted',
        ],
      ],
    ],
    'EbsInstanceBlockDevice' => [
      'type' => 'structure',
      'members' => [
        'VolumeId' => [
          'shape' => 'String',
          'locationName' => 'volumeId',
        ],
        'Status' => [
          'shape' => 'AttachmentStatus',
          'locationName' => 'status',
        ],
        'AttachTime' => [
          'shape' => 'DateTime',
          'locationName' => 'attachTime',
        ],
        'DeleteOnTermination' => [
          'shape' => 'Boolean',
          'locationName' => 'deleteOnTermination',
        ],
      ],
    ],
    'EbsInstanceBlockDeviceSpecification' => [
      'type' => 'structure',
      'members' => [
        'VolumeId' => [
          'shape' => 'String',
          'locationName' => 'volumeId',
        ],
        'DeleteOnTermination' => [
          'shape' => 'Boolean',
          'locationName' => 'deleteOnTermination',
        ],
      ],
    ],
    'EnableVgwRoutePropagationRequest' => [
      'type' => 'structure',
      'required' => [
        'RouteTableId',
        'GatewayId',
      ],
      'members' => [
        'RouteTableId' => [
          'shape' => 'String',
        ],
        'GatewayId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'EnableVolumeIORequest' => [
      'type' => 'structure',
      'required' => [
        'VolumeId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VolumeId' => [
          'shape' => 'String',
          'locationName' => 'volumeId',
        ],
      ],
    ],
    'EnableVpcClassicLinkRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
      ],
    ],
    'EnableVpcClassicLinkResult' => [
      'type' => 'structure',
      'members' => [
        'Return' => [
          'shape' => 'Boolean',
          'locationName' => 'return',
        ],
      ],
    ],
    'EventCode' => [
      'type' => 'string',
      'enum' => [
        'instance-reboot',
        'system-reboot',
        'system-maintenance',
        'instance-retirement',
        'instance-stop',
      ],
    ],
    'ExecutableByStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'ExecutableBy',
      ],
    ],
    'ExportEnvironment' => [
      'type' => 'string',
      'enum' => [
        'citrix',
        'vmware',
        'microsoft',
      ],
    ],
    'ExportTask' => [
      'type' => 'structure',
      'members' => [
        'ExportTaskId' => [
          'shape' => 'String',
          'locationName' => 'exportTaskId',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'State' => [
          'shape' => 'ExportTaskState',
          'locationName' => 'state',
        ],
        'StatusMessage' => [
          'shape' => 'String',
          'locationName' => 'statusMessage',
        ],
        'InstanceExportDetails' => [
          'shape' => 'InstanceExportDetails',
          'locationName' => 'instanceExport',
        ],
        'ExportToS3Task' => [
          'shape' => 'ExportToS3Task',
          'locationName' => 'exportToS3',
        ],
      ],
    ],
    'ExportTaskIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'ExportTaskId',
      ],
    ],
    'ExportTaskList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ExportTask',
        'locationName' => 'item',
      ],
    ],
    'ExportTaskState' => [
      'type' => 'string',
      'enum' => [
        'active',
        'cancelling',
        'cancelled',
        'completed',
      ],
    ],
    'ExportToS3Task' => [
      'type' => 'structure',
      'members' => [
        'DiskImageFormat' => [
          'shape' => 'DiskImageFormat',
          'locationName' => 'diskImageFormat',
        ],
        'ContainerFormat' => [
          'shape' => 'ContainerFormat',
          'locationName' => 'containerFormat',
        ],
        'S3Bucket' => [
          'shape' => 'String',
          'locationName' => 's3Bucket',
        ],
        'S3Key' => [
          'shape' => 'String',
          'locationName' => 's3Key',
        ],
      ],
    ],
    'ExportToS3TaskSpecification' => [
      'type' => 'structure',
      'members' => [
        'DiskImageFormat' => [
          'shape' => 'DiskImageFormat',
          'locationName' => 'diskImageFormat',
        ],
        'ContainerFormat' => [
          'shape' => 'ContainerFormat',
          'locationName' => 'containerFormat',
        ],
        'S3Bucket' => [
          'shape' => 'String',
          'locationName' => 's3Bucket',
        ],
        'S3Prefix' => [
          'shape' => 'String',
          'locationName' => 's3Prefix',
        ],
      ],
    ],
    'Filter' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
        'Values' => [
          'shape' => 'ValueStringList',
          'locationName' => 'Value',
        ],
      ],
    ],
    'FilterList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Filter',
        'locationName' => 'Filter',
      ],
    ],
    'Float' => [
      'type' => 'float',
    ],
    'GatewayType' => [
      'type' => 'string',
      'enum' => [
        'ipsec.1',
      ],
    ],
    'GetConsoleOutputRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'GetConsoleOutputResult' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'Timestamp' => [
          'shape' => 'DateTime',
          'locationName' => 'timestamp',
        ],
        'Output' => [
          'shape' => 'String',
          'locationName' => 'output',
        ],
      ],
    ],
    'GetPasswordDataRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'GetPasswordDataResult' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'Timestamp' => [
          'shape' => 'DateTime',
          'locationName' => 'timestamp',
        ],
        'PasswordData' => [
          'shape' => 'String',
          'locationName' => 'passwordData',
        ],
      ],
    ],
    'GroupIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'groupId',
      ],
    ],
    'GroupIdentifier' => [
      'type' => 'structure',
      'members' => [
        'GroupName' => [
          'shape' => 'String',
          'locationName' => 'groupName',
        ],
        'GroupId' => [
          'shape' => 'String',
          'locationName' => 'groupId',
        ],
      ],
    ],
    'GroupIdentifierList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'GroupIdentifier',
        'locationName' => 'item',
      ],
    ],
    'GroupNameStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'GroupName',
      ],
    ],
    'HypervisorType' => [
      'type' => 'string',
      'enum' => [
        'ovm',
        'xen',
      ],
    ],
    'IamInstanceProfile' => [
      'type' => 'structure',
      'members' => [
        'Arn' => [
          'shape' => 'String',
          'locationName' => 'arn',
        ],
        'Id' => [
          'shape' => 'String',
          'locationName' => 'id',
        ],
      ],
    ],
    'IamInstanceProfileSpecification' => [
      'type' => 'structure',
      'members' => [
        'Arn' => [
          'shape' => 'String',
          'locationName' => 'arn',
        ],
        'Name' => [
          'shape' => 'String',
          'locationName' => 'name',
        ],
      ],
    ],
    'IcmpTypeCode' => [
      'type' => 'structure',
      'members' => [
        'Type' => [
          'shape' => 'Integer',
          'locationName' => 'type',
        ],
        'Code' => [
          'shape' => 'Integer',
          'locationName' => 'code',
        ],
      ],
    ],
    'Image' => [
      'type' => 'structure',
      'members' => [
        'ImageId' => [
          'shape' => 'String',
          'locationName' => 'imageId',
        ],
        'ImageLocation' => [
          'shape' => 'String',
          'locationName' => 'imageLocation',
        ],
        'State' => [
          'shape' => 'ImageState',
          'locationName' => 'imageState',
        ],
        'OwnerId' => [
          'shape' => 'String',
          'locationName' => 'imageOwnerId',
        ],
        'CreationDate' => [
          'shape' => 'String',
          'locationName' => 'creationDate',
        ],
        'Public' => [
          'shape' => 'Boolean',
          'locationName' => 'isPublic',
        ],
        'ProductCodes' => [
          'shape' => 'ProductCodeList',
          'locationName' => 'productCodes',
        ],
        'Architecture' => [
          'shape' => 'ArchitectureValues',
          'locationName' => 'architecture',
        ],
        'ImageType' => [
          'shape' => 'ImageTypeValues',
          'locationName' => 'imageType',
        ],
        'KernelId' => [
          'shape' => 'String',
          'locationName' => 'kernelId',
        ],
        'RamdiskId' => [
          'shape' => 'String',
          'locationName' => 'ramdiskId',
        ],
        'Platform' => [
          'shape' => 'PlatformValues',
          'locationName' => 'platform',
        ],
        'SriovNetSupport' => [
          'shape' => 'String',
          'locationName' => 'sriovNetSupport',
        ],
        'StateReason' => [
          'shape' => 'StateReason',
          'locationName' => 'stateReason',
        ],
        'ImageOwnerAlias' => [
          'shape' => 'String',
          'locationName' => 'imageOwnerAlias',
        ],
        'Name' => [
          'shape' => 'String',
          'locationName' => 'name',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'RootDeviceType' => [
          'shape' => 'DeviceType',
          'locationName' => 'rootDeviceType',
        ],
        'RootDeviceName' => [
          'shape' => 'String',
          'locationName' => 'rootDeviceName',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'BlockDeviceMappingList',
          'locationName' => 'blockDeviceMapping',
        ],
        'VirtualizationType' => [
          'shape' => 'VirtualizationType',
          'locationName' => 'virtualizationType',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'Hypervisor' => [
          'shape' => 'HypervisorType',
          'locationName' => 'hypervisor',
        ],
      ],
    ],
    'ImageAttribute' => [
      'type' => 'structure',
      'members' => [
        'ImageId' => [
          'shape' => 'String',
          'locationName' => 'imageId',
        ],
        'LaunchPermissions' => [
          'shape' => 'LaunchPermissionList',
          'locationName' => 'launchPermission',
        ],
        'ProductCodes' => [
          'shape' => 'ProductCodeList',
          'locationName' => 'productCodes',
        ],
        'KernelId' => [
          'shape' => 'AttributeValue',
          'locationName' => 'kernel',
        ],
        'RamdiskId' => [
          'shape' => 'AttributeValue',
          'locationName' => 'ramdisk',
        ],
        'Description' => [
          'shape' => 'AttributeValue',
          'locationName' => 'description',
        ],
        'SriovNetSupport' => [
          'shape' => 'AttributeValue',
          'locationName' => 'sriovNetSupport',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'BlockDeviceMappingList',
          'locationName' => 'blockDeviceMapping',
        ],
      ],
    ],
    'ImageAttributeName' => [
      'type' => 'string',
      'enum' => [
        'description',
        'kernel',
        'ramdisk',
        'launchPermission',
        'productCodes',
        'blockDeviceMapping',
      ],
    ],
    'ImageIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'ImageId',
      ],
    ],
    'ImageList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Image',
        'locationName' => 'item',
      ],
    ],
    'ImageState' => [
      'type' => 'string',
      'enum' => [
        'available',
        'deregistered',
      ],
    ],
    'ImageTypeValues' => [
      'type' => 'string',
      'enum' => [
        'machine',
        'kernel',
        'ramdisk',
      ],
    ],
    'ImportInstanceLaunchSpecification' => [
      'type' => 'structure',
      'members' => [
        'Architecture' => [
          'shape' => 'ArchitectureValues',
          'locationName' => 'architecture',
        ],
        'GroupNames' => [
          'shape' => 'SecurityGroupStringList',
          'locationName' => 'GroupName',
        ],
        'GroupIds' => [
          'shape' => 'SecurityGroupIdStringList',
          'locationName' => 'GroupId',
        ],
        'AdditionalInfo' => [
          'shape' => 'String',
          'locationName' => 'additionalInfo',
        ],
        'UserData' => [
          'shape' => 'UserData',
          'locationName' => 'userData',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
          'locationName' => 'instanceType',
        ],
        'Placement' => [
          'shape' => 'Placement',
          'locationName' => 'placement',
        ],
        'Monitoring' => [
          'shape' => 'Boolean',
          'locationName' => 'monitoring',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'InstanceInitiatedShutdownBehavior' => [
          'shape' => 'ShutdownBehavior',
          'locationName' => 'instanceInitiatedShutdownBehavior',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
      ],
    ],
    'ImportInstanceRequest' => [
      'type' => 'structure',
      'required' => [
        'Platform',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'LaunchSpecification' => [
          'shape' => 'ImportInstanceLaunchSpecification',
          'locationName' => 'launchSpecification',
        ],
        'DiskImages' => [
          'shape' => 'DiskImageList',
          'locationName' => 'diskImage',
        ],
        'Platform' => [
          'shape' => 'PlatformValues',
          'locationName' => 'platform',
        ],
      ],
    ],
    'ImportInstanceResult' => [
      'type' => 'structure',
      'members' => [
        'ConversionTask' => [
          'shape' => 'ConversionTask',
          'locationName' => 'conversionTask',
        ],
      ],
    ],
    'ImportInstanceTaskDetails' => [
      'type' => 'structure',
      'required' => [
        'Volumes',
      ],
      'members' => [
        'Volumes' => [
          'shape' => 'ImportInstanceVolumeDetailSet',
          'locationName' => 'volumes',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'Platform' => [
          'shape' => 'PlatformValues',
          'locationName' => 'platform',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
      ],
    ],
    'ImportInstanceVolumeDetailItem' => [
      'type' => 'structure',
      'required' => [
        'BytesConverted',
        'AvailabilityZone',
        'Image',
        'Volume',
        'Status',
      ],
      'members' => [
        'BytesConverted' => [
          'shape' => 'Long',
          'locationName' => 'bytesConverted',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'Image' => [
          'shape' => 'DiskImageDescription',
          'locationName' => 'image',
        ],
        'Volume' => [
          'shape' => 'DiskImageVolumeDescription',
          'locationName' => 'volume',
        ],
        'Status' => [
          'shape' => 'String',
          'locationName' => 'status',
        ],
        'StatusMessage' => [
          'shape' => 'String',
          'locationName' => 'statusMessage',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
      ],
    ],
    'ImportInstanceVolumeDetailSet' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ImportInstanceVolumeDetailItem',
        'locationName' => 'item',
      ],
    ],
    'ImportKeyPairRequest' => [
      'type' => 'structure',
      'required' => [
        'KeyName',
        'PublicKeyMaterial',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'KeyName' => [
          'shape' => 'String',
          'locationName' => 'keyName',
        ],
        'PublicKeyMaterial' => [
          'shape' => 'Blob',
          'locationName' => 'publicKeyMaterial',
        ],
      ],
    ],
    'ImportKeyPairResult' => [
      'type' => 'structure',
      'members' => [
        'KeyName' => [
          'shape' => 'String',
          'locationName' => 'keyName',
        ],
        'KeyFingerprint' => [
          'shape' => 'String',
          'locationName' => 'keyFingerprint',
        ],
      ],
    ],
    'ImportVolumeRequest' => [
      'type' => 'structure',
      'required' => [
        'AvailabilityZone',
        'Image',
        'Volume',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'Image' => [
          'shape' => 'DiskImageDetail',
          'locationName' => 'image',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'Volume' => [
          'shape' => 'VolumeDetail',
          'locationName' => 'volume',
        ],
      ],
    ],
    'ImportVolumeResult' => [
      'type' => 'structure',
      'members' => [
        'ConversionTask' => [
          'shape' => 'ConversionTask',
          'locationName' => 'conversionTask',
        ],
      ],
    ],
    'ImportVolumeTaskDetails' => [
      'type' => 'structure',
      'required' => [
        'BytesConverted',
        'AvailabilityZone',
        'Image',
        'Volume',
      ],
      'members' => [
        'BytesConverted' => [
          'shape' => 'Long',
          'locationName' => 'bytesConverted',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'Image' => [
          'shape' => 'DiskImageDescription',
          'locationName' => 'image',
        ],
        'Volume' => [
          'shape' => 'DiskImageVolumeDescription',
          'locationName' => 'volume',
        ],
      ],
    ],
    'Instance' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'ImageId' => [
          'shape' => 'String',
          'locationName' => 'imageId',
        ],
        'State' => [
          'shape' => 'InstanceState',
          'locationName' => 'instanceState',
        ],
        'PrivateDnsName' => [
          'shape' => 'String',
          'locationName' => 'privateDnsName',
        ],
        'PublicDnsName' => [
          'shape' => 'String',
          'locationName' => 'dnsName',
        ],
        'StateTransitionReason' => [
          'shape' => 'String',
          'locationName' => 'reason',
        ],
        'KeyName' => [
          'shape' => 'String',
          'locationName' => 'keyName',
        ],
        'AmiLaunchIndex' => [
          'shape' => 'Integer',
          'locationName' => 'amiLaunchIndex',
        ],
        'ProductCodes' => [
          'shape' => 'ProductCodeList',
          'locationName' => 'productCodes',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
          'locationName' => 'instanceType',
        ],
        'LaunchTime' => [
          'shape' => 'DateTime',
          'locationName' => 'launchTime',
        ],
        'Placement' => [
          'shape' => 'Placement',
          'locationName' => 'placement',
        ],
        'KernelId' => [
          'shape' => 'String',
          'locationName' => 'kernelId',
        ],
        'RamdiskId' => [
          'shape' => 'String',
          'locationName' => 'ramdiskId',
        ],
        'Platform' => [
          'shape' => 'PlatformValues',
          'locationName' => 'platform',
        ],
        'Monitoring' => [
          'shape' => 'Monitoring',
          'locationName' => 'monitoring',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'PublicIpAddress' => [
          'shape' => 'String',
          'locationName' => 'ipAddress',
        ],
        'StateReason' => [
          'shape' => 'StateReason',
          'locationName' => 'stateReason',
        ],
        'Architecture' => [
          'shape' => 'ArchitectureValues',
          'locationName' => 'architecture',
        ],
        'RootDeviceType' => [
          'shape' => 'DeviceType',
          'locationName' => 'rootDeviceType',
        ],
        'RootDeviceName' => [
          'shape' => 'String',
          'locationName' => 'rootDeviceName',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'InstanceBlockDeviceMappingList',
          'locationName' => 'blockDeviceMapping',
        ],
        'VirtualizationType' => [
          'shape' => 'VirtualizationType',
          'locationName' => 'virtualizationType',
        ],
        'InstanceLifecycle' => [
          'shape' => 'InstanceLifecycleType',
          'locationName' => 'instanceLifecycle',
        ],
        'SpotInstanceRequestId' => [
          'shape' => 'String',
          'locationName' => 'spotInstanceRequestId',
        ],
        'ClientToken' => [
          'shape' => 'String',
          'locationName' => 'clientToken',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'SecurityGroups' => [
          'shape' => 'GroupIdentifierList',
          'locationName' => 'groupSet',
        ],
        'SourceDestCheck' => [
          'shape' => 'Boolean',
          'locationName' => 'sourceDestCheck',
        ],
        'Hypervisor' => [
          'shape' => 'HypervisorType',
          'locationName' => 'hypervisor',
        ],
        'NetworkInterfaces' => [
          'shape' => 'InstanceNetworkInterfaceList',
          'locationName' => 'networkInterfaceSet',
        ],
        'IamInstanceProfile' => [
          'shape' => 'IamInstanceProfile',
          'locationName' => 'iamInstanceProfile',
        ],
        'EbsOptimized' => [
          'shape' => 'Boolean',
          'locationName' => 'ebsOptimized',
        ],
        'SriovNetSupport' => [
          'shape' => 'String',
          'locationName' => 'sriovNetSupport',
        ],
      ],
    ],
    'InstanceAttribute' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'InstanceType' => [
          'shape' => 'AttributeValue',
          'locationName' => 'instanceType',
        ],
        'KernelId' => [
          'shape' => 'AttributeValue',
          'locationName' => 'kernel',
        ],
        'RamdiskId' => [
          'shape' => 'AttributeValue',
          'locationName' => 'ramdisk',
        ],
        'UserData' => [
          'shape' => 'AttributeValue',
          'locationName' => 'userData',
        ],
        'DisableApiTermination' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'disableApiTermination',
        ],
        'InstanceInitiatedShutdownBehavior' => [
          'shape' => 'AttributeValue',
          'locationName' => 'instanceInitiatedShutdownBehavior',
        ],
        'RootDeviceName' => [
          'shape' => 'AttributeValue',
          'locationName' => 'rootDeviceName',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'InstanceBlockDeviceMappingList',
          'locationName' => 'blockDeviceMapping',
        ],
        'ProductCodes' => [
          'shape' => 'ProductCodeList',
          'locationName' => 'productCodes',
        ],
        'EbsOptimized' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'ebsOptimized',
        ],
        'SriovNetSupport' => [
          'shape' => 'AttributeValue',
          'locationName' => 'sriovNetSupport',
        ],
        'SourceDestCheck' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'sourceDestCheck',
        ],
        'Groups' => [
          'shape' => 'GroupIdentifierList',
          'locationName' => 'groupSet',
        ],
      ],
    ],
    'InstanceAttributeName' => [
      'type' => 'string',
      'enum' => [
        'instanceType',
        'kernel',
        'ramdisk',
        'userData',
        'disableApiTermination',
        'instanceInitiatedShutdownBehavior',
        'rootDeviceName',
        'blockDeviceMapping',
        'productCodes',
        'sourceDestCheck',
        'groupSet',
        'ebsOptimized',
        'sriovNetSupport',
      ],
    ],
    'InstanceBlockDeviceMapping' => [
      'type' => 'structure',
      'members' => [
        'DeviceName' => [
          'shape' => 'String',
          'locationName' => 'deviceName',
        ],
        'Ebs' => [
          'shape' => 'EbsInstanceBlockDevice',
          'locationName' => 'ebs',
        ],
      ],
    ],
    'InstanceBlockDeviceMappingList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceBlockDeviceMapping',
        'locationName' => 'item',
      ],
    ],
    'InstanceBlockDeviceMappingSpecification' => [
      'type' => 'structure',
      'members' => [
        'DeviceName' => [
          'shape' => 'String',
          'locationName' => 'deviceName',
        ],
        'Ebs' => [
          'shape' => 'EbsInstanceBlockDeviceSpecification',
          'locationName' => 'ebs',
        ],
        'VirtualName' => [
          'shape' => 'String',
          'locationName' => 'virtualName',
        ],
        'NoDevice' => [
          'shape' => 'String',
          'locationName' => 'noDevice',
        ],
      ],
    ],
    'InstanceBlockDeviceMappingSpecificationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceBlockDeviceMappingSpecification',
        'locationName' => 'item',
      ],
    ],
    'InstanceCount' => [
      'type' => 'structure',
      'members' => [
        'State' => [
          'shape' => 'ListingState',
          'locationName' => 'state',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
          'locationName' => 'instanceCount',
        ],
      ],
    ],
    'InstanceCountList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceCount',
        'locationName' => 'item',
      ],
    ],
    'InstanceExportDetails' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'TargetEnvironment' => [
          'shape' => 'ExportEnvironment',
          'locationName' => 'targetEnvironment',
        ],
      ],
    ],
    'InstanceIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'InstanceId',
      ],
    ],
    'InstanceLifecycleType' => [
      'type' => 'string',
      'enum' => [
        'spot',
      ],
    ],
    'InstanceList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Instance',
        'locationName' => 'item',
      ],
    ],
    'InstanceMonitoring' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'Monitoring' => [
          'shape' => 'Monitoring',
          'locationName' => 'monitoring',
        ],
      ],
    ],
    'InstanceMonitoringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceMonitoring',
        'locationName' => 'item',
      ],
    ],
    'InstanceNetworkInterface' => [
      'type' => 'structure',
      'members' => [
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'OwnerId' => [
          'shape' => 'String',
          'locationName' => 'ownerId',
        ],
        'Status' => [
          'shape' => 'NetworkInterfaceStatus',
          'locationName' => 'status',
        ],
        'MacAddress' => [
          'shape' => 'String',
          'locationName' => 'macAddress',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'PrivateDnsName' => [
          'shape' => 'String',
          'locationName' => 'privateDnsName',
        ],
        'SourceDestCheck' => [
          'shape' => 'Boolean',
          'locationName' => 'sourceDestCheck',
        ],
        'Groups' => [
          'shape' => 'GroupIdentifierList',
          'locationName' => 'groupSet',
        ],
        'Attachment' => [
          'shape' => 'InstanceNetworkInterfaceAttachment',
          'locationName' => 'attachment',
        ],
        'Association' => [
          'shape' => 'InstanceNetworkInterfaceAssociation',
          'locationName' => 'association',
        ],
        'PrivateIpAddresses' => [
          'shape' => 'InstancePrivateIpAddressList',
          'locationName' => 'privateIpAddressesSet',
        ],
      ],
    ],
    'InstanceNetworkInterfaceAssociation' => [
      'type' => 'structure',
      'members' => [
        'PublicIp' => [
          'shape' => 'String',
          'locationName' => 'publicIp',
        ],
        'PublicDnsName' => [
          'shape' => 'String',
          'locationName' => 'publicDnsName',
        ],
        'IpOwnerId' => [
          'shape' => 'String',
          'locationName' => 'ipOwnerId',
        ],
      ],
    ],
    'InstanceNetworkInterfaceAttachment' => [
      'type' => 'structure',
      'members' => [
        'AttachmentId' => [
          'shape' => 'String',
          'locationName' => 'attachmentId',
        ],
        'DeviceIndex' => [
          'shape' => 'Integer',
          'locationName' => 'deviceIndex',
        ],
        'Status' => [
          'shape' => 'AttachmentStatus',
          'locationName' => 'status',
        ],
        'AttachTime' => [
          'shape' => 'DateTime',
          'locationName' => 'attachTime',
        ],
        'DeleteOnTermination' => [
          'shape' => 'Boolean',
          'locationName' => 'deleteOnTermination',
        ],
      ],
    ],
    'InstanceNetworkInterfaceList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceNetworkInterface',
        'locationName' => 'item',
      ],
    ],
    'InstanceNetworkInterfaceSpecification' => [
      'type' => 'structure',
      'members' => [
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'DeviceIndex' => [
          'shape' => 'Integer',
          'locationName' => 'deviceIndex',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'Groups' => [
          'shape' => 'SecurityGroupIdStringList',
          'locationName' => 'SecurityGroupId',
        ],
        'DeleteOnTermination' => [
          'shape' => 'Boolean',
          'locationName' => 'deleteOnTermination',
        ],
        'PrivateIpAddresses' => [
          'shape' => 'PrivateIpAddressSpecificationList',
          'locationName' => 'privateIpAddressesSet',
          'queryName' => 'PrivateIpAddresses',
        ],
        'SecondaryPrivateIpAddressCount' => [
          'shape' => 'Integer',
          'locationName' => 'secondaryPrivateIpAddressCount',
        ],
        'AssociatePublicIpAddress' => [
          'shape' => 'Boolean',
          'locationName' => 'associatePublicIpAddress',
        ],
      ],
    ],
    'InstanceNetworkInterfaceSpecificationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceNetworkInterfaceSpecification',
        'locationName' => 'item',
      ],
    ],
    'InstancePrivateIpAddress' => [
      'type' => 'structure',
      'members' => [
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'PrivateDnsName' => [
          'shape' => 'String',
          'locationName' => 'privateDnsName',
        ],
        'Primary' => [
          'shape' => 'Boolean',
          'locationName' => 'primary',
        ],
        'Association' => [
          'shape' => 'InstanceNetworkInterfaceAssociation',
          'locationName' => 'association',
        ],
      ],
    ],
    'InstancePrivateIpAddressList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstancePrivateIpAddress',
        'locationName' => 'item',
      ],
    ],
    'InstanceState' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'Integer',
          'locationName' => 'code',
        ],
        'Name' => [
          'shape' => 'InstanceStateName',
          'locationName' => 'name',
        ],
      ],
    ],
    'InstanceStateChange' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'CurrentState' => [
          'shape' => 'InstanceState',
          'locationName' => 'currentState',
        ],
        'PreviousState' => [
          'shape' => 'InstanceState',
          'locationName' => 'previousState',
        ],
      ],
    ],
    'InstanceStateChangeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceStateChange',
        'locationName' => 'item',
      ],
    ],
    'InstanceStateName' => [
      'type' => 'string',
      'enum' => [
        'pending',
        'running',
        'shutting-down',
        'terminated',
        'stopping',
        'stopped',
      ],
    ],
    'InstanceStatus' => [
      'type' => 'structure',
      'members' => [
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'Events' => [
          'shape' => 'InstanceStatusEventList',
          'locationName' => 'eventsSet',
        ],
        'InstanceState' => [
          'shape' => 'InstanceState',
          'locationName' => 'instanceState',
        ],
        'SystemStatus' => [
          'shape' => 'InstanceStatusSummary',
          'locationName' => 'systemStatus',
        ],
        'InstanceStatus' => [
          'shape' => 'InstanceStatusSummary',
          'locationName' => 'instanceStatus',
        ],
      ],
    ],
    'InstanceStatusDetails' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'StatusName',
          'locationName' => 'name',
        ],
        'Status' => [
          'shape' => 'StatusType',
          'locationName' => 'status',
        ],
        'ImpairedSince' => [
          'shape' => 'DateTime',
          'locationName' => 'impairedSince',
        ],
      ],
    ],
    'InstanceStatusDetailsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceStatusDetails',
        'locationName' => 'item',
      ],
    ],
    'InstanceStatusEvent' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'EventCode',
          'locationName' => 'code',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'NotBefore' => [
          'shape' => 'DateTime',
          'locationName' => 'notBefore',
        ],
        'NotAfter' => [
          'shape' => 'DateTime',
          'locationName' => 'notAfter',
        ],
      ],
    ],
    'InstanceStatusEventList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceStatusEvent',
        'locationName' => 'item',
      ],
    ],
    'InstanceStatusList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceStatus',
        'locationName' => 'item',
      ],
    ],
    'InstanceStatusSummary' => [
      'type' => 'structure',
      'members' => [
        'Status' => [
          'shape' => 'SummaryStatus',
          'locationName' => 'status',
        ],
        'Details' => [
          'shape' => 'InstanceStatusDetailsList',
          'locationName' => 'details',
        ],
      ],
    ],
    'InstanceType' => [
      'type' => 'string',
      'enum' => [
        't1.micro',
        'm1.small',
        'm1.medium',
        'm1.large',
        'm1.xlarge',
        'm3.medium',
        'm3.large',
        'm3.xlarge',
        'm3.2xlarge',
        't2.micro',
        't2.small',
        't2.medium',
        'm2.xlarge',
        'm2.2xlarge',
        'm2.4xlarge',
        'cr1.8xlarge',
        'i2.xlarge',
        'i2.2xlarge',
        'i2.4xlarge',
        'i2.8xlarge',
        'hi1.4xlarge',
        'hs1.8xlarge',
        'c1.medium',
        'c1.xlarge',
        'c3.large',
        'c3.xlarge',
        'c3.2xlarge',
        'c3.4xlarge',
        'c3.8xlarge',
        'cc1.4xlarge',
        'cc2.8xlarge',
        'g2.2xlarge',
        'cg1.4xlarge',
        'r3.large',
        'r3.xlarge',
        'r3.2xlarge',
        'r3.4xlarge',
        'r3.8xlarge',
      ],
    ],
    'InstanceTypeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InstanceType',
      ],
    ],
    'Integer' => [
      'type' => 'integer',
    ],
    'InternetGateway' => [
      'type' => 'structure',
      'members' => [
        'InternetGatewayId' => [
          'shape' => 'String',
          'locationName' => 'internetGatewayId',
        ],
        'Attachments' => [
          'shape' => 'InternetGatewayAttachmentList',
          'locationName' => 'attachmentSet',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'InternetGatewayAttachment' => [
      'type' => 'structure',
      'members' => [
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'State' => [
          'shape' => 'AttachmentStatus',
          'locationName' => 'state',
        ],
      ],
    ],
    'InternetGatewayAttachmentList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InternetGatewayAttachment',
        'locationName' => 'item',
      ],
    ],
    'InternetGatewayList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InternetGateway',
        'locationName' => 'item',
      ],
    ],
    'IpPermission' => [
      'type' => 'structure',
      'members' => [
        'IpProtocol' => [
          'shape' => 'String',
          'locationName' => 'ipProtocol',
        ],
        'FromPort' => [
          'shape' => 'Integer',
          'locationName' => 'fromPort',
        ],
        'ToPort' => [
          'shape' => 'Integer',
          'locationName' => 'toPort',
        ],
        'UserIdGroupPairs' => [
          'shape' => 'UserIdGroupPairList',
          'locationName' => 'groups',
        ],
        'IpRanges' => [
          'shape' => 'IpRangeList',
          'locationName' => 'ipRanges',
        ],
      ],
    ],
    'IpPermissionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'IpPermission',
        'locationName' => 'item',
      ],
    ],
    'IpRange' => [
      'type' => 'structure',
      'members' => [
        'CidrIp' => [
          'shape' => 'String',
          'locationName' => 'cidrIp',
        ],
      ],
    ],
    'IpRangeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'IpRange',
        'locationName' => 'item',
      ],
    ],
    'KeyNameStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'KeyName',
      ],
    ],
    'KeyPair' => [
      'type' => 'structure',
      'members' => [
        'KeyName' => [
          'shape' => 'String',
          'locationName' => 'keyName',
        ],
        'KeyFingerprint' => [
          'shape' => 'String',
          'locationName' => 'keyFingerprint',
        ],
        'KeyMaterial' => [
          'shape' => 'String',
          'locationName' => 'keyMaterial',
        ],
      ],
    ],
    'KeyPairInfo' => [
      'type' => 'structure',
      'members' => [
        'KeyName' => [
          'shape' => 'String',
          'locationName' => 'keyName',
        ],
        'KeyFingerprint' => [
          'shape' => 'String',
          'locationName' => 'keyFingerprint',
        ],
      ],
    ],
    'KeyPairList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'KeyPairInfo',
        'locationName' => 'item',
      ],
    ],
    'LaunchPermission' => [
      'type' => 'structure',
      'members' => [
        'UserId' => [
          'shape' => 'String',
          'locationName' => 'userId',
        ],
        'Group' => [
          'shape' => 'PermissionGroup',
          'locationName' => 'group',
        ],
      ],
    ],
    'LaunchPermissionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'LaunchPermission',
        'locationName' => 'item',
      ],
    ],
    'LaunchPermissionModifications' => [
      'type' => 'structure',
      'members' => [
        'Add' => [
          'shape' => 'LaunchPermissionList',
        ],
        'Remove' => [
          'shape' => 'LaunchPermissionList',
        ],
      ],
    ],
    'LaunchSpecification' => [
      'type' => 'structure',
      'members' => [
        'ImageId' => [
          'shape' => 'String',
          'locationName' => 'imageId',
        ],
        'KeyName' => [
          'shape' => 'String',
          'locationName' => 'keyName',
        ],
        'SecurityGroups' => [
          'shape' => 'GroupIdentifierList',
          'locationName' => 'groupSet',
        ],
        'UserData' => [
          'shape' => 'String',
          'locationName' => 'userData',
        ],
        'AddressingType' => [
          'shape' => 'String',
          'locationName' => 'addressingType',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
          'locationName' => 'instanceType',
        ],
        'Placement' => [
          'shape' => 'SpotPlacement',
          'locationName' => 'placement',
        ],
        'KernelId' => [
          'shape' => 'String',
          'locationName' => 'kernelId',
        ],
        'RamdiskId' => [
          'shape' => 'String',
          'locationName' => 'ramdiskId',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'BlockDeviceMappingList',
          'locationName' => 'blockDeviceMapping',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'NetworkInterfaces' => [
          'shape' => 'InstanceNetworkInterfaceSpecificationList',
          'locationName' => 'networkInterfaceSet',
        ],
        'IamInstanceProfile' => [
          'shape' => 'IamInstanceProfileSpecification',
          'locationName' => 'iamInstanceProfile',
        ],
        'EbsOptimized' => [
          'shape' => 'Boolean',
          'locationName' => 'ebsOptimized',
        ],
        'Monitoring' => [
          'shape' => 'RunInstancesMonitoringEnabled',
          'locationName' => 'monitoring',
        ],
      ],
    ],
    'ListingState' => [
      'type' => 'string',
      'enum' => [
        'available',
        'sold',
        'cancelled',
        'pending',
      ],
    ],
    'ListingStatus' => [
      'type' => 'string',
      'enum' => [
        'active',
        'pending',
        'cancelled',
        'closed',
      ],
    ],
    'Long' => [
      'type' => 'long',
    ],
    'ModifyImageAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'ImageId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ImageId' => [
          'shape' => 'String',
        ],
        'Attribute' => [
          'shape' => 'String',
        ],
        'OperationType' => [
          'shape' => 'String',
        ],
        'UserIds' => [
          'shape' => 'UserIdStringList',
          'locationName' => 'UserId',
        ],
        'UserGroups' => [
          'shape' => 'UserGroupStringList',
          'locationName' => 'UserGroup',
        ],
        'ProductCodes' => [
          'shape' => 'ProductCodeStringList',
          'locationName' => 'ProductCode',
        ],
        'Value' => [
          'shape' => 'String',
        ],
        'LaunchPermission' => [
          'shape' => 'LaunchPermissionModifications',
        ],
        'Description' => [
          'shape' => 'AttributeValue',
        ],
      ],
    ],
    'ModifyInstanceAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'Attribute' => [
          'shape' => 'InstanceAttributeName',
          'locationName' => 'attribute',
        ],
        'Value' => [
          'shape' => 'String',
          'locationName' => 'value',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'InstanceBlockDeviceMappingSpecificationList',
          'locationName' => 'blockDeviceMapping',
        ],
        'SourceDestCheck' => [
          'shape' => 'AttributeBooleanValue',
        ],
        'DisableApiTermination' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'disableApiTermination',
        ],
        'InstanceType' => [
          'shape' => 'AttributeValue',
          'locationName' => 'instanceType',
        ],
        'Kernel' => [
          'shape' => 'AttributeValue',
          'locationName' => 'kernel',
        ],
        'Ramdisk' => [
          'shape' => 'AttributeValue',
          'locationName' => 'ramdisk',
        ],
        'UserData' => [
          'shape' => 'BlobAttributeValue',
          'locationName' => 'userData',
        ],
        'InstanceInitiatedShutdownBehavior' => [
          'shape' => 'AttributeValue',
          'locationName' => 'instanceInitiatedShutdownBehavior',
        ],
        'Groups' => [
          'shape' => 'GroupIdStringList',
          'locationName' => 'GroupId',
        ],
        'EbsOptimized' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'ebsOptimized',
        ],
        'SriovNetSupport' => [
          'shape' => 'AttributeValue',
          'locationName' => 'sriovNetSupport',
        ],
      ],
    ],
    'ModifyNetworkInterfaceAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkInterfaceId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'Description' => [
          'shape' => 'AttributeValue',
          'locationName' => 'description',
        ],
        'SourceDestCheck' => [
          'shape' => 'AttributeBooleanValue',
          'locationName' => 'sourceDestCheck',
        ],
        'Groups' => [
          'shape' => 'SecurityGroupIdStringList',
          'locationName' => 'SecurityGroupId',
        ],
        'Attachment' => [
          'shape' => 'NetworkInterfaceAttachmentChanges',
          'locationName' => 'attachment',
        ],
      ],
    ],
    'ModifyReservedInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'ReservedInstancesIds',
        'TargetConfigurations',
      ],
      'members' => [
        'ClientToken' => [
          'shape' => 'String',
          'locationName' => 'clientToken',
        ],
        'ReservedInstancesIds' => [
          'shape' => 'ReservedInstancesIdStringList',
          'locationName' => 'ReservedInstancesId',
        ],
        'TargetConfigurations' => [
          'shape' => 'ReservedInstancesConfigurationList',
          'locationName' => 'ReservedInstancesConfigurationSetItemType',
        ],
      ],
    ],
    'ModifyReservedInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesModificationId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesModificationId',
        ],
      ],
    ],
    'ModifySnapshotAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'SnapshotId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SnapshotId' => [
          'shape' => 'String',
        ],
        'Attribute' => [
          'shape' => 'SnapshotAttributeName',
        ],
        'OperationType' => [
          'shape' => 'String',
        ],
        'UserIds' => [
          'shape' => 'UserIdStringList',
          'locationName' => 'UserId',
        ],
        'GroupNames' => [
          'shape' => 'GroupNameStringList',
          'locationName' => 'UserGroup',
        ],
        'CreateVolumePermission' => [
          'shape' => 'CreateVolumePermissionModifications',
        ],
      ],
    ],
    'ModifySubnetAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'SubnetId',
      ],
      'members' => [
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'MapPublicIpOnLaunch' => [
          'shape' => 'AttributeBooleanValue',
        ],
      ],
    ],
    'ModifyVolumeAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'VolumeId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VolumeId' => [
          'shape' => 'String',
        ],
        'AutoEnableIO' => [
          'shape' => 'AttributeBooleanValue',
        ],
      ],
    ],
    'ModifyVpcAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcId',
      ],
      'members' => [
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'EnableDnsSupport' => [
          'shape' => 'AttributeBooleanValue',
        ],
        'EnableDnsHostnames' => [
          'shape' => 'AttributeBooleanValue',
        ],
      ],
    ],
    'MonitorInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceIds',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceIds' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'InstanceId',
        ],
      ],
    ],
    'MonitorInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'InstanceMonitorings' => [
          'shape' => 'InstanceMonitoringList',
          'locationName' => 'instancesSet',
        ],
      ],
    ],
    'Monitoring' => [
      'type' => 'structure',
      'members' => [
        'State' => [
          'shape' => 'MonitoringState',
          'locationName' => 'state',
        ],
      ],
    ],
    'MonitoringState' => [
      'type' => 'string',
      'enum' => [
        'disabled',
        'enabled',
        'pending',
      ],
    ],
    'NetworkAcl' => [
      'type' => 'structure',
      'members' => [
        'NetworkAclId' => [
          'shape' => 'String',
          'locationName' => 'networkAclId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'IsDefault' => [
          'shape' => 'Boolean',
          'locationName' => 'default',
        ],
        'Entries' => [
          'shape' => 'NetworkAclEntryList',
          'locationName' => 'entrySet',
        ],
        'Associations' => [
          'shape' => 'NetworkAclAssociationList',
          'locationName' => 'associationSet',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'NetworkAclAssociation' => [
      'type' => 'structure',
      'members' => [
        'NetworkAclAssociationId' => [
          'shape' => 'String',
          'locationName' => 'networkAclAssociationId',
        ],
        'NetworkAclId' => [
          'shape' => 'String',
          'locationName' => 'networkAclId',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
      ],
    ],
    'NetworkAclAssociationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NetworkAclAssociation',
        'locationName' => 'item',
      ],
    ],
    'NetworkAclEntry' => [
      'type' => 'structure',
      'members' => [
        'RuleNumber' => [
          'shape' => 'Integer',
          'locationName' => 'ruleNumber',
        ],
        'Protocol' => [
          'shape' => 'String',
          'locationName' => 'protocol',
        ],
        'RuleAction' => [
          'shape' => 'RuleAction',
          'locationName' => 'ruleAction',
        ],
        'Egress' => [
          'shape' => 'Boolean',
          'locationName' => 'egress',
        ],
        'CidrBlock' => [
          'shape' => 'String',
          'locationName' => 'cidrBlock',
        ],
        'IcmpTypeCode' => [
          'shape' => 'IcmpTypeCode',
          'locationName' => 'icmpTypeCode',
        ],
        'PortRange' => [
          'shape' => 'PortRange',
          'locationName' => 'portRange',
        ],
      ],
    ],
    'NetworkAclEntryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NetworkAclEntry',
        'locationName' => 'item',
      ],
    ],
    'NetworkAclList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NetworkAcl',
        'locationName' => 'item',
      ],
    ],
    'NetworkInterface' => [
      'type' => 'structure',
      'members' => [
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'OwnerId' => [
          'shape' => 'String',
          'locationName' => 'ownerId',
        ],
        'RequesterId' => [
          'shape' => 'String',
          'locationName' => 'requesterId',
        ],
        'RequesterManaged' => [
          'shape' => 'Boolean',
          'locationName' => 'requesterManaged',
        ],
        'Status' => [
          'shape' => 'NetworkInterfaceStatus',
          'locationName' => 'status',
        ],
        'MacAddress' => [
          'shape' => 'String',
          'locationName' => 'macAddress',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'PrivateDnsName' => [
          'shape' => 'String',
          'locationName' => 'privateDnsName',
        ],
        'SourceDestCheck' => [
          'shape' => 'Boolean',
          'locationName' => 'sourceDestCheck',
        ],
        'Groups' => [
          'shape' => 'GroupIdentifierList',
          'locationName' => 'groupSet',
        ],
        'Attachment' => [
          'shape' => 'NetworkInterfaceAttachment',
          'locationName' => 'attachment',
        ],
        'Association' => [
          'shape' => 'NetworkInterfaceAssociation',
          'locationName' => 'association',
        ],
        'TagSet' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'PrivateIpAddresses' => [
          'shape' => 'NetworkInterfacePrivateIpAddressList',
          'locationName' => 'privateIpAddressesSet',
        ],
      ],
    ],
    'NetworkInterfaceAssociation' => [
      'type' => 'structure',
      'members' => [
        'PublicIp' => [
          'shape' => 'String',
          'locationName' => 'publicIp',
        ],
        'PublicDnsName' => [
          'shape' => 'String',
          'locationName' => 'publicDnsName',
        ],
        'IpOwnerId' => [
          'shape' => 'String',
          'locationName' => 'ipOwnerId',
        ],
        'AllocationId' => [
          'shape' => 'String',
          'locationName' => 'allocationId',
        ],
        'AssociationId' => [
          'shape' => 'String',
          'locationName' => 'associationId',
        ],
      ],
    ],
    'NetworkInterfaceAttachment' => [
      'type' => 'structure',
      'members' => [
        'AttachmentId' => [
          'shape' => 'String',
          'locationName' => 'attachmentId',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'InstanceOwnerId' => [
          'shape' => 'String',
          'locationName' => 'instanceOwnerId',
        ],
        'DeviceIndex' => [
          'shape' => 'Integer',
          'locationName' => 'deviceIndex',
        ],
        'Status' => [
          'shape' => 'AttachmentStatus',
          'locationName' => 'status',
        ],
        'AttachTime' => [
          'shape' => 'DateTime',
          'locationName' => 'attachTime',
        ],
        'DeleteOnTermination' => [
          'shape' => 'Boolean',
          'locationName' => 'deleteOnTermination',
        ],
      ],
    ],
    'NetworkInterfaceAttachmentChanges' => [
      'type' => 'structure',
      'members' => [
        'AttachmentId' => [
          'shape' => 'String',
          'locationName' => 'attachmentId',
        ],
        'DeleteOnTermination' => [
          'shape' => 'Boolean',
          'locationName' => 'deleteOnTermination',
        ],
      ],
    ],
    'NetworkInterfaceAttribute' => [
      'type' => 'string',
      'enum' => [
        'description',
        'groupSet',
        'sourceDestCheck',
        'attachment',
      ],
    ],
    'NetworkInterfaceIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'item',
      ],
    ],
    'NetworkInterfaceList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NetworkInterface',
        'locationName' => 'item',
      ],
    ],
    'NetworkInterfacePrivateIpAddress' => [
      'type' => 'structure',
      'members' => [
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'PrivateDnsName' => [
          'shape' => 'String',
          'locationName' => 'privateDnsName',
        ],
        'Primary' => [
          'shape' => 'Boolean',
          'locationName' => 'primary',
        ],
        'Association' => [
          'shape' => 'NetworkInterfaceAssociation',
          'locationName' => 'association',
        ],
      ],
    ],
    'NetworkInterfacePrivateIpAddressList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NetworkInterfacePrivateIpAddress',
        'locationName' => 'item',
      ],
    ],
    'NetworkInterfaceStatus' => [
      'type' => 'string',
      'enum' => [
        'available',
        'attaching',
        'in-use',
        'detaching',
      ],
    ],
    'OfferingTypeValues' => [
      'type' => 'string',
      'enum' => [
        'Heavy Utilization',
        'Medium Utilization',
        'Light Utilization',
      ],
    ],
    'OwnerStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'Owner',
      ],
    ],
    'PermissionGroup' => [
      'type' => 'string',
      'enum' => [
        'all',
      ],
    ],
    'Placement' => [
      'type' => 'structure',
      'members' => [
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'GroupName' => [
          'shape' => 'String',
          'locationName' => 'groupName',
        ],
        'Tenancy' => [
          'shape' => 'Tenancy',
          'locationName' => 'tenancy',
        ],
      ],
    ],
    'PlacementGroup' => [
      'type' => 'structure',
      'members' => [
        'GroupName' => [
          'shape' => 'String',
          'locationName' => 'groupName',
        ],
        'Strategy' => [
          'shape' => 'PlacementStrategy',
          'locationName' => 'strategy',
        ],
        'State' => [
          'shape' => 'PlacementGroupState',
          'locationName' => 'state',
        ],
      ],
    ],
    'PlacementGroupList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PlacementGroup',
        'locationName' => 'item',
      ],
    ],
    'PlacementGroupState' => [
      'type' => 'string',
      'enum' => [
        'pending',
        'available',
        'deleting',
        'deleted',
      ],
    ],
    'PlacementGroupStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'PlacementStrategy' => [
      'type' => 'string',
      'enum' => [
        'cluster',
      ],
    ],
    'PlatformValues' => [
      'type' => 'string',
      'enum' => [
        'Windows',
      ],
    ],
    'PortRange' => [
      'type' => 'structure',
      'members' => [
        'From' => [
          'shape' => 'Integer',
          'locationName' => 'from',
        ],
        'To' => [
          'shape' => 'Integer',
          'locationName' => 'to',
        ],
      ],
    ],
    'PriceSchedule' => [
      'type' => 'structure',
      'members' => [
        'Term' => [
          'shape' => 'Long',
          'locationName' => 'term',
        ],
        'Price' => [
          'shape' => 'Double',
          'locationName' => 'price',
        ],
        'CurrencyCode' => [
          'shape' => 'CurrencyCodeValues',
          'locationName' => 'currencyCode',
        ],
        'Active' => [
          'shape' => 'Boolean',
          'locationName' => 'active',
        ],
      ],
    ],
    'PriceScheduleList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PriceSchedule',
        'locationName' => 'item',
      ],
    ],
    'PriceScheduleSpecification' => [
      'type' => 'structure',
      'members' => [
        'Term' => [
          'shape' => 'Long',
          'locationName' => 'term',
        ],
        'Price' => [
          'shape' => 'Double',
          'locationName' => 'price',
        ],
        'CurrencyCode' => [
          'shape' => 'CurrencyCodeValues',
          'locationName' => 'currencyCode',
        ],
      ],
    ],
    'PriceScheduleSpecificationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PriceScheduleSpecification',
        'locationName' => 'item',
      ],
    ],
    'PricingDetail' => [
      'type' => 'structure',
      'members' => [
        'Price' => [
          'shape' => 'Double',
          'locationName' => 'price',
        ],
        'Count' => [
          'shape' => 'Integer',
          'locationName' => 'count',
        ],
      ],
    ],
    'PricingDetailsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PricingDetail',
        'locationName' => 'item',
      ],
    ],
    'PrivateIpAddressSpecification' => [
      'type' => 'structure',
      'required' => [
        'PrivateIpAddress',
      ],
      'members' => [
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'Primary' => [
          'shape' => 'Boolean',
          'locationName' => 'primary',
        ],
      ],
    ],
    'PrivateIpAddressSpecificationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PrivateIpAddressSpecification',
        'locationName' => 'item',
      ],
    ],
    'PrivateIpAddressStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'PrivateIpAddress',
      ],
    ],
    'ProductCode' => [
      'type' => 'structure',
      'members' => [
        'ProductCodeId' => [
          'shape' => 'String',
          'locationName' => 'productCode',
        ],
        'ProductCodeType' => [
          'shape' => 'ProductCodeValues',
          'locationName' => 'type',
        ],
      ],
    ],
    'ProductCodeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ProductCode',
        'locationName' => 'item',
      ],
    ],
    'ProductCodeStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'ProductCode',
      ],
    ],
    'ProductCodeValues' => [
      'type' => 'string',
      'enum' => [
        'devpay',
        'marketplace',
      ],
    ],
    'ProductDescriptionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'PropagatingVgw' => [
      'type' => 'structure',
      'members' => [
        'GatewayId' => [
          'shape' => 'String',
          'locationName' => 'gatewayId',
        ],
      ],
    ],
    'PropagatingVgwList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PropagatingVgw',
        'locationName' => 'item',
      ],
    ],
    'PublicIpStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'PublicIp',
      ],
    ],
    'PurchaseReservedInstancesOfferingRequest' => [
      'type' => 'structure',
      'required' => [
        'ReservedInstancesOfferingId',
        'InstanceCount',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ReservedInstancesOfferingId' => [
          'shape' => 'String',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
        ],
        'LimitPrice' => [
          'shape' => 'ReservedInstanceLimitPrice',
          'locationName' => 'limitPrice',
        ],
      ],
    ],
    'PurchaseReservedInstancesOfferingResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesId',
        ],
      ],
    ],
    'RIProductDescription' => [
      'type' => 'string',
      'enum' => [
        'Linux/UNIX',
        'Linux/UNIX (Amazon VPC]',
        'Windows',
        'Windows (Amazon VPC]',
      ],
    ],
    'ReasonCodesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReportInstanceReasonCodes',
        'locationName' => 'item',
      ],
    ],
    'RebootInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceIds',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceIds' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'InstanceId',
        ],
      ],
    ],
    'RecurringCharge' => [
      'type' => 'structure',
      'members' => [
        'Frequency' => [
          'shape' => 'RecurringChargeFrequency',
          'locationName' => 'frequency',
        ],
        'Amount' => [
          'shape' => 'Double',
          'locationName' => 'amount',
        ],
      ],
    ],
    'RecurringChargeFrequency' => [
      'type' => 'string',
      'enum' => [
        'Hourly',
      ],
    ],
    'RecurringChargesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'RecurringCharge',
        'locationName' => 'item',
      ],
    ],
    'Region' => [
      'type' => 'structure',
      'members' => [
        'RegionName' => [
          'shape' => 'String',
          'locationName' => 'regionName',
        ],
        'Endpoint' => [
          'shape' => 'String',
          'locationName' => 'regionEndpoint',
        ],
      ],
    ],
    'RegionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Region',
        'locationName' => 'item',
      ],
    ],
    'RegionNameStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'RegionName',
      ],
    ],
    'RegisterImageRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ImageLocation' => [
          'shape' => 'String',
        ],
        'Name' => [
          'shape' => 'String',
          'locationName' => 'name',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'Architecture' => [
          'shape' => 'ArchitectureValues',
          'locationName' => 'architecture',
        ],
        'KernelId' => [
          'shape' => 'String',
          'locationName' => 'kernelId',
        ],
        'RamdiskId' => [
          'shape' => 'String',
          'locationName' => 'ramdiskId',
        ],
        'RootDeviceName' => [
          'shape' => 'String',
          'locationName' => 'rootDeviceName',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'BlockDeviceMappingRequestList',
          'locationName' => 'BlockDeviceMapping',
        ],
        'VirtualizationType' => [
          'shape' => 'String',
          'locationName' => 'virtualizationType',
        ],
        'SriovNetSupport' => [
          'shape' => 'String',
          'locationName' => 'sriovNetSupport',
        ],
      ],
    ],
    'RegisterImageResult' => [
      'type' => 'structure',
      'members' => [
        'ImageId' => [
          'shape' => 'String',
          'locationName' => 'imageId',
        ],
      ],
    ],
    'RejectVpcPeeringConnectionRequest' => [
      'type' => 'structure',
      'required' => [
        'VpcPeeringConnectionId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'VpcPeeringConnectionId' => [
          'shape' => 'String',
          'locationName' => 'vpcPeeringConnectionId',
        ],
      ],
    ],
    'RejectVpcPeeringConnectionResult' => [
      'type' => 'structure',
      'members' => [
        'Return' => [
          'shape' => 'Boolean',
          'locationName' => 'return',
        ],
      ],
    ],
    'ReleaseAddressRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'PublicIp' => [
          'shape' => 'String',
        ],
        'AllocationId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ReplaceNetworkAclAssociationRequest' => [
      'type' => 'structure',
      'required' => [
        'AssociationId',
        'NetworkAclId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'AssociationId' => [
          'shape' => 'String',
          'locationName' => 'associationId',
        ],
        'NetworkAclId' => [
          'shape' => 'String',
          'locationName' => 'networkAclId',
        ],
      ],
    ],
    'ReplaceNetworkAclAssociationResult' => [
      'type' => 'structure',
      'members' => [
        'NewAssociationId' => [
          'shape' => 'String',
          'locationName' => 'newAssociationId',
        ],
      ],
    ],
    'ReplaceNetworkAclEntryRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkAclId',
        'RuleNumber',
        'Protocol',
        'RuleAction',
        'Egress',
        'CidrBlock',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkAclId' => [
          'shape' => 'String',
          'locationName' => 'networkAclId',
        ],
        'RuleNumber' => [
          'shape' => 'Integer',
          'locationName' => 'ruleNumber',
        ],
        'Protocol' => [
          'shape' => 'String',
          'locationName' => 'protocol',
        ],
        'RuleAction' => [
          'shape' => 'RuleAction',
          'locationName' => 'ruleAction',
        ],
        'Egress' => [
          'shape' => 'Boolean',
          'locationName' => 'egress',
        ],
        'CidrBlock' => [
          'shape' => 'String',
          'locationName' => 'cidrBlock',
        ],
        'IcmpTypeCode' => [
          'shape' => 'IcmpTypeCode',
          'locationName' => 'Icmp',
        ],
        'PortRange' => [
          'shape' => 'PortRange',
          'locationName' => 'portRange',
        ],
      ],
    ],
    'ReplaceRouteRequest' => [
      'type' => 'structure',
      'required' => [
        'RouteTableId',
        'DestinationCidrBlock',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'RouteTableId' => [
          'shape' => 'String',
          'locationName' => 'routeTableId',
        ],
        'DestinationCidrBlock' => [
          'shape' => 'String',
          'locationName' => 'destinationCidrBlock',
        ],
        'GatewayId' => [
          'shape' => 'String',
          'locationName' => 'gatewayId',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'VpcPeeringConnectionId' => [
          'shape' => 'String',
          'locationName' => 'vpcPeeringConnectionId',
        ],
      ],
    ],
    'ReplaceRouteTableAssociationRequest' => [
      'type' => 'structure',
      'required' => [
        'AssociationId',
        'RouteTableId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'AssociationId' => [
          'shape' => 'String',
          'locationName' => 'associationId',
        ],
        'RouteTableId' => [
          'shape' => 'String',
          'locationName' => 'routeTableId',
        ],
      ],
    ],
    'ReplaceRouteTableAssociationResult' => [
      'type' => 'structure',
      'members' => [
        'NewAssociationId' => [
          'shape' => 'String',
          'locationName' => 'newAssociationId',
        ],
      ],
    ],
    'ReportInstanceReasonCodes' => [
      'type' => 'string',
      'enum' => [
        'instance-stuck-in-state',
        'unresponsive',
        'not-accepting-credentials',
        'password-not-available',
        'performance-network',
        'performance-instance-store',
        'performance-ebs-volume',
        'performance-other',
        'other',
      ],
    ],
    'ReportInstanceStatusRequest' => [
      'type' => 'structure',
      'required' => [
        'Instances',
        'Status',
        'ReasonCodes',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'Instances' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'instanceId',
        ],
        'Status' => [
          'shape' => 'ReportStatusType',
          'locationName' => 'status',
        ],
        'StartTime' => [
          'shape' => 'DateTime',
          'locationName' => 'startTime',
        ],
        'EndTime' => [
          'shape' => 'DateTime',
          'locationName' => 'endTime',
        ],
        'ReasonCodes' => [
          'shape' => 'ReasonCodesList',
          'locationName' => 'reasonCode',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
      ],
    ],
    'ReportStatusType' => [
      'type' => 'string',
      'enum' => [
        'ok',
        'impaired',
      ],
    ],
    'RequestSpotInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'SpotPrice',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SpotPrice' => [
          'shape' => 'String',
          'locationName' => 'spotPrice',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
          'locationName' => 'instanceCount',
        ],
        'Type' => [
          'shape' => 'SpotInstanceType',
          'locationName' => 'type',
        ],
        'ValidFrom' => [
          'shape' => 'DateTime',
          'locationName' => 'validFrom',
        ],
        'ValidUntil' => [
          'shape' => 'DateTime',
          'locationName' => 'validUntil',
        ],
        'LaunchGroup' => [
          'shape' => 'String',
          'locationName' => 'launchGroup',
        ],
        'AvailabilityZoneGroup' => [
          'shape' => 'String',
          'locationName' => 'availabilityZoneGroup',
        ],
        'LaunchSpecification' => [
          'shape' => 'RequestSpotLaunchSpecification',
        ],
      ],
    ],
    'RequestSpotInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'SpotInstanceRequests' => [
          'shape' => 'SpotInstanceRequestList',
          'locationName' => 'spotInstanceRequestSet',
        ],
      ],
    ],
    'Reservation' => [
      'type' => 'structure',
      'members' => [
        'ReservationId' => [
          'shape' => 'String',
          'locationName' => 'reservationId',
        ],
        'OwnerId' => [
          'shape' => 'String',
          'locationName' => 'ownerId',
        ],
        'RequesterId' => [
          'shape' => 'String',
          'locationName' => 'requesterId',
        ],
        'Groups' => [
          'shape' => 'GroupIdentifierList',
          'locationName' => 'groupSet',
        ],
        'Instances' => [
          'shape' => 'InstanceList',
          'locationName' => 'instancesSet',
        ],
      ],
    ],
    'ReservationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Reservation',
        'locationName' => 'item',
      ],
    ],
    'ReservedInstanceLimitPrice' => [
      'type' => 'structure',
      'members' => [
        'Amount' => [
          'shape' => 'Double',
          'locationName' => 'amount',
        ],
        'CurrencyCode' => [
          'shape' => 'CurrencyCodeValues',
          'locationName' => 'currencyCode',
        ],
      ],
    ],
    'ReservedInstanceState' => [
      'type' => 'string',
      'enum' => [
        'payment-pending',
        'active',
        'payment-failed',
        'retired',
      ],
    ],
    'ReservedInstances' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesId',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
          'locationName' => 'instanceType',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'Start' => [
          'shape' => 'DateTime',
          'locationName' => 'start',
        ],
        'End' => [
          'shape' => 'DateTime',
          'locationName' => 'end',
        ],
        'Duration' => [
          'shape' => 'Long',
          'locationName' => 'duration',
        ],
        'UsagePrice' => [
          'shape' => 'Float',
          'locationName' => 'usagePrice',
        ],
        'FixedPrice' => [
          'shape' => 'Float',
          'locationName' => 'fixedPrice',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
          'locationName' => 'instanceCount',
        ],
        'ProductDescription' => [
          'shape' => 'RIProductDescription',
          'locationName' => 'productDescription',
        ],
        'State' => [
          'shape' => 'ReservedInstanceState',
          'locationName' => 'state',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'InstanceTenancy' => [
          'shape' => 'Tenancy',
          'locationName' => 'instanceTenancy',
        ],
        'CurrencyCode' => [
          'shape' => 'CurrencyCodeValues',
          'locationName' => 'currencyCode',
        ],
        'OfferingType' => [
          'shape' => 'OfferingTypeValues',
          'locationName' => 'offeringType',
        ],
        'RecurringCharges' => [
          'shape' => 'RecurringChargesList',
          'locationName' => 'recurringCharges',
        ],
      ],
    ],
    'ReservedInstancesConfiguration' => [
      'type' => 'structure',
      'members' => [
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'Platform' => [
          'shape' => 'String',
          'locationName' => 'platform',
        ],
        'InstanceCount' => [
          'shape' => 'Integer',
          'locationName' => 'instanceCount',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
          'locationName' => 'instanceType',
        ],
      ],
    ],
    'ReservedInstancesConfigurationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReservedInstancesConfiguration',
        'locationName' => 'item',
      ],
    ],
    'ReservedInstancesId' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesId',
        ],
      ],
    ],
    'ReservedInstancesIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'ReservedInstancesId',
      ],
    ],
    'ReservedInstancesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReservedInstances',
        'locationName' => 'item',
      ],
    ],
    'ReservedInstancesListing' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesListingId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesListingId',
        ],
        'ReservedInstancesId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesId',
        ],
        'CreateDate' => [
          'shape' => 'DateTime',
          'locationName' => 'createDate',
        ],
        'UpdateDate' => [
          'shape' => 'DateTime',
          'locationName' => 'updateDate',
        ],
        'Status' => [
          'shape' => 'ListingStatus',
          'locationName' => 'status',
        ],
        'StatusMessage' => [
          'shape' => 'String',
          'locationName' => 'statusMessage',
        ],
        'InstanceCounts' => [
          'shape' => 'InstanceCountList',
          'locationName' => 'instanceCounts',
        ],
        'PriceSchedules' => [
          'shape' => 'PriceScheduleList',
          'locationName' => 'priceSchedules',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'ClientToken' => [
          'shape' => 'String',
          'locationName' => 'clientToken',
        ],
      ],
    ],
    'ReservedInstancesListingList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReservedInstancesListing',
        'locationName' => 'item',
      ],
    ],
    'ReservedInstancesModification' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesModificationId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesModificationId',
        ],
        'ReservedInstancesIds' => [
          'shape' => 'ReservedIntancesIds',
          'locationName' => 'reservedInstancesSet',
        ],
        'ModificationResults' => [
          'shape' => 'ReservedInstancesModificationResultList',
          'locationName' => 'modificationResultSet',
        ],
        'CreateDate' => [
          'shape' => 'DateTime',
          'locationName' => 'createDate',
        ],
        'UpdateDate' => [
          'shape' => 'DateTime',
          'locationName' => 'updateDate',
        ],
        'EffectiveDate' => [
          'shape' => 'DateTime',
          'locationName' => 'effectiveDate',
        ],
        'Status' => [
          'shape' => 'String',
          'locationName' => 'status',
        ],
        'StatusMessage' => [
          'shape' => 'String',
          'locationName' => 'statusMessage',
        ],
        'ClientToken' => [
          'shape' => 'String',
          'locationName' => 'clientToken',
        ],
      ],
    ],
    'ReservedInstancesModificationIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'ReservedInstancesModificationId',
      ],
    ],
    'ReservedInstancesModificationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReservedInstancesModification',
        'locationName' => 'item',
      ],
    ],
    'ReservedInstancesModificationResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesId',
        ],
        'TargetConfiguration' => [
          'shape' => 'ReservedInstancesConfiguration',
          'locationName' => 'targetConfiguration',
        ],
      ],
    ],
    'ReservedInstancesModificationResultList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReservedInstancesModificationResult',
        'locationName' => 'item',
      ],
    ],
    'ReservedInstancesOffering' => [
      'type' => 'structure',
      'members' => [
        'ReservedInstancesOfferingId' => [
          'shape' => 'String',
          'locationName' => 'reservedInstancesOfferingId',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
          'locationName' => 'instanceType',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'Duration' => [
          'shape' => 'Long',
          'locationName' => 'duration',
        ],
        'UsagePrice' => [
          'shape' => 'Float',
          'locationName' => 'usagePrice',
        ],
        'FixedPrice' => [
          'shape' => 'Float',
          'locationName' => 'fixedPrice',
        ],
        'ProductDescription' => [
          'shape' => 'RIProductDescription',
          'locationName' => 'productDescription',
        ],
        'InstanceTenancy' => [
          'shape' => 'Tenancy',
          'locationName' => 'instanceTenancy',
        ],
        'CurrencyCode' => [
          'shape' => 'CurrencyCodeValues',
          'locationName' => 'currencyCode',
        ],
        'OfferingType' => [
          'shape' => 'OfferingTypeValues',
          'locationName' => 'offeringType',
        ],
        'RecurringCharges' => [
          'shape' => 'RecurringChargesList',
          'locationName' => 'recurringCharges',
        ],
        'Marketplace' => [
          'shape' => 'Boolean',
          'locationName' => 'marketplace',
        ],
        'PricingDetails' => [
          'shape' => 'PricingDetailsList',
          'locationName' => 'pricingDetailsSet',
        ],
      ],
    ],
    'ReservedInstancesOfferingIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'ReservedInstancesOfferingList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReservedInstancesOffering',
        'locationName' => 'item',
      ],
    ],
    'ReservedIntancesIds' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReservedInstancesId',
        'locationName' => 'item',
      ],
    ],
    'ResetImageAttributeName' => [
      'type' => 'string',
      'enum' => [
        'launchPermission',
      ],
    ],
    'ResetImageAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'ImageId',
        'Attribute',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ImageId' => [
          'shape' => 'String',
        ],
        'Attribute' => [
          'shape' => 'ResetImageAttributeName',
        ],
      ],
    ],
    'ResetInstanceAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceId',
        'Attribute',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'Attribute' => [
          'shape' => 'InstanceAttributeName',
          'locationName' => 'attribute',
        ],
      ],
    ],
    'ResetNetworkInterfaceAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkInterfaceId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'SourceDestCheck' => [
          'shape' => 'String',
          'locationName' => 'sourceDestCheck',
        ],
      ],
    ],
    'ResetSnapshotAttributeRequest' => [
      'type' => 'structure',
      'required' => [
        'SnapshotId',
        'Attribute',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'SnapshotId' => [
          'shape' => 'String',
        ],
        'Attribute' => [
          'shape' => 'SnapshotAttributeName',
        ],
      ],
    ],
    'ResourceIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'ResourceType' => [
      'type' => 'string',
      'enum' => [
        'customer-gateway',
        'dhcp-options',
        'image',
        'instance',
        'internet-gateway',
        'network-acl',
        'network-interface',
        'reserved-instances',
        'route-table',
        'snapshot',
        'spot-instances-request',
        'subnet',
        'security-group',
        'volume',
        'vpc',
        'vpn-connection',
        'vpn-gateway',
      ],
    ],
    'RestorableByStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'RevokeSecurityGroupEgressRequest' => [
      'type' => 'structure',
      'required' => [
        'GroupId',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupId' => [
          'shape' => 'String',
          'locationName' => 'groupId',
        ],
        'SourceSecurityGroupName' => [
          'shape' => 'String',
          'locationName' => 'sourceSecurityGroupName',
        ],
        'SourceSecurityGroupOwnerId' => [
          'shape' => 'String',
          'locationName' => 'sourceSecurityGroupOwnerId',
        ],
        'IpProtocol' => [
          'shape' => 'String',
          'locationName' => 'ipProtocol',
        ],
        'FromPort' => [
          'shape' => 'Integer',
          'locationName' => 'fromPort',
        ],
        'ToPort' => [
          'shape' => 'Integer',
          'locationName' => 'toPort',
        ],
        'CidrIp' => [
          'shape' => 'String',
          'locationName' => 'cidrIp',
        ],
        'IpPermissions' => [
          'shape' => 'IpPermissionList',
          'locationName' => 'ipPermissions',
        ],
      ],
    ],
    'RevokeSecurityGroupIngressRequest' => [
      'type' => 'structure',
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'GroupName' => [
          'shape' => 'String',
        ],
        'GroupId' => [
          'shape' => 'String',
        ],
        'SourceSecurityGroupName' => [
          'shape' => 'String',
        ],
        'SourceSecurityGroupOwnerId' => [
          'shape' => 'String',
        ],
        'IpProtocol' => [
          'shape' => 'String',
        ],
        'FromPort' => [
          'shape' => 'Integer',
        ],
        'ToPort' => [
          'shape' => 'Integer',
        ],
        'CidrIp' => [
          'shape' => 'String',
        ],
        'IpPermissions' => [
          'shape' => 'IpPermissionList',
        ],
      ],
    ],
    'Route' => [
      'type' => 'structure',
      'members' => [
        'DestinationCidrBlock' => [
          'shape' => 'String',
          'locationName' => 'destinationCidrBlock',
        ],
        'GatewayId' => [
          'shape' => 'String',
          'locationName' => 'gatewayId',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'InstanceOwnerId' => [
          'shape' => 'String',
          'locationName' => 'instanceOwnerId',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'VpcPeeringConnectionId' => [
          'shape' => 'String',
          'locationName' => 'vpcPeeringConnectionId',
        ],
        'State' => [
          'shape' => 'RouteState',
          'locationName' => 'state',
        ],
        'Origin' => [
          'shape' => 'RouteOrigin',
          'locationName' => 'origin',
        ],
      ],
    ],
    'RouteList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Route',
        'locationName' => 'item',
      ],
    ],
    'RouteOrigin' => [
      'type' => 'string',
      'enum' => [
        'CreateRouteTable',
        'CreateRoute',
        'EnableVgwRoutePropagation',
      ],
    ],
    'RouteState' => [
      'type' => 'string',
      'enum' => [
        'active',
        'blackhole',
      ],
    ],
    'RouteTable' => [
      'type' => 'structure',
      'members' => [
        'RouteTableId' => [
          'shape' => 'String',
          'locationName' => 'routeTableId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'Routes' => [
          'shape' => 'RouteList',
          'locationName' => 'routeSet',
        ],
        'Associations' => [
          'shape' => 'RouteTableAssociationList',
          'locationName' => 'associationSet',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'PropagatingVgws' => [
          'shape' => 'PropagatingVgwList',
          'locationName' => 'propagatingVgwSet',
        ],
      ],
    ],
    'RouteTableAssociation' => [
      'type' => 'structure',
      'members' => [
        'RouteTableAssociationId' => [
          'shape' => 'String',
          'locationName' => 'routeTableAssociationId',
        ],
        'RouteTableId' => [
          'shape' => 'String',
          'locationName' => 'routeTableId',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'Main' => [
          'shape' => 'Boolean',
          'locationName' => 'main',
        ],
      ],
    ],
    'RouteTableAssociationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'RouteTableAssociation',
        'locationName' => 'item',
      ],
    ],
    'RouteTableList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'RouteTable',
        'locationName' => 'item',
      ],
    ],
    'RuleAction' => [
      'type' => 'string',
      'enum' => [
        'allow',
        'deny',
      ],
    ],
    'RunInstancesMonitoringEnabled' => [
      'type' => 'structure',
      'required' => [
        'Enabled',
      ],
      'members' => [
        'Enabled' => [
          'shape' => 'Boolean',
          'locationName' => 'enabled',
        ],
      ],
    ],
    'RunInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'ImageId',
        'MinCount',
        'MaxCount',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'ImageId' => [
          'shape' => 'String',
        ],
        'MinCount' => [
          'shape' => 'Integer',
        ],
        'MaxCount' => [
          'shape' => 'Integer',
        ],
        'KeyName' => [
          'shape' => 'String',
        ],
        'SecurityGroups' => [
          'shape' => 'SecurityGroupStringList',
          'locationName' => 'SecurityGroup',
        ],
        'SecurityGroupIds' => [
          'shape' => 'SecurityGroupIdStringList',
          'locationName' => 'SecurityGroupId',
        ],
        'UserData' => [
          'shape' => 'String',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
        ],
        'Placement' => [
          'shape' => 'Placement',
        ],
        'KernelId' => [
          'shape' => 'String',
        ],
        'RamdiskId' => [
          'shape' => 'String',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'BlockDeviceMappingRequestList',
          'locationName' => 'BlockDeviceMapping',
        ],
        'Monitoring' => [
          'shape' => 'RunInstancesMonitoringEnabled',
        ],
        'SubnetId' => [
          'shape' => 'String',
        ],
        'DisableApiTermination' => [
          'shape' => 'Boolean',
          'locationName' => 'disableApiTermination',
        ],
        'InstanceInitiatedShutdownBehavior' => [
          'shape' => 'ShutdownBehavior',
          'locationName' => 'instanceInitiatedShutdownBehavior',
        ],
        'PrivateIpAddress' => [
          'shape' => 'String',
          'locationName' => 'privateIpAddress',
        ],
        'ClientToken' => [
          'shape' => 'String',
          'locationName' => 'clientToken',
        ],
        'AdditionalInfo' => [
          'shape' => 'String',
          'locationName' => 'additionalInfo',
        ],
        'NetworkInterfaces' => [
          'shape' => 'InstanceNetworkInterfaceSpecificationList',
          'locationName' => 'networkInterface',
        ],
        'IamInstanceProfile' => [
          'shape' => 'IamInstanceProfileSpecification',
          'locationName' => 'iamInstanceProfile',
        ],
        'EbsOptimized' => [
          'shape' => 'Boolean',
          'locationName' => 'ebsOptimized',
        ],
      ],
    ],
    'S3Storage' => [
      'type' => 'structure',
      'members' => [
        'Bucket' => [
          'shape' => 'String',
          'locationName' => 'bucket',
        ],
        'Prefix' => [
          'shape' => 'String',
          'locationName' => 'prefix',
        ],
        'AWSAccessKeyId' => [
          'shape' => 'String',
        ],
        'UploadPolicy' => [
          'shape' => 'Blob',
          'locationName' => 'uploadPolicy',
        ],
        'UploadPolicySignature' => [
          'shape' => 'String',
          'locationName' => 'uploadPolicySignature',
        ],
      ],
    ],
    'SecurityGroup' => [
      'type' => 'structure',
      'members' => [
        'OwnerId' => [
          'shape' => 'String',
          'locationName' => 'ownerId',
        ],
        'GroupName' => [
          'shape' => 'String',
          'locationName' => 'groupName',
        ],
        'GroupId' => [
          'shape' => 'String',
          'locationName' => 'groupId',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'groupDescription',
        ],
        'IpPermissions' => [
          'shape' => 'IpPermissionList',
          'locationName' => 'ipPermissions',
        ],
        'IpPermissionsEgress' => [
          'shape' => 'IpPermissionList',
          'locationName' => 'ipPermissionsEgress',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'SecurityGroupIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'SecurityGroupId',
      ],
    ],
    'SecurityGroupList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SecurityGroup',
        'locationName' => 'item',
      ],
    ],
    'SecurityGroupStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'SecurityGroup',
      ],
    ],
    'ShutdownBehavior' => [
      'type' => 'string',
      'enum' => [
        'stop',
        'terminate',
      ],
    ],
    'Snapshot' => [
      'type' => 'structure',
      'members' => [
        'SnapshotId' => [
          'shape' => 'String',
          'locationName' => 'snapshotId',
        ],
        'VolumeId' => [
          'shape' => 'String',
          'locationName' => 'volumeId',
        ],
        'State' => [
          'shape' => 'SnapshotState',
          'locationName' => 'status',
        ],
        'StartTime' => [
          'shape' => 'DateTime',
          'locationName' => 'startTime',
        ],
        'Progress' => [
          'shape' => 'String',
          'locationName' => 'progress',
        ],
        'OwnerId' => [
          'shape' => 'String',
          'locationName' => 'ownerId',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'VolumeSize' => [
          'shape' => 'Integer',
          'locationName' => 'volumeSize',
        ],
        'OwnerAlias' => [
          'shape' => 'String',
          'locationName' => 'ownerAlias',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'Encrypted' => [
          'shape' => 'Boolean',
          'locationName' => 'encrypted',
        ],
        'KmsKeyId' => [
          'shape' => 'String',
          'locationName' => 'kmsKeyId',
        ],
      ],
    ],
    'SnapshotAttributeName' => [
      'type' => 'string',
      'enum' => [
        'productCodes',
        'createVolumePermission',
      ],
    ],
    'SnapshotIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'SnapshotId',
      ],
    ],
    'SnapshotList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Snapshot',
        'locationName' => 'item',
      ],
    ],
    'SnapshotState' => [
      'type' => 'string',
      'enum' => [
        'pending',
        'completed',
        'error',
      ],
    ],
    'SpotDatafeedSubscription' => [
      'type' => 'structure',
      'members' => [
        'OwnerId' => [
          'shape' => 'String',
          'locationName' => 'ownerId',
        ],
        'Bucket' => [
          'shape' => 'String',
          'locationName' => 'bucket',
        ],
        'Prefix' => [
          'shape' => 'String',
          'locationName' => 'prefix',
        ],
        'State' => [
          'shape' => 'DatafeedSubscriptionState',
          'locationName' => 'state',
        ],
        'Fault' => [
          'shape' => 'SpotInstanceStateFault',
          'locationName' => 'fault',
        ],
      ],
    ],
    'SpotInstanceRequest' => [
      'type' => 'structure',
      'members' => [
        'SpotInstanceRequestId' => [
          'shape' => 'String',
          'locationName' => 'spotInstanceRequestId',
        ],
        'SpotPrice' => [
          'shape' => 'String',
          'locationName' => 'spotPrice',
        ],
        'Type' => [
          'shape' => 'SpotInstanceType',
          'locationName' => 'type',
        ],
        'State' => [
          'shape' => 'SpotInstanceState',
          'locationName' => 'state',
        ],
        'Fault' => [
          'shape' => 'SpotInstanceStateFault',
          'locationName' => 'fault',
        ],
        'Status' => [
          'shape' => 'SpotInstanceStatus',
          'locationName' => 'status',
        ],
        'ValidFrom' => [
          'shape' => 'DateTime',
          'locationName' => 'validFrom',
        ],
        'ValidUntil' => [
          'shape' => 'DateTime',
          'locationName' => 'validUntil',
        ],
        'LaunchGroup' => [
          'shape' => 'String',
          'locationName' => 'launchGroup',
        ],
        'AvailabilityZoneGroup' => [
          'shape' => 'String',
          'locationName' => 'availabilityZoneGroup',
        ],
        'LaunchSpecification' => [
          'shape' => 'LaunchSpecification',
          'locationName' => 'launchSpecification',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'CreateTime' => [
          'shape' => 'DateTime',
          'locationName' => 'createTime',
        ],
        'ProductDescription' => [
          'shape' => 'RIProductDescription',
          'locationName' => 'productDescription',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'LaunchedAvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'launchedAvailabilityZone',
        ],
      ],
    ],
    'SpotInstanceRequestIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'SpotInstanceRequestId',
      ],
    ],
    'SpotInstanceRequestList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SpotInstanceRequest',
        'locationName' => 'item',
      ],
    ],
    'SpotInstanceState' => [
      'type' => 'string',
      'enum' => [
        'open',
        'active',
        'closed',
        'cancelled',
        'failed',
      ],
    ],
    'SpotInstanceStateFault' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'String',
          'locationName' => 'code',
        ],
        'Message' => [
          'shape' => 'String',
          'locationName' => 'message',
        ],
      ],
    ],
    'SpotInstanceStatus' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'String',
          'locationName' => 'code',
        ],
        'UpdateTime' => [
          'shape' => 'DateTime',
          'locationName' => 'updateTime',
        ],
        'Message' => [
          'shape' => 'String',
          'locationName' => 'message',
        ],
      ],
    ],
    'SpotInstanceType' => [
      'type' => 'string',
      'enum' => [
        'one-time',
        'persistent',
      ],
    ],
    'SpotPlacement' => [
      'type' => 'structure',
      'members' => [
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'GroupName' => [
          'shape' => 'String',
          'locationName' => 'groupName',
        ],
      ],
    ],
    'SpotPrice' => [
      'type' => 'structure',
      'members' => [
        'InstanceType' => [
          'shape' => 'InstanceType',
          'locationName' => 'instanceType',
        ],
        'ProductDescription' => [
          'shape' => 'RIProductDescription',
          'locationName' => 'productDescription',
        ],
        'SpotPrice' => [
          'shape' => 'String',
          'locationName' => 'spotPrice',
        ],
        'Timestamp' => [
          'shape' => 'DateTime',
          'locationName' => 'timestamp',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
      ],
    ],
    'SpotPriceHistoryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SpotPrice',
        'locationName' => 'item',
      ],
    ],
    'StartInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceIds',
      ],
      'members' => [
        'InstanceIds' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'InstanceId',
        ],
        'AdditionalInfo' => [
          'shape' => 'String',
          'locationName' => 'additionalInfo',
        ],
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
      ],
    ],
    'StartInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'StartingInstances' => [
          'shape' => 'InstanceStateChangeList',
          'locationName' => 'instancesSet',
        ],
      ],
    ],
    'StateReason' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'String',
          'locationName' => 'code',
        ],
        'Message' => [
          'shape' => 'String',
          'locationName' => 'message',
        ],
      ],
    ],
    'StatusName' => [
      'type' => 'string',
      'enum' => [
        'reachability',
      ],
    ],
    'StatusType' => [
      'type' => 'string',
      'enum' => [
        'passed',
        'failed',
        'insufficient-data',
      ],
    ],
    'StopInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceIds',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceIds' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'InstanceId',
        ],
        'Force' => [
          'shape' => 'Boolean',
          'locationName' => 'force',
        ],
      ],
    ],
    'StopInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'StoppingInstances' => [
          'shape' => 'InstanceStateChangeList',
          'locationName' => 'instancesSet',
        ],
      ],
    ],
    'Storage' => [
      'type' => 'structure',
      'members' => [
        'S3' => [
          'shape' => 'S3Storage',
        ],
      ],
    ],
    'String' => [
      'type' => 'string',
    ],
    'Subnet' => [
      'type' => 'structure',
      'members' => [
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'State' => [
          'shape' => 'SubnetState',
          'locationName' => 'state',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'CidrBlock' => [
          'shape' => 'String',
          'locationName' => 'cidrBlock',
        ],
        'AvailableIpAddressCount' => [
          'shape' => 'Integer',
          'locationName' => 'availableIpAddressCount',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'DefaultForAz' => [
          'shape' => 'Boolean',
          'locationName' => 'defaultForAz',
        ],
        'MapPublicIpOnLaunch' => [
          'shape' => 'Boolean',
          'locationName' => 'mapPublicIpOnLaunch',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'SubnetIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'SubnetId',
      ],
    ],
    'SubnetList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Subnet',
        'locationName' => 'item',
      ],
    ],
    'SubnetState' => [
      'type' => 'string',
      'enum' => [
        'pending',
        'available',
      ],
    ],
    'SummaryStatus' => [
      'type' => 'string',
      'enum' => [
        'ok',
        'impaired',
        'insufficient-data',
        'not-applicable',
      ],
    ],
    'Tag' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'String',
          'locationName' => 'key',
        ],
        'Value' => [
          'shape' => 'String',
          'locationName' => 'value',
        ],
      ],
    ],
    'TagDescription' => [
      'type' => 'structure',
      'members' => [
        'ResourceId' => [
          'shape' => 'String',
          'locationName' => 'resourceId',
        ],
        'ResourceType' => [
          'shape' => 'ResourceType',
          'locationName' => 'resourceType',
        ],
        'Key' => [
          'shape' => 'String',
          'locationName' => 'key',
        ],
        'Value' => [
          'shape' => 'String',
          'locationName' => 'value',
        ],
      ],
    ],
    'TagDescriptionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TagDescription',
        'locationName' => 'item',
      ],
    ],
    'TagList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Tag',
        'locationName' => 'item',
      ],
    ],
    'TelemetryStatus' => [
      'type' => 'string',
      'enum' => [
        'UP',
        'DOWN',
      ],
    ],
    'Tenancy' => [
      'type' => 'string',
      'enum' => [
        'default',
        'dedicated',
      ],
    ],
    'TerminateInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceIds',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceIds' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'InstanceId',
        ],
      ],
    ],
    'TerminateInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'TerminatingInstances' => [
          'shape' => 'InstanceStateChangeList',
          'locationName' => 'instancesSet',
        ],
      ],
    ],
    'UnassignPrivateIpAddressesRequest' => [
      'type' => 'structure',
      'required' => [
        'NetworkInterfaceId',
        'PrivateIpAddresses',
      ],
      'members' => [
        'NetworkInterfaceId' => [
          'shape' => 'String',
          'locationName' => 'networkInterfaceId',
        ],
        'PrivateIpAddresses' => [
          'shape' => 'PrivateIpAddressStringList',
          'locationName' => 'privateIpAddress',
        ],
      ],
    ],
    'UnmonitorInstancesRequest' => [
      'type' => 'structure',
      'required' => [
        'InstanceIds',
      ],
      'members' => [
        'DryRun' => [
          'shape' => 'Boolean',
          'locationName' => 'dryRun',
        ],
        'InstanceIds' => [
          'shape' => 'InstanceIdStringList',
          'locationName' => 'InstanceId',
        ],
      ],
    ],
    'UnmonitorInstancesResult' => [
      'type' => 'structure',
      'members' => [
        'InstanceMonitorings' => [
          'shape' => 'InstanceMonitoringList',
          'locationName' => 'instancesSet',
        ],
      ],
    ],
    'UserData' => [
      'type' => 'structure',
      'members' => [
        'Data' => [
          'shape' => 'String',
          'locationName' => 'data',
        ],
      ],
    ],
    'UserGroupStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'UserGroup',
      ],
    ],
    'UserIdGroupPair' => [
      'type' => 'structure',
      'members' => [
        'UserId' => [
          'shape' => 'String',
          'locationName' => 'userId',
        ],
        'GroupName' => [
          'shape' => 'String',
          'locationName' => 'groupName',
        ],
        'GroupId' => [
          'shape' => 'String',
          'locationName' => 'groupId',
        ],
      ],
    ],
    'UserIdGroupPairList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'UserIdGroupPair',
        'locationName' => 'item',
      ],
    ],
    'UserIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'UserId',
      ],
    ],
    'ValueStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'item',
      ],
    ],
    'VgwTelemetry' => [
      'type' => 'structure',
      'members' => [
        'OutsideIpAddress' => [
          'shape' => 'String',
          'locationName' => 'outsideIpAddress',
        ],
        'Status' => [
          'shape' => 'TelemetryStatus',
          'locationName' => 'status',
        ],
        'LastStatusChange' => [
          'shape' => 'DateTime',
          'locationName' => 'lastStatusChange',
        ],
        'StatusMessage' => [
          'shape' => 'String',
          'locationName' => 'statusMessage',
        ],
        'AcceptedRouteCount' => [
          'shape' => 'Integer',
          'locationName' => 'acceptedRouteCount',
        ],
      ],
    ],
    'VgwTelemetryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VgwTelemetry',
        'locationName' => 'item',
      ],
    ],
    'VirtualizationType' => [
      'type' => 'string',
      'enum' => [
        'hvm',
        'paravirtual',
      ],
    ],
    'Volume' => [
      'type' => 'structure',
      'members' => [
        'VolumeId' => [
          'shape' => 'String',
          'locationName' => 'volumeId',
        ],
        'Size' => [
          'shape' => 'Integer',
          'locationName' => 'size',
        ],
        'SnapshotId' => [
          'shape' => 'String',
          'locationName' => 'snapshotId',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'State' => [
          'shape' => 'VolumeState',
          'locationName' => 'status',
        ],
        'CreateTime' => [
          'shape' => 'DateTime',
          'locationName' => 'createTime',
        ],
        'Attachments' => [
          'shape' => 'VolumeAttachmentList',
          'locationName' => 'attachmentSet',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'VolumeType' => [
          'shape' => 'VolumeType',
          'locationName' => 'volumeType',
        ],
        'Iops' => [
          'shape' => 'Integer',
          'locationName' => 'iops',
        ],
        'Encrypted' => [
          'shape' => 'Boolean',
          'locationName' => 'encrypted',
        ],
        'KmsKeyId' => [
          'shape' => 'String',
          'locationName' => 'kmsKeyId',
        ],
      ],
    ],
    'VolumeAttachment' => [
      'type' => 'structure',
      'members' => [
        'VolumeId' => [
          'shape' => 'String',
          'locationName' => 'volumeId',
        ],
        'InstanceId' => [
          'shape' => 'String',
          'locationName' => 'instanceId',
        ],
        'Device' => [
          'shape' => 'String',
          'locationName' => 'device',
        ],
        'State' => [
          'shape' => 'VolumeAttachmentState',
          'locationName' => 'status',
        ],
        'AttachTime' => [
          'shape' => 'DateTime',
          'locationName' => 'attachTime',
        ],
        'DeleteOnTermination' => [
          'shape' => 'Boolean',
          'locationName' => 'deleteOnTermination',
        ],
      ],
    ],
    'VolumeAttachmentList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VolumeAttachment',
        'locationName' => 'item',
      ],
    ],
    'VolumeAttachmentState' => [
      'type' => 'string',
      'enum' => [
        'attaching',
        'attached',
        'detaching',
        'detached',
      ],
    ],
    'VolumeAttributeName' => [
      'type' => 'string',
      'enum' => [
        'autoEnableIO',
        'productCodes',
      ],
    ],
    'VolumeDetail' => [
      'type' => 'structure',
      'required' => [
        'Size',
      ],
      'members' => [
        'Size' => [
          'shape' => 'Long',
          'locationName' => 'size',
        ],
      ],
    ],
    'VolumeIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'VolumeId',
      ],
    ],
    'VolumeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Volume',
        'locationName' => 'item',
      ],
    ],
    'VolumeState' => [
      'type' => 'string',
      'enum' => [
        'creating',
        'available',
        'in-use',
        'deleting',
        'deleted',
        'error',
      ],
    ],
    'VolumeStatusAction' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'String',
          'locationName' => 'code',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'EventType' => [
          'shape' => 'String',
          'locationName' => 'eventType',
        ],
        'EventId' => [
          'shape' => 'String',
          'locationName' => 'eventId',
        ],
      ],
    ],
    'VolumeStatusActionsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VolumeStatusAction',
        'locationName' => 'item',
      ],
    ],
    'VolumeStatusDetails' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'VolumeStatusName',
          'locationName' => 'name',
        ],
        'Status' => [
          'shape' => 'String',
          'locationName' => 'status',
        ],
      ],
    ],
    'VolumeStatusDetailsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VolumeStatusDetails',
        'locationName' => 'item',
      ],
    ],
    'VolumeStatusEvent' => [
      'type' => 'structure',
      'members' => [
        'EventType' => [
          'shape' => 'String',
          'locationName' => 'eventType',
        ],
        'Description' => [
          'shape' => 'String',
          'locationName' => 'description',
        ],
        'NotBefore' => [
          'shape' => 'DateTime',
          'locationName' => 'notBefore',
        ],
        'NotAfter' => [
          'shape' => 'DateTime',
          'locationName' => 'notAfter',
        ],
        'EventId' => [
          'shape' => 'String',
          'locationName' => 'eventId',
        ],
      ],
    ],
    'VolumeStatusEventsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VolumeStatusEvent',
        'locationName' => 'item',
      ],
    ],
    'VolumeStatusInfo' => [
      'type' => 'structure',
      'members' => [
        'Status' => [
          'shape' => 'VolumeStatusInfoStatus',
          'locationName' => 'status',
        ],
        'Details' => [
          'shape' => 'VolumeStatusDetailsList',
          'locationName' => 'details',
        ],
      ],
    ],
    'VolumeStatusInfoStatus' => [
      'type' => 'string',
      'enum' => [
        'ok',
        'impaired',
        'insufficient-data',
      ],
    ],
    'VolumeStatusItem' => [
      'type' => 'structure',
      'members' => [
        'VolumeId' => [
          'shape' => 'String',
          'locationName' => 'volumeId',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'VolumeStatus' => [
          'shape' => 'VolumeStatusInfo',
          'locationName' => 'volumeStatus',
        ],
        'Events' => [
          'shape' => 'VolumeStatusEventsList',
          'locationName' => 'eventsSet',
        ],
        'Actions' => [
          'shape' => 'VolumeStatusActionsList',
          'locationName' => 'actionsSet',
        ],
      ],
    ],
    'VolumeStatusList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VolumeStatusItem',
        'locationName' => 'item',
      ],
    ],
    'VolumeStatusName' => [
      'type' => 'string',
      'enum' => [
        'io-enabled',
        'io-performance',
      ],
    ],
    'VolumeType' => [
      'type' => 'string',
      'enum' => [
        'standard',
        'io1',
        'gp2',
      ],
    ],
    'Vpc' => [
      'type' => 'structure',
      'members' => [
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'State' => [
          'shape' => 'VpcState',
          'locationName' => 'state',
        ],
        'CidrBlock' => [
          'shape' => 'String',
          'locationName' => 'cidrBlock',
        ],
        'DhcpOptionsId' => [
          'shape' => 'String',
          'locationName' => 'dhcpOptionsId',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'InstanceTenancy' => [
          'shape' => 'Tenancy',
          'locationName' => 'instanceTenancy',
        ],
        'IsDefault' => [
          'shape' => 'Boolean',
          'locationName' => 'isDefault',
        ],
      ],
    ],
    'VpcAttachment' => [
      'type' => 'structure',
      'members' => [
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'State' => [
          'shape' => 'AttachmentStatus',
          'locationName' => 'state',
        ],
      ],
    ],
    'VpcAttachmentList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VpcAttachment',
        'locationName' => 'item',
      ],
    ],
    'VpcAttributeName' => [
      'type' => 'string',
      'enum' => [
        'enableDnsSupport',
        'enableDnsHostnames',
      ],
    ],
    'VpcClassicLink' => [
      'type' => 'structure',
      'members' => [
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
        'ClassicLinkEnabled' => [
          'shape' => 'Boolean',
          'locationName' => 'classicLinkEnabled',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'VpcClassicLinkIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'VpcId',
      ],
    ],
    'VpcClassicLinkList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VpcClassicLink',
        'locationName' => 'item',
      ],
    ],
    'VpcIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'VpcId',
      ],
    ],
    'VpcList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Vpc',
        'locationName' => 'item',
      ],
    ],
    'VpcPeeringConnection' => [
      'type' => 'structure',
      'members' => [
        'AccepterVpcInfo' => [
          'shape' => 'VpcPeeringConnectionVpcInfo',
          'locationName' => 'accepterVpcInfo',
        ],
        'ExpirationTime' => [
          'shape' => 'DateTime',
          'locationName' => 'expirationTime',
        ],
        'RequesterVpcInfo' => [
          'shape' => 'VpcPeeringConnectionVpcInfo',
          'locationName' => 'requesterVpcInfo',
        ],
        'Status' => [
          'shape' => 'VpcPeeringConnectionStateReason',
          'locationName' => 'status',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'VpcPeeringConnectionId' => [
          'shape' => 'String',
          'locationName' => 'vpcPeeringConnectionId',
        ],
      ],
    ],
    'VpcPeeringConnectionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VpcPeeringConnection',
        'locationName' => 'item',
      ],
    ],
    'VpcPeeringConnectionStateReason' => [
      'type' => 'structure',
      'members' => [
        'Code' => [
          'shape' => 'String',
          'locationName' => 'code',
        ],
        'Message' => [
          'shape' => 'String',
          'locationName' => 'message',
        ],
      ],
    ],
    'VpcPeeringConnectionVpcInfo' => [
      'type' => 'structure',
      'members' => [
        'CidrBlock' => [
          'shape' => 'String',
          'locationName' => 'cidrBlock',
        ],
        'OwnerId' => [
          'shape' => 'String',
          'locationName' => 'ownerId',
        ],
        'VpcId' => [
          'shape' => 'String',
          'locationName' => 'vpcId',
        ],
      ],
    ],
    'VpcState' => [
      'type' => 'string',
      'enum' => [
        'pending',
        'available',
      ],
    ],
    'VpnConnection' => [
      'type' => 'structure',
      'members' => [
        'VpnConnectionId' => [
          'shape' => 'String',
          'locationName' => 'vpnConnectionId',
        ],
        'State' => [
          'shape' => 'VpnState',
          'locationName' => 'state',
        ],
        'CustomerGatewayConfiguration' => [
          'shape' => 'String',
          'locationName' => 'customerGatewayConfiguration',
        ],
        'Type' => [
          'shape' => 'GatewayType',
          'locationName' => 'type',
        ],
        'CustomerGatewayId' => [
          'shape' => 'String',
          'locationName' => 'customerGatewayId',
        ],
        'VpnGatewayId' => [
          'shape' => 'String',
          'locationName' => 'vpnGatewayId',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
        'VgwTelemetry' => [
          'shape' => 'VgwTelemetryList',
          'locationName' => 'vgwTelemetry',
        ],
        'Options' => [
          'shape' => 'VpnConnectionOptions',
          'locationName' => 'options',
        ],
        'Routes' => [
          'shape' => 'VpnStaticRouteList',
          'locationName' => 'routes',
        ],
      ],
    ],
    'VpnConnectionIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'VpnConnectionId',
      ],
    ],
    'VpnConnectionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VpnConnection',
        'locationName' => 'item',
      ],
    ],
    'VpnConnectionOptions' => [
      'type' => 'structure',
      'members' => [
        'StaticRoutesOnly' => [
          'shape' => 'Boolean',
          'locationName' => 'staticRoutesOnly',
        ],
      ],
    ],
    'VpnConnectionOptionsSpecification' => [
      'type' => 'structure',
      'members' => [
        'StaticRoutesOnly' => [
          'shape' => 'Boolean',
          'locationName' => 'staticRoutesOnly',
        ],
      ],
    ],
    'VpnGateway' => [
      'type' => 'structure',
      'members' => [
        'VpnGatewayId' => [
          'shape' => 'String',
          'locationName' => 'vpnGatewayId',
        ],
        'State' => [
          'shape' => 'VpnState',
          'locationName' => 'state',
        ],
        'Type' => [
          'shape' => 'GatewayType',
          'locationName' => 'type',
        ],
        'AvailabilityZone' => [
          'shape' => 'String',
          'locationName' => 'availabilityZone',
        ],
        'VpcAttachments' => [
          'shape' => 'VpcAttachmentList',
          'locationName' => 'attachments',
        ],
        'Tags' => [
          'shape' => 'TagList',
          'locationName' => 'tagSet',
        ],
      ],
    ],
    'VpnGatewayIdStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'VpnGatewayId',
      ],
    ],
    'VpnGatewayList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VpnGateway',
        'locationName' => 'item',
      ],
    ],
    'VpnState' => [
      'type' => 'string',
      'enum' => [
        'pending',
        'available',
        'deleting',
        'deleted',
      ],
    ],
    'VpnStaticRoute' => [
      'type' => 'structure',
      'members' => [
        'DestinationCidrBlock' => [
          'shape' => 'String',
          'locationName' => 'destinationCidrBlock',
        ],
        'Source' => [
          'shape' => 'VpnStaticRouteSource',
          'locationName' => 'source',
        ],
        'State' => [
          'shape' => 'VpnState',
          'locationName' => 'state',
        ],
      ],
    ],
    'VpnStaticRouteList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VpnStaticRoute',
        'locationName' => 'item',
      ],
    ],
    'VpnStaticRouteSource' => [
      'type' => 'string',
      'enum' => [
        'Static',
      ],
    ],
    'ZoneNameStringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'ZoneName',
      ],
    ],
    'NewDhcpConfigurationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NewDhcpConfiguration',
        'locationName' => 'item',
      ],
    ],
    'NewDhcpConfiguration' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'String',
          'locationName' => 'key',
        ],
        'Values' => [
          'shape' => 'ValueStringList',
          'locationName' => 'Value',
        ],
      ],
    ],
    'DhcpConfigurationValueList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AttributeValue',
        'locationName' => 'item',
      ],
    ],
    'Blob' => [
      'type' => 'blob',
    ],
    'BlobAttributeValue' => [
      'type' => 'structure',
      'members' => [
        'Value' => [
          'shape' => 'Blob',
          'locationName' => 'value',
        ],
      ],
    ],
    'RequestSpotLaunchSpecification' => [
      'type' => 'structure',
      'members' => [
        'ImageId' => [
          'shape' => 'String',
          'locationName' => 'imageId',
        ],
        'KeyName' => [
          'shape' => 'String',
          'locationName' => 'keyName',
        ],
        'SecurityGroups' => [
          'shape' => 'ValueStringList',
          'locationName' => 'SecurityGroup',
        ],
        'UserData' => [
          'shape' => 'String',
          'locationName' => 'userData',
        ],
        'AddressingType' => [
          'shape' => 'String',
          'locationName' => 'addressingType',
        ],
        'InstanceType' => [
          'shape' => 'InstanceType',
          'locationName' => 'instanceType',
        ],
        'Placement' => [
          'shape' => 'SpotPlacement',
          'locationName' => 'placement',
        ],
        'KernelId' => [
          'shape' => 'String',
          'locationName' => 'kernelId',
        ],
        'RamdiskId' => [
          'shape' => 'String',
          'locationName' => 'ramdiskId',
        ],
        'BlockDeviceMappings' => [
          'shape' => 'BlockDeviceMappingList',
          'locationName' => 'blockDeviceMapping',
        ],
        'SubnetId' => [
          'shape' => 'String',
          'locationName' => 'subnetId',
        ],
        'NetworkInterfaces' => [
          'shape' => 'InstanceNetworkInterfaceSpecificationList',
          'locationName' => 'NetworkInterface',
        ],
        'IamInstanceProfile' => [
          'shape' => 'IamInstanceProfileSpecification',
          'locationName' => 'iamInstanceProfile',
        ],
        'EbsOptimized' => [
          'shape' => 'Boolean',
          'locationName' => 'ebsOptimized',
        ],
        'Monitoring' => [
          'shape' => 'RunInstancesMonitoringEnabled',
          'locationName' => 'monitoring',
        ],
        'SecurityGroupIds' => [
          'shape' => 'ValueStringList',
          'locationName' => 'SecurityGroupId',
        ],
      ],
    ],
  ],
];
