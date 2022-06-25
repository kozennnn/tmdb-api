<?php

namespace Kozennnn\TmdbAPI\Api;

class Movies extends Api
{

    /**
     * Get movie information of the specified movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getMovie(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId, $parameters);
    }

    /**
     * Grab the following account states for a session:
     * - Movie rating
     * - If it belongs to your watchlist
     * - If it belongs to your favourite list
     *
     * @param int $movieId
     * @param string $sessionId
     * @param array $parameters
     * @return array
     */

    public function getAccountStates(int $movieId, string $sessionId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/account_states?session_id=' . $sessionId . "&", $parameters);
    }

    /**
     * Get all of the alternative titles for a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getAlternativeTitles(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/alternative_titles', $parameters);
    }

    /**
     * Get the changes for a movie. By default only the last 24 hours are returned.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getChanges(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/changes', $parameters);
    }

    /**
     * Get the cast and crew for a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getCredits(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/credits', $parameters);
    }

    /**
     * Get the external ids for a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getExternalIds(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/external_ids', $parameters);
    }

    /**
     * Get the images that belong to a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getImages(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/images', $parameters);
    }

    /**
     * Get the keywords that have been added to a movie.
     *
     * @param int $movieId
     * @return array
     */

    public function getKeywords(int $movieId): array
    {
        return $this->get('movie/' . $movieId . '/keywords');
    }

    /**
     * Get a list of lists that this movie belongs to.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getLists(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/lists', $parameters);
    }

    /**
     * Get a list of recommended movies for a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getRecommendations(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/recommendations', $parameters);
    }

    /**
     * Get the release date along with the certification for a movie.
     *
     * @param int $movieId
     * @return array
     */

    public function getReleaseDates(int $movieId): array
    {
        return $this->get('movie/' . $movieId . '/release_dates');
    }

    /**
     * Get the user reviews for a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getReviews(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/reviews', $parameters);
    }

    /**
     * Get a list of similar movies.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getSimilarMovies(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/similar', $parameters);
    }

    /**
     * Get a list of translations that have been created for a movie.
     *
     * @param int $movieId
     * @return array
     */

    public function getTranslations(int $movieId): array
    {
        return $this->get('movie/' . $movieId . '/translations');
    }

    /**
     * Get the videos that have been added to a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getVideos(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/videos', $parameters);
    }

    /**
     * Get a list of the availabilities per country by provider.
     *
     * @param int $movieId
     * @return array
     */

    public function getWatchProviders(int $movieId): array
    {
        return $this->get('movie/' . $movieId . '/watch/providers');
    }

    /**
     * Rate a movie.
     *
     * @param int $movieId
     * @param float $rating
     * @return array
     */

    public function rateMovie(int $movieId, float $rating): array
    {
        return $this->post('movie/' . $movieId . '/rating', ['value' => $rating]);
    }

    /**
     * Remove your rating for a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function deleteRating(int $movieId, array $parameters = []): array
    {
        return $this->delete('movie/' . $movieId . '/rating', null, $parameters);
    }

    /**
     * Get the most newly created movie. This is a live response and will continuously change.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getLatest(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/latest', $parameters);
    }

    /**
     * Get a list of movies in theatres. This is a release type query that looks for all movies that have a release type of 2 or 3 within the specified date range.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getNowPlaying(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/now_playing', $parameters);
    }

    /**
     * Get a list of the current popular movies on TMDB. This list updates daily.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getPopular(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/popular', $parameters);
    }

    /**
     * Get the top rated movies on TMDB.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getTopRated(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/top_rated', $parameters);
    }

    /**
     * Get a list of upcoming movies in theatres. This is a release type query that looks for all movies that have a release type of 2 or 3 within the specified date range.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getUpcoming(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/upcoming', $parameters);
    }

}