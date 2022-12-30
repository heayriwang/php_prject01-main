<div id="subpage">
            <div class="sub_bar">
                <div class="inner">
                <?
                        if($board['bo_subject']) {
                            echo $board['bo_subject'];
                        } else {
                            echo $title;
                        }
                ?>
                         / <?= $as_title?>
                </div>
            </div>
            <div class="inner">
                <article>
                    <h2>
                    <strong>
                        <?
                        if($board['bo_subject']) {
                            echo $board['bo_subject'];
                        } else {
                            echo $title;
                        }
                        ?>
                        
                    </strong> / <?= $as_title?></h2>
                    <div class="content">
