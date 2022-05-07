@extends('layout.app')
@section('content')
    <section class="candidate container py-5">
        <div class="row">
            <div class="col-12">
                <h3 class="heading">Resumo Curricular</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <p>Para incluir seu currículo em nosso banco de dados, clicar no botão abaixo: iniciar cadastro.
                </p>
                <p>Existem duas modalidades de cadastramento. A primeira, permite que seu currículo fique online, podendo
                    ser alterado, atualizado e disponibilizado para a pesquisa diretamente das instituições de ensino. Na
                    segunda modalidade, o currículo também poderá ser alterado e atualizado, porém não fica disponível para
                    ao cesso direto das instituições de ensino e somente o CEAP RH terá acesso a ele. Na primeira
                    modalidade, se optar, o candidato pagará uma taxa semestral (um pgto a cada 6 meses) de R$80,00 pelo
                    serviço de disponibilidade do currículo. Se preferir a segunda modalidade, o cadastramento ficará
                    disponível somente para o acesso do CEAP RH, sem custo algum.
                </p>
                <div class="text-center">
                    <a href="{{ route('candidate.create') }}" class="btn btn-primary">Iniciar Cadastro</a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Características do SISTEMA INTEGRADO CEAP-RH</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>O seu currículo poderá ser visto diretamente pelas instituições de ensino (1a. modalidade) ou apenas pelo CEAP RH (2a. modalidade).</li>
                            <li>O candidato poderá saber quantas vezes o currículo é visto pelas instituições de ensino (1a. modalidade).</li>
                            <li>Você pode cadastrar até 3 áreas de interesses diferentes e ter seu currículo avaliado para até 3 vagas diferentes (ambas modalidades).</li>
                            <li>Você poderá manter seu currículo sempre atualizado (ambas modalidades).</li>
                            <li>Sua identidade é preservada. Seus dados pessoais não são enviados ou vistos quando do envio às vagas (instituições) ou quando da pesquisa por parte das instituições de ensino.</li>
                            <li>Quando o currículo é visitado pelas instituições de ensino, os dados pessoais como nome, RG, CPF, endereço e telefones não são mostrados para manter em segurança esses dados, considerando que a internet é de domínio público. Isso também poderá evitar possíveis constrangimentos com a escola ou faculdade onde você trabalha, atualmente.</li>
                            <li>Não somente professores (as) são atendidos nos processos de recrutamento e seleção, mas todos os demais profissionais que compõem uma instituição de ensino como pessoal para as áreas administrativa, secretaria, financeira, contábil, marketing, comercial, TI e atendimento.</li>
                            <li>Quando ocorrem as contratações, o serviço é pago exclusivamente pela instituição de ensino que abriu o processo seletivo. O candidato, portanto, não paga absolutamente nada quando é contratado por uma escola ou faculdade.</li>
                            <li>As vagas são publicadas e retiradas pelas instituições de ensino através dos seus próprios loggins e senhas. O tempo de permanência depende sempre da demanda e/ou urgência (ou não) da mesma.</li>
                            <li>Quando o candidato preenche o formulário de envio e se candidata a uma vaga, o sistema o envia automaticamente para a instituição de ensino que abriu a vaga. É ela que vai receber e avaliar.</li>
                            <li>Quando ocorrer o interesse da instituição de ensino pelo currículo, podem acontecer duas situações. Uma, é a solicitação da escola ou faculdade para que o CEAP RH inicie as avaliações (entrevistas, testes, bancas de aula, dinâmicas de grupo etc). A outra, que mais comumente ocorre, é o contato da escola ou faculdade diretamente com o candidato.</li>
                            <li>O CEAP RH tem estado disponível para o atendimento à toda a rede particular de ensino, desde escolas de pequeno porte às grandes redes, ao longo de 20 anos. Toda esta interação com o mercado educacional tem gerado credibilidade, segurança e respeito pela forma sempre ética, ágil e profissional com que tratamos nossos serviços e clientes.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
