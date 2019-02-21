<?php
// This file was auto-generated from sdk-root/src/data/codebuild/2016-10-06/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-10-06', 'endpointPrefix' => 'codebuild', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'AWS CodeBuild', 'serviceId' => 'CodeBuild', 'signatureVersion' => 'v4', 'targetPrefix' => 'CodeBuild_20161006', 'uid' => 'codebuild-2016-10-06', ], 'operations' => [ 'BatchDeleteBuilds' => [ 'name' => 'BatchDeleteBuilds', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchDeleteBuildsInput', ], 'output' => [ 'shape' => 'BatchDeleteBuildsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'BatchGetBuilds' => [ 'name' => 'BatchGetBuilds', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchGetBuildsInput', ], 'output' => [ 'shape' => 'BatchGetBuildsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'BatchGetProjects' => [ 'name' => 'BatchGetProjects', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchGetProjectsInput', ], 'output' => [ 'shape' => 'BatchGetProjectsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'CreateProject' => [ 'name' => 'CreateProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateProjectInput', ], 'output' => [ 'shape' => 'CreateProjectOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'AccountLimitExceededException', ], ], ], 'CreateWebhook' => [ 'name' => 'CreateWebhook', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateWebhookInput', ], 'output' => [ 'shape' => 'CreateWebhookOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'OAuthProviderException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DeleteProject' => [ 'name' => 'DeleteProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteProjectInput', ], 'output' => [ 'shape' => 'DeleteProjectOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'DeleteSourceCredentials' => [ 'name' => 'DeleteSourceCredentials', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteSourceCredentialsInput', ], 'output' => [ 'shape' => 'DeleteSourceCredentialsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DeleteWebhook' => [ 'name' => 'DeleteWebhook', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteWebhookInput', ], 'output' => [ 'shape' => 'DeleteWebhookOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'OAuthProviderException', ], ], ], 'ImportSourceCredentials' => [ 'name' => 'ImportSourceCredentials', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ImportSourceCredentialsInput', ], 'output' => [ 'shape' => 'ImportSourceCredentialsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'AccountLimitExceededException', ], ], ], 'InvalidateProjectCache' => [ 'name' => 'InvalidateProjectCache', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'InvalidateProjectCacheInput', ], 'output' => [ 'shape' => 'InvalidateProjectCacheOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListBuilds' => [ 'name' => 'ListBuilds', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListBuildsInput', ], 'output' => [ 'shape' => 'ListBuildsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'ListBuildsForProject' => [ 'name' => 'ListBuildsForProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListBuildsForProjectInput', ], 'output' => [ 'shape' => 'ListBuildsForProjectOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListCuratedEnvironmentImages' => [ 'name' => 'ListCuratedEnvironmentImages', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListCuratedEnvironmentImagesInput', ], 'output' => [ 'shape' => 'ListCuratedEnvironmentImagesOutput', ], ], 'ListProjects' => [ 'name' => 'ListProjects', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListProjectsInput', ], 'output' => [ 'shape' => 'ListProjectsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'ListSourceCredentials' => [ 'name' => 'ListSourceCredentials', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListSourceCredentialsInput', ], 'output' => [ 'shape' => 'ListSourceCredentialsOutput', ], ], 'StartBuild' => [ 'name' => 'StartBuild', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartBuildInput', ], 'output' => [ 'shape' => 'StartBuildOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccountLimitExceededException', ], ], ], 'StopBuild' => [ 'name' => 'StopBuild', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopBuildInput', ], 'output' => [ 'shape' => 'StopBuildOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UpdateProject' => [ 'name' => 'UpdateProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateProjectInput', ], 'output' => [ 'shape' => 'UpdateProjectOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UpdateWebhook' => [ 'name' => 'UpdateWebhook', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateWebhookInput', ], 'output' => [ 'shape' => 'UpdateWebhookOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'OAuthProviderException', ], ], ], ], 'shapes' => [ 'AccountLimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ArtifactNamespace' => [ 'type' => 'string', 'enum' => [ 'NONE', 'BUILD_ID', ], ], 'ArtifactPackaging' => [ 'type' => 'string', 'enum' => [ 'NONE', 'ZIP', ], ], 'ArtifactsType' => [ 'type' => 'string', 'enum' => [ 'CODEPIPELINE', 'S3', 'NO_ARTIFACTS', ], ], 'AuthType' => [ 'type' => 'string', 'enum' => [ 'OAUTH', 'BASIC_AUTH', 'PERSONAL_ACCESS_TOKEN', ], ], 'BatchDeleteBuildsInput' => [ 'type' => 'structure', 'required' => [ 'ids', ], 'members' => [ 'ids' => [ 'shape' => 'BuildIds', ], ], ], 'BatchDeleteBuildsOutput' => [ 'type' => 'structure', 'members' => [ 'buildsDeleted' => [ 'shape' => 'BuildIds', ], 'buildsNotDeleted' => [ 'shape' => 'BuildsNotDeleted', ], ], ], 'BatchGetBuildsInput' => [ 'type' => 'structure', 'required' => [ 'ids', ], 'members' => [ 'ids' => [ 'shape' => 'BuildIds', ], ], ], 'BatchGetBuildsOutput' => [ 'type' => 'structure', 'members' => [ 'builds' => [ 'shape' => 'Builds', ], 'buildsNotFound' => [ 'shape' => 'BuildIds', ], ], ], 'BatchGetProjectsInput' => [ 'type' => 'structure', 'required' => [ 'names', ], 'members' => [ 'names' => [ 'shape' => 'ProjectNames', ], ], ], 'BatchGetProjectsOutput' => [ 'type' => 'structure', 'members' => [ 'projects' => [ 'shape' => 'Projects', ], 'projectsNotFound' => [ 'shape' => 'ProjectNames', ], ], ], 'Boolean' => [ 'type' => 'boolean', ], 'Build' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'NonEmptyString', ], 'arn' => [ 'shape' => 'NonEmptyString', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'endTime' => [ 'shape' => 'Timestamp', ], 'currentPhase' => [ 'shape' => 'String', ], 'buildStatus' => [ 'shape' => 'StatusType', ], 'sourceVersion' => [ 'shape' => 'NonEmptyString', ], 'resolvedSourceVersion' => [ 'shape' => 'NonEmptyString', ], 'projectName' => [ 'shape' => 'NonEmptyString', ], 'phases' => [ 'shape' => 'BuildPhases', ], 'source' => [ 'shape' => 'ProjectSource', ], 'secondarySources' => [ 'shape' => 'ProjectSources', ], 'secondarySourceVersions' => [ 'shape' => 'ProjectSecondarySourceVersions', ], 'artifacts' => [ 'shape' => 'BuildArtifacts', ], 'secondaryArtifacts' => [ 'shape' => 'BuildArtifactsList', ], 'cache' => [ 'shape' => 'ProjectCache', ], 'environment' => [ 'shape' => 'ProjectEnvironment', ], 'serviceRole' => [ 'shape' => 'NonEmptyString', ], 'logs' => [ 'shape' => 'LogsLocation', ], 'timeoutInMinutes' => [ 'shape' => 'WrapperInt', ], 'queuedTimeoutInMinutes' => [ 'shape' => 'WrapperInt', ], 'buildComplete' => [ 'shape' => 'Boolean', ], 'initiator' => [ 'shape' => 'String', ], 'vpcConfig' => [ 'shape' => 'VpcConfig', ], 'networkInterface' => [ 'shape' => 'NetworkInterface', ], 'encryptionKey' => [ 'shape' => 'NonEmptyString', ], ], ], 'BuildArtifacts' => [ 'type' => 'structure', 'members' => [ 'location' => [ 'shape' => 'String', ], 'sha256sum' => [ 'shape' => 'String', ], 'md5sum' => [ 'shape' => 'String', ], 'overrideArtifactName' => [ 'shape' => 'WrapperBoolean', ], 'encryptionDisabled' => [ 'shape' => 'WrapperBoolean', ], 'artifactIdentifier' => [ 'shape' => 'String', ], ], ], 'BuildArtifactsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BuildArtifacts', ], 'max' => 12, 'min' => 0, ], 'BuildIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], 'max' => 100, 'min' => 1, ], 'BuildNotDeleted' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'NonEmptyString', ], 'statusCode' => [ 'shape' => 'String', ], ], ], 'BuildPhase' => [ 'type' => 'structure', 'members' => [ 'phaseType' => [ 'shape' => 'BuildPhaseType', ], 'phaseStatus' => [ 'shape' => 'StatusType', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'endTime' => [ 'shape' => 'Timestamp', ], 'durationInSeconds' => [ 'shape' => 'WrapperLong', ], 'contexts' => [ 'shape' => 'PhaseContexts', ], ], ], 'BuildPhaseType' => [ 'type' => 'string', 'enum' => [ 'SUBMITTED', 'QUEUED', 'PROVISIONING', 'DOWNLOAD_SOURCE', 'INSTALL', 'PRE_BUILD', 'BUILD', 'POST_BUILD', 'UPLOAD_ARTIFACTS', 'FINALIZING', 'COMPLETED', ], ], 'BuildPhases' => [ 'type' => 'list', 'member' => [ 'shape' => 'BuildPhase', ], ], 'Builds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Build', ], ], 'BuildsNotDeleted' => [ 'type' => 'list', 'member' => [ 'shape' => 'BuildNotDeleted', ], ], 'CacheMode' => [ 'type' => 'string', 'enum' => [ 'LOCAL_DOCKER_LAYER_CACHE', 'LOCAL_SOURCE_CACHE', 'LOCAL_CUSTOM_CACHE', ], ], 'CacheType' => [ 'type' => 'string', 'enum' => [ 'NO_CACHE', 'S3', 'LOCAL', ], ], 'CloudWatchLogsConfig' => [ 'type' => 'structure', 'required' => [ 'status', ], 'members' => [ 'status' => [ 'shape' => 'LogsConfigStatusType', ], 'groupName' => [ 'shape' => 'String', ], 'streamName' => [ 'shape' => 'String', ], ], ], 'ComputeType' => [ 'type' => 'string', 'enum' => [ 'BUILD_GENERAL1_SMALL', 'BUILD_GENERAL1_MEDIUM', 'BUILD_GENERAL1_LARGE', ], ], 'CreateProjectInput' => [ 'type' => 'structure', 'required' => [ 'name', 'source', 'artifacts', 'environment', 'serviceRole', ], 'members' => [ 'name' => [ 'shape' => 'ProjectName', ], 'description' => [ 'shape' => 'ProjectDescription', ], 'source' => [ 'shape' => 'ProjectSource', ], 'secondarySources' => [ 'shape' => 'ProjectSources', ], 'artifacts' => [ 'shape' => 'ProjectArtifacts', ], 'secondaryArtifacts' => [ 'shape' => 'ProjectArtifactsList', ], 'cache' => [ 'shape' => 'ProjectCache', ], 'environment' => [ 'shape' => 'ProjectEnvironment', ], 'serviceRole' => [ 'shape' => 'NonEmptyString', ], 'timeoutInMinutes' => [ 'shape' => 'TimeOut', ], 'queuedTimeoutInMinutes' => [ 'shape' => 'TimeOut', ], 'encryptionKey' => [ 'shape' => 'NonEmptyString', ], 'tags' => [ 'shape' => 'TagList', ], 'vpcConfig' => [ 'shape' => 'VpcConfig', ], 'badgeEnabled' => [ 'shape' => 'WrapperBoolean', ], 'logsConfig' => [ 'shape' => 'LogsConfig', ], ], ], 'CreateProjectOutput' => [ 'type' => 'structure', 'members' => [ 'project' => [ 'shape' => 'Project', ], ], ], 'CreateWebhookInput' => [ 'type' => 'structure', 'required' => [ 'projectName', ], 'members' => [ 'projectName' => [ 'shape' => 'ProjectName', ], 'branchFilter' => [ 'shape' => 'String', ], 'filterGroups' => [ 'shape' => 'FilterGroups', ], ], ], 'CreateWebhookOutput' => [ 'type' => 'structure', 'members' => [ 'webhook' => [ 'shape' => 'Webhook', ], ], ], 'CredentialProviderType' => [ 'type' => 'string', 'enum' => [ 'SECRETS_MANAGER', ], ], 'DeleteProjectInput' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'NonEmptyString', ], ], ], 'DeleteProjectOutput' => [ 'type' => 'structure', 'members' => [], ], 'DeleteSourceCredentialsInput' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'NonEmptyString', ], ], ], 'DeleteSourceCredentialsOutput' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'NonEmptyString', ], ], ], 'DeleteWebhookInput' => [ 'type' => 'structure', 'required' => [ 'projectName', ], 'members' => [ 'projectName' => [ 'shape' => 'ProjectName', ], ], ], 'DeleteWebhookOutput' => [ 'type' => 'structure', 'members' => [], ], 'EnvironmentImage' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'String', ], 'description' => [ 'shape' => 'String', ], 'versions' => [ 'shape' => 'ImageVersions', ], ], ], 'EnvironmentImages' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentImage', ], ], 'EnvironmentLanguage' => [ 'type' => 'structure', 'members' => [ 'language' => [ 'shape' => 'LanguageType', ], 'images' => [ 'shape' => 'EnvironmentImages', ], ], ], 'EnvironmentLanguages' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentLanguage', ], ], 'EnvironmentPlatform' => [ 'type' => 'structure', 'members' => [ 'platform' => [ 'shape' => 'PlatformType', ], 'languages' => [ 'shape' => 'EnvironmentLanguages', ], ], ], 'EnvironmentPlatforms' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentPlatform', ], ], 'EnvironmentType' => [ 'type' => 'string', 'enum' => [ 'WINDOWS_CONTAINER', 'LINUX_CONTAINER', ], ], 'EnvironmentVariable' => [ 'type' => 'structure', 'required' => [ 'name', 'value', ], 'members' => [ 'name' => [ 'shape' => 'NonEmptyString', ], 'value' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'EnvironmentVariableType', ], ], ], 'EnvironmentVariableType' => [ 'type' => 'string', 'enum' => [ 'PLAINTEXT', 'PARAMETER_STORE', ], ], 'EnvironmentVariables' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentVariable', ], ], 'FilterGroup' => [ 'type' => 'list', 'member' => [ 'shape' => 'WebhookFilter', ], ], 'FilterGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterGroup', ], ], 'GitCloneDepth' => [ 'type' => 'integer', 'min' => 0, ], 'ImagePullCredentialsType' => [ 'type' => 'string', 'enum' => [ 'CODEBUILD', 'SERVICE_ROLE', ], ], 'ImageVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'ImportSourceCredentialsInput' => [ 'type' => 'structure', 'required' => [ 'token', 'serverType', 'authType', ], 'members' => [ 'username' => [ 'shape' => 'NonEmptyString', ], 'token' => [ 'shape' => 'SensitiveNonEmptyString', ], 'serverType' => [ 'shape' => 'ServerType', ], 'authType' => [ 'shape' => 'AuthType', ], ], ], 'ImportSourceCredentialsOutput' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'NonEmptyString', ], ], ], 'InvalidInputException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidateProjectCacheInput' => [ 'type' => 'structure', 'required' => [ 'projectName', ], 'members' => [ 'projectName' => [ 'shape' => 'NonEmptyString', ], ], ], 'InvalidateProjectCacheOutput' => [ 'type' => 'structure', 'members' => [], ], 'KeyInput' => [ 'type' => 'string', 'max' => 127, 'min' => 1, 'pattern' => '^([\\\\p{L}\\\\p{Z}\\\\p{N}_.:/=@+\\\\-]*)$', ], 'LanguageType' => [ 'type' => 'string', 'enum' => [ 'JAVA', 'PYTHON', 'NODE_JS', 'RUBY', 'GOLANG', 'DOCKER', 'ANDROID', 'DOTNET', 'BASE', 'PHP', ], ], 'ListBuildsForProjectInput' => [ 'type' => 'structure', 'required' => [ 'projectName', ], 'members' => [ 'projectName' => [ 'shape' => 'NonEmptyString', ], 'sortOrder' => [ 'shape' => 'SortOrderType', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListBuildsForProjectOutput' => [ 'type' => 'structure', 'members' => [ 'ids' => [ 'shape' => 'BuildIds', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListBuildsInput' => [ 'type' => 'structure', 'members' => [ 'sortOrder' => [ 'shape' => 'SortOrderType', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListBuildsOutput' => [ 'type' => 'structure', 'members' => [ 'ids' => [ 'shape' => 'BuildIds', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListCuratedEnvironmentImagesInput' => [ 'type' => 'structure', 'members' => [], ], 'ListCuratedEnvironmentImagesOutput' => [ 'type' => 'structure', 'members' => [ 'platforms' => [ 'shape' => 'EnvironmentPlatforms', ], ], ], 'ListProjectsInput' => [ 'type' => 'structure', 'members' => [ 'sortBy' => [ 'shape' => 'ProjectSortByType', ], 'sortOrder' => [ 'shape' => 'SortOrderType', ], 'nextToken' => [ 'shape' => 'NonEmptyString', ], ], ], 'ListProjectsOutput' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'projects' => [ 'shape' => 'ProjectNames', ], ], ], 'ListSourceCredentialsInput' => [ 'type' => 'structure', 'members' => [], ], 'ListSourceCredentialsOutput' => [ 'type' => 'structure', 'members' => [ 'sourceCredentialsInfos' => [ 'shape' => 'SourceCredentialsInfos', ], ], ], 'LogsConfig' => [ 'type' => 'structure', 'members' => [ 'cloudWatchLogs' => [ 'shape' => 'CloudWatchLogsConfig', ], 's3Logs' => [ 'shape' => 'S3LogsConfig', ], ], ], 'LogsConfigStatusType' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'LogsLocation' => [ 'type' => 'structure', 'members' => [ 'groupName' => [ 'shape' => 'String', ], 'streamName' => [ 'shape' => 'String', ], 'deepLink' => [ 'shape' => 'String', ], 's3DeepLink' => [ 'shape' => 'String', ], 'cloudWatchLogs' => [ 'shape' => 'CloudWatchLogsConfig', ], 's3Logs' => [ 'shape' => 'S3LogsConfig', ], ], ], 'NetworkInterface' => [ 'type' => 'structure', 'members' => [ 'subnetId' => [ 'shape' => 'NonEmptyString', ], 'networkInterfaceId' => [ 'shape' => 'NonEmptyString', ], ], ], 'NonEmptyString' => [ 'type' => 'string', 'min' => 1, ], 'OAuthProviderException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'PhaseContext' => [ 'type' => 'structure', 'members' => [ 'statusCode' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], ], 'PhaseContexts' => [ 'type' => 'list', 'member' => [ 'shape' => 'PhaseContext', ], ], 'PlatformType' => [ 'type' => 'string', 'enum' => [ 'DEBIAN', 'AMAZON_LINUX', 'UBUNTU', 'WINDOWS_SERVER', ], ], 'Project' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'ProjectName', ], 'arn' => [ 'shape' => 'String', ], 'description' => [ 'shape' => 'ProjectDescription', ], 'source' => [ 'shape' => 'ProjectSource', ], 'secondarySources' => [ 'shape' => 'ProjectSources', ], 'artifacts' => [ 'shape' => 'ProjectArtifacts', ], 'secondaryArtifacts' => [ 'shape' => 'ProjectArtifactsList', ], 'cache' => [ 'shape' => 'ProjectCache', ], 'environment' => [ 'shape' => 'ProjectEnvironment', ], 'serviceRole' => [ 'shape' => 'NonEmptyString', ], 'timeoutInMinutes' => [ 'shape' => 'TimeOut', ], 'queuedTimeoutInMinutes' => [ 'shape' => 'TimeOut', ], 'encryptionKey' => [ 'shape' => 'NonEmptyString', ], 'tags' => [ 'shape' => 'TagList', ], 'created' => [ 'shape' => 'Timestamp', ], 'lastModified' => [ 'shape' => 'Timestamp', ], 'webhook' => [ 'shape' => 'Webhook', ], 'vpcConfig' => [ 'shape' => 'VpcConfig', ], 'badge' => [ 'shape' => 'ProjectBadge', ], 'logsConfig' => [ 'shape' => 'LogsConfig', ], ], ], 'ProjectArtifacts' => [ 'type' => 'structure', 'required' => [ 'type', ], 'members' => [ 'type' => [ 'shape' => 'ArtifactsType', ], 'location' => [ 'shape' => 'String', ], 'path' => [ 'shape' => 'String', ], 'namespaceType' => [ 'shape' => 'ArtifactNamespace', ], 'name' => [ 'shape' => 'String', ], 'packaging' => [ 'shape' => 'ArtifactPackaging', ], 'overrideArtifactName' => [ 'shape' => 'WrapperBoolean', ], 'encryptionDisabled' => [ 'shape' => 'WrapperBoolean', ], 'artifactIdentifier' => [ 'shape' => 'String', ], ], ], 'ProjectArtifactsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProjectArtifacts', ], 'max' => 12, 'min' => 0, ], 'ProjectBadge' => [ 'type' => 'structure', 'members' => [ 'badgeEnabled' => [ 'shape' => 'Boolean', ], 'badgeRequestUrl' => [ 'shape' => 'String', ], ], ], 'ProjectCache' => [ 'type' => 'structure', 'required' => [ 'type', ], 'members' => [ 'type' => [ 'shape' => 'CacheType', ], 'location' => [ 'shape' => 'String', ], 'modes' => [ 'shape' => 'ProjectCacheModes', ], ], ], 'ProjectCacheModes' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheMode', ], ], 'ProjectDescription' => [ 'type' => 'string', 'max' => 255, 'min' => 0, ], 'ProjectEnvironment' => [ 'type' => 'structure', 'required' => [ 'type', 'image', 'computeType', ], 'members' => [ 'type' => [ 'shape' => 'EnvironmentType', ], 'image' => [ 'shape' => 'NonEmptyString', ], 'computeType' => [ 'shape' => 'ComputeType', ], 'environmentVariables' => [ 'shape' => 'EnvironmentVariables', ], 'privilegedMode' => [ 'shape' => 'WrapperBoolean', ], 'certificate' => [ 'shape' => 'String', ], 'registryCredential' => [ 'shape' => 'RegistryCredential', ], 'imagePullCredentialsType' => [ 'shape' => 'ImagePullCredentialsType', ], ], ], 'ProjectName' => [ 'type' => 'string', 'max' => 255, 'min' => 2, 'pattern' => '[A-Za-z0-9][A-Za-z0-9\\-_]{1,254}', ], 'ProjectNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], 'max' => 100, 'min' => 1, ], 'ProjectSecondarySourceVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProjectSourceVersion', ], 'max' => 12, 'min' => 0, ], 'ProjectSortByType' => [ 'type' => 'string', 'enum' => [ 'NAME', 'CREATED_TIME', 'LAST_MODIFIED_TIME', ], ], 'ProjectSource' => [ 'type' => 'structure', 'required' => [ 'type', ], 'members' => [ 'type' => [ 'shape' => 'SourceType', ], 'location' => [ 'shape' => 'String', ], 'gitCloneDepth' => [ 'shape' => 'GitCloneDepth', ], 'buildspec' => [ 'shape' => 'String', ], 'auth' => [ 'shape' => 'SourceAuth', ], 'reportBuildStatus' => [ 'shape' => 'WrapperBoolean', ], 'insecureSsl' => [ 'shape' => 'WrapperBoolean', ], 'sourceIdentifier' => [ 'shape' => 'String', ], ], ], 'ProjectSourceVersion' => [ 'type' => 'structure', 'required' => [ 'sourceIdentifier', 'sourceVersion', ], 'members' => [ 'sourceIdentifier' => [ 'shape' => 'String', ], 'sourceVersion' => [ 'shape' => 'String', ], ], ], 'ProjectSources' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProjectSource', ], 'max' => 12, 'min' => 0, ], 'Projects' => [ 'type' => 'list', 'member' => [ 'shape' => 'Project', ], ], 'RegistryCredential' => [ 'type' => 'structure', 'required' => [ 'credential', 'credentialProvider', ], 'members' => [ 'credential' => [ 'shape' => 'NonEmptyString', ], 'credentialProvider' => [ 'shape' => 'CredentialProviderType', ], ], ], 'ResourceAlreadyExistsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'S3LogsConfig' => [ 'type' => 'structure', 'required' => [ 'status', ], 'members' => [ 'status' => [ 'shape' => 'LogsConfigStatusType', ], 'location' => [ 'shape' => 'String', ], ], ], 'SecurityGroupIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], 'max' => 5, ], 'SensitiveNonEmptyString' => [ 'type' => 'string', 'min' => 1, 'sensitive' => true, ], 'ServerType' => [ 'type' => 'string', 'enum' => [ 'GITHUB', 'BITBUCKET', 'GITHUB_ENTERPRISE', ], ], 'SortOrderType' => [ 'type' => 'string', 'enum' => [ 'ASCENDING', 'DESCENDING', ], ], 'SourceAuth' => [ 'type' => 'structure', 'required' => [ 'type', ], 'members' => [ 'type' => [ 'shape' => 'SourceAuthType', ], 'resource' => [ 'shape' => 'String', ], ], ], 'SourceAuthType' => [ 'type' => 'string', 'enum' => [ 'OAUTH', ], ], 'SourceCredentialsInfo' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'NonEmptyString', ], 'serverType' => [ 'shape' => 'ServerType', ], 'authType' => [ 'shape' => 'AuthType', ], ], ], 'SourceCredentialsInfos' => [ 'type' => 'list', 'member' => [ 'shape' => 'SourceCredentialsInfo', ], ], 'SourceType' => [ 'type' => 'string', 'enum' => [ 'CODECOMMIT', 'CODEPIPELINE', 'GITHUB', 'S3', 'BITBUCKET', 'GITHUB_ENTERPRISE', 'NO_SOURCE', ], ], 'StartBuildInput' => [ 'type' => 'structure', 'required' => [ 'projectName', ], 'members' => [ 'projectName' => [ 'shape' => 'NonEmptyString', ], 'secondarySourcesOverride' => [ 'shape' => 'ProjectSources', ], 'secondarySourcesVersionOverride' => [ 'shape' => 'ProjectSecondarySourceVersions', ], 'sourceVersion' => [ 'shape' => 'String', ], 'artifactsOverride' => [ 'shape' => 'ProjectArtifacts', ], 'secondaryArtifactsOverride' => [ 'shape' => 'ProjectArtifactsList', ], 'environmentVariablesOverride' => [ 'shape' => 'EnvironmentVariables', ], 'sourceTypeOverride' => [ 'shape' => 'SourceType', ], 'sourceLocationOverride' => [ 'shape' => 'String', ], 'sourceAuthOverride' => [ 'shape' => 'SourceAuth', ], 'gitCloneDepthOverride' => [ 'shape' => 'GitCloneDepth', ], 'buildspecOverride' => [ 'shape' => 'String', ], 'insecureSslOverride' => [ 'shape' => 'WrapperBoolean', ], 'reportBuildStatusOverride' => [ 'shape' => 'WrapperBoolean', ], 'environmentTypeOverride' => [ 'shape' => 'EnvironmentType', ], 'imageOverride' => [ 'shape' => 'NonEmptyString', ], 'computeTypeOverride' => [ 'shape' => 'ComputeType', ], 'certificateOverride' => [ 'shape' => 'String', ], 'cacheOverride' => [ 'shape' => 'ProjectCache', ], 'serviceRoleOverride' => [ 'shape' => 'NonEmptyString', ], 'privilegedModeOverride' => [ 'shape' => 'WrapperBoolean', ], 'timeoutInMinutesOverride' => [ 'shape' => 'TimeOut', ], 'queuedTimeoutInMinutesOverride' => [ 'shape' => 'TimeOut', ], 'idempotencyToken' => [ 'shape' => 'String', ], 'logsConfigOverride' => [ 'shape' => 'LogsConfig', ], 'registryCredentialOverride' => [ 'shape' => 'RegistryCredential', ], 'imagePullCredentialsTypeOverride' => [ 'shape' => 'ImagePullCredentialsType', ], ], ], 'StartBuildOutput' => [ 'type' => 'structure', 'members' => [ 'build' => [ 'shape' => 'Build', ], ], ], 'StatusType' => [ 'type' => 'string', 'enum' => [ 'SUCCEEDED', 'FAILED', 'FAULT', 'TIMED_OUT', 'IN_PROGRESS', 'STOPPED', ], ], 'StopBuildInput' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'NonEmptyString', ], ], ], 'StopBuildOutput' => [ 'type' => 'structure', 'members' => [ 'build' => [ 'shape' => 'Build', ], ], ], 'String' => [ 'type' => 'string', ], 'Subnets' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], 'max' => 16, ], 'Tag' => [ 'type' => 'structure', 'members' => [ 'key' => [ 'shape' => 'KeyInput', ], 'value' => [ 'shape' => 'ValueInput', ], ], ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 50, 'min' => 0, ], 'TimeOut' => [ 'type' => 'integer', 'max' => 480, 'min' => 5, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UpdateProjectInput' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'NonEmptyString', ], 'description' => [ 'shape' => 'ProjectDescription', ], 'source' => [ 'shape' => 'ProjectSource', ], 'secondarySources' => [ 'shape' => 'ProjectSources', ], 'artifacts' => [ 'shape' => 'ProjectArtifacts', ], 'secondaryArtifacts' => [ 'shape' => 'ProjectArtifactsList', ], 'cache' => [ 'shape' => 'ProjectCache', ], 'environment' => [ 'shape' => 'ProjectEnvironment', ], 'serviceRole' => [ 'shape' => 'NonEmptyString', ], 'timeoutInMinutes' => [ 'shape' => 'TimeOut', ], 'queuedTimeoutInMinutes' => [ 'shape' => 'TimeOut', ], 'encryptionKey' => [ 'shape' => 'NonEmptyString', ], 'tags' => [ 'shape' => 'TagList', ], 'vpcConfig' => [ 'shape' => 'VpcConfig', ], 'badgeEnabled' => [ 'shape' => 'WrapperBoolean', ], 'logsConfig' => [ 'shape' => 'LogsConfig', ], ], ], 'UpdateProjectOutput' => [ 'type' => 'structure', 'members' => [ 'project' => [ 'shape' => 'Project', ], ], ], 'UpdateWebhookInput' => [ 'type' => 'structure', 'required' => [ 'projectName', ], 'members' => [ 'projectName' => [ 'shape' => 'ProjectName', ], 'branchFilter' => [ 'shape' => 'String', ], 'rotateSecret' => [ 'shape' => 'Boolean', ], 'filterGroups' => [ 'shape' => 'FilterGroups', ], ], ], 'UpdateWebhookOutput' => [ 'type' => 'structure', 'members' => [ 'webhook' => [ 'shape' => 'Webhook', ], ], ], 'ValueInput' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^([\\\\p{L}\\\\p{Z}\\\\p{N}_.:/=@+\\\\-]*)$', ], 'VpcConfig' => [ 'type' => 'structure', 'members' => [ 'vpcId' => [ 'shape' => 'NonEmptyString', ], 'subnets' => [ 'shape' => 'Subnets', ], 'securityGroupIds' => [ 'shape' => 'SecurityGroupIds', ], ], ], 'Webhook' => [ 'type' => 'structure', 'members' => [ 'url' => [ 'shape' => 'NonEmptyString', ], 'payloadUrl' => [ 'shape' => 'NonEmptyString', ], 'secret' => [ 'shape' => 'NonEmptyString', ], 'branchFilter' => [ 'shape' => 'String', ], 'filterGroups' => [ 'shape' => 'FilterGroups', ], 'lastModifiedSecret' => [ 'shape' => 'Timestamp', ], ], ], 'WebhookFilter' => [ 'type' => 'structure', 'required' => [ 'type', 'pattern', ], 'members' => [ 'type' => [ 'shape' => 'WebhookFilterType', ], 'pattern' => [ 'shape' => 'String', ], 'excludeMatchedPattern' => [ 'shape' => 'WrapperBoolean', ], ], ], 'WebhookFilterType' => [ 'type' => 'string', 'enum' => [ 'EVENT', 'BASE_REF', 'HEAD_REF', 'ACTOR_ACCOUNT_ID', 'FILE_PATH', ], ], 'WrapperBoolean' => [ 'type' => 'boolean', ], 'WrapperInt' => [ 'type' => 'integer', ], 'WrapperLong' => [ 'type' => 'long', ], ],];
