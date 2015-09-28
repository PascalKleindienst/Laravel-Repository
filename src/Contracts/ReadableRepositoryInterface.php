<?php namespace Pare\Repository\Contracts;

/**
 * Interface ReadableRepositoryInterface
 * @package Pare\Repository\Contracts
 */
interface ReadableRepositoryInterface
{
    /**
     * @param array $columns
     * @return mixed
     */
    public function all(array $columns = ['*']);

    /**
     * @param  string $value
     * @param  string $key
     * @return array
     */
    public function lists($value, $key = null);

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, array $columns = ['*']);

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, array $columns = ['*']);

    /**
     * @param $field
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findAllBy($field, $value, array $columns = ['*']);

    /**
     * @param $where
     * @param array $columns
     * @param bool  $useOr
     * @return mixed
     */
    public function findWhere($where, array $columns = ['*'], $useOr = null);
}
