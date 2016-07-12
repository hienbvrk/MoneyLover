<?php

namespace App\View\Helper;

use Cake\View\Helper;

/**
 * Description of ImgHelper
 *
 * @author HienBV <hienbv.it@gmail.com>
 */
class ImgHelper extends Helper
{

    public function avatar($avatar)
    {
        if (is_file(WWW_ROOT . 'avatars/users/' . $avatar)) {
            return 'avatars/users/' . $avatar;
        }
        return 'avatars/avatar.png';
    }

}
