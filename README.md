change-login-text
=================

**change-login-text** is a drop-in mu-plugin for WordPress that uses output buffering to remove references to usernames on the WordPress login and password reset pages. It replaces them with references to email addresses (as applicable).

This plugin was designed to be used in conjunction with [Force Email Login](https://wordpress.org/plugins/force-email-login/), which (predictably) forces users to use their email address instead of a username to log in, but does not alter the login page text to reflect that requirement.

## Caveats

Output buffering was (for me) the fastest/easiest way to approach this problem, but there are probably better ways to get the same results.

Additionally, this plugin does not provide support for multiple languages. Fortunately, it's trivial to fork the plugin and modify the `str_replace` calls to fit your language.
