SELECT * FROM t_estudante
--2. SELECT

--INSERT INTO t_estudante(naran_estudante, sexo, data_moris, nu_telefone)
--VALUES('Marelia', 'F', '2002-04-26', 76551230)

--SELECT naran_estudante, nu_telefone FROM t_estudante
--SELECT * FROM t_estudante WHERE sexo= 'F'
--SELECT * FROM t_estudante order by nu_telefone ASC
--SELECT * FROM t_estudante WHERE sexo = 'F' ORDER BY data_moris ASC LIMIT 2

--UPDATE t_estudante
--SET naran_estudante = 'Gaspar', sexo='M'
--WHERE id_estudante ='e955d25b-6e0e-4d35-9a53-8e29e55941d4'

DELETE FROM t_estudante
WHERE id_estudante='b603d214-db18-462c-82e6-7760f5592496'