
Feature: Observacion
Scenario: Create observacion

Given I have the json:
    """
    {
        "descripcion": "Mi observacion es la siguiente"
    }
    """
When I request "POST /api/observacion"
Then the response status code should be 200