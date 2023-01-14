SELECT * FROM posts;
SELECT * FROM posts
	WHERE autor_id = 2
	AND id > 6;
SELECT * FROM posts
	WHERE autor_id = 2
	OR id >= 1;
SELECT * FROM psots
	WHERE (
	autor_id = 2
	OR autor_id = 0
	) AND
	titulo = 'Titulo de teste';
SELECT * FROM posts
	WHERE conteudo LIKE '%teste%';
# ( % ) é coringa, qualquer caracter, conjunto de ou ausencia de pode estar ali