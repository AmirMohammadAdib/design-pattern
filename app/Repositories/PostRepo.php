<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection; // Import the Collection class
use Illuminate\Database\Eloquent\Model as TModel; // Import the base Model class
use App\Repositories\Interfaces\PostRepo as PostInterface;

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
     * This method will fetch all posts from the data source.
     * 
     * @return Collection - A collection of all posts.
     */
    public function getAll(): Collection {
        // Fetch and return all posts from the database using Eloquent.
        return Post::all();
    }

    /**
     * Retrieve a specific post by ID.
     * 
     * This method will fetch a post by its ID from the data source.
     * 
     * @param int $id - The ID of the post to retrieve.
     * @return TModel - The post model instance.
     */
    public function getPost(int $id): TModel {
        // Fetch and return the post by its ID, or throw a ModelNotFoundException if not found.
        return Post::findOrFail($id);
    }

    /**
     * Create a new post.
     * 
     * This method will store a new post in the data source.
     * 
     * @param array $data - An associative array containing the post data.
     * @return TModel - The created post model instance.
     */
    public function storePost(array $data): TModel {
        // Create and return a new post in the database.
        return Post::create($data);
    }

    /**
     * Update a specific post.
     * 
     * This method will update an existing post in the data source.
     * 
     * @param array $data - An associative array containing the new post data.
     * @param int $id - The ID of the post to update.
     * @return TModel - The updated post model instance.
     */
    public function updatePost(array $data, int $id): TModel {
        // Find the post by its ID and update it with the new data.
        $post = Post::findOrFail($id);
        $post->update($data);
        return $post; // Return the updated post
    }

    /**
     * Delete a post by ID.
     * 
     * This method will remove a post from the data source.
     * 
     * @param int $id - The ID of the post to delete.
     * @return bool - Returns true on successful deletion, false otherwise.
     */
    public function destroyPost(int $id): bool {
        // Find the post by its ID and delete it.
        $post = Post::findOrFail($id);
        return $post->delete(); // Return the result of the delete operation
    }
}
