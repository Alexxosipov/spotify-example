<?php


class PlaylistService
{
    private PlaylistSourceInterface $playlistSource;
    private UserService $userService;
    
    public function __construct(PlaylistSourceInterface $playlistSource, UserService $userService)
    {
        $this->playlistSource = $playlistSource;
        $this->userService = $userService;
    }

    public function regeneratePlaylistOnConnection(User $user)
    {
        $users = $this->userService->attachUser($user);

        return $this->getPlaylistByUsers($users);
    }
    /**
     * @param User[] $users
     */
    public function getPlaylistByUsers(array $users)
    {
        $suitableSongs = $this->getSuitableSongsFromUsers($users);

        return $this->playlistSource->getPlaylist($suitableSongs);
    }

    /**
     * @param User[] $users
     */
    private function getSuitableSongsFromUsers(array $users)
    {
        $suitableSongs = [];
        return $suitableSongs;
    }
}