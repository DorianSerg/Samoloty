Feature: Web pages

  Scenario: boeing737
     Given I am on homepage
     When I follow "Boeing 737"
     Then I should see "The Boeing 737 is a short- to medium-range twinjet narrow-body airliner."