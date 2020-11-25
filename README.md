## Project Breakdown

SOAP stands for Simple Object Access Protocol is an XML-based Web services access protocol. The XML used to make requests and receive responses in SOAP can become extremely complex and problematic because SOAP is intolerant of errors. So we use a free open source SOAP Toolkit for PHP named NuSOAP for creating XML and to consume web services based on SOAP easily.

1. [service.php](https://github.com/Sianwa/SOAP-100052/blob/master/service.php) file is used to create WSDL during program executon.
2. [client.php](https://github.com/Sianwa/SOAP-100052/blob/master/client.php) contains the search UI and code sent to the database.
3. [db.php](https://github.com/Sianwa/SOAP-100052/blob/master/db.php) contains the database functions to connect and query the db while registering and searching.
4. [register.php](https://github.com/Sianwa/SOAP-100052/blob/master/register.php) contains the UI and code for registering a new student.