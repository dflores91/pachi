<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //

    public function upload(Request $request){
		$sql = "SELECT * FROM proyectos WHERE id = $id_proyec";
		DB::insert('INSERT INTO proyects (comentario) VALUES ($comentario)');
    	$files = $request->file('file');

    	
    if($files["proyecto"]["error"]>0){
        echo "Error al cargar archivo";	
    } else {
            
        $permitidos = array("application/txt","application/pdf","application/zip");
            
        if(in_array($_FILES["proyecto"]["type"], $permitidos)){
                
            $ruta = '../../files/proyectos/'.$id_insert.'/';
            $archivo = $ruta.$_FILES["proyecto"]["nombre"];
                
            if(!file_exists($ruta)){
                mkdir($ruta);
            }
                
            if(!file_exists($archivo)){
                    
                $resultado = @move_uploaded_file($_FILES["proyecto"]["tmp_name"], $archivo);
                    
                if($resultado){
                    echo "Archivo Guardado";
                } else {
                    echo "Error al guardar archivo";
                }
                    
            } else {
                echo "Archivo ya existe";
            }
                
            } else {
                echo "Archivo no permitido o excede el tamaño";
            }
            
        }
    header("Location: entrenamiento.php?user=$idase");
    die();
    	

    	return \Response::json(array('success' => true));
    }
}