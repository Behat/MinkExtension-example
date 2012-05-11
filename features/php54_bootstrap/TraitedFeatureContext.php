<?php

class TraitedFeatureContext extends Behat\Behat\Context\BehatContext
{
    use Behat\MinkExtension\Context\MinkDictionary;

    /**
     * @Then /^I wait for the suggestion box to appear$/
     */
    public function iWaitForTheSuggestionBoxToAppear()
    {
        $this->getSession()->wait(5000, "$('.suggestions-results').children().length > 0");
    }
}
