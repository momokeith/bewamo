Feature: Creating a new user

  Scenario: Creating a new user without password verification
    When I create the following users:
      | email  | password |
      | user1@gmail.com | YWhoZWloZWx2IG5kIHZuYmVqemVqdm5xYnZjamxibXZqbm12Y2ppbnZtaW4=|
    Then  A user with the email "user1@gmail.com" and the encrypted pasword "YWhoZWloZWx2IG5kIHZuYmVqemVqdm5xYnZjamxibXZqbm12Y2ppbnZtaW4=" should exist