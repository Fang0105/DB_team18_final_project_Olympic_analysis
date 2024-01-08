create table delete_result(
    id int,
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