<?php


// basic databas eoperations

/*


1. insert/Create
2. select/Read
3. Update
4. Delete

CRUD


*/


// steps for working with db using PDO

/*


1. create a PDO object
2. write the SQL query
3. run the query and get results

*/


$connection = new PDO('mysql:host=127.0.0.1;dbname=erp', 'root', '');


// $sql = "INSERT INTO posts (title, body) VALUES ('title 1', 'body 1')";

// $sql = "UPDATE posts SET title = 'title changed', body = 'body changed' WHERE id = 8";


$result = $connection->query($sql);











?>