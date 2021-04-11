# PHP Session and Cookies

## Session
A session is a way to store information (in variables) to be used across multiple pages. The Session information is not stored on the users computer but is stored in server side.
When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.
So, Session variables hold information about one single user, and are available to all pages in one application.

syntax:

```
<?php

session_start(); // starts a session

session_unset(); // removes all the session variables

session_destroy(); // destroys the session

$_SESSION['<value_key>'] = "<some_value";

?>
```

All session variable values are stored in the global $_SESSION variable.


## Cookies
A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too.
When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.

syntax:

```
<?php

// setcookie(name, value, expire, path, domain, secure, httponly);
// Only the name parameter is required. All other parameters are optional.

setcookie("user", "alex", time() + 3600); // sets the cookie which will expire after one hour
setcookie("user", "", time() - 1); // negative sign used while setting cookie expire time will destroy the cookie instantly

echo $_COOKIE['user'];

?>
```
 
All cookie variable values are stored in the global $_COOKIE variable.

### Differences between Session and Cookies

Session | Cookies
------- | -------
Sessions are server-side files which contain user information | Cookies are client-side files that contain user information
A session ends when a user closes his browser | Cookie ends depending on the lifetime you set for it
In PHP, before using $_SESSION, you have to write session_start(); Likewise for other languages | You don't need to start cookie as it is stored in your local machine
A session is dependent on Cookie | A cookie is not dependent on Session
Session_destroy(); is used to destroy all registered data or to unset some | There is no function named unsetcookie()
Within-session you can store as much data as you like. The only limits you can reach is the maximum memory a script can consume at one time, which is 128MB by default | The official maximum cookie size is 4KB

