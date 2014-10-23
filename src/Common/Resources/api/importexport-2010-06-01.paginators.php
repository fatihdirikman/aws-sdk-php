<?php return [
  'pagination' => [
    'ListJobs' => [
      'input_token' => 'Marker',
      'output_token' => 'Jobs[-1].JobId',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxJobs',
      'result_key' => 'Jobs',
    ],
  ],
];
