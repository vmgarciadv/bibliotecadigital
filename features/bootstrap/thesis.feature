Feature: Thesis Feature

  Scenario Outline: Thesis registration test
    Given user navigates to thesis page
    When user clicks on upload thesis buttom
    And user fills the information with the <name> , <author> , <topic> and <objective>
    And user clicks on finish buttom
    Then user uploaded the information correctly to the page

    Examples: 
    | name | author | topic | objective |
    | Sofware educativo | Luque, Beatriz | Enseñanza | Traducir las letras del alfabeto español a imagenes del alfabeto manual |
    | Portal Web de registro de empresas | Casanova, Ricardo | Página web | Diseñar y desarrollar el Front End según el estándar el BCV |
    | Diseño, desarrollo e implementación de un sistema WEB para el control de asistencia de profesores | Pereira, Wilmer | Aplicación Web | Construir el dispositivo receptor del sistema RFID |