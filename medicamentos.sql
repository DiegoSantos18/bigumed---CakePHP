-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Set-2019 às 01:05
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigumed`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `medicamentos_id` int(11) NOT NULL,
  `nome_popular` varchar(50) DEFAULT NULL,
  `nome_tecnico` varchar(50) DEFAULT NULL,
  `tipo` text,
  `composicao` text,
  `contra_indicacoes` text,
  `indicacao` text,
  `posologia` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`medicamentos_id`, `nome_popular`, `nome_tecnico`, `tipo`, `composicao`, `contra_indicacoes`, `indicacao`, `posologia`) VALUES
(1, 'Advil', 'ibuprofeno', 'USO ADULTO E PEDIÁTRICO ACIMA DE 12 ANOS', 'Cada comprimido revestido contém 200mg de ibuprofeno. Excipientes: croscarmelose sódica, celulose microcristalina, corante marrom, corante preto, corante regular, álcool, dióxido de silício, lauril sulfato de sódio, amido de milho, amido, amido pré gelatinizado, ácido esteárico, sacarose e cera de abelha.', 'Este medicamento é contraindicado nos casos de hipersensibilidade conhecida ao ibuprofeno ou a qualquer componente da fórmula, ao ácido acetilsalicílico ou a qualquer outro AINE (anti-inflamatório não-esteroidal). Não deve ser indicado a indivíduos com história prévia ou atual de úlcera gastrintestinal ou sangramento gastrintestinal. Não deve ser usado durante os últimos 3 meses de gravidez. Este medicamento é contraindicado para menores de 12 anos.', 'Advil está indicado no alívio temporário da febre e de dores de leve a moderada intensidade, como cefaleia, lombalgia, de gripes e resfriados comuns, dor de dente, dores musculares, dismenorreia e de artrite. ', 'Advil deve ser administrado por via oral na dose recomendada de 1 ou 2 comprimidos de 200 mg. Se necessário, esta dose pode ser repetida com intervalo mínimo de 4-6 horas. Não exceder o total de 6 comprimidos (1200 mg) em um período de 24 horas. Pode ser administrado junto com alimentos. Este medicamento não deve ser partido, aberto ou mastigado. '),
(3, 'cloridrato de fluoxetina', 'cloridrato de fluoxetina', 'USO ORAL. USO ADULTO ACIMA DE 18 ANOS', 'Cada cápsula dura contém: cloridrato de fluoxetina (equivalente a 20mg de fluoxetina)......................................22,36mg; Excipiente q.s.p..........................................................................................................1 cápsula; Excipientes: amido e óleo vegetal hidrogenado.', 'Hipersensibilidade: A fluoxetina é contraindicada em pacientes com hipersensibilidade conhecida a essa droga ou a qualquer um dos excipientes.\r\nInibidores da monoaminoxidase (IMAOs): A fluoxetina não deve ser usada em combinação com um IMAO ou dentro de 14 dias da suspensão do tratamento com um IMAO. Deve-se deixar um intervalo de, pelo menos, cinco semanas (ou talvez mais, especialmente se fluoxetina foi prescrita para tratamento crônico e/ou em altas doses) após a suspensão de fluoxetina e o início do tratamento com um IMAO. Casos graves e fatais de síndrome serotoninérgica (que pode se assemelhar e ser diagnosticada como síndrome neuroléptica maligna) foram relatados em pacientes tratados com fluoxetina e um IMAO com curto intervalo entre uma terapia e outra. Tioridazina: A fluoxetina não deve ser usada em combinação com tioridazina ou dentro de, pelo menos, cinco semanas após a suspensão da fluoxetina (ver INTERAÇÕES MEDICAMENTOSAS). Este medicamento é contraindicado para menores de 18 anos.', 'Este medicamento é indicado para o tratamento da depressão, associada ou não a ansiedade, da bulimia nervosa, do transtorno obsessivo-compulsivo (TOC) e do transtorno disfórico pré-menstrual (TDPM), incluindo tensão pré-menstrual (TPM), irritabilidade e disforia. A eficácia de fluoxetina durante o uso a longo prazo (mais de 13 semanas no tratamento do transtorno obsessivo-compulsivo e mais de 16 semanas no tratamento da bulimia nervosa) não foi sistematicamente avaliada em estudos controlados com placebo. Portanto, o médico deve reavaliar periodicamente o uso de fluoxetina em tratamentos a longo prazo.', 'A fluoxetina deve ser administrada por via oral e pode ser tomada independente das refeições. Caso o paciente deixe de tomar uma dose, deverá tomá-la assim que possível. Não tomar mais que a quantidade de fluoxetina recomendada para período de 24 horas. Depressão: A dose recomendada é de 20mg/dia. Bulimia Nervosa: A dose recomendada é de 60mg/dia. Transtorno Obsessivo-Compulsivo: A dose recomendada é de 20mg/dia a 60mg/dia. Transtorno Disfórico Pré-menstrual: A dose recomendada é de 20mg/dia administrada continuamente (durante todos os dias do ciclo menstrual) ou intermitentemente (isto é, uso diário, com início 14 dias antes do começo previsto da menstruação, até o primeiro dia do fluxo menstrual. A dose deverá ser repetida a cada novo ciclo menstrual). Para todas as indicações: A dose recomendada pode ser aumentada ou diminuída. Doses acima de 80mg/dia não foram sistematicamente avaliadas. Idade: Não há dados que demonstrem a necessidade de doses alternativas tendo como base somente a idade do paciente. Doenças e/ou terapias concomitantes: uma dose mais baixa ou menos frequente deve ser considerada em pacientes com comprometimento hepático, doenças concomitantes ou naqueles que estejam tomando vários medicamentos. Este medicamento não deve ser partido, aberto ou mastigado.'),
(4, 'NOVALGINA', 'dipirona monoidratada', 'USO ORAL. USO ADULTO E PEDIÁTRICO ACIMA DE 15 ANOS', 'Cada comprimido efervescente contém 1000 mg de dipirona monoidratada. Excipientes: bicarbonato de sódio, ácido cítrico, aroma de limão, carbonato de sódio, macrogol 6000 e sucralose.', 'NOVALGINA não deve ser administrada a pacientes:\r\n- com hipersensibilidade à dipirona ou a qualquer um dos componentes da formulação ou a outras pirazolonas ou\r\npirazolidinas (ex.: fenazona, propifenazona, isopropilaminofenazona, fenilbutazona, oxifembutazona) incluindo,\r\npor exemplo, experiência prévia de agranulocitose com uma destas substâncias;\r\n- com função da medula óssea prejudicada (ex.: após tratamento citostático) ou doenças do sistema\r\nhematopoiético;\r\n- que tenham desenvolvido broncoespasmo ou outras reações anafilactoides (ex.: urticária, rinite, angioedema)\r\ncom analgésicos tais como salicilatos, paracetamol, diclofenaco, ibuprofeno, indometacina, naproxeno;\r\n- com porfiria hepática aguda intermitente (risco de indução de crises de porfiria);\r\n- com deficiência congênita da glicose-6-fosfato-desidrogenase (G6PD) (risco de hemólise);\r\n- gravidez e lactação (vide “Advertências e Precauções – Gravidez e Lactação”).\r\nEste medicamento é contraindicado para menores de 3 meses de idade ou pesando menos de 5 kg.\r\nCategoria de risco na gravidez: D. Este medicamento não deve ser utilizado por mulheres grávidas sem\r\norientação médica ou do cirurgião-dentista. Informe imediatamente seu médico em caso de suspeita de\r\ngravidez.', 'Este medicamento é indicado como analgésico e antipirético.', 'Dissolver o comprimido em meio copo de água e beber imediatamente após o término da dissolução.\r\nPosologia: 1 comprimido até 4 vezes ao dia, para adultos e adolescentes acima de 15 anos.\r\nSe o efeito de uma única dose for insuficiente ou após o efeito analgésico ter diminuído, a dose pode ser repetida\r\nrespeitando-se a posologia e a dose máxima diária, conforme descrito acima.\r\nA princípio, a dose e a via de administração escolhidas dependem do efeito analgésico desejado e das condições\r\ndo paciente. Em muitos casos, a administração oral ou retal é suficiente para obter analgesia satisfatória.\r\nQuando for necessário um efeito analgésico de início rápido ou quando a administração por via oral ou retal for\r\ncontraindicada, recomenda-se a administração por via intravenosa ou intramuscular.\r\nO tratamento pode ser interrompido a qualquer instante sem provocar danos ao paciente, inerentes à retirada da\r\nmedicação.\r\nNão há estudos dos efeitos de NOVALGINA, comprimidos efervescentes, administrada por vias não\r\nrecomendadas. Portanto, por segurança e para garantir a eficácia deste medicamento, a administração deve ser\r\nsomente por via oral.\r\nPopulações especiais\r\nEm pacientes com insuficiência renal ou hepática recomenda-se que o uso de altas doses de dipirona seja\r\nevitado, uma vez que a taxa de eliminação é reduzida nestes pacientes. Entretanto, para tratamento em curto\r\nprazo não é necessária redução da dose. Não existe experiência com o uso de dipirona em longo prazo em\r\npacientes com insuficiência renal ou hepática.\r\nEm pacientes idosos e pacientes debilitados deve-se considerar a possibilidade das funções hepática e renal\r\nestarem prejudicadas.\r\nEste medicamento não deve ser mastigado.'),
(5, 'BUSCOPAN', 'butilbrometo de escopolamina', 'USO ADULTO E PEDIÁTRICO USO ORAL', 'Drágeas\r\nCada drágea contém 10 mg de butilbrometo de escopolamina, correspondentes a 6,89 mg de\r\nescopolamina.\r\nExcipientes: fosfato de cálcio dibásico, amido de milho, dióxido de silício, ácido tartárico, ácido\r\nesteárico, povidona, sacarose, talco, goma arábica, dióxido de titânio, macrogol, cera de carnaúba, cera\r\nbranca de abelha, álcool etílico, água purificada.\r\nSolução oral (gotas)\r\nCada ml (20 gotas) da solução contém 10 mg de butilbrometo de escopolamina (0,5 mg/gota),\r\ncorrespondentes a 6,89 mg de escopolamina.\r\nExcipientes: ciclamato de sódio, ácido acético, acetato de sódio, metilparabeno, propilparabeno, essência\r\nde licor de abadia, água purificada.', 'BUSCOPAN é contraindicado nos seguintes casos:\r\n- pacientes com hipersensibilidade conhecida ao butilbrometo de escopolamina ou a qualquer\r\ncomponente da fórmula\r\n- miastenia gravis\r\n- estenose mecânica no trato gastrointestinal\r\n- íleo paralítico ou obstrutivo\r\n- megacólon\r\nNos casos de condições hereditárias raras que possam ser incompatíveis com qualquer excipiente da\r\nformulação, o uso de BUSCOPAN é contraindicado.\r\nBUSCOPAN drágeas é contraindicado em casos de condições hereditárias raras de intolerância à frutose.\r\nBUSCOPAN não é indicado na diarreia aguda ou persistente da criança.\r\nBUSCOPAN é contraindicado para uso por idosos especialmente sensíveis aos efeitos secundários\r\ndos antimuscarínicos, como secura da boca e retenção urinária.', 'BUSCOPAN é indicado para o tratamento sintomático de cólicas dos tratos gastrintestinal e geniturinário,\r\nassim como cólicas e discinesias das vias biliares.', 'Drágeas\r\nAs drágeas devem ser ingeridas inteiras, por via oral, com um pouco de líquido.\r\nA dose recomendada para adultos e crianças acima de 6 anos é de 1 a 2 drágeas (10-20 mg), 3 a 5 vezes\r\nao dia.\r\nEste medicamento não deve ser partido ou mastigado.\r\nSolução oral (gotas)\r\nA dose deve ser administrada por via oral, podendo dissolver as gotas em um pouco de água.\r\nO frasco de BUSCOPAN solução oral vem acompanhado de um moderno gotejador, de fácil manuseio:\r\nPara usar rompa o lacre da tampa, vire o frasco e mantenha-o na posição vertical. Para começar o\r\ngotejamento, bata levemente com o dedo no fundo do frasco e deixe gotejar a quantidade desejada.\r\n(1 ml = 20 gotas)\r\nAs doses recomendadas são:\r\n– Adultos e crianças acima de 6 anos: 20 a 40 gotas (10-20 mg), 3 a 5 vezes ao dia.\r\n– Crianças entre 1 e 6 anos: 10 a 20 gotas (5-10 mg), 3 vezes ao dia.\r\n– Lactentes: 10 gotas (5 mg), 3 vezes ao dia.\r\nA dose de BUSCOPAN baseada no peso corpóreo para crianças até 6 anos pode ser calculada conforme\r\nsegue:\r\n– Crianças até 3 meses: 1,5 mg por quilograma de peso corpóreo por dose, repetidas 3 vezes ao dia\r\n– Crianças entre 3 e 11 meses: 0,7 mg/kg/dose, repetidas 3 vezes ao dia.\r\n– Crianças de 1 a 6 anos: 0,3 mg/kg/dose a 0,5 mg/kg/dose, repetidas 3 vezes ao dia.\r\nBUSCOPAN não deve ser administrado de forma contínua ou por períodos prolongados sem que a causa\r\nda dor abdominal seja investigada.'),
(6, 'FLUTICAPS', 'propionato de fluticasona', 'Cada cápsula para inalação de FLUTICAPS 250 mcg contém: propionato de fluticasona.....250 mcg Excipiente: lactose monoidratada.', 'Cada cápsula para inalação de FLUTICAPS 250 mcg contém:\r\npropionato de fluticasona ...............................................................................250 mcg\r\nExcipiente: lactose monoidratada.', 'FLUTICAPS é contra-indicado no tratamento de episódios agudos de asma, e para indivíduos com história de hipersensibilidade a\r\nqualquer componente da fórmula.\r\nEste medicamento é contra-indicado para menores de 4 anos de idade.', 'FLUTICAPS está indicado no tratamento de manutenção das doenças pulmonares crônicas como a asma brônquica, em adultos e\r\ncrianças acima de 4 anos, e da doença pulmonar obstrutiva crônica.', 'FLUTICAPS só deve ser administrado por via inalatória oral.\r\nOs pacientes devem ser alertados quanto à natureza profilática da terapia com o propionato de fluticasona, e que este deve ser\r\nutilizado regularmente, mesmo quando estejam assintomáticos. A dose de propionato de fluticasona deve ser ajustada de acordo\r\ncom a resposta de cada paciente.\r\nOs pacientes devem ser orientados a procurar o médico caso observem que o alívio com doses menores de broncodilatadores tornouse menos efetivo, ou estejam necessitando de um número maior de inalações do que o prescrito.\r\nASMA\r\nAdultos e adolescentes acima de 16 anos:\r\nPacientes com asma leve devem ser orientados com doses de 100 - 250 mcg, duas vezes ao dia.\r\nNos casos de asma moderada a dose recomendada é de 250 - 500 mcg duas vezes ao dia.\r\nEm pacientes com asma severa, recomendam-se doses de 500-1000 mcg duas vezes ao dia.\r\nCrianças acima de 4 anos: A dose recomendada é 50 a 100 mcg, duas vezes ao dia, podendo ser ajustada até que o controle seja\r\natingido, conforme a resposta do paciente.\r\nDOENÇA PULMONAR OBSTRUTIVA CRÔNICA (DPOC)\r\nA dose usualmente recomendada em adultos é de 500 mcg, duas vezes ao dia.\r\nManipule as cápsulas somente no momento da administração. Leia as instruções contidas na bula para o manuseio do inalador e\r\nadministração do medicamento.\r\nO limite máximo diário de administração do medicamento é de 2000 mcg.\r\nEste medicamento não deve ser partido, aberto ou mastigado.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`medicamentos_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `medicamentos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
