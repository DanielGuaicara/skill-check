<?php

namespace App\Repositories;

use App\Interfaces\ForumInterface;
use Cviebrock\DiscoursePHP\SSOHelper;
use Illuminate\Support\Facades\Http;

class ForumRepository implements ForumInterface
{
    /**
     * This function returns all 'categories'
     *
     * @param int $gymId
     *
     * @param int $gymnastId
     *
     * @return string
     */
    public function forumLogin(array $data)
    {
        $sso = new SSOHelper();
        $secret = config('app.forum_api_secret');
        $sso->setSecret( $secret );
        $payload = $data['sso'];
        $signature = $data['sig'];
        if (!($sso->validatePayload($payload,$signature))) {
            header("HTTP/1.1 403 Forbidden");
            echo("Bad SSO request");
            die();
        } else {
            $nonce = $sso->getNonce($payload);
        }
        $userEmail = auth()->user()->email;
        $extraParameters = [
            'force_avatar_update' => true,
            'username' => $data['first_name'].'_'.$data['last_name'],
            'name' => $data['first_name'],
            'bio' => $data['about'],
            'avatar_url' => $data['img_profile']??null,
        ];

        if (isset(auth()->user()->forum_id)) {
            $userId = auth()->user()->id;
        } else {
            $userId = 'skilltrakker_'.auth()->user()->id;
        }
        $query = $sso->getSignInString($nonce, $userId, $userEmail, $extraParameters);
        $url = $sso->getReturnSSOURL($payload).'?'.$query;
        return $url;
    }

    

    /**
     * This function returns all 'categories'
     *
     * @return string
     */
    public function forumLogout() {

        $user = Http::withHeaders([
            'Api-key' => config('app.forum_api_key'), 'Api-Username' => 'system'
        ])->get( config('app.forum_url').'/u/by-external/'.auth()->user()->id.'.json');
        
        foreach ($user->json() as $key => $value) {
            if ($key === 'user') {
                $data['id'] = $value['id'];
            }
        }
        
        if (isset($data)) {
            $response = Http::withHeaders([
                'Api-key' => config('app.forum_api_secret'), 'Api-Username' => 'system'
            ])->post( config('app.forum_url').'/admin/users/'.$data['id'].'/log_out.json');
            return $response->ok();
        } else {
            return false;
        }
    }

}
