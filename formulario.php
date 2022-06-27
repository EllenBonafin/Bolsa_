<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV EXTENSAO EVENTO</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
  <h1>ANEXO VI</h1>
  <h2>FORMULÁRIO ESPECÍFICO PARA ATIVIDADES DE EXTENSÃO</h2>
  <h3>MODALIDADE EVENTO</h3>
    <!-- <img src="./style/extensao.png" alt="extensao" aling="center"> -->
    <!-- ALGUMAS INFORMAÇOES NECESSARIAS: Para levar as informçoes do html para o php foi usado name e para multipla escolha foi colo
    cado um vetor onde ele pega apenas os names escolidos e retorna o que tem dentro do "value" -->

  <form action="receptor.php" method="post">
      <section class="content">
        <div class="info">
          <input class="box" name="name" placeholder="Nome">
          <input class="box" name="coordenador" placeholder="Coordenador">
          <input class="box" name="periodo"placeholder= "Periodo de Realizaçoes">

          <p>Esta atividade faz parte de algum PROGRAMA Extensão?</p>
                <div>
                    <input class="Box-selection" type="checkbox"name="escolha[]" value="sim">
                    <label for="scales">Sim</label>
                </div>
                <div>
                    <input class="Box-selection"type="checkbox"name="escolha[]" value="nao">
                    <label for="horns">Nao</label>
                </div>

          <p> Qual?</p> 
            <input class="box" name="qual" placeholder="Qual programa essa atividade pertence">
          <p> Qual?</p>
            Coordenador(a) do PROGRAMA: 
            <input class="box" name="name-coordenador" placeholder="Nome">

          <p> Esta Atividade de Extensão está articulada (quando for o caso): </p>
                <div>
                    <input class="Box-selection" type="checkbox"name="escolha2[]" value="ao Ensino">
                    <label for="scales">Ao ensino</label>
                </div>
                <div>
                    <input class="Box-selection" type="checkbox"name="escolha2[]" value="a pesquisa">
                    <label for="horns">A pesquisa</label>
                </div>

          <p>UNIDADE ADMINISTRATIVA:</p>
            <div>
              <input class="Box-selection" type="checkbox"name="escolha3[]" value="Reito">
              <label for="scales">REITORIA</label>
            </div>

            <div>
              <input class="Box-selection" type="checkbox"name="escolha3[]" value="HU">
              <label for="horns">HUOP</label>
            </div>

          <P> CAMPUS:</P>
            <div>
            <input class="Box-selection" type="checkbox"name="escolha4[]"
            value= "Cascavel">
             <label for="scales">Cascavel</label>
            </div>

            <div>
              <input class="Box-selection" type="checkbox"name="escolha4[]" value="Foz do Iguaçu">
              <label for="horns">Foz do Iguaçu</label>
            </div>

            <div>
              <input class="Box-selection" type="checkbox"name="escolha4[]" value="Francisco Beltrão">
              <label for="scales">Franciso Beltrão</label>
            </div>
                      
            <div>
              <input class="Box-selection" type="checkbox"name="escolha4[]" Value="Marechal Candido Rondon">
              <label for="horns">Marechal Candido Rondon</label>
            </div>

            <div>
              <input class="Box-selection" type="checkbox"name="escolha4[]" value="Toledo">
              <label for="scales">Toledo</label>
            </div>


          <p>CENTRO</p>
              <div>
                <input  class="Box-selection" type="checkbox"name="escolha5[]" value="CECA">
                <label for="horns">CECA</label>
              </div>
              <div>
                <input  class="Box-selection" type="checkbox"name="escolha5[]" value="CCET">
                <label for="scales">CCET</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha5[]" name="CCBS">
                <label for="horns">CCBS</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox" name="escolha5[]" value="CCSA">
                <label for="scales">CCSA</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha5[]" value="CCMF">
                <label for="horns">CCMF</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha5[]" value="CECE">
                <label for="scales">CECE</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha5[]" value="CCH">
                <label for="horns">CCH</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha5[]" value="CCHEL">
                <label for="scales">CCHEL</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha5[]"value="CCA">
                <label for="horns">CCA</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha5[]" value="CCHS">
                <label for="scales">CCHS</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha5[]" value="CEL">
                <label for="horns">CEL</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha5[]" value="CSS">
                <label for="scales">CCS</label>
              </div>
              <!--7-->
            <p>GRANDE ÁREA</p>
              <div>
                <input class="Box-selection" type="checkbox" name="escolha6[]" value="Ciências Exatas e da Terra">
                <label for="horns">Ciências Exatas e da Terra</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha6[]" value="Ciências Biológicas">
                <label for="scales">Ciências Biológicas</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha6[]" value="Engenharias">
                <label for="escolha5[]">Engenharias</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha6[]"
                value="Ciências da Saúde">
                <label for="escolha5[]">Ciências da Saúde</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha6[]" value="Ciências Agrárias">
                <label for="escolha5[]">Ciências Agrárias</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha6[]" value="Ciências Sociais Aplicadas">
                <label for="escolha5[]">Ciências Sociais Aplicadas</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha6[]" value="Ciências Humanas">
                <label for="escolha5[]">Ciências Humanas</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha6[]" value="Linguística, Letras e Artes">
                <label for="escolha5[]">Linguística, Letras e Artes</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha6[]" value="Outros">
                <label for="escolha5[]">Outros</label>
              </div>

              <!--8-->
              <p>PALAVRA CHAVE</p>
              <input class="box" name="name_" placeholder="1">
              <input class="box" name="coordenador_" placeholder="2">
              <input class="box" name="coordenador_2" placeholder="3">

              <!--9-->
              <p>ÁREA TEMÁTICA PRINCIPAL</p>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha7[]" value="Comunicação">
                <label for="Comunicação">Comunicação</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha7[]" value="Meio Ambiente">
                <label for="meio_ambiente">Meio Ambiente</label>
              </div>

              <div>
                <input class="Box-selection" type="checkbox"name="escolha7[]" value="Cultura">
                <label for="cultura">Cultura</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha7[]" value="Saúde">
                <label for="saude">Saúde</label>
              </div>

              <div>
                <input class="Box-selection" type="checkbox"name="escolha7[]" value="Direitos Humanos e Justiça">
                <label for="dhj">Direitos Humanos e Justiça</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha7[]" value="Tecnologia e Produção">
                <label for="tec_prod">Tecnologia e Produção</label>
              </div>

              <div>
                <input class="Box-selection" type="checkbox"name="escolha7[]"value="Educação">
                <label for="edu">Educação</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha7[]" value="Trabalho">
                <label for="tab">Trabalho</label>
              </div>

              <!--9.1-->

              <p>ÁREA TEMÁTICA SECUNDARIA</p>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha8[]" value="Comunicação">
                <label for="Comunicação">Comunicação</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha8[]" value="Meio Ambiente">
                <label for="meio_ambiente">Meio Ambiente</label>
              </div>

              <div>
                <input class="Box-selection" type="checkbox"name="escolha8[]" value="Cultura">
                <label for="cultura">Cultura</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha8[]" value="Saúde">
                <label for="saude">Saúde</label>
              </div>

              <div>
                <input class="Box-selection" type="checkbox"name="escolha8[]" value="Direitos Humanos e Justiça">
                <label for="dhj">Direitos Humanos e Justiça</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha8[]" value="Tecnologia e Produção">
                <label for="tec_prod">Tecnologia e Produção</label>
              </div>

              <div>
                <input class="Box-selection" type="checkbox"name="escolha8[]" value="Educação">
                <label for="edu">Educação</label>
              </div>
              <div>
                <input class="Box-selection" type="checkbox"name="escolha8[]" value="Trabalho">
                <label for="tab">Trabalho</label>
              </div>

              <!-- 10 -->
              <p>OBJETIVOS DO DESENVOLVIMENTO SUSTENTÁVEL (ODS)
                Assinalar quantas opções forem necessáriaS
                </p>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Erradicação da Pobreza">
                  <label for="erradiacao">Erradicação da Pobreza</label>
                </div>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Fome Zero e Agricultura Sustentável">
                  <label for="fome">Fome Zero e Agricultura Sustentável</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Saúde e Bem Estar">
                  <label for="saude_bem">Saúde e Bem Estar</label>
                </div>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Educação de Qualidade">
                  <label for="educacao_qualidade">Educação de Qualidade</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Igualdade de Gênero">
                  <label for="igualdade_g">Igualdade de Gênero</label>
                </div>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Água Potável e Saneamento">
                  <label for="agua">Água Potável e Saneamento</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Energia Acessível e Limpa">
                  <label for="energia_a">Energia Acessível e Limpa</label>
                </div>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Trabalho Descente e Crescimento Econômico">
                  <label for="tab_descente">Trabalho Descente e Crescimento Econômico</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Indústria, Inovação e Infraestrutura">
                  <label for="industria">Indústria, Inovação e Infraestrutura</label>
                </div>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Redução de Desigualdades">
                  <label for="reducao">Redução de Desigualdades</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Cultura">
                  <label for="cultura">Cultura</label>
                </div>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Saúde">
                  <label for="saude">Saúde</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Direitos Humanos e Justiça">
                  <label for="dhj">Direitos Humanos e Justiça</label>
                </div>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Tecnologia e Produção">
                  <label for="tec_prod">Tecnologia e Produção</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Educação">
                  <label for="edu">Educação</label>
                </div>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha9[]" value="Trabalho">
                  <label for="tab">Trabalho</label>
                </div>
                

                <p>11 LINHA DE EXTENSÃO (assinalar apenas 1 opção):</p>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Alfabetização, leitura e escrita">
                  <label for="alfa">Alfabetização, leitura e escrita</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]"value="Artes cênicas">
                  <label for="artes">Artes cênicas</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Artes integradas">
                  <label for="artes-integradas">Artes integradas</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Artes plásticas">
                  <label for="artes-plasticas">Artes plásticas</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Artes visuais">
                  <label for="artes-vizuais">Artes visuais</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Comunicação estratégica">
                  <label for="comunicacao-estrategicas">Comunicação estratégica</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Desenvolvimento de produtos">
                  <label for="dev-de-produtos">Desenvolvimento de produtos</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Desenvolvimento humano">
                  <label for="dev-humano">Desenvolvimento humano</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Desenvolvimento regional">
                  <label for="dev-regional">Desenvolvimento regional</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Desenvolvimento rural e questões agrárias">
                  <label for="dev-rural">Desenvolvimento rural e questões agrárias</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Desenvolvimento tecnológico">
                  <label for="dev-tec">Desenvolvimento tecnológico</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Desenvolvimento urbano">
                  <label for="dev-urbano">Desenvolvimento urbano</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Direitos individuais e coletivos">
                  <label for="direito-ind-coletivo">Direitos individuais e coletivos</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Divulgação científica e tecnológica">
                  <label for="divulgacao-cientifica">Divulgação científica e tecnológica</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Educação profissional">
                  <label for="educacao-profissional">Educação profissional</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Empreendedorismo">
                  <label for="empreendedorismo">Empreendedorismo</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Emprego e renda">
                  <label for="emprego-renda">Emprego e renda</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Endemias e epidemias">
                  <label for="endemias">Endemias e epidemias</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Esporte e lazer">
                  <label for="esporte-lazer">Esporte e lazer</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Estilismo">
                  <label for="eletsimo">Estilismo</label>
                </div>                  

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Fármacos e medicamentos">
                  <label for="farmaco">Fármacos e medicamentos</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Formação de professores">
                  <label for="formacao-professores">Formação de professores</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Gestão do trabalho">
                  <label for="gestao-tb">Gestão do trabalho</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Gestão informacional">
                  <label for="getsao-info">Gestão informacional</label>
                </div>

                
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Gestão institucional">
                  <label for="gestao-inst">Gestão institucional</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Gestão pública">
                  <label for="gestao-p">Gestão pública</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escoha10[]" value="Grupos sociais vulneráveis">
                  <label for="grupos-sociais-vulneraveis">Grupos sociais vulneráveis</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Infância e adolescência">
                  <label for="infancia-adolescencia">Infância e adolescência</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Inovação tecnológica">
                  <label for="inovacao-tecnologia">Inovação tecnológica</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Jornalismo">
                  <label for="jornalismo">Jornalismo</label>
                </div>
                
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Jovens e Adultos">
                  <label for="jovens-adultos">Jovens e adultos</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Línguas estrangeiras">
                  <label for="linguagem-estrangeira">Línguas estrangeiras</label>
                </div>
                
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Metodologia e estratégias de ensino/aprendizagem">
                  <label for="metodologias-estrategicas">Metodologia e estratégias de ensino/aprendizagem</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Mídias">
                  <label for="midias">Mídias</label>
                </div>
                
                <div>
                  <input class="Box-selection" type="checkbox" name="escolha10[]"value="Mídias-artes">
                  <label for="midias-artes">Mídias-artes</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Musica">
                  <label for="musica">Música</label>
                </div>
                
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Organizações da sociedade civil e movimentos sociais populares">
                  <label for="organizacao-sociedade">Organizações da sociedade civil e movimentos sociais populares</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Patrimônio cultural, histórico e natural">
                  <label for="patrimonio-cultural">Patrimônio cultural, histórico e natural</label>
                </div>
                
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Pessoas com deficiências, incapacidades e necessidades especiais ">
                  <label for="pessoa-def">Pessoas com deficiências, incapacidades e necessidades especiais </label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Propriedade intelectual e patente">
                  <label for="propriedade-intelectual">Propriedade intelectual e patente</label>
                </div>
                
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Questões ambientais">
                  <label for="erradiacao">Questões ambientais</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Recursos hídricos">
                  <label for="recursos-hidricos">Recursos hídricos</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Resíduos sólidos">
                  <label for="residuos-solidos">Resíduos sólidos</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Saúde animal">
                  <label for="saude-aniaml">Saúde animal</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Saúde da família">
                  <label for="saude-familia">Saúde da família</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Saúde e proteção no trabalho">
                  <label for="saude-protecao">Saúde e proteção no trabalho</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Segurança pública e defesa social">
                  <label for="seg-publica">Segurança pública e defesa social</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Tecnologia da informação">
                  <label for="tec-info">Tecnologia da informação</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Terceira idade">
                  <label for="Terceira idade">Terceira idade</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Turismo">
                  <label for="Turismo">Turismo</label>
                </div>

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha10[]" value="Uso de drogas e dependência química">
                  <label for="drogas-dep">Uso de drogas e dependência química</label>
                </div> 
                
              <p>PÚBLICO ALVO</p>
              <input class="box" name="PB" placeholder="">
              <p>NÚMERO DE PESSOAS A SEREM BENEFICIADAS: </p>
              <input class="box" name="bene" placeholder="">
              CARGA HORÁRIA TOTAL:
              <input class="box" name="CH" placeholder=""> 

              <p>MODALIDADE DO EVENTO</p>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha11[]" value="Seminário">
                  <label for="drogas-dep">Seminário</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha11[]" value="Encontro">
                  <label for="drogas-dep">Encontro</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha11[]" value="Congresso">
                  <label for="drogas-dep">Congresso</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha11[]" value="Simpósio">
                  <label for="drogas-dep">Simpósio</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha11[]" value="Palestra">
                  <label for="drogas-dep">Palestra</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha11[]" value="Fórum">
                  <label for="drogas-dep">Fórum</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha11[]" value="Ciclo">
                  <label for="drogas-dep">Ciclo</label>
                </div> 

              Outra:
              <input class="box" name="Outra" placeholder=""> 

              <p>ÂMBITO DO EVENTO</p>
                <div>
                  <input class="Box-selection" type="checkbox"name="escolha12[]" value="Local">
                  <label for="drogas-dep">Local</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha12[]" value="Regional">
                  <label for="drogas-dep">Regional</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha12[]" value="Estadual">
                  <label for="drogas-dep">Estadual</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha12[]" value="Nacional">
                  <label for="drogas-dep">Nacional</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha12[]" value="Internacional">
                  <label for="drogas-dep">Internacional</label>
                </div> 
            
          <!-- OBSER -->
                <p>RESUMO:incluir introdução, objetivo, aspectos principais da metodologia e contribuições esperadas.sem tabelas, gráficos ou fotos, com no máximo 15 e mínimo de 10 linhas</p> 
                <input type="text">
          
          
              <p>OBJETIVOS:</p>
              <input class="box" name="Objetivos" placeholder=""> 

              <p>PROGRAMAÇÃO(incluir nome de palestrante/origem):</p>
              <input class="box" name="programacao" placeholder=""> 

              <!-- <p>EQUIPE DE TRABALHO:</p>
              <input class="box" name="name_3" placeholder="Nome">
              <input class="box" name="cpf" placeholder="cpf">
              <div>
                  <input class="Box-selection" type="checkbox"name="escolha13[]" value="Docente Efetivo">
                  <label for="drogas-dep">Docente Efetivo</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha13[]" value="Agente Universitario">
                  <label for="drogas-dep">Agente Universitario</label>
                </div> 

                <div>
                  <input class="Box-selection" type="checkbox"name="escolha13[]" value="Docente Temporário">
                  <label for="drogas-dep">Docente Temporário</label>
                </div>  -->
          <p>DISCENTES UNIOESTE:</p>

          <table border="1">
            <tr>
              <td>Nome Completo</td>
              <td>Curso</td>
              <td>Serie</td>
              <td>Turno</td>
              <td>Ch semanal</td>
              <td>Telefone</td>
              <td>CPF/RA</td>
          </tr>
           <tr>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
          </tr>
          <tr>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
          </tr>

          <tr>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
              <td><input class="box" name="periodo"placeholder= ""></td>
          </tr>
        </table>

  
        <p>MEMBROS DA COMUNIDADE/PARTICIPANTES EXTERNOS:</p>
        <table border="1">
          <tr>
            <td>Nome Completo</td>
            <td>Curso</td>
            <td>Serie</td>
            <td>Turno</td>
            <td>Ch semanal</td>
            <td>Telefone</td>
            <td>CPF/RA</td>
        </tr>
        <tr>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
        </tr>
        <tr>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
        </tr>

        <tr>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
            <td><input class="box" name="periodo"placeholder= ""></td>
        </tr>
        </table>
      <input class="submit" type="submit" value="Enviar"/>
  </form>     
  </div>
</section>
</body>
</html>
