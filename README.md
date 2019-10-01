# Double-submit-cookie-pattern
This project shows how to use CSRF Tokens and Session IDs to validate PHP sessions and users.

To run this site: You should download the zip file and the xampp for windows. Then unzip the files and copy it in htdocs(Xampp). Then Open a web browser and navigate to http://localhost/[directoryname]/Admin_log.php

User use log in to this site: username is the "admin" and password is "password" to log in.👍

The server generates a session ID and a CSRF token for the session after effective user login. As browser cookies, session ID and CSRF token are set. The server validates if the Session ID and CSRF Token match when the user submits the form. When the user logs out of the server, Session ID and CSRF Token will be deleted, making them useless.
