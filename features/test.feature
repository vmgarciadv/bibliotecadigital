Feature: Tema
Scenario: Create a tema 

Given I have the json:
    """
    {
        "nombre": "temazo"
    }
    """
When I request "POST /api/tema"
Then the response status code should be 200