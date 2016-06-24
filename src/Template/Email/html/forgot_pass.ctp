<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<h3>Hi <?= $name ?></h3>

<p>
    You request to reset password. Please check link below for complete: 
</p>

<?php 
$url = ['controller' => 'users', 'action' => 'resetPass', '_full' => true, '?' => ['token' => $token]];
echo $this->Html->link($this->Url->build($url), $url, ['escape' => false]); 
?>
<p>
    Best, <br>
    The Money Lover Accounts team
</p>
