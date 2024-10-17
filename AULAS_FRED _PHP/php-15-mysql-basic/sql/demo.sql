-- exercício 1:

-- seleciona todos os dados (*) da tabela aluno

SELECT * FROM aluno;


-- exercício 2:

-- seleciciona as colunas específicas de aluno

SELECT aluno.Aluno_nome, aluno.Aluno_cidade FROM aluno;


-- exercício 3:

-- ordena a seleção pelo nome de forma ascendente

SELECT * FROM aluno ORDER BY aluno.Aluno_nome;

-- ordena a seleção pelo nome de forma descendente

SELECT * FROM aluno ORDER BY aluno.Aluno_nome DESC;


-- exercício 4:

-- busca somente pelo nome indicado pelo LIKE ("João da Silva")

SELECT * FROM aluno WHERE aluno.Aluno_nome = "João da Silva";

-- busca pelo nome indicado que contenha "Silva" no começo, meio ou no final (%%)

SELECT * FROM aluno WHERE aluno.Aluno_nome LIKE "%Silva%";