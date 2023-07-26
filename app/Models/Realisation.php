<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = ["name", "desc", "service_id"];



    // CRUD methods


    /**
     * Store realisation to the database
     */
    public function store($data){
        try{
            $this->create($data);
            return "La realisation a bien été créé"; 
        }catch(\Exception $error){
            return [
                "error" => "Une erreur est survenu lors de la creation. Contactez les developpeurs"
            ];
        }
    }



    /**
     * Update realisation to the database
     */
    public function update($realisation){
        try{
            $realisation->save(); 
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
            $realisation = $this->find($id);
            return $realisation ; 
        }catch(ModelNotFoundException $e){
            return [
                "error" => "La realisation n'a pas pue etre trouvée"
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
            $realisation = $this->where('name', $name)->first();
            return $realisation ; 
        }catch(ModelNotFoundException $e){
            return [
                "error" => "La realisation n'a pas pue etre trouvée"
            ]; 
        }catch(\Exception $e){
            return [
                "error" => "Une erreur est survenu. Contactez les developpeurs"
            ];
        }
     }




    /**
     * DB relationship functions
     *  */ 


    public function service(){
        return $this->belongsTo(Service::class); 
    }

    public function images(){
        return $this->hasMany(Gallery::class); 
    }

}
