

CREATE TABLE COMMENT (
  commentID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  username varchar(20) NOT NULL,
  content text NOT NULL,
  time datetime NOT NULL,
  word varchar(20) NOT NULL

);

CREATE TABLE ACCOUNT (
  username varchar(20) PRIMARY KEY NOT NULL,
  password varchar(20) NOT NULL,
  name varchar(20) NOT NULL,
  email varchar(20) NOT NULL,
  isAdmin tinyint(1) DEFAULT NULL,
  postID int(11) NOT NULL
);

CREATE TABLE DRINK (
  postID int(11) PRIMARY KEY NOT NULL,
  rating varchar(10) NOT NULL,
  address varchar(100) NOT NULL,
  image blob NOT NULL,
  workingTime time NOT NULL,
  priceRange varchar(20) NOT NULL,
  phoneNumber varchar(20) NOT NULL,
  drinkName varchar(20) NOT NULL
);

CREATE TABLE DRINKSTALLTYPE (
  drinkStallType varchar(20) PRIMARY KEY NOT NULL,
  postID int(11) NOT NULL
);

CREATE TABLE FOOD (
  postID int(11) PRIMARY KEY NOT NULL,
  rating varchar(10) NOT NULL,
  address varchar(100) NOT NULL,
  image blob NOT NULL,
  workingTime time NOT NULL,
  priceRange varchar(20) NOT NULL,
  phoneNumber varchar(20) NOT NULL,
  foodName varchar(20) NOT NULL
);

CREATE TABLE FOODSTALLTYPE (
  foodStallType varchar(20) PRIMARY KEY NOT NULL,
  postID int(11) NOT NULL
);

CREATE TABLE POST (
  postID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  rating varchar(10) NOT NULL,
  address varchar(50) NOT NULL,
  image blob NOT NULL,
  workingTime time NOT NULL,
  priceRange varchar(20) NOT NULL,
  phoneNumber varchar(20) NOT NULL
);

CREATE TABLE PREFERENCES (  
  postID int(11) NOT NULL,  
  username varchar(20) NOT NULL, 
  commentID int(11) NOT NULL,
  PRIMARY KEY (postID, username, commentID)
);

CREATE TABLE SENTIMENTALWORD (
  word varchar(20) PRIMARY KEY NOT NULL,
  weight int(11) DEFAULT NULL
);

