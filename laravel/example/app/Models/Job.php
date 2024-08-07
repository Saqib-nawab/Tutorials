<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model
{

    use HasFactory;
    protected $table = 'job_listing';

    protected $fillable = ['title', 'salary'];
}


// without model
// class Job
// {
//     public static function all(): array
//     {
//         return
//             [
//                 [
//                     'id' => '1',
//                     'title' => 'Director',
//                     'salary' => '$10,000',
//                 ],
//                 [
//                     'id' => '2',
//                     'title' => 'Developer',
//                     'salary' => '$5,000',
//                 ],
//                 [
//                     'id' => '3',
//                     'title' => 'Designer',
//                     'salary' => '$3,000',
//                 ]
//             ];
//     }

//     public static function find($id): array
//     {
//         return Arr::first(static::all(), fn ($job) => $job['id'] == $id);
//     }
// }
