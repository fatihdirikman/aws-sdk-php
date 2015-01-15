<?php return [
  'operations' => [
    'CheckDomainAvailability' => '<p>This operation checks the availability of one domain name. You can access this API without authenticating. Note that if the availability status of a domain is pending, you must submit another request to determine the availability of the domain name.</p>',
    'DisableDomainAutoRenew' => '<p>This operation disables automatic renewal of domain registration for the specified domain.</p> <note>Caution! Amazon Route 53 doesn\'t have a manual renewal process, so if you disable automatic renewal, registration for the domain will not be renewed when the expiration date passes, and you will lose control of the domain name.</note>',
    'DisableDomainTransferLock' => '<p>This operation removes the transfer lock on the domain (specifically the <code>clientTransferProhibited</code> status] to allow domain transfers. We recommend you refrain from performing this action unless you intend to transfer the domain to a different registrar. Successful submission returns an operation ID that you can use to track the progress and completion of the action. If the request is not completed successfully, the domain registrant will be notified by email.</p>',
    'EnableDomainAutoRenew' => '<p>This operation configures Amazon Route 53 to automatically renew the specified domain before the domain registration expires. The cost of renewing your domain registration is billed to your AWS account.</p> <p>The period during which you can renew a domain name varies by TLD. For a list of TLDs and their renewal policies, see "Renewal, restoration, and deletion times" (http://wiki.gandi.net/en/domains/renew#renewal_restoration_and_deletion_times] on the website for our registrar partner, Gandi. Route 53 requires that you renew before the end of the renewal period that is listed on the Gandi website so we can complete processing before the deadline.</p>',
    'EnableDomainTransferLock' => '<p>This operation sets the transfer lock on the domain (specifically the <code>clientTransferProhibited</code> status] to prevent domain transfers. Successful submission returns an operation ID that you can use to track the progress and completion of the action. If the request is not completed successfully, the domain registrant will be notified by email.</p>',
    'GetDomainDetail' => '<p>This operation returns detailed information about the domain. The domain\'s contact information is also returned as part of the output.</p>',
    'GetOperationDetail' => '<p>This operation returns the current status of an operation that is not completed.</p>',
    'ListDomains' => '<p>This operation returns all the domain names registered with Amazon Route 53 for the current AWS account.</p>',
    'ListOperations' => '<p>This operation returns the operation IDs of operations that are not yet complete.</p>',
    'RegisterDomain' => '<p>This operation registers a domain. Domains are registered by the AWS registrar partner, Gandi. For some top-level domains (TLDs], this operation requires extra parameters.</p> <p>When you register a domain, Amazon Route 53 does the following:</p> <ul> <li>Creates a Amazon Route 53 hosted zone that has the same name as the domain. Amazon Route 53 assigns four name servers to your hosted zone and automatically updates your domain registration with the names of these name servers.</li> <li>Enables autorenew, so your domain registration will renew automatically each year. We\'ll notify you in advance of the renewal date so you can choose whether to renew the registration.</li> <li>Optionally enables privacy protection, so WHOIS queries return contact information for our registrar partner, Gandi, instead of the information you entered for registrant, admin, and tech contacts.</li> <li>If registration is successful, returns an operation ID that you can use to track the progress and completion of the action. If the request is not completed successfully, the domain registrant is notified by email.</li> <li>Charges your AWS account an amount based on the top-level domain. For more information, see <a href="http://aws.amazon.com/route53/pricing/">Amazon Route 53 Pricing</a>.</li> </ul>',
    'RetrieveDomainAuthCode' => '<p>This operation returns the AuthCode for the domain. To transfer a domain to another registrar, you provide this value to the new registrar.</p>',
    'TransferDomain' => '<p>This operation transfers a domain from another registrar to Amazon Route 53. Domains are registered by the AWS registrar, Gandi upon transfer.</p> <p>To transfer a domain, you need to meet all the domain transfer criteria, including the following:</p> <ul> <li>You must supply nameservers to transfer a domain.</li> <li>You must disable the domain transfer lock (if any] before transferring the domain.</li> <li>A minimum of 60 days must have elapsed since the domain\'s registration or last transfer.</li> </ul> <p>We recommend you use the Amazon Route 53 as the DNS service for your domain. You can create a hosted zone in Amazon Route 53 for your current domain before transferring your domain.</p> <p>Note that upon transfer, the domain duration is extended for a year if not otherwise specified. Autorenew is enabled by default.</p> <p>If the transfer is successful, this method returns an operation ID that you can use to track the progress and completion of the action. If the request is not completed successfully, the domain registrant will be notified by email.</p> <p>Transferring domains charges your AWS account an amount based on the top-level domain. For more information, see <a href="http://aws.amazon.com/route53/pricing/">Amazon Route 53 Pricing</a>. </p>',
    'UpdateDomainContact' => '<p>This operation updates the contact information for a particular domain. Information for at least one contact (registrant, administrator, or technical] must be supplied for update.</p> <p>If the update is successful, this method returns an operation ID that you can use to track the progress and completion of the action. If the request is not completed successfully, the domain registrant will be notified by email.</p>',
    'UpdateDomainContactPrivacy' => '<p>This operation updates the specified domain contact\'s privacy setting. When the privacy option is enabled, personal information such as postal or email address is hidden from the results of a public WHOIS query. The privacy services are provided by the AWS registrar, Gandi. For more information, see the <a href="http://www.gandi.net/domain/whois/?currency=USD&amp;amp;lang=en">Gandi privacy features</a>.</p> <p>This operation only affects the privacy of the specified contact type (registrant, administrator, or tech]. Successful acceptance returns an operation ID that you can use with GetOperationDetail to track the progress and completion of the action. If the request is not completed successfully, the domain registrant will be notified by email.</p>',
    'UpdateDomainNameservers' => '<p>This operation replaces the current set of name servers for the domain with the specified set of name servers. If you use Amazon Route 53 as your DNS service, specify the four name servers in the delegation set for the hosted zone for the domain. </p> <p>If successful, this operation returns an operation ID that you can use to track the progress and completion of the action. If the request is not completed successfully, the domain registrant will be notified by email.</p>',
  ],
  'service' => NULL,
  'shapes' => [
    'AddressLine' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$AddressLine1' => '<p>First line of the contact\'s address.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: Yes</p>',
        'ContactDetail$AddressLine2' => '<p>Second line of contact\'s address, if any.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: No</p>',
      ],
    ],
    'Boolean' => [
      'base' => NULL,
      'refs' => [
        'DomainSummary$AutoRenew' => '<p>Indicates whether the domain is automatically renewed upon expiration.</p> <p>Type: Boolean</p> <p>Valid values: <code>True</code> | <code>False</code></p>',
        'DomainSummary$TransferLock' => '<p>Indicates whether a domain is locked from unauthorized transfer to another party.</p> <p>Type: Boolean</p> <p>Valid values: <code>True</code> | <code>False</code></p>',
        'GetDomainDetailResponse$AutoRenew' => '<p>Specifies whether the domain registration is set to renew automatically.</p> <p>Type: Boolean</p>',
        'GetDomainDetailResponse$AdminPrivacy' => '<p>Specifies whether contact information for the admin contact is concealed from WHOIS queries. If the value is <code>true</code>, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p>',
        'GetDomainDetailResponse$RegistrantPrivacy' => '<p>Specifies whether contact information for the registrant contact is concealed from WHOIS queries. If the value is <code>true</code>, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p>',
        'GetDomainDetailResponse$TechPrivacy' => '<p>Specifies whether contact information for the tech contact is concealed from WHOIS queries. If the value is <code>true</code>, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p>',
        'RegisterDomainRequest$AutoRenew' => '<p>Indicates whether the domain will be automatically renewed (<code>true</code>] or not (<code>false</code>]. Autorenewal only takes effect after the account is charged.</p> <p>Type: Boolean</p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Default: <code>true</code></p> <p>Required: No</p>',
        'RegisterDomainRequest$PrivacyProtectAdminContact' => '<p>Whether you want to conceal contact information from WHOIS queries. If you specify true, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p> <p>Default: <code>true</code></p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Required: No</p>',
        'RegisterDomainRequest$PrivacyProtectRegistrantContact' => '<p>Whether you want to conceal contact information from WHOIS queries. If you specify true, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p> <p>Default: <code>true</code></p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Required: No</p>',
        'RegisterDomainRequest$PrivacyProtectTechContact' => '<p>Whether you want to conceal contact information from WHOIS queries. If you specify true, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p> <p>Default: <code>true</code></p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Required: No</p>',
        'TransferDomainRequest$AutoRenew' => '<p>Indicates whether the domain will be automatically renewed (true] or not (false]. Autorenewal only takes effect after the account is charged.</p> <p>Type: Boolean</p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Default: true</p> <p>Required: No</p>',
        'TransferDomainRequest$PrivacyProtectAdminContact' => '<p>Whether you want to conceal contact information from WHOIS queries. If you specify true, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p> <p>Default: <code>true</code></p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Required: No</p>',
        'TransferDomainRequest$PrivacyProtectRegistrantContact' => '<p>Whether you want to conceal contact information from WHOIS queries. If you specify true, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p> <p>Default: <code>true</code></p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Required: No</p>',
        'TransferDomainRequest$PrivacyProtectTechContact' => '<p>Whether you want to conceal contact information from WHOIS queries. If you specify true, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p> <p>Default: <code>true</code></p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Required: No</p>',
        'UpdateDomainContactPrivacyRequest$AdminPrivacy' => '<p>Whether you want to conceal contact information from WHOIS queries. If you specify true, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p> <p>Default: None</p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Required: No</p>',
        'UpdateDomainContactPrivacyRequest$RegistrantPrivacy' => '<p>Whether you want to conceal contact information from WHOIS queries. If you specify true, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p> <p>Default: None</p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Required: No</p>',
        'UpdateDomainContactPrivacyRequest$TechPrivacy' => '<p>Whether you want to conceal contact information from WHOIS queries. If you specify true, WHOIS ("who is"] queries will return contact information for our registrar partner, Gandi, instead of the contact information that you enter.</p> <p>Type: Boolean</p> <p>Default: None</p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Required: No</p>',
      ],
    ],
    'CheckDomainAvailabilityRequest' => [
      'base' => '<p>The CheckDomainAvailability request contains the following elements.</p>',
      'refs' => [],
    ],
    'CheckDomainAvailabilityResponse' => [
      'base' => '<p>The CheckDomainAvailability response includes the following elements.</p>',
      'refs' => [],
    ],
    'City' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$City' => '<p>The city of the contact\'s address.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: Yes</p>',
      ],
    ],
    'ContactDetail' => [
      'base' => '<p>ContactDetail includes the following elements.</p>',
      'refs' => [
        'GetDomainDetailResponse$AdminContact' => '<p>Provides details about the domain administrative contact. </p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p>',
        'GetDomainDetailResponse$RegistrantContact' => '<p>Provides details about the domain registrant. </p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p>',
        'GetDomainDetailResponse$TechContact' => '<p>Provides details about the domain technical contact.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p>',
        'RegisterDomainRequest$AdminContact' => '<p>Provides detailed contact information.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p> <p>Required: Yes</p>',
        'RegisterDomainRequest$RegistrantContact' => '<p>Provides detailed contact information.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p> <p>Required: Yes</p>',
        'RegisterDomainRequest$TechContact' => '<p>Provides detailed contact information.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p> <p>Required: Yes</p>',
        'TransferDomainRequest$AdminContact' => '<p>Provides detailed contact information.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p> <p>Required: Yes</p>',
        'TransferDomainRequest$RegistrantContact' => '<p>Provides detailed contact information.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p> <p>Required: Yes</p>',
        'TransferDomainRequest$TechContact' => '<p>Provides detailed contact information.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p> <p>Required: Yes</p>',
        'UpdateDomainContactRequest$AdminContact' => '<p>Provides detailed contact information.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p> <p>Required: Yes</p>',
        'UpdateDomainContactRequest$RegistrantContact' => '<p>Provides detailed contact information.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p> <p>Required: Yes</p>',
        'UpdateDomainContactRequest$TechContact' => '<p>Provides detailed contact information.</p> <p>Type: Complex</p> <p>Children: <code>FirstName</code>, <code>MiddleName</code>, <code>LastName</code>, <code>ContactType</code>, <code>OrganizationName</code>, <code>AddressLine1</code>, <code>AddressLine2</code>, <code>City</code>, <code>State</code>, <code>CountryCode</code>, <code>ZipCode</code>, <code>PhoneNumber</code>, <code>Email</code>, <code>Fax</code>, <code>ExtraParams</code></p> <p>Required: Yes</p>',
      ],
    ],
    'ContactName' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$FirstName' => '<p>First name of contact.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code> </p> <p>Required: Yes</p>',
        'ContactDetail$LastName' => '<p>Last name of contact.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: Yes</p>',
        'ContactDetail$OrganizationName' => '<p>Name of the organization for contact types other than <code>PERSON</code>.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters. Contact type must not be <code>PERSON</code>.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: No</p>',
      ],
    ],
    'ContactNumber' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$PhoneNumber' => '<p>The phone number of the contact.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Phone number must be specified in the format "+[country dialing code].[number including any area code&gt;]". For example, a US phone number might appear as <code>"+1.1234567890"</code>.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: Yes</p>',
        'ContactDetail$Fax' => '<p>Fax number of the contact.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Phone number must be specified in the format "+[country dialing code].[number including any area code]". For example, a US phone number might appear as <code>"+1.1234567890"</code>.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: No</p>',
        'GetDomainDetailResponse$AbuseContactPhone' => '<p>Phone number for reporting abuse. </p> <p>Type: String</p>',
      ],
    ],
    'ContactType' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$ContactType' => '<p>Indicates whether the contact is a person, company, association, or public organization. If you choose an option other than <code>PERSON</code>, you must enter an organization name, and you can\'t enable privacy protection for the contact.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p> <p>Valid values: <code>PERSON</code> | <code>COMPANY</code> | <code>ASSOCIATION</code> | <code>PUBLIC_BODY</code></p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code> </p> <p>Required: Yes</p>',
      ],
    ],
    'CountryCode' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$CountryCode' => '<p>Code for the country of the contact\'s address.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: Yes</p>',
      ],
    ],
    'DNSSec' => [
      'base' => NULL,
      'refs' => [
        'GetDomainDetailResponse$DnsSec' => '<p>Reserved for future use.</p>',
      ],
    ],
    'DisableDomainAutoRenewRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DisableDomainAutoRenewResponse' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DisableDomainTransferLockRequest' => [
      'base' => '<p>The DisableDomainTransferLock request includes the following element.</p>',
      'refs' => [],
    ],
    'DisableDomainTransferLockResponse' => [
      'base' => '<p>The DisableDomainTransferLock response includes the following element.</p>',
      'refs' => [],
    ],
    'DomainAuthCode' => [
      'base' => NULL,
      'refs' => [
        'RetrieveDomainAuthCodeResponse$AuthCode' => '<p>The authorization code for the domain.</p> <p>Type: String</p>',
        'TransferDomainRequest$AuthCode' => '<p>The authorization code for the domain. You get this value from the current registrar.</p> <p>Type: String</p> <p>Required: Yes</p>',
      ],
    ],
    'DomainAvailability' => [
      'base' => NULL,
      'refs' => [
        'CheckDomainAvailabilityResponse$Availability' => '<p>Whether the domain name is available for registering.</p> <note> <p>You can only register domains designated as <code>AVAILABLE</code>.</p> </note> <p>Type: String</p> <p>Valid values:</p> <ul> <li> <code>AVAILABLE</code> – The domain name is available.</li> <li> <code>AVAILABLE_RESERVED</code> – The domain name is reserved under specific conditions.</li> <li> <code>AVAILABLE_PREORDER</code> – The domain name is available and can be preordered.</li> <li> <code>UNAVAILABLE</code> – The domain name is not available.</li> <li> <code>UNAVAILABLE_PREMIUM</code> – The domain name is not available.</li> <li> <code>UNAVAILABLE_RESTRICTED</code> – The domain name is forbidden.</li> <li> <code>RESERVED</code> – The domain name has been reserved for another person or organization.</li> </ul>',
      ],
    ],
    'DomainLimitExceeded' => [
      'base' => '<p>The number of domains has exceeded the allowed threshold for the account.</p>',
      'refs' => [],
    ],
    'DomainName' => [
      'base' => NULL,
      'refs' => [
        'CheckDomainAvailabilityRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
        'DisableDomainAutoRenewRequest$DomainName' => NULL,
        'DisableDomainTransferLockRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
        'DomainSummary$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p>',
        'EnableDomainAutoRenewRequest$DomainName' => NULL,
        'EnableDomainTransferLockRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
        'GetDomainDetailRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
        'GetDomainDetailResponse$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p>',
        'GetOperationDetailResponse$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p>',
        'RegisterDomainRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
        'RetrieveDomainAuthCodeRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
        'TransferDomainRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
        'UpdateDomainContactPrivacyRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
        'UpdateDomainContactRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
        'UpdateDomainNameserversRequest$DomainName' => '<p>The name of a domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The domain name can contain only the letters a through z, the numbers 0 through 9, and hyphen (-]. Internationalized Domain Names are not supported.</p> <p>Required: Yes</p>',
      ],
    ],
    'DomainStatus' => [
      'base' => NULL,
      'refs' => [
        'DomainStatusList$member' => NULL,
      ],
    ],
    'DomainStatusList' => [
      'base' => NULL,
      'refs' => [
        'GetDomainDetailResponse$StatusList' => '<p>An array of domain name status codes, also known as Extensible Provisioning Protocol (EPP] status codes.</p> <p>ICANN, the organization that maintains a central database of domain names, has developed a set of domain name status codes that tell you the status of a variety of operations on a domain name, for example, registering a domain name, transferring a domain name to another registrar, renewing the registration for a domain name, and so on. All registrars use this same set of status codes.</p> <p>For a current list of domain name status codes and an explanation of what each code means, go to the <a href="https://www.icann.org/">ICANN website</a> and search for <code>epp status codes</code>. (Search on the ICANN website; web searches sometimes return an old version of the document.]</p> <p>Type: Array of String</p>',
      ],
    ],
    'DomainSummary' => [
      'base' => NULL,
      'refs' => [
        'DomainSummaryList$member' => NULL,
      ],
    ],
    'DomainSummaryList' => [
      'base' => NULL,
      'refs' => [
        'ListDomainsResponse$Domains' => '<p>A summary of domains.</p> <p>Type: Complex type containing a list of domain summaries.</p> <p>Children: <code>AutoRenew</code>, <code>DomainName</code>, <code>Expiry</code>, <code>TransferLock</code></p>',
      ],
    ],
    'DuplicateRequest' => [
      'base' => '<p>The request is already in progress for the domain.</p>',
      'refs' => [],
    ],
    'DurationInYears' => [
      'base' => NULL,
      'refs' => [
        'RegisterDomainRequest$DurationInYears' => '<p>The number of years the domain will be registered. Domains are registered for a minimum of one year. The maximum period depends on the top-level domain.</p> <p>Type: Integer</p> <p>Default: 1</p> <p>Valid values: Integer from 1 to 10</p> <p>Required: Yes</p>',
        'TransferDomainRequest$DurationInYears' => '<p>The number of years the domain will be registered. Domains are registered for a minimum of one year. The maximum period depends on the top-level domain.</p> <p>Type: Integer</p> <p>Default: 1</p> <p>Valid values: Integer from 1 to 10</p> <p>Required: Yes</p>',
      ],
    ],
    'Email' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$Email' => '<p>Email address of the contact.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 254 characters.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code> </p> <p>Required: Yes</p>',
        'GetDomainDetailResponse$AbuseContactEmail' => '<p>Email address to contact to report incorrect contact information for a domain, to report that the domain is being used to send spam, to report that someone is cybersquatting on a domain name, or report some other type of abuse. </p> <p>Type: String</p>',
      ],
    ],
    'EnableDomainAutoRenewRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EnableDomainAutoRenewResponse' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EnableDomainTransferLockRequest' => [
      'base' => '<p>The EnableDomainTransferLock request includes the following element.</p>',
      'refs' => [],
    ],
    'EnableDomainTransferLockResponse' => [
      'base' => '<p>The EnableDomainTransferLock response includes the following elements.</p>',
      'refs' => [],
    ],
    'ErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'DomainLimitExceeded$message' => NULL,
        'DuplicateRequest$message' => NULL,
        'GetOperationDetailResponse$Message' => '<p>Detailed information on the status including possible errors.</p> <p>Type: String</p>',
        'InvalidInput$message' => NULL,
        'OperationLimitExceeded$message' => NULL,
        'TLDRulesViolation$message' => NULL,
        'UnsupportedTLD$message' => NULL,
      ],
    ],
    'ExtraParam' => [
      'base' => '<p>ExtraParam includes the following elements.</p>',
      'refs' => [
        'ExtraParamList$member' => NULL,
      ],
    ],
    'ExtraParamList' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$ExtraParams' => '<p>A list of name-value pairs for parameters required by certain top-level domains.</p> <p>Type: Complex</p> <p>Default: None</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Children: <code>Name</code>, <code>Value</code></p> <p>Required: No</p>',
      ],
    ],
    'ExtraParamName' => [
      'base' => NULL,
      'refs' => [
        'ExtraParam$Name' => '<p>Name of the additional parameter required by the top-level domain.</p> <p>Type: String</p> <p>Default: None</p> <p>Valid values: <code>DUNS_NUMBER</code> | <code>BRAND_NUMBER</code> | <code>BIRTH_DEPARTMENT</code> | <code>BIRTH_DATE_IN_YYYY_MM_DD</code> | <code>BIRTH_COUNTRY</code> | <code>BIRTH_CITY</code> | <code>DOCUMENT_NUMBER</code> | <code>AU_ID_NUMBER</code> | <code>AU_ID_TYPE</code> | <code>CA_LEGAL_TYPE</code> | <code>FI_BUSINESS_NUMBER</code> | <code>FI_ID_NUMBER</code> | <code>IT_PIN</code> | <code>RU_PASSPORT_DATA</code> | <code>SE_ID_NUMBER</code> | <code>SG_ID_NUMBER</code> | <code>VAT_NUMBER</code></p> <p>Parent: <code>ExtraParams</code></p> <p>Required: Yes</p>',
      ],
    ],
    'ExtraParamValue' => [
      'base' => NULL,
      'refs' => [
        'ExtraParam$Value' => '<p>Values corresponding to the additional parameter names required by some top-level domains.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 2048 characters.</p> <p>Parent: <code>ExtraParams</code></p> <p>Required: Yes</p>',
      ],
    ],
    'GetDomainDetailRequest' => [
      'base' => '<p>The GetDomainDetail request includes the following element.</p>',
      'refs' => [],
    ],
    'GetDomainDetailResponse' => [
      'base' => '<p>The GetDomainDetail response includes the following elements.</p>',
      'refs' => [],
    ],
    'GetOperationDetailRequest' => [
      'base' => '<p>The GetOperationDetail request includes the following element.</p>',
      'refs' => [],
    ],
    'GetOperationDetailResponse' => [
      'base' => '<p>The GetOperationDetail response includes the following elements.</p>',
      'refs' => [],
    ],
    'GlueIp' => [
      'base' => NULL,
      'refs' => [
        'GlueIpList$member' => NULL,
      ],
    ],
    'GlueIpList' => [
      'base' => NULL,
      'refs' => [
        'Nameserver$GlueIps' => '<p>Glue IP address of a name server entry. Glue IP addresses are required only when the name of the name server is a subdomain of the domain. For example, if your domain is example.com and the name server for the domain is ns.example.com, you need to specify the IP address for ns.example.com.</p> <p>Type: List of IP addresses.</p> <p>Constraints: The list can contain only one IPv4 and one IPv6 address.</p> <p>Parent: <code>Nameservers</code></p>',
      ],
    ],
    'HostName' => [
      'base' => NULL,
      'refs' => [
        'Nameserver$Name' => '<p>The fully qualified host name of the name server.</p> <p>Type: String</p> <p>Constraint: Maximum 255 characterss</p> <p>Parent: <code>Nameservers</code></p>',
      ],
    ],
    'InvalidInput' => [
      'base' => '<p>The requested item is not acceptable. For example, for an OperationId it may refer to the ID of an operation that is already completed. For a domain name, it may not be a valid domain name or belong to the requester account.</p>',
      'refs' => [],
    ],
    'LangCode' => [
      'base' => NULL,
      'refs' => [
        'CheckDomainAvailabilityRequest$IdnLangCode' => '<p>Reserved for future use.</p>',
        'RegisterDomainRequest$IdnLangCode' => '<p>Reserved for future use.</p>',
        'TransferDomainRequest$IdnLangCode' => '<p>Reserved for future use.</p>',
      ],
    ],
    'ListDomainsRequest' => [
      'base' => '<p>The ListDomains request includes the following elements.</p>',
      'refs' => [],
    ],
    'ListDomainsResponse' => [
      'base' => '<p>The ListDomains response includes the following elements.</p>',
      'refs' => [],
    ],
    'ListOperationsRequest' => [
      'base' => '<p>The ListOperations request includes the following elements.</p>',
      'refs' => [],
    ],
    'ListOperationsResponse' => [
      'base' => '<p>The ListOperations response includes the following elements.</p>',
      'refs' => [],
    ],
    'Nameserver' => [
      'base' => '<p>Nameserver includes the following elements.</p>',
      'refs' => [
        'NameserverList$member' => NULL,
      ],
    ],
    'NameserverList' => [
      'base' => NULL,
      'refs' => [
        'GetDomainDetailResponse$Nameservers' => '<p>The name of the domain.</p> <p>Type: String</p>',
        'TransferDomainRequest$Nameservers' => '<p>Contains details for the host and glue IP addresses.</p> <p>Type: Complex</p> <p>Children: <code>GlueIps</code>, <code>Name</code></p>',
        'UpdateDomainNameserversRequest$Nameservers' => '<p>A list of new name servers for the domain.</p> <p>Type: Complex</p> <p>Children: <code>Name</code>, <code>GlueIps</code></p> <p>Required: Yes</p>',
      ],
    ],
    'OperationId' => [
      'base' => NULL,
      'refs' => [
        'DisableDomainTransferLockResponse$OperationId' => '<p>Identifier for tracking the progress of the request. To use this ID to query the operation status, use GetOperationDetail.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p>',
        'EnableDomainTransferLockResponse$OperationId' => '<p>Identifier for tracking the progress of the request. To use this ID to query the operation status, use GetOperationDetail.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p>',
        'GetOperationDetailRequest$OperationId' => '<p>The identifier for the operation for which you want to get the status. Amazon Route 53 returned the identifier in the response to the original request.</p> <p>Type: String</p> <p>Default: None</p> <p>Required: Yes</p>',
        'GetOperationDetailResponse$OperationId' => '<p>The identifier for the operation.</p> <p>Type: String</p>',
        'OperationSummary$OperationId' => '<p>Identifier returned to track the requested action.</p> <p>Type: String</p>',
        'RegisterDomainResponse$OperationId' => '<p>Identifier for tracking the progress of the request. To use this ID to query the operation status, use GetOperationDetail.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p>',
        'TransferDomainResponse$OperationId' => '<p>Identifier for tracking the progress of the request. To use this ID to query the operation status, use GetOperationDetail.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p>',
        'UpdateDomainContactPrivacyResponse$OperationId' => '<p>Identifier for tracking the progress of the request. To use this ID to query the operation status, use GetOperationDetail.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p>',
        'UpdateDomainContactResponse$OperationId' => '<p>Identifier for tracking the progress of the request. To use this ID to query the operation status, use GetOperationDetail.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p>',
        'UpdateDomainNameserversResponse$OperationId' => '<p>Identifier for tracking the progress of the request. To use this ID to query the operation status, use GetOperationDetail.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p>',
      ],
    ],
    'OperationLimitExceeded' => [
      'base' => '<p>The number of operations or jobs running exceeded the allowed threshold for the account.</p>',
      'refs' => [],
    ],
    'OperationStatus' => [
      'base' => NULL,
      'refs' => [
        'GetOperationDetailResponse$Status' => '<p>The current status of the requested operation in the system.</p> <p>Type: String</p>',
        'OperationSummary$Status' => '<p>The current status of the requested operation in the system.</p> <p>Type: String</p>',
      ],
    ],
    'OperationSummary' => [
      'base' => '<p>OperationSummary includes the following elements.</p>',
      'refs' => [
        'OperationSummaryList$member' => NULL,
      ],
    ],
    'OperationSummaryList' => [
      'base' => NULL,
      'refs' => [
        'ListOperationsResponse$Operations' => '<p>Lists summaries of the operations.</p> <p>Type: Complex type containing a list of operation summaries</p> <p>Children: <code>OperationId</code>, <code>Status</code>, <code>SubmittedDate</code>, <code>Type</code></p>',
      ],
    ],
    'OperationType' => [
      'base' => NULL,
      'refs' => [
        'GetOperationDetailResponse$Type' => '<p>The type of operation that was requested.</p> <p>Type: String</p>',
        'OperationSummary$Type' => '<p>Type of the action requested.</p> <p>Type: String</p> <p>Valid values: <code>REGISTER_DOMAIN</code> | <code>DELETE_DOMAIN</code> | <code>TRANSFER_IN_DOMAIN</code> | <code>UPDATE_DOMAIN_CONTACT</code> | <code>UPDATE_NAMESERVER</code> | <code>CHANGE_PRIVACY_PROTECTION</code> | <code>DOMAIN_LOCK</code></p>',
      ],
    ],
    'PageMarker' => [
      'base' => NULL,
      'refs' => [
        'ListDomainsRequest$Marker' => '<p>For an initial request for a list of domains, omit this element. If the number of domains that are associated with the current AWS account is greater than the value that you specified for <code>MaxItems</code>, you can use <code>Marker</code> to return additional domains. Get the value of <code>NextPageMarker</code> from the previous response, and submit another request that includes the value of <code>NextPageMarker</code> in the <code>Marker</code> element.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: The marker must match the value specified in the previous request. </p> <p>Required: No</p>',
        'ListDomainsResponse$NextPageMarker' => '<p>If there are more domains than you specified for <code>MaxItems</code> in the request, submit another request and include the value of <code>NextPageMarker</code> in the value of <code>Marker</code>.</p> <p>Type: String</p> <p>Parent: <code>Operations</code></p>',
        'ListOperationsRequest$Marker' => '<p>For an initial request for a list of operations, omit this element. If the number of operations that are not yet complete is greater than the value that you specified for <code>MaxItems</code>, you can use <code>Marker</code> to return additional operations. Get the value of <code>NextPageMarker</code> from the previous response, and submit another request that includes the value of <code>NextPageMarker</code> in the <code>Marker</code> element.</p> <p>Type: String</p> <p>Default: None</p> <p>Required: No</p>',
        'ListOperationsResponse$NextPageMarker' => '<p>If there are more operations than you specified for <code>MaxItems</code> in the request, submit another request and include the value of <code>NextPageMarker</code> in the value of <code>Marker</code>.</p> <p>Type: String</p> <p>Parent: <code>Operations</code></p>',
      ],
    ],
    'PageMaxItems' => [
      'base' => NULL,
      'refs' => [
        'ListDomainsRequest$MaxItems' => '<p>Number of domains to be returned.</p> <p>Type: Integer</p> <p>Default: 20</p> <p>Constraints: A numeral between 1 and 100.</p> <p>Required: No</p>',
        'ListOperationsRequest$MaxItems' => '<p>Number of domains to be returned.</p> <p>Type: Integer</p> <p>Default: 20</p> <p>Constraints: A value between 1 and 100.</p> <p>Required: No</p>',
      ],
    ],
    'RegisterDomainRequest' => [
      'base' => '<p>The RegisterDomain request includes the following elements.</p>',
      'refs' => [],
    ],
    'RegisterDomainResponse' => [
      'base' => '<p>The RegisterDomain response includes the following element.</p>',
      'refs' => [],
    ],
    'RegistrarName' => [
      'base' => NULL,
      'refs' => [
        'GetDomainDetailResponse$RegistrarName' => '<p>Name of the registrar of the domain as identified in the registry. Amazon Route 53 domains are registered by registrar Gandi. The value is <code>"GANDI SAS"</code>. </p> <p>Type: String</p>',
      ],
    ],
    'RegistrarUrl' => [
      'base' => NULL,
      'refs' => [
        'GetDomainDetailResponse$RegistrarUrl' => '<p>Web address of the registrar.</p> <p>Type: String</p>',
      ],
    ],
    'RegistrarWhoIsServer' => [
      'base' => NULL,
      'refs' => [
        'GetDomainDetailResponse$WhoIsServer' => '<p>The fully qualified name of the WHOIS server that can answer the WHOIS query for the domain.</p> <p>Type: String</p>',
      ],
    ],
    'RegistryDomainId' => [
      'base' => NULL,
      'refs' => [
        'GetDomainDetailResponse$RegistryDomainId' => '<p>Reserved for future use.</p>',
      ],
    ],
    'Reseller' => [
      'base' => NULL,
      'refs' => [
        'GetDomainDetailResponse$Reseller' => '<p>Reseller of the domain. Domains registered or transferred using Amazon Route 53 domains will have <code>"Amazon"</code> as the reseller. </p> <p>Type: String</p>',
      ],
    ],
    'RetrieveDomainAuthCodeRequest' => [
      'base' => '<p>The RetrieveDomainAuthCode request includes the following element.</p>',
      'refs' => [],
    ],
    'RetrieveDomainAuthCodeResponse' => [
      'base' => '<p>The RetrieveDomainAuthCode response includes the following element.</p>',
      'refs' => [],
    ],
    'State' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$State' => '<p>The state or province of the contact\'s city.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: No</p>',
      ],
    ],
    'TLDRulesViolation' => [
      'base' => '<p>The top-level domain does not support this operation.</p>',
      'refs' => [],
    ],
    'Timestamp' => [
      'base' => NULL,
      'refs' => [
        'DomainSummary$Expiry' => '<p>Expiration date of the domain in Coordinated Universal Time (UTC].</p> <p>Type: Long</p>',
        'GetDomainDetailResponse$CreationDate' => '<p>The date when the domain was created as found in the response to a WHOIS query. The date format is Unix time.</p>',
        'GetDomainDetailResponse$UpdatedDate' => '<p>The last updated date of the domain as found in the response to a WHOIS query. The date format is Unix time.</p>',
        'GetDomainDetailResponse$ExpirationDate' => '<p>The date when the registration for the domain is set to expire. The date format is Unix time.</p>',
        'GetOperationDetailResponse$SubmittedDate' => '<p>The date when the request was submitted.</p>',
        'OperationSummary$SubmittedDate' => '<p>The date when the request was submitted.</p>',
      ],
    ],
    'TransferDomainRequest' => [
      'base' => '<p>The TransferDomain request includes the following elements.</p>',
      'refs' => [],
    ],
    'TransferDomainResponse' => [
      'base' => '<p>The TranserDomain response includes the following element.</p>',
      'refs' => [],
    ],
    'UnsupportedTLD' => [
      'base' => '<p>Amazon Route 53 does not support this top-level domain.</p>',
      'refs' => [],
    ],
    'UpdateDomainContactPrivacyRequest' => [
      'base' => '<p>The UpdateDomainContactPrivacy request includes the following elements.</p>',
      'refs' => [],
    ],
    'UpdateDomainContactPrivacyResponse' => [
      'base' => '<p>The UpdateDomainContactPrivacy response includes the following element.</p>',
      'refs' => [],
    ],
    'UpdateDomainContactRequest' => [
      'base' => '<p>The UpdateDomainContact request includes the following elements.</p>',
      'refs' => [],
    ],
    'UpdateDomainContactResponse' => [
      'base' => '<p>The UpdateDomainContact response includes the following element.</p>',
      'refs' => [],
    ],
    'UpdateDomainNameserversRequest' => [
      'base' => '<p>The UpdateDomainNameserver request includes the following elements.</p>',
      'refs' => [],
    ],
    'UpdateDomainNameserversResponse' => [
      'base' => '<p>The UpdateDomainNameservers response includes the following element.</p>',
      'refs' => [],
    ],
    'ZipCode' => [
      'base' => NULL,
      'refs' => [
        'ContactDetail$ZipCode' => '<p>The zip or postal code of the contact\'s address.</p> <p>Type: String</p> <p>Default: None</p> <p>Constraints: Maximum 255 characters.</p> <p>Parents: <code>RegistrantContact</code>, <code>AdminContact</code>, <code>TechContact</code></p> <p>Required: No</p>',
      ],
    ],
  ],
];
