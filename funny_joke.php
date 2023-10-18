<?php
// This PHP script is used to retrieve and display the funny joke from a cookie

if (isset($_COOKIE['funny_joke'])) {
    echo "<h1>The Funny Joke</h1>";
    echo "<p>" . $_COOKIE['funny_joke'] . "</p>";
} else {
    echo "<h1>No Cookie Found</h1>";
    echo "<p>Click the 'Get the Cookie' button to reveal the funny joke!</p>";
}
?>