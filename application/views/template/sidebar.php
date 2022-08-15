<!--**********************************
    Sidebar start
***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <!-- Query Menu-->
            <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                                FROM `user_menu` JOIN `user_access_menu`
                                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                                WHERE `user_access_menu`.`role_id` = $role_id
                                ORDER BY `user_access_menu`.`menu_id` ASC
                ";
                $menu = $this->db->query($queryMenu)->result_array();
            ?>

            <!-- Looping Menu -->
            <?php 
                foreach ($menu as $m) : 
            ?>
                <li class="nav-label"><?= $m['menu']; ?></li>

            <!-- Query Sub Menu-->
            <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT * FROM `user_sub_menu` WHERE `menu_id` = $menuId
                                AND `is_active` = 1
                ";
                $submenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <!-- Looping Sub Menu -->
            <?php
                foreach ($submenu as $sm): 
            ?>
            <?php
                if($title == $sm['title']) :
            ?>
                <li class="nav-text active">
            <?php
                else :
            ?>
                <li class="nav-text">
            <?php
                endif ;
            ?>
                    <a href="<?= base_url($sm['url']);?>" aria-expanded="false"><i class="<?= $sm['icon']?>"></i><span class="nav-text"><?= $sm['title'];?></span></a>
                </li>

            <?php
                endforeach;
            ?>

            <?php
                endforeach;
            ?>

        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->