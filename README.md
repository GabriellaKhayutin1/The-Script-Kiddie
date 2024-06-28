## Test Plan

### User Stories to Test

#### User Story 1: User Login
- **As a user, I need the ability to log in using my credentials, so I can securely access my account.**

**Positive Scenario:**
- **Scenario:** A user logs in with a valid email and password.
  - **Purpose:** To verify that users can successfully log in with correct credentials.

**Negative Scenarios:**
- **Scenario:** A user logs in with an incorrect password.
  - **Purpose:** To ensure the system denies access when credentials are incorrect, maintaining security.
- **Scenario:** A user attempts to log in with an email that does not exist.
  - **Purpose:** To verify that only users with registered emails can log in, preventing unauthorized access.
- **Scenario:** A user gets locked out after multiple failed login attempts.
  - **Purpose:** To ensure the system locks the account after multiple failed attempts to enhance security.

#### User Story 2: User Registration
- **As a new user, I want to register an account with valid information so that I can access the application.**

**Positive Scenario:**
- **Scenario:** A new user registers with all necessary and valid details.
  - **Purpose:** To confirm that the system allows account creation with valid inputs.

**Negative Scenarios:**
- **Scenario:** A user attempts to register with incomplete or invalid data.
  - **Purpose:** To ensure the system enforces data validation, requiring all necessary fields to be correctly filled.
- **Scenario:** A user attempts to register with an email address that is already in use.
  - **Purpose:** To ensure the system prevents duplicate email registrations, maintaining data integrity.

### System Tests Per User Story

#### User Story 1: User Login

**Positive Scenario:**
- **Test:** Successful login using valid email and password.
  - **Purpose:** Confirms that the authentication process works correctly with valid credentials.

**Negative Scenarios:**
- **Test:** Failed login due to incorrect password.
  - **Purpose:** Ensures security by rejecting incorrect passwords.
- **Test:** Failed login with a non-registered email.
  - **Purpose:** Verifies that only registered users can log in.
- **Test:** Account lockout after multiple failed login attempts.
  - **Purpose:** Ensures the system locks the account after several failed login attempts to prevent brute force attacks.

#### User Story 2: User Registration

**Positive Scenario:**
- **Test:** Successful registration with valid details.
  - **Purpose:** Ensures that the registration process works seamlessly with valid data.

**Negative Scenarios:**
- **Test:** Failed registration due to missing or invalid fields.
  - **Purpose:** Ensures the system requires all necessary information for creating an account.
- **Test:** Prevent duplicate email registration.
  - **Purpose:** Ensures the system does not allow the same email to be used for multiple accounts, maintaining unique user identification.

### Unit Tests Per User Story

#### User Story 1: User Login

**Positive Scenario:**
- **Test:** Verify the login function with correct credentials.
  - **Purpose:** Confirms the login logic is accurate for valid credentials.

**Negative Scenarios:**
- **Test:** Verify the login function with an incorrect password.
  - **Purpose:** Ensures incorrect passwords are rejected.
- **Test:** Verify the login function with a non-existent email.
  - **Purpose:** Ensures only existing users can log in.

#### User Story 2: User Registration

**Positive Scenario:**
- **Test:** Validate the registration function with correct data.
  - **Purpose:** Ensures the registration logic handles valid data correctly.

**Negative Scenarios:**
- **Test:** Validate the registration function with missing required fields.
  - **Purpose:** Ensures that incomplete registrations are not processed.
- **Test:** Validate the registration function to prevent duplicate emails.
  - **Purpose:** Ensures the system correctly handles attempts to register with an already used email.

### Evaluation
 The testing results indicate that the authentication and registration functionalities are working as intended under normal and adverse conditions. However, the tests do not cover front-end issues or other possible integration problems. While the current tests are comprehensive for backend logic, an improvement would be to include front-end tests using tools like Selenium or Cypress to ensure that UI elements function correctly. Additionally, security tests to check for vulnerabilities such as SQL injection or XSS could be added to the test suite.
They ensure that the main authentication systems function properly and handle various error cases appropriately. The testing results show that the authentication and registration features work as expected under both normal and undesirable settings. However, the tests do not address front-end concerns or potential integration issues. While current tests are adequate for backend logic, it would be beneficial to integrate front-end tests using tools such as Selenium or Cypress to ensure that UI elements work well. The test suite could also include security tests to detect vulnerabilities such as SQL injection or XSS.

### Linking Tests to the V-Model

- **Requirement Analysis:** Users need to log in with valid credentials.
- **System Tests:** Validate the system meets login requirements.
- **System Design:** Design the login module to integrate seamlessly.
- **Integration Tests:** Ensure the login module interacts correctly with other system components.
- **Architecture Design:** Plan the overall structure for the login feature.
- **Unit Tests:** Verify the correctness of individual components.
- **Module Design:** Detail the design of each login module component.
- **Unit Tests:** Conduct detailed testing of each component.

### Use of Factories
- Implement factories to generate consistent and reliable test data, ensuring robust and repeatable tests.

