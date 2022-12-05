<?php

namespace App\Repositories;

use App\Gym;
use App\Interfaces\GymInterface;
use App\User;

class GymRepository implements GymInterface
{
    protected $gym;
    protected $gymDefaultValues;

    public function __construct(Gym $gym, User $user)
    {
        $this->gym = $gym;
        $this->user = $user;
        $this->gymDefaultValues = [
            'settings' => [
                'is_leaderboard_enabled' => false,
                'is_dashboard_editable' => false,
                'is_generic_certificate_enabled' => false,
                'leaderboard_top' => 10,
                'forum' => true,
                'fun_stuff' => true,
                'store' => true,
                'theme' => [
                    'primary' => [
                        'color' => '#e1467a',
                        'hover' => '#d2225d',
                    ],
                    'secondary' => [
                        'color' => '#7555a4',
                        'hover' => '#5d4482',
                    ],
                ],
            ],
        ];
    }

    /**
     * This function returns all 'gyms' by coincidence
     *
     * @param array $data An array [search]
     *
     * @return string
     */

    public function getGym(array $data)
    {
        $limit = isset($data['limit']) ? $limit = $data['limit'] : $limit = 20;
        $search = isset($data['search']) ? $search = $data['search'] : $search = '';
        return Gym::select('id', 'name', 'description', 'is_stripe')->whereRaw("lower(name) like '%".strtolower($search)."%'")->paginate($limit);
    }

    /**
     * This function creates a new 'gym' in database
     *
     * @param object json
     *
     * @return mixed
     */
    public function create(array $data)
    {
        $gymData = array_replace_recursive($this->gymDefaultValues, $data);

        try {
            $this->gym->create($gymData);
            return true;
        } catch (\Exception $exc) {
            throw $exc;
        }

        return false;
    }

    /**
     * This function returns all 'gyms' that the user is allowed
     *
     * @param array $data An array [limit]
     *
     * @return string
     */

    public function list(array $data)
    {
        $limit = $data['limit'] ?? 10;
        $user = auth()->user();
        if ($user->hasRole('admin')) {
            $listGyms = Gym::select('id', 'name', 'description', 'is_stripe')->orderby('id')->paginate($limit);
        } else {
            $listGyms = $user->gyms()->orderby('id')->paginate($limit);
        }
        return $listGyms;
    }

    /**
     * This function updates a 'gym' in database
     *
     * @param array $data An array [id,name,description,settings]
     *
     * @return mixed
     */

    public function update(array $data)
    {
        $gym = Gym::find($data['id']);
        $gymData = array_replace_recursive($this->gymDefaultValues, $data);

        try {
            $gym->update($gymData);
            return true;
        } catch (\Exception $exc) {
            throw $exc;
        }
        return false;
    }

    /**
     * This function delete a 'gym' in database using softdelete
     *
     * @param int $id of the gym for delete
     *
     * @return mixed
     */
    public function delete(int $id)
    {
        $gym = $this->gym->find($id);
        if ($gym === null) {
            return false;
        }
        $gym->delete();
        return true;
    }

    /**
     * This function return 'gym' by id
     *
     * @param int of the gym for search
     *
     * @return string
     */

    public function show(int $id)
    {
        return $this->gym->find($id);
    }

    /**
     * This function returns all 'gyms' by coincidence
     *
     * @param array $data An array [search]
     *
     * @return string
     */

    public function getGymForList()
    {
        return Gym::select('id', 'name', 'description', 'is_stripe')->get();
    }
}
