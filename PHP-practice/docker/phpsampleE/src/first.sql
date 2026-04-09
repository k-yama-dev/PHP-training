-- members
create table members (
    mid int not null AUTO_INCREMENT,
    mname varchar(255) not null,
    email varchar(100) not null,
    pass varchar(255) not null,
    picture varchar(255),
    created datetime,
    modified timestamp default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    primary key(mid)
);

-- messages
create TABLE messages (
    meid int not null AUTO_INCREMENT,
    message varchar(255) not null,
    mid int not null,
    mecre datetime not null,
    modified timestamp default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    deleted boolean not null default false,
    primary key(meid)
);

-- comments
CREATE TABLE comments (
    cid int not null AUTO_INCREMENT,
    meid int not null,
    mid int not null,
    comment varchar(255) not null,
    cocre datetime,
    primary key(cid)
);