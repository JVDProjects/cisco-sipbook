# cisco-sipbook
Simple Cisco SPA phonebook XML generator in PHP with inline edit, delete and view options. Also the data will be exported to a XML file.

##How to use
* Upload the files on your server and give them the right permissions.
* Create a database and execute the following SQL query:

```sql
CREATE TABLE IF NOT EXISTS `records` (
  `records_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `number` varchar(10) NOT NULL,
  PRIMARY KEY (`records_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
```
* Edit the file conf.php with your details.
* Enjoy!

####To-do
* Bug fixing (example: notifications)
* Code cleanup
* Styling

###Screendumps
![Alt text](https://www.jvd-projects.nl/wp-content/uploads/2015/03/overview.jpg "Overview")

![Alt text](https://www.jvd-projects.nl/wp-content/uploads/2015/03/inline-edit.jpg "Inline edit")

![Alt text](https://www.jvd-projects.nl/wp-content/uploads/2015/03/add-user.jpg "Add user")

![Alt text](https://www.jvd-projects.nl/wp-content/uploads/2015/03/XML-output.jpg "XML output")
