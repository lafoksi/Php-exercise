# Php pdo mysql connection with class
* PHP PDO is a database access layer that provides a uniform interface for working with multiple databases.
* PDO allows you to work with any database that has a PDO driver available. PDO relies on database-specific drivers, e.g., PDO_MYSQL for MySQL, PDO_PGSQL for PostgreSQL, PDO_OCI for Oracle database, etc.
>

![php-pdo](https://user-images.githubusercontent.com/96316784/161591401-5e20f851-bd11-4c11-b60f-6f88a18c1d86.svg)
>
## Defining constants::
* DB-Hostname: `define('DBHOST','localhost');`
* DB-User: `define('DBUSER','root');`
* DB-Password: `define('DBPASSWORD','your-password');`
* DB-name: `define('DBNAME','your-database-name');`
>
## Connection
To connect to the MySQL database server, you use the following data source name format:
* Connection: `$this->connection = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->dbpass);`
* Attribute: `$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);`
     
## Using
For using the connection first get the instance: 
`$db = DB::getInstance();`
Then, make connection:
`$conn = $db->getConnection();`
