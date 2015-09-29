<?php namespace Pare\Repository\Eloquent;

use Pare\Repository\Contracts\ReadableRepositoryInterface;
use Pare\Repository\Traits\Readable;

/**
 * ReadableRepository
 * @package Pare\Repository\Contracts
 */
abstract class ReadableRepository extends BaseRepository implements ReadableRepositoryInterface
{
    use Readable;
}
