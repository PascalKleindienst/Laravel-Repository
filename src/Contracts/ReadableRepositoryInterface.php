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
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, array $columns = ['*']);

    /**
     * @param $field
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($field, $value, array $columns = ['*']);

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
     * @return mixed
     */
    public function findWhere($where, array $columns = ['*']);
}
