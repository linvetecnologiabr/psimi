<?php
// Dados reais do site michelyciardulo.com.br (migrados de /psimi)

$site = [
    'nome' => 'Michely Ciardulo',
    'profissao' => 'Psicóloga Clínica',
    'crp' => 'CRP 06/176130',
    'cnpj' => '45.333.337/0001-59',
];

$contato = [
    'telefone' => '55 11 91341-8537',
    'email' => 'psi.michelyciardulo@gmail.com',
    'endereco_linha1' => 'R. Restinga, 113',
    'endereco_linha2' => 'Tatuapé, São Paulo, SP',
    'cep' => 'CEP 03065-020',
];

$whatsapp_url = 'https://api.whatsapp.com/send?phone=5511913418537&text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20consulta...';
$instagram_url = 'https://www.instagram.com/psi.michelyciardulo/';

$atendimento = [
    'Sessões online e presencial',
    'Acompanhamento terapêutico a adolescentes, adultos e casais',
    'Focada no sujeito, em seus afetos e sua forma de ver o mundo',
    'Ética, escuta ativa e acolhimento',
];

// O resumo de cada especialidade e o paragrafo de abertura (lead) da propria pagina interna
$especialidades = [
    ['titulo' => 'Terapia de casal', 'slug' => 'terapia-de-casal', 'resumo' => 'A terapia de casal é uma ferramenta essencial na jornada de compreensão e fortalecimento dos vínculos afetivos, onde exploramos as influências familiares, expectativas sociais e dinâmicas inconscientes.', 'img' => 'thumb01.webp'],
    ['titulo' => 'Violência doméstica', 'slug' => 'violencia-domestica', 'resumo' => 'A violência doméstica é uma das formas mais devastadoras de sofrimento humano. O atendimento psicológico oferece um espaço seguro de acolhimento, escuta e reconstrução para quem vivencia essa realidade.', 'img' => 'thumb02.webp'],
    ['titulo' => 'Depressão', 'slug' => 'depressao', 'resumo' => 'A depressão vai além da tristeza. É um sofrimento profundo que afeta a forma como a pessoa se relaciona consigo mesma, com os outros e com o mundo. A psicoterapia é fundamental para a compreensão e elaboração desse quadro.', 'img' => 'thumb03.webp'],
    ['titulo' => 'Morte e Luto', 'slug' => 'morte-e-luto', 'resumo' => 'Há perdas que reorganizam o mundo. Quando alguém amado morre, não se perde apenas uma pessoa: perde-se uma presença cotidiana, uma voz familiar, um olhar que reconhecia.', 'img' => 'thumb04.webp'],
    ['titulo' => 'Ansiedade', 'slug' => 'ansiedade', 'resumo' => 'A ansiedade é uma resposta natural do organismo diante de situações de incerteza ou ameaça. Porém, quando se torna excessiva e constante, pode comprometer significativamente a qualidade de vida.', 'img' => 'thumb05.webp'],
    ['titulo' => 'Insegurança', 'slug' => 'inseguranca', 'resumo' => 'A insegurança pode se manifestar em diversas áreas da vida — nos relacionamentos, no trabalho, nas decisões cotidianas. A terapia ajuda a compreender suas raízes e construir uma relação mais segura consigo mesmo.', 'img' => 'thumb06.webp'],
    ['titulo' => 'Baixa autoestima', 'slug' => 'baixa-autoestima', 'resumo' => 'A baixa autoestima afeta profundamente a forma como nos relacionamos com nós mesmos e com o mundo. A terapia ajuda a reconstruir a autoimagem e a desenvolver uma relação mais compassiva consigo mesmo.', 'img' => 'thumb07.webp'],
    ['titulo' => 'Dependência emocional', 'slug' => 'dependencia-emocional', 'resumo' => 'Dependência emocional, simbiose e a "prateleira do amor": como se formam os laços em que a presença do outro passa a sustentar a própria existência.', 'img' => 'thumb08.webp'],
    ['titulo' => 'Burnout', 'slug' => 'burnout', 'resumo' => 'O Burnout — ou Síndrome do Esgotamento Profissional — é muito mais do que "estresse no trabalho". É um estado de exaustão física, emocional e mental causado por uma relação adoecida com o trabalho e suas demandas.', 'img' => 'thumb09.webp'],
    ['titulo' => 'Autoconhecimento', 'slug' => 'mudanca-de-carreira', 'resumo' => 'Autoconhecer-se não é um exercício de autoanálise solitária nem uma busca por uma versão ideal de si mesmo. Também não se trata de alcançar um estado permanente de equilíbrio ou clareza absoluta.', 'img' => 'thumb10.webp'],
    ['titulo' => 'Solidão e Conexão Social', 'slug' => 'solidao-e-conexao-social', 'resumo' => 'A solidão não é simples estado emocional nem fenômeno superficial. É um sinal de que as conexões sociais — que estruturam a vida psíquica — estão fragilizadas ou insuficientes.', 'img' => 'thumb-solidao.webp'],
];

$formacoes = [
    ['titulo' => 'Bacharel em Psicologia', 'instituicao' => 'Universidade Nove de Julho'],
    ['titulo' => 'Pós-graduada em Teoria Psicanalítica', 'instituicao' => 'Faculdade Venda Nova do Imigrante – FAVENI'],
    ['titulo' => 'Pós-graduada em Saúde Mental e Psiquiatria', 'instituicao' => 'Faculdade Única'],
    ['titulo' => 'Gestão de Recursos Humanos', 'instituicao' => 'Universidade Anhembi Morumbi'],
    ['titulo' => 'Terapia de Casal e Família', 'instituicao' => 'Instituto Gaio'],
    ['titulo' => 'Casal e Família', 'instituicao' => 'Livraria do Psicanalista'],
    ['titulo' => 'Aperfeiçoamento em Psicologia Perinatal', 'instituicao' => 'Instituto Escutha'],
    ['titulo' => 'Formação em Psicanálise – Em percurso', 'instituicao' => 'Instituto Távola'],
];

$depoimentos = [
    ['nome' => 'LMAS', 'texto' => 'Profissional tecnicamente, academicamente capacitada com olhar plural atendendo demandas de várias áreas das nossas vidas. Nos ajuda evoluir, provoca reflexão o que traz resultados positivos para a terapia. Recomendo.'],
    ['nome' => 'ECLM', 'texto' => 'Michely sempre muito compreensiva e sempre nos ajuda muito a nos entender.'],
    ['nome' => 'RBS', 'texto' => 'Excelente profissional. Ouve atentamente, faz reflexões e propõe um importante crescimento psicológico.'],
    ['nome' => 'GAS', 'texto' => 'Profissional EXCELENTE. Super indico.'],
    ['nome' => 'SMS', 'texto' => 'A cada encontro fico contando os dias para o próximo.'],
    ['nome' => 'RBS', 'texto' => 'Michely é maravilhosa. Interage de forma assertiva e sempre clara acerca de nossos posicionamentos, possibilitando uma maior autorreflexão.'],
    ['nome' => 'LMAS', 'texto' => 'Extremamente qualificada, ética, capacitada, paciente. Amo ela!!!'],
    ['nome' => 'SMS', 'texto' => 'Gratidão por me fazer ver por outro ângulo o que às vezes eu não consigo.'],
    ['nome' => 'RAC', 'texto' => 'Uma profissional, tem uma tranquilidade e um atendimento excepcional. Super recomendo, vem me ajudando muito.'],
    ['nome' => 'ECC', 'texto' => 'Dra Michely é simplesmente perfeita! Adorei nossa primeira consulta... me deixou super à vontade para falar e me trouxe vários exercícios de reflexão. Já quero a próxima consulta!!!'],
    ['nome' => 'RBS', 'texto' => 'Muito paciente, demonstra segurança ao tratar a abordagem, comenta sempre nossos posicionamentos de forma imparcial e nos ajuda a refletir criticamente sobre a situação a partir de nós mesmos.'],
    ['nome' => 'DMB', 'texto' => 'Me senti muito acolhida, desde a primeira sessão. Fiquei muito animada e acredito que conseguirei ao final do tratamento ter sucesso.'],
    ['nome' => 'LB', 'texto' => 'Já adorei na primeira sessão. Ela te dá espaço pra fala e no final te mostra vários pontos não percebidos.'],
    ['nome' => 'AR', 'texto' => 'Ótima profissional, compreensiva e doce!!! Faz a terapia ser mais leve.'],
];

$faqs = [
    ['pergunta' => 'Como posso agendar uma consulta?', 'resposta' => 'Para agendar uma consulta, você pode acessar a seção "Agendar Consulta" no site e seguir as instruções. Você também pode entrar em contato diretamente pelo WhatsApp ou e-mail fornecidos.'],
    ['pergunta' => 'Como funcionam as sessões de terapia?', 'resposta' => 'Cada sessão é focada no sujeito, em seus afetos e em sua forma de ser no mundo, promovendo autoconhecimento e melhorando a qualidade das relações.'],
    ['pergunta' => 'Quais são as modalidades de atendimento oferecidas?', 'resposta' => 'A Psicóloga Michely Ciardulo oferece sessões tanto online quanto presenciais, adaptando-se à sua conveniência e necessidades.'],
    ['pergunta' => 'Quem pode se beneficiar da terapia?', 'resposta' => 'A Psicóloga Michely Ciardulo atende adolescentes, adultos e casais. Minha abordagem foca em melhorar suas relações e bem-estar emocional, ajudando você a enfrentar desafios pessoais e a desenvolver um autoconhecimento mais profundo.'],
    ['pergunta' => 'Como funciona o reembolso de planos de saúde?', 'resposta' => 'Atualmente a Psicóloga Michely Ciardulo atua com atendimento particular. No entanto, emito nota fiscal de acordo com os valores pagos na sessão para que você verifique o reembolso junto ao seu plano. A maioria dos planos de saúde oferece reembolso. Você paga pelo valor da sessão, eu forneço a nota fiscal e você encaminha ao plano junto com o encaminhamento médico para reembolso. É importante ter um encaminhamento médico de qualquer especialidade para a psicoterapia. Cada convênio tem seus próprios critérios, então recomendo que você verifique com seu plano os detalhes sobre o reembolso.'],
    ['pergunta' => 'Quais são as especialidades oferecidas?', 'resposta' => 'As especialidades da Psicóloga Michely Ciardulo incluem terapia de casal, violência doméstica, depressão, luto, ansiedade, insegurança, baixa autoestima, dependência emocional, burnout, autoconhecimento e solidão e conexão social.'],
    ['pergunta' => 'Quais são as qualificações da Michely?', 'resposta' => 'A Psicóloga Michely Ciardulo é Bacharel em Psicologia, pós-graduada em Teoria Psicanalítica, Saúde Mental e Psiquiatria, entre outras especializações. Sempre prezo pela ética, escuta ativa e acolhimento.'],
];

$posts = [
    ['titulo' => 'Equilibrando os pratos da vida', 'resumo' => 'Freud: "Nós poderíamos ser muito melhores se não quiséssemos ser tão bons."', 'categoria' => 'Reflexão', 'slug' => 'equilibrando-os-pratos-da-vida', 'img' => 'img-pratos.webp'],
    ['titulo' => 'Quando o sofrimento parece não ter fim', 'resumo' => 'O mito de Sísifo e a repetição do sofrimento à luz de Camus e Freud.', 'categoria' => 'Reflexão', 'slug' => 'quando-o-sofrimento-parece-nao-ter-fim', 'img' => 'img-sofrimento.webp'],
    ['titulo' => 'Como funciona a Terapia de Casal?', 'resumo' => 'Entenda o processo terapêutico e os vínculos afetivos na conjugalidade.', 'categoria' => 'Artigo', 'slug' => 'terapia-de-casal', 'img' => 'box-01.webp'],
];
