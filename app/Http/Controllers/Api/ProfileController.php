<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AllPostsCollection;
use App\Http\Resources\UserCollection;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $posts = Post::where('user_id', $id)->orderBy('created_at', 'desc')->get();
            $user = User::where('id', $id)->get();

            return response()->json([
                'posts' => new AllPostsCollection($posts),
                'user' => new UserCollection($user)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
