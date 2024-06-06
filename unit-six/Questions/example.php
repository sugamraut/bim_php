<?php
/* Make a web page that uses a SESSION to keep track of how many
times a user has viewed the page. The first time a particular user
looks at the page, it should print something like "Number of views:
1." The second time the user looks at the page, it should print
"Number of views: 2," and so on. */

session_start();

if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1;
} else {
    $_SESSION['page_count'] = 1;
}

echo "Number of views: " . $_SESSION['page_count'];