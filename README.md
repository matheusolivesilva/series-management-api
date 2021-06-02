# Series Management API
This Lumen API manages series and its episodes. Can be used to: create, maintain and/or generate data about series and its episodes.

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to do to run the software:
* PHP 7.4 or greater
* Composer 1.9.0
* MySQL Database 8.0.23 
* Laravel Framework Lumen (8.2.3) (Laravel Components ^8.0)                                                                        

### Installing and using with Docker
1. First of all, you must to have docker installed in your machine ([follow the steps in documentation](https://docs.docker.com/get-docker/))
2. Clone this repo to your local enviroment 
```bash 
$ git clone https://github.com/matheusolivesilva/series-management-api.git
```
3. Run ```$ docker-compose up ``` and access [http://localhost:8080](http://localhost:8080)


### Installing and using with shellscript
1. Clone this repo to your local enviroment 
```bash 
$ git clone https://github.com/matheusolivesilva/series-management-api.git
```
2. Rename env.example to .env
3. Create a database and use its credentials in variable enviroments DB_DATABASE, DB_USER and DB_PASSWORD inside .env file
4. Run in the command line ```$ ./prepareapp.sh ```
5. Use the command ```$ php -S localhost:yourPortHere ``` to run the API 
6. Access using the address in the last step and test the API 

### Installing and using Manually
1. Clone this repo to your local enviroment 
```bash 
$ git clone https://github.com/matheusolivesilva/series-management-api.git
```
2. Install the dependencies with ```$ composer install ```
3. Rename env.example to .env
4. Create a database and use its credentials in variable enviroments DB_DATABASE, DB_USER and DB_PASSWORD inside .env file
5. Run the migrations and seeds to create the tables and data with ```$ php artisan migrate --seed ```
6. Use the command ```$ php -S localhost:yourPortHere -t /public ``` to run the API
7. Access using the address in the last step and test the API

## REST API DOCS
Examples and how to use the API you can see [in this link click here!](docs.png)


## Built With
* Lumen Framework
* VIM Editor
* PHP
* Gitflow
* Composer
* Doctrine
* MySQL

## Author
*Matheus Oliveira da Silva* - [Github](https://github.com/matheusolivesilva) | [Linkedin](https://www.linkedin.com/in/matheusoliveirasilva/)

