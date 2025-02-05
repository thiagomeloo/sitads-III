## Minicurso III Sitads - App Tarefas

## Sobre
Projeto desenvolvido durante o minicurso ministrado por mim no **[III sitads](https://eventos.ifrn.edu.br/nc/sitads-2025/home)** do **Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte** com intuito de uma breve apresentação do **[Laravel](https://laravel.com)** e **[Livewire](https://livewire.laravel.com/)**. A aplicação consiste em uma lista de tarefas onde o usuário poderá cadastrar, buscar uma tarefa ativa, marcar como concluida e restaurar uma tarefa.

<!-- ![alt](./screenshots/example.png) -->

## Instalação

- Clone o projeto utilizando
    ```
    git clone https://github.com/thiagomeloo/sitads-III.git
    ```
- Crie o arquivo ```.env``` copiando de ```.env.example```

- Execute o comando para instalar as dependências do vendor
    ```
    composer install
    ```
- Execute as migrations 
    ```
    php artisan migrate
    ```
- Instale as depedências JS com o comando
    ```
    npm install
    ```
- Inicie o servidor
    ```
    php artisan server
    ```
A partir de agora seu projeto está disponível no endereço ```http://localhost:8000```

