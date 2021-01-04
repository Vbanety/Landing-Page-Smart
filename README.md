# Landing-Page-Smart
This project was a little challenge for to improve my knowledge with some technologies, like that **PHP, SQL, AJAX, JQUERY, CSS, BOOTSTRAP and JAVASCRIPT**.

---

They asked me to create a _*landing page*_ for to save the simples information from custumers that wanted to know more information about the promotions from *SMART TV*, like a first name, last name, email and some doubts, and then, for who is the administrator of the page, should to make login and check the emails registrated for to send then your promotions.

---

# STEP-BY-STEP

---

## If you want to test on your own host, follow the step by step below.

1. - Install PHP7 server together with PHPMyAdmin (In my case, install laragon and configure PHP7 Path)

2. - With or installed Wamp, Xamp or Laragon server it is necessary to start the server to access the project from
from the www folder, that is, unzip the project and copy a folder "SMART2" into the directory
c: \ "server name" \ www \.

3. - Perform a test with the server connected by opening any browser and address
http: // localhost / SMART2 /, a SMARTV landing page should open.

4. - To perform the insertion of requested customers on the main page of the landing page,
the following steps below.

5. - Create a database by accessing the address "http: // localhost / phpmyadmin /" naming the bank as "users"
See a table with the name "controlers" and the fields: "users_id" auto increment, "users" and "password"
with MD5 encryption.
NOTE: When adding a user's data to the user table, it is also necessary to create a user with ROOT login
PHPMYAdmin with the same name and password as the data included in the user table.

6. - Create a database called "stool", a table with the name "customers" and the fields: "id"
auto_increment, "firstname", "lastname", "email", "dubit".

Note: transferring the username and password that you enter in the database, it is necessary to
change the files conexao.php, conexao.php, consulta.php requested the user and corresponding password.

Detail: I was unable to export the php banks to eliminate steps 5 and 6 mentioned above.

Obs: You can see here the previews of how that's working click [here](https://vbanety.github.io/Landing-Page-Smart/).
