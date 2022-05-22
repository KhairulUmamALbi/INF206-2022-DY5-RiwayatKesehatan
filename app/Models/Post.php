<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Fields

    protected $table='users';
    protected $guarded=[];

    // private $id;
    // private $user_id;
    // private $request_id;

    /**
     * kardinalitas: one-to=many
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Banyak rumah sakit dapat menolonongi satu pertolongan
     * kardinalitas: one (request) to many (post)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * Sebuah Method untuk mengambil data dari tabel posts
     * @param Unused
     * @return Array<int, string> Meretrieve semua data dari tabel posts
     */
    public function getPosts(){
        return $this->all();
    }

    /**
     * Sebuah Method untuk menambahkan data ke tabel posts
     * @param $user_id, $request_id
     * @return nothing (void)
     */
    public function addPost($id, $request_id){
        $this->id = $id;
        $this->request_id = $request_id;
        $this->save();
    }

    /**
     * Sebuah Method untuk menghapus data dari tabel posts
     *
     */
    public function deletePost($id){
        $this->where('id', $id)->delete();
    }





}
