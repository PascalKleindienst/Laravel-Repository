<?php namespace Pare\Repository\Eloquent;

use Pare\Repository\Contracts\RepositoryInterface;
use Pare\Repository\Traits\Readable;
use Pare\Repository\Traits\Writeable;

/**
 * Repository
 * @package Pare\Repository\Contracts
 */
abstract class Repository extends BaseRepository implements RepositoryInterface
{
    use Readable;
    use Writeable;
}
