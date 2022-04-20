<?php

class Form {

//CONSTRUCTOR
    public function start(string $method='get') {
        echo '<div class="container mt-3 ">';
        echo '<div class="row">';
        echo '<div class="border mb-2 col-6 border-success border-2">';
        echo '<form method="'.$method.'">';
    }

//DESTRUCT
    public function end() {
        echo '<input class="btn btn-success" type="submit" value ="Valider"';
        echo '<//div>';
    }

//METHODS
    public function input(string $name, string $type, $value='') {
        echo '<div class="form-group">';
        echo '<label class="form-label" for="'. $name . '">'. ucfirst($name).' : </label>';
        echo '<input class="form-control" step="0.01" name="'. $name.'" type="'.$type.'" value ="'.$value.'"><br>';
        echo '</div>';
    }
    public function checkbox(){
        echo '<div class="form-check">';
        echo '<input class="form-check-input" type="checkbox" name="validate" value="yes" id="check">';
        echo '<label class="form-check-label" for="flexCheckDefault">Confirmez la suppression</label>';
        echo '</div>';
    }
}