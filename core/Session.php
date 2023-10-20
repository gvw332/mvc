<?php
// Gère toutes les variables de sessions
class Session{
    static $is_auth = false;
    static $is_admin = false;
    static $login = '';

    // A chaque fois qu'on fait une new session le constructeur va regarder si il existe une session en cours
    public function __construct(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->checkLogin();
    }
    // Contrôle l'identification pour voir si l'utilisateur est authentifié ou pas et s'il est admin ou pas
    static function checkLogin(){
        if (isset($_SESSION['niveau'])) {
            self::$login = $_SESSION['login'];
            if ($_SESSION['niveau'] == 1) {
                self::$is_auth = true;
                self::$is_admin = true;
            } else if ($_SESSION['niveau'] == 2) {
                self::$is_auth = true;
                self::$is_admin = false;
            }
        } else {
            self::$login = '';
            self::$is_auth = false;
            self::$is_admin = false;
        }
    }    
    // Crée des messages ; $Color {danger=rouge, success=vert}
    public function setFlash($message, $color = "danger"){
        $_SESSION['flash'] = array(
            "message" => $message,
            "type" => $color,
        );
    }
    // Crée l'affichage du message
    public function flash(){
        if (isset($_SESSION['flash'])) {
        ?>
            <div id="alert" class="text-center alert alert-<?php echo $_SESSION['flash']['type']; ?>">
                <?php echo $_SESSION['flash']['message']; ?>
            </div>
        <?php
            unset($_SESSION['flash']);
        }
    }
    // Renvoie une page avec des valeurs ou pas 
    public function render($route, $values = null){
        if (is_null($values)) {
            header("Location: " . HOST . $route);
            exit;
        } else {
            header("Location: " . HOST . $route . '/' . $values);
            exit;
        }
    }
}