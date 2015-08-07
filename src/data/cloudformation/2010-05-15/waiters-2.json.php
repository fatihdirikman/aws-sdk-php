<?php return [ 'version' => 2, 'waiters' => [ 'StackCreateComplete' => [ 'delay' => 30, 'operation' => 'DescribeStacks', 'maxAttempts' => 50, 'description' => 'Wait until stack status is CREATE_COMPLETE.', 'acceptors' => [ [ 'expected' => 'CREATE_COMPLETE', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Stacks[].StackStatus', ], [ 'expected' => 'CREATE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Stacks[].StackStatus', ], ], ], 'StackDeleteComplete' => [ 'delay' => 30, 'operation' => 'DescribeStacks', 'maxAttempts' => 25, 'description' => 'Wait until stack status is DELETE_COMPLETE.', 'acceptors' => [ [ 'expected' => 'DELETE_COMPLETE', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Stacks[].StackStatus', ], [ 'expected' => 'ValidationError', 'matcher' => 'error', 'state' => 'success', ], [ 'expected' => 'DELETE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Stacks[].StackStatus', ], ], ], 'StackUpdateComplete' => [ 'delay' => 30, 'operation' => 'DescribeStacks', 'maxAttempts' => 5, 'description' => 'Wait until stack status is UPDATE_COMPLETE.', 'acceptors' => [ [ 'expected' => 'UPDATE_COMPLETE', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Stacks[].StackStatus', ], [ 'expected' => 'UPDATE_FAILED', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Stacks[].StackStatus', ], ], ], ],];
