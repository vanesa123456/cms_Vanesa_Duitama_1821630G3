<?php
//Herencia
class publicacion extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publicaciones");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO publicaciones (title, descripcion, image) VALUES (?,?,?)");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['descripcion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['rutas'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error publi->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publicaciones WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE publicaciones SET descripcion = ?, title = ? WHERE id = ?");
            $result->bindParam(1, $data['descripcion'], PDO::PARAM_STR);
            $result->bindParam(2, $data['title'], PDO::PARAM_STR);
            $result->bindParam(3, $data['id'], PDO::PARAM_INT);
         
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }
    public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM publicaciones WHERE id = ?");
            $result->bindParam(1, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }
}
