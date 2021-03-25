<?php


class UserService
{
    /**
     * This method returns an array of connected users
     *
     * @return array
     */
    public function getConnectedUsers()
    {
        return [];
    }

    /**
     * This method is attaching the new user to the array of the method above
     *
     * @return array
     */
    public function attachUser(User $user)
    {
        $currentUsers = $this->getConnectedUsers();
        $currentUsers[] = $user;

        // save the new list of connected users to any storage: cache/db/whatever else

        return $currentUsers;
    }
}