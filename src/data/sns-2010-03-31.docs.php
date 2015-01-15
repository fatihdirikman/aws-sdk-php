<?php return [
  'operations' => [
    'AddPermission' => '<p>Adds a statement to a topic\'s access control policy, granting access for the specified AWS accounts to the specified actions.</p>',
    'ConfirmSubscription' => '<p>Verifies an endpoint owner\'s intent to receive messages by validating the token sent to the endpoint by an earlier <code>Subscribe</code> action. If the token is valid, the action creates a new subscription and returns its Amazon Resource Name (ARN]. This call requires an AWS signature only when the <code>AuthenticateOnUnsubscribe</code> flag is set to "true".</p>',
    'CreatePlatformApplication' => '<p>Creates a platform application object for one of the supported push notification services, such as APNS and GCM, to which devices and mobile apps may register. You must specify PlatformPrincipal and PlatformCredential attributes when using the <code>CreatePlatformApplication</code> action. The PlatformPrincipal is received from the notification service. For APNS/APNS_SANDBOX, PlatformPrincipal is "SSL certificate". For GCM, PlatformPrincipal is not applicable. For ADM, PlatformPrincipal is "client id". The PlatformCredential is also received from the notification service. For APNS/APNS_SANDBOX, PlatformCredential is "private key". For GCM, PlatformCredential is "API key". For ADM, PlatformCredential is "client secret". The PlatformApplicationArn that is returned when using <code>CreatePlatformApplication</code> is then used as an attribute for the <code>CreatePlatformEndpoint</code> action. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p>',
    'CreatePlatformEndpoint' => '<p>Creates an endpoint for a device and mobile app on one of the supported push notification services, such as GCM and APNS. <code>CreatePlatformEndpoint</code> requires the PlatformApplicationArn that is returned from <code>CreatePlatformApplication</code>. The EndpointArn that is returned when using <code>CreatePlatformEndpoint</code> can then be used by the <code>Publish</code> action to send a message to a mobile app or by the <code>Subscribe</code> action for subscription to a topic. The <code>CreatePlatformEndpoint</code> action is idempotent, so if the requester already owns an endpoint with the same device token and attributes, that endpoint\'s ARN is returned without creating a new endpoint. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p> <p>When using <code>CreatePlatformEndpoint</code> with Baidu, two attributes must be provided: ChannelId and UserId. The token field must also contain the ChannelId. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePushBaiduEndpoint.html">Creating an Amazon SNS Endpoint for Baidu</a>. </p>',
    'CreateTopic' => '<p>Creates a topic to which notifications can be published. Users can create at most 3000 topics. For more information, see <a href="http://aws.amazon.com/sns/">http://aws.amazon.com/sns</a>. This action is idempotent, so if the requester already owns a topic with the specified name, that topic\'s ARN is returned without creating a new topic.</p>',
    'DeleteEndpoint' => '<p>Deletes the endpoint from Amazon SNS. This action is idempotent. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p>',
    'DeletePlatformApplication' => '<p>Deletes a platform application object for one of the supported push notification services, such as APNS and GCM. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p>',
    'DeleteTopic' => '<p>Deletes a topic and all its subscriptions. Deleting a topic might prevent some messages previously sent to the topic from being delivered to subscribers. This action is idempotent, so deleting a topic that does not exist does not result in an error.</p>',
    'GetEndpointAttributes' => '<p>Retrieves the endpoint attributes for a device on one of the supported push notification services, such as GCM and APNS. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p>',
    'GetPlatformApplicationAttributes' => '<p>Retrieves the attributes of the platform application object for the supported push notification services, such as APNS and GCM. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p>',
    'GetSubscriptionAttributes' => '<p>Returns all of the properties of a subscription.</p>',
    'GetTopicAttributes' => '<p>Returns all of the properties of a topic. Topic properties returned might differ based on the authorization of the user. </p>',
    'ListEndpointsByPlatformApplication' => '<p>Lists the endpoints and endpoint attributes for devices in a supported push notification service, such as GCM and APNS. The results for <code>ListEndpointsByPlatformApplication</code> are paginated and return a limited list of endpoints, up to 100. If additional records are available after the first page results, then a NextToken string will be returned. To receive the next page, you call <code>ListEndpointsByPlatformApplication</code> again using the NextToken string received from the previous call. When there are no more records to return, NextToken will be null. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p>',
    'ListPlatformApplications' => '<p>Lists the platform application objects for the supported push notification services, such as APNS and GCM. The results for <code>ListPlatformApplications</code> are paginated and return a limited list of applications, up to 100. If additional records are available after the first page results, then a NextToken string will be returned. To receive the next page, you call <code>ListPlatformApplications</code> using the NextToken string received from the previous call. When there are no more records to return, NextToken will be null. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p>',
    'ListSubscriptions' => '<p>Returns a list of the requester\'s subscriptions. Each call returns a limited list of subscriptions, up to 100. If there are more subscriptions, a <code>NextToken</code> is also returned. Use the <code>NextToken</code> parameter in a new <code>ListSubscriptions</code> call to get further results.</p>',
    'ListSubscriptionsByTopic' => '<p>Returns a list of the subscriptions to a specific topic. Each call returns a limited list of subscriptions, up to 100. If there are more subscriptions, a <code>NextToken</code> is also returned. Use the <code>NextToken</code> parameter in a new <code>ListSubscriptionsByTopic</code> call to get further results.</p>',
    'ListTopics' => '<p>Returns a list of the requester\'s topics. Each call returns a limited list of topics, up to 100. If there are more topics, a <code>NextToken</code> is also returned. Use the <code>NextToken</code> parameter in a new <code>ListTopics</code> call to get further results.</p>',
    'Publish' => '<p>Sends a message to all of a topic\'s subscribed endpoints. When a <code>messageId</code> is returned, the message has been saved and Amazon SNS will attempt to deliver it to the topic\'s subscribers shortly. The format of the outgoing message to each subscribed endpoint depends on the notification protocol selected.</p> <p>To use the <code>Publish</code> action for sending a message to a mobile endpoint, such as an app on a Kindle device or mobile phone, you must specify the EndpointArn. The EndpointArn is returned when making a call with the <code>CreatePlatformEndpoint</code> action. The second example below shows a request and response for publishing to a mobile endpoint. </p>',
    'RemovePermission' => '<p>Removes a statement from a topic\'s access control policy.</p>',
    'SetEndpointAttributes' => '<p>Sets the attributes for an endpoint for a device on one of the supported push notification services, such as GCM and APNS. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p>',
    'SetPlatformApplicationAttributes' => '<p>Sets the attributes of the platform application object for the supported push notification services, such as APNS and GCM. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMobilePush.html">Using Amazon SNS Mobile Push Notifications</a>. </p>',
    'SetSubscriptionAttributes' => '<p>Allows a subscription owner to set an attribute of the topic to a new value.</p>',
    'SetTopicAttributes' => '<p>Allows a topic owner to set an attribute of the topic to a new value.</p>',
    'Subscribe' => '<p>Prepares to subscribe an endpoint by sending the endpoint a confirmation message. To actually create a subscription, the endpoint owner must call the <code>ConfirmSubscription</code> action with the token from the confirmation message. Confirmation tokens are valid for three days.</p>',
    'Unsubscribe' => '<p>Deletes a subscription. If the subscription requires authentication for deletion, only the owner of the subscription or the topic\'s owner can unsubscribe, and an AWS signature is required. If the <code>Unsubscribe</code> call does not require authentication and the requester is not the subscription owner, a final cancellation message is delivered to the endpoint, so that the endpoint owner can easily resubscribe to the topic if the <code>Unsubscribe</code> request was unintended.</p>',
  ],
  'service' => '<fullname>Amazon Simple Notification Service</fullname> <p>Amazon Simple Notification Service (Amazon SNS] is a web service that enables you to build distributed web-enabled applications. Applications can use Amazon SNS to easily push real-time notification messages to interested subscribers over multiple delivery protocols. For more information about this product see <a href="http://aws.amazon.com/sns/">http://aws.amazon.com/sns</a>. For detailed information about Amazon SNS features and their associated API calls, see the <a href="http://docs.aws.amazon.com/sns/latest/dg/">Amazon SNS Developer Guide</a>. </p> <p>We also provide SDKs that enable you to access Amazon SNS from your preferred programming language. The SDKs contain functionality that automatically takes care of tasks such as: cryptographically signing your service requests, retrying requests, and handling error responses. For a list of available SDKs, go to <a href="http://aws.amazon.com/tools/">Tools for Amazon Web Services</a>. </p>',
  'shapes' => [
    'ActionsList' => [
      'base' => NULL,
      'refs' => [
        'AddPermissionInput$ActionName' => '<p>The action you want to allow for the specified principal(s].</p> <p>Valid values: any Amazon SNS action name.</p>',
      ],
    ],
    'AddPermissionInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AuthorizationErrorException' => [
      'base' => '<p>Indicates that the user has been denied access to the requested resource.</p>',
      'refs' => [],
    ],
    'Binary' => [
      'base' => NULL,
      'refs' => [
        'MessageAttributeValue$BinaryValue' => '<p>Binary type attributes can store any binary data, for example, compressed data, encrypted data, or images.</p>',
      ],
    ],
    'ConfirmSubscriptionInput' => [
      'base' => 'Input for ConfirmSubscription action.',
      'refs' => [],
    ],
    'ConfirmSubscriptionResponse' => [
      'base' => 'Response for ConfirmSubscriptions action.',
      'refs' => [],
    ],
    'CreateEndpointResponse' => [
      'base' => '<p>Response from CreateEndpoint action.</p>',
      'refs' => [],
    ],
    'CreatePlatformApplicationInput' => [
      'base' => '<p>Input for CreatePlatformApplication action.</p>',
      'refs' => [],
    ],
    'CreatePlatformApplicationResponse' => [
      'base' => '<p>Response from CreatePlatformApplication action.</p>',
      'refs' => [],
    ],
    'CreatePlatformEndpointInput' => [
      'base' => '<p>Input for CreatePlatformEndpoint action.</p>',
      'refs' => [],
    ],
    'CreateTopicInput' => [
      'base' => '<p>Input for CreateTopic action.</p>',
      'refs' => [],
    ],
    'CreateTopicResponse' => [
      'base' => '<p>Response from CreateTopic action.</p>',
      'refs' => [],
    ],
    'DelegatesList' => [
      'base' => NULL,
      'refs' => [
        'AddPermissionInput$AWSAccountId' => '<p>The AWS account IDs of the users (principals] who will be given access to the specified actions. The users must have AWS accounts, but do not need to be signed up for this service. </p>',
      ],
    ],
    'DeleteEndpointInput' => [
      'base' => '<p>Input for DeleteEndpoint action.</p>',
      'refs' => [],
    ],
    'DeletePlatformApplicationInput' => [
      'base' => '<p>Input for DeletePlatformApplication action.</p>',
      'refs' => [],
    ],
    'DeleteTopicInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Endpoint' => [
      'base' => '<p>Endpoint for mobile app and device.</p>',
      'refs' => [
        'ListOfEndpoints$member' => NULL,
      ],
    ],
    'EndpointDisabledException' => [
      'base' => '<p>Exception error indicating endpoint disabled.</p>',
      'refs' => [],
    ],
    'GetEndpointAttributesInput' => [
      'base' => '<p>Input for GetEndpointAttributes action.</p>',
      'refs' => [],
    ],
    'GetEndpointAttributesResponse' => [
      'base' => '<p>Response from GetEndpointAttributes of the EndpointArn.</p>',
      'refs' => [],
    ],
    'GetPlatformApplicationAttributesInput' => [
      'base' => '<p>Input for GetPlatformApplicationAttributes action.</p>',
      'refs' => [],
    ],
    'GetPlatformApplicationAttributesResponse' => [
      'base' => '<p>Response for GetPlatformApplicationAttributes action.</p>',
      'refs' => [],
    ],
    'GetSubscriptionAttributesInput' => [
      'base' => '<p>Input for GetSubscriptionAttributes.</p>',
      'refs' => [],
    ],
    'GetSubscriptionAttributesResponse' => [
      'base' => '<p>Response for GetSubscriptionAttributes action.</p>',
      'refs' => [],
    ],
    'GetTopicAttributesInput' => [
      'base' => '<p>Input for GetTopicAttributes action.</p>',
      'refs' => [],
    ],
    'GetTopicAttributesResponse' => [
      'base' => '<p>Response for GetTopicAttributes action.</p>',
      'refs' => [],
    ],
    'InternalErrorException' => [
      'base' => '<p>Indicates an internal service error.</p>',
      'refs' => [],
    ],
    'InvalidParameterException' => [
      'base' => '<p>Indicates that a request parameter does not comply with the associated constraints.</p>',
      'refs' => [],
    ],
    'InvalidParameterValueException' => [
      'base' => '<p>Indicates that a request parameter does not comply with the associated constraints.</p>',
      'refs' => [],
    ],
    'ListEndpointsByPlatformApplicationInput' => [
      'base' => '<p>Input for ListEndpointsByPlatformApplication action.</p>',
      'refs' => [],
    ],
    'ListEndpointsByPlatformApplicationResponse' => [
      'base' => '<p>Response for ListEndpointsByPlatformApplication action.</p>',
      'refs' => [],
    ],
    'ListOfEndpoints' => [
      'base' => NULL,
      'refs' => [
        'ListEndpointsByPlatformApplicationResponse$Endpoints' => '<p>Endpoints returned for ListEndpointsByPlatformApplication action.</p>',
      ],
    ],
    'ListOfPlatformApplications' => [
      'base' => NULL,
      'refs' => [
        'ListPlatformApplicationsResponse$PlatformApplications' => '<p>Platform applications returned when calling ListPlatformApplications action.</p>',
      ],
    ],
    'ListPlatformApplicationsInput' => [
      'base' => '<p>Input for ListPlatformApplications action.</p>',
      'refs' => [],
    ],
    'ListPlatformApplicationsResponse' => [
      'base' => '<p>Response for ListPlatformApplications action.</p>',
      'refs' => [],
    ],
    'ListSubscriptionsByTopicInput' => [
      'base' => '<p>Input for ListSubscriptionsByTopic action.</p>',
      'refs' => [],
    ],
    'ListSubscriptionsByTopicResponse' => [
      'base' => '<p>Response for ListSubscriptionsByTopic action.</p>',
      'refs' => [],
    ],
    'ListSubscriptionsInput' => [
      'base' => 'Input for ListSubscriptions action.',
      'refs' => [],
    ],
    'ListSubscriptionsResponse' => [
      'base' => '<p>Response for ListSubscriptions action</p>',
      'refs' => [],
    ],
    'ListTopicsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListTopicsResponse' => [
      'base' => '<p>Response for ListTopics action.</p>',
      'refs' => [],
    ],
    'MapStringToString' => [
      'base' => NULL,
      'refs' => [
        'CreatePlatformApplicationInput$Attributes' => '<p>For a list of attributes, see <a href="http://docs.aws.amazon.com/sns/latest/api/API_SetPlatformApplicationAttributes.html">SetPlatformApplicationAttributes</a></p>',
        'CreatePlatformEndpointInput$Attributes' => '<p>For a list of attributes, see <a href="http://docs.aws.amazon.com/sns/latest/api/API_SetEndpointAttributes.html">SetEndpointAttributes</a>.</p>',
        'Endpoint$Attributes' => '<p>Attributes for endpoint.</p>',
        'GetEndpointAttributesResponse$Attributes' => '<p>Attributes include the following:</p> <ul> <li> <code>CustomUserData</code> -- arbitrary user data to associate with the endpoint. Amazon SNS does not use this data. The data must be in UTF-8 format and less than 2KB.</li> <li> <code>Enabled</code> -- flag that enables/disables delivery to the endpoint. Amazon SNS will set this to false when a notification service indicates to Amazon SNS that the endpoint is invalid. Users can set it back to true, typically after updating Token.</li> <li> <code>Token</code> -- device token, also referred to as a registration id, for an app and mobile device. This is returned from the notification service when an app and mobile device are registered with the notification service.</li> </ul>',
        'GetPlatformApplicationAttributesResponse$Attributes' => '<p>Attributes include the following:</p> <ul> <li> <code>EventEndpointCreated</code> -- Topic ARN to which EndpointCreated event notifications should be sent.</li> <li> <code>EventEndpointDeleted</code> -- Topic ARN to which EndpointDeleted event notifications should be sent.</li> <li> <code>EventEndpointUpdated</code> -- Topic ARN to which EndpointUpdate event notifications should be sent.</li> <li> <code>EventDeliveryFailure</code> -- Topic ARN to which DeliveryFailure event notifications should be sent upon Direct Publish delivery failure (permanent] to one of the application\'s endpoints.</li> </ul>',
        'PlatformApplication$Attributes' => '<p>Attributes for platform application object.</p>',
        'SetEndpointAttributesInput$Attributes' => '<p>A map of the endpoint attributes. Attributes in this map include the following:</p> <ul> <li> <code>CustomUserData</code> -- arbitrary user data to associate with the endpoint. Amazon SNS does not use this data. The data must be in UTF-8 format and less than 2KB.</li> <li> <code>Enabled</code> -- flag that enables/disables delivery to the endpoint. Amazon SNS will set this to false when a notification service indicates to Amazon SNS that the endpoint is invalid. Users can set it back to true, typically after updating Token.</li> <li> <code>Token</code> -- device token, also referred to as a registration id, for an app and mobile device. This is returned from the notification service when an app and mobile device are registered with the notification service.</li> </ul>',
        'SetPlatformApplicationAttributesInput$Attributes' => '<p>A map of the platform application attributes. Attributes in this map include the following:</p> <ul> <li> <code>PlatformCredential</code> -- The credential received from the notification service. For APNS/APNS_SANDBOX, PlatformCredential is "private key". For GCM, PlatformCredential is "API key". For ADM, PlatformCredential is "client secret".</li> <li> <code>PlatformPrincipal</code> -- The principal received from the notification service. For APNS/APNS_SANDBOX, PlatformPrincipal is "SSL certificate". For GCM, PlatformPrincipal is not applicable. For ADM, PlatformPrincipal is "client id".</li> <li> <code>EventEndpointCreated</code> -- Topic ARN to which EndpointCreated event notifications should be sent.</li> <li> <code>EventEndpointDeleted</code> -- Topic ARN to which EndpointDeleted event notifications should be sent.</li> <li> <code>EventEndpointUpdated</code> -- Topic ARN to which EndpointUpdate event notifications should be sent.</li> <li> <code>EventDeliveryFailure</code> -- Topic ARN to which DeliveryFailure event notifications should be sent upon Direct Publish delivery failure (permanent] to one of the application\'s endpoints.</li> </ul>',
      ],
    ],
    'MessageAttributeMap' => [
      'base' => NULL,
      'refs' => [
        'PublishInput$MessageAttributes' => '<p>Message attributes for Publish action.</p>',
      ],
    ],
    'MessageAttributeValue' => [
      'base' => '<p>The user-specified message attribute value. For string data types, the value attribute has the same restrictions on the content as the message body. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/api/API_Publish.html">Publish</a>.</p> <p>Name, type, and value must not be empty or null. In addition, the message body should not be empty or null. All parts of the message attribute, including name, type, and value, are included in the message size restriction, which is currently 256 KB (262,144 bytes]. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMessageAttributes.html">Using Amazon SNS Message Attributes</a>.</p>',
      'refs' => [
        'MessageAttributeMap$value' => NULL,
      ],
    ],
    'NotFoundException' => [
      'base' => '<p>Indicates that the requested resource does not exist.</p>',
      'refs' => [],
    ],
    'PlatformApplication' => [
      'base' => '<p>Platform application object.</p>',
      'refs' => [
        'ListOfPlatformApplications$member' => NULL,
      ],
    ],
    'PlatformApplicationDisabledException' => [
      'base' => '<p>Exception error indicating platform application disabled.</p>',
      'refs' => [],
    ],
    'PublishInput' => [
      'base' => '<p>Input for Publish action.</p>',
      'refs' => [],
    ],
    'PublishResponse' => [
      'base' => '<p>Response for Publish action.</p>',
      'refs' => [],
    ],
    'RemovePermissionInput' => [
      'base' => '<p>Input for RemovePermission action.</p>',
      'refs' => [],
    ],
    'SetEndpointAttributesInput' => [
      'base' => '<p>Input for SetEndpointAttributes action.</p>',
      'refs' => [],
    ],
    'SetPlatformApplicationAttributesInput' => [
      'base' => '<p>Input for SetPlatformApplicationAttributes action.</p>',
      'refs' => [],
    ],
    'SetSubscriptionAttributesInput' => [
      'base' => '<p>Input for SetSubscriptionAttributes action.</p>',
      'refs' => [],
    ],
    'SetTopicAttributesInput' => [
      'base' => '<p>Input for SetTopicAttributes action.</p>',
      'refs' => [],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'CreateEndpointResponse$EndpointArn' => '<p>EndpointArn returned from CreateEndpoint action.</p>',
        'CreatePlatformApplicationInput$Name' => '<p>Application names must be made up of only uppercase and lowercase ASCII letters, numbers, underscores, hyphens, and periods, and must be between 1 and 256 characters long.</p>',
        'CreatePlatformApplicationInput$Platform' => '<p>The following platforms are supported: ADM (Amazon Device Messaging], APNS (Apple Push Notification Service], APNS_SANDBOX, and GCM (Google Cloud Messaging].</p>',
        'CreatePlatformApplicationResponse$PlatformApplicationArn' => '<p>PlatformApplicationArn is returned.</p>',
        'CreatePlatformEndpointInput$PlatformApplicationArn' => '<p>PlatformApplicationArn returned from CreatePlatformApplication is used to create a an endpoint.</p>',
        'CreatePlatformEndpointInput$Token' => '<p>Unique identifier created by the notification service for an app on a device. The specific name for Token will vary, depending on which notification service is being used. For example, when using APNS as the notification service, you need the device token. Alternatively, when using GCM or ADM, the device token equivalent is called the registration ID.</p>',
        'CreatePlatformEndpointInput$CustomUserData' => '<p>Arbitrary user data to associate with the endpoint. Amazon SNS does not use this data. The data must be in UTF-8 format and less than 2KB.</p>',
        'DeleteEndpointInput$EndpointArn' => '<p>EndpointArn of endpoint to delete.</p>',
        'DeletePlatformApplicationInput$PlatformApplicationArn' => '<p>PlatformApplicationArn of platform application object to delete.</p>',
        'Endpoint$EndpointArn' => '<p>EndpointArn for mobile app and device.</p>',
        'GetEndpointAttributesInput$EndpointArn' => '<p>EndpointArn for GetEndpointAttributes input.</p>',
        'GetPlatformApplicationAttributesInput$PlatformApplicationArn' => '<p>PlatformApplicationArn for GetPlatformApplicationAttributesInput.</p>',
        'ListEndpointsByPlatformApplicationInput$PlatformApplicationArn' => '<p>PlatformApplicationArn for ListEndpointsByPlatformApplicationInput action.</p>',
        'ListEndpointsByPlatformApplicationInput$NextToken' => '<p>NextToken string is used when calling ListEndpointsByPlatformApplication action to retrieve additional records that are available after the first page results.</p>',
        'ListEndpointsByPlatformApplicationResponse$NextToken' => '<p>NextToken string is returned when calling ListEndpointsByPlatformApplication action if additional records are available after the first page results.</p>',
        'ListPlatformApplicationsInput$NextToken' => '<p>NextToken string is used when calling ListPlatformApplications action to retrieve additional records that are available after the first page results.</p>',
        'ListPlatformApplicationsResponse$NextToken' => '<p>NextToken string is returned when calling ListPlatformApplications action if additional records are available after the first page results.</p>',
        'MapStringToString$key' => NULL,
        'MapStringToString$value' => NULL,
        'MessageAttributeMap$key' => NULL,
        'MessageAttributeValue$DataType' => '<p>Amazon SNS supports the following logical data types: String, Number, and Binary. For more information, see <a href="http://docs.aws.amazon.com/sns/latest/dg/SNSMessageAttributes.html#SNSMessageAttributes.DataTypes">Message Attribute Data Types</a>.</p>',
        'MessageAttributeValue$StringValue' => '<p>Strings are Unicode with UTF8 binary encoding. For a list of code values, see <a href="http://en.wikipedia.org/wiki/ASCII#ASCII_printable_characters">http://en.wikipedia.org/wiki/ASCII#ASCII_printable_characters</a>.</p>',
        'PlatformApplication$PlatformApplicationArn' => '<p>PlatformApplicationArn for platform application object.</p>',
        'PublishInput$TargetArn' => '<p>Either TopicArn or EndpointArn, but not both.</p>',
        'SetEndpointAttributesInput$EndpointArn' => '<p>EndpointArn used for SetEndpointAttributes action.</p>',
        'SetPlatformApplicationAttributesInput$PlatformApplicationArn' => '<p>PlatformApplicationArn for SetPlatformApplicationAttributes action.</p>',
      ],
    ],
    'SubscribeInput' => [
      'base' => 'Input for Subscribe action.',
      'refs' => [],
    ],
    'SubscribeResponse' => [
      'base' => 'Response for Subscribe action.',
      'refs' => [],
    ],
    'Subscription' => [
      'base' => '<p>A wrapper type for the attributes of an Amazon SNS subscription.</p>',
      'refs' => [
        'SubscriptionsList$member' => NULL,
      ],
    ],
    'SubscriptionAttributesMap' => [
      'base' => NULL,
      'refs' => [
        'GetSubscriptionAttributesResponse$Attributes' => '<p>A map of the subscription\'s attributes. Attributes in this map include the following:</p> <ul> <li> <code>SubscriptionArn</code> -- the subscription\'s ARN</li> <li> <code>TopicArn</code> -- the topic ARN that the subscription is associated with</li> <li> <code>Owner</code> -- the AWS account ID of the subscription\'s owner</li> <li> <code>ConfirmationWasAuthenticated</code> -- true if the subscription confirmation request was authenticated</li> <li> <code>DeliveryPolicy</code> -- the JSON serialization of the subscription\'s delivery policy</li> <li> <code>EffectiveDeliveryPolicy</code> -- the JSON serialization of the effective delivery policy that takes into account the topic delivery policy and account system defaults</li> </ul>',
      ],
    ],
    'SubscriptionLimitExceededException' => [
      'base' => '<p>Indicates that the customer already owns the maximum allowed number of subscriptions.</p>',
      'refs' => [],
    ],
    'SubscriptionsList' => [
      'base' => NULL,
      'refs' => [
        'ListSubscriptionsByTopicResponse$Subscriptions' => '<p>A list of subscriptions.</p>',
        'ListSubscriptionsResponse$Subscriptions' => '<p>A list of subscriptions.</p>',
      ],
    ],
    'Topic' => [
      'base' => '<p>A wrapper type for the topic\'s Amazon Resource Name (ARN]. To retrieve a topic\'s attributes, use <code>GetTopicAttributes</code>.</p>',
      'refs' => [
        'TopicsList$member' => NULL,
      ],
    ],
    'TopicAttributesMap' => [
      'base' => NULL,
      'refs' => [
        'GetTopicAttributesResponse$Attributes' => '<p>A map of the topic\'s attributes. Attributes in this map include the following:</p> <ul> <li> <code>TopicArn</code> -- the topic\'s ARN</li> <li> <code>Owner</code> -- the AWS account ID of the topic\'s owner</li> <li> <code>Policy</code> -- the JSON serialization of the topic\'s access control policy</li> <li> <code>DisplayName</code> -- the human-readable name used in the "From" field for notifications to email and email-json endpoints</li> <li> <code>SubscriptionsPending</code> -- the number of subscriptions pending confirmation on this topic</li> <li> <code>SubscriptionsConfirmed</code> -- the number of confirmed subscriptions on this topic</li> <li> <code>SubscriptionsDeleted</code> -- the number of deleted subscriptions on this topic</li> <li> <code>DeliveryPolicy</code> -- the JSON serialization of the topic\'s delivery policy</li> <li> <code>EffectiveDeliveryPolicy</code> -- the JSON serialization of the effective delivery policy that takes into account system defaults</li> </ul>',
      ],
    ],
    'TopicLimitExceededException' => [
      'base' => '<p>Indicates that the customer already owns the maximum allowed number of topics.</p>',
      'refs' => [],
    ],
    'TopicsList' => [
      'base' => NULL,
      'refs' => [
        'ListTopicsResponse$Topics' => '<p>A list of topic ARNs.</p>',
      ],
    ],
    'UnsubscribeInput' => [
      'base' => '<p>Input for Unsubscribe action.</p>',
      'refs' => [],
    ],
    'account' => [
      'base' => NULL,
      'refs' => [
        'Subscription$Owner' => '<p>The subscription\'s owner.</p>',
      ],
    ],
    'action' => [
      'base' => NULL,
      'refs' => [
        'ActionsList$member' => NULL,
      ],
    ],
    'attributeName' => [
      'base' => NULL,
      'refs' => [
        'SetSubscriptionAttributesInput$AttributeName' => '<p>The name of the attribute you want to set. Only a subset of the subscriptions attributes are mutable.</p> <p>Valid values: <code>DeliveryPolicy</code> | <code>RawMessageDelivery</code></p>',
        'SetTopicAttributesInput$AttributeName' => '<p>The name of the attribute you want to set. Only a subset of the topic\'s attributes are mutable.</p> <p>Valid values: <code>Policy</code> | <code>DisplayName</code> | <code>DeliveryPolicy</code></p>',
        'SubscriptionAttributesMap$key' => NULL,
        'TopicAttributesMap$key' => NULL,
      ],
    ],
    'attributeValue' => [
      'base' => NULL,
      'refs' => [
        'SetSubscriptionAttributesInput$AttributeValue' => '<p>The new value for the attribute in JSON format.</p>',
        'SetTopicAttributesInput$AttributeValue' => '<p>The new value for the attribute.</p>',
        'SubscriptionAttributesMap$value' => NULL,
        'TopicAttributesMap$value' => NULL,
      ],
    ],
    'authenticateOnUnsubscribe' => [
      'base' => NULL,
      'refs' => [
        'ConfirmSubscriptionInput$AuthenticateOnUnsubscribe' => '<p>Disallows unauthenticated unsubscribes of the subscription. If the value of this parameter is <code>true</code> and the request has an AWS signature, then only the topic owner and the subscription owner can unsubscribe the endpoint. The unsubscribe action requires AWS authentication. </p>',
      ],
    ],
    'delegate' => [
      'base' => NULL,
      'refs' => [
        'DelegatesList$member' => NULL,
      ],
    ],
    'endpoint' => [
      'base' => NULL,
      'refs' => [
        'SubscribeInput$Endpoint' => '<p>The endpoint that you want to receive notifications. Endpoints vary by protocol:</p> <ul> <li>For the <code>http</code> protocol, the endpoint is an URL beginning with "http://"</li> <li>For the <code>https</code> protocol, the endpoint is a URL beginning with "https://"</li> <li>For the <code>email</code> protocol, the endpoint is an email address</li> <li>For the <code>email-json</code> protocol, the endpoint is an email address</li> <li>For the <code>sms</code> protocol, the endpoint is a phone number of an SMS-enabled device</li> <li>For the <code>sqs</code> protocol, the endpoint is the ARN of an Amazon SQS queue</li> <li>For the <code>application</code> protocol, the endpoint is the EndpointArn of a mobile app and device.</li> </ul>',
        'Subscription$Endpoint' => '<p>The subscription\'s endpoint (format depends on the protocol].</p>',
      ],
    ],
    'label' => [
      'base' => NULL,
      'refs' => [
        'AddPermissionInput$Label' => '<p>A unique identifier for the new policy statement.</p>',
        'RemovePermissionInput$Label' => '<p>The unique label of the statement you want to remove.</p>',
      ],
    ],
    'message' => [
      'base' => NULL,
      'refs' => [
        'PublishInput$Message' => '<p>The message you want to send to the topic.</p> <p>If you want to send the same message to all transport protocols, include the text of the message as a String value.</p> <p>If you want to send different messages for each transport protocol, set the value of the <code>MessageStructure</code> parameter to <code>json</code> and use a JSON object for the <code>Message</code> parameter. See the Examples section for the format of the JSON object. </p> <p>Constraints: Messages must be UTF-8 encoded strings at most 256 KB in size (262144 bytes, not 262144 characters].</p> <p>JSON-specific constraints: <ul> <li>Keys in the JSON object that correspond to supported transport protocols must have simple JSON string values. </li> <li>The values will be parsed (unescaped] before they are used in outgoing messages.</li> <li>Outbound notifications are JSON encoded (meaning that the characters will be reescaped for sending].</li> <li>Values have a minimum length of 0 (the empty string, "", is allowed].</li> <li>Values have a maximum length bounded by the overall message size (so, including multiple protocols may limit message sizes].</li> <li>Non-string values will cause the key to be ignored.</li> <li>Keys that do not correspond to supported transport protocols are ignored.</li> <li>Duplicate keys are not allowed.</li> <li>Failure to parse or validate any key or value in the message will cause the <code>Publish</code> call to return an error (no partial delivery].</li> </ul> </p>',
      ],
    ],
    'messageId' => [
      'base' => NULL,
      'refs' => [
        'PublishResponse$MessageId' => '<p>Unique identifier assigned to the published message.</p> <p>Length Constraint: Maximum 100 characters</p>',
      ],
    ],
    'messageStructure' => [
      'base' => NULL,
      'refs' => [
        'PublishInput$MessageStructure' => '<p>Set <code>MessageStructure</code> to <code>json</code> if you want to send a different message for each protocol. For example, using one publish action, you can send a short message to your SMS subscribers and a longer message to your email subscribers. If you set <code>MessageStructure</code> to <code>json</code>, the value of the <code>Message</code> parameter must: </p> <ul> <li>be a syntactically valid JSON object; and</li> <li>contain at least a top-level JSON key of "default" with a value that is a string.</li> </ul> <p> You can define other top-level keys that define the message you want to send to a specific transport protocol (e.g., "http"]. </p> <p>For information about sending different messages for each protocol using the AWS Management Console, go to <a href="http://docs.aws.amazon.com/sns/latest/gsg/Publish.html#sns-message-formatting-by-protocol">Create Different Messages for Each Protocol</a> in the <i>Amazon Simple Notification Service Getting Started Guide</i>. </p> <p>Valid value: <code>json</code></p>',
      ],
    ],
    'nextToken' => [
      'base' => NULL,
      'refs' => [
        'ListSubscriptionsByTopicInput$NextToken' => '<p>Token returned by the previous <code>ListSubscriptionsByTopic</code> request.</p>',
        'ListSubscriptionsByTopicResponse$NextToken' => '<p>Token to pass along to the next <code>ListSubscriptionsByTopic</code> request. This element is returned if there are more subscriptions to retrieve.</p>',
        'ListSubscriptionsInput$NextToken' => '<p>Token returned by the previous <code>ListSubscriptions</code> request.</p>',
        'ListSubscriptionsResponse$NextToken' => '<p>Token to pass along to the next <code>ListSubscriptions</code> request. This element is returned if there are more subscriptions to retrieve.</p>',
        'ListTopicsInput$NextToken' => '<p>Token returned by the previous <code>ListTopics</code> request.</p>',
        'ListTopicsResponse$NextToken' => '<p>Token to pass along to the next <code>ListTopics</code> request. This element is returned if there are additional topics to retrieve.</p>',
      ],
    ],
    'protocol' => [
      'base' => NULL,
      'refs' => [
        'SubscribeInput$Protocol' => '<p>The protocol you want to use. Supported protocols include:</p> <ul> <li> <code>http</code> -- delivery of JSON-encoded message via HTTP POST</li> <li> <code>https</code> -- delivery of JSON-encoded message via HTTPS POST</li> <li> <code>email</code> -- delivery of message via SMTP</li> <li> <code>email-json</code> -- delivery of JSON-encoded message via SMTP</li> <li> <code>sms</code> -- delivery of message via SMS</li> <li> <code>sqs</code> -- delivery of JSON-encoded message to an Amazon SQS queue</li> <li> <code>application</code> -- delivery of JSON-encoded message to an EndpointArn for a mobile app and device.</li> </ul>',
        'Subscription$Protocol' => '<p>The subscription\'s protocol.</p>',
      ],
    ],
    'string' => [
      'base' => NULL,
      'refs' => [
        'AuthorizationErrorException$message' => NULL,
        'EndpointDisabledException$message' => '<p>Message for endpoint disabled.</p>',
        'InternalErrorException$message' => NULL,
        'InvalidParameterException$message' => NULL,
        'InvalidParameterValueException$message' => NULL,
        'NotFoundException$message' => NULL,
        'PlatformApplicationDisabledException$message' => '<p>Message for platform application disabled.</p>',
        'SubscriptionLimitExceededException$message' => NULL,
        'TopicLimitExceededException$message' => NULL,
      ],
    ],
    'subject' => [
      'base' => NULL,
      'refs' => [
        'PublishInput$Subject' => '<p>Optional parameter to be used as the "Subject" line when the message is delivered to email endpoints. This field will also be included, if present, in the standard JSON messages delivered to other endpoints.</p> <p>Constraints: Subjects must be ASCII text that begins with a letter, number, or punctuation mark; must not include line breaks or control characters; and must be less than 100 characters long.</p>',
      ],
    ],
    'subscriptionARN' => [
      'base' => NULL,
      'refs' => [
        'ConfirmSubscriptionResponse$SubscriptionArn' => '<p>The ARN of the created subscription.</p>',
        'GetSubscriptionAttributesInput$SubscriptionArn' => '<p>The ARN of the subscription whose properties you want to get.</p>',
        'SetSubscriptionAttributesInput$SubscriptionArn' => '<p>The ARN of the subscription to modify.</p>',
        'SubscribeResponse$SubscriptionArn' => '<p>The ARN of the subscription, if the service was able to create a subscription immediately (without requiring endpoint owner confirmation].</p>',
        'Subscription$SubscriptionArn' => '<p>The subscription\'s ARN.</p>',
        'UnsubscribeInput$SubscriptionArn' => '<p>The ARN of the subscription to be deleted.</p>',
      ],
    ],
    'token' => [
      'base' => NULL,
      'refs' => [
        'ConfirmSubscriptionInput$Token' => '<p>Short-lived token sent to an endpoint during the <code>Subscribe</code> action.</p>',
      ],
    ],
    'topicARN' => [
      'base' => NULL,
      'refs' => [
        'AddPermissionInput$TopicArn' => '<p>The ARN of the topic whose access control policy you wish to modify.</p>',
        'ConfirmSubscriptionInput$TopicArn' => '<p>The ARN of the topic for which you wish to confirm a subscription.</p>',
        'CreateTopicResponse$TopicArn' => '<p>The Amazon Resource Name (ARN] assigned to the created topic.</p>',
        'DeleteTopicInput$TopicArn' => '<p>The ARN of the topic you want to delete.</p>',
        'GetTopicAttributesInput$TopicArn' => '<p>The ARN of the topic whose properties you want to get.</p>',
        'ListSubscriptionsByTopicInput$TopicArn' => '<p>The ARN of the topic for which you wish to find subscriptions.</p>',
        'PublishInput$TopicArn' => '<p>The topic you want to publish to.</p>',
        'RemovePermissionInput$TopicArn' => '<p>The ARN of the topic whose access control policy you wish to modify.</p>',
        'SetTopicAttributesInput$TopicArn' => '<p>The ARN of the topic to modify.</p>',
        'SubscribeInput$TopicArn' => '<p>The ARN of the topic you want to subscribe to.</p>',
        'Subscription$TopicArn' => '<p>The ARN of the subscription\'s topic.</p>',
        'Topic$TopicArn' => '<p>The topic\'s ARN.</p>',
      ],
    ],
    'topicName' => [
      'base' => NULL,
      'refs' => [
        'CreateTopicInput$Name' => '<p>The name of the topic you want to create.</p> <p>Constraints: Topic names must be made up of only uppercase and lowercase ASCII letters, numbers, underscores, and hyphens, and must be between 1 and 256 characters long. </p>',
      ],
    ],
  ],
];
