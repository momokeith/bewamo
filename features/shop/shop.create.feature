Feature: Creating a new shop

  Scenario: Creating a new shop
    Given The following users exist:
     | firstName |
     | barber1   |
    When I create the following shop for the user "barber1":
      | id | name  |
      | 1  | shop1 |
    Then  A shop with the name "shop1" should exist