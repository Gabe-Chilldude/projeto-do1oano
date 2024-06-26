# Some things about this project

## The pages

### signin-screen.php

This page is the screen used for users to create new accounts.

When the signing in is done and the user clicks the sign in button and the page redirects the user to the accounts.php page, after going through the account-register.php file.

### accounts.php

This page lists all of the users that are registered in the accounts.csv file.

### login-screen.php

It's a page that user who are already registered can use to access their accounts.

However in the current version of the project this page is unfunctional.

### index.php

It links to the login-screen.php.

### Other

The pages who were not mentioned in here are empty.

## Php files

### build-components.php

It's used to implement some code components in the pages, such as the header and the footer.

### build-account-table.php

The table seen in the accounts page is dynamic and is buit in this file.

It gets the content in the accounts.csv file, converts it into an array and then makes a html table with it.

### account-register.php

It registers the data inputed in the signin-screen.php page and redirects to account.php.

## Other

In this project there is also the css file, and the components directory wich has the footer and header.

There is also the dump directory that has some files thata are not used anymore.