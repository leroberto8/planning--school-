<?php  
// Fichier : app/models/User.php  
require_once '../core/Model.php';  

class User extends Model {  
    public function findByEmail($email) {  
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");  
        $stmt->execute([$email]);  
        return $stmt->fetch(PDO::FETCH_ASSOC);  
    }  

    public function register($data) {  
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password, role, secret_code) VALUES (?, ?, ?, ?, ?)");  
        return $stmt->execute([  
            $data['name'],  
            $data['email'],  
            $data['password'],  
            $data['role'],  
            $data['secret_code']  
        ]);  
    }  

	public function updatePassword($email, $hashedPassword) {
		$sql = "UPDATE users SET password = :password WHERE email = :email";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(':password', $hashedPassword);
		$stmt->bindParam(':email', $email);
		return $stmt->execute();
	}


    // New method to check if an email already exists in the database  
    public function emailExists($email) {  
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");  
        $stmt->execute([$email]);  
        return $stmt->fetch(PDO::FETCH_ASSOC) !== false; // Returns true if email exists, false otherwise  
    }  
}  
?>