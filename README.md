# Programa-o-para-Internet
Atividades de INFO 4M

Atividade de Login (Explicar o que entendi)

conexao.php:
É com ele que faz a conexão do banco de dados com o php caso as variaveis tiverem certas, se não, ele não vai conectar e vai aparecer uma mensagem falando que deu erro;

index.php:
Esse é o menu de login, é nele que você coloca os dados cadastrados no banco de dados, no arquivo ele inclui os dados da 'conexao.php' para saber e identificar se os dados colocados no 'index.php' estão no banco de dados, se tiverem, ele vai ser lavado pro 'painel.php', caso não tiver, ele manda uma mensagem dissendo "Falha ao Login";

painel.php:
Esse é onde a pessoas, depois de colocar os dados certos, vai e mostra bom dia e o nome do usuario, nela tem uma opção de sair da conta e voltar para o menu de login;

logout.php:
É com ele que faz a transição de sair da conta e ir para a tela do index;

protect.php:
Esse arquivo é para, caso alguém tente acessar a pagina do painel sem colocar a conta no index, ou sem passar pelo index, para não deixar ele acessar a pagina do painel e exibir a mensagem "Você não pode acessar essa página pois não esta logado.".
