<?php
/**
 * Copyright 2010-2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Aws\Common\Enum;

use Aws\Common\Enum;

/**
 * Contains enumerable date format values used in the SDK
 */
class DateFormat extends Enum
{
    const ISO8601        = 'Ymd\THis\Z';
    const ISO8601_POLICY = 'Y-m-d\TH:i:s\Z';
    const RFC1123        = \DateTime::RFC1123;
    const RFC1123_GMT    = 'D, d M Y H:i:s \G\M\T';
    const RFC2822        = \DateTime::RFC2822;
    const SHORT          = 'Ymd';
}
