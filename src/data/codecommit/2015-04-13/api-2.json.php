<?php return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-04-13', 'endpointPrefix' => 'codecommit', 'jsonVersion' => '1.1', 'serviceAbbreviation' => 'CodeCommit', 'serviceFullName' => 'AWS CodeCommit', 'signatureVersion' => 'v4', 'targetPrefix' => 'CodeCommit_20150413', 'protocol' => 'json', ], 'operations' => [ 'BatchGetRepositories' => [ 'name' => 'BatchGetRepositories', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchGetRepositoriesInput', ], 'output' => [ 'shape' => 'BatchGetRepositoriesOutput', ], 'errors' => [ [ 'shape' => 'RepositoryNamesRequiredException', 'exception' => true, ], [ 'shape' => 'MaximumRepositoryNamesExceededException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], [ 'shape' => 'EncryptionIntegrityChecksFailedException', 'exception' => true, 'fault' => true, ], [ 'shape' => 'EncryptionKeyAccessDeniedException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyDisabledException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyNotFoundException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyUnavailableException', 'exception' => true, ], ], ], 'CreateBranch' => [ 'name' => 'CreateBranch', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateBranchInput', ], 'errors' => [ [ 'shape' => 'RepositoryNameRequiredException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], [ 'shape' => 'RepositoryDoesNotExistException', 'exception' => true, ], [ 'shape' => 'BranchNameRequiredException', 'exception' => true, ], [ 'shape' => 'BranchNameExistsException', 'exception' => true, ], [ 'shape' => 'InvalidBranchNameException', 'exception' => true, ], [ 'shape' => 'CommitIdRequiredException', 'exception' => true, ], [ 'shape' => 'CommitDoesNotExistException', 'exception' => true, ], [ 'shape' => 'InvalidCommitIdException', 'exception' => true, ], [ 'shape' => 'EncryptionIntegrityChecksFailedException', 'exception' => true, 'fault' => true, ], [ 'shape' => 'EncryptionKeyAccessDeniedException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyDisabledException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyNotFoundException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyUnavailableException', 'exception' => true, ], ], ], 'CreateRepository' => [ 'name' => 'CreateRepository', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateRepositoryInput', ], 'output' => [ 'shape' => 'CreateRepositoryOutput', ], 'errors' => [ [ 'shape' => 'RepositoryNameExistsException', 'exception' => true, ], [ 'shape' => 'RepositoryNameRequiredException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryDescriptionException', 'exception' => true, ], [ 'shape' => 'RepositoryLimitExceededException', 'exception' => true, ], [ 'shape' => 'EncryptionIntegrityChecksFailedException', 'exception' => true, 'fault' => true, ], [ 'shape' => 'EncryptionKeyAccessDeniedException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyDisabledException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyNotFoundException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyUnavailableException', 'exception' => true, ], ], ], 'DeleteRepository' => [ 'name' => 'DeleteRepository', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteRepositoryInput', ], 'output' => [ 'shape' => 'DeleteRepositoryOutput', ], 'errors' => [ [ 'shape' => 'RepositoryNameRequiredException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], [ 'shape' => 'EncryptionIntegrityChecksFailedException', 'exception' => true, 'fault' => true, ], [ 'shape' => 'EncryptionKeyAccessDeniedException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyDisabledException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyNotFoundException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyUnavailableException', 'exception' => true, ], ], ], 'GetBranch' => [ 'name' => 'GetBranch', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetBranchInput', ], 'output' => [ 'shape' => 'GetBranchOutput', ], 'errors' => [ [ 'shape' => 'RepositoryNameRequiredException', 'exception' => true, ], [ 'shape' => 'RepositoryDoesNotExistException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], [ 'shape' => 'BranchNameRequiredException', 'exception' => true, ], [ 'shape' => 'InvalidBranchNameException', 'exception' => true, ], [ 'shape' => 'BranchDoesNotExistException', 'exception' => true, ], [ 'shape' => 'EncryptionIntegrityChecksFailedException', 'exception' => true, 'fault' => true, ], [ 'shape' => 'EncryptionKeyAccessDeniedException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyDisabledException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyNotFoundException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyUnavailableException', 'exception' => true, ], ], ], 'GetRepository' => [ 'name' => 'GetRepository', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetRepositoryInput', ], 'output' => [ 'shape' => 'GetRepositoryOutput', ], 'errors' => [ [ 'shape' => 'RepositoryNameRequiredException', 'exception' => true, ], [ 'shape' => 'RepositoryDoesNotExistException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], [ 'shape' => 'EncryptionIntegrityChecksFailedException', 'exception' => true, 'fault' => true, ], [ 'shape' => 'EncryptionKeyAccessDeniedException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyDisabledException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyNotFoundException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyUnavailableException', 'exception' => true, ], ], ], 'ListBranches' => [ 'name' => 'ListBranches', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListBranchesInput', ], 'output' => [ 'shape' => 'ListBranchesOutput', ], 'errors' => [ [ 'shape' => 'RepositoryNameRequiredException', 'exception' => true, ], [ 'shape' => 'RepositoryDoesNotExistException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], [ 'shape' => 'EncryptionIntegrityChecksFailedException', 'exception' => true, 'fault' => true, ], [ 'shape' => 'EncryptionKeyAccessDeniedException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyDisabledException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyNotFoundException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyUnavailableException', 'exception' => true, ], [ 'shape' => 'InvalidContinuationTokenException', 'exception' => true, ], ], ], 'ListRepositories' => [ 'name' => 'ListRepositories', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListRepositoriesInput', ], 'output' => [ 'shape' => 'ListRepositoriesOutput', ], 'errors' => [ [ 'shape' => 'InvalidSortByException', 'exception' => true, ], [ 'shape' => 'InvalidOrderException', 'exception' => true, ], [ 'shape' => 'InvalidContinuationTokenException', 'exception' => true, ], ], ], 'UpdateDefaultBranch' => [ 'name' => 'UpdateDefaultBranch', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateDefaultBranchInput', ], 'errors' => [ [ 'shape' => 'RepositoryNameRequiredException', 'exception' => true, ], [ 'shape' => 'RepositoryDoesNotExistException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], [ 'shape' => 'BranchNameRequiredException', 'exception' => true, ], [ 'shape' => 'InvalidBranchNameException', 'exception' => true, ], [ 'shape' => 'BranchDoesNotExistException', 'exception' => true, ], [ 'shape' => 'EncryptionIntegrityChecksFailedException', 'exception' => true, 'fault' => true, ], [ 'shape' => 'EncryptionKeyAccessDeniedException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyDisabledException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyNotFoundException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyUnavailableException', 'exception' => true, ], ], ], 'UpdateRepositoryDescription' => [ 'name' => 'UpdateRepositoryDescription', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateRepositoryDescriptionInput', ], 'errors' => [ [ 'shape' => 'RepositoryNameRequiredException', 'exception' => true, ], [ 'shape' => 'RepositoryDoesNotExistException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryDescriptionException', 'exception' => true, ], [ 'shape' => 'EncryptionIntegrityChecksFailedException', 'exception' => true, 'fault' => true, ], [ 'shape' => 'EncryptionKeyAccessDeniedException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyDisabledException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyNotFoundException', 'exception' => true, ], [ 'shape' => 'EncryptionKeyUnavailableException', 'exception' => true, ], ], ], 'UpdateRepositoryName' => [ 'name' => 'UpdateRepositoryName', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateRepositoryNameInput', ], 'errors' => [ [ 'shape' => 'RepositoryDoesNotExistException', 'exception' => true, ], [ 'shape' => 'RepositoryNameExistsException', 'exception' => true, ], [ 'shape' => 'RepositoryNameRequiredException', 'exception' => true, ], [ 'shape' => 'InvalidRepositoryNameException', 'exception' => true, ], ], ], ], 'shapes' => [ 'AccountId' => [ 'type' => 'string', ], 'Arn' => [ 'type' => 'string', ], 'BatchGetRepositoriesInput' => [ 'type' => 'structure', 'required' => [ 'repositoryNames', ], 'members' => [ 'repositoryNames' => [ 'shape' => 'RepositoryNameList', ], ], ], 'BatchGetRepositoriesOutput' => [ 'type' => 'structure', 'members' => [ 'repositories' => [ 'shape' => 'RepositoryMetadataList', ], 'repositoriesNotFound' => [ 'shape' => 'RepositoryNotFoundList', ], ], ], 'BranchDoesNotExistException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'BranchInfo' => [ 'type' => 'structure', 'members' => [ 'branchName' => [ 'shape' => 'BranchName', ], 'commitId' => [ 'shape' => 'CommitId', ], ], ], 'BranchName' => [ 'type' => 'string', 'min' => 1, 'max' => 100, ], 'BranchNameExistsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'BranchNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BranchName', ], ], 'BranchNameRequiredException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'CloneUrlHttp' => [ 'type' => 'string', ], 'CloneUrlSsh' => [ 'type' => 'string', ], 'CommitDoesNotExistException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'CommitId' => [ 'type' => 'string', ], 'CommitIdRequiredException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'CreateBranchInput' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'branchName', 'commitId', ], 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'branchName' => [ 'shape' => 'BranchName', ], 'commitId' => [ 'shape' => 'CommitId', ], ], ], 'CreateRepositoryInput' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'repositoryDescription' => [ 'shape' => 'RepositoryDescription', ], ], ], 'CreateRepositoryOutput' => [ 'type' => 'structure', 'members' => [ 'repositoryMetadata' => [ 'shape' => 'RepositoryMetadata', ], ], ], 'CreationDate' => [ 'type' => 'timestamp', ], 'DeleteRepositoryInput' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], ], ], 'DeleteRepositoryOutput' => [ 'type' => 'structure', 'members' => [ 'repositoryId' => [ 'shape' => 'RepositoryId', ], ], ], 'EncryptionIntegrityChecksFailedException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, 'fault' => true, ], 'EncryptionKeyAccessDeniedException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'EncryptionKeyDisabledException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'EncryptionKeyNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'EncryptionKeyUnavailableException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'GetBranchInput' => [ 'type' => 'structure', 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'branchName' => [ 'shape' => 'BranchName', ], ], ], 'GetBranchOutput' => [ 'type' => 'structure', 'members' => [ 'branch' => [ 'shape' => 'BranchInfo', ], ], ], 'GetRepositoryInput' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], ], ], 'GetRepositoryOutput' => [ 'type' => 'structure', 'members' => [ 'repositoryMetadata' => [ 'shape' => 'RepositoryMetadata', ], ], ], 'InvalidBranchNameException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidCommitIdException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidContinuationTokenException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidOrderException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidRepositoryDescriptionException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidRepositoryNameException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidSortByException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'LastModifiedDate' => [ 'type' => 'timestamp', ], 'ListBranchesInput' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListBranchesOutput' => [ 'type' => 'structure', 'members' => [ 'branches' => [ 'shape' => 'BranchNameList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListRepositoriesInput' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextToken', ], 'sortBy' => [ 'shape' => 'SortByEnum', ], 'order' => [ 'shape' => 'OrderEnum', ], ], ], 'ListRepositoriesOutput' => [ 'type' => 'structure', 'members' => [ 'repositories' => [ 'shape' => 'RepositoryNameIdPairList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaximumRepositoryNamesExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'NextToken' => [ 'type' => 'string', ], 'OrderEnum' => [ 'type' => 'string', 'enum' => [ 'ascending', 'descending', ], ], 'RepositoryDescription' => [ 'type' => 'string', 'max' => 1000, ], 'RepositoryDoesNotExistException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'RepositoryId' => [ 'type' => 'string', ], 'RepositoryLimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'RepositoryMetadata' => [ 'type' => 'structure', 'members' => [ 'accountId' => [ 'shape' => 'AccountId', ], 'repositoryId' => [ 'shape' => 'RepositoryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'repositoryDescription' => [ 'shape' => 'RepositoryDescription', ], 'defaultBranch' => [ 'shape' => 'BranchName', ], 'lastModifiedDate' => [ 'shape' => 'LastModifiedDate', ], 'creationDate' => [ 'shape' => 'CreationDate', ], 'cloneUrlHttp' => [ 'shape' => 'CloneUrlHttp', ], 'cloneUrlSsh' => [ 'shape' => 'CloneUrlSsh', ], 'Arn' => [ 'shape' => 'Arn', ], ], ], 'RepositoryMetadataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RepositoryMetadata', ], ], 'RepositoryName' => [ 'type' => 'string', 'min' => 1, 'max' => 100, 'pattern' => '[\\\\w\\\\.-]+', ], 'RepositoryNameExistsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'RepositoryNameIdPair' => [ 'type' => 'structure', 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'repositoryId' => [ 'shape' => 'RepositoryId', ], ], ], 'RepositoryNameIdPairList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RepositoryNameIdPair', ], ], 'RepositoryNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RepositoryName', ], ], 'RepositoryNameRequiredException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'RepositoryNamesRequiredException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'RepositoryNotFoundList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RepositoryName', ], ], 'SortByEnum' => [ 'type' => 'string', 'enum' => [ 'repositoryName', 'lastModifiedDate', ], ], 'UpdateDefaultBranchInput' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'defaultBranchName', ], 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'defaultBranchName' => [ 'shape' => 'BranchName', ], ], ], 'UpdateRepositoryDescriptionInput' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'repositoryDescription' => [ 'shape' => 'RepositoryDescription', ], ], ], 'UpdateRepositoryNameInput' => [ 'type' => 'structure', 'required' => [ 'oldName', 'newName', ], 'members' => [ 'oldName' => [ 'shape' => 'RepositoryName', ], 'newName' => [ 'shape' => 'RepositoryName', ], ], ], ],];
