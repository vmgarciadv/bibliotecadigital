
Feature: Observacion

Scenario: Create observacion pass

Given I have the json:
    """
    {
        "descripcion": "Mi observacion es la siguiente"
    }
    """
When I request "POST /api/observacion"
Then the response status code should be 200

Scenario: Create observacion fail

Given I have the json:
    """
    {
        "descripcion": ""
    }
    """
When I request "POST /api/observacion"
Then the response status code should be 500

Scenario: Create observacion with special char

Given I have the json:
    """
    {
        "descripcion": "´ç´-ç`ñ+`-çñ+-+ç."
    }
    """
When I request "POST /api/observacion"
Then the response status code should be 200