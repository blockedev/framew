<header class="masthead" style="background-image: url('/public/images/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Дистанційне Навчання</h1>
                    <span class="subheading">БДМУ</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список публікацій пустий</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <a href="/post/<?php echo $val['id']; ?>">
                            <?php if ($val['status'] = '1') { ?>
                               <h2 class="post-title"><span style="color: #006400; text-shadow: 0 0 3px;">Пройдено </span><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>

                            <?php } elseif ($val['status'] = '2') { ?>
                               <h2 class="post-title"><span style="color: #800000; text-shadow: 0 0 3px;">Не пройдено </span><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>

                            <?php } elseif ($val['status'] = '3') { ?>
                               <h2 class="post-title"><span style="color: #FF8C00; text-shadow: 0 0 3px;">ОЧікує </span><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>

                            <?php } else { ?>
                                <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                                
                            <?php } ?>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
                        </a>
                        <p class="post-meta">ID публікації <?php echo $val['id']; ?></p>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>