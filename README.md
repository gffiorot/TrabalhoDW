TrabalhoDW
===========

Aplicacao web de catalogo/biblioteca de cursos. Inclui paginas publicas, login/registro e integracao com MySQL.

Requisitos
----------
- PHP 8+ (XAMPP ou similar)
- MySQL 5.7+ (ou MariaDB)
- Navegador moderno

Como rodar localmente (XAMPP)
-----------------------------
1) Coloque o projeto em `c:\xampp\htdocs\TrabalhoDW`.
2) No XAMPP, inicie Apache e MySQL.
3) Crie o banco e importe dados:
	- Acesse `http://localhost/phpmyadmin`.
	- Crie um schema chamado `projeto_cursos`.
	- Importe `LandingPage/database/projeto_cursos.sql`.
4) Configure credenciais do banco em `LandingPage/html/conexao.php` se necessario:
	- `host`: normalmente `localhost`
	- `user`: usuario MySQL (padrao do XAMPP e `root`)
	- `pass`: senha do usuario (vazio no padrao do XAMPP)
5) Acesse a aplicacao:
	- `http://localhost/TrabalhoDW/LandingPage/html/index.html` (pagina inicial)
	- Outras entradas: `login.php`, `registro.php`, `biblioteca.php`, `catalogo.html`, `pagamento.html`.

Estrutura rapida
----------------
- `LandingPage/html/`: paginas PHP/HTML (login, registro, biblioteca, catalogo, pagamento).
- `LandingPage/css/`: estilos (`style.css`, `blibliotca.css`, `catalogo.css`).
- `LandingPage/script.js`: interacoes basicas do front-end.
- `LandingPage/database/projeto_cursos.sql`: script para criar/popular o banco `projeto_cursos`.
- `LandingPage/images/`: ativos visuais.

Dicas e troubleshooting
-----------------------
- Se a conexao falhar, verifique host, usuario e senha em `conexao.php` e confirme que o schema `projeto_cursos` existe.
- Para limpar e reimportar, drope o schema no phpMyAdmin e repita o passo 3.
- Logs de erro do PHP aparecem em `xampp\apache\logs\error.log` (padrao do XAMPP no Windows).
