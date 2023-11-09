<?php
class Proveedor
{
	private $pdo;
    
    public $idproveedor;
    public $nombre;
    public $ciudad;
    public $telefono;
    public $correo;
    public $colonia;
	public $num_calle;
	public $nom_calle;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbl_proveedor");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idproveedor)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbl_proveedor WHERE idproveedor = ?");
			          

			$stm->execute(array($idproveedor));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idproveedor)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_proveedor WHERE idproveedor = ?");			          

			$stm->execute(array($idproveedor));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbl_proveedor SET 
						nombre          = ?, 
						ciudad        = ?,
                        telefono        = ?,
						correo            = ?, 
						colonia = ?,
						num_calle = ?,
						nom_calle = ?
				    WHERE idproveedor = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->ciudad,
                        $data->telefono,
                        $data->correo,
                        $data->colonia,
						$data->num_calle,
						$data->nom_calle,
                        $data->idproveedor
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `tbl_proveedor` (nombre,ciudad,telefono,correo,colonia,num_calle,nom_calle) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre, 
                    $data->ciudad,
                    $data->telefono,
                    $data->correo,
                    $data->colonia, 
					$data->num_calle,
					$data->nom_calle                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
