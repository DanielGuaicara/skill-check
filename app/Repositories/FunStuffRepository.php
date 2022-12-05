<?php

namespace App\Repositories;

use App\Gym;
use App\Gymnast;
use App\FunMedia;
use Illuminate\Support\Facades\File;
use App\Interfaces\FunStuffInterface;
use Illuminate\Support\Facades\Storage;

class FunStuffRepository implements FunStuffInterface
{
    protected $funStuff;

    public function __construct(FunMedia $funStuff)
    {
        $this->funStuff = $funStuff;
    }

    /**
     * This function returns all 'categories'
     *
     * @param int $gymId
     *
     * @param int $gymnastId
     *
     * @return string
     */
    public function getMedia(int $gymId, int $gymnastId)
    {
        $gym = Gym::find($gymId);
        $gymnast = Gymnast::find($gymnastId);
        $currentPoints = $gymnast->completeds->sum('points');

        if ($currentPoints > 0) {
            $fileNames = FunMedia::where('points', '<=', $currentPoints)->get();
        } else {
            $fileNames = FunMedia::all();
        }

        $logo_path = public_path('media/img/logos/gym'.$gym->id.'.png');
        
        if (file_exists( $logo_path )) {
            $logo_image_size = getimagesize( $logo_path );
            switch ( $logo_image_size['mime'] ) {
                case 'image/png':
                    $logo_image = imagecreatefrompng( $logo_path );
                    break;
                case 'image/gif':
                    $logo_image = imagecreatefromgif( $logo_path );
                    break;
                default: // jpeg images
                    $logo_image = imagecreatefromjpeg( $logo_path );
            }
            $logo_width = $logo_image_size[0];
            $logo_height = $logo_image_size[1];
        }

        $list = [];

        foreach ($fileNames as $key => $value) {
            $img = public_path().'/media/img/fun-stuff/'.$value->file;
            if (file_exists( $img )) {
                $list[$key]['img'] = $img;
                $list[$key]['file_name'] = $value->file;
            }
        }
        $path = public_path().'/media/img/fun-stuff/gym'.$gym->id;
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0775, true, true);
        }
        foreach ($list as $key => $value) {

            $image_size = getimagesize( $value['img'] );
            
            $image_width = $image_size[0];
	        $image_height = $image_size[1];
            
            switch ( $image_size['mime'] ) {
                
                case 'image/png':
                    $image = imagecreatefrompng( $value['img'] );
                    break;
                case 'image/gif':
                    $image = imagecreatefromgif( $value['img'] );
                    break;
                default: // jpeg images
                    $image = imagecreatefromjpeg( $value['img'] );
            }
            $name = $value['file_name'];
            $image_width = $image_size[0];
	        $image_height = $image_size[1];
            if (file_exists( $logo_path )) {
                header('Content-Type: image/jpeg');
                switch ( $image_size['mime'] ) {
                    case 'image/png':
                        imagecopy( $image, $logo_image, 100, $image_height - $logo_height - 100, 0, 0, $logo_width, $logo_height );
                        imagepng( $image, $path.'/'.$name );
                        break;
                    case 'image/gif':
                        imagecopy( $image, $logo_image, 100, $image_height - $logo_height - 100, 0, 0, $logo_width, $logo_height );
                        imagegif( $image, $path.'/'.$name );
                        break;
                    default:
                        imagecopy( $image, $logo_image, 100, $image_height - $logo_height - 100, 0, 0, $logo_width, $logo_height );
                        imagejpeg( $image, $path.'/'.$name );

                }
                $data[$key]['file_name'] = $name;
                $data[$key]['gym_id'] = $gym->id;
            } else {
                switch ( $image_size['mime'] ) {
                
                    case 'image/png':
                        imagepng( $image, $path.'/'.$name );
                        break;
                    case 'image/gif':
                        imagegif( $image, $path.'/'.$name );
                        break;
                    default:
                        imagejpeg( $image, $path.'/'.$name );

                }
                $data[$key]['file_name'] = $name;
                $data[$key]['gym_id'] = $gym->id;
            }
        }

        return $data;
    }

}
