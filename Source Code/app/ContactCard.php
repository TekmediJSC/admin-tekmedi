<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ContactCard
 *
 * @property int $id
 * @property string $name
 * @property string $position
 * @property string $email
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ContactCard whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ContactCard extends Model {
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'position', 'email', 'phone'];

}
