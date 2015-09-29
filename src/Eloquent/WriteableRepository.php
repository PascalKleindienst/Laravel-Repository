<?php namespace Pare\Repository\Eloquent;

use Pare\Repository\Contracts\WriteableRepositoryInterface;
use Pare\Repository\Traits\Writeable;

/**
 * WriteableRepository
 * @package Pare\Repository\Contracts
 */
abstract class WriteableRepository extends BaseRepository implements WriteableRepositoryInterface
{
    use Writeable;
}
