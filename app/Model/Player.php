<?php

App::uses('AppModel', 'Model');

class Player extends AppModel {

    public $name = 'Player';
    public $hasMany = 'Game';

}