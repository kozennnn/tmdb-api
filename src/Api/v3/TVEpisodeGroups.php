<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class TVEpisodeGroups extends Api
{

    /**
     * Get the details of a TV episode group. Groups support 7 different types which are enumerated as the following:
     * 1 - Original air date
     * 2 - Absolute
     * 3 - DVD
     * 4 - Digital
     * 5 - Story arc
     * 6 - Production
     * 7 - TV
     *
     * @param int $episodeGroupId
     * @return array
     */

    public function getEpisodeGroup(int $episodeGroupId, array $parameters = []): array
    {
        return $this->get(3, 'tv/episode_group/' . $episodeGroupId, $parameters);
    }
}