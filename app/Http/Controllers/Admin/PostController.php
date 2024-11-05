<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\PostRepo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $repo;

    // Constructor to inject the PostRepo dependency
    public function __construct(PostRepo $repo) {
        $this->repo = $repo; // Assigning the injected repository to the class property
    }

    /**
     * Display a listing of the resource.
     * 
     * This method retrieves all posts using the repository and returns them.
     * 
     * @return mixed - List of all posts.
     */
    public function index() {
        return $this->repo->getAll(); // Retrieve all posts from the repository
    }

    /**
     * Show the form for creating a new resource.
     * 
     * This method should return a view to create a new post.
     * Currently, it is not implemented.
     * 
     * @return void
     */
    public function create() {
        // Return a view for creating a new post (not implemented)
    }

    /**
     * Store a newly created resource in storage.
     * 
     * This method stores a new post using the data from the request.
     * 
     * @param Request $request - The HTTP request containing post data.
     * @return mixed - The created post instance or response.
     */
    public function store(Request $request) {
        return $this->repo->storePost($request->all()); // Store a new post in the repository
    }

    /**
     * Display the specified resource.
     * 
     * This method retrieves and returns a specific post by its ID.
     * 
     * @param string $id - The ID of the post to retrieve.
     * @return mixed - The requested post instance or response.
     */
    public function show(string $id) {
        return $this->repo->getPost($id); // Retrieve a specific post by ID from the repository
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * This method should return a view to edit the specified post.
     * Currently, it is not implemented.
     * 
     * @param string $id - The ID of the post to edit.
     * @return void
     */
    public function edit(string $id) {
        // Return a view for editing a post (not implemented)
    }

    /**
     * Update the specified resource in storage.
     * 
     * This method updates an existing post using the data from the request.
     * 
     * @param Request $request - The HTTP request containing updated post data.
     * @param string $id - The ID of the post to update.
     * @return mixed - The updated post instance or response.
     */
    public function update(Request $request, string $id) {
        return $this->repo->updatePost($request->all(), $id); // Update the specified post in the repository
    }

    /**
     * Remove the specified resource from storage.
     * 
     * This method deletes a specific post by its ID from the repository.
     * 
     * @param string $id - The ID of the post to delete.
     * @return mixed - The result of the deletion operation.
     */
    public function destroy(string $id) {
        return $this->repo->destroyPost($id); // Delete the specified post from the repository
    }
}
