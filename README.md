# Rock, Paper, Scissors

#### Website for practicing unit testing with PHP for Epicodus, 02.15.2017

#### By Patrick McGreevy & Keith Evans

## Description

This website lets 2 users play [Rock, Paper, Scissors](https://en.wikipedia.org/wiki/Rock%E2%80%93paper%E2%80%93scissors).


## Setup/Installation Requirements
1. Set project root as working directory in CLI.
2. Run `$ composer install --prefer-source --no-interaction`.
3. Run `$ cd web`.
4. Run `$ php -S localhost:8000`.
5. Visit **`localhost:8000`** in web browser.


## Technologies Used

HTML

CSS

Bootstrap

JavaScript

jQuery

PHP

Silex

Twig

Composer

JSON

## Specs

|Behavior|Input|Output|
|--------|-----|------|
|It returns 'Tie' when players choose same shape.|Player 1: 'rock', Player 2: 'rock'|'Tie'|
|It returns the player that chooses 'rock' when the other chooses 'scissors'.|Player 1: 'rock', Player 2: 'scissors'|'Player 1'|
|It returns the player that chooses 'paper' when the other chooses 'rock'|Player 1: 'rock', Player 2: 'paper'|'Player 2'|
|It returns the player that choose 'scissors' when the other chooses 'paper'|Player 1: 'scissors', Player 2: 'paper'|'Player 1'|

## Known Bugs

_No known bugs or issues_

### License

Copyright (c) 2017 _**Patrick McGreevy**_ & _**Keith Evans**_

This software is licensed under the MIT license.
