<?php

namespace App\Repositories\Interfaces;

/**
 * Interface PostRepo
 * 
 * This interface defines the necessary methods for managing posts.
 * Implementing this interface in repositories helps manage access to post data in a more organized and testable manner.
 */
interface PostRepo {

    /**
     * Retrieve all posts.
     * 
     * @return mixed
     */
    public function getAll();

    /**
     * Retrieve a specific post by ID.
     * 
     * @param int $id
     * @return mixed
     */
    public function getPost(int $id);

    /**
     * Create a new post.
     * 
     * @param array $data
     * @return mixed
     */
    public function storePost(array $data);

    /**
     * Update a specific post.
     * 
     * @param array $data - The new information for the post
     * @param int $id - The ID of the post to be updated
     * @return mixed
     */
    public function updatePost(array $data, int $id);

    /**
     * Delete a post by ID.
     * 
     * @param int $id - The ID of the post
     * @return bool
     */
    public function destroyPost(int $id);
}
