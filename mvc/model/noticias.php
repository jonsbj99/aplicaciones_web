<?php
class Noticia
{
	private $pdo;
    
    public $id;
    public $titulo;
    public $texto;
    public $categoria;
    public $fecha;
 

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
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

			$stm = $this->pdo->prepare("SELECT * FROM noticias");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM noticias WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM noticias WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE noticias SET 
						titulo          = ?, 
						texto           = ?,
                        categoria       = ?,
						fecha           = ?
					
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->titulo, 
                        $data->texto,
                        $data->categoria,
                        $data->fecha,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Noticia $data)
	{
		try 
		{
		$sql = "INSERT INTO noticias (titulo,texto,categoria,fecha) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->titulo,
                    $data->texto, 
                    $data->categoria, 
                    $data->fecha
                  
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}