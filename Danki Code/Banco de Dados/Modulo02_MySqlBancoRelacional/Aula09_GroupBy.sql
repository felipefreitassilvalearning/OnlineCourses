SELECT * FROM posts;
INSERT INTO posts VALUES (
    null,
    'Titulo de Teste',
    'Conteudo de teste',
    1
    );
INSERT INTO posts VALUES (
    null,
    'Titulo de Teste',
    'Conteudo de teste',
    1
    );
INSERT INTO posts VALUES (
    null,
    'Titulo de Teste',
    'Conteudo de teste',
    1
    );
SELECT * FROM posts;

INSERT INTO posts VALUES (
    null,
    'Titulo de Teste',
    'Conteudo de teste',
    2
    );
INSERT INTO posts VALUES (
    null,
    'Titulo de Teste',
    'Conteudo de teste',
    2
    );
INSERT INTO posts VALUES (
    null,
    'Titulo de Teste',
    'Conteudo de teste',
    2
    );
SELECT * FROM posts;
SELECT * FROM posts
	GROUP BY autor_id;
SELECT * FROM posts
	GROUP BY autor_id
	ORDER BY id DESC;
SELECT * FROM posts
	WHERE titulo = 'Titulo de Teste'
	GROUP BY autor_id
	ORDER BY id DESC;