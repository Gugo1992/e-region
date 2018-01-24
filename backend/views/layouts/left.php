<<<<<<< HEAD
<aside class="main-sidebar">

    <section class="sidebar">

        <?php
        //query model
        $query = new \yii\db\Query();
        $query->select([
            'profile.gravatar_id',
            'profile.name',
        ])
            ->from('profile')
            ->where(['user_id' => Yii::$app->user->identity->id])
            ->all();

        $command = $query->createCommand();
        $data = $command->queryAll();
        ?>
        <?php foreach ($data as $row) { ?>
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <?php if (!empty($row['gravatar_id'])) { ?>
                        <img src="<?php echo \Yii::$app->request->BaseUrl . '/' . $row['image_profile'] ?>"
                             class="img-circle" alt="User Image" style="height: 40px; width: 40px;"/>
                    <?php } else { ?>
                        <img src="<?php echo \Yii::$app->request->BaseUrl ?>/avatar.jpg" class="img-thumbnail img-profile">
                    <?php } ?>
                </div>
                <div class="pull-left info">
                    <?php if (empty($row['name'])) { ?>
                        <p><?= Yii::$app->user->identity->username; ?></p>
                    <?php } else { ?>
                        <p><?= $row['name']; ?></p>
                    <?php } ?>

                    <?php
                    $queryJoined = new yii\db\Query();
                    $queryJoined->select(['created_at'])
                        ->from('user')
                        ->where(['id' => Yii::$app->user->identity->id])
                        ->all();

                    $commandJoined = $queryJoined->createCommand();
                    $dataJoined = $commandJoined->queryAll();
                    ?>

                    <?php foreach ($dataJoined as $rowJoined) { ?>

                        <p>Joined : <?= Yii::$app->formatter->format($rowJoined['created_at'], 'date') ?></p>
                    <?php } ?>

                    <!--                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                </div>
            </div>
        <?php }

        ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Classified',
                        'options' => ['class' => 'header']],
                    ['label' => 'Dashboard',
                        'icon' => 'fa fa-dashboard',
                        'url' => ['/site/']],
                    [
                        'label' => 'User List',
                        'icon' => 'fa fa-users',
                        'url' => ['/user/admin/'],
                        'active' => Yii::$app->controller->id == '/user/admin/',

                    ],
                    [
                        'label' => 'User Access',
                        'icon' => 'fa fa-key',
                        'url' => ['#'],
                        'items' => [
                            ['label' => 'Route', 'icon' => '', 'url' => ['/admin/route/'], 'active' => Yii::$app->controller->id == 'route'],
                            ['label' => 'Assignment', 'icon' => '', 'url' => ['/admin/assignment/'], 'active' => Yii::$app->controller->id == 'assignment'],
                            ['label' => 'Permission', 'icon' => '', 'url' => ['/admin/permission/'], 'active' => Yii::$app->controller->id == 'permission'],
                            ['label' => 'Role', 'icon' => '', 'url' => ['/admin/role/'], 'active' => Yii::$app->controller->id == 'role'],
                        ]
                    ],
                    [
                        'label' => 'Configuration',
                        'icon' => 'fa fa-cogs',
                        'url' => ['#'],
                        'items' => [
                            ['label' => 'Category', 'icon' => '', 'url' => ['/category/'], 'active' => Yii::$app->controller->id == 'category'],
                            ['label' => 'Subject Report', 'icon' => '', 'url' => ['/subject-report/'], 'active' => Yii::$app->controller->id == 'subject-report'],
                            ['label' => 'Country', 'icon' => '', 'url' => ['/country/'], 'active' => Yii::$app->controller->id == 'country'],
                            ['label' => 'Region', 'icon' => '', 'url' => ['/region/'], 'active' => Yii::$app->controller->id == 'region'],
                            ['label' => 'City', 'icon' => '', 'url' => ['/city/'], 'active' => Yii::$app->controller->id == 'city'],
                        ]
                    ],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>

    </section>

</aside>
=======
<aside class="main-sidebar">

    <section class="sidebar">

        <?php
        //query model
        $query = new \yii\db\Query();
        $query->select([
            'profile.gravatar_id',
            'profile.name',
        ])
            ->from('profile')
            ->where(['user_id' => Yii::$app->user->identity->id])
            ->all();

        $command = $query->createCommand();
        $data = $command->queryAll();
        ?>
        <?php foreach ($data as $row) { ?>
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <?php if (!empty($row['gravatar_id'])) { ?>
                        <img src="<?php echo \Yii::$app->request->BaseUrl . '/' . $row['image_profile'] ?>"
                             class="img-circle" alt="User Image" style="height: 40px; width: 40px;"/>
                    <?php } else { ?>
                        <img src="<?php echo \Yii::$app->request->BaseUrl ?>/images.jpeg"
                             class="img-thumbnail img-profile">
                    <?php } ?>
                </div>
                <div class="pull-left info">
                    <?php if (empty($row['name'])) { ?>
                        <p><?= Yii::$app->user->identity->username; ?></p>
                    <?php } else { ?>
                        <p><?= $row['name']; ?></p>
                    <?php } ?>

                    <?php
                    $queryJoined = new yii\db\Query();
                    $queryJoined->select(['created_at'])
                        ->from('user')
                        ->where(['id' => Yii::$app->user->identity->id])
                        ->all();

                    $commandJoined = $queryJoined->createCommand();
                    $dataJoined = $commandJoined->queryAll();
                    ?>

                    <?php foreach ($dataJoined as $rowJoined) { ?>

                        <p>Joined : <?= Yii::$app->formatter->format($rowJoined['created_at'], 'date') ?></p>
                    <?php } ?>

                    <!--                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                </div>
            </div>
        <?php }

        ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Classified',
                        'options' => ['class' => 'header']],
                    ['label' => 'Dashboard',
                        'icon' => 'fa fa-dashboard',
                        'url' => ['/site/']],
                    [
                        'label' => 'User List',
                        'icon' => 'fa fa-users',
                        'url' => ['/user/admin/'],
                        'active' => Yii::$app->controller->id == '/user/admin/',

                    ],
                    [
                        'label' => 'User Access',
                        'icon' => 'fa fa-key',
                        'url' => ['#'],
                        'items' => [
                            ['label' => 'Route', 'icon' => '', 'url' => ['/admin/route/'], 'active' => Yii::$app->controller->id == 'route'],
                            ['label' => 'Assignment', 'icon' => '', 'url' => ['/admin/assignment/'], 'active' => Yii::$app->controller->id == 'assignment'],
                            ['label' => 'Permission', 'icon' => '', 'url' => ['/admin/permission/'], 'active' => Yii::$app->controller->id == 'permission'],
                            ['label' => 'Role', 'icon' => '', 'url' => ['/admin/role/'], 'active' => Yii::$app->controller->id == 'role'],
                        ]
                    ],
                    [
                        'label' => 'Configuration',
                        'icon' => 'fa fa-cogs',
                        'url' => ['#'],
                        'items' => [
                            ['label' => 'Category', 'icon' => '', 'url' => ['/category/'], 'active' => Yii::$app->controller->id == 'category'],
                            ['label' => 'Subject Report', 'icon' => '', 'url' => ['/subject-report/'], 'active' => Yii::$app->controller->id == 'subject-report'],
                            ['label' => 'Country', 'icon' => '', 'url' => ['/country/'], 'active' => Yii::$app->controller->id == 'country'],
                            ['label' => 'Region', 'icon' => '', 'url' => ['/region/'], 'active' => Yii::$app->controller->id == 'region'],
                            ['label' => 'City', 'icon' => '', 'url' => ['/city/'], 'active' => Yii::$app->controller->id == 'city'],
                        ]
                    ],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>

    </section>

</aside>
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
