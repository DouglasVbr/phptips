<?php

class animaisDAO extends Animais
{
private $conn;
private $table = 'animais';
private $dbname = 'animais';

private $host = 'localhost';
private $username = 'root';
private $password = '';


// metodo para conectar o banco de dados
public function connect(){
    $this->conn = null;

    try{
        $this->conn = new PDO("mysql:host" . $this->host . ";dbname" . $this->dbname, $this->username, $this->password);

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die ('Erro ao conectar: ' . $e->getMessage());
    }
    return $this->conn;
}

// método para execultar uma query simples (INSERT, UPDATE, DELETE)
public function execulteQuery($sql, $params = []){
    try{
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }catch(PDOException $e){
        die('Erro ao executar query: ' . $e->getMessage());
    }
}

//metodo para buscar multiplos registros (SELECT)
public function fetchAll($sql,  $params = []){
    try {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch();
    } catch (PDOException $e) {
        die('Erro ao executar query: ' . $e->getMessage());
    }
}



}