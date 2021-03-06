<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Country
 *
 * @method static Builder|Country newModelQuery()
 * @method static Builder|Country newQuery()
 * @method static Builder|Country query()
 * @mixin \Eloquent
 */
class Country extends Model
{
    use HasFactory;

    /**
     * Class Country
     * @package App
     * @mixin Builder
     */

    /*Указывает в модели для Laravel параметры колонок бд для корректного работы запросов в контроллере*/

    protected $table = 'country';
    protected $primaryKey = 'Code';
    public $incrementing = false;
    protected $keyType = 'string';



}
