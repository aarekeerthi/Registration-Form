HTML Registration Form

Purpose: A user registration form collecting details such as name, email, password, address, mobile number, date of birth, and gender.

Structure: Uses a form element with POST method, pointing to connect.php for handling submissions.

Styling: Linked to an external CSS file and Google Fonts for custom styling.

Form Fields: Includes input fields for text, password, date, and radio buttons for gender selection.

PHP Script (connect.php)

Purpose: Processes the form submission and inserts the data into a MySQL database.

Database Connection: Connects to a MySQL database named loginformdb using the mysqli extension.

Data Handling:

Checks if the form is submitted.

Retrieves form data from the POST request.

Formats the date of birth.

Prepares an SQL INSERT query to add the data to the registration table.

Executes the query using mysqli_query.

Global Styles:

Removes all default padding and margin for all elements using * { padding: 0; margin: 0; }.

Heading (h1):

Centers the text, sets the font color to white, and applies padding.

Uses the "Roboto" font family with a weight of 400.

.h1 Class:

Sets the background color to a shade of blue (rgb(72, 113, 184)).

Defines the height and width to 15% and 100% respectively.

.status Class:

Centers its content using flexbox.

Body:

Centers its content using flexbox.

Form:

Adds padding around the form and sets its height and width to 70vh and 25vw respectively.

.elements Class:

Adds margin around each form element.

.input Class:

Sets the font family to "Roboto" and ensures the input fields occupy the full width of their container.

Button:

Styles buttons with a blue background, white text, padding, and border radius.

Uses a solid border matching the background color.

.loginform Class:

Removes default padding and margin, and adds a blue border.

.gender Class:

Adds padding to gender radio buttons.
