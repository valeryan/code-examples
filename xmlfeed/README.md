PHP Code Test
=============
Construct a PHP script that will extract data from a MySQL database and display as an XML file in the browser.
Using a hypothetical MySQL database described below, write a PHP script that when called will connect
to the database and output in XML format the results from the database table. Your script should
NOT create an extra .xml file but should display as an XML file to the browser.

*   Database server IP: 192.168.10.10
*   Database server Username: homestead
*   Database server Password: secret
*   Database name: testdatabase
*   Database table name: testtable

Schema for testdatabase.testtable

*   id – int
*   title - varchar(255)
*   date – datetime
*   published – tinyint
*   content - longtext

You code should check for a valid connection and check for results to be returned.
The content for the database table is irrelevant as the file should work with any content in the database table.
The delivered result should be at least a PHP file named ‘index.php’ that when loaded in the web browser will display as a well-formed
and correctly typed XML output that could be used by any XML capable reader.