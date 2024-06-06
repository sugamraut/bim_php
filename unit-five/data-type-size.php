<?php

/* 
Database Data Types:

1. Text:
    a. varchar (0 to 65, 535 bytes)
    b. text => (max length upto 65, 535 bytes)
    c. longtext => (upto 4GB)

2. Number:
    a. integer
            - it can be both signed (-127 to 126) and unsigned 
              (0 to 255). 
            - Default is signed. 
            - tinyint (1 byte)

    b. Float
            - float (4 byte)
            - double (8 byte)

    c. Date
            - date 3 bytes, Y-m-d format
            - time 3 bytes, H:i:s 
            - timestamp 4 bytes, Y-m-d H:i:s till year 2038
            - datetime 8 bytes, Y-m-d H:i:s till year 9999
            
    d. Enum
            - is a predefined data type , can be a mix of data.
            - eg. drop down data such as gender, weeks etc.
            - 1 to 2 bytes

    e. Boolean
            - true or false i.e., 1 or 0 (1 byte)

    f. null
            - 4 bytes per row
            - upto 32 null columns
    
    g. JSON
            - upto 1 GB
            
    h. BLOB
            - Binary Large Objects
            - upto 4,294,967,295 bytes
*/

/* Size of data types:

    1.  INT - 4 bytes
    2.  TINYINT - 1 byte
    3.  BIGINT - 8 bytes
    4.  FLOAT - 4 bytes
    5.  DATE - 3 bytes
    6.  DATETIME - 8 bytes
    7.  TIMESTAMP - 4 bytes
    8.  TIME - 3 bytes 
    9.  YEAR - 1 byte
    10. CHAR - 1 byte
    11. VARCHAR - 0 to 65,535 bytes
    12. BLOB - 64 kb
    13. ENUM - 1 or 2 bytes
    14. Boolean - Uses same as TINYINT
    15. NULL - 4 bytes per row and upto 32 NULL columns
    16. JSON - upto 1GB.
*/