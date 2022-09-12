<?php declare(strict_types=1);

namespace Core\Repository;

/**
 * Interface RepositoryInterface
 */
interface RepositoryInterface
{
    /**
     * @param object $update
     * @return bool
     */
    public function saveDate(object $update): bool;

    /**
     * @param object $update
     * @return bool
     */
    public function checkOnExistUserData(object $update): bool;

    /**
     * @param string $userName
     * @return object
     */
    public function getDataByUserName(string $userName): object;
}