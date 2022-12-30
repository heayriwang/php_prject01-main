<?php
$pageNum = 1;
$title = '금맥청소 소개';
include_once('../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>


<!-- <ul class="tab">
    <li class='on'>01 Lorem ipsum dolor sit amet.</li>
    <li>02 Lorem ipsum dolor sit amet.</li>
    <li>03 Lorem ipsum dolor sit amet.</li>
</ul>

<style>
    .tab>li {
        display: none;
    }

    .tab>li.on {
        display: block;
    }
</style>
<script>
    $(function(){
        var num = <?=$_GET['tab']?>;
        $('.tab>li').eq(num-1).addClass('on').siblings().removeClass('on');
    })
</script> -->

<div class="sub_img">
    <div class="case">
        <img src="../img/logo.png" alt="">
        <div class="sub_slogn">
            <strong>
                <?=$title?>
            </strong>
            <span><?=$as_btitle?> <?=$as_title?></span>
        </div>
    </div>
</div>

<div class="dec">
    <h3><?=$title?></h3>
    <p>
    홈페이지를 찾아주시는 고객 여러분 감사합니다.<br/>
    합리적인 견적으로 정말 똑소리나게 일잘하는 부산 청소업체 부산 아파트입주청소 이사청소 금맥입니다.
    </p>
    <p>
    최상의 제품과 최고의 서비스를 제공하기 위해 고객께 최선을 다하는 부산 아파트입주청소 이사청소 금맥 되겠습니다.<br/>
    감사합니다.
    </p>
    <p>
        <strong>부산 청소 전문업체 부산 아파트입주청소 이사청소 금맥</strong>
        <br/>
        <span>대표 전정선.</span>
    </p>
</div>


<ul class="content_box">
<?
	for($i=0; $i<count($as_img); $i++)
	{
		echo "
        <li>
            <figure>
                <img src=".$as_img[$i].">
            </figure>
        </li>
        ";
	}
?>
</ul>


<?php
include_once(G5_THEME_PATH.'/tail.php');