<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;


class Product extends Model{

    
    /**

    * PRODUCT ATTRIBUTES

    * $this->attributes['id'] - int - contains the product primary key (id)

    * $this->attributes['name'] - string - contains the product name

    * $this->attributes['price'] - int - contains the product price

    * $this->comments - Comment[] - contains the associated comments

    *$this->attributes['created_at'] - datetime - the time it was created
    *$this->attributes['updated_at'] - datetime - the time it was updated for the last time

    */

    protected $fillable = ['name','price'];

    public function getId(): int{
        return $this->attributes['id'];
    }

    /*public function setId($id) : void{
        $this->attributes['id'] = $id;
    }*/

    public function getName(): string{
        return $this->attributes['name'];
    }

    public function setName($name) : void{
        $this->attributes['name'] = $name;
    }

    public function getPrice(): int{
        return $this->attributes['price'];
    }

    public function setPrice($price) : void{
        $this->attributes['price'] = $price;
    }

//--------------------------------------------------------------
public static function validate(Request $request) {
    $request->validate(["name"=>"required","price"=>"required|numeric|gt:0"]);
}

//-------------------------------------------------------------
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function setComments(Collection $comments): void
    {
        $this->comments = $comments;
    }


}

