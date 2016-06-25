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
    You have been registered an account successfully in our system. Please active the link below:    
</p>

<?php 
$url = ['controller' => 'users', 'action' => 'active', '_full' => true, '?' => ['token' => $token]];
echo $this->Html->link($this->Url->build($url), $url, ['escape' => false]); 
?>
<p>
    Best, <br>
    The Money Lover Accounts team
</p>
