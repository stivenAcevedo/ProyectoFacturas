<?php
require_once 'configDb.php'; // Importa la configuración de la BD

class ControlConexionPdo 
{
    private $conn;


    function __construct() {
        $this->conn = null;
    }

    // Método para abrir la conexión con la base de datos.
    function abrirBd() {
        try {
            $dsn = "mysql:host={$GLOBALS['serv']};dbname={$GLOBALS['bdat']};port={$GLOBALS['port']};charset=utf8";
            $this->conn = new PDO($dsn, $GLOBALS['usua'], $GLOBALS['pass']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "❌ ERROR AL CONECTARSE A LA BASE DE DATOS: " . $e->getMessage() . "\n";
            exit();
        }
    }

    // Método para cerrar la conexión a la base de datos.
    function cerrarBd() {
        $this->conn = null;
    }

    // Método para ejecutar comandos SQL (INSERT, UPDATE, DELETE).
    function ejecutarComandoSql($sql, $parametros = []) {
        try {
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute($parametros);
        } catch (PDOException $e) {
            echo "❌ Error al ejecutar SQL: " . $e->getMessage() . "\n";
            return false;
        }
    }

    // Método para ejecutar consultas SELECT y devolver los resultados.
    function ejecutarSelect($sql, $parametros = []) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($parametros);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "❌ ERROR en consulta: " . $e->getMessage() . "\n";
            return false;
        }
    }
}
?>