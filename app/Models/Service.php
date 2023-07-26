<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "desc", "icon"
    ];


    public function store($data){
        try{
            $this->create($data);
            return "Le service a bien été créé"; 
        }catch(\Exception $error){
            return [
                "error" => "Une erreur est survenu lors de la creation. Contactez les developpeurs"
            ];
        }
    }



    /**
     * Update realisation to the database
     */
    public function update($service){
        try{
            $service->save(); 
        }catch(\Exception $error){
            return [
                "error" => "Une erreur est survenu lors de la modification. Contactez les developpeurs"
            ];
        }
    }


    /**
     * GET realisation to the database by ID
     */
    public function get_byID($id){
        try{
            $service = $this->find($id);
            return $service ; 
        }catch(ModelNotFoundException $e){
            return [
                "error" => "Le service n'a pas pue etre trouvée"
            ]; 
        }catch(\Exception $e){
            return [
                "error" => "Une erreur est survenu. Contactez les developpeurs"
            ];
        }
     }


    /**
     * GET realisation to the database by name
     */
     public function get_byName($name){
        try{
            $service = $this->where('name', $name)->first();
            return $service ; 
        }catch(ModelNotFoundException $e){
            return [
                "error" => "Le service n'a pas pue etre trouvée"
            ]; 
        }catch(\Exception $e){
            return [
                "error" => "Une erreur est survenu. Contactez les developpeurs"
            ];
        }
     }


    public function realisations(){
        return $this->hasMany(Realisation::class);
    }

}
