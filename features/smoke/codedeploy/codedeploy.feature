# language: en
@codedeploy
Feature: Amazon CodeDeploy

  Scenario: Making a request
    When I call the "ListApplications" API
    Then the value at "applications" should be a list

  Scenario: Handling errors
    When I attempt to call the "GetApplication" API with:
    | applicationName | bogus-app |
    Then I expect the response error code to be "ApplicationDoesNotExistException"
    And I expect the response error message to include:
    """
    No application found for name: bogus-app
    """
