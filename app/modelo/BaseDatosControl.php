<?php
class BaseDatosControl {
    private static $_mControl;
    private function __construct() {}
    
    //retorna un objeto inicializado de la base de datos
    private static function GetControl()
    { 
        $dsn='mysql:dbname=DEBIDOPROCESO;host=localhost;charset=UTF8';
        $username = 'root';
        $password = "aguila83";
        $options[] = 'false, 131072';
        
        if(!isset(self::$_mControl)) //crea una conexion a la bd solo si no hay una
        {
            //catching potenciales excepciones
            try
            {
                //crear PDO instance
                self::$_mControl =
                        new PDO($dsn, $username, $password);
                //configure PDO throw exceptions
                self::$_mControl->setAttribute(PDO::ATTR_ERRMODE,
                                                PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e)
            {
                //close the database Control y dispara un error
                self::Close();
                trigger_error($e->getMessage(),E_USER_ERROR);
            }
        }
        //retorna el controlador de la base de datos
        return self::$_mControl;
    }

    public static function Close()
    {
        self::$_mControl = null;
    }
    
    public static function Execute($sqlQuery, $params = null)
    {
        // try ejecutar un query o procedimiento almacenado
        try
        {
            //obtiene un controlador para la BD
            $basedatos_control = self::GetControl();
            //prepara el query para la ejecucion
            $query_control = $basedatos_control->prepare($sqlQuery);
            //ejecutar query
            $query_control->execute($params);
        }
        catch(PDOException $e)
        {
            self::Close();
            trigger_error($e->getMessage(), E_USER_ERROR);
        }
    }
    
    public static function GetAll($sqlQuery, $params = null,
                            $fetchStyle = PDO::FETCH_ASSOC)
    {
        //Inicializa el valor retornado en nulo
        $result=null;
        //try de ejecutar un query o stored procedure
        try
        {
            //obtiene el control de la BD
            $basedatos_control=self::GetControl();
            //prepara el query para la ejecucion
            $query_control=$basedatos_control->prepare($sqlQuery);
            //ejecuta el query
            $query_control->execute($params);
            //Fetch result
            $result=$query_control->fetchAll($fetchStyle);
        }
        catch(PDOException $e)
        {
            //cierra la BD y dispara un error
            self::Close();
          //  trigger_error($e->getMessage(),E_USER_ERROR);
        }
        //retorna el resultado del query
        return $result;
    }

    public static function GetRow($sqlQuery,$params=null,
                                $fetchStyle = PDO::FETCH_ASSOC)
    {
        //inicializa en nulo el valor a retornar
        $result = null;
        //try ejecutar un query o stored procedure
        try
        {
            //obtiene el control de la BD
            $basedatos_control=self::GetControl();
            //prepara el query para la ejecucion
            $query_control=$basedatos_control->prepare($sqlQuery);
            //ejecuta el query
            $query_control->execute($params);
            //Fetch result
            $result=$query_control->fetch($fetchStyle);
        }
        catch(PDOException $e)
        {
            //cierra la BD y dispara un error
            self::Close();
            trigger_error($e->getMessage(),E_USER_ERROR);
        }
        //retorna el resultado del query
        return $result;
    }
    
    public static function GetOne($sqlQuery, $params)
    {
        //inicializa en nulo el valor a retornar
        $result = null;
        //try ejecutar un query o stored procedure
        try
        {
            //obtiene el control de la BD
            $basedatos_control=self::GetControl();
            //prepara el query para la ejecucion
            $query_control=$basedatos_control->prepare($sqlQuery);
            //ejecuta el query
            $query_control->execute($params);
            //Fetch result
            $result=$query_control->fetch(PDO::FETCH_NUM);
        }
        catch(PDOException $e)
        {
            //cierra la BD y dispara un error
            self::Close();
            trigger_error($e->getMessage(),E_USER_ERROR);
        }
        //retorna el resultado del query
        return $result;
    }
}
?>
