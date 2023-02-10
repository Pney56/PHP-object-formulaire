<?php



    class Form {
        private $form;
        private $textInputs = [];
        private $submitButton;
    
        public function __construct(string $action, string $method, string $legend) {
            $this->form = "<form action='$action' method='$method'><fieldset><legend>'$legend'</legend>";
        }
    
        public function setText(string $name, string $value = "") {
            $this->textInputs[] = "<input type='text' name='$name' value='$value'>";
        }
    
        public function setSubmit(string $value) {
            $this->submitButton = "<input type='submit' value='$value'>";
        }
    
        public function getForm(): string {
            return $this->form . implode('', $this->textInputs) . $this->submitButton . "</fieldset></form>";    
        }
    }
    



?>
