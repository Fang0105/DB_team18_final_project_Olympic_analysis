create table result(
    discipline_title varchar (100) NOT NULL,
    event_title varchar (100) NOT NULL,
    slug_game varchar (50) NOT NULL,
    participant_type varchar (50) NOT NULL,
    medal_type varchar (20),
    rank_position varchar (20) NOT NULL,
    country_name varchar (50) NOT NULL,
    athlete_url varchar (100),
    athlete_full_name varchar (50) NOT NULL,
    value_unit varchar (30),
    value_type varchar (30)
);

create table host(
    game_slug varchar (50) NOT NULL,
    game_location varchar (50) NOT NULL,
    game_name varchar (50) NOT NULL,
    game_season varchar (20) NOT NULL,
    game_year varchar (10) NOT NULL
);

create table athlete(
    athlete_url varchar (100) NOT NULL,
    athlete_full_name varchar (50) NOT NULL,
    game_participation int NOT NULL,
    first_game varchar (30) NOT NULL,
    athlete_year_birth int NOT NULL,
    athlete_medals varchar (20)
);

load data local infile './olympic_results.csv'
into table result
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './olympic_hosts.csv'
into table host
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

load data local infile './olympic_athletes.csv'
into table athlete
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;