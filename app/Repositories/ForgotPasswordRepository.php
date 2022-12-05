<?php

namespace App\Repositories;

use App\Interfaces\ForgotPasswordInterface;
use App\Notifications\ForgotPassword;
use App\PasswordReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ForgotPasswordRepository implements ForgotPasswordInterface
{
    /**
     * This function returns all 'categories'
     *
     * @return mixed
     */
    public function forgot(array $data)
    {
        $token = Str::random(80);
        $data = [
            'email' => $data['email'],
            'token' => $token,
            'url' => $data['url'],
        ];
        $user = User::where('email', $data['email'])->first();
        $tz = explode(') ', $user->timezone)[1];
        try {
            $create = PasswordReset::updateOrCreate(
                ['email' => $user->email],
                [
                    'email' => $data['email'],
                    'token' => $token,
                    'created_at' => Carbon::now($tz),
                    'updated_at' => Carbon::now($tz),
                ]);
            if ($create) {
                $user->notify(new ForgotPassword($data));
            }
            return response()->json([
                'message' => 'Check your Email.'
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * This function reset password
     *
     * @return mixed
     */
    public function resetPassword(array $data)
    {
        $passwordReset = PasswordReset::where('token', $data['token'])
            ->where('email', $data['email'])->first();
        if (!$passwordReset) {
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);
        }
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(30)->isPast()) {
            $passwordReset->delete();
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);
        }
        
        $user = User::where('email', $data['email'])->first();
        if (! $user) {
            return response()->json([
                'message' => "We can't find a user with that e-mail address."
            ], 404);
        }
        try {
            DB::beginTransaction();
            $user->password = bcrypt($data['password']);
            $user->save();
            $passwordReset->delete();
            DB::commit();
            return response()->json([
                'message' => "success"
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;   
        } 
    }

    /**
     * This function returns all 'Feed Entries'
     *
     * @param string $token
     *
     * @return string
     */
    public function verifyToken($token)
    {
        $passwordReset = PasswordReset::where('token', $token)->first();
        if (!$passwordReset) {
            return false;
        }
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(30)->isPast()) {
            $passwordReset->delete();
            return false;
        }
        return true;
    }
}
