<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureRespawn
 * 
 * @property int $guid
 * @property int $respawnTime
 * @property int $mapId
 * @property int $instanceId
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class CreatureRespawn extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'creature_respawn';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'respawnTime' => 'int',
		'mapId' => 'int',
		'instanceId' => 'int'
	];

	protected $fillable = [
		'respawnTime',
		'mapId'
	];
}
