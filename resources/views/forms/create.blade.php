@extends('layouts.mainform')

@section('title', 'Seminário Internacional de Mediação Cultural')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        {{-- <h1>Seminário Internacional de Mediação Cultural</h1> --}}
        <form action="/forms" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-group">
            <label for="image">Imagem do evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            </div> --}}
            <div class="form-group">
                <label for="title">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
            </div>
            <div class="form-group">
                <label for="title">Nome artístico</label>
                <input type="text" class="form-control" id="nome_artistico" name="nome_artistico" placeholder="Nome artístico">
            </div>
            <div class="form-group">
                <label for="title">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
            </div>
            <div class="form-group">
                <label for="date">Data de nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data de nascimento">
            </div>
            <div class="form-group">
                <label for="title">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade">
            </div>
            <div class="form-group">
                <label for="title">Naturalidade</label>
                <input type="text" class="form-control" id="naturalidade" name="naturalidade" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">Confirme seu email</label>
                <input type="text" class="form-control" id="confirma_email" name="confirma_email" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">Cep</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">Naturalidade</label>
                <input type="text" class="form-control" id="naturalidade" name="naturalidade" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">Estado</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="0">Selecione...</option>
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">Vínculo institucional</label>
                <select name="vinculo_institucional" id="vinculo_institucional" class="form-control">
                    <option value="0">Selecione...</option>
                    <option value="0">Sim</option>
                    <option value="1">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição vínculo</label>
                <input type="text" class="form-control" id="descricao_vinculo" name="descricao_vinculo" placeholder="Local do evento">
            </div>
            <div class="form-group mb-1">
                <textarea class="form-control" id="termo" rows="5">
                    O usuário declara ciência de que o SESC/ARRJ tratará somente dos dados pessoais necessários para executar as atividades referentes ao SEMINÁRIO INTERNACIONAL DE MEDIAÇÃO CULTURAR SESC RJ (art. 7°, inciso V, da lei n°13.709/2018 - LGPD), bem como atender a legislação aplicável e os regulamentos internos, mantendo-os sob sua guarda pelo prazo legal, em conformidade com a política de Privacidade do SESC/ARRJ, disponível em www.sescrio.org.br/politica-de-privacidade/.

                    Os quais serão tratados unica e exclusivamente para promover o registro do titular de dados junto ao SESC/ARRJ e viabilizar sua participação no SEMINÁRIO INTERNACIONAL DE MEDIAÇÃO CULTURAL SESC RJ, sendo certo, ainda que, com relação a estes e a todos os demais dados pessoais informados, o Titular autoriza o armazenamento e tratamento posteriores ao término da ação, pelo CONTROLADOR, pelo prazo de até 10 anos, a contar de seu encerramento oficial, para fins de levantamentos estatísticos da Organização em relação ao Projeto em referência, bem como para assegurar, sempre que possível, a execução das boas práticas de diversidade executadas pelo SESC ARRJ, vedado o compartilhamento dos mesmos com terceiros sem a devida anuência do outorgante.

                    O SESC/ARRJ se responsabiliza por adotar todas as medidas técnicas e organizacionais apropriadas para garantir a segurança dos dados pessoais e proporcionar a contínua confidencialidade, integridade, disponibilidade e resiliência dos sistemas e serviços de processamento dos dados, conforme sua Política de Privacidade.
                </textarea>
              </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="aceitar" id="aceitar">
                <label class="form-check-label" for="flexCheckDefault">
                    Aceitar
                </label>
            </div>
            <div class="form-group mb-1">
                <textarea class="form-control" id="termo2" rows="5">
                    Através da presente declaração e com relação aos dados pessoais sensíveis (gênero, cor / raça, deficiência física) por mim informados em cadastro realizado junto SESC ARRJ, ora CONTROLADORA, venho, enquanto CANDIDATO e TITULAR DE DADOS, consentir que a organização realize o tratamento das referidas informações, para os fins únicos e exclusivos de promover meu cadastro e viabilizar minha participação no PROJETO SESC ARGUMENTA, bem como autorizo, com relação a estes e a todos os demais dados pessoais informados, o armazenamento e tratamento posteriores ao término do concurso, pelo prazo de até 10 anos, a contar do encerramento oficial do mesmo, para fins de levantamentos estatísticos da organização em relação ao Projeto em referência, bem como para assegurar, sempre que possível, a execução das boas práticas de diversidade executadas pelo SESC ARRJ.</textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="aceitar2" id="aceitar2">
                <label class="form-check-label" for="flexCheckDefault">
                    Aceitar
                </label>
            </div>
            <div class="container">
                <div class="row">
                  <div class="col text-center">
                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                  </div>
                </div>
              </div>
        </form>
    </div>

@endsection
