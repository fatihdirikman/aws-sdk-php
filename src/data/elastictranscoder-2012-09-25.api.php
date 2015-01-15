<?php return [
  'metadata' => [
    'apiVersion' => '2012-09-25',
    'endpointPrefix' => 'elastictranscoder',
    'serviceFullName' => 'Amazon Elastic Transcoder',
    'signatureVersion' => 'v4',
    'protocol' => 'rest-json',
  ],
  'operations' => [
    'CancelJob' => [
      'name' => 'CancelJob',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2012-09-25/jobs/{Id}',
        'responseCode' => 202,
      ],
      'input' => [
        'shape' => 'CancelJobRequest',
      ],
      'output' => [
        'shape' => 'CancelJobResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceInUseException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'CreateJob' => [
      'name' => 'CreateJob',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2012-09-25/jobs',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreateJobRequest',
      ],
      'output' => [
        'shape' => 'CreateJobResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'CreatePipeline' => [
      'name' => 'CreatePipeline',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2012-09-25/pipelines',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreatePipelineRequest',
      ],
      'output' => [
        'shape' => 'CreatePipelineResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'CreatePreset' => [
      'name' => 'CreatePreset',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2012-09-25/presets',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreatePresetRequest',
      ],
      'output' => [
        'shape' => 'CreatePresetResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DeletePipeline' => [
      'name' => 'DeletePipeline',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2012-09-25/pipelines/{Id}',
        'responseCode' => 202,
      ],
      'input' => [
        'shape' => 'DeletePipelineRequest',
      ],
      'output' => [
        'shape' => 'DeletePipelineResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceInUseException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DeletePreset' => [
      'name' => 'DeletePreset',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2012-09-25/presets/{Id}',
        'responseCode' => 202,
      ],
      'input' => [
        'shape' => 'DeletePresetRequest',
      ],
      'output' => [
        'shape' => 'DeletePresetResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ListJobsByPipeline' => [
      'name' => 'ListJobsByPipeline',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2012-09-25/jobsByPipeline/{PipelineId}',
      ],
      'input' => [
        'shape' => 'ListJobsByPipelineRequest',
      ],
      'output' => [
        'shape' => 'ListJobsByPipelineResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ListJobsByStatus' => [
      'name' => 'ListJobsByStatus',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2012-09-25/jobsByStatus/{Status}',
      ],
      'input' => [
        'shape' => 'ListJobsByStatusRequest',
      ],
      'output' => [
        'shape' => 'ListJobsByStatusResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ListPipelines' => [
      'name' => 'ListPipelines',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2012-09-25/pipelines',
      ],
      'input' => [
        'shape' => 'ListPipelinesRequest',
      ],
      'output' => [
        'shape' => 'ListPipelinesResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ListPresets' => [
      'name' => 'ListPresets',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2012-09-25/presets',
      ],
      'input' => [
        'shape' => 'ListPresetsRequest',
      ],
      'output' => [
        'shape' => 'ListPresetsResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ReadJob' => [
      'name' => 'ReadJob',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2012-09-25/jobs/{Id}',
      ],
      'input' => [
        'shape' => 'ReadJobRequest',
      ],
      'output' => [
        'shape' => 'ReadJobResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ReadPipeline' => [
      'name' => 'ReadPipeline',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2012-09-25/pipelines/{Id}',
      ],
      'input' => [
        'shape' => 'ReadPipelineRequest',
      ],
      'output' => [
        'shape' => 'ReadPipelineResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ReadPreset' => [
      'name' => 'ReadPreset',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2012-09-25/presets/{Id}',
      ],
      'input' => [
        'shape' => 'ReadPresetRequest',
      ],
      'output' => [
        'shape' => 'ReadPresetResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'TestRole' => [
      'name' => 'TestRole',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2012-09-25/roleTests',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'TestRoleRequest',
      ],
      'output' => [
        'shape' => 'TestRoleResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'UpdatePipeline' => [
      'name' => 'UpdatePipeline',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/2012-09-25/pipelines/{Id}',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'UpdatePipelineRequest',
      ],
      'output' => [
        'shape' => 'UpdatePipelineResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceInUseException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'UpdatePipelineNotifications' => [
      'name' => 'UpdatePipelineNotifications',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2012-09-25/pipelines/{Id}/notifications',
      ],
      'input' => [
        'shape' => 'UpdatePipelineNotificationsRequest',
      ],
      'output' => [
        'shape' => 'UpdatePipelineNotificationsResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceInUseException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'UpdatePipelineStatus' => [
      'name' => 'UpdatePipelineStatus',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2012-09-25/pipelines/{Id}/status',
      ],
      'input' => [
        'shape' => 'UpdatePipelineStatusRequest',
      ],
      'output' => [
        'shape' => 'UpdatePipelineStatusResponse',
      ],
      'errors' => [
        [
          'shape' => 'ValidationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersionException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceInUseException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDeniedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServiceException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'AccessControl' => [
      'type' => 'string',
      'pattern' => '(^FullControl$]|(^Read$]|(^ReadAcp$]|(^WriteAcp$]',
    ],
    'AccessControls' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AccessControl',
      ],
      'max' => 30,
    ],
    'AccessDeniedException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'httpStatusCode' => 403,
      ],
      'exception' => true,
    ],
    'Artwork' => [
      'type' => 'structure',
      'members' => [
        'InputKey' => [
          'shape' => 'WatermarkKey',
        ],
        'MaxWidth' => [
          'shape' => 'DigitsOrAuto',
        ],
        'MaxHeight' => [
          'shape' => 'DigitsOrAuto',
        ],
        'SizingPolicy' => [
          'shape' => 'SizingPolicy',
        ],
        'PaddingPolicy' => [
          'shape' => 'PaddingPolicy',
        ],
        'AlbumArtFormat' => [
          'shape' => 'JpgOrPng',
        ],
        'Encryption' => [
          'shape' => 'Encryption',
        ],
      ],
    ],
    'Artworks' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Artwork',
      ],
    ],
    'Ascending' => [
      'type' => 'string',
      'pattern' => '(^true$]|(^false$]',
    ],
    'AspectRatio' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^1:1$]|(^4:3$]|(^3:2$]|(^16:9$]',
    ],
    'AudioBitRate' => [
      'type' => 'string',
      'pattern' => '^\\d{1,3}$',
    ],
    'AudioChannels' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^0$]|(^1$]|(^2$]',
    ],
    'AudioCodec' => [
      'type' => 'string',
      'pattern' => '(^AAC$]|(^vorbis$]|(^mp3$]',
    ],
    'AudioCodecOptions' => [
      'type' => 'structure',
      'members' => [
        'Profile' => [
          'shape' => 'AudioCodecProfile',
        ],
      ],
    ],
    'AudioCodecProfile' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^AAC-LC$]|(^HE-AAC$]|(^HE-AACv2$]',
    ],
    'AudioParameters' => [
      'type' => 'structure',
      'members' => [
        'Codec' => [
          'shape' => 'AudioCodec',
        ],
        'SampleRate' => [
          'shape' => 'AudioSampleRate',
        ],
        'BitRate' => [
          'shape' => 'AudioBitRate',
        ],
        'Channels' => [
          'shape' => 'AudioChannels',
        ],
        'CodecOptions' => [
          'shape' => 'AudioCodecOptions',
        ],
      ],
    ],
    'AudioSampleRate' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^22050$]|(^32000$]|(^44100$]|(^48000$]|(^96000$]',
    ],
    'Base64EncodedString' => [
      'type' => 'string',
      'pattern' => '^(?:[A-Za-z0-9\\+/]{4}]*(?:[A-Za-z0-9\\+/]{2}==|[A-Za-z0-9\\+/]{3}=]?$',
    ],
    'BucketName' => [
      'type' => 'string',
      'pattern' => '^(\\w|\\.|-]{1,255}$',
    ],
    'CancelJobRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'CancelJobResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'CaptionFormat' => [
      'type' => 'structure',
      'members' => [
        'Format' => [
          'shape' => 'CaptionFormatFormat',
        ],
        'Pattern' => [
          'shape' => 'CaptionFormatPattern',
        ],
        'Encryption' => [
          'shape' => 'Encryption',
        ],
      ],
    ],
    'CaptionFormatFormat' => [
      'type' => 'string',
      'pattern' => '(^mov-text$]|(^srt$]|(^scc$]|(^webvtt$]|(^dfxp$]',
    ],
    'CaptionFormatPattern' => [
      'type' => 'string',
      'pattern' => '(^$]|(^.*\\{language\\}.*$]',
    ],
    'CaptionFormats' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CaptionFormat',
      ],
      'max' => 4,
    ],
    'CaptionMergePolicy' => [
      'type' => 'string',
      'pattern' => '(^MergeOverride$]|(^MergeRetain$]|(^Override$]',
    ],
    'CaptionSource' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'Key',
        ],
        'Language' => [
          'shape' => 'Key',
        ],
        'TimeOffset' => [
          'shape' => 'TimeOffset',
        ],
        'Label' => [
          'shape' => 'Name',
        ],
        'Encryption' => [
          'shape' => 'Encryption',
        ],
      ],
    ],
    'CaptionSources' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CaptionSource',
      ],
      'max' => 20,
    ],
    'Captions' => [
      'type' => 'structure',
      'members' => [
        'MergePolicy' => [
          'shape' => 'CaptionMergePolicy',
        ],
        'CaptionSources' => [
          'shape' => 'CaptionSources',
        ],
        'CaptionFormats' => [
          'shape' => 'CaptionFormats',
        ],
      ],
    ],
    'Clip' => [
      'type' => 'structure',
      'members' => [
        'TimeSpan' => [
          'shape' => 'TimeSpan',
        ],
      ],
    ],
    'CodecOption' => [
      'type' => 'string',
      'min' => 1,
      'max' => 255,
    ],
    'CodecOptions' => [
      'type' => 'map',
      'key' => [
        'shape' => 'CodecOption',
      ],
      'value' => [
        'shape' => 'CodecOption',
      ],
      'max' => 30,
    ],
    'Composition' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Clip',
      ],
    ],
    'CreateJobOutput' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'Key',
        ],
        'ThumbnailPattern' => [
          'shape' => 'ThumbnailPattern',
        ],
        'ThumbnailEncryption' => [
          'shape' => 'Encryption',
        ],
        'Rotate' => [
          'shape' => 'Rotate',
        ],
        'PresetId' => [
          'shape' => 'Id',
        ],
        'SegmentDuration' => [
          'shape' => 'Float',
        ],
        'Watermarks' => [
          'shape' => 'JobWatermarks',
        ],
        'AlbumArt' => [
          'shape' => 'JobAlbumArt',
        ],
        'Composition' => [
          'shape' => 'Composition',
        ],
        'Captions' => [
          'shape' => 'Captions',
        ],
        'Encryption' => [
          'shape' => 'Encryption',
        ],
      ],
    ],
    'CreateJobOutputs' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CreateJobOutput',
      ],
      'max' => 30,
    ],
    'CreateJobPlaylist' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'Filename',
        ],
        'Format' => [
          'shape' => 'PlaylistFormat',
        ],
        'OutputKeys' => [
          'shape' => 'OutputKeys',
        ],
      ],
    ],
    'CreateJobPlaylists' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CreateJobPlaylist',
      ],
      'max' => 30,
    ],
    'CreateJobRequest' => [
      'type' => 'structure',
      'required' => [
        'PipelineId',
        'Input',
      ],
      'members' => [
        'PipelineId' => [
          'shape' => 'Id',
        ],
        'Input' => [
          'shape' => 'JobInput',
        ],
        'Output' => [
          'shape' => 'CreateJobOutput',
        ],
        'Outputs' => [
          'shape' => 'CreateJobOutputs',
        ],
        'OutputKeyPrefix' => [
          'shape' => 'Key',
        ],
        'Playlists' => [
          'shape' => 'CreateJobPlaylists',
        ],
        'UserMetadata' => [
          'shape' => 'UserMetadata',
        ],
      ],
    ],
    'CreateJobResponse' => [
      'type' => 'structure',
      'members' => [
        'Job' => [
          'shape' => 'Job',
        ],
      ],
    ],
    'CreatePipelineRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
        'InputBucket',
        'Role',
      ],
      'members' => [
        'Name' => [
          'shape' => 'Name',
        ],
        'InputBucket' => [
          'shape' => 'BucketName',
        ],
        'OutputBucket' => [
          'shape' => 'BucketName',
        ],
        'Role' => [
          'shape' => 'Role',
        ],
        'AwsKmsKeyArn' => [
          'shape' => 'KeyArn',
        ],
        'Notifications' => [
          'shape' => 'Notifications',
        ],
        'ContentConfig' => [
          'shape' => 'PipelineOutputConfig',
        ],
        'ThumbnailConfig' => [
          'shape' => 'PipelineOutputConfig',
        ],
      ],
    ],
    'CreatePipelineResponse' => [
      'type' => 'structure',
      'members' => [
        'Pipeline' => [
          'shape' => 'Pipeline',
        ],
      ],
    ],
    'CreatePresetRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
        'Container',
      ],
      'members' => [
        'Name' => [
          'shape' => 'Name',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'Container' => [
          'shape' => 'PresetContainer',
        ],
        'Video' => [
          'shape' => 'VideoParameters',
        ],
        'Audio' => [
          'shape' => 'AudioParameters',
        ],
        'Thumbnails' => [
          'shape' => 'Thumbnails',
        ],
      ],
    ],
    'CreatePresetResponse' => [
      'type' => 'structure',
      'members' => [
        'Preset' => [
          'shape' => 'Preset',
        ],
        'Warning' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeletePipelineRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'DeletePipelineResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'DeletePresetRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'DeletePresetResponse' => [
      'type' => 'structure',
      'members' => [],
    ],
    'Description' => [
      'type' => 'string',
      'min' => 0,
      'max' => 255,
    ],
    'Digits' => [
      'type' => 'string',
      'pattern' => '^\\d{1,5}$',
    ],
    'DigitsOrAuto' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^\\d{2,4}$]',
    ],
    'Encryption' => [
      'type' => 'structure',
      'members' => [
        'Mode' => [
          'shape' => 'EncryptionMode',
        ],
        'Key' => [
          'shape' => 'Base64EncodedString',
        ],
        'KeyMd5' => [
          'shape' => 'Base64EncodedString',
        ],
        'InitializationVector' => [
          'shape' => 'Key',
        ],
      ],
    ],
    'EncryptionMode' => [
      'type' => 'string',
      'pattern' => '(^s3$]|(^s3-aws-kms$]|(^aes-cbc-pkcs7$]|(^aes-ctr$]|(^aes-gcm$]',
    ],
    'ExceptionMessages' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'Filename' => [
      'type' => 'string',
      'min' => 1,
      'max' => 255,
    ],
    'FixedGOP' => [
      'type' => 'string',
      'pattern' => '(^true$]|(^false$]',
    ],
    'Float' => [
      'type' => 'string',
      'pattern' => '^\\d{1,5}(\\.\\d{0,5}]?$',
    ],
    'FrameRate' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^10$]|(^15$]|(^23.97$]|(^24$]|(^25$]|(^29.97$]|(^30$]|(^50$]|(^60$]',
    ],
    'Grantee' => [
      'type' => 'string',
      'min' => 1,
      'max' => 255,
    ],
    'GranteeType' => [
      'type' => 'string',
      'pattern' => '(^Canonical$]|(^Email$]|(^Group$]',
    ],
    'HorizontalAlign' => [
      'type' => 'string',
      'pattern' => '(^Left$]|(^Right$]|(^Center$]',
    ],
    'Id' => [
      'type' => 'string',
      'pattern' => '^\\d{13}-\\w{6}$',
    ],
    'IncompatibleVersionException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'Interlaced' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^true$]|(^false$]',
    ],
    'InternalServiceException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
      'fault' => true,
    ],
    'Job' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'Id',
        ],
        'Arn' => [
          'shape' => 'String',
        ],
        'PipelineId' => [
          'shape' => 'Id',
        ],
        'Input' => [
          'shape' => 'JobInput',
        ],
        'Output' => [
          'shape' => 'JobOutput',
        ],
        'Outputs' => [
          'shape' => 'JobOutputs',
        ],
        'OutputKeyPrefix' => [
          'shape' => 'Key',
        ],
        'Playlists' => [
          'shape' => 'Playlists',
        ],
        'Status' => [
          'shape' => 'JobStatus',
        ],
        'UserMetadata' => [
          'shape' => 'UserMetadata',
        ],
      ],
    ],
    'JobAlbumArt' => [
      'type' => 'structure',
      'members' => [
        'MergePolicy' => [
          'shape' => 'MergePolicy',
        ],
        'Artwork' => [
          'shape' => 'Artworks',
        ],
      ],
    ],
    'JobContainer' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^3gp$]|(^asf$]|(^avi$]|(^divx$]|(^flv$]|(^mkv$]|(^mov$]|(^mp4$]|(^mpeg$]|(^mpeg-ps$]|(^mpeg-ts$]|(^mxf$]|(^ogg$]|(^ts$]|(^vob$]|(^wav$]|(^webm$]|(^mp3$]|(^m4a$]|(^aac$]',
    ],
    'JobInput' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'Key',
        ],
        'FrameRate' => [
          'shape' => 'FrameRate',
        ],
        'Resolution' => [
          'shape' => 'Resolution',
        ],
        'AspectRatio' => [
          'shape' => 'AspectRatio',
        ],
        'Interlaced' => [
          'shape' => 'Interlaced',
        ],
        'Container' => [
          'shape' => 'JobContainer',
        ],
        'Encryption' => [
          'shape' => 'Encryption',
        ],
      ],
    ],
    'JobOutput' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'String',
        ],
        'Key' => [
          'shape' => 'Key',
        ],
        'ThumbnailPattern' => [
          'shape' => 'ThumbnailPattern',
        ],
        'ThumbnailEncryption' => [
          'shape' => 'Encryption',
        ],
        'Rotate' => [
          'shape' => 'Rotate',
        ],
        'PresetId' => [
          'shape' => 'Id',
        ],
        'SegmentDuration' => [
          'shape' => 'Float',
        ],
        'Status' => [
          'shape' => 'JobStatus',
        ],
        'StatusDetail' => [
          'shape' => 'Description',
        ],
        'Duration' => [
          'shape' => 'NullableLong',
        ],
        'Width' => [
          'shape' => 'NullableInteger',
        ],
        'Height' => [
          'shape' => 'NullableInteger',
        ],
        'Watermarks' => [
          'shape' => 'JobWatermarks',
        ],
        'AlbumArt' => [
          'shape' => 'JobAlbumArt',
        ],
        'Composition' => [
          'shape' => 'Composition',
        ],
        'Captions' => [
          'shape' => 'Captions',
        ],
        'Encryption' => [
          'shape' => 'Encryption',
        ],
      ],
    ],
    'JobOutputs' => [
      'type' => 'list',
      'member' => [
        'shape' => 'JobOutput',
      ],
    ],
    'JobStatus' => [
      'type' => 'string',
      'pattern' => '(^Submitted$]|(^Progressing$]|(^Complete$]|(^Canceled$]|(^Error$]',
    ],
    'JobWatermark' => [
      'type' => 'structure',
      'members' => [
        'PresetWatermarkId' => [
          'shape' => 'PresetWatermarkId',
        ],
        'InputKey' => [
          'shape' => 'WatermarkKey',
        ],
        'Encryption' => [
          'shape' => 'Encryption',
        ],
      ],
    ],
    'JobWatermarks' => [
      'type' => 'list',
      'member' => [
        'shape' => 'JobWatermark',
      ],
    ],
    'Jobs' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Job',
      ],
    ],
    'JpgOrPng' => [
      'type' => 'string',
      'pattern' => '(^jpg$]|(^png$]',
    ],
    'Key' => [
      'type' => 'string',
      'min' => 1,
      'max' => 255,
    ],
    'KeyArn' => [
      'type' => 'string',
      'min' => 0,
      'max' => 255,
    ],
    'KeyframesMaxDist' => [
      'type' => 'string',
      'pattern' => '^\\d{1,6}$',
    ],
    'LimitExceededException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'httpStatusCode' => 429,
      ],
      'exception' => true,
    ],
    'ListJobsByPipelineRequest' => [
      'type' => 'structure',
      'required' => [
        'PipelineId',
      ],
      'members' => [
        'PipelineId' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'PipelineId',
        ],
        'Ascending' => [
          'shape' => 'Ascending',
          'location' => 'querystring',
          'locationName' => 'Ascending',
        ],
        'PageToken' => [
          'shape' => 'Id',
          'location' => 'querystring',
          'locationName' => 'PageToken',
        ],
      ],
    ],
    'ListJobsByPipelineResponse' => [
      'type' => 'structure',
      'members' => [
        'Jobs' => [
          'shape' => 'Jobs',
        ],
        'NextPageToken' => [
          'shape' => 'Id',
        ],
      ],
    ],
    'ListJobsByStatusRequest' => [
      'type' => 'structure',
      'required' => [
        'Status',
      ],
      'members' => [
        'Status' => [
          'shape' => 'JobStatus',
          'location' => 'uri',
          'locationName' => 'Status',
        ],
        'Ascending' => [
          'shape' => 'Ascending',
          'location' => 'querystring',
          'locationName' => 'Ascending',
        ],
        'PageToken' => [
          'shape' => 'Id',
          'location' => 'querystring',
          'locationName' => 'PageToken',
        ],
      ],
    ],
    'ListJobsByStatusResponse' => [
      'type' => 'structure',
      'members' => [
        'Jobs' => [
          'shape' => 'Jobs',
        ],
        'NextPageToken' => [
          'shape' => 'Id',
        ],
      ],
    ],
    'ListPipelinesRequest' => [
      'type' => 'structure',
      'members' => [
        'Ascending' => [
          'shape' => 'Ascending',
          'location' => 'querystring',
          'locationName' => 'Ascending',
        ],
        'PageToken' => [
          'shape' => 'Id',
          'location' => 'querystring',
          'locationName' => 'PageToken',
        ],
      ],
    ],
    'ListPipelinesResponse' => [
      'type' => 'structure',
      'members' => [
        'Pipelines' => [
          'shape' => 'Pipelines',
        ],
        'NextPageToken' => [
          'shape' => 'Id',
        ],
      ],
    ],
    'ListPresetsRequest' => [
      'type' => 'structure',
      'members' => [
        'Ascending' => [
          'shape' => 'Ascending',
          'location' => 'querystring',
          'locationName' => 'Ascending',
        ],
        'PageToken' => [
          'shape' => 'Id',
          'location' => 'querystring',
          'locationName' => 'PageToken',
        ],
      ],
    ],
    'ListPresetsResponse' => [
      'type' => 'structure',
      'members' => [
        'Presets' => [
          'shape' => 'Presets',
        ],
        'NextPageToken' => [
          'shape' => 'Id',
        ],
      ],
    ],
    'MaxFrameRate' => [
      'type' => 'string',
      'pattern' => '(^10$]|(^15$]|(^23.97$]|(^24$]|(^25$]|(^29.97$]|(^30$]|(^50$]|(^60$]',
    ],
    'MergePolicy' => [
      'type' => 'string',
      'pattern' => '(^Replace$]|(^Prepend$]|(^Append$]|(^Fallback$]',
    ],
    'Name' => [
      'type' => 'string',
      'min' => 1,
      'max' => 40,
    ],
    'Notifications' => [
      'type' => 'structure',
      'members' => [
        'Progressing' => [
          'shape' => 'SnsTopic',
        ],
        'Completed' => [
          'shape' => 'SnsTopic',
        ],
        'Warning' => [
          'shape' => 'SnsTopic',
        ],
        'Error' => [
          'shape' => 'SnsTopic',
        ],
      ],
    ],
    'NullableInteger' => [
      'type' => 'integer',
    ],
    'NullableLong' => [
      'type' => 'long',
    ],
    'Opacity' => [
      'type' => 'string',
      'pattern' => '^\\d{1,3}(\\.\\d{0,20}]?$',
    ],
    'OutputKeys' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Key',
      ],
      'max' => 30,
    ],
    'PaddingPolicy' => [
      'type' => 'string',
      'pattern' => '(^Pad$]|(^NoPad$]',
    ],
    'Permission' => [
      'type' => 'structure',
      'members' => [
        'GranteeType' => [
          'shape' => 'GranteeType',
        ],
        'Grantee' => [
          'shape' => 'Grantee',
        ],
        'Access' => [
          'shape' => 'AccessControls',
        ],
      ],
    ],
    'Permissions' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Permission',
      ],
      'max' => 30,
    ],
    'Pipeline' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'Id',
        ],
        'Arn' => [
          'shape' => 'String',
        ],
        'Name' => [
          'shape' => 'Name',
        ],
        'Status' => [
          'shape' => 'PipelineStatus',
        ],
        'InputBucket' => [
          'shape' => 'BucketName',
        ],
        'OutputBucket' => [
          'shape' => 'BucketName',
        ],
        'Role' => [
          'shape' => 'Role',
        ],
        'AwsKmsKeyArn' => [
          'shape' => 'KeyArn',
        ],
        'Notifications' => [
          'shape' => 'Notifications',
        ],
        'ContentConfig' => [
          'shape' => 'PipelineOutputConfig',
        ],
        'ThumbnailConfig' => [
          'shape' => 'PipelineOutputConfig',
        ],
      ],
    ],
    'PipelineOutputConfig' => [
      'type' => 'structure',
      'members' => [
        'Bucket' => [
          'shape' => 'BucketName',
        ],
        'StorageClass' => [
          'shape' => 'StorageClass',
        ],
        'Permissions' => [
          'shape' => 'Permissions',
        ],
      ],
    ],
    'PipelineStatus' => [
      'type' => 'string',
      'pattern' => '(^Active$]|(^Paused$]',
    ],
    'Pipelines' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Pipeline',
      ],
    ],
    'PixelsOrPercent' => [
      'type' => 'string',
      'pattern' => '(^\\d{1,3}(\\.\\d{0,5}]?%$]|(^\\d{1,4}?px$]',
    ],
    'Playlist' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'Filename',
        ],
        'Format' => [
          'shape' => 'PlaylistFormat',
        ],
        'OutputKeys' => [
          'shape' => 'OutputKeys',
        ],
        'Status' => [
          'shape' => 'JobStatus',
        ],
        'StatusDetail' => [
          'shape' => 'Description',
        ],
      ],
    ],
    'PlaylistFormat' => [
      'type' => 'string',
      'pattern' => '(^HLSv3$]|(^HLSv4$]|(^Smooth$]',
    ],
    'Playlists' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Playlist',
      ],
    ],
    'Preset' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'Id',
        ],
        'Arn' => [
          'shape' => 'String',
        ],
        'Name' => [
          'shape' => 'Name',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'Container' => [
          'shape' => 'PresetContainer',
        ],
        'Audio' => [
          'shape' => 'AudioParameters',
        ],
        'Video' => [
          'shape' => 'VideoParameters',
        ],
        'Thumbnails' => [
          'shape' => 'Thumbnails',
        ],
        'Type' => [
          'shape' => 'PresetType',
        ],
      ],
    ],
    'PresetContainer' => [
      'type' => 'string',
      'pattern' => '(^mp4$]|(^ts$]|(^webm$]|(^mp3$]|(^ogg$]|(^fmp4$]',
    ],
    'PresetType' => [
      'type' => 'string',
      'pattern' => '(^System$]|(^Custom$]',
    ],
    'PresetWatermark' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'PresetWatermarkId',
        ],
        'MaxWidth' => [
          'shape' => 'PixelsOrPercent',
        ],
        'MaxHeight' => [
          'shape' => 'PixelsOrPercent',
        ],
        'SizingPolicy' => [
          'shape' => 'WatermarkSizingPolicy',
        ],
        'HorizontalAlign' => [
          'shape' => 'HorizontalAlign',
        ],
        'HorizontalOffset' => [
          'shape' => 'PixelsOrPercent',
        ],
        'VerticalAlign' => [
          'shape' => 'VerticalAlign',
        ],
        'VerticalOffset' => [
          'shape' => 'PixelsOrPercent',
        ],
        'Opacity' => [
          'shape' => 'Opacity',
        ],
        'Target' => [
          'shape' => 'Target',
        ],
      ],
    ],
    'PresetWatermarkId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 40,
    ],
    'PresetWatermarks' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PresetWatermark',
      ],
    ],
    'Presets' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Preset',
      ],
    ],
    'ReadJobRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'ReadJobResponse' => [
      'type' => 'structure',
      'members' => [
        'Job' => [
          'shape' => 'Job',
        ],
      ],
    ],
    'ReadPipelineRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'ReadPipelineResponse' => [
      'type' => 'structure',
      'members' => [
        'Pipeline' => [
          'shape' => 'Pipeline',
        ],
      ],
    ],
    'ReadPresetRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'ReadPresetResponse' => [
      'type' => 'structure',
      'members' => [
        'Preset' => [
          'shape' => 'Preset',
        ],
      ],
    ],
    'Resolution' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^\\d{1,5}x\\d{1,5}$]',
    ],
    'ResourceInUseException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'ResourceNotFoundException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'Role' => [
      'type' => 'string',
      'pattern' => '^arn:aws:iam::\\w{12}:role/.+$',
    ],
    'Rotate' => [
      'type' => 'string',
      'pattern' => '(^auto$]|(^0$]|(^90$]|(^180$]|(^270$]',
    ],
    'SizingPolicy' => [
      'type' => 'string',
      'pattern' => '(^Fit$]|(^Fill$]|(^Stretch$]|(^Keep$]|(^ShrinkToFit$]|(^ShrinkToFill$]',
    ],
    'SnsTopic' => [
      'type' => 'string',
      'pattern' => '(^$]|(^arn:aws:sns:.*:\\w{12}:.+$]',
    ],
    'SnsTopics' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SnsTopic',
      ],
      'max' => 30,
    ],
    'StorageClass' => [
      'type' => 'string',
      'pattern' => '(^ReducedRedundancy$]|(^Standard$]',
    ],
    'String' => [
      'type' => 'string',
    ],
    'Success' => [
      'type' => 'string',
      'pattern' => '(^true$]|(^false$]',
    ],
    'Target' => [
      'type' => 'string',
      'pattern' => '(^Content$]|(^Frame$]',
    ],
    'TestRoleRequest' => [
      'type' => 'structure',
      'required' => [
        'Role',
        'InputBucket',
        'OutputBucket',
        'Topics',
      ],
      'members' => [
        'Role' => [
          'shape' => 'Role',
        ],
        'InputBucket' => [
          'shape' => 'BucketName',
        ],
        'OutputBucket' => [
          'shape' => 'BucketName',
        ],
        'Topics' => [
          'shape' => 'SnsTopics',
        ],
      ],
    ],
    'TestRoleResponse' => [
      'type' => 'structure',
      'members' => [
        'Success' => [
          'shape' => 'Success',
        ],
        'Messages' => [
          'shape' => 'ExceptionMessages',
        ],
      ],
    ],
    'ThumbnailPattern' => [
      'type' => 'string',
      'pattern' => '(^$]|(^.*\\{count\\}.*$]',
    ],
    'ThumbnailResolution' => [
      'type' => 'string',
      'pattern' => '^\\d{1,5}x\\d{1,5}$',
    ],
    'Thumbnails' => [
      'type' => 'structure',
      'members' => [
        'Format' => [
          'shape' => 'JpgOrPng',
        ],
        'Interval' => [
          'shape' => 'Digits',
        ],
        'Resolution' => [
          'shape' => 'ThumbnailResolution',
        ],
        'AspectRatio' => [
          'shape' => 'AspectRatio',
        ],
        'MaxWidth' => [
          'shape' => 'DigitsOrAuto',
        ],
        'MaxHeight' => [
          'shape' => 'DigitsOrAuto',
        ],
        'SizingPolicy' => [
          'shape' => 'SizingPolicy',
        ],
        'PaddingPolicy' => [
          'shape' => 'PaddingPolicy',
        ],
      ],
    ],
    'Time' => [
      'type' => 'string',
      'pattern' => '(^\\d{1,5}(\\.\\d{0,3}]?$]|(^([0-1]?[0-9]:|2[0-3]:]?([0-5]?[0-9]:]?[0-5]?[0-9](\\.\\d{0,3}]?$]',
    ],
    'TimeOffset' => [
      'type' => 'string',
      'pattern' => '(^[+-]?\\d{1,5}(\\.\\d{0,3}]?$]|(^[+-]?([0-1]?[0-9]:|2[0-3]:]?([0-5]?[0-9]:]?[0-5]?[0-9](\\.\\d{0,3}]?$]',
    ],
    'TimeSpan' => [
      'type' => 'structure',
      'members' => [
        'StartTime' => [
          'shape' => 'Time',
        ],
        'Duration' => [
          'shape' => 'Time',
        ],
      ],
    ],
    'UpdatePipelineNotificationsRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'Notifications',
      ],
      'members' => [
        'Id' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'Notifications' => [
          'shape' => 'Notifications',
        ],
      ],
    ],
    'UpdatePipelineNotificationsResponse' => [
      'type' => 'structure',
      'members' => [
        'Pipeline' => [
          'shape' => 'Pipeline',
        ],
      ],
    ],
    'UpdatePipelineRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'Name' => [
          'shape' => 'Name',
        ],
        'InputBucket' => [
          'shape' => 'BucketName',
        ],
        'Role' => [
          'shape' => 'Role',
        ],
        'AwsKmsKeyArn' => [
          'shape' => 'KeyArn',
        ],
        'Notifications' => [
          'shape' => 'Notifications',
        ],
        'ContentConfig' => [
          'shape' => 'PipelineOutputConfig',
        ],
        'ThumbnailConfig' => [
          'shape' => 'PipelineOutputConfig',
        ],
      ],
    ],
    'UpdatePipelineResponse' => [
      'type' => 'structure',
      'members' => [
        'Pipeline' => [
          'shape' => 'Pipeline',
        ],
      ],
    ],
    'UpdatePipelineStatusRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'Status',
      ],
      'members' => [
        'Id' => [
          'shape' => 'Id',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'Status' => [
          'shape' => 'PipelineStatus',
        ],
      ],
    ],
    'UpdatePipelineStatusResponse' => [
      'type' => 'structure',
      'members' => [
        'Pipeline' => [
          'shape' => 'Pipeline',
        ],
      ],
    ],
    'UserMetadata' => [
      'type' => 'map',
      'key' => [
        'shape' => 'String',
      ],
      'value' => [
        'shape' => 'String',
      ],
    ],
    'ValidationException' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'VerticalAlign' => [
      'type' => 'string',
      'pattern' => '(^Top$]|(^Bottom$]|(^Center$]',
    ],
    'VideoBitRate' => [
      'type' => 'string',
      'pattern' => '(^\\d{2,5}$]|(^auto$]',
    ],
    'VideoCodec' => [
      'type' => 'string',
      'pattern' => '(^H\\.264$]|(^vp8$]',
    ],
    'VideoParameters' => [
      'type' => 'structure',
      'members' => [
        'Codec' => [
          'shape' => 'VideoCodec',
        ],
        'CodecOptions' => [
          'shape' => 'CodecOptions',
        ],
        'KeyframesMaxDist' => [
          'shape' => 'KeyframesMaxDist',
        ],
        'FixedGOP' => [
          'shape' => 'FixedGOP',
        ],
        'BitRate' => [
          'shape' => 'VideoBitRate',
        ],
        'FrameRate' => [
          'shape' => 'FrameRate',
        ],
        'MaxFrameRate' => [
          'shape' => 'MaxFrameRate',
        ],
        'Resolution' => [
          'shape' => 'Resolution',
        ],
        'AspectRatio' => [
          'shape' => 'AspectRatio',
        ],
        'MaxWidth' => [
          'shape' => 'DigitsOrAuto',
        ],
        'MaxHeight' => [
          'shape' => 'DigitsOrAuto',
        ],
        'DisplayAspectRatio' => [
          'shape' => 'AspectRatio',
        ],
        'SizingPolicy' => [
          'shape' => 'SizingPolicy',
        ],
        'PaddingPolicy' => [
          'shape' => 'PaddingPolicy',
        ],
        'Watermarks' => [
          'shape' => 'PresetWatermarks',
        ],
      ],
    ],
    'WatermarkKey' => [
      'type' => 'string',
      'min' => 1,
      'max' => 255,
      'pattern' => '(^.{1,}.jpg$]|(^.{1,}.jpeg$]|(^.{1,}.png$]',
    ],
    'WatermarkSizingPolicy' => [
      'type' => 'string',
      'pattern' => '(^Fit$]|(^Stretch$]|(^ShrinkToFit$]',
    ],
  ],
];
