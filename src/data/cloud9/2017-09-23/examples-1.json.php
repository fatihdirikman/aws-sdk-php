<?php
// This file was auto-generated from sdk-root/src/data/cloud9/2017-09-23/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'CreateEnvironmentEC2' => [ [ 'input' => [ 'name' => 'my-demo-environment', 'automaticStopTimeMinutes' => 60, 'description' => 'This is my demonstration environment.', 'instanceType' => 't2.micro', 'ownerArn' => 'arn:aws:iam::123456789012:user/MyDemoUser', 'subnetId' => 'subnet-6300cd1b', ], 'output' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'createenvironmentec2-1516821730547', 'title' => 'CreateEnvironmentEC2', ], ], 'CreateEnvironmentMembership' => [ [ 'input' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', 'permissions' => 'read-write', 'userArn' => 'arn:aws:iam::123456789012:user/AnotherDemoUser', ], 'output' => [ 'membership' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', 'permissions' => 'read-write', 'userArn' => 'arn:aws:iam::123456789012:user/AnotherDemoUser', 'userId' => 'AIDAJ3BA6O2FMJWCWXHEX', ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'createenvironmentmembership-1516822583452', 'title' => 'CreateEnvironmentMembership', ], ], 'DeleteEnvironment' => [ [ 'input' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', ], 'output' => [], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'deleteenvironment-1516822903149', 'title' => 'DeleteEnvironment', ], ], 'DeleteEnvironmentMembership' => [ [ 'input' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', 'userArn' => 'arn:aws:iam::123456789012:user/AnotherDemoUser', ], 'output' => [], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'deleteenvironmentmembership-1516822975655', 'title' => 'DeleteEnvironmentMembership', ], ], 'DescribeEnvironmentMemberships' => [ [ 'input' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', ], 'output' => [ 'memberships' => [ [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', 'permissions' => 'read-write', 'userArn' => 'arn:aws:iam::123456789012:user/AnotherDemoUser', 'userId' => 'AIDAJ3BA6O2FMJWCWXHEX', ], [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', 'permissions' => 'owner', 'userArn' => 'arn:aws:iam::123456789012:user/MyDemoUser', 'userId' => 'AIDAJNUEDQAQWFELJDLEX', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The following example gets information about all of the environment members for the specified &AWS; Cloud9 development environment.', 'id' => 'describeenvironmentmemberships1-1516823070453', 'title' => 'DescribeEnvironmentMemberships1', ], [ 'input' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', 'permissions' => [ 'owner', ], ], 'output' => [ 'memberships' => [ [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', 'permissions' => 'owner', 'userArn' => 'arn:aws:iam::123456789012:user/MyDemoUser', 'userId' => 'AIDAJNUEDQAQWFELJDLEX', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The following example gets information about the owner of the specified &AWS; Cloud9 development environment.', 'id' => 'describeenvironmentmemberships2-1516823191355', 'title' => 'DescribeEnvironmentMemberships2', ], [ 'input' => [ 'userArn' => 'arn:aws:iam::123456789012:user/MyDemoUser', ], 'output' => [ 'memberships' => [ [ 'environmentId' => '10a75714bd494714929e7f5ec4125aEX', 'lastAccess' => '2018-01-19T11:06:13Z', 'permissions' => 'owner', 'userArn' => 'arn:aws:iam::123456789012:user/MyDemoUser', 'userId' => 'AIDAJNUEDQAQWFELJDLEX', ], [ 'environmentId' => '12bfc3cd537f41cb9776f8af5525c9EX', 'lastAccess' => '2018-01-19T11:39:19Z', 'permissions' => 'owner', 'userArn' => 'arn:aws:iam::123456789012:user/MyDemoUser', 'userId' => 'AIDAJNUEDQAQWFELJDLEX', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The following example gets &AWS; Cloud9 development environment membership information for the specified user.', 'id' => 'describeenvironmentmemberships3-1516823268793', 'title' => 'DescribeEnvironmentMemberships3', ], ], 'DescribeEnvironmentStatus' => [ [ 'input' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', ], 'output' => [ 'message' => 'Environment is ready to use', 'status' => 'ready', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'describeenvironmentstatus-1516823462133', 'title' => 'DescribeEnvironmentStatus', ], ], 'DescribeEnvironments' => [ [ 'input' => [ 'environmentIds' => [ '8d9967e2f0624182b74e7690ad69ebEX', '349c86d4579e4e7298d500ff57a6b2EX', ], ], 'output' => [ 'environments' => [ [ 'name' => 'my-demo-environment', 'type' => 'ec2', 'arn' => 'arn:aws:cloud9:us-east-2:123456789012:environment:8d9967e2f0624182b74e7690ad69ebEX', 'description' => 'This is my demonstration environment.', 'id' => '8d9967e2f0624182b74e7690ad69ebEX', 'lifecycle' => [ 'status' => 'CREATED', ], 'ownerArn' => 'arn:aws:iam::123456789012:user/MyDemoUser', ], [ 'name' => 'another-demo-environment', 'type' => 'ssh', 'arn' => 'arn:aws:cloud9:us-east-2:123456789012:environment:349c86d4579e4e7298d500ff57a6b2EX', 'description' => '', 'id' => '349c86d4579e4e7298d500ff57a6b2EX', 'lifecycle' => [ 'status' => 'CREATED', ], 'ownerArn' => 'arn:aws:sts::123456789012:assumed-role/AnotherDemoUser/AnotherDemoUser', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'describeenvironments-1516823568291', 'title' => 'DescribeEnvironments', ], ], 'ListEnvironments' => [ [ 'input' => [], 'output' => [ 'environmentIds' => [ '349c86d4579e4e7298d500ff57a6b2EX', '45a3da47af0840f2b0c0824f5ee232EX', ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'listenvironments-1516823687205', 'title' => 'ListEnvironments', ], ], 'UpdateEnvironment' => [ [ 'input' => [ 'name' => 'my-changed-demo-environment', 'description' => 'This is my changed demonstration environment.', 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', ], 'output' => [], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'updateenvironment-1516823781910', 'title' => 'UpdateEnvironment', ], ], 'UpdateEnvironmentMembership' => [ [ 'input' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69ebEX', 'permissions' => 'read-only', 'userArn' => 'arn:aws:iam::123456789012:user/AnotherDemoUser', ], 'output' => [ 'membership' => [ 'environmentId' => '8d9967e2f0624182b74e7690ad69eb31', 'permissions' => 'read-only', 'userArn' => 'arn:aws:iam::123456789012:user/AnotherDemoUser', 'userId' => 'AIDAJ3BA6O2FMJWCWXHEX', ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'updateenvironmentmembership-1516823876645', 'title' => 'UpdateEnvironmentMembership', ], ], ],];
