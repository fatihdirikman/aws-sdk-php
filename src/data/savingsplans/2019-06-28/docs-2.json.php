<?php
// This file was auto-generated from sdk-root/src/data/savingsplans/2019-06-28/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Savings Plans are a pricing model that offer significant savings on AWS usage (for example, on Amazon EC2 instances). You commit to a consistent amount of usage, in USD per hour, for a term of 1 or 3 years, and receive a lower price for that usage. For more information, see the <a href="https://docs.aws.amazon.com/savingsplans/latest/userguide/">Savings Plans User Guide</a>.</p>', 'operations' => [ 'CreateSavingsPlan' => '<p>Creates a Savings Plan.</p>', 'DescribeSavingsPlanRates' => '<p>Describes the specified Savings Plans rates.</p>', 'DescribeSavingsPlans' => '<p>Describes the specified Savings Plans.</p>', 'DescribeSavingsPlansOfferingRates' => '<p>Describes the specified Savings Plans offering rates.</p>', 'DescribeSavingsPlansOfferings' => '<p>Describes the specified Savings Plans offerings.</p>', 'ListTagsForResource' => '<p>Lists the tags for the specified resource.</p>', 'TagResource' => '<p>Adds the specified tags to the specified resource.</p>', 'UntagResource' => '<p>Removes the specified tags from the specified resource.</p>', ], 'shapes' => [ 'Amount' => [ 'base' => NULL, 'refs' => [ 'CreateSavingsPlanRequest$commitment' => '<p>The hourly commitment, in USD. This is a value between 0.001 and 1 million. You cannot specify more than three digits after the decimal point.</p>', 'CreateSavingsPlanRequest$upfrontPaymentAmount' => '<p>The up-front payment amount. This is a whole number between 50 and 99 percent of the total value of the Savings Plan. This parameter is supported only if the payment option is <code>Partial Upfront</code>.</p>', 'SavingsPlan$commitment' => '<p>The hourly commitment, in USD.</p>', 'SavingsPlan$upfrontPaymentAmount' => '<p>The up-front payment amount.</p>', 'SavingsPlan$recurringPaymentAmount' => '<p>The recurring payment amount.</p>', 'SavingsPlanRate$rate' => '<p>The rate.</p>', ], ], 'ClientToken' => [ 'base' => NULL, 'refs' => [ 'CreateSavingsPlanRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', ], ], 'CreateSavingsPlanRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateSavingsPlanResponse' => [ 'base' => NULL, 'refs' => [], ], 'CurrencyCode' => [ 'base' => NULL, 'refs' => [ 'CurrencyList$member' => NULL, 'ParentSavingsPlanOffering$currency' => '<p>The currency.</p>', 'SavingsPlan$currency' => '<p>The currency.</p>', 'SavingsPlanOffering$currency' => '<p>The currency.</p>', 'SavingsPlanRate$currency' => '<p>The currency.</p>', ], ], 'CurrencyList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingsRequest$currencies' => '<p>The currencies.</p>', ], ], 'DescribeSavingsPlanRatesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeSavingsPlanRatesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeSavingsPlansOfferingRatesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeSavingsPlansOfferingRatesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeSavingsPlansOfferingsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeSavingsPlansOfferingsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeSavingsPlansRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeSavingsPlansResponse' => [ 'base' => NULL, 'refs' => [], ], 'DurationsList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingsRequest$durations' => '<p>The durations, in seconds.</p>', ], ], 'EC2InstanceFamily' => [ 'base' => NULL, 'refs' => [ 'SavingsPlan$ec2InstanceFamily' => '<p>The EC2 instance family.</p>', ], ], 'FilterValuesList' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingFilterElement$values' => '<p>The filter values.</p>', 'SavingsPlanOfferingRateFilterElement$values' => '<p>The filter values.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>An unexpected error occurred.</p>', 'refs' => [], ], 'JsonSafeFilterValueString' => [ 'base' => NULL, 'refs' => [ 'FilterValuesList$member' => NULL, 'SavingsPlanOfferingProperty$value' => '<p>The property value.</p>', 'SavingsPlanOfferingRateProperty$name' => '<p>The property name.</p>', 'SavingsPlanOfferingRateProperty$value' => '<p>The property value.</p>', 'SavingsPlanRateProperty$value' => '<p>The property value.</p>', ], ], 'ListOfStrings' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanFilter$values' => '<p>The filter value.</p>', 'SavingsPlanRateFilter$values' => '<p>The filter values.</p>', ], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlanRatesRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve additional results, make another call with the returned token value.</p>', 'DescribeSavingsPlansRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve additional results, make another call with the returned token value.</p>', ], ], 'PageSize' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve additional results, make another call with the returned token value.</p>', 'DescribeSavingsPlansOfferingsRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve additional results, make another call with the returned token value.</p>', ], ], 'PaginationToken' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlanRatesRequest$nextToken' => '<p>The token for the next page of results.</p>', 'DescribeSavingsPlanRatesResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is null when there are no more results to return.</p>', 'DescribeSavingsPlansOfferingRatesRequest$nextToken' => '<p>The token for the next page of results.</p>', 'DescribeSavingsPlansOfferingRatesResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is null when there are no more results to return.</p>', 'DescribeSavingsPlansOfferingsRequest$nextToken' => '<p>The token for the next page of results.</p>', 'DescribeSavingsPlansOfferingsResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is null when there are no more results to return.</p>', 'DescribeSavingsPlansRequest$nextToken' => '<p>The token for the next page of results.</p>', 'DescribeSavingsPlansResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is null when there are no more results to return.</p>', ], ], 'ParentSavingsPlanOffering' => [ 'base' => '<p>Information about a Savings Plan offering.</p>', 'refs' => [ 'SavingsPlanOfferingRate$savingsPlanOffering' => '<p>The Savings Plan offering.</p>', ], ], 'Region' => [ 'base' => NULL, 'refs' => [ 'SavingsPlan$region' => '<p>The AWS Region.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource was not found.</p>', 'refs' => [], ], 'SavingsPlan' => [ 'base' => '<p>Information about a Savings Plan.</p>', 'refs' => [ 'SavingsPlanList$member' => NULL, ], ], 'SavingsPlanArn' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'SavingsPlan$savingsPlanArn' => '<p>The Amazon Resource Name (ARN) of the Savings Plan.</p>', 'SavingsPlanArnList$member' => NULL, 'TagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'UntagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', ], ], 'SavingsPlanArnList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansRequest$savingsPlanArns' => '<p>The Amazon Resource Names (ARN) of the Savings Plans.</p>', ], ], 'SavingsPlanDescription' => [ 'base' => NULL, 'refs' => [ 'ParentSavingsPlanOffering$planDescription' => '<p>The description.</p>', 'SavingsPlanDescriptionsList$member' => NULL, 'SavingsPlanOffering$description' => '<p>The description.</p>', ], ], 'SavingsPlanDescriptionsList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingsRequest$descriptions' => '<p>The descriptions.</p>', ], ], 'SavingsPlanFilter' => [ 'base' => '<p>Information about a filter.</p>', 'refs' => [ 'SavingsPlanFilterList$member' => NULL, ], ], 'SavingsPlanFilterList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansRequest$filters' => '<p>The filters.</p>', ], ], 'SavingsPlanId' => [ 'base' => NULL, 'refs' => [ 'CreateSavingsPlanResponse$savingsPlanId' => '<p>The ID of the Savings Plan.</p>', 'DescribeSavingsPlanRatesRequest$savingsPlanId' => '<p>The ID of the Savings Plan.</p>', 'DescribeSavingsPlanRatesResponse$savingsPlanId' => '<p>The ID of the Savings Plan.</p>', 'SavingsPlan$savingsPlanId' => '<p>The ID of the Savings Plan.</p>', 'SavingsPlanIdList$member' => NULL, ], ], 'SavingsPlanIdList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansRequest$savingsPlanIds' => '<p>The IDs of the Savings Plans.</p>', ], ], 'SavingsPlanList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansResponse$savingsPlans' => '<p>Information about the Savings Plans.</p>', ], ], 'SavingsPlanOffering' => [ 'base' => '<p>Information about a Savings Plan offering.</p>', 'refs' => [ 'SavingsPlanOfferingsList$member' => NULL, ], ], 'SavingsPlanOfferingFilterAttribute' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingFilterElement$name' => '<p>The filter name.</p>', ], ], 'SavingsPlanOfferingFilterElement' => [ 'base' => '<p>Information about a filter.</p>', 'refs' => [ 'SavingsPlanOfferingFiltersList$member' => NULL, ], ], 'SavingsPlanOfferingFiltersList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingsRequest$filters' => '<p>The filters.</p>', ], ], 'SavingsPlanOfferingId' => [ 'base' => NULL, 'refs' => [ 'CreateSavingsPlanRequest$savingsPlanOfferingId' => '<p>The ID of the offering.</p>', 'SavingsPlan$offeringId' => '<p>The ID of the offering.</p>', ], ], 'SavingsPlanOfferingProperty' => [ 'base' => '<p>Information about a property.</p>', 'refs' => [ 'SavingsPlanOfferingPropertyList$member' => NULL, ], ], 'SavingsPlanOfferingPropertyKey' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingProperty$name' => '<p>The property name.</p>', ], ], 'SavingsPlanOfferingPropertyList' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOffering$properties' => '<p>The properties.</p>', ], ], 'SavingsPlanOfferingRate' => [ 'base' => '<p>Information about a Savings Plan offering rate.</p>', 'refs' => [ 'SavingsPlanOfferingRatesList$member' => NULL, ], ], 'SavingsPlanOfferingRateFilterElement' => [ 'base' => '<p>Information about a filter.</p>', 'refs' => [ 'SavingsPlanOfferingRateFiltersList$member' => NULL, ], ], 'SavingsPlanOfferingRateFiltersList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesRequest$filters' => '<p>The filters.</p>', ], ], 'SavingsPlanOfferingRateProperty' => [ 'base' => '<p>Information about a property.</p>', 'refs' => [ 'SavingsPlanOfferingRatePropertyList$member' => NULL, ], ], 'SavingsPlanOfferingRatePropertyList' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingRate$properties' => '<p>The properties.</p>', ], ], 'SavingsPlanOfferingRatesList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesResponse$searchResults' => '<p>Information about the Savings Plans offering rates.</p>', ], ], 'SavingsPlanOfferingsList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingsResponse$searchResults' => '<p>Information about the Savings Plans offerings.</p>', ], ], 'SavingsPlanOperation' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOffering$operation' => '<p>The specific AWS operation for the line item in the billing report.</p>', 'SavingsPlanOperationList$member' => NULL, ], ], 'SavingsPlanOperationList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingsRequest$operations' => '<p>The specific AWS operation for the line item in the billing report.</p>', ], ], 'SavingsPlanPaymentOption' => [ 'base' => NULL, 'refs' => [ 'ParentSavingsPlanOffering$paymentOption' => '<p>The payment option.</p>', 'SavingsPlan$paymentOption' => '<p>The payment option.</p>', 'SavingsPlanOffering$paymentOption' => '<p>The payment option.</p>', 'SavingsPlanPaymentOptionList$member' => NULL, ], ], 'SavingsPlanPaymentOptionList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesRequest$savingsPlanPaymentOptions' => '<p>The payment options.</p>', 'DescribeSavingsPlansOfferingsRequest$paymentOptions' => '<p>The payment options.</p>', ], ], 'SavingsPlanProductType' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingsRequest$productType' => '<p>The product type.</p>', 'SavingsPlanOfferingRate$productType' => '<p>The product type.</p>', 'SavingsPlanProductTypeList$member' => NULL, 'SavingsPlanRate$productType' => '<p>The product type.</p>', ], ], 'SavingsPlanProductTypeList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesRequest$products' => '<p>The AWS products.</p>', 'SavingsPlan$productTypes' => '<p>The product types.</p>', 'SavingsPlanOffering$productTypes' => '<p>The product type.</p>', ], ], 'SavingsPlanRate' => [ 'base' => '<p>Information about a Savings Plan rate.</p>', 'refs' => [ 'SavingsPlanRateList$member' => NULL, ], ], 'SavingsPlanRateFilter' => [ 'base' => '<p>Information about a filter.</p>', 'refs' => [ 'SavingsPlanRateFilterList$member' => NULL, ], ], 'SavingsPlanRateFilterAttribute' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingRateFilterElement$name' => '<p>The filter name.</p>', ], ], 'SavingsPlanRateFilterList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlanRatesRequest$filters' => '<p>The filters.</p>', ], ], 'SavingsPlanRateFilterName' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanRateFilter$name' => '<p>The filter name.</p>', ], ], 'SavingsPlanRateList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlanRatesResponse$searchResults' => '<p>Information about the Savings Plans rates.</p>', ], ], 'SavingsPlanRateOperation' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingRate$operation' => '<p>The specific AWS operation for the line item in the billing report.</p>', 'SavingsPlanRate$operation' => '<p>The specific AWS operation for the line item in the billing report.</p>', 'SavingsPlanRateOperationList$member' => NULL, ], ], 'SavingsPlanRateOperationList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesRequest$operations' => '<p>The specific AWS operation for the line item in the billing report.</p>', ], ], 'SavingsPlanRatePricePerUnit' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingRate$rate' => '<p>The Savings Plan rate.</p>', ], ], 'SavingsPlanRateProperty' => [ 'base' => '<p>Information about a property.</p>', 'refs' => [ 'SavingsPlanRatePropertyList$member' => NULL, ], ], 'SavingsPlanRatePropertyKey' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanRateProperty$name' => '<p>The property name.</p>', ], ], 'SavingsPlanRatePropertyList' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanRate$properties' => '<p>The properties.</p>', ], ], 'SavingsPlanRateServiceCode' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingRate$serviceCode' => '<p>The service.</p>', 'SavingsPlanRate$serviceCode' => '<p>The service.</p>', 'SavingsPlanRateServiceCodeList$member' => NULL, ], ], 'SavingsPlanRateServiceCodeList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesRequest$serviceCodes' => '<p>The services.</p>', ], ], 'SavingsPlanRateUnit' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingRate$unit' => '<p>The unit.</p>', 'SavingsPlanRate$unit' => '<p>The unit.</p>', ], ], 'SavingsPlanRateUsageType' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOfferingRate$usageType' => '<p>The usage details of the line item in the billing report.</p>', 'SavingsPlanRate$usageType' => '<p>The usage details of the line item in the billing report.</p>', 'SavingsPlanRateUsageTypeList$member' => NULL, ], ], 'SavingsPlanRateUsageTypeList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesRequest$usageTypes' => '<p>The usage details of the line item in the billing report.</p>', ], ], 'SavingsPlanServiceCode' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOffering$serviceCode' => '<p>The service.</p>', 'SavingsPlanServiceCodeList$member' => NULL, ], ], 'SavingsPlanServiceCodeList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingsRequest$serviceCodes' => '<p>The services.</p>', ], ], 'SavingsPlanState' => [ 'base' => NULL, 'refs' => [ 'SavingsPlan$state' => '<p>The state.</p>', 'SavingsPlanStateList$member' => NULL, ], ], 'SavingsPlanStateList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansRequest$states' => '<p>The states.</p>', ], ], 'SavingsPlanType' => [ 'base' => NULL, 'refs' => [ 'ParentSavingsPlanOffering$planType' => '<p>The plan type.</p>', 'SavingsPlan$savingsPlanType' => '<p>The plan type.</p>', 'SavingsPlanOffering$planType' => '<p>The plan type.</p>', 'SavingsPlanTypeList$member' => NULL, ], ], 'SavingsPlanTypeList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesRequest$savingsPlanTypes' => '<p>The plan types.</p>', 'DescribeSavingsPlansOfferingsRequest$planTypes' => '<p>The plan type.</p>', ], ], 'SavingsPlanUsageType' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanOffering$usageType' => '<p>The usage details of the line item in the billing report.</p>', 'SavingsPlanUsageTypeList$member' => NULL, ], ], 'SavingsPlanUsageTypeList' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingsRequest$usageTypes' => '<p>The usage details of the line item in the billing report.</p>', ], ], 'SavingsPlansDuration' => [ 'base' => NULL, 'refs' => [ 'DurationsList$member' => NULL, 'ParentSavingsPlanOffering$durationSeconds' => '<p>The duration, in seconds.</p>', 'SavingsPlanOffering$durationSeconds' => '<p>The duration, in seconds.</p>', ], ], 'SavingsPlansFilterName' => [ 'base' => NULL, 'refs' => [ 'SavingsPlanFilter$name' => '<p>The filter name.</p>', ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>A service quota has been exceeded.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'InternalServerException$message' => NULL, 'ListOfStrings$member' => NULL, 'ResourceNotFoundException$message' => NULL, 'SavingsPlan$description' => '<p>The description.</p>', 'SavingsPlan$start' => '<p>The start time.</p>', 'SavingsPlan$end' => '<p>The end time.</p>', 'ServiceQuotaExceededException$message' => NULL, 'ValidationException$message' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>The tag keys.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'CreateSavingsPlanRequest$tags' => '<p>One or more tags.</p>', 'ListTagsForResourceResponse$tags' => '<p>Information about the tags.</p>', 'SavingsPlan$tags' => '<p>One or more tags.</p>', 'TagResourceRequest$tags' => '<p>One or more tags. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'TermDurationInSeconds' => [ 'base' => NULL, 'refs' => [ 'SavingsPlan$termDurationInSeconds' => '<p>The duration of the term, in seconds.</p>', ], ], 'UUID' => [ 'base' => NULL, 'refs' => [ 'ParentSavingsPlanOffering$offeringId' => '<p>The ID of the offering.</p>', 'SavingsPlanOffering$offeringId' => '<p>The ID of the offering.</p>', 'UUIDs$member' => NULL, ], ], 'UUIDs' => [ 'base' => NULL, 'refs' => [ 'DescribeSavingsPlansOfferingRatesRequest$savingsPlanOfferingIds' => '<p>The IDs of the offerings.</p>', 'DescribeSavingsPlansOfferingsRequest$offeringIds' => '<p>The IDs of the offerings.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>One of the input parameters is not valid.</p>', 'refs' => [], ], ],];
