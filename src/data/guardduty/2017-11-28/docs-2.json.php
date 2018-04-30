<?php
// This file was auto-generated from sdk-root/src/data/guardduty/2017-11-28/docs-2.json
return [ 'version' => '2.0', 'service' => 'Assess, monitor, manage, and remediate security issues across your AWS infrastructure, applications, and data.', 'operations' => [ 'AcceptInvitation' => 'Accepts the invitation to be monitored by a master GuardDuty account.', 'ArchiveFindings' => 'Archives Amazon GuardDuty findings specified by the list of finding IDs.', 'CreateDetector' => 'Creates a single Amazon GuardDuty detector. A detector is an object that represents the GuardDuty service. A detector must be created in order for GuardDuty to become operational.', 'CreateIPSet' => 'Creates a new IPSet - a list of trusted IP addresses that have been whitelisted for secure communication with AWS infrastructure and applications.', 'CreateMembers' => 'Creates member accounts of the current AWS account by specifying a list of AWS account IDs. The current AWS account can then invite these members to manage GuardDuty in their accounts.', 'CreateSampleFindings' => 'Generates example findings of types specified by the list of finding types. If \'NULL\' is specified for findingTypes, the API generates example findings of all supported finding types.', 'CreateThreatIntelSet' => 'Create a new ThreatIntelSet. ThreatIntelSets consist of known malicious IP addresses. GuardDuty generates findings based on ThreatIntelSets.', 'DeclineInvitations' => 'Declines invitations sent to the current member account by AWS account specified by their account IDs.', 'DeleteDetector' => 'Deletes a Amazon GuardDuty detector specified by the detector ID.', 'DeleteIPSet' => 'Deletes the IPSet specified by the IPSet ID.', 'DeleteInvitations' => 'Deletes invitations sent to the current member account by AWS accounts specified by their account IDs.', 'DeleteMembers' => 'Deletes GuardDuty member accounts (to the current GuardDuty master account) specified by the account IDs.', 'DeleteThreatIntelSet' => 'Deletes ThreatIntelSet specified by the ThreatIntelSet ID.', 'DisassociateFromMasterAccount' => 'Disassociates the current GuardDuty member account from its master account.', 'DisassociateMembers' => 'Disassociates GuardDuty member accounts (to the current GuardDuty master account) specified by the account IDs.', 'GetDetector' => 'Retrieves an Amazon GuardDuty detector specified by the detectorId.', 'GetFindings' => 'Describes Amazon GuardDuty findings specified by finding IDs.', 'GetFindingsStatistics' => 'Lists Amazon GuardDuty findings\' statistics for the specified detector ID.', 'GetIPSet' => 'Retrieves the IPSet specified by the IPSet ID.', 'GetInvitationsCount' => 'Returns the count of all GuardDuty membership invitations that were sent to the current member account except the currently accepted invitation.', 'GetMasterAccount' => 'Provides the details for the GuardDuty master account to the current GuardDuty member account.', 'GetMembers' => 'Retrieves GuardDuty member accounts (to the current GuardDuty master account) specified by the account IDs.', 'GetThreatIntelSet' => 'Retrieves the ThreatIntelSet that is specified by the ThreatIntelSet ID.', 'InviteMembers' => 'Invites other AWS accounts (created as members of the current AWS account by CreateMembers) to enable GuardDuty and allow the current AWS account to view and manage these accounts\' GuardDuty findings on their behalf as the master account.', 'ListDetectors' => 'Lists detectorIds of all the existing Amazon GuardDuty detector resources.', 'ListFindings' => 'Lists Amazon GuardDuty findings for the specified detector ID.', 'ListIPSets' => 'Lists the IPSets of the GuardDuty service specified by the detector ID.', 'ListInvitations' => 'Lists all GuardDuty membership invitations that were sent to the current AWS account.', 'ListMembers' => 'Lists details about all member accounts for the current GuardDuty master account.', 'ListThreatIntelSets' => 'Lists the ThreatIntelSets of the GuardDuty service specified by the detector ID.', 'StartMonitoringMembers' => 'Re-enables GuardDuty to monitor findings of the member accounts specified by the account IDs. A master GuardDuty account can run this command after disabling GuardDuty from monitoring these members\' findings by running StopMonitoringMembers.', 'StopMonitoringMembers' => 'Disables GuardDuty from monitoring findings of the member accounts specified by the account IDs. After running this command, a master GuardDuty account can run StartMonitoringMembers to re-enable GuardDuty to monitor these members’ findings.', 'UnarchiveFindings' => 'Unarchives Amazon GuardDuty findings specified by the list of finding IDs.', 'UpdateDetector' => 'Updates an Amazon GuardDuty detector specified by the detectorId.', 'UpdateFindingsFeedback' => 'Marks specified Amazon GuardDuty findings as useful or not useful.', 'UpdateIPSet' => 'Updates the IPSet specified by the IPSet ID.', 'UpdateThreatIntelSet' => 'Updates the ThreatIntelSet specified by ThreatIntelSet ID.', ], 'shapes' => [ 'AcceptInvitationRequest' => [ 'base' => 'AcceptInvitation request body.', 'refs' => [], ], 'AccessKeyDetails' => [ 'base' => 'The IAM access key details (IAM user information) of a user that engaged in the activity that prompted GuardDuty to generate a finding.', 'refs' => [ 'Resource$AccessKeyDetails' => NULL, ], ], 'AccountDetail' => [ 'base' => 'An object containing the member\'s accountId and email address.', 'refs' => [ 'AccountDetails$member' => NULL, ], ], 'AccountDetails' => [ 'base' => 'A list of account/email pairs.', 'refs' => [ 'CreateMembersRequest$AccountDetails' => 'A list of account ID and email address pairs of the accounts that you want to associate with the master GuardDuty account.', ], ], 'AccountId' => [ 'base' => 'AWS account ID.', 'refs' => [ 'AccountDetail$AccountId' => 'Member account ID.', 'Member$AccountId' => NULL, ], ], 'AccountIds' => [ 'base' => 'A list of account IDs.', 'refs' => [ 'DeclineInvitationsRequest$AccountIds' => 'A list of account IDs of the AWS accounts that sent invitations to the current member account that you want to decline invitations from.', 'DeleteInvitationsRequest$AccountIds' => 'A list of account IDs of the AWS accounts that sent invitations to the current member account that you want to delete invitations from.', 'DeleteMembersRequest$AccountIds' => 'A list of account IDs of the GuardDuty member accounts that you want to delete.', 'DisassociateMembersRequest$AccountIds' => 'A list of account IDs of the GuardDuty member accounts that you want to disassociate from master.', 'GetMembersRequest$AccountIds' => 'A list of account IDs of the GuardDuty member accounts that you want to describe.', 'InviteMembersRequest$AccountIds' => 'A list of account IDs of the accounts that you want to invite to GuardDuty as members.', 'StartMonitoringMembersRequest$AccountIds' => 'A list of account IDs of the GuardDuty member accounts whose findings you want the master account to monitor.', 'StopMonitoringMembersRequest$AccountIds' => 'A list of account IDs of the GuardDuty member accounts whose findings you want the master account to stop monitoring.', ], ], 'Action' => [ 'base' => 'Information about the activity described in a finding.', 'refs' => [ 'Service$Action' => 'Information about the activity described in a finding.', ], ], 'Activate' => [ 'base' => 'Whether we should start processing the list immediately or not.', 'refs' => [ 'CreateIPSetRequest$Activate' => 'A boolean value that indicates whether GuardDuty is to start using the uploaded IPSet.', 'CreateThreatIntelSetRequest$Activate' => 'A boolean value that indicates whether GuardDuty is to start using the uploaded ThreatIntelSet.', 'UpdateIPSetRequest$Activate' => 'The updated boolean value that specifies whether the IPSet is active or not.', 'UpdateThreatIntelSetRequest$Activate' => 'The updated boolean value that specifies whether the ThreateIntelSet is active or not.', ], ], 'ArchiveFindingsRequest' => [ 'base' => 'Archive Findings Request', 'refs' => [], ], 'AwsApiCallAction' => [ 'base' => 'Information about the AWS_API_CALL action described in this finding.', 'refs' => [ 'Action$AwsApiCallAction' => 'Information about the AWS_API_CALL action described in this finding.', ], ], 'BadRequestException' => [ 'base' => 'Error response object.', 'refs' => [], ], 'City' => [ 'base' => 'City information of the remote IP address.', 'refs' => [ 'RemoteIpDetails$City' => 'City information of the remote IP address.', ], ], 'Comments' => [ 'base' => 'Additional feedback about the GuardDuty findings.', 'refs' => [ 'UpdateFindingsFeedbackRequest$Comments' => 'Additional feedback about the GuardDuty findings.', ], ], 'Condition' => [ 'base' => 'Finding attribute (for example, accountId) for which conditions and values must be specified when querying findings.', 'refs' => [ '__mapOfCondition$member' => NULL, ], ], 'CountBySeverityFindingStatistic' => [ 'base' => 'The count of findings for the given severity.', 'refs' => [ '__mapOfCountBySeverityFindingStatistic$member' => NULL, ], ], 'Country' => [ 'base' => 'Country information of the remote IP address.', 'refs' => [ 'RemoteIpDetails$Country' => 'Country code of the remote IP address.', ], ], 'CreateDetectorRequest' => [ 'base' => 'Create Detector Request', 'refs' => [], ], 'CreateDetectorResponse' => [ 'base' => 'CreateDetector response object.', 'refs' => [], ], 'CreateIPSetRequest' => [ 'base' => 'Create IP Set Request', 'refs' => [], ], 'CreateIPSetResponse' => [ 'base' => 'CreateIPSet response object.', 'refs' => [], ], 'CreateMembersRequest' => [ 'base' => 'CreateMembers body', 'refs' => [], ], 'CreateMembersResponse' => [ 'base' => 'CreateMembers response object.', 'refs' => [], ], 'CreateSampleFindingsRequest' => [ 'base' => 'Create Sample Findings Request', 'refs' => [], ], 'CreateThreatIntelSetRequest' => [ 'base' => 'Create Threat Intel Set Request', 'refs' => [], ], 'CreateThreatIntelSetResponse' => [ 'base' => 'CreateThreatIntelSet response object.', 'refs' => [], ], 'CreatedAt' => [ 'base' => 'The first time a resource was created. The format will be ISO-8601.', 'refs' => [ 'Finding$CreatedAt' => 'The time stamp at which a finding was generated.', 'GetDetectorResponse$CreatedAt' => NULL, ], ], 'DeclineInvitationsRequest' => [ 'base' => 'DeclineInvitations request body.', 'refs' => [], ], 'DeclineInvitationsResponse' => [ 'base' => 'DeclineInvitations response object.', 'refs' => [], ], 'DeleteInvitationsRequest' => [ 'base' => 'DeleteInvitations request body.', 'refs' => [], ], 'DeleteInvitationsResponse' => [ 'base' => 'DeleteInvitations response object.', 'refs' => [], ], 'DeleteMembersRequest' => [ 'base' => 'DeleteMembers request body.', 'refs' => [], ], 'DeleteMembersResponse' => [ 'base' => 'DeleteMembers response object.', 'refs' => [], ], 'DetectorId' => [ 'base' => 'The unique identifier for a detector.', 'refs' => [ 'CreateDetectorResponse$DetectorId' => 'The unique ID of the created detector.', 'DetectorIds$member' => NULL, 'Member$DetectorId' => NULL, 'Service$DetectorId' => 'Detector ID for the GuardDuty service.', ], ], 'DetectorIds' => [ 'base' => 'A list of detector Ids.', 'refs' => [ 'ListDetectorsResponse$DetectorIds' => NULL, ], ], 'DetectorStatus' => [ 'base' => 'The status of detector.', 'refs' => [ 'GetDetectorResponse$Status' => NULL, ], ], 'DisassociateMembersRequest' => [ 'base' => 'DisassociateMembers request body.', 'refs' => [], ], 'DisassociateMembersResponse' => [ 'base' => 'DisassociateMembers response object.', 'refs' => [], ], 'DnsRequestAction' => [ 'base' => 'Information about the DNS_REQUEST action described in this finding.', 'refs' => [ 'Action$DnsRequestAction' => 'Information about the DNS_REQUEST action described in this finding.', ], ], 'Domain' => [ 'base' => 'A domain name.', 'refs' => [ 'DnsRequestAction$Domain' => 'Domain information for the DNS request.', ], ], 'DomainDetails' => [ 'base' => 'Domain information for the AWS API call.', 'refs' => [ 'AwsApiCallAction$DomainDetails' => 'Domain information for the AWS API call.', ], ], 'Email' => [ 'base' => 'Member account\'s email address.', 'refs' => [ 'AccountDetail$Email' => 'Member account\'s email address.', 'Member$Email' => 'Member account\'s email address.', ], ], 'Enable' => [ 'base' => 'A boolean value that specifies whether the detector is to be enabled.', 'refs' => [ 'CreateDetectorRequest$Enable' => 'A boolean value that specifies whether the detector is to be enabled.', 'UpdateDetectorRequest$Enable' => 'Updated boolean value for the detector that specifies whether the detector is enabled.', ], ], 'Eq' => [ 'base' => 'Represents the equal condition to be applied to a single field when querying for findings.', 'refs' => [ 'Condition$Eq' => 'Represents the equal condition to be applied to a single field when querying for findings.', ], ], 'ErrorResponse' => [ 'base' => 'Error response object.', 'refs' => [], ], 'Feedback' => [ 'base' => 'Finding Feedback Value', 'refs' => [ 'UpdateFindingsFeedbackRequest$Feedback' => 'Valid values: USEFUL | NOT_USEFUL', ], ], 'Finding' => [ 'base' => 'Representation of a abnormal or suspicious activity.', 'refs' => [ 'Findings$member' => NULL, ], ], 'FindingCriteria' => [ 'base' => 'Represents the criteria used for querying findings.', 'refs' => [ 'GetFindingsStatisticsRequest$FindingCriteria' => 'Represents the criteria used for querying findings.', 'ListFindingsRequest$FindingCriteria' => 'Represents the criteria used for querying findings.', ], ], 'FindingId' => [ 'base' => 'The unique identifier for the Finding', 'refs' => [ 'FindingIds$member' => NULL, ], ], 'FindingIds' => [ 'base' => 'The list of the Findings.', 'refs' => [ 'ArchiveFindingsRequest$FindingIds' => 'IDs of the findings that you want to archive.', 'GetFindingsRequest$FindingIds' => 'IDs of the findings that you want to retrieve.', 'ListFindingsResponse$FindingIds' => NULL, 'UnarchiveFindingsRequest$FindingIds' => 'IDs of the findings that you want to unarchive.', 'UpdateFindingsFeedbackRequest$FindingIds' => 'IDs of the findings that you want to mark as useful or not useful.', ], ], 'FindingStatisticType' => [ 'base' => 'The types of finding statistics.', 'refs' => [ 'FindingStatisticTypes$member' => NULL, ], ], 'FindingStatisticTypes' => [ 'base' => 'The list of the finding statistics.', 'refs' => [ 'GetFindingsStatisticsRequest$FindingStatisticTypes' => 'Types of finding statistics to retrieve.', ], ], 'FindingStatistics' => [ 'base' => 'Finding statistics object.', 'refs' => [ 'GetFindingsStatisticsResponse$FindingStatistics' => 'Finding statistics object.', ], ], 'FindingType' => [ 'base' => 'The finding type for the finding', 'refs' => [ 'FindingTypes$member' => NULL, ], ], 'FindingTypes' => [ 'base' => 'The list of the finding types.', 'refs' => [ 'CreateSampleFindingsRequest$FindingTypes' => 'Types of sample findings that you want to generate.', ], ], 'Findings' => [ 'base' => 'A list of findings.', 'refs' => [ 'GetFindingsResponse$Findings' => NULL, ], ], 'GeoLocation' => [ 'base' => 'Location information of the remote IP address.', 'refs' => [ 'RemoteIpDetails$GeoLocation' => 'Location information of the remote IP address.', ], ], 'GetDetectorResponse' => [ 'base' => 'GetDetector response object.', 'refs' => [], ], 'GetFindingsRequest' => [ 'base' => 'Get Findings Request', 'refs' => [], ], 'GetFindingsResponse' => [ 'base' => 'GetFindings response object.', 'refs' => [], ], 'GetFindingsStatisticsRequest' => [ 'base' => 'Get Findings Statistics Request', 'refs' => [], ], 'GetFindingsStatisticsResponse' => [ 'base' => 'GetFindingsStatistics response object.', 'refs' => [], ], 'GetIPSetResponse' => [ 'base' => 'GetIPSet response object.', 'refs' => [], ], 'GetInvitationsCountResponse' => [ 'base' => 'GetInvitationsCount response object.', 'refs' => [], ], 'GetMasterAccountResponse' => [ 'base' => 'GetMasterAccount response object.', 'refs' => [], ], 'GetMembersRequest' => [ 'base' => 'GetMembers request body.', 'refs' => [], ], 'GetMembersResponse' => [ 'base' => 'GetMembers response object.', 'refs' => [], ], 'GetThreatIntelSetResponse' => [ 'base' => 'GetThreatIntelSet response object', 'refs' => [], ], 'IamInstanceProfile' => [ 'base' => 'The profile information of the EC2 instance.', 'refs' => [ 'InstanceDetails$IamInstanceProfile' => NULL, ], ], 'InstanceDetails' => [ 'base' => 'The information about the EC2 instance associated with the activity that prompted GuardDuty to generate a finding.', 'refs' => [ 'Resource$InstanceDetails' => NULL, ], ], 'InternalServerErrorException' => [ 'base' => 'Error response object.', 'refs' => [], ], 'Invitation' => [ 'base' => 'Invitation from an AWS account to become the current account\'s master.', 'refs' => [ 'Invitations$member' => NULL, ], ], 'InvitationId' => [ 'base' => 'This value is used to validate the master account to the member account.', 'refs' => [ 'AcceptInvitationRequest$InvitationId' => 'This value is used to validate the master account to the member account.', 'Invitation$InvitationId' => 'This value is used to validate the inviter account to the member account.', 'Master$InvitationId' => 'This value is used to validate the master account to the member account.', ], ], 'Invitations' => [ 'base' => 'A list of invitation descriptions.', 'refs' => [ 'ListInvitationsResponse$Invitations' => NULL, ], ], 'InviteMembersRequest' => [ 'base' => 'InviteMembers request body.', 'refs' => [], ], 'InviteMembersResponse' => [ 'base' => 'InviteMembers response object.', 'refs' => [], ], 'InvitedAt' => [ 'base' => 'Timestamp at which a member has been invited. The format will be ISO-8601.', 'refs' => [ 'Invitation$InvitedAt' => 'Timestamp at which the invitation was sent', 'Master$InvitedAt' => 'Timestamp at which the invitation was sent', 'Member$InvitedAt' => 'Timestamp at which the invitation was sent', ], ], 'IpSetFormat' => [ 'base' => 'The format of the ipSet.', 'refs' => [ 'CreateIPSetRequest$Format' => 'The format of the file that contains the IPSet.', 'GetIPSetResponse$Format' => 'The format of the file that contains the IPSet.', ], ], 'IpSetId' => [ 'base' => 'The unique identifier for an IP Set', 'refs' => [ 'CreateIPSetResponse$IpSetId' => NULL, 'IpSetIds$member' => NULL, ], ], 'IpSetIds' => [ 'base' => 'A list of the IP set IDs', 'refs' => [ 'ListIPSetsResponse$IpSetIds' => NULL, ], ], 'IpSetStatus' => [ 'base' => 'The status of ipSet file uploaded.', 'refs' => [ 'GetIPSetResponse$Status' => 'The status of ipSet file uploaded.', ], ], 'Ipv6Address' => [ 'base' => 'IpV6 address of the EC2 instance.', 'refs' => [ 'Ipv6Addresses$member' => NULL, ], ], 'Ipv6Addresses' => [ 'base' => 'A list of EC2 instance IPv6 address information.', 'refs' => [ 'NetworkInterface$Ipv6Addresses' => 'A list of EC2 instance IPv6 address information.', ], ], 'ListDetectorsResponse' => [ 'base' => 'ListDetectors response object.', 'refs' => [], ], 'ListFindingsRequest' => [ 'base' => 'List Findings Request', 'refs' => [], ], 'ListFindingsResponse' => [ 'base' => 'ListFindings response object.', 'refs' => [], ], 'ListIPSetsResponse' => [ 'base' => 'ListIPSets response object.', 'refs' => [], ], 'ListInvitationsResponse' => [ 'base' => 'ListInvitations response object.', 'refs' => [], ], 'ListMembersResponse' => [ 'base' => 'ListMembers response object.', 'refs' => [], ], 'ListThreatIntelSetsResponse' => [ 'base' => 'ListThreatIntelSets response object.', 'refs' => [], ], 'LocalPortDetails' => [ 'base' => 'Local port information of the connection.', 'refs' => [ 'NetworkConnectionAction$LocalPortDetails' => 'Local port information of the connection.', 'PortProbeDetail$LocalPortDetails' => 'Local port information of the connection.', ], ], 'Location' => [ 'base' => 'The location of the S3 bucket where the list resides. For example (https://s3.us-west-2.amazonaws.com/my-bucket/my-object-key)', 'refs' => [ 'CreateIPSetRequest$Location' => 'The URI of the file that contains the IPSet. For example (https://s3.us-west-2.amazonaws.com/my-bucket/my-object-key)', 'CreateThreatIntelSetRequest$Location' => 'The URI of the file that contains the ThreatIntelSet. For example (https://s3.us-west-2.amazonaws.com/my-bucket/my-object-key).', 'GetIPSetResponse$Location' => 'The URI of the file that contains the IPSet. For example (https://s3.us-west-2.amazonaws.com/my-bucket/my-object-key)', 'GetThreatIntelSetResponse$Location' => 'The URI of the file that contains the ThreatIntelSet. For example (https://s3.us-west-2.amazonaws.com/my-bucket/my-object-key).', 'UpdateIPSetRequest$Location' => 'The updated URI of the file that contains the IPSet. For example (https://s3.us-west-2.amazonaws.com/my-bucket/my-object-key).', 'UpdateThreatIntelSetRequest$Location' => 'The updated URI of the file that contains the ThreateIntelSet. For example (https://s3.us-west-2.amazonaws.com/my-bucket/my-object-key)', ], ], 'Master' => [ 'base' => 'Contains details about the master account.', 'refs' => [ 'GetMasterAccountResponse$Master' => NULL, ], ], 'MasterId' => [ 'base' => 'The master account ID.', 'refs' => [ 'AcceptInvitationRequest$MasterId' => 'The account ID of the master GuardDuty account whose invitation you\'re accepting.', 'Member$MasterId' => NULL, ], ], 'MaxResults' => [ 'base' => 'You can use this parameter to indicate the maximum number of items that you want in the response.', 'refs' => [ 'ListFindingsRequest$MaxResults' => 'You can use this parameter to indicate the maximum number of items you want in the response. The default value is 50. The maximum value is 50.', ], ], 'Member' => [ 'base' => 'Contains details about the member account.', 'refs' => [ 'Members$member' => NULL, ], ], 'Members' => [ 'base' => 'A list of member descriptions.', 'refs' => [ 'GetMembersResponse$Members' => NULL, 'ListMembersResponse$Members' => NULL, ], ], 'Message' => [ 'base' => 'The invitation message that you want to send to the accounts that you’re inviting to GuardDuty as members.', 'refs' => [ 'InviteMembersRequest$Message' => 'The invitation message that you want to send to the accounts that you’re inviting to GuardDuty as members.', ], ], 'Name' => [ 'base' => 'The user-friendly name to identify the list.', 'refs' => [ 'CreateIPSetRequest$Name' => 'The user friendly name to identify the IPSet. This name is displayed in all findings that are triggered by activity that involves IP addresses included in this IPSet.', 'CreateThreatIntelSetRequest$Name' => 'A user-friendly ThreatIntelSet name that is displayed in all finding generated by activity that involves IP addresses included in this ThreatIntelSet.', 'GetIPSetResponse$Name' => 'The user friendly name to identify the IPSet. This name is displayed in all findings that are triggered by activity that involves IP addresses included in this IPSet.', 'GetThreatIntelSetResponse$Name' => 'A user-friendly ThreatIntelSet name that is displayed in all finding generated by activity that involves IP addresses included in this ThreatIntelSet.', 'UpdateIPSetRequest$Name' => 'The unique ID that specifies the IPSet that you want to update.', 'UpdateThreatIntelSetRequest$Name' => 'The unique ID that specifies the ThreatIntelSet that you want to update.', ], ], 'Neq' => [ 'base' => 'Represents the not equal condition to be applied to a single field when querying for findings.', 'refs' => [ 'Condition$Neq' => 'Represents the not equal condition to be applied to a single field when querying for findings.', ], ], 'NetworkConnectionAction' => [ 'base' => 'Information about the NETWORK_CONNECTION action described in this finding.', 'refs' => [ 'Action$NetworkConnectionAction' => 'Information about the NETWORK_CONNECTION action described in this finding.', ], ], 'NetworkInterface' => [ 'base' => 'The network interface information of the EC2 instance.', 'refs' => [ 'NetworkInterfaces$member' => NULL, ], ], 'NetworkInterfaces' => [ 'base' => 'The network interface information of the EC2 instance.', 'refs' => [ 'InstanceDetails$NetworkInterfaces' => 'The network interface information of the EC2 instance.', ], ], 'NextToken' => [ 'base' => 'You can use this parameter when paginating results. Set the value of this parameter to null on your first call to the list action. For subsequent calls to the action fill nextToken in the request with the value of NextToken from the previous response to continue listing data.', 'refs' => [ 'ListDetectorsResponse$NextToken' => NULL, 'ListFindingsRequest$NextToken' => 'You can use this parameter when paginating results. Set the value of this parameter to null on your first call to the ListFindings action. For subsequent calls to the action fill nextToken in the request with the value of nextToken from the previous response to continue listing data.', 'ListFindingsResponse$NextToken' => NULL, 'ListIPSetsResponse$NextToken' => NULL, 'ListInvitationsResponse$NextToken' => NULL, 'ListMembersResponse$NextToken' => NULL, 'ListThreatIntelSetsResponse$NextToken' => NULL, ], ], 'OrderBy' => [ 'base' => NULL, 'refs' => [ 'SortCriteria$OrderBy' => 'Order by which the sorted findings are to be displayed.', ], ], 'Organization' => [ 'base' => 'ISP Organization information of the remote IP address.', 'refs' => [ 'RemoteIpDetails$Organization' => 'ISP Organization information of the remote IP address.', ], ], 'PortProbeAction' => [ 'base' => 'Information about the PORT_PROBE action described in this finding.', 'refs' => [ 'Action$PortProbeAction' => 'Information about the PORT_PROBE action described in this finding.', ], ], 'PortProbeDetail' => [ 'base' => 'Details about the port probe finding.', 'refs' => [ '__listOfPortProbeDetail$member' => NULL, ], ], 'PrivateDnsName' => [ 'base' => 'Private DNS name of the EC2 instance.', 'refs' => [ 'NetworkInterface$PrivateDnsName' => 'Private DNS name of the EC2 instance.', 'PrivateIpAddressDetails$PrivateDnsName' => 'Private DNS name of the EC2 instance.', ], ], 'PrivateIpAddress' => [ 'base' => 'Private IP address of the EC2 instance.', 'refs' => [ 'NetworkInterface$PrivateIpAddress' => 'Private IP address of the EC2 instance.', 'PrivateIpAddressDetails$PrivateIpAddress' => 'Private IP address of the EC2 instance.', ], ], 'PrivateIpAddressDetails' => [ 'base' => 'Other private IP address information of the EC2 instance.', 'refs' => [ 'PrivateIpAddresses$member' => NULL, ], ], 'PrivateIpAddresses' => [ 'base' => 'Other private IP address information of the EC2 instance.', 'refs' => [ 'NetworkInterface$PrivateIpAddresses' => 'Other private IP address information of the EC2 instance.', ], ], 'ProductCode' => [ 'base' => 'The product code of the EC2 instance.', 'refs' => [ 'ProductCodes$member' => NULL, ], ], 'ProductCodes' => [ 'base' => 'The product code of the EC2 instance.', 'refs' => [ 'InstanceDetails$ProductCodes' => 'The product code of the EC2 instance.', ], ], 'RemoteIpDetails' => [ 'base' => 'Remote IP information of the connection.', 'refs' => [ 'AwsApiCallAction$RemoteIpDetails' => 'Remote IP information of the connection.', 'NetworkConnectionAction$RemoteIpDetails' => 'Remote IP information of the connection.', 'PortProbeDetail$RemoteIpDetails' => 'Remote IP information of the connection.', ], ], 'RemotePortDetails' => [ 'base' => 'Remote port information of the connection.', 'refs' => [ 'NetworkConnectionAction$RemotePortDetails' => 'Remote port information of the connection.', ], ], 'Resource' => [ 'base' => 'The AWS resource associated with the activity that prompted GuardDuty to generate a finding.', 'refs' => [ 'Finding$Resource' => 'The AWS resource associated with the activity that prompted GuardDuty to generate a finding.', ], ], 'SecurityGroup' => [ 'base' => 'Security groups associated with the EC2 instance.', 'refs' => [ 'SecurityGroups$member' => NULL, ], ], 'SecurityGroups' => [ 'base' => 'Security groups associated with the EC2 instance.', 'refs' => [ 'NetworkInterface$SecurityGroups' => 'Security groups associated with the EC2 instance.', ], ], 'Service' => [ 'base' => 'Additional information assigned to the generated finding by GuardDuty.', 'refs' => [ 'Finding$Service' => 'Additional information assigned to the generated finding by GuardDuty.', ], ], 'ServiceRole' => [ 'base' => 'Customer serviceRole name or ARN for accessing customer resources', 'refs' => [ 'GetDetectorResponse$ServiceRole' => NULL, ], ], 'SortCriteria' => [ 'base' => 'Represents the criteria used for sorting findings.', 'refs' => [ 'GetFindingsRequest$SortCriteria' => 'Represents the criteria used for sorting findings.', 'ListFindingsRequest$SortCriteria' => 'Represents the criteria used for sorting findings.', ], ], 'StartMonitoringMembersRequest' => [ 'base' => 'StartMonitoringMembers request body.', 'refs' => [], ], 'StartMonitoringMembersResponse' => [ 'base' => 'StartMonitoringMembers response object.', 'refs' => [], ], 'StopMonitoringMembersRequest' => [ 'base' => 'StopMonitoringMembers request body.', 'refs' => [], ], 'StopMonitoringMembersResponse' => [ 'base' => 'StopMonitoringMembers response object.', 'refs' => [], ], 'Tag' => [ 'base' => 'A tag of the EC2 instance.', 'refs' => [ 'Tags$member' => NULL, ], ], 'Tags' => [ 'base' => 'The tags of the EC2 instance.', 'refs' => [ 'InstanceDetails$Tags' => 'The tags of the EC2 instance.', ], ], 'ThreatIntelSetFormat' => [ 'base' => 'The format of the threatIntelSet.', 'refs' => [ 'CreateThreatIntelSetRequest$Format' => 'The format of the file that contains the ThreatIntelSet.', 'GetThreatIntelSetResponse$Format' => 'The format of the threatIntelSet.', ], ], 'ThreatIntelSetId' => [ 'base' => 'The unique identifier for an threat intel set', 'refs' => [ 'CreateThreatIntelSetResponse$ThreatIntelSetId' => NULL, 'ThreatIntelSetIds$member' => NULL, ], ], 'ThreatIntelSetIds' => [ 'base' => 'The list of the threat intel set IDs', 'refs' => [ 'ListThreatIntelSetsResponse$ThreatIntelSetIds' => NULL, ], ], 'ThreatIntelSetStatus' => [ 'base' => 'The status of threatIntelSet file uploaded.', 'refs' => [ 'GetThreatIntelSetResponse$Status' => 'The status of threatIntelSet file uploaded.', ], ], 'UnarchiveFindingsRequest' => [ 'base' => 'Unrchive Findings Request', 'refs' => [], ], 'UnprocessedAccount' => [ 'base' => 'An object containing the unprocessed account and a result string explaining why it was unprocessed.', 'refs' => [ 'UnprocessedAccounts$member' => NULL, ], ], 'UnprocessedAccounts' => [ 'base' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', 'refs' => [ 'CreateMembersResponse$UnprocessedAccounts' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', 'DeclineInvitationsResponse$UnprocessedAccounts' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', 'DeleteInvitationsResponse$UnprocessedAccounts' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', 'DeleteMembersResponse$UnprocessedAccounts' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', 'DisassociateMembersResponse$UnprocessedAccounts' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', 'GetMembersResponse$UnprocessedAccounts' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', 'InviteMembersResponse$UnprocessedAccounts' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', 'StartMonitoringMembersResponse$UnprocessedAccounts' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', 'StopMonitoringMembersResponse$UnprocessedAccounts' => 'A list of objects containing the unprocessed account and a result string explaining why it was unprocessed.', ], ], 'UpdateDetectorRequest' => [ 'base' => 'Update Detector Request', 'refs' => [], ], 'UpdateFindingsFeedbackRequest' => [ 'base' => 'Update findings feedback body', 'refs' => [], ], 'UpdateIPSetRequest' => [ 'base' => 'Update IP Set Request', 'refs' => [], ], 'UpdateThreatIntelSetRequest' => [ 'base' => 'Update Threat Intel Set Request', 'refs' => [], ], 'UpdatedAt' => [ 'base' => 'The first time a resource was created. The format will be ISO-8601.', 'refs' => [ 'Finding$UpdatedAt' => 'The time stamp at which a finding was last updated.', 'GetDetectorResponse$UpdatedAt' => NULL, 'Member$UpdatedAt' => NULL, ], ], '__boolean' => [ 'base' => NULL, 'refs' => [ 'InviteMembersRequest$DisableEmailNotification' => 'Indicates whether invite member email notification is disabled', 'NetworkConnectionAction$Blocked' => 'Network connection blocked information.', 'PortProbeAction$Blocked' => 'Port probe blocked information.', 'Service$Archived' => 'Indicates whether this finding is archived.', ], ], '__double' => [ 'base' => NULL, 'refs' => [ 'Finding$Confidence' => 'The confidence level of a finding.', 'Finding$Severity' => 'The severity of a finding.', 'GeoLocation$Lat' => 'Latitude information of remote IP address.', 'GeoLocation$Lon' => 'Longitude information of remote IP address.', ], ], '__integer' => [ 'base' => NULL, 'refs' => [ 'Condition$Gt' => 'Represents the greater than condition to be applied to a single field when querying for findings.', 'Condition$Gte' => 'Represents the greater than equal condition to be applied to a single field when querying for findings.', 'Condition$Lt' => 'Represents the less than condition to be applied to a single field when querying for findings.', 'Condition$Lte' => 'Represents the less than equal condition to be applied to a single field when querying for findings.', 'GetInvitationsCountResponse$InvitationsCount' => 'The number of received invitations.', 'LocalPortDetails$Port' => 'Port number of the local connection.', 'RemotePortDetails$Port' => 'Port number of the remote connection.', 'Service$Count' => 'Total count of the occurrences of this finding type.', ], ], '__listOfPortProbeDetail' => [ 'base' => NULL, 'refs' => [ 'PortProbeAction$PortProbeDetails' => 'A list of port probe details objects.', ], ], '__mapOfCondition' => [ 'base' => NULL, 'refs' => [ 'FindingCriteria$Criterion' => 'Represents a map of finding properties that match specified conditions and values when querying findings.', ], ], '__mapOfCountBySeverityFindingStatistic' => [ 'base' => NULL, 'refs' => [ 'FindingStatistics$CountBySeverity' => 'Represents a map of severity to count statistic for a set of findings', ], ], '__string' => [ 'base' => NULL, 'refs' => [ 'AccessKeyDetails$AccessKeyId' => 'Access key ID of the user.', 'AccessKeyDetails$PrincipalId' => 'The principal ID of the user.', 'AccessKeyDetails$UserName' => 'The name of the user.', 'AccessKeyDetails$UserType' => 'The type of the user.', 'AccountIds$member' => NULL, 'Action$ActionType' => 'GuardDuty Finding activity type.', 'AwsApiCallAction$Api' => 'AWS API name.', 'AwsApiCallAction$CallerType' => 'AWS API caller type.', 'AwsApiCallAction$ServiceName' => 'AWS service name whose API was invoked.', 'City$CityName' => 'City name of the remote IP address.', 'Country$CountryCode' => 'Country code of the remote IP address.', 'Country$CountryName' => 'Country name of the remote IP address.', 'Eq$member' => NULL, 'ErrorResponse$Message' => 'The error message.', 'ErrorResponse$Type' => 'The error type.', 'Finding$AccountId' => 'AWS account ID where the activity occurred that prompted GuardDuty to generate a finding.', 'Finding$Arn' => 'The ARN of a finding described by the action.', 'Finding$Description' => 'The description of a finding.', 'Finding$Id' => 'The identifier that corresponds to a finding described by the action.', 'Finding$Partition' => 'The AWS resource partition.', 'Finding$Region' => 'The AWS region where the activity occurred that prompted GuardDuty to generate a finding.', 'Finding$SchemaVersion' => 'Findings\' schema version.', 'Finding$Title' => 'The title of a finding.', 'Finding$Type' => 'The type of a finding described by the action.', 'IamInstanceProfile$Arn' => 'AWS EC2 instance profile ARN.', 'IamInstanceProfile$Id' => 'AWS EC2 instance profile ID.', 'InstanceDetails$AvailabilityZone' => 'The availability zone of the EC2 instance.', 'InstanceDetails$ImageId' => 'The image ID of the EC2 instance.', 'InstanceDetails$InstanceId' => 'The ID of the EC2 instance.', 'InstanceDetails$InstanceState' => 'The state of the EC2 instance.', 'InstanceDetails$InstanceType' => 'The type of the EC2 instance.', 'InstanceDetails$LaunchTime' => 'The launch time of the EC2 instance.', 'InstanceDetails$Platform' => 'The platform of the EC2 instance.', 'Invitation$AccountId' => 'Inviter account ID', 'Invitation$RelationshipStatus' => 'The status of the relationship between the inviter and invitee accounts.', 'LocalPortDetails$PortName' => 'Port name of the local connection.', 'Master$AccountId' => 'Master account ID', 'Master$RelationshipStatus' => 'The status of the relationship between the master and member accounts.', 'Member$RelationshipStatus' => 'The status of the relationship between the member and the master.', 'Neq$member' => NULL, 'NetworkConnectionAction$ConnectionDirection' => 'Network connection direction.', 'NetworkConnectionAction$Protocol' => 'Network connection protocol.', 'NetworkInterface$PublicDnsName' => 'Public DNS name of the EC2 instance.', 'NetworkInterface$PublicIp' => 'Public IP address of the EC2 instance.', 'NetworkInterface$SubnetId' => 'The subnet ID of the EC2 instance.', 'NetworkInterface$VpcId' => 'The VPC ID of the EC2 instance.', 'Organization$Asn' => 'Autonomous system number of the internet provider of the remote IP address.', 'Organization$AsnOrg' => 'Organization that registered this ASN.', 'Organization$Isp' => 'ISP information for the internet provider.', 'Organization$Org' => 'Name of the internet provider.', 'ProductCode$Code' => 'Product code information.', 'ProductCode$ProductType' => 'Product code type.', 'RemoteIpDetails$IpAddressV4' => 'IPV4 remote address of the connection.', 'RemotePortDetails$PortName' => 'Port name of the remote connection.', 'Resource$ResourceType' => 'The type of the AWS resource.', 'SecurityGroup$GroupId' => 'EC2 instance\'s security group ID.', 'SecurityGroup$GroupName' => 'EC2 instance\'s security group name.', 'Service$EventFirstSeen' => 'First seen timestamp of the activity that prompted GuardDuty to generate this finding.', 'Service$EventLastSeen' => 'Last seen timestamp of the activity that prompted GuardDuty to generate this finding.', 'Service$ResourceRole' => 'Resource role information for this finding.', 'Service$ServiceName' => 'The name of the AWS service (GuardDuty) that generated a finding.', 'Service$UserFeedback' => 'Feedback left about the finding.', 'SortCriteria$AttributeName' => 'Represents the finding attribute (for example, accountId) by which to sort findings.', 'Tag$Key' => 'EC2 instance tag key.', 'Tag$Value' => 'EC2 instance tag value.', 'UnprocessedAccount$AccountId' => 'AWS Account ID.', 'UnprocessedAccount$Result' => 'A reason why the account hasn\'t been processed.', ], ], ],];
