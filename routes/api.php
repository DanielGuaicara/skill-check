<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/testFeedentrybirday', 'FeedFunctionController@userBirthdayFeedEntry');
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
});

Route::get('/timezones', 'DashboardController@timezone');
Route::post('/create/gymnast/subscription', 'StripePaymentController@createGymnastSubscription');
Route::post('/gymnast/resubscription', 'StripePaymentController@GymnastResubscription');
Route::post('/gymnast/resubscription/stripe-status', 'StripePaymentController@GymnastResubscriptionForStripeStatus');
Route::get('/gyms/all', 'GymController@getGymForList');

Route::post('/forgot_password', 'ForgotPasswordController@forgot');
Route::post('/reset_password', 'ForgotPasswordController@resetPassword');
Route::get('/verify_token/{token}', 'ForgotPasswordController@verifyToken');
Route::get('/is_stripe/gym/{gym_id}', 'StripePaymentController@gymIsStripe');

Route::middleware('auth:api')->group(function () {
    Route::group(['prefix' => 'users'], function () {
        Route::group(['middleware' => ['role:admin']], function () {
            //routes admin role
            Route::group(['prefix' => 'administrators'], function () {
                Route::get('/', 'UserController@listAdmins');
                Route::post('/', 'UserController@createAdminUser')
                    ->name('administrators.create');
                Route::put('/{id}', 'UserController@updateAdminUser')
                    ->name('administrators.update');
                Route::get('/{id}', 'UserController@showAdminUser');
                Route::delete('/{id}', 'UserController@deleteAdminUser');
                Route::patch('/{email}/restore', 'UserController@restoreAdminUser');
                Route::get('/{email}/assign', 'UserController@assignAdmin');
            });
        });
        Route::get('/roles/{email}', 'UserController@checkRole');
    });

    Route::group(['middleware' => ['role:admin']], function () {
        Route::post('generic/challenges', 'ChallengeController@createGenericChallenge');
        Route::get('challenges/all', 'ChallengeController@getAll');
        Route::put('plans/{id}', 'StripePaymentController@updatePlan');
        Route::delete('/notifications/{id}', 'NotificationController@delete');
    });

    Route::group(['middleware' => ['role:admin|gym']], function(){
        Route::get('/gyms/{gymId}/notifications', 'NotificationController@listFromGymAdmin');
        Route::put('/gyms/{gymId}/notifications/{id}', 'NotificationController@updateFromGymAdmin');
        Route::delete('/gyms/{gymId}/notifications/{id}', 'NotificationController@deleteFromGymAdmin');
        Route::get('/gyms/{id}/members', 'GymnastController@getMemberByGym');
        Route::post('/gyms/{id}/admin/change-password', 'GymnastUserController@changePasswordFromAdmin');
        Route::get('/gyms/{id}/members/paginated', 'GymnastController@getMemberByGymPaginated');
        Route::get('/gymnast/{id}/challenges/expired', 'ChallengeController@getExpiredChallengesByMember');
        Route::get('/challenges/all/daily', 'ChallengeAdminController@getAllDailyChallengesAdmin');
        Route::get('/challenges/all/regular', 'ChallengeAdminController@getAllRegularChallengesAdmin');
        Route::post('/notifications', 'NotificationController@create');
        Route::get('/notifications', 'NotificationController@listFromAdmin');
        Route::put('/notifications/{id}', 'NotificationController@update');
    });

    Route::group(['middleware' => ['role:admin|gymnast']], function(){
        Route::get('members/{memberId}/notifications', 'DashboardController@getNotifications');
        Route::put('members/{memberId}/notifications/{id?}', 'DashboardController@clearNotification');
        Route::get('/gyms/{gymId}/notifications/gymnasts/{id}', 'NotificationController@listFromGymnast');
    });

    Route::group(['prefix' => 'gyms'], function () {
        Route::group(['middleware' => ['role:admin|gym']], function () {
            Route::put('/', 'GymController@update')
                ->name('gyms.update');
        });
        Route::group(['middleware' => ['role:admin']], function () {
            Route::post('/', 'GymController@create')
                ->name('gyms.create');
            Route::delete('/{id}', 'GymController@delete')
                ->name('gyms.destroy');
            Route::get('/search', 'GymController@getGym');
            Route::get('users/', 'GymUserController@listAsAdmin');
            Route::get('users/{gymUserId}', 'GymUserController@get');
            Route::delete('users/{gymUserId}', 'GymUserController@delete');
        });
        Route::group(['middleware' => ['role:admin|gym']], function () {
            Route::post('users/', 'GymUserController@create')->name('gyms.user.create');
            Route::put('users/{gymUserId}', 'GymUserController@edit')->name('gyms.user.edit');
            Route::delete('/{gymId}/users/{gymUserId}', 'GymUserController@deleteAsGym');
            Route::get('/{gymId}/users/{gymUserId}', 'GymUserController@getAsGym');
            Route::get('/{gymId}/users/', 'GymUserController@listAsGym');
        });

        Route::group(['middleware' => ['role:admin|gym']], function () {
            Route::post('/{gymId}/events', 'EventController@create');
            Route::patch('/{gymId}/events/{id}', 'EventController@update');
            Route::delete('/{gymId}/events/{id}', 'EventController@delete');
            Route::put('/{gymId}/events/{id}', 'EventController@restore');
            Route::get('/{gymId}/events', 'EventController@list');
            Route::get('/{gymId}/events/{id}/skills', 'SkillController@list');
            Route::post('/{gymId}/events/{eventId}/skills', 'SkillController@create');
            Route::get('/{gymId}/events/{eventId}/skills/{skillId}', 'SkillController@show');
            Route::put('/{gymId}/events/{eventId}/skills/{skillId}', 'SkillController@update');
            Route::delete('/{gymId}/events/{eventId}/skills/{skillId}', 'SkillController@delete');
            Route::get('/{gymId}/skill_lists', 'SkillListController@list');
            Route::post('/{gymId}/skill_lists', 'SkillListController@create');
            Route::get('/{gymId}/skill_lists/{skillListId}', 'SkillListController@show');
            Route::delete('/{gymId}/skill_lists/{skillListId}', 'SkillListController@delete');
            Route::patch('/{gymId}/skill_lists/{skillListId}', 'SkillListController@restore');
            Route::post('/{gymId}/skill_lists/assign/skills', 'SkillListController@assign');
            Route::delete('/{gymId}/skill_lists/{skillListId}/skills/{skillId}', 'SkillListController@deleteSkill');
            Route::put('/{gymId}/skill_lists/{skillListId}', 'SkillListController@update');
        });

        Route::group(['middleware' => ['role:admin|gym']], function () {
            Route::get('/{gymId}/gymnasts', 'GymnastUserController@list');
            Route::post('/gymnasts', 'GymnastUserController@create');
            Route::get('/{gymId}/invitation/{email}', 'GymnastUserController@resendAcountInformation');
            Route::get('/{gymId}/clear-leaderboard', 'LeaderboardController@clearLeaderboard');
            Route::delete('/{gymId}/gymnasts/members/{memberId}', 'GymnastController@deleteGymnast');
            Route::post('/{gymId}/gymnasts/admin/members', 'GymnastController@createGymnastForAdmin');
        });

        Route::group(['middleware' => ['role:admin|gymnast']], function () {
            Route::post('/{gymId}/gymnasts', 'GymnastController@add');
            Route::post('/{gymId}/gymnasts/members', 'GymnastController@create');
            Route::get('/{gymId}/gymnasts/members/{memberId}', 'GymnastController@list');
            Route::put('/{gymId}/gymnasts/members/{memberId}', 'GymnastController@update');
            Route::post('/{gymId}/members/{memberId}/picture', 'GymnastController@profilePicture');
            Route::put('/{gymId}/gymnasts/members/{memberId}/challenges/{challengeId}/pending', 'GymnastController@updatedChallengePending');
        });

        Route::group(['middleware' => ['role:admin|gymnast|gym']], function () {
            Route::put('/{gymId}/admin/gymnasts/members/{memberId}', 'GymnastController@updategymnastAdminSide');
            Route::post('/{gymId}/gymnasts/members/{memberId}/challenges', 'CompletedChallengeController@create');
            Route::get('/{gymId}/gymnasts/challenges/carousel', 'CompletedChallengeController@feedCarousel');
            Route::get('/{gymId}/gymnasts/challenges-media/', 'CompletedChallengeController@completedChallengesMediaList');
            Route::get('/{gymId}/gymnasts/members/{memberId}/challenges', 'GymnastController@challenges');
            Route::get('/{gymId}/gymnasts/members/{memberId}/challenges_regular', 'GymnastController@challengesRegular');
        });

        Route::group(['middleware' => ['role:admin|gymnast']], function () {
            Route::get('/{gymId}/gymnasts/members/{memberId}/events', 'DashboardController@listEvent');
            Route::put('/{gymId}/skills/{skillId}/members/{memberId}', 'SkillController@updateProgress');
            Route::get('/{gymId}/members/{memberId}/events/{eventId}/skills', 'DashboardController@listSkill');
            Route::get('/{gymId}/members/{memberId}/skills/percentage', 'DashboardController@percentage');
            Route::get('/{gymId}/fun-stuff/gymnast/{id}', 'FunStuffController@getMedia');
            Route::get('/{gymId}/gymnasts/members/{memberId}/challenges_count', 'DashboardController@challengesCount');
        });

        Route::group(['middleware' => ['role:admin|gym|gymnast']], function () {
            Route::put('/{gymId}/classes/{class_id}', 'ClassController@update');
            Route::post('/{gymId}/classes', 'ClassController@create');
            Route::delete('/{gymId}/classes/{class_id}', 'ClassController@delete');
            Route::patch('/{gymId}/classes/{class_id}', 'ClassController@restore');
            Route::get('/{gymId}/classes', 'ClassController@list');
            Route::get('/{gymId}/classes/{class_id}', 'ClassController@show');
            Route::get('/{gymId}/feed', 'FeedEntryController@feedSkill');
            Route::get('/{gymId}/leaderboard', 'LeaderboardController@leaderboardInfo');
            Route::get('/{gymId}/leaderboard/gymnasts/{id}', 'LeaderboardController@leaderboardProfile');
        });
        Route::get('/', 'GymController@list');
        Route::get('/{id}', 'GymController@show');

        Route::group(['middleware' => ['role:admin|gym']], function () {
            Route::post('/{gymId}/challenges', 'ChallengeController@create');
            Route::put('/{gymId}/challenges/{challengeId}', 'ChallengeController@update');
            Route::get('/{gymId}/challenges', 'ChallengeController@list');
            Route::delete('/{gymId}/challenges/{challengeId}', 'ChallengeController@delete');
            Route::get('/{gymId}/challenges/daily', 'ChallengeAdminController@getDailyChallengesAdmin');
            Route::get('/{gymId}/challenges/regular', 'ChallengeAdminController@getRegularChallengesAdmin');
        });
    });

    Route::group(['middleware' => ['role:admin|gym|gymnast']], function () {
        Route::put('/feed/{id}/interaction/{codeInteraction}', 'FeedFunctionController@addFeedinteraction');
        Route::get('/feed/{id}/interaction', 'FeedFunctionController@getFeedinteraction');
        Route::post('/create/member/subscription', 'StripePaymentController@createMemberSubscription');
        Route::post('/update/gymnast/subscription', 'StripePaymentController@updateMemberSubscription');
        Route::post('/cancel/gymnast/subscription', 'StripePaymentController@cancelMemberSubscription');
        Route::post('/update/credit-card', 'StripePaymentController@updateCC');
        Route::post('auth/login/sso/', 'ForumController@forumLogin');
        Route::post('auth/logout/sso/', 'ForumController@forumLogout');
        Route::get('/exist/user-email/{email}', 'UserController@userEmailExist');
    });
    
    Route::group(['prefix' => 'levels'], function () {
        Route::group(['middleware' => ['role:admin|gym']], function () {
            Route::get('/', 'LevelController@list');
        });
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::group(['middleware' => ['role:admin|gym']], function () {
            Route::get('/', 'CategoryController@list');
        });
    });

    Route::group(['prefix' => 'interactions'], function () {
        Route::group(['middleware' => ['role:admin']], function () {
            Route::post('/', 'InteractionController@create');
            Route::get('/', 'InteractionController@list');
            Route::delete('/{id}', 'InteractionController@delete');
            Route::patch('/{id}/restore', 'InteractionController@restore');
            Route::post('/{code}', 'InteractionController@update');
        });
    });
});
