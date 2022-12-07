# HIC---Project-2
Human Interface Computing Project 2

THIS IS THE HOW TO GUIDE TO RUN THE SITE.

This project is hosted locally with xampp.

First, download the project folder and move it to htdocs within the xampp folder insude the C drive.

Then, Make sure that you have XAMPP running the Apache and MySQL server.

Then, because we were unable to send the database over, we have sent over the SQL code.
To use this, go to localhost in the browser and click on phpMyAdmin in the top right

Then on the left side, there's a list of databases, click New
Then enter sales as the name and click create.

Next, click on sales in the database list on the left, then click at the top the SQL tab
Then in the project files, you'll want to go to Backend/SQL and copy everything from create_tables.sql
Then paste everything from that into the big text box and click go in the bottom right and it shouldn't give any errors.

You'll then do the same with insert_data.sql. This will fill in the data for the tables.

After that if you go to localhost/HIC---PROJECT-2/Frontend/home.php it should be functional.
