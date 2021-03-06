<?php

namespace Maenbn\OpenAmAuthLaravel\Factories;


use Maenbn\OpenAmAuthLaravel\Contracts\UserRepository;
use Maenbn\OpenAmAuthLaravel\Mappers\UserMapper;

class UserMapperFactory
{
    /**
     * @param UserRepository|null $userRepository
     * @param string|null $eloquentGuestUid
     * @return UserMapper
     */
    public static function create(UserRepository $userRepository = null, $eloquentGuestUid = null)
    {
        return new UserMapper($userRepository, $eloquentGuestUid);
    }

}