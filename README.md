<p align="center">
<img  src="https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg" alt="PHP Logo svg vector" width="400px">
</p>


## Description

[Blog PHP](http://p5.codeassemblydev.fr/index.php?post=home) was developed in php without the use of framework.

- You can view the list of articles.
- See the detail of the articles as well as the associated commentary.
- create a user account.
- Send an email to the blog administrator.
- See page about and download my CV

#### once connected

- Can you add comments.

#### Logged in as administrator

- Can you add an article.
- You can update an article
- You can delete an article
- You can delete user
- You can approved or disapproved a comment
- You can delete comment

## Installation

```bash
$ git clone https://github.com/fafax/blog.git
$ cd blog
$ composer install
```

## Database

[MySQL](https://www.mysql.com/fr/) was used as the project database

execute the contents of the ressources\bdd\script_bdd_blog.sql as sql requests

Here is a data script to do your test ressources\bdd\script_data_bdd.sql


## setting

rename the env.example.php file to env.php by putting your data


## Running the app

```bash
# development
$ cd public
$ php -S localhost:8080
```
in your internet browser between the url localhost:8080

To access the administrator function log in with id: admin@admin.fr password: test

## Support

To test the block you can test here :[Blog PHP](http://p5.codeassemblydev.fr/index.php?post=home) is an open source project.

## Stay in touch

- Author - [Fabien HAMAYON](https://www.linkedin.com/in/fabien-hamayon-2b072698/)
- Website - [code assembly dev](http://codeassemblydev.fr/)
- Youtube - [Youtube channel](https://www.youtube.com/channel/UCBB2pQPkS2jmI3LPhUCxYgA)