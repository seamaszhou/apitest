# how to create table in db
You need to craete 'test' database into mysql and import customer.sql table into your mysql database.


CREATE TABLE IF NOT EXISTS `customer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


# How to run nodejs application
<p>copy app.js and package.json file into your nodejs project folder,</p>
<p>Open command line and cd to your above nodejs project folder</p>
<p>run 'npm install'</p>
<p>run 'node app.js'</p>
