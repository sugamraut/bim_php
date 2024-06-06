<?php
/* 
Q. What is the purpose of file handling in PHP?
-> The purpose of file handling in PHP is to read and write data to
   files on the server.

-> This can be useful for a variety of tasks, such as storing user
   data, logging information, or managing configuration settings.

-> PHP provides a number of built-in functions for working with files,
   including functions for opening, reading, writing, and closing
   files, as well as functions for manipulating file permissions
   and other metadata. 
   
-> Are file system really faster than database (or MySQL)?
   -  It depends how big the file(s) are, how selective the query is, 
      and whether the keys used in the update or select are indexed.
   
   -  If the database has to do a full-table scan, it’s likely to be 
      slower than a file. That’s something database schemas are 
      usually designed to avoid. It it’s a gigabyte database, and 
      the update is one row of a primary key or indexed field, the 
      database is likely to do a handful of small i/o operations, 
      while the file operation will have to read the whole thing.

   -  For an update, a text file probably has to be completely 
      re-written as well. This doesn’t work if there is more than
      one program doing updates at a time. So, for smallish, 
      single-user things, a flat text file (like CSV format) 
      can be faster and simpler. As soon as things grow, and 
      there is multi-user access, you get driven into various 
      flavors of database technology.
   
   -  Source: David Brower (Architect in Oracle)


Important functions for file handling in PHP:

a. fopen():
-> Opens a file or URL.
   
   Syntax - fopen($filename, $mode); // returns type resource
   
   Note: 
   -> $filename and $mode are type string

b. fwrite():
-> Binary-safe file write.
   
   Syntax - fwrite($handle, $string); // returns type int
   
   Note: 
   -> $handle is type resource or file pointer
   -> $string is type string

c. filesize():
-> Gets file size. (Bytes)
   
   Syntax - filesize($filename); // returns type int
   
   Note: 
   -> $filename is type string or path to the file

d. fread():
-> Binary-safe file read.
   
   Syntax - fread($handle, $length); // returns type string | false
   
   Note: 
   -> $handle is type resource or file pointer
   -> $length is type int 

e. fputcsv():
-> Format line as csv and write to file pointer.
   
   Syntax - fputcsv($handle, $fields, $delimeter); // returns type 
                                                      int | false
   
   Note: 
   -> $handle is type resource or file pointer
   -> $fields are type array
   -> $delimeter is type string (one character or separator)
   -> $delimeter is optional

f. fgetcsv():
-> Gets line from file pointer and parse for csv fields.
   
   Syntax - fgetcsv($handle, $length, $delimeter); // returns type
                                                      array 
                                                
   Note: 
   -> $handle is type resource or file pointer
   -> $length is type int (optional)
   -> $delimeter is type string (one character or separator)
   -> $delimeter is optional

g. fclose():
-> Close an open file pointer.
   
   Syntax - fclose($handle); // returns type boolean
                                                
   Note: 
   -> $handle is type resource or file pointer

h. file_put_contents():
-> Write a string to a file.
   
   Syntax - file_put_contents($filename, $data); // returns type int
                                                
   Note: 
   -> $filename is type string
   -> $data is type mixed

i. file_get_contents():
-> Reads entire file into a string.
   
   Syntax - file_get_contents($filename); // returns type string
                                                
   Note: 
   -> $filename is type string

j. feof():
-> Test for end-of-file on a file pointer.
   
   Syntax - feof($handle); // returns type boolean
                                                
   Note: 
   -> $handle is type resource

k. fgets():
-> Gets line from file pointer.
   
   Syntax - fgets($handle, $length); // returns type string
                                                
   Note: 
   -> $handle is type resource
   -> $length is type int

*/