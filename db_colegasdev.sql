SET FOREIGN_KEY_CHECKS = 0;
USE colegasdev;

-- 1. CADASTRAR OS 9 SERVIÇOS (Os IDs gerados serão de 1 a 9)
INSERT INTO `tbl_servicos` (`nome_servico`, `descricao_servico`) VALUES 
('Templates', 'Modelos de sites pré-construídos e otimizados.'),
('Framework de estilização', 'Uso de ferramentas como Bootstrap.'),
('UI', 'Desenho de interfaces de usuário modernas.'),
('UX', 'Estudo e aplicação de experiência do usuário.'),
('Banco de Dados', 'Modelagem e integração de bancos relacionais.'),
('Laravel', 'Desenvolvimento robusto com o ecossistema PHP/Laravel.'),
('APIs', 'Criação e consumo de APIs RESTful estruturadas.'),
('Fullstack Integration', 'União completa das camadas de Front-end e Back-end.'),
('E2E', 'Testes automatizados de ponta a ponta (End-to-End).');

-- 2. CADASTRAR OS 3 PLANOS (IDs gerados: 1, 2 e 3)
INSERT INTO `tbl_planos` (`nome_plano`, `descricao_plano`) VALUES 
('Front-end', 'Pacote focado na interface visual e experiência do usuário.'),
('Back-end', 'Pacote focado em regras de negócio, APIs e banco de dados.'),
('Fullstack', 'Solução completa englobando front, back e testes automatizados.');

-- 3. VINCULAR OS SERVIÇOS AOS PLANOS (tbl_plano_servico)
-- Plano 1 (Front-end) recebe os serviços: 1 (Templates), 2 (Framework), 3 (UI) e 4 (UX)
INSERT INTO `tbl_plano_servico` (`tbl_planos_id_plano`, `tbl_servicos_id_servico`) VALUES 
(1, 1), (1, 2), (1, 3), (1, 4);

-- Plano 2 (Back-end) recebe os serviços: 5 (Banco de Dados), 6 (Laravel) e 7 (APIs)
INSERT INTO `tbl_plano_servico` (`tbl_planos_id_plano`, `tbl_servicos_id_servico`) VALUES 
(2, 5), (2, 6), (2, 7);

-- Plano 3 (Fullstack) recebe TODOS os serviços anteriores + E2E (Serviços de 1 a 9)
INSERT INTO `tbl_plano_servico` (`tbl_planos_id_plano`, `tbl_servicos_id_servico`) VALUES 
(3, 1), (3, 2), (3, 3), (3, 4), (3, 5), (3, 6), (3, 7), (3, 8), (3, 9);

-- 4. CADASTRAR OS PREÇOS (Mensal e Anual para cada um dos 3 planos)
-- Nota: Altere os valores (0.00) para os preços reais da sua agência
INSERT INTO `tbl_precos` (`tipo_periodo_preco`, `valor_preco`, `tbl_planos_id_plano`) VALUES 
('mensal', 299.00, 1), -- Preço Mensal do Front-end
('anual', 2990.00, 1),  -- Preço Anual do Front-end
('mensal', 399.00, 2), -- Preço Mensal do Back-end
('anual', 3990.00, 2),  -- Preço Anual do Back-end
('mensal', 599.00, 3), -- Preço Mensal do Fullstack
('anual', 5990.00, 3);  -- Preço Anual do Fullstack

SELECT * FROM tbl_servicos;
SELECT * FROM tbl_assinaturas;

USE colegasdev;

INSERT INTO `tbl_clientes` (`nome_cliente`, `email_cliente`, `senha_cliente`) VALUES 
('Stefani Germanotta', 'stef.germ@gmail.com', '123456'),
('Alfonso Herrera', 'poncho.rbd@gmail.com', '123456'),
('Dulce Maria', 'dulce.roberta@gmail.com', '123456'),
('Madonna Ciccone ', 'mdna.louise@gmail.com', '123456'),
('Willoughby Tucker', 'willou.tucker@gmail.com', '123456'),
('Ethel Cain', 'ethel.cain@gmail.com', '123456');

USE colegasdev;

INSERT INTO `tbl_usuarios` (`nome_usuario`, `email_usuario`, `senha_usuario`, `cargo_usuario`) VALUES 
('Murilo Lopes', 'admin@colegasdev.com', '123456', 'Administrador'),
('Beatriz Araujo', 'adm@colegasdev.com', '123456', 'Administrador');

USE colegasdev;

INSERT INTO `tbl_assinaturas` (`status_assinatura`, `data_inicio`, `tbl_clientes_id_cliente`, `tbl_precos_id_preco`) VALUES 
('ativo', '2026-01-10', 1, 1),        -- Stefani assinou o Plano Front-end Mensal (Preço ID 1)
('ativo', '2026-02-15', 2, 4),        -- Alfonso assinou o Plano Back-end Anual (Preço ID 4)
('inadimplente', '2026-03-01', 3, 5), -- Dulce assinou o Plano Fullstack Mensal (Preço ID 5), mas está atrasado
('ativo', '2026-04-12', 4, 2),        -- Madonna assinou o Plano Front-end Anual (Preço ID 2)
('cancelado', '2025-11-20', 5, 3),   -- Willoughby tinha o Back-end Mensal (Preço ID 3), mas cancelou
('ativo', '2026-06-17', 6, 6); -- Ethel Cain (ID 6) assinando o Plano Fullstack Anual (Preço ID 6)

USE colegasdev;

SELECT 
    a.id_assinatura AS 'Cód. Assinatura',
    c.nome_cliente AS 'Nome do Cliente',
    a.status_assinatura AS 'Status da Assinatura',
    DATE_FORMAT(a.data_inicio, '%d/%m/%Y') AS 'Data de Início',
    p.nome_plano AS 'Plano Contratado',
    pr.tipo_periodo_preco AS 'Período',
    CONCAT('R$ ', REPLACE(pr.valor_preco, '.', ',')) AS 'Valor'
FROM tbl_assinaturas a
INNER JOIN tbl_clientes c ON a.tbl_clientes_id_cliente = c.id_cliente
INNER JOIN tbl_precos pr ON a.tbl_precos_id_preco = pr.id_preco
INNER JOIN tbl_planos p ON pr.tbl_planos_id_plano = p.id_plano
ORDER BY a.id_assinatura ASC;

USE colegasdev;

-- Adiciona a coluna para guardar o nome da imagem/ícone
ALTER TABLE `tbl_servicos` 
ADD COLUMN `imagem_servico` VARCHAR(255) NULL AFTER `descricao_servico`;

USE colegasdev;

UPDATE `tbl_servicos` SET `imagem_servico` = 'templates.png' WHERE `id_servico` = 1;
UPDATE `tbl_servicos` SET `imagem_servico` = 'tailwind.png' WHERE `id_servico` = 2;
UPDATE `tbl_servicos` SET `imagem_servico` = 'ui-design.png' WHERE `id_servico` = 3;
UPDATE `tbl_servicos` SET `imagem_servico` = 'ux-research.png' WHERE `id_servico` = 4;
UPDATE `tbl_servicos` SET `imagem_servico` = 'database.png' WHERE `id_servico` = 5;
UPDATE `tbl_servicos` SET `imagem_servico` = 'laravel.png' WHERE `id_servico` = 6;
UPDATE `tbl_servicos` SET `imagem_servico` = 'api.png' WHERE `id_servico` = 7;
UPDATE `tbl_servicos` SET `imagem_servico` = 'fullstack.png' WHERE `id_servico` = 8;
UPDATE `tbl_servicos` SET `imagem_servico` = 'e2e-tests.png' WHERE `id_servico` = 9;

SET FOREIGN_KEY_CHECKS = 1;