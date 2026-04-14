create table books (
    id int not null auto_increment,
    title text not null,
    review_score int,
    primary key (id)
);

insert into books values (null, '吾輩は犬である',80);
insert into books values (null, '注文が少ない料理店', 90);
insert into books values (null, '海の又三郎', 70);
