<?php
require_once __DIR__ . "/HtmlElement.php";

class ButtonInput extends HtmlElement {
    public function __construct(public string $text) {}

    public function render(): string {
        return sprintf('<button type="submit">%s</button>', $this->text);
    }
}
