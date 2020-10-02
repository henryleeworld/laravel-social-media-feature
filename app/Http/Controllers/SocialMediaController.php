<?php

namespace App\Http\Controllers;

use App\Models\User;

class SocialMediaController extends Controller
{
    public function index()
    {
        $admin = User::where('name', 'Admin')->first();
        $carol = User::where('name', 'Carol')->first();
        $tony = User::where('name', 'Tony')->first();
        echo '卡蘿·丹佛斯追蹤東尼·史塔克' . PHP_EOL;
        $carol->follow($tony);
        echo '卡蘿·丹佛斯目前追蹤人數：' . $carol->following()->count() . PHP_EOL;
		echo '東尼·史塔克目前被追蹤人數：' . $tony->followers()->count() . PHP_EOL;
		echo '管理者目前被追蹤人數：' . $admin->followers()->count() . PHP_EOL;
        echo '卡蘿·丹佛斯目前追蹤人：' . User::followedBy($carol)->get() . PHP_EOL;
        echo '卡蘿·丹佛斯目前尚未追蹤人：' . User::unfollowedBy($carol)->get() . PHP_EOL;
    }
}
