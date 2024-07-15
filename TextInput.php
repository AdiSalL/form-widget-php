<?php
require_once __DIR__ . "/BaseInput.php";

class TextInput extends BaseInput {


    public function renderInput():string {
            return sprintf('<input type="text" name="%s" value="%s"/>', $this->name, $this->value);
    }
}
?>