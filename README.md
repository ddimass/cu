# Nginx PHP MySQL [![Build Status](https://travis-ci.org/nanoninja/docker-nginx-php-mysql.svg?branch=master)](https://travis-ci.org/nanoninja/docker-nginx-php-mysql) [![GitHub version](https://badge.fury.io/gh/nanoninja%2Fdocker-nginx-php-mysql.svg)](https://badge.fury.io/gh/nanoninja%2Fdocker-nginx-php-mysql)

Docker running Nginx, PHP-FPM, Composer, MySQL and PHPMyAdmin.

## Overview

1. [Install prerequisites](#install-prerequisites)

    Before installing project make sure the following prerequisites have been met.

2. [Clone the project](#clone-the-project)

    We’ll download the code from its repository on GitHub.

3. [Run the application](#run-the-application)

    By this point we’ll have all the project pieces in place.
4. [Login information](#login-information)

5. [Application usage](#application-usage)

## Install prerequisites

For now, this project has been mainly created for Unix `(Linux/MacOS)`. Perhaps it could work on Windows.

All requisites should be available for your distribution. The most important are :

* [Git](https://git-scm.com/downloads)
* [Docker](https://docs.docker.com/engine/installation/)
* [Docker Compose](https://docs.docker.com/compose/install/)
* [PHP Composer](https://getcomposer.org/download/)


This project use the following ports :

| Server     | Port |
|------------|------|
| MySQL      | 8989 |
| PHPMyAdmin | 8080 |
| Nginx      | 80 |

___

## Clone the project

To install [Git](https://github.com/ddimass/cu.git), download it and install following the instructions :

```sh
git clone https://github.com/ddimass/cu.git
```

Go to the project directory :

```sh
cd cu
```

### Project tree

```sh
.
├── Makefile
├── README.md
├── data
│   └── db
│       ├── dumps
│       └── mysql
├── doc
├── docker-compose.yml
├── etc
│   ├── nginx
│   │   ├── default.conf
│   │   └── default.template.conf
│   ├── php
│   │   └── php.ini
│   └── ssl
└── web
```


### Run the application

1. Setting up PHP environment : 

    ```sh
    cd web
    composer update
    ```

2. Start the application :

    ```sh
    cd ..
    sudo docker-compose up -d
    ```
4. Edit HOSTS :

    ```hosts
    127.0.0.1 cup.local
    ```
5. Open your favorite browser :
 
     * [http://cup.local:80](http://localhost:80/)
     * [http://cup.local:8080](http://localhost:8080/) PHPMyAdmin (username: root, password: root)
   

6. Stop and clear services

    ```sh
    sudo docker-compose down -v
    ```

### Login information

APP
User: admin
Pass: admin

MySQL
User: root
PAss: root

### Application usage

1. Create teams
2. Create games
3. Add results of games