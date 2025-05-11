<?php  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/autoload.php'; 
// Fichier : app/controllers/AuthController.php  
require_once '../core/Controller.php';  

class AuthController extends Controller {  
    private $userModel;  

    public function __construct() {  
        $this->userModel = $this->model('User'); // Initialize the User model  
        //session_start(); // Start the session for user authentication  
    }  

    // Method to handle user login  
    public function login() {  
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
            $email = trim($_POST['email']);  
            $password = trim($_POST['password']);  
            
            $user = $this->userModel->findByEmail($email); // Fetch user by email  
            
            if (!$user) {  
                echo "No user found with this email.";  
                return; // Stop further processing  
            }  
            
            // Debugging to show hashed password  
            error_log("Hash from database: " . $user['password']);   
            
            // Verify password and check user  
            if (password_verify($password, $user['password'])) {  
                $_SESSION['user'] = $user;   
                header('Location: /planning-school/dashboard/index');   
                exit();  
            } else {  
                echo "Login failed. Please check your credentials.";  
            }  
        } else {  
            $this->view('auth/login');  
        }  
    }  

    // Method to handle user registration  
    public function register() {  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
        $data = [  
            'name' => trim($_POST['name']),  
            'email' => trim($_POST['email']),  
            'password' => password_hash(trim($_POST['password']), PASSWORD_DEFAULT),  
            'role' => trim($_POST['role']),  
            'secret_code' => trim($_POST['secret_code'])  
        ];  

        // Check if email already exists  
        if ($this->userModel->emailExists($data['email'])) {  
            echo "This email is already registered. Please use a different email.";  
            return; // Stop further processing  
        }  

        $validCodes = [  
            'student' => 'STUDENT123',  
            'teacher' => 'TEACHER123',  
            'admin' => 'ADMIN123'  
        ];  

        if (isset($validCodes[$data['role']]) && $data['secret_code'] === $validCodes[$data['role']]) {  
            if ($this->userModel->register($data)) {  
                header('Location: /planning-school/auth/login');  
                exit();  
            } else {  
                echo "Registration failed. Please try again.";  
            }  
        } else {  
            echo "Invalid secret code.";  
        }  
    } else {  
        $this->view('auth/register');  
    }  
}
      // logout 
	  public function logout() {  
        // Détruisez la session pour déconnecter l'utilisateur  
        session_unset(); // Supprimez toutes les variables de session  
        session_destroy(); // Détruisez la session  

        // Redirigez vers la page de connexion ou une autre page  
        header('Location: /planning-school/auth/login'); // Ajustez la redirection si nécessaire  
        exit();  
    }  

    // Method for password reset (Optional)  
    public function reset() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $newPassword = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);

        if ($this->userModel->updatePassword($email, password_hash($newPassword, PASSWORD_DEFAULT))) {
            $mail = new PHPMailer(true);
            try {
                // Paramètres SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'tidoghost135@gmail.com';
                $mail->Password = 'yczd mxts riqc bwbf';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Expéditeur et destinataire
                $mail->setFrom('tidoghost135@gmail.com', 'Système Schoolboy');
                $mail->addAddress($email);

                // Contenu
                $mail->isHTML(true);
                $mail->Subject = 'Réinitialisation de mot de passe';
                $mail->Body    = "Votre nouveau mot de passe est : <b>$newPassword</b>";

                $mail->send();
                echo "Nouveau mot de passe envoyé par email.";
            } catch (Exception $e) {
                echo "Erreur lors de l'envoi de l'email : {$mail->ErrorInfo}";
            }
        } else {
            echo "Échec de mise à jour du mot de passe.";
        }
    } else {
        $this->view('auth/reset');
    }
}
}  
?>