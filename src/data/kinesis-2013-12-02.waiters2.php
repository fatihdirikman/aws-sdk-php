<?php return [
  'version' => 2,
  'waiters' => [
    'StreamExists' => [
      'delay' => 10,
      'operation' => 'DescribeStream',
      'maxAttempts' => 18,
      'acceptors' => [
        [
          'expected' => 'ACTIVE',
          'matcher' => 'path',
          'state' => 'success',
          'argument' => 'StreamDescription.StreamStatus',
        ],
      ],
    ],
  ],
];
