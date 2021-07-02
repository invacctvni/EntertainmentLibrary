create table subscribe
(
    ID int auto_increment primary key,
    email varchar(255) not null
);


CREATE TABLE movie_information(
    ID int not null auto_increment,
    pName varchar(255) ,
    pubDate text,
    #Rotten Tomato Score
    rtscore double,
    #bad way to store password, use hash instead
    type varchar(255),
    primary key (ID)
);

INSERT INTO movie_information (pName, pubDate, rtscore, type)
VALUES
('Joker','2019','0.68','Crime/Drama'),
('Logan','2017','0.93','Action/Sci-fi'),
('Peter Rabbit 2','2021','0.68','Comedy/Adventure'),
('A Quiet Place Part II','2020','0.91','Horror/Thriller'),
('The Ice Road','2021','0.47','Action/Thriller'),
('Luca','2021','0.90','Comedy/Adventure'),
('Mortal Kombat','2021','0.55','Action/Fantasy');

