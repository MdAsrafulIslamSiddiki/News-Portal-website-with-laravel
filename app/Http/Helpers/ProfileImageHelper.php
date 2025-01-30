<?php 

if (!function_exists('getProfileImage')) {
    function getProfileImage() {
        if (auth()->user()?->ProfileImage) {
            return auth()->user()->ProfileImage;
        }
        else{
            return 'https://api.dicebear.com/9.x/initials/svg?seed='. auth()?->user()?->name .'&backgroundColor=b6e3f4';
        }
    }
}