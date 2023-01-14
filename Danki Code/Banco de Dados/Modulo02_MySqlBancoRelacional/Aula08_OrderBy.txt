SELECT * FROM posts;
INSERT INTO posts VALUES (
    null,
    'Segundo Post',
    'Conteúdo do Segundo Post',
    0
    );
SELECT conteudo, titulo FROM posts;
SELECT * FROM posts
    WHERE id = 1;
SELECT * FROM posts
    ORDER BY id
    DESC;
SELECT * FROM posts
    ORDER BY titulo;
INSERT INTO posts VALUES (
    null,
    'a',
    'a',
    0
    );
SELECT * FROM posts
    ORDER BY titulo ASC;