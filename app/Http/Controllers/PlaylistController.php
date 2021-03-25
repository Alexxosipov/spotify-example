<?php


class PlaylistController
{
    private PlaylistService $playlistService;

    public function __construct(PlaylistService $playlistService)
    {
        $this->playlistService = $playlistService;
    }

    /**
     * in the request we're validating the new user who just has been connected
     *
     * @param Request $request
     */
    public function get(Request $request)
    {
        // some object/smth from the request
        $user = $request->user;

        // we would need to catch exceptions that would be thrown from the method
        return $this->playlistService->regeneratePlaylistOnConnection($request->user);
    }
}