<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard management</title>
</head>
<body>
	<script>
		    (function() {
        var lastMove = Date.now();

        document.onmousemove = function() {
            lastMove = Date.now();
        }

        setInterval(function() {
            var diff = Date.now() - lastMove;
            if (diff > 100) {
                window.location.href = 'Dashboard/dashboard';
            }
        }, 100);
    }());
	</script>

</body>
</html>
