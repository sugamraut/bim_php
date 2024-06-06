<?php

/* 
1. htmlentities():

This function is useful when you want to encode all characters that 
have HTML entity equivalents.

Example:
-> Input: À Paris, 2 < 4 & "5 > 3"
-> Output: &Agrave; Paris, 2 &lt; 4 &amp; &quot;5 &gt; 3"
-> Here, À, <, >, &, and " are converted into their respective HTML 
entities.


2. htmlspecialchars():

This function is more specific and is primarily used to encode only 
the characters that can create HTML tags or affect HTML syntax.

Example:
-> Input: Joe said, "Hello <world>!"
-> Output: Joe said, &quot;Hello &lt;world&gt;!&quot;
-> In this case, only <, >, and " are converted to &lt;, &gt;, 
and &quot;, respectively. It ignores other characters like Joe or 
world. 

Note: The key difference is in the range of characters they convert. 
htmlentities() will convert any character that has an HTML entity 
equivalent, which includes a wide range of characters beyond those critical 
for HTML syntax. On the other hand, htmlspecialchars() is more 
selective, focusing on converting only those characters that are 
essential to mitigate risks like Cross Side Scripting (XSS) attacks 
in web applications by preventing certain inputs from being 
interpreted as HTML code.



*/