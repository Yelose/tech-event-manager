<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

npm install

## Starting server
npm run dev

## Preview
php artisan serve

## Configuration
clone env.example and call it .env

generate key

[![Figma](https://github.com/Yelose/Yelose/blob/main/img/figma.png?raw=true)](https://www.figma.com/file/EbM3kkX1DMi1lGKPYQKgEH/TechDesk_Excursiones?node-id=2%3A10)

```mermaid

%%{init: {'theme': 'base', 
'themeVariables': { 
    'primaryColor': '#ffcccc', 
    'edgeLabelBackground':'#ffffee', 
    'tertiaryColor': '#fff0f0',
    "actorTextColor": "#fff",
    "textColor": "#712E3D",
    "actorBorder": "blue"
    }}}%%
erDiagram
    User{
        int id PK
        string name
        string email
        boolean is_admin
            }
    
    Event }|--|{ Event-User : i
    User }|--|{ Event-User : i

    Event{
        int id PK
        string image
        string title
        date date
        time hour
        string duration
        int max_participants
        int min_participants
        int price 
        string description 
        string included 
    }
    Event-User{
        event user
    }

```
