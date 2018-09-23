-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Set-2018 às 20:40
-- Versão do servidor: 5.7.23-log
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony`
--
#CREATE DATABASE `symfony`;
#USE `symfony`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sumario` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `data_publicacao` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `titulo`, `sumario`, `conteudo`, `data_publicacao`) VALUES
(4, 'Visão Geral', 'Componentes e opções para o layout do seu projeto Bootstrap, incluindo wrapping containers, um poderoso sistema de grid, um objeto de mídia flexível e classes responsivas.', 'Containers\r\nContainers são os elementos de layout mais básico do Bootstrap e são necessários quando usamos o sistema de grid padrão. Escolha entre um container responsivo de largura fixa (ou seja, com alterações de max-width em cada ponto de interrupção) ou por um responsivo de largura fluida (ou seja, 100% de largura o tempo todo).\r\n\r\nEmbora os containers possam ser aninhados, a maioria dos layouts não exige um container aninhado.\r\n\r\nUse .container-fluid para um container com de largura total, abrangindo toda a largura da sua área de visualização.', '2018-09-23'),
(6, 'SERVICE ORIENTED ARCHITECTURE (SOA)', 'Explicando o que é SOA', 'SOA é definido como uma arquitetura orientada a serviços, que segundo FUGITA (2012), diz: “o conceito de serviço está ligado à capacidade de um sistema executar uma função para outro”. No contexto de SOA, serviço também é uma parte de software que possui uma função específica e é disponibilizado por meio de um provedor de serviços. A arquitetura SOA tem como base consumidores e provedores de serviços, que se relacionam com a troca de mensagens padronizadas entre servidores e clientes. A Figura 1 ilustra um cenário em que um consumidor faz uma requisição ao provedor que responde a requisição para o consumidor (OLIVEIRA, 2012).', '2018-09-23'),
(7, 'WEB SERVICE', 'O que é WEB SERVICE?', 'O termo Web Service é uma tecnologia que emprega a arquitetura SOA, e tem sido a principal solução abordada para oferecer serviços para outros aplicativos por meio de uma rede. Uma definição apresenta Web Service como um componente lógico de aplicação acessível por meio de protocolos padrões da internet que pode ser reutilizado sem a preocupação de como é implementada (ESTRELLA, 2010). Seu objetivo é a unificação de processos de diferentes sistemas em diferentes linguagens, que é feita para integrar, disponibilizar, modularizar serviços e capacitar a integração do consumo de informações (MENÉNDEZ, 2002), assim, provendo a interoperabilidade das aplicações. Segundo Coelho (208, p 15),', '2018-09-23'),
(8, 'SIMPLE OBJECT ACCESS PROTOCOL (SOAP)', 'Definição de SOAP', 'É um protocolo de comunicação para os Web Services, e tem como característica especificar o formato padrão das mensagens em XML, que é uma linguagem de marcação. Uma mensagem SOAP contém dados específicos como: nome de método e parâmetros de entrada e saída. De forma geral é uma descrição dos dados do serviço e como utilizá-los para efetuar as chamadas de RPC. Estrella (2010) afirma que “Uma mensagem SOAP nada mais é que um fragmento XML bem formado, encapsulado por um par de elementos SOAP”.', '2018-09-23'),
(9, 'WEB SERVICES DESCRIPTION LANGUAGE (WSDL)', 'Definição de WSDL', 'O WSDL é um padrão de especificação utilizada no protocolo SOAP que descreve os serviços do Web Service através do formato XML, permitindo assim a comunicação do consumidor com o provedor de serviços. É um contrato de serviço entre o provedor e o consumidor, ou seja, o consumidor deve conhecer o WSDL do Web Service, para poder consumir os serviços do mesmo. O WSDL é dividido em duas partes, a abstrata que descreve como cada serviço deve ser invocado pelo consumidor, definindo os tipos dados de entrada/saída, a mensagem com os dados que serão enviados na requisição e qual o serviço deve ser invocado. A parte concreta descreve o estilo da chamada e a localização real de cada serviço para poderem serem invocados.', '2018-09-23'),
(10, 'API REST', 'Definição de API REST', 'Uma API é uma ferramenta de integração que possibilita a comunicação com outros sistemas ou aplicações por meio de protocolos de comunicação (HTTP, SMTP, entre outros). Facilita a construção de serviços a partir de aplicações existentes, pois abstraem a complexidade do protocolo e interface de programação (FUGITA, 2012), ou seja, quem consome uma API conhece os seus métodos, mas não toda a complexidade que se esconde em sua codificação. Um exemplo de API é um serviço de cálculo de frete disponibilizado pelo sistema do Correios, que recebe como dados de entrada o CEP de origem e destino, e retorna o valor do frete para o comércio eletrônico que consome esse serviço. A Figura 8 ilustra essa interação', '2018-09-23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
