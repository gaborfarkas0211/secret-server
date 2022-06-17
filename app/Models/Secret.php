<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Secret
 *
 * @property int $id
 * @property string $hash
 * @property string $secret_text
 * @property string $created_at
 * @property string $expires_at
 * @property int $remaining_views
 * @method static \Illuminate\Database\Eloquent\Builder|Secret newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Secret newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Secret query()
 * @method static \Illuminate\Database\Eloquent\Builder|Secret whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Secret whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Secret whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Secret whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Secret whereRemainingViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Secret whereSecretText($value)
 * @mixin \Eloquent
 */
class Secret extends Model
{
    public $fillable = [
        'hash',
        'secret_text',
        'created_at',
        'expires_at',
        'remaining_views',
    ];
    public $timestamps = false;
}
