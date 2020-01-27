<?php

App::uses('AppModel', 'Model');

class Game extends AppModel {

    public $name = 'Game';
    public $hasOne = 'Player';
    
}