<?php


function select($name, $options) {
    $array = [];
    for($i = 0; $i < count($options); $i++) {
        $attributes = "";
        if($name == $options[$i]) { // $case74 = 
            $attributes = $attributes . "selected";
        }
        $array[] = <<<HTML
        <option $attributes>{$options[$i]}</option>
HTML;
    }
    $table = "";
    foreach ($array as $value) {
        $table .= $value . "\n";
    }
    return <<<HTML
    <select  class="form-control selectpicker" name=$name> 
        $table
    </select>
HTML;
}