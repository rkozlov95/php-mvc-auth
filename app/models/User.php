<?php

namespace models;

class User extends Model
{
    public function getUserByEmail($email)
    {
        $query = "SELECT *
                  FROM users
                  WHERE email = :email
                  LIMIT 1";

        $this->db->prepareQuery($query);

        $this->db->bind(':email', $email);

        $this->db->executeStatement();

        return $this->db->result();
    }

    public function isUsernameAvailable($username)
    {
        $username = strtolower($username);
        $query = "SELECT COUNT(username)
                  AS num
                  FROM users
                  WHERE LOWER(username) = :username";

        $this->db->prepareQuery($query);
        $this->db->bind(':username', $username);

        $result = $this->db->result();

        return $result['num'];
    }

    public function isEmailAvailable($email)
    {
        $query = "SELECT COUNT(email)
                  AS num
                  FROM users
                  WHERE email = :email";

        $this->db->prepareQuery($query);
        $this->db->bind(':email', $email);

        $result = $this->db->result();

        return $result['num'];
    }

    public function registerNewUser($username, $email, $password, $about, $imagePath)
    {
        $query = "INSERT INTO users
                      (username, email, password, about, image_path)
                  VALUES
                      (:username, :email, :password, :about, :imagePath)";

        $this->db->prepareQuery($query);
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':about', $about);
        $this->db->bind(':imagePath', $imagePath);

        $result = $this->db->executeStatement();

        return $result;
    }
}
