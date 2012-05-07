<?php

class SubcontextedFeatureContext extends Behat\Behat\Context\BehatContext
{
    public function __construct()
    {
        $this->useContext('mink', new Behat\MinkExtension\Context\MinkContext);
    }

    /**
     * @Then /^I wait for the suggestion box to appear$/
     */
    public function iWaitForTheSuggestionBoxToAppear()
    {
        $this->getSubcontext('mink')->getSession()->wait(5000, "$('.suggestions-results').children().length > 0");
    }
}
