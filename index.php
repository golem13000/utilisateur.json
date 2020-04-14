<?php



class Utilisateur {

    public $pseudo;
    public $password;
    public $email;
    





    function __construct(string $pseudo, string $password) {
        $this->pseudo;
        $this->password;
    }
    
    function getPseudo(): string {
        return $this->pseudo;
    }
    
    function setPseudo($pseudo) {
        $this->pseudo = $_POST["pseudo"];
    }
    
    
    function getPassword(): string {
        return $this->password;
    }
    
    function setPassword($password) {
        $this->password = $_POST["pass"];
    }
    
    function insert_user(){
        require 'form.php';
        $this->save_user();
    }
    
    
    
    
    function save_user() {        
    
    $pseudo = fopen("utilisateur.json", "a+");
    fwrite($pseudo, json_encode($_POST));
    fclose($pseudo);
    
    }

  
    
    
    
    
    
    
    
    
    };

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
    <link rel="stylesheet" type="text/css" href="cv.css">
</head>
<body>
    <header id="entete">
    </header>
    <div id="encadre">
        <article id="cadre">
            <p>
            <form method="post"action="index.php">
                 <fieldset>
                  <legend>information principale</legend>
                    <label for="pseudo"> pseudo</label>
                    <input type="text" name="pseudo" id="pseudo"placeholder="" required="required"/><br>
                    <label for="pass"> mot de passe</label>
                    <input type="password"name="pass" id="pass"/>
                    <label for="password-repeat"> répétez mot de passe</label>
                    <input type="password-repeat"name="repeat" id="repeat"/>
                    <label for="email"> email</label>
                    <input type="email"name="email" id="email"/>
                    <imput type="submit" value="envoyer">

                 </fieldset>
            </p>
        </article>
    </div>

    <input type="submit" value="Ajouter">

       
    

</body>
</html>
