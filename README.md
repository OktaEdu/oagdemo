# oagdemo
OAG Demo App from Aaron Berman

This version of the OAG demo app has the following changes from the original version written by Aaron:
- Written in PHP and deployed to Heroku at https://oagdemo.herokuapp.com .
- Logout links removed.
- Anonymous page only looks for the UserName header. It doesn't use anonuser. This page now includes a link to dump the headers.
- Redirect Link on the URL Rewrite page was removed, as it is never broken.
