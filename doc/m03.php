<?php
$pageNum = 3;
$title = '이사/상가청소';
include_once('../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

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

<div class="content">
    <h3>청소 서비스 내용</h3>
    <ul class="dot_list">
        <li>쓰레기수거후 진공청소</li>
        <li>베란다 샷시 및 유리창 청소 (건물바깥면 유리창은 제외)</li>
        <li>베란다 바닥청소</li>
        <li>찌든데, 먼지, 오염제거</li>
        <li>실리콘 곰팡이, 거미줄, 스티거 제거 (추가적인 사항 비용발생)</li>
        <li>싱크대 내/외부 및 다용도실, 화장실 청소</li>
        <li>각방 바닥 및 거실바닥 청소</li>
        <li>벽면 수작업으로 먼지 제거</li>
        <li>현관 출입문 및 바닥, 신발장 청소</li>
        <li>고객과 청소상태 확인</li>
    </ul>
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