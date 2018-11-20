<?php
// This file was auto-generated from sdk-root/src/data/quicksight/2018-04-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>Amazon QuickSight API Reference</fullname> <p>Amazon QuickSight is a fast, cloud-powered BI service that makes it easy to build visualizations, perform ad hoc analysis, and quickly get business insights from your data. This API interface reference contains documentation for a programming interface that you can use to manage Amazon QuickSight. </p>', 'operations' => [ 'CreateGroup' => '<p>Creates an Amazon QuickSight group.</p> <p>The permissions resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;relevant-aws-account-id&gt;</i>:group/default/<i>&lt;group-name&gt;</i> </code>.</p> <p>The response is a group object.</p>', 'CreateGroupMembership' => '<p>Adds an Amazon QuickSight user to an Amazon QuickSight group. </p> <p>The permissions resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:group/default/<i>&lt;group-name&gt;</i> </code>.</p> <p>The condition resource is the user name.</p> <p>The condition key is <code>quicksight:UserName</code>.</p> <p>The response is the group member object.</p>', 'DeleteGroup' => '<p>Removes a user group from Amazon QuickSight. </p> <p>The permissions resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:group/default/<i>&lt;group-name&gt;</i> </code>.</p>', 'DeleteGroupMembership' => '<p>Removes a user from a group so that the user is no longer a member of the group.</p> <p>The permissions resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:group/default/<i>&lt;group-name&gt;</i> </code>.</p> <p>The condition resource is the user name.</p> <p>The condition key is <code>quicksight:UserName</code>.</p>', 'DeleteUser' => '<p>Deletes the Amazon QuickSight user that is associated with the identity of the AWS Identity and Access Management (IAM) user or role that\'s making the call. The IAM user isn\'t deleted as a result of this call. </p> <p>The permission resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:user/default/<i>&lt;user-name&gt; </i> </code>.</p>', 'DescribeGroup' => '<p>Returns an Amazon QuickSight group\'s description and Amazon Resource Name (ARN). </p> <p>The permissions resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;relevant-aws-account-id&gt;</i>:group/default/<i>&lt;group-name&gt;</i> </code>.</p> <p>The response is the group object. </p>', 'DescribeUser' => '<p>Returns information about a user, given the user name. </p> <p>The permission resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:user/default/<i>&lt;user-name&gt;</i> </code>. </p> <p>The response is a user object that contains the user\'s Amazon Resource Name (ARN), AWS Identity and Access Management (IAM) role, and email address. </p>', 'GetDashboardEmbedUrl' => '<p>Generates an embedded URL and authorization code. Before this can work properly, you need to configure the dashboards and user permissions first. </p>', 'ListGroupMemberships' => '<p>Lists member users in a group.</p> <p>The permissions resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:group/default/<i>&lt;group-name&gt;</i> </code>.</p> <p>The response is a list of group member objects.</p>', 'ListGroups' => '<p>Lists all user groups in Amazon QuickSight. </p> <p>The permissions resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:group/default/*</code>.</p> <p>The response is a list of group objects. </p>', 'ListUserGroups' => '<p>Lists the Amazon QuickSight groups that a user is part of.</p>', 'ListUsers' => '<p>Returns a list of all of the Amazon QuickSight users belonging to this account. </p> <p>The permission resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:user/default/<i>*</i> </code>.</p> <p>The response is a list of user objects, containing each user\'s Amazon Resource Name (ARN), AWS Identity and Access Management (IAM) role, and email address. </p>', 'RegisterUser' => '<p>Creates an Amazon QuickSight user, whose identity is associated with the AWS Identity and Access Management (IAM) identity or role specified in the request. </p> <p>The permission resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:user/default/<i>&lt;user-name&gt;</i> </code>.</p> <p>The condition resource is the Amazon Resource Name (ARN) for the IAM user or role, and the session name. </p> <p>The condition keys are <code>quicksight:IamArn</code> and <code>quicksight:SessionName</code>. </p>', 'UpdateGroup' => '<p>Changes a group description. </p> <p>The permissions resource is <code>arn:aws:quicksight:us-east-1:<i>&lt;aws-account-id&gt;</i>:group/default/<i>&lt;group-name&gt;</i> </code>.</p> <p>The response is a group object.</p>', 'UpdateUser' => '<p>Updates an Amazon QuickSight user.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You don\'t have access to this.</p>', 'refs' => [], ], 'Arn' => [ 'base' => NULL, 'refs' => [ 'Group$Arn' => '<p>The Amazon Resource Name (ARN) for the group.</p>', 'GroupMember$Arn' => '<p>The Amazon Resource Name (ARN) for the group member (user).</p>', 'User$Arn' => '<p>The Amazon Resource Name (ARN) for the user.</p>', ], ], 'AwsAccountId' => [ 'base' => NULL, 'refs' => [ 'CreateGroupMembershipRequest$AwsAccountId' => '<p>The ID for the AWS account that the group is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'CreateGroupRequest$AwsAccountId' => '<p>The ID for the AWS account that the group is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'DeleteGroupMembershipRequest$AwsAccountId' => '<p>The ID for the AWS account that the group is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'DeleteGroupRequest$AwsAccountId' => '<p>The ID for the AWS account that the group is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'DeleteUserRequest$AwsAccountId' => '<p>The ID for the AWS account that the user is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'DescribeGroupRequest$AwsAccountId' => '<p>The ID for the AWS account that the group is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'DescribeUserRequest$AwsAccountId' => '<p>The ID for the AWS account that the user is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'GetDashboardEmbedUrlRequest$AwsAccountId' => '<p>AWS account ID that contains the dashboard you are embedding.</p>', 'ListGroupMembershipsRequest$AwsAccountId' => '<p>The ID for the AWS account that the group is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'ListGroupsRequest$AwsAccountId' => '<p>The ID for the AWS account that the group is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'ListUserGroupsRequest$AwsAccountId' => '<p>The AWS Account ID that the user is in. Currently, use the AWS Account ID which contains your Amazon QuickSight account.</p>', 'ListUsersRequest$AwsAccountId' => '<p>The ID for the AWS account that the user is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'RegisterUserRequest$AwsAccountId' => '<p>The ID for the AWS account that the user is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'UpdateGroupRequest$AwsAccountId' => '<p>The ID for the AWS account that the group is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', 'UpdateUserRequest$AwsAccountId' => '<p>The ID for the AWS account that the user is in. Currently, you use the ID for the AWS account that contains your Amazon QuickSight account.</p>', ], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'User$Active' => '<p>Active status of user. When you create an Amazon QuickSight user that’s not an IAM user or an AD user, that user is inactive until they sign in and provide a password</p>', ], ], 'CreateGroupMembershipRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateGroupMembershipResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateGroupRequest' => [ 'base' => '<p>The request object for this operation. </p>', 'refs' => [], ], 'CreateGroupResponse' => [ 'base' => '<p>The response object for this operation.</p>', 'refs' => [], ], 'DeleteGroupMembershipRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteGroupMembershipResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteGroupRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteGroupResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteUserRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteUserResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeGroupRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeGroupResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeUserRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeUserResponse' => [ 'base' => NULL, 'refs' => [], ], 'DomainNotWhitelistedException' => [ 'base' => '<p>The domain specified is not on the allowlist. All domains for embedded dashboards must be added to the approved list by an Amazon QuickSight admin.</p>', 'refs' => [], ], 'EmbeddingUrl' => [ 'base' => NULL, 'refs' => [ 'GetDashboardEmbedUrlResponse$EmbedUrl' => '<p>Call the GetDashboardEmbedUrl API to get the URL that you can embed in your dashboard. This URL is valid for 5 minutes, and the resulting session is valid for 10 hours. The API provides the URL with an auth_code that enables a single-signon session. </p>', ], ], 'ExceptionResourceType' => [ 'base' => NULL, 'refs' => [ 'LimitExceededException$ResourceType' => '<p>Limit exceeded.</p>', 'ResourceExistsException$ResourceType' => '<p>The AWS request ID for this request.</p>', 'ResourceNotFoundException$ResourceType' => '<p>The AWS request ID for this request.</p>', 'ResourceUnavailableException$ResourceType' => '<p>The resource type for this request.</p>', ], ], 'GetDashboardEmbedUrlRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDashboardEmbedUrlResponse' => [ 'base' => NULL, 'refs' => [], ], 'Group' => [ 'base' => '<p>A <i>group</i> in Amazon QuickSight consists of a set of users. You can use groups to make it easier to manage access and security. Currently, an Amazon QuickSight subscription can\'t contain more than 500 Amazon QuickSight groups.</p>', 'refs' => [ 'CreateGroupResponse$Group' => '<p>The name of the group.</p>', 'DescribeGroupResponse$Group' => '<p>The name of the group.</p>', 'GroupList$member' => NULL, 'UpdateGroupResponse$Group' => '<p>The name of the group.</p>', ], ], 'GroupDescription' => [ 'base' => NULL, 'refs' => [ 'CreateGroupRequest$Description' => '<p>A description for the group that you want to create.</p>', 'Group$Description' => '<p>The group description.</p>', 'UpdateGroupRequest$Description' => '<p>The description for the group that you want to update.</p>', ], ], 'GroupList' => [ 'base' => NULL, 'refs' => [ 'ListGroupsResponse$GroupList' => '<p>The list of the groups.</p>', 'ListUserGroupsResponse$GroupList' => '<p>The list of groups the user is a member of.</p>', ], ], 'GroupMember' => [ 'base' => '<p>A member of an Amazon QuickSight group. Currently, group members must be users. Groups can\'t be members of another group. </p>', 'refs' => [ 'CreateGroupMembershipResponse$GroupMember' => '<p>The group member.</p>', 'GroupMemberList$member' => NULL, ], ], 'GroupMemberList' => [ 'base' => NULL, 'refs' => [ 'ListGroupMembershipsResponse$GroupMemberList' => '<p>The list of the members of the group.</p>', ], ], 'GroupMemberName' => [ 'base' => NULL, 'refs' => [ 'CreateGroupMembershipRequest$MemberName' => '<p>The name of the user that you want to add to the group membership.</p>', 'DeleteGroupMembershipRequest$MemberName' => '<p>The name of the user that you want to delete from the group membership.</p>', 'GroupMember$MemberName' => '<p>The name of the group member (user).</p>', ], ], 'GroupName' => [ 'base' => NULL, 'refs' => [ 'CreateGroupMembershipRequest$GroupName' => '<p>The name of the group that you want to add the user to.</p>', 'CreateGroupRequest$GroupName' => '<p>A name for the group that you want to create.</p>', 'DeleteGroupMembershipRequest$GroupName' => '<p>The name of the group that you want to delete the user from.</p>', 'DeleteGroupRequest$GroupName' => '<p>The name of the group that you want to delete.</p>', 'DescribeGroupRequest$GroupName' => '<p>The name of the group that you want to describe.</p>', 'Group$GroupName' => '<p>The name of the group.</p>', 'ListGroupMembershipsRequest$GroupName' => '<p>The name of the group that you want to see a membership list of.</p>', 'UpdateGroupRequest$GroupName' => '<p>The name of the group that you want to update.</p>', ], ], 'IdentityType' => [ 'base' => NULL, 'refs' => [ 'GetDashboardEmbedUrlRequest$IdentityType' => '<p>The authentication method the user uses to sign in (IAM or QUICKSIGHT).</p>', 'RegisterUserRequest$IdentityType' => '<p>Amazon QuickSight supports several ways of managing the identity of users. This parameter accepts two values:</p> <ul> <li> <p> <code>IAM</code>: A user whose identity maps to an existing IAM user or role. </p> </li> <li> <p> <code>QUICKSIGHT</code>: A user whose identity is owned and managed internally by Amazon QuickSight. </p> </li> </ul>', 'User$IdentityType' => '<p>The type of identity authentication used by the user.</p>', ], ], 'IdentityTypeNotSupportedException' => [ 'base' => '<p>The identity type specified is not supported. Supported identity types include: IAM and QUICKSIGHT.</p>', 'refs' => [], ], 'InternalFailureException' => [ 'base' => '<p>An internal failure occurred.</p>', 'refs' => [], ], 'InvalidNextTokenException' => [ 'base' => '<p>The <code>NextToken</code> value isn\'t valid.</p>', 'refs' => [], ], 'InvalidParameterValueException' => [ 'base' => '<p>One or more parameters don\'t have a valid value.</p>', 'refs' => [], ], 'LimitExceededException' => [ 'base' => '<p>A limit is exceeded.</p>', 'refs' => [], ], 'ListGroupMembershipsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListGroupMembershipsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListGroupsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListGroupsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListUserGroupsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListUserGroupsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListUsersRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListUsersResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListGroupMembershipsRequest$MaxResults' => '<p>The maximum number of results to return from this request.</p>', 'ListGroupsRequest$MaxResults' => '<p>The maximum number of results to return.</p>', 'ListUserGroupsRequest$MaxResults' => '<p>The maximum number of results to return from this request.</p>', 'ListUsersRequest$MaxResults' => '<p>The maximum number of results to return from this request.</p>', ], ], 'Namespace' => [ 'base' => NULL, 'refs' => [ 'CreateGroupMembershipRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'CreateGroupRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'DeleteGroupMembershipRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'DeleteGroupRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'DeleteUserRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'DescribeGroupRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'DescribeUserRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'ListGroupMembershipsRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'ListGroupsRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'ListUserGroupsRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'ListUsersRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'RegisterUserRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'UpdateGroupRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', 'UpdateUserRequest$Namespace' => '<p>The namespace. Currently, you should set this to <code>default</code>.</p>', ], ], 'PreconditionNotMetException' => [ 'base' => '<p>One or more preconditions aren\'t met.</p>', 'refs' => [], ], 'QuickSightUserNotFoundException' => [ 'base' => '<p>The user is not found. This could happen in any operation that requires finding a user based on the provided user name, such as DeleteUser, DescribeUser, and so on.</p>', 'refs' => [], ], 'RegisterUserRequest' => [ 'base' => NULL, 'refs' => [], ], 'RegisterUserResponse' => [ 'base' => NULL, 'refs' => [], ], 'ResourceExistsException' => [ 'base' => '<p>The resource specified doesn\'t exist. </p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>One or more resources couldn\'t be found.</p>', 'refs' => [], ], 'ResourceUnavailableException' => [ 'base' => '<p>This resource is currently unavailable.</p>', 'refs' => [], ], 'SessionLifetimeInMinutes' => [ 'base' => NULL, 'refs' => [ 'GetDashboardEmbedUrlRequest$SessionLifetimeInMinutes' => '<p>How many minutes the session is valid. The session lifetime must be between 15 and 600 minutes.</p>', ], ], 'SessionLifetimeInMinutesInvalidException' => [ 'base' => '<p>The number of minutes specified for the lifetime of a session is invalid. The session lifetime must be between 15 and 600 minutes.</p>', 'refs' => [], ], 'StatusCode' => [ 'base' => NULL, 'refs' => [ 'CreateGroupMembershipResponse$Status' => '<p>The http status of the request.</p>', 'CreateGroupResponse$Status' => '<p>The http status of the request.</p>', 'DeleteGroupMembershipResponse$Status' => '<p>The http status of the request.</p>', 'DeleteGroupResponse$Status' => '<p>The http status of the request.</p>', 'DeleteUserResponse$Status' => '<p>The http status of the request.</p>', 'DescribeGroupResponse$Status' => '<p>The http status of the request.</p>', 'DescribeUserResponse$Status' => '<p>The http status of the request.</p>', 'GetDashboardEmbedUrlResponse$Status' => '<p>The http status of the request.</p>', 'ListGroupMembershipsResponse$Status' => '<p>The http status of the request.</p>', 'ListGroupsResponse$Status' => '<p>The http status of the request.</p>', 'ListUserGroupsResponse$Status' => '<p>The http status of the request.</p>', 'ListUsersResponse$Status' => '<p>The http status of the request.</p>', 'RegisterUserResponse$Status' => '<p>The http status of the request.</p>', 'UpdateGroupResponse$Status' => '<p>The http status of the request.</p>', 'UpdateUserResponse$Status' => '<p>The http status of the request.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'AccessDeniedException$RequestId' => '<p>The AWS request id for this request.</p>', 'CreateGroupMembershipResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'CreateGroupResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'DeleteGroupMembershipResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'DeleteGroupResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'DeleteUserResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'DescribeGroupResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'DescribeUserResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'DomainNotWhitelistedException$Message' => NULL, 'DomainNotWhitelistedException$RequestId' => '<p>The AWS request ID for this request.</p>', 'GetDashboardEmbedUrlRequest$DashboardId' => '<p>The ID for the dashboard, also added to IAM policy</p>', 'GetDashboardEmbedUrlResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'IdentityTypeNotSupportedException$Message' => NULL, 'IdentityTypeNotSupportedException$RequestId' => '<p>The AWS request ID for this request.</p>', 'InternalFailureException$Message' => NULL, 'InternalFailureException$RequestId' => '<p>The AWS request ID for this request.</p>', 'InvalidNextTokenException$Message' => NULL, 'InvalidNextTokenException$RequestId' => '<p>The AWS request ID for this request.</p>', 'InvalidParameterValueException$Message' => NULL, 'InvalidParameterValueException$RequestId' => '<p>The AWS request ID for this request.</p>', 'LimitExceededException$Message' => NULL, 'LimitExceededException$RequestId' => '<p>The AWS request ID for this request.</p>', 'ListGroupMembershipsRequest$NextToken' => '<p>A pagination token that can be used in a subsequent request.</p>', 'ListGroupMembershipsResponse$NextToken' => '<p>A pagination token that can be used in a subsequent request.</p>', 'ListGroupMembershipsResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'ListGroupsRequest$NextToken' => '<p>A pagination token that can be used in a subsequent request.</p>', 'ListGroupsResponse$NextToken' => '<p>A pagination token that can be used in a subsequent request.</p>', 'ListGroupsResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'ListUserGroupsRequest$NextToken' => '<p>A pagination token that can be used in a subsequent request.</p>', 'ListUserGroupsResponse$NextToken' => '<p>A pagination token that can be used in a subsequent request.</p>', 'ListUserGroupsResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'ListUsersRequest$NextToken' => '<p>A pagination token that can be used in a subsequent request.</p>', 'ListUsersResponse$NextToken' => '<p>A pagination token that can be used in a subsequent request.</p>', 'ListUsersResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'PreconditionNotMetException$Message' => NULL, 'PreconditionNotMetException$RequestId' => '<p>The AWS request ID for this request.</p>', 'QuickSightUserNotFoundException$Message' => NULL, 'QuickSightUserNotFoundException$RequestId' => '<p>The AWS request ID for this request.</p>', 'RegisterUserRequest$Email' => '<p>The email address of the user that you want to register.</p>', 'RegisterUserRequest$IamArn' => '<p>The ARN of the IAM user or role that you are registering with Amazon QuickSight. </p>', 'RegisterUserRequest$SessionName' => '<p>The name of the session with the assumed IAM role. By using this parameter, you can register multiple users with the same IAM role, provided that each has a different session name. For more information on assuming IAM roles, see <a href="https://docs.aws.amazon.com/cli/latest/reference/sts/assume-role.html"> <code>assume-role</code> </a> in the <i>AWS CLI Reference.</i> </p>', 'RegisterUserResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'ResourceExistsException$Message' => NULL, 'ResourceExistsException$RequestId' => '<p>The AWS request ID for this request.</p>', 'ResourceNotFoundException$Message' => NULL, 'ResourceNotFoundException$RequestId' => '<p>The AWS request ID for this request.</p>', 'ResourceUnavailableException$Message' => NULL, 'ResourceUnavailableException$RequestId' => '<p>The AWS request ID for this request.</p>', 'SessionLifetimeInMinutesInvalidException$Message' => NULL, 'SessionLifetimeInMinutesInvalidException$RequestId' => '<p>The AWS request ID for this request.</p>', 'ThrottlingException$Message' => NULL, 'ThrottlingException$RequestId' => '<p>The AWS request ID for this request.</p>', 'UnsupportedUserEditionException$Message' => NULL, 'UnsupportedUserEditionException$RequestId' => '<p>The AWS request ID for this request.</p>', 'UpdateGroupResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'UpdateUserRequest$Email' => '<p>The email address of the user that you want to update.</p>', 'UpdateUserResponse$RequestId' => '<p>The AWS request ID for this operation.</p>', 'User$Email' => '<p>The user\'s email address.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>Access is throttled.</p>', 'refs' => [], ], 'UnsupportedUserEditionException' => [ 'base' => '<p>Indicates that you are calling an operation on an Amazon QuickSight subscription where the edition does not include support for that operation. Amazon QuickSight currently has Standard Edition and Enterprise Edition. Not every operation and capability is available in every edition.</p>', 'refs' => [], ], 'UpdateGroupRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateGroupResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateUserRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateUserResponse' => [ 'base' => NULL, 'refs' => [], ], 'User' => [ 'base' => '<p>A registered user of Amazon QuickSight. Currently, an Amazon QuickSight subscription can\'t contain more than 20 million users.</p>', 'refs' => [ 'DescribeUserResponse$User' => '<p>The user name.</p>', 'RegisterUserResponse$User' => '<p>The user name.</p>', 'UpdateUserResponse$User' => '<p>The Amazon QuickSight user.</p>', 'UserList$member' => NULL, ], ], 'UserList' => [ 'base' => NULL, 'refs' => [ 'ListUsersResponse$UserList' => '<p>The list of users.</p>', ], ], 'UserName' => [ 'base' => NULL, 'refs' => [ 'DeleteUserRequest$UserName' => '<p>The name of the user that you want to delete.</p>', 'DescribeUserRequest$UserName' => '<p>The name of the user that you want to describe.</p>', 'ListUserGroupsRequest$UserName' => '<p>The name of the user that you want to list groups for.</p>', 'RegisterUserRequest$UserName' => '<p>The Amazon QuickSight user name that you want to create for the user you are registering.</p>', 'UpdateUserRequest$UserName' => '<p>The Amazon QuickSight user name that you want to update.</p>', 'User$UserName' => '<p>The user\'s user name.</p>', ], ], 'UserRole' => [ 'base' => NULL, 'refs' => [ 'RegisterUserRequest$UserRole' => '<p>The Amazon QuickSight role of the user. The user role can be one of the following:</p> <ul> <li> <p> <code>READER</code>: A user who has read-only access to dashboards.</p> </li> <li> <p> <code>AUTHOR</code>: A user who can create data sources, data sets, analyses, and dashboards.</p> </li> <li> <p> <code>ADMIN</code>: A user who is an author, who can also manage Amazon QuickSight settings.</p> </li> </ul>', 'UpdateUserRequest$Role' => '<p>The Amazon QuickSight role of the user. The user role can be one of the following:</p> <ul> <li> <p> <code>READER</code>: A user who has read-only access to dashboards.</p> </li> <li> <p> <code>AUTHOR</code>: A user who can create data sources, data sets, analyses, and dashboards.</p> </li> <li> <p> <code>ADMIN</code>: A user who is an author, who can also manage Amazon QuickSight settings.</p> </li> </ul>', 'User$Role' => '<p>The Amazon QuickSight role for the user.</p>', ], ], 'boolean' => [ 'base' => NULL, 'refs' => [ 'GetDashboardEmbedUrlRequest$UndoRedoDisabled' => '<p>Remove the undo/redo button on embedded dashboard. The default is FALSE, which enables the undo/redo button.</p>', 'GetDashboardEmbedUrlRequest$ResetDisabled' => '<p>Remove the reset button on embedded dashboard. The default is FALSE, which allows the reset button.</p>', ], ], ],];
