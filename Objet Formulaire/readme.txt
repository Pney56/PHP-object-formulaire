class Form {
  private $form;
  private $texts = array();
  private $submit;

  public function __construct($action, $method) {
    $this->form = "<form action='$action' method='$method'>\n";
    $this->form .= "<fieldset>\n";
  }

  public function setText($name, $value="") {
    $this->texts[] = "<input type='text' name='$name' value='$value'>\n";
  }

  public function setSubmit($value) {
    $this->submit = "<input type='submit' value='$value'>\n";
  }

  public function getForm() {
    foreach ($this->texts as $text) {
      $this->form .= $text;
    }
    $this->form .= $this->submit;
    $this->form .= "</fieldset>\n";
    $this->form .= "</form>\n";
    return $this->form;
  }
}















j'ai modifier ceci corrige le reste pour que ça foncitonne 
    public function __construct($action, $method) {
        $this->form = "<form action='$action' method='$method'><fieldset>";
    }



optimise moi ce code 
class Form {
    private $form;
    private $textInputs = array();
    private $submitButton;

    public function __construct($action, $method) {
        $this->form = "<form action='$action' method='$method'><fieldset><legend>Test formulaire</legend>";
        
    }

    public function getFormTest() {
        return $this->form;
    }

    public function setText($name, $value = "") {
        $this->textInputs[] = "<input type='text' name='$name' value='$value'>";
    }

    public function getTextInputs() {
        return $this->textInputs;
    }

    public function setSubmit($value) {
        $this->submitButton = "<input type='submit' value='$value'>";
    }

    public function getSubmitButton() {
        return $this->submitButton;
    }

    public function getForm() {
        $form = $this->getFormTest();
        $form .= implode('', $this->getTextInputs());
        $form .= $this->getSubmitButton();
        $form .= "</fieldset>";
        $form .= "</form>";
    
        return $form;    
    }
}






je doit crée une class Form en php  qui crée un formulaire montre moi les étape possible pour le faire 





class Form {
    private $form;
    private $textInputs = array();
    private $submitButton;

    public function __construct($action, $method) {
        $this->form = "<form action='$action' method='$method'><fieldset><legend>Test formulaire</legend>";
        
    }

    public function getFormTest() {
        return $this->form;
    }

    public function setText($name, $value = "") {
        $this->textInputs[] = "<input type='text' name='$name' value='$value'>";
    }

    public function getTextInputs() {
        return $this->textInputs;
    }

    public function setSubmit($value) {
        $this->submitButton = "<input type='submit' value='$value'>";
    }

    public function getSubmitButton() {
        return $this->submitButton;
    }

    // public function getForm() {
    //     $form = $this->getFormTest();
    //     $textInputs = $this->getTextInputs();
        
    //     foreach ($textInputs as $textInput) {
    //         $form .= $textInput;
    //     }
    //     $form .= $this->getSubmitButton();
    //     $form .= "</fieldset>";
    //     $form .= "</form>";

    //     return $form;    
    // }

    public function getForm() {
        $form = $this->getFormTest();
        $form .= implode('', $this->getTextInputs());
        $form .= $this->getSubmitButton();
        $form .= "</fieldset>";
        $form .= "</form>";
    
        return $form;    
    }
    
}
