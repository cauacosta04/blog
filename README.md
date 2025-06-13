Como clonar e instalar o sistema em outra máquina
Você precisa ter uma conta ativa no GitHub ( https://github.com/ )

Pré-requisito:
Xampp ( https://www.apachefriends.org/ )
Bancada de trabalho MySQL ( https://dev.mysql.com/downloads/workbench/ )
Git ( https://git-scm.com/ )
GitHub Desktop ( https://desktop.github.com/ )
Compositor ( https://getcomposer.org/download/ )
Visual Studio Code ( https://code.visualstudio.com/ )
Instalar no Visual Studio Code a extensão Laravel Extension Pack ( https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-extension-pack )
Instalar no Visual Studio Code a extensão Material Icon Theme ( https://marketplace.visualstudio.com/items?itemName=PKief.material-icon-theme )
Node ( https://nodejs.org/ ) OBS.: Não esqueça de reiniciar o computador
1) Clonar o repositório do GitHub
Vá até o projeto no GitHub que deseja clonar e clique no botão verde escrito "<> Código" em seguida vai abrir um submenu e você deve clicar em "Abrir com GitHub Desktop". O GitHub Desktop vai abrir, em sua máquina, perguntando onde deve clonar o repositório. Clone no diretório "c:/xampp/htdocs/"

2) Abra o projeto no Visual Studio Code
3) Crie o arquivo .env com base no arquivo .env.example
Abra o terminal e execute o código entre aspas "copy .env.example .env"

4) Mude o nome do banco no arquivo .env
Altere esta parte do código para ficar igual a esta abaixo.

CONEXÃO_BD=mysql
DB_HOST=127.0.0.1
PORTA_BD=3306
BD_DATABASE=blog
DB_USERNAME=raiz
SENHA_BD=
5) Instalar as dependências
Abra o terminal e execute o código entre aspas "composer install"

6) Gere uma APP_KEY (chave de criptografia)
Abra o terminal e execute o código entre aspas "php artist key:generate"

7) Rode as migrações (criação das tabelas)
Abra o terminal e execute o código entre aspas "php crafts migram"

8) Rode os SEEDs (inserção dos dados nas tabelas)
Abra o terminal e execute o código entre aspas "php artesão db:seed"
