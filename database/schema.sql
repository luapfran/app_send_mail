use appsend;

create table 'appsend'.'users'(
    'id' int not null AUTO_INCREMENT,
    'para' varchar(255),
    'assunto' varchar(255),
    'mensagem' varchar(255),
    PRIMARY KEY (id)
);