drop table if exists Spaceships;

create table Spaceships
( SpaceshipID int unsigned not null auto_increment primary key,
ShipName varchar(50),
Source varchar(50),
Model varchar(80)
);

insert into Spaceships values (NULL,"Enterprise","Star Trek","NCC-1701");