<?php

use App\User;
use App\Event;
use App\Level;
use App\Skill;
use App\Gymnast;
use App\Category;
use App\Challenge;
use App\FeedEntry;
use App\SkillList;
use Carbon\Carbon;
use App\ClassModel;
use App\CompletedChallenge;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class ImportUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gyms = DB::table('gyms')->where('id', 4)->get();
        /* 

        DB::table('users')->truncate();

        DB::table('gyms_has_users')->truncate();

        DB::table('gymnasts')->truncate();

        DB::table('skill_lists')->truncate();

        DB::table('classes')->truncate();

        DB::table('events')->truncate();

        DB::table('skills')->truncate();

        DB::table('skill_lists_has_skills')->truncate();

        DB::table('challenges')->truncate();

        DB::table('completed_challenges')->truncate();

        DB::table('gymnasts_has_classes')->truncate();

        DB::table('categories')->truncate();

        DB::table('levels')->truncate();

        DB::table('model_has_roles')->truncate();

        DB::table('subscriptions')->truncate(); 
        
        */

        $CategoryIDs = [];
        $LevelIDs = [];

        $tempC = 0;
        error_log('Start: hii', 0);


        // Create Admin User

        /*$user_admin = User::create([
                                'name' => 'admin',
                                'email'=> 'admin@admin.com',
                                'password' => bcrypt('admin')
                            ]);

        $user_admin->assignRole('admin');*/

        // End




        // Relacion de ids BaseDatos vieja y nueva
        $GymsIDs[1] = 1;
        $GymsIDs[2] = 7;
        $GymsIDs[3] = 8;
        $GymsIDs[4] = 13;
        $GymsIDs[5] = 14;
        $GymsIDs[6] = 18;
        $GymsIDs[7] = 19;
        $GymsIDs[8] = 20;


        // Para cada uno de los Gyms
        foreach ($gyms as $gym){
            var_dump($gym->name);
            // Obtenemos la configucación del gym para sacar el nombre de la BD ($jsonSettings->dbname)
            $jsonSettings = json_decode($gym->settings);


            $Users = null;

            /* try {
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `skills` ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `skill_map`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `skills_list`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `roster_map`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `progress`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `notifications`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `member`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `events`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `classes`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `challenge_map`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');
                DB::connection($jsonSettings->dbname)->statement('ALTER TABLE `activities`  ADD IF NOT EXISTS `new_id` INT NULL,  ADD IF NOT EXISTS  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL;');

            } catch (\Throwable $th) {
            error_log('No existe - 1'.$jsonSettings->dbname, 0);
            } */
           
            
            //////////// Create TB_skills_list
            var_dump("TB_skills_list");
            $SkillsListIDsOLD = null;

            $TB_skills_list = DB::connection($jsonSettings->dbname)->table('skills_list')->where('new_id', null)->get();
            foreach ($TB_skills_list as $skill){
                $new_skill = SkillList::create(array(
                    'name' => $skill->name,
                    'gym_id' => $gym->id,
                ));
                $SkillsListIDsOLD[$skill->id] = $new_skill->id;
                DB::connection($jsonSettings->dbname)->table('skills_list')->where('id', $skill->id)->update(['new_id' => $SkillsListIDsOLD[$skill->id],'updated_at' => null]);
            }

            //////////// Fin de Create TB_skills_list




            //////////// Create Class Model
            var_dump("Tclasses");
            $ClassIDsOLD = null;
            //$GymClassIDsOLD = null;

            $TB_classes = DB::connection($jsonSettings->dbname)->table('classes')->where('new_id', null)->get();

            foreach ($TB_classes as $class){

                try {
                    $temp_skill_list_id = $SkillsListIDsOLD[$class->skills_list_id];

                    $new_class= ClassModel::create(array(
                        'name' => $class->name,
                        'description' => '',
                        'skill_list_id' => $temp_skill_list_id,
                    ));
                    $ClassIDsOLD[$class->id] = $new_class->id;
                    DB::connection($jsonSettings->dbname)->table('classes')->where('id', $class->id)->update(['new_id' => $ClassIDsOLD[$class->id],'updated_at' => null]);
                    $GymClassIDsOLD[$gym->id][$class->id] = $new_class->id;
                    //$GymClassIDsOLD[$gym->id][$class->id] = $class->new_id; xxx

                } catch (\Throwable $th) {
                    //$temp_skill_list_id = 1;
                    error_log('Alert: 2 temp_skill_list_id - '.$th->getMessage(), 0);
                }

               
            }

            //////////// Fin de Create Class Model





            //////////// Create Events
            var_dump("TB_events");
            //error_log('Start: TB_Events', 0);
            $EventIDsOLD = null;

            $TB_events= DB::connection($jsonSettings->dbname)->table('events')->where('new_id', null)->get();

            foreach ($TB_events as $event){
                $new_event= Event::create(array(
                    'name' => $event->name,
                    'gym_id' => $gym->id,
                    'abbrev' => $event->abbrev,
                ));
                $EventIDsOLD[$event->name] = $new_event->id;
                DB::connection($jsonSettings->dbname)
                    ->table('events')
                    ->where('name', $event->name)
                    ->update(['new_id' => $EventIDsOLD[$event->name],'updated_at' => null]);
            }

            //////////// Fin de Create Events

            


            //////////// Create Skills & [ Categorys, Levels ]
            //error_log('Start: TB_skills', 0);
            var_dump("skills");
            $SkillIDsOLD = null;

            $TB_skills= DB::connection($jsonSettings->dbname)->table('skills')->where('new_id', null)->get();


                foreach ($TB_skills as $skill){


                    try {
                        $temp_EventID = $EventIDsOLD[$skill->event];
                    } catch (\Throwable $th) {
                        $temp_EventID = 1;
                    }

                    try {

                        // En BD vieja no existe Tablas para Category y Levels
                        // Los creamos en la nueva BD en base a su nombre
                        // Tomando el nombre como su llave Primaria

                        if ($skill->category != "") {
                            if (!array_key_exists($skill->category,$CategoryIDs)) {

                                $new_category= Category::create(array(
                                    'name' => $skill->category,
                                ));
                                $CategoryIDs[$skill->category] = $new_category->id;

                            }

                            $temp_category_id = $CategoryIDs[$skill->category];
                        }
                        else{
                            $temp_category_id = null;
                        }



                        if ($skill->level != "") {
                            if (!array_key_exists($skill->level,$LevelIDs)) {

                                $new_level= Level::create(array(
                                    'level' => $skill->level,
                                ));
                                $LevelIDs[$skill->level] = $new_level->id;

                            }

                            $temp_level_id = $LevelIDs[$skill->level];
                        }
                        else{
                            $temp_level_id = null;
                        }
                        

                        // Creamos y guardamos nuevo Id de Skill

                            $new_skill= Skill::create(array(
                                'name' => $skill->name,
                                'description' => '',
                                'category_id' => $temp_category_id,
                                'event_id' => $temp_EventID,
                                'level_id' => $temp_level_id,
                                'certificate' => $skill->certificate,
                            ));
                            $SkillIDsOLD[$skill->id] = $new_skill->id;
                            DB::connection($jsonSettings->dbname)->table('skills')->where('id', $skill->id)->update(['new_id' => $SkillIDsOLD[$skill->id],'updated_at' => null]);

                    } catch (\Throwable $th) {
                        error_log('Alert: Skills ------------------>>>>>>>>>>>>>>>>>> '.$th->getMessage(), 0);
                    }
                    
                }

            //////////// Fin de Create Skills & [ Categorys, Levels ]   






            //////////// skill_lists_has_skills
            

            $SkillMapIDsOLD = null;
            var_dump("skill lists has skills");
            $TB_skills_map= DB::connection($jsonSettings->dbname)->table('skill_map')->get();

            foreach ($TB_skills_map as $skill_map){

                try {
                    $temp_skill_list_id = $SkillsListIDsOLD[$skill_map->skills_list_id];
                } catch (\Throwable $th) {
                    $temp_skill_list_id = 0;
                    error_log('Alert: 3 temp_skill_list_id - '.$th->getMessage(), 0);
                }

                try {
                    $temp_skill_id = $SkillIDsOLD[$skill_map->skill_id];
                } catch (\Throwable $th) {
                    $temp_skill_id = 0;
                    error_log('Alert: temp_skill_id - '.$th->getMessage(), 0);
                }

                if ($temp_skill_list_id != 0 && $temp_skill_id != 0) {
                    $new_skill_map= DB::table('skill_lists_has_skills')->insertGetId(array(
                        'order' => $skill_map->sequence,
                        'skill_list_id' => $temp_skill_list_id,
                        'skill_id' => $temp_skill_id,
                    ));
                    $SkillMapIDsOLD[$skill_map->id] = $new_skill_map;
                    DB::connection($jsonSettings->dbname)->table('skill_map')->where('id', $skill_map->id)->update(['new_id' => $SkillMapIDsOLD[$skill_map->id],'updated_at' => null]);
                }

            
            }

            //////////// skill_lists_has_skills


            // Obtenemos todos los users del $jsonSettings->dbname
            try {
                $Users = DB::connection($jsonSettings->dbname)->table('users')->where('new_id', null)->get();
            } catch (\Throwable $th) {
               error_log('No existe - '.$jsonSettings->dbname, 0);
            }


            // Si hay usuarios
            if ($Users) {

                //$Users = json_decode($json)[2]->data;

                //////////// Create Users

                

                // Para cada uno de los users de cada $jsonSettings->dbname
                foreach ($Users as $row){
                    var_dump("id viejo de los members : ".$row->id);
                    $UsersIDsOLD = [];
                    $user_exist = User::where('email', $row->email)->first();
                    
                    //  Si aun no se crea el User en otro Gym ($jsonSettings->dbname)
                    if (! isset($user_exist)) {

                        // Creamos el Users

                        if ($jsonSettings->dbname == "gymnasticshq") {
                           $user = User::create(array(
                                'email' => $row->email,
                                'password' => bcrypt(explode("@", $row->email)[0]."4567"),
                                'name' => explode("@", $row->email)[0],
                                'forum_id' => $row->id, // Solo si es gymnasticshq (Se asigna el id de users)
                            ));
                            // Asignamos un rol
                            $user->assignRole('gymnast');

                            //Generamos un record en Subscription por user con su id
                            try {
                                DB::table('subscriptions')->insert(array(
                                    'user_id' => $user->id,
                                    'plan_id' => 1,
                                    'subscription_id' => $row->stripe_subscription,
                                    'stripe_email' => $row->stripe_email,
                                    'customer_id' => $row->stripe_id,
                                ));
                            } catch (\Throwable $th) {
                                return $th;
                                error_log('No existe Subscription: '.$th, 0);
                            }
                        }
                        else {
                            $user = User::create(array(
                                'email' => $row->email,
                                'password' => bcrypt(explode("@", $row->email)[0]."4567"),
                                'name' => explode("@", $row->email)[0],
                            ));
                            // Asignamos un rol
                            $user->assignRole('gymnast');
                        }

                        // Guardamos su nuevo Id 
                        DB::connection($jsonSettings->dbname)->table('users')
                            ->where('id', $row->id)
                            ->update(['new_id' => $user->id,'updated_at' => null]);

                        //var_dump($row);

                        // Asignamos un gym al user
                        DB::table('gyms_has_users')->insert(
                            array('gym_id' => $gym->id, 'user_id' => $user->id)
                        );

                        // Guardamos el nuevo Id del user creado
                        $UsersIDsOLD[$row->id] = $user->id;
                    }
                    else{
                        var_dump("buuu");
                        var_dump("user exist : ".$user_exist);
                        var_dump($user_exist->id);
                        // Si ya existia el user en otro gym solo se asigna gym
                        $reg = DB::table('gyms_has_users')->where('gym_id', $gym->id)->where('user_id', $user_exist->id)->first();
                        if (! isset($reg)) {
                            var_dump("no tiene registro");
                            DB::table('gyms_has_users')->insert(
                                array('gym_id' => $gym->id, 'user_id' => $user_exist->id)
                            );
                        }
                        //$UsersIDsOLD[$row->id] = $user_exist->id;
                    }



                
                

                    //////////// Fin de Create Users

                }
     
            }

        }//end foreach inicial
        //$TB_progress = DB::connection($jsonSettings->dbname)->table('progress_feed')->where('new_progress_id', null)->whereNotNull('skill_new_id')->whereNotNull('new_id')->get();
        var_dump("finalized 1/6");





       
    }

   
}
