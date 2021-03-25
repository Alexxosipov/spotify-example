<?php


interface PlaylistSourceInterface
{
    public function getPlaylist(array $songs): Playlist;
}