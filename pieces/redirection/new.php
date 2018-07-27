<?php

if ( isset($_GET['reset']) ) {

    if ( isset($_COOKIE['subdomain']) ) {

        setcookie("subdomain", "", time() - 3600, '/');
        
        unset($_COOKIE['subdomain']);

        header("Location: http://gotopkick.com");
        exit();

    }
   
} else {

    if ( isset($_GET['subdomain']) ) {

        $cookie_value = $_GET['subdomain'];

        setcookie("subdomain", $cookie_value, time() + (86400 * 30), "/");

        header("Location: http://$cookie_value.gotopkick.com/");
    }

    if ( isset($_COOKIE['subdomain']) ) {

        $subdomain = $_COOKIE['subdomain'];

        header("Location: http://$subdomain.gotopkick.com/");
    }

}

?>

<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />

	<title>GoTopKick | TopKick</title>

    <meta name="theme-version" content="1.7.4" />
    <meta name="foundation-version" content="5.5.3" />
    <meta name="modernizr-version" content="2.8.3" />
</head>

<body class="antialiased">

<ul>
	<li>
	    <a role="button" href="?subdomain=1southriding">South Riding</a>
	</li>

	<li>
	    <a role="button" href="?subdomain=2potomacfalls">Potomac Falls</a>
	</li>

	<li>
	    <a role="button" href="?subdomain=3broadlands">Broadlands</a>
	</li>

	<li>
	    <a role="button" href="?subdomain=4purcellville">Purcellville</a>
	 </li>

	<li>
	    <a role="button" href="?subdomain=5leesburg">Leesburg</a>
	</li>
</ul>

</body>
</html>
