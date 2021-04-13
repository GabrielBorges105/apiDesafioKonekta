# BACKEND DO PROJETO - KONEKTA

<a id="sobre"></a>
## Sobre

Projeto desenvolvido durante o processo seletivo da Konekta. (SOMENTE BACKEND)

-------------------------------------------------

Tabela de conteúdos
=================
   * [Sobre](#sobre)
   * [Requisitos](#requisitos)
   * [Instalação](#instalacao)
   * [Como usar](#como-usar)
   * [Tecnologias](#tecnologias)
   * [Autor](#autor)
   * [Licença](#licenca)

-------------------------------------------------

<a id="requisitos"></a>
## Requisitos

* Primeiramente verifique se você possui os seguintes requisitos:
    * PHP 7.2.5+
    * Composer
    * Laravel
    * Mysql

-------------------------------------------------

<a id="instalacao"></a>
## 🛠 Instalação 

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Php](https://www.php.net/downloads), [Composer](https://getcomposer.org/), [Laravel](https://laravel.com/), [Xampp](https://www.apachefriends.org/pt_br/index.html). 

* Faça Download do Projeto ou clone usando comando
    ```bash
    git clone <https://github.com/GabrielBorges105/apiDesafioKonekta>
    ```

* Abra o Xampp e inicie o MYSQL

* Crie um banco de dados com o nome "desafioKonekta", caso queira personalizar informe-o também no arquivo .env

* Pelo terminal vá até a raiz do projeto e execute:
    ```bash
    composer update
    ```

* Feito isso! Rode o seguinte comando:
    ```bash
    php artisan migrate
    ```

-------------------------------------------------

<a id="como-usar"></a>
## 🎲 Como Usar

Para utilizar você vai precisar seguir os seguintes passos:
* Na pasta do projeto execute o seguinte comando em seu terminal:
    ```bash
    php artisan serve
    ```
* Feito isso! Agora acesse a seguinte url: 
    

    ### Obs: vale lembrar que todas as rotas são acessadas utlizando o prefixo /api/, por exemplo:
    ```bash
    localhost:8000/api/participations
    ```
    ### Exceto as rotas /api/auth/login e /api/users/register

-------------------------------------------------

<a id="tecnologias"></a>
## 🛠 Tecnologias

As seguintes ferramentas foram utilizadas na construção do projeto

- [Composer v1.10.10](https://getcomposer.org/)
- [Laravel](https://laravel.com/)

-------------------------------------------------

<a id="autor"></a>
## Autor

<a href="http://www.jeangabrieldeveloper.com">
 <img style="border-radius: 50%;" src="http://www.jeangabrieldeveloper.com/img/perfil2.png" width="100px;" alt=""/>
 <br />
 <sub><b>Jean Gabriel</b></sub></a> <a href="http://www.jeangabrieldeveloper.com" title="Portfólio"></a>


Feito com ❤️ por Jean Gabriel 👋🏽


[Linkedin](https://www.linkedin.com/in/jean-b-6b9180139/)  [cantanhede2000@hotmail.com](mailto:cantanhede2000@hotmail.com)

-------------------------------------------------

<a id="licenca"></a>
## Licença

[MIT](https://choosealicense.com/licenses/mit/)
