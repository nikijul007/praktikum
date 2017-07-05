   
    <?php
    session_start();
class User
 {
    public $name, $nachname;
    public $adresse, $nummer;
    public $stadt, $plz, $checkbox; 
   
    
    public function requestData($request)
    {
        $this->checkbox = (isset($_POST["checkbox"]) ? true : null);
        $this->name = trim($request["name"]);
        $this->nachname = trim($request["nachname"]);
        $this->adresse = trim($request["adresse"]);
        $this->nummer = trim($request["nummer"]);
        $this->stadt = trim($request["stadt"]);
        $this->plz = trim($request["plz"]);
    }
    public function sessionVar()
    {
        $_SESSION["vname"] = $this->name;
        $_SESSION["nname"]= $this->nachname;
        $_SESSION["adresse"]= $this->adresse;
        $_SESSION["nummer"]= $this->nummer;
        $_SESSION["stadt"]= $this->stadt;
        $_SESSION["plz"]= $this->plz;
    }
    
    public function sessionVarReset()
    {
        $_SESSION["vname"] = '';
        $_SESSION["nname"]= '';
        $_SESSION["adresse"]= '';
        $_SESSION["nummer"]= '';
        $_SESSION["stadt"]= '';
        $_SESSION["plz"]= '';
        if (isset($_SESSION["errorMessage"])) {
            //unset($_SESSION["errorMessage"]);
        }
    }
    /*public function fullName()
    {
        // $name = $this->name.' ' .$this->nachname;
        // $name = "{$this->name} {$this->nachname}";
        return "{$this->name} {$this->nachname} <br>";
     
    }
    
    public function fullAddresses()
    {
      return "{$this->adresse} {$this->nummer} <br> {$this->stadt} {$this->plz}";  
    }
    */
    public function validateCheckbox()
    {
      return $this->checkbox !== null;   
    }
    
    public function validate()
    {
        if (! $this->validateCheckbox()) {
            $_SESSION["errorMessage"] = 'Bitte die Checkbox bestätigen.';
            
            return false;
        }
        
        if($this->name == '' 
            || $this->nachname == "" 
            || $this->adresse =="" 
            || $this->nummer =="" 
            || $this->stadt =="" 
            || $this->plz =="") {
            $_SESSION["errorMessage"] = 'Bitte alle Felder ausfüllen.';
            
            return false;
        }
        
        return true;
    }
    
    public function testField()
    {
        $this->sessionVarReset();
        
        return "{$this->name} {$this->nachname} <br> {$this->adresse} {$this->nummer} <br> {$this->stadt} {$this->plz}";   
    }
 }
 /*if (!isset($_POST["checkbox"]))
{
    echo "Bitte Checkbox ausfüllen.";
    die();
}
 $user = new User();
$user->requestData($_POST);
echo "$user->name <tab>";
echo "$user->nachname <br>";
echo "$user->adresse <tab>";
echo "$user->nummer <br>";
echo "$user->stadt <tab>";
echo "$user->plz <br>"; */
$user = new User();
$user->requestData($_POST);
$user->sessionVar();

 if (isset($_POST["reset"]) && $_POST["reset"] == 'Reset') {
     $user->sessionVarReset();
     header("Location: contact.php");
 }
 
 if (! $user->validate()) {
    header("Location: contact.php");
}
 

//eho $user->fullName();
//echo $user->fullAddresses();
echo $user->testField();
 ?>
