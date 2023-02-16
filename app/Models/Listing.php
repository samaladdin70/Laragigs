<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    /* Make fillable to can insert in db */
    /* protected $fillable = [
        'title', 'company', 'location', 'website', 'email', 'tags', 'description'
    ]; */
    /* instead of above fillable we can make unguard() in app/Providers/AppServiceProvider.php in bethod boot but you must be aware */
    // create filtering function - the name is schema for that purpose
    public function scopeFilter($query, array $filters)
    {
        //dd($filters);
        // dd($filters['tag']);
        if ($filters['tag'] ?? false) { // instead of isset()
            //dd($filters['tag']);
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) { // instead of isset()
            //dd($filters['tag']);
            $query->where('title', 'like', '%' . request('search') . '%')->orwhere('description', 'like', '%' . request('search') . '%')->orwhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    /* relationship to User */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
