</div>
                </article>
                <aside>
                    <ul class="lnb">
                        <? 
                        include(G5_THEME_PATH.'/doc/navi.php');
                        ?>
                    </ul>

                    <figure>
                        <img src="<?=G5_THEME_URL; ?>/img/slogan.png" alt="">
                    </figure>

                    <ul class="customer">
                    <li>Tel : <a href="tel:<?= $as_tel?>"><?= $as_tel?></a></li>
                <li>e-mail : <a href="mailto:j<?= $as_email?>"><?= $as_email?></a></li>
                    </ul>

                </aside>
            </div>
        </div>
        <? 
                        if($board['bo_table'] == 'gallery') {
                            $idx = 5;
                        } else if($board['bo_table'] == 'qa'){
                            $idx = 6;
                        } else {
                            $idx = $pageNum;
                        }
        ?>
        <script>
            $(function(){
                var idx = <?=$idx?>;        
                $('.lnb>li').eq(idx-1).addClass('on').siblings().removeClass('on')
            })
        </script>
