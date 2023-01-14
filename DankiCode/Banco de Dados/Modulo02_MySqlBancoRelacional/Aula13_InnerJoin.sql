SELECT * FROM autores;
INSERT INTO autores VALUES (
    null,
    'Pedro'
    );
INSERT INTO posts VALUES (
    null,
    'Uma nova noticia',
    'Um novo conteudo atualizado',
    5
    );
SELECT * FROM autores;
SELECT * FROM posts
	INNER JOIN autores
	ON posts.autor_id = autores.id;
INSERT INTO posts VALUES (
    null,
    'noticia de teste',
    'conteudo de teste',
    5
    );
SELECT * FROM posts
	INNER JOIN autores
	ON posts.autor_id = autores.id;
SELECT * FROM posts
    INNER JOIN autores
    ON posts.autor_id = autores.id
    WHERE posts.id = 10;