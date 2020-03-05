<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    /**
     * @Given user navigates to thesis page
     */
    public function userNavigatesToThesisPage()
    {
        throw new PendingException();
    }

    /**
     * @When user clicks on upload thesis buttom
     */
    public function userClicksOnUploadThesisButtom()
    {
        throw new PendingException();
    }

    /**
     * @When user fills the information with the Sofware educativo , Luque, Beatriz , Enseñanza and Traducir las letras del alfabeto español a imagenes del alfabeto manual
     */
    public function userFillsTheInformationWithTheSofwareEducativoLuqueBeatrizEnsenanzaAndTraducirLasLetrasDelAlfabetoEspanolAImagenesDelAlfabetoManual()
    {
        throw new PendingException();
    }

    /**
     * @When user clicks on finish buttom
     */
    public function userClicksOnFinishButtom()
    {
        throw new PendingException();
    }

    /**
     * @Then user uploaded the information correctly to the page
     */
    public function userUploadedTheInformationCorrectlyToThePage()
    {
        throw new PendingException();
    }

    /**
     * @When user fills the information with the Portal Web de registro de empresas , Casanova, Ricardo , Página web and Diseñar y desarrollar el Front End según el estándar el BCV
     */
    public function userFillsTheInformationWithThePortalWebDeRegistroDeEmpresasCasanovaRicardoPaginaWebAndDisenarYDesarrollarElFrontEndSegunElEstandarElBcv()
    {
        throw new PendingException();
    }

    /**
     * @When user fills the information with the Diseño, desarrollo e implementación de un sistema WEB para el control de asistencia de profesores , Pereira, Wilmer , Aplicación Web and Construir el dispositivo receptor del sistema RFID
     */
    public function userFillsTheInformationWithTheDisenoDesarrolloEImplementacionDeUnSistemaWebParaElControlDeAsistenciaDeProfesoresPereiraWilmerAplicacionWebAndConstruirElDispositivoReceptorDelSistemaRfid()
    {
        throw new PendingException();
    }

    public function __construct()
    {

    }
}
