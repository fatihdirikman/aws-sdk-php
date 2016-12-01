<?php
// This file was auto-generated from sdk-root/src/data/codebuild/2016-10-06/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>AWS CodeBuild</fullname> <p>AWS CodeBuild is a fully-managed build service in the cloud. AWS CodeBuild compiles your source code, runs unit tests, and produces artifacts that are ready to deploy. AWS CodeBuild eliminates the need to provision, manage, and scale your own build servers. It provides prepackaged build environments for the most popular programming languages and build tools such as Apach Maven, Gradle, and more. You can also fully customize build environments in AWS CodeBuild to use your own build tools. AWS CodeBuild scales automatically to meet peak build requests, and you pay only for the build time you consume. For more information about AWS CodeBuild, see the <i>AWS CodeBuild User Guide</i>.</p> <p>AWS CodeBuild supports these operations:</p> <ul> <li> <p> <code>BatchGetProjects</code>: Gets information about one or more build projects. A <i>build project</i> defines how AWS CodeBuild will run a build. This includes information such as where to get the source code to build, the build environment to use, the build commands to run, and where to store the build output. A <i>build environment</i> represents a combination of operating system, programming language runtime, and tools that AWS CodeBuild will use to run a build. Also, you can add tags to build projects to help manage your resources and costs.</p> </li> <li> <p> <code>CreateProject</code>: Creates a build project.</p> </li> <li> <p> <code>DeleteProject</code>: Deletes a build project.</p> </li> <li> <p> <code>ListProjects</code>: Gets a list of build project names, with each build project name representing a single build project.</p> </li> <li> <p> <code>UpdateProject</code>: Changes the settings of an existing build project.</p> </li> <li> <p> <code>BatchGetBuilds</code>: Gets information about one or more builds.</p> </li> <li> <p> <code>ListBuilds</code>: Gets a list of build IDs, with each build ID representing a single build.</p> </li> <li> <p> <code>ListBuildsForProject</code>: Gets a list of build IDs for the specified build project, with each build ID representing a single build.</p> </li> <li> <p> <code>StartBuild</code>: Starts running a build.</p> </li> <li> <p> <code>StopBuild</code>: Attempts to stop running a build.</p> </li> <li> <p> <code>ListCuratedEnvironmentImages</code>: Gets information about Docker images that are managed by AWS CodeBuild.</p> </li> </ul>', 'operations' => [ 'BatchGetBuilds' => '<p>Gets information about one or more builds.</p>', 'BatchGetProjects' => '<p>Gets information about one or more build projects.</p>', 'CreateProject' => '<p>Creates a build project.</p>', 'DeleteProject' => '<p>Deletes a build project.</p>', 'ListBuilds' => '<p>Gets a list of build IDs, with each build ID representing a single build.</p>', 'ListBuildsForProject' => '<p>Gets a list of build IDs for the specified build project, with each build ID representing a single build.</p>', 'ListCuratedEnvironmentImages' => '<p>Gets information about Docker images that are managed by AWS CodeBuild.</p>', 'ListProjects' => '<p>Gets a list of build project names, with each build project name representing a single build project.</p>', 'StartBuild' => '<p>Starts running a build.</p>', 'StopBuild' => '<p>Attempts to stop running a build.</p> <note> <p>Completed builds cannot be stopped.</p> </note>', 'UpdateProject' => '<p>Changes the settings of an existing build project.</p>', ], 'shapes' => [ 'AccountLimitExceededException' => [ 'base' => '<p>An AWS service limit was exceeded for the calling AWS account.</p>', 'refs' => [], ], 'ArtifactNamespace' => [ 'base' => NULL, 'refs' => [ 'ProjectArtifacts$namespaceType' => '<p>Along with <code>path</code> and <code>name</code>, the pattern that AWS CodeBuild will use to determine the name and location to store the output artifact, as follows:</p> <ul> <li> <p>If <code>type</code> is set to <code>CODEPIPELINE</code>, then AWS CodePipeline will ignore this value if specified. This is because AWS CodePipeline manages its build output names instead of AWS CodeBuild.</p> </li> <li> <p>If <code>type</code> is set to <code>NO_ARTIFACTS</code>, then this value will be ignored if specified, because no build output will be produced.</p> </li> <li> <p>If <code>type</code> is set to <code>S3</code>, then valid values include:</p> <ul> <li> <p> <code>BUILD_ID</code>: Include the build ID in the location of the build output artifact.</p> </li> <li> <p> <code>NONE</code>: Do not include the build ID. This is the default if <code>namespaceType</code> is not specified.</p> </li> </ul> </li> </ul> <p>For example, if <code>path</code> is set to <code>MyArtifacts</code>, <code>namespaceType</code> is set to <code>BUILD_ID</code>, and <code>name</code> is set to <code>MyArtifact.zip</code>, then the output artifact would be stored in <code>MyArtifacts/<i>build-ID</i>/MyArtifact.zip</code>.</p>', ], ], 'ArtifactPackaging' => [ 'base' => NULL, 'refs' => [ 'ProjectArtifacts$packaging' => '<p>The type of build output artifact to create, as follows:</p> <ul> <li> <p>If <code>type</code> is set to <code>CODEPIPELINE</code>, then AWS CodePipeline will ignore this value if specified. This is because AWS CodePipeline manages its build output artifacts instead of AWS CodeBuild.</p> </li> <li> <p>If <code>type</code> is set to <code>NO_ARTIFACTS</code>, then this value will be ignored if specified, because no build output will be produced.</p> </li> <li> <p>If <code>type</code> is set to <code>S3</code>, valid values include:</p> <ul> <li> <p> <code>NONE</code>: AWS CodeBuild will create in the output bucket a folder containing the build output. This is the default if <code>packaging</code> is not specified.</p> </li> <li> <p> <code>ZIP</code>: AWS CodeBuild will create in the output bucket a ZIP file containing the build output.</p> </li> </ul> </li> </ul>', ], ], 'ArtifactsType' => [ 'base' => NULL, 'refs' => [ 'ProjectArtifacts$type' => '<p>The build output artifact\'s type. Valid values include:</p> <ul> <li> <p> <code>CODEPIPELINE</code>: The build project with have build output generated through AWS CodePipeline.</p> </li> <li> <p> <code>NO_ARTIFACTS</code>: The build project will not produce any build output.</p> </li> <li> <p> <code>S3</code>: The build project will store build output in Amazon Simple Storage Service (Amazon S3).</p> </li> </ul>', ], ], 'BatchGetBuildsInput' => [ 'base' => NULL, 'refs' => [], ], 'BatchGetBuildsOutput' => [ 'base' => NULL, 'refs' => [], ], 'BatchGetProjectsInput' => [ 'base' => NULL, 'refs' => [], ], 'BatchGetProjectsOutput' => [ 'base' => NULL, 'refs' => [], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'Build$buildComplete' => '<p>Whether the build has finished. Valid values include true if completed; otherwise, false.</p>', ], ], 'Build' => [ 'base' => '<p>Information about a build.</p>', 'refs' => [ 'Builds$member' => NULL, 'StartBuildOutput$build' => '<p>Information about the build to be run.</p>', 'StopBuildOutput$build' => '<p>Information about the build that was attempted to be stopped.</p>', ], ], 'BuildArtifacts' => [ 'base' => '<p>Information about build output artifacts.</p>', 'refs' => [ 'Build$artifacts' => '<p>Information about the build\'s output artifacts.</p>', ], ], 'BuildIds' => [ 'base' => NULL, 'refs' => [ 'BatchGetBuildsInput$ids' => '<p>The IDs of the builds to get information about.</p>', 'BatchGetBuildsOutput$buildsNotFound' => '<p>The IDs of builds for which information could not be found.</p>', 'ListBuildsForProjectOutput$ids' => '<p>A list of build IDs for the specified build project, with each build ID representing a single build.</p>', 'ListBuildsOutput$ids' => '<p>A list of build IDs, with each build ID representing a single build.</p>', ], ], 'BuildPhase' => [ 'base' => '<p>Information about a stage for a build.</p>', 'refs' => [ 'BuildPhases$member' => NULL, ], ], 'BuildPhaseType' => [ 'base' => NULL, 'refs' => [ 'BuildPhase$phaseType' => '<p>The build phase\'s name. Valid values include:</p> <ul> <li> <p> <code>BUILD</code>: Core build activities typically occur in this build phase.</p> </li> <li> <p> <code>COMPLETED</code>: The build has completed.</p> </li> <li> <p> <code>DOWNLOAD_SOURCE</code>: Source code is being downloaded in this build phase.</p> </li> <li> <p> <code>FINALIZING</code>: The build process is completing in this build phase.</p> </li> <li> <p> <code>INSTALL</code>: Installation activities typically occur in this build phase.</p> </li> <li> <p> <code>POST_BUILD</code>: Post-build activities typically occur in this build phase.</p> </li> <li> <p> <code>PRE_BUILD</code>: Pre-build activities typically occur in this build phase.</p> </li> <li> <p> <code>PROVISIONING</code>: The build environment is being set up.</p> </li> <li> <p> <code>SUBMITTED</code>: The build has been submitted.</p> </li> <li> <p> <code>UPLOAD_ARTIFACTS</code>: Build output artifacts are being uploaded to output location.</p> </li> </ul>', ], ], 'BuildPhases' => [ 'base' => NULL, 'refs' => [ 'Build$phases' => '<p>Information about all previous build phases that have completed, and information about any current build phase that has not yet completed.</p>', ], ], 'Builds' => [ 'base' => NULL, 'refs' => [ 'BatchGetBuildsOutput$builds' => '<p>Information about the requested builds.</p>', ], ], 'ComputeType' => [ 'base' => NULL, 'refs' => [ 'ProjectEnvironment$computeType' => '<p>Information about the compute resources the build project will use. Available values include:</p> <ul> <li> <p> <code>BUILD_GENERAL1_SMALL</code>: Use up to 3 GB memory and 2 vCPUs for builds.</p> </li> <li> <p> <code>BUILD_GENERAL1_MEDIUM</code>: Use up to 7 GB memory and 4 vCPUs for builds.</p> </li> <li> <p> <code>BUILD_GENERAL1_LARGE</code>: Use up to 15 GB memory and 8 vCPUs for builds.</p> </li> </ul>', ], ], 'CreateProjectInput' => [ 'base' => NULL, 'refs' => [], ], 'CreateProjectOutput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteProjectInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteProjectOutput' => [ 'base' => NULL, 'refs' => [], ], 'EnvironmentImage' => [ 'base' => '<p>Information about a Docker image that is managed by AWS CodeBuild.</p>', 'refs' => [ 'EnvironmentImages$member' => NULL, ], ], 'EnvironmentImages' => [ 'base' => NULL, 'refs' => [ 'EnvironmentLanguage$images' => '<p>The list of Docker images that are related by the specified programming language.</p>', ], ], 'EnvironmentLanguage' => [ 'base' => '<p>A set of Docker images that are related by programming language and are managed by AWS CodeBuild.</p>', 'refs' => [ 'EnvironmentLanguages$member' => NULL, ], ], 'EnvironmentLanguages' => [ 'base' => NULL, 'refs' => [ 'EnvironmentPlatform$languages' => '<p>The list of programming languages that are available for the specified platform.</p>', ], ], 'EnvironmentPlatform' => [ 'base' => '<p>A set of Docker images that are related by platform and are managed by AWS CodeBuild.</p>', 'refs' => [ 'EnvironmentPlatforms$member' => NULL, ], ], 'EnvironmentPlatforms' => [ 'base' => NULL, 'refs' => [ 'ListCuratedEnvironmentImagesOutput$platforms' => '<p>Information about supported platforms for Docker images that are managed by AWS CodeBuild.</p>', ], ], 'EnvironmentType' => [ 'base' => NULL, 'refs' => [ 'ProjectEnvironment$type' => '<p>The type of build environment to use for related builds.</p> <p>The only valid value is <code>LINUX_CONTAINER</code>, which represents a Linux-based build environment.</p>', ], ], 'EnvironmentVariable' => [ 'base' => '<p>Information about an environment variable for a build project or a build.</p>', 'refs' => [ 'EnvironmentVariables$member' => NULL, ], ], 'EnvironmentVariables' => [ 'base' => NULL, 'refs' => [ 'ProjectEnvironment$environmentVariables' => '<p>A set of environment variables to make available to builds for this build project.</p>', 'StartBuildInput$environmentVariablesOverride' => '<p>A set of environment variables that overrides, for this build only, the latest ones already defined in the corresponding build project.</p>', ], ], 'InvalidInputException' => [ 'base' => '<p>The input value that was provided is not valid.</p>', 'refs' => [], ], 'KeyInput' => [ 'base' => NULL, 'refs' => [ 'Tag$key' => '<p>The tag\'s key.</p>', ], ], 'LanguageType' => [ 'base' => NULL, 'refs' => [ 'EnvironmentLanguage$language' => '<p>The programming language for the related set of Docker images.</p>', ], ], 'ListBuildsForProjectInput' => [ 'base' => NULL, 'refs' => [], ], 'ListBuildsForProjectOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListBuildsInput' => [ 'base' => NULL, 'refs' => [], ], 'ListBuildsOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListCuratedEnvironmentImagesInput' => [ 'base' => NULL, 'refs' => [], ], 'ListCuratedEnvironmentImagesOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListProjectsInput' => [ 'base' => NULL, 'refs' => [], ], 'ListProjectsOutput' => [ 'base' => NULL, 'refs' => [], ], 'LogsLocation' => [ 'base' => '<p>Information about build logs in Amazon CloudWatch Logs.</p>', 'refs' => [ 'Build$logs' => '<p>Information about the build\'s logs in Amazon CloudWatch Logs.</p>', ], ], 'NonEmptyString' => [ 'base' => NULL, 'refs' => [ 'Build$id' => '<p>The build\'s unique ID.</p>', 'Build$arn' => '<p>The build\'s Amazon Resource Name (ARN).</p>', 'Build$sourceVersion' => '<p>Any version identifier for the version of the source code to be built.</p>', 'Build$projectName' => '<p>The build project\'s name.</p>', 'BuildIds$member' => NULL, 'CreateProjectInput$serviceRole' => '<p>The Amazon Resource Name (ARN) of the AWS Identity and Access Management (IAM) role that enables AWS CodeBuild to interact with dependent AWS services on behalf of the AWS account.</p>', 'CreateProjectInput$encryptionKey' => '<p>The AWS Key Management Service (AWS KMS) customer master key (CMK) to be used for encrypting the build project\'s build output artifacts.</p> <p>You can specify either the CMK\'s Amazon Resource Name (ARN) or, if available, the CMK\'s alias (using the format <code>alias/<i>alias-name</i> </code>).</p>', 'DeleteProjectInput$name' => '<p>The name of the build project to delete.</p>', 'EnvironmentVariable$name' => '<p>The environment variable\'s name or key.</p>', 'ListBuildsForProjectInput$projectName' => '<p>The name of the build project to get a list of build IDs for.</p>', 'ListProjectsInput$nextToken' => '<p>During a previous call, if there are more than 100 items in the list, only the first 100 items are returned, along with a unique string called a <i>next token</i>. To get the next batch of items in the list, call this operation again, adding the next token to the call. To get all of the items in the list, keep calling this operation with each subsequent next token that is returned, until no more next tokens are returned.</p>', 'Project$serviceRole' => '<p>The Amazon Resource Name (ARN) of the AWS Identity and Access Management (IAM) role that enables AWS CodeBuild to interact with dependent AWS services on behalf of the AWS account.</p>', 'Project$encryptionKey' => '<p>The AWS Key Management Service (AWS KMS) customer master key (CMK) to be used for encrypting the build project\'s build output artifacts.</p> <p>This is expressed either as the CMK\'s Amazon Resource Name (ARN) or, if specified, the CMK\'s alias (using the format <code>alias/<i>alias-name</i> </code>).</p>', 'ProjectEnvironment$image' => '<p>The ID of the Docker image to use for this build project.</p>', 'ProjectNames$member' => NULL, 'StartBuildInput$projectName' => '<p>The name of the build project to start running a build.</p>', 'StopBuildInput$id' => '<p>The ID of the build to attempt to stop running.</p>', 'UpdateProjectInput$name' => '<p>The name of the existing build project to change settings.</p> <note> <p>You cannot change an existing build project\'s name.</p> </note>', 'UpdateProjectInput$serviceRole' => '<p>The replacement Amazon Resource Name (ARN) of the AWS Identity and Access Management (IAM) role that enables AWS CodeBuild to interact with dependent AWS services on behalf of the AWS account.</p>', 'UpdateProjectInput$encryptionKey' => '<p>The replacement AWS Key Management Service (AWS KMS) customer master key (CMK) to be used for encrypting the build project\'s build output artifacts.</p> <p>You can specify either the CMK\'s Amazon Resource Name (ARN) or, if available, the CMK\'s alias (using the format <code>alias/<i>alias-name</i> </code>).</p>', ], ], 'PhaseContext' => [ 'base' => '<p>Additional information about a build phase that has an error, which you can use to help troubleshoot a failed build.</p>', 'refs' => [ 'PhaseContexts$member' => NULL, ], ], 'PhaseContexts' => [ 'base' => NULL, 'refs' => [ 'BuildPhase$contexts' => '<p>Additional information about a build phase, especially to help troubleshoot a failed build.</p>', ], ], 'PlatformType' => [ 'base' => NULL, 'refs' => [ 'EnvironmentPlatform$platform' => '<p>The platform\'s name.</p>', ], ], 'Project' => [ 'base' => '<p>Information about a build project.</p>', 'refs' => [ 'CreateProjectOutput$project' => '<p>Information about the build project that was created.</p>', 'Projects$member' => NULL, 'UpdateProjectOutput$project' => '<p>Information about the build project that was changed.</p>', ], ], 'ProjectArtifacts' => [ 'base' => '<p>Information about the build project\'s build output artifacts.</p>', 'refs' => [ 'CreateProjectInput$artifacts' => '<p>Information about the build project\'s build output artifacts.</p>', 'Project$artifacts' => '<p>Information about the build project\'s build output artifacts.</p>', 'StartBuildInput$artifactsOverride' => '<p>Build output artifact settings that override, for this build only, the latest ones already defined in the corresponding build project.</p>', 'UpdateProjectInput$artifacts' => '<p>Information to be changed about the build project\'s build output artifacts.</p>', ], ], 'ProjectDescription' => [ 'base' => NULL, 'refs' => [ 'CreateProjectInput$description' => '<p>A meaningful description of the build project.</p>', 'Project$description' => '<p>A meaningful description of the build project.</p>', 'UpdateProjectInput$description' => '<p>A new or replacement description of the build project.</p>', ], ], 'ProjectEnvironment' => [ 'base' => '<p>Information about the build project\'s build environment.</p>', 'refs' => [ 'Build$environment' => '<p>Information about the build environment for this build.</p>', 'CreateProjectInput$environment' => '<p>Information about the build project\'s build environment.</p>', 'Project$environment' => '<p>Information about the build environment for this build project.</p>', 'UpdateProjectInput$environment' => '<p>Information to be changed about the build project\'s build environment.</p>', ], ], 'ProjectName' => [ 'base' => NULL, 'refs' => [ 'CreateProjectInput$name' => '<p>The build project\'s name.</p>', 'Project$name' => '<p>The build project\'s name.</p>', ], ], 'ProjectNames' => [ 'base' => NULL, 'refs' => [ 'BatchGetProjectsInput$names' => '<p>The names of the build projects to get information about.</p>', 'BatchGetProjectsOutput$projectsNotFound' => '<p>The names of build projects for which information could not be found.</p>', 'ListProjectsOutput$projects' => '<p>The list of build project names, with each build project name representing a single build project.</p>', ], ], 'ProjectSortByType' => [ 'base' => NULL, 'refs' => [ 'ListProjectsInput$sortBy' => '<p>The criterion to be used to list build project names. Valid values include:</p> <ul> <li> <p> <code>CREATED_TIME</code>: List the build project names based on when each build project was created.</p> </li> <li> <p> <code>LAST_MODIFIED_TIME</code>: List the build project names based on when information about each build project was last changed.</p> </li> <li> <p> <code>NAME</code>: List the build project names based on each build project\'s name.</p> </li> </ul> <p>Use <code>sortOrder</code> to specify in what order to list the build project names based on the preceding criteria.</p>', ], ], 'ProjectSource' => [ 'base' => '<p>Information about the build project\'s build input source code.</p>', 'refs' => [ 'Build$source' => '<p>Information about the source code to be built.</p>', 'CreateProjectInput$source' => '<p>Information about the build project\'s build input source code.</p>', 'Project$source' => '<p>Information about the build project\'s build input source code.</p>', 'UpdateProjectInput$source' => '<p>Information to be changed about the build project\'s build input source code.</p>', ], ], 'Projects' => [ 'base' => NULL, 'refs' => [ 'BatchGetProjectsOutput$projects' => '<p>Information about the requested build projects.</p>', ], ], 'ResourceAlreadyExistsException' => [ 'base' => '<p>The specified AWS resource cannot be created, because an AWS resource with the same settings already exists.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified AWS resource cannot be found.</p>', 'refs' => [], ], 'SortOrderType' => [ 'base' => NULL, 'refs' => [ 'ListBuildsForProjectInput$sortOrder' => '<p>The order to list build IDs. Valid values include:</p> <ul> <li> <p> <code>ASCENDING</code>: List the build IDs in ascending order by build ID.</p> </li> <li> <p> <code>DESCENDING</code>: List the build IDs in descending order by build ID.</p> </li> </ul>', 'ListBuildsInput$sortOrder' => '<p>The order to list build IDs. Valid values include:</p> <ul> <li> <p> <code>ASCENDING</code>: List the build IDs in ascending order by build ID.</p> </li> <li> <p> <code>DESCENDING</code>: List the build IDs in descending order by build ID.</p> </li> </ul>', 'ListProjectsInput$sortOrder' => '<p>The order in which to list build projects. Valid values include:</p> <ul> <li> <p> <code>ASCENDING</code>: List the build project names in ascending order.</p> </li> <li> <p> <code>DESCENDING</code>: List the build project names in descending order.</p> </li> </ul> <p>Use <code>sortBy</code> to specify the criterion to be used to list build project names.</p>', ], ], 'SourceAuth' => [ 'base' => '<p>Information about the authorization settings for AWS CodeBuild to access the source code to be built.</p> <p>This information is only for the AWS CodeBuild console\'s use. Your code should not get or set this information directly.</p>', 'refs' => [ 'ProjectSource$auth' => '<p>Information about the authorization settings for AWS CodeBuild to access the source code to be built.</p> <p>This information is only for the AWS CodeBuild console\'s use. Your code should not get or set this information directly.</p>', ], ], 'SourceAuthType' => [ 'base' => NULL, 'refs' => [ 'SourceAuth$type' => '<p>The authorization type to use. The only valid value is <code>OAUTH</code>, which represents the OAuth authorization type.</p>', ], ], 'SourceType' => [ 'base' => NULL, 'refs' => [ 'ProjectSource$type' => '<p>The type of repository that contains the source code to be built. Valid values include:</p> <ul> <li> <p> <code>CODECOMMIT</code>: The source code is in an AWS CodeCommit repository.</p> </li> <li> <p> <code>CODEPIPELINE</code>: The source code settings are specified in the source action of a pipeline in AWS CodePipeline.</p> </li> <li> <p> <code>GITHUB</code>: The source code is in a GitHub repository.</p> </li> <li> <p> <code>S3</code>: The source code is in an Amazon Simple Storage Service (Amazon S3) input bucket.</p> </li> </ul>', ], ], 'StartBuildInput' => [ 'base' => NULL, 'refs' => [], ], 'StartBuildOutput' => [ 'base' => NULL, 'refs' => [], ], 'StatusType' => [ 'base' => NULL, 'refs' => [ 'Build$buildStatus' => '<p>The build\'s current status. Valid values include:</p> <ul> <li> <p> <code>FAILED</code>: The build failed.</p> </li> <li> <p> <code>FAULT</code>: The build faulted.</p> </li> <li> <p> <code>IN_PROGRESS</code>: The build is still in progress.</p> </li> <li> <p> <code>STOPPED</code>: The build stopped.</p> </li> <li> <p> <code>SUCCEEDED</code>: The build succeeded.</p> </li> <li> <p> <code>TIMED_OUT</code>: The build timed out.</p> </li> </ul>', 'BuildPhase$phaseStatus' => '<p>The build phase\'s current status. Valid values include:</p> <ul> <li> <p> <code>FAILED</code>: The build phase failed.</p> </li> <li> <p> <code>FAULT</code>: The build phase faulted.</p> </li> <li> <p> <code>IN_PROGRESS</code>: The build phase is still in progress.</p> </li> <li> <p> <code>STOPPED</code>: The build phase stopped.</p> </li> <li> <p> <code>SUCCEEDED</code>: The build phase succeeded.</p> </li> <li> <p> <code>TIMED_OUT</code>: The build phase timed out.</p> </li> </ul>', ], ], 'StopBuildInput' => [ 'base' => NULL, 'refs' => [], ], 'StopBuildOutput' => [ 'base' => NULL, 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'Build$currentPhase' => '<p>The build\'s current build phase.</p>', 'Build$initiator' => '<p>The entity that started the build. Valid values include:</p> <ul> <li> <p>If AWS CodePipeline started the build, the pipeline\'s name, for example <code>codepipeline/my-demo-pipeline</code>.</p> </li> <li> <p>If an AWS Identity and Access Management (IAM) user started the build, the user\'s name, for example <code>MyUserName</code>.</p> </li> <li> <p>If the Jenkins plugin for AWS CodeBuild started the build, the string <code>CodeBuild-Jenkins-Plugin</code>.</p> </li> </ul>', 'BuildArtifacts$location' => '<p>Information about the build artifacts\' location.</p>', 'BuildArtifacts$sha256sum' => '<p>The SHA-256 hash of the build artifact.</p> <p>You can use this hash along with a checksum tool to confirm both file integrity and authenticity.</p> <note> <p>This value is available only if the related build project\'s <code>packaging</code> value is set to <code>ZIP</code>.</p> </note>', 'BuildArtifacts$md5sum' => '<p>The MD5 hash of the build artifact.</p> <p>You can use this hash along with a checksum tool to confirm both file integrity and authenticity.</p> <note> <p>This value is available only if the related build project\'s <code>packaging</code> value is set to <code>ZIP</code>.</p> </note>', 'EnvironmentImage$name' => '<p>The Docker image\'s name.</p>', 'EnvironmentImage$description' => '<p>The Docker image\'s description.</p>', 'EnvironmentVariable$value' => '<p>The environment variable\'s value.</p>', 'ListBuildsForProjectInput$nextToken' => '<p>During a previous call, if there are more than 100 items in the list, only the first 100 items are returned, along with a unique string called a <i>next token</i>. To get the next batch of items in the list, call this operation again, adding the next token to the call. To get all of the items in the list, keep calling this operation with each subsequent next token that is returned, until no more next tokens are returned.</p>', 'ListBuildsForProjectOutput$nextToken' => '<p>If there are more than 100 items in the list, only the first 100 items are returned, along with a unique string called a <i>next token</i>. To get the next batch of items in the list, call this operation again, adding the next token to the call.</p>', 'ListBuildsInput$nextToken' => '<p>During a previous call, if there are more than 100 items in the list, only the first 100 items are returned, along with a unique string called a <i>next token</i>. To get the next batch of items in the list, call this operation again, adding the next token to the call. To get all of the items in the list, keep calling this operation with each subsequent next token that is returned, until no more next tokens are returned.</p>', 'ListBuildsOutput$nextToken' => '<p>If there are more than 100 items in the list, only the first 100 items are returned, along with a unique string called a <i>next token</i>. To get the next batch of items in the list, call this operation again, adding the next token to the call.</p>', 'ListProjectsOutput$nextToken' => '<p>If there are more than 100 items in the list, only the first 100 items are returned, along with a unique string called a <i>next token</i>. To get the next batch of items in the list, call this operation again, adding the next token to the call.</p>', 'LogsLocation$groupName' => '<p>The name of the Amazon CloudWatch Logs group for the associated build logs.</p>', 'LogsLocation$streamName' => '<p>The name of the Amazon CloudWatch Logs stream for the associated build logs.</p>', 'LogsLocation$deepLink' => '<p>The URL to an individual build log in Amazon CloudWatch Logs.</p>', 'PhaseContext$statusCode' => '<p>The status code for the context of the build phase.</p>', 'PhaseContext$message' => '<p>An explanation of the build phase\'s context. This explanation may include a command ID and an exit code.</p>', 'Project$arn' => '<p>The build project\'s Amazon Resource Name (ARN).</p>', 'ProjectArtifacts$location' => '<p>Information about the build output artifact location, as follows:</p> <ul> <li> <p>If <code>type</code> is set to <code>CODEPIPELINE</code>, then AWS CodePipeline will ignore this value if specified. This is because AWS CodePipeline manages its build output locations instead of AWS CodeBuild.</p> </li> <li> <p>If <code>type</code> is set to <code>NO_ARTIFACTS</code>, then this value will be ignored if specified, because no build output will be produced.</p> </li> <li> <p>If <code>type</code> is set to <code>S3</code>, this is the name of the output bucket. If <code>path</code> is not also specified, then <code>location</code> can also specify the path of the output artifact in the output bucket.</p> </li> </ul>', 'ProjectArtifacts$path' => '<p>Along with <code>namespaceType</code> and <code>name</code>, the pattern that AWS CodeBuild will use to name and store the output artifact, as follows:</p> <ul> <li> <p>If <code>type</code> is set to <code>CODEPIPELINE</code>, then AWS CodePipeline will ignore this value if specified. This is because AWS CodePipeline manages its build output names instead of AWS CodeBuild.</p> </li> <li> <p>If <code>type</code> is set to <code>NO_ARTIFACTS</code>, then this value will be ignored if specified, because no build output will be produced.</p> </li> <li> <p>If <code>type</code> is set to <code>S3</code>, this is the path to the output artifact. If <code>path</code> is not specified, then <code>path</code> will not be used.</p> </li> </ul> <p>For example, if <code>path</code> is set to <code>MyArtifacts</code>, <code>namespaceType</code> is set to <code>NONE</code>, and <code>name</code> is set to <code>MyArtifact.zip</code>, then the output artifact would be stored in the output bucket at <code>MyArtifacts/MyArtifact.zip</code>.</p>', 'ProjectArtifacts$name' => '<p>Along with <code>path</code> and <code>namespaceType</code>, the pattern that AWS CodeBuild will use to name and store the output artifact, as follows:</p> <ul> <li> <p>If <code>type</code> is set to <code>CODEPIPELINE</code>, then AWS CodePipeline will ignore this value if specified. This is because AWS CodePipeline manages its build output names instead of AWS CodeBuild.</p> </li> <li> <p>If <code>type</code> is set to <code>NO_ARTIFACTS</code>, then this value will be ignored if specified, because no build output will be produced.</p> </li> <li> <p>If <code>type</code> is set to <code>S3</code>, this is the name of the output artifact object.</p> </li> </ul> <p>For example, if <code>path</code> is set to <code>MyArtifacts</code>, <code>namespaceType</code> is set to <code>BUILD_ID</code>, and <code>name</code> is set to <code>MyArtifact.zip</code>, then the output artifact would be stored in <code>MyArtifacts/<i>build-ID</i>/MyArtifact.zip</code>.</p>', 'ProjectSource$location' => '<p>Information about the location of the source code to be built. Valid values include:</p> <ul> <li> <p>For source code settings that are specified in the source action of a pipeline in AWS CodePipeline, <code>location</code> should not be specified. If it is specified, AWS CodePipeline will ignore it. This is because AWS CodePipeline uses the settings in a pipeline\'s source action instead of this value.</p> </li> <li> <p>For source code in an AWS CodeCommit repository, the HTTPS clone URL to the repository that contains the source code and the build spec (for example, <code>https://git-codecommit.<i>region-ID</i>.amazonaws.com/v1/repos/<i>repo-name</i> </code>).</p> </li> <li> <p>For source code in an Amazon Simple Storage Service (Amazon S3) input bucket, the path to the ZIP file that contains the source code (for example, <code> <i>bucket-name</i>/<i>path</i>/<i>to</i>/<i>object-name</i>.zip</code>)</p> </li> <li> <p>For source code in a GitHub repository, the HTTPS clone URL, including the user name and personal access token, to the repository that contains the source code and the build spec (for example, <code>https://<i>login-user-name</i>:<i>personal-access-token</i>@github.com/<i>repo-owner-name</i>/<i>repo-name</i>.git</code>). For more information, see <a href="https://help.github.com/articles/creating-an-access-token-for-command-line-use/">Creating an Access Token for Command-Line Use</a> on the GitHub Help website.</p> </li> </ul>', 'ProjectSource$buildspec' => '<p>The build spec declaration to use for this build project\'s related builds.</p> <p>If this value is not specified, a build spec must be included along with the source code to be built.</p>', 'SourceAuth$resource' => '<p>The resource value that applies to the specified authorization type.</p>', 'StartBuildInput$sourceVersion' => '<p>A version of the build input to be built, for this build only. If not specified, the latest version will be used. If specified, must be one of:</p> <ul> <li> <p>For AWS CodeCommit or GitHub: the commit ID to use.</p> </li> <li> <p>For Amazon Simple Storage Service (Amazon S3): the version ID of the object representing the build input ZIP file to use.</p> </li> </ul>', 'StartBuildInput$buildspecOverride' => '<p>A build spec declaration that overrides, for this build only, the latest one already defined in the corresponding build project.</p>', ], ], 'Tag' => [ 'base' => '<p>A tag, consisting of a key and a value.</p> <p>This tag is available for use by AWS services that support tags in AWS CodeBuild.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'CreateProjectInput$tags' => '<p>A set of tags for this build project.</p> <p>These tags are available for use by AWS services that support AWS CodeBuild build project tags.</p>', 'Project$tags' => '<p>The tags for this build project.</p> <p>These tags are available for use by AWS services that support AWS CodeBuild build project tags.</p>', 'UpdateProjectInput$tags' => '<p>The replacement set of tags for this build project.</p> <p>These tags are available for use by AWS services that support AWS CodeBuild build project tags.</p>', ], ], 'TimeOut' => [ 'base' => NULL, 'refs' => [ 'CreateProjectInput$timeoutInMinutes' => '<p>How long in minutes, from 5 to 480 (8 hours), for AWS CodeBuild to wait until timing out any related build that does not get marked as completed. The default is 60 minutes.</p>', 'Project$timeoutInMinutes' => '<p>How long in minutes, from 5 to 480 (8 hours), for AWS CodeBuild to wait to timeout any related build that did not get marked as completed. The default is 60 minutes.</p>', 'StartBuildInput$timeoutInMinutesOverride' => '<p>The number of build timeout minutes, from 5 to 480 (8 hours) that overrides, for this build only, the latest setting already defined in the corresponding build project.</p>', 'UpdateProjectInput$timeoutInMinutes' => '<p>The replacement value in minutes, from 5 to 480 (8 hours), for AWS CodeBuild to wait to timeout any related build that did not get marked as completed.</p>', ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'Build$startTime' => '<p>When the build process started, expressed in Unix time format.</p>', 'Build$endTime' => '<p>When the build process ended, expressed in Unix time format.</p>', 'BuildPhase$startTime' => '<p>When the build phase started, expressed in Unix time format.</p>', 'BuildPhase$endTime' => '<p>When the build phase ended, expressed in Unix time format.</p>', 'Project$created' => '<p>When the build project was created, expressed in Unix time format.</p>', 'Project$lastModified' => '<p>When the build project\'s settings were last modified, expressed in Unix time format.</p>', ], ], 'UpdateProjectInput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateProjectOutput' => [ 'base' => NULL, 'refs' => [], ], 'ValueInput' => [ 'base' => NULL, 'refs' => [ 'Tag$value' => '<p>The tag\'s value.</p>', ], ], 'WrapperInt' => [ 'base' => NULL, 'refs' => [ 'Build$timeoutInMinutes' => '<p>How long in minutes for AWS CodeBuild to wait to timeout this build if it does not get marked as completed.</p>', ], ], 'WrapperLong' => [ 'base' => NULL, 'refs' => [ 'BuildPhase$durationInSeconds' => '<p>How long, in seconds, between the build\'s phase starting and ending times.</p>', ], ], ],];
