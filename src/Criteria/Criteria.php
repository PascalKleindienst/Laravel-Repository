<?php namespace Pare\Repository\Criteria;

use Pare\Repository\Eloquent\BaseRepository as Repository;

abstract class Criteria
{
    /**
     * @param $model
     * @param Repository $repository
     * @return mixed
     */
    abstract public function apply($model, Repository $repository);
}
