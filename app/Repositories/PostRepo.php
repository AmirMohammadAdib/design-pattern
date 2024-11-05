<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepo as PostInterface;
use Illuminate\Database\Eloquent\Collection; // Import Collection for type hinting

/**
 * Class PostRepo
 * 
 * This class implements the PostRepo interface, providing concrete methods
 * for managing posts. The methods in this class will contain the logic
 * for interacting with the underlying data storage (e.g., database).
 */
class PostRepo implements PostInterface {

    /**
     * Retrieve all posts.
     * 
     * This method fetches all posts from the data source.
     * 
     * @return Collection
     */
    public function getAll(): Collection  {
        // Retrieve all posts from the database.
        return Post::all();
    }

    /**
     * Retrieve a specific post by ID.
     * 
     * This method fetches a post by its ID from the data source.
     * 
     * @param int $id - The ID of the post to retrieve.
     * @return Post
     */
    public function getPost(int $id): Post  {
        // Retrieve a post by its ID or fail if it doesn't exist.
        return Post::findOrFail($id);
    }

    /**
     * Create a new post.
     * 
     * This method stores a new post in the data source.
     * 
     * @param array $data - An associative array containing the post data.
     * @return Post
     */
    public function storePost(array $data): Post {
        // Store a new post in the database and return it.
        return Post::create($data);
    }

    /**
     * Update a specific post.
     * 
     * This method updates an existing post in the data source.
     * 
     * @param array $data - An associative array containing the new post data.
     * @param int $id - The ID of the post to update.
     * @return Post
     */
    public function updatePost(array $data, int $id): Post {
        // Find the post by ID, update it with the new data, and return the updated post.
        $post = Post::findOrFail($id);
        $post->update($data);
        return $post; // Return the updated post
    }

    /**
     * Delete a post by ID.
     * 
     * This method removes a post from the data source.
     * 
     * @param int $id - The ID of the post to delete.
     * @return bool - Returns true on successful deletion, false otherwise.
     */
    public function destroyPost(int $id): bool {
        // Find the post by ID and delete it.
        $post = Post::findOrFail($id);
        return $post->delete(); // Corrected the method name from 'ddelete' to 'delete'
    }
}
