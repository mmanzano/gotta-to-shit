<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Gotta Shit
    |--------------------------------------------------------------------------
    |
    | Text for Gotta Shit
    |
    */

    'site_name' => 'Gotta Shit',
    'welcome' => 'Welcome to Gotta Shit. You can start to evaluate the WC in your around when you',
    'footer_year' => '2015',
    'no_geolocation' => 'Geolocation is not supported by this browser.',
    'home' => '
        <p>Welcome to Gotta Shit!</p>

        <p>Have you got to take a shit? <br/>This is the right website for you.</p>

        <p>Here you can:</p>

        <ul>
            <li>Search and find the best sites to poo close to you</li>
            <li>Check the shitty ratings of the spot</li>
            <li>View opinions from other users</li>
        </ul>

        <p>Once you sign up you will be able to...</p>

        <ul>
            <li>Add new places to take a shit</li>
            <li>Express yourself about the place</li>
            <li>Rate toilets and comment on them</li>
        </ul>

        <p>Register now and join us!</p>
    ',

    'nav' => array (
        'login' => 'Login',
        'logout' => 'Logout',
        'register' => 'Register',
        'add_place' => 'Add',
        'user_places' => 'Yours places',
        'all' => 'All',
        'nearest' => 'Nearest',
    ),

    'user' => array (
        'login' => 'Login',
        'logout' => 'Logout',
        'register' => 'Register',
        'email' => 'Email',
        'password' => 'Password',
        'remember_me' => 'Remember me',
        'full_name' => 'Full name',
        'username' => 'Username',
        'confirm_password' => 'Confirm password',
        'delete' => 'Delete',
        'edit' => 'Edit',
        'sent_password_reset' => 'Send Password Reset Link',
        'forgot_password' => 'Forgot your password?',
        'reset_password' => 'Reset password',
    ),

    'place' => array(
        'name' => 'Name',
        'my_location' => 'Get my current location',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'create_place' => 'Create Place',
        'edit_place' => 'Edit Place',
        'update_place' => 'Update Place',
        'delete_place' => 'Delete Place',
        'created_place' => ':place Created',
        'updated_place' => ':place Updated',
        'deleted_place' => ':place Deleted',
        'edit_place_not_allowed' => 'You are not allowed for edit :place',
        'update_place_not_allowed' => 'You are not allowed for update :place',
        'delete_place_not_allowed' => 'You are not allowed for delete :place',
    ),

    'comment' => array(
        'comments' => '{0} No comments. Be first in comment|{1} :number_of_comments Comment|[2,Inf] :number_of_comments Comments',
        'create_comment_label' => 'Leave a comment',
        'create_comment' => 'Send comment',
        'edit_comment' => 'Edit comment',
        'update_comment_label' => 'Update your comment',
        'update_comment' => 'Update comment',
        'delete_comment' => 'Delete comment',
        'created_comment' => ':place commented',
        'updated_comment' => 'Comment for :place updated',
        'deleted_comment' => 'Comment for :place Deleted',
        'edit_comment_not_allowed' => 'You are not allowed for edit this comment for :place',
        'update_comment_not_allowed' => 'You are not allowed for update this comment for :place',
        'delete_comment_not_allowed' => 'You are not allowed for delete this comment for :place',
    ),
    'star' => array(
        'stars' => 'Stars',
        'votes' => 'Votes',
        'rate_place' => 'Rate this',
        'rated' => ':place Rated',
        'delete_star' => 'Delete rate',
        'deleted_star' => 'Rate for :place deleted',
    ),
    'exception' => array(
        '503' => 'We have a litle problem',
        '404' => "Sorry, I can't find it",
        'token' => 'Try again',
    )

];
