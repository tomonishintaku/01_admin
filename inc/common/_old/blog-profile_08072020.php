<?php require_once ($_SERVER['DOCUMENT_ROOT'].'/inc/common/functions.php');

$sns_en = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/en/inc/sns.php');
$sns = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/inc/sns.php');

/* branchURL('/en/', 'true', 'false'); /*This function from "/inc/common/functions.php"*/
?>

<article class="profile-unit">
    <section class="profile-unit__image" itemtype="http://schema.org/ImageObject">
        <a href="https://tomonishintaku.com<?php branchURL('/en/', '/en/about/', '/about/'); ?>" title="<?php branchURL('/en/', 'Tomoni Shintaku', '新宅 睦仁'); ?>" rel="nofollow"> <img alt="<?php branchURL('/en/', 'Tomoni Shintaku artist photo', '新宅 睦仁/シンタクトモニの作家画像'); ?>"
                src="/images/common/artist_photo.jpg"></a>
    </section>
    <section class="profile-unit__detail">
        <div class="profile-unit__name-sns-wrap">
        <strong class="profile-unit__name" itemprop="author" itemtype="http://schema.org/Person"><a
                href="https://tomonishintaku.com<?php branchURL('/en/', '/en/about/', '/about/'); ?>" class="url" rel="nofollow"><?php branchURL('/en/', 'Tomoni Shintaku', '新宅 睦仁'); ?></a>
        </strong>
        <div class="profile-unit__sns-icons">
            <ul class="profile-unit__list">
            <?php branchURL('/en/', $sns_en, $sns); ?>
            </ul>
        </div>
        </div>        
        <p class="profile-unit__text" itemprop="description">
            <?php branchURL('/en/', 'Contemporary artist based in Los Angeles. I’ve learned at an Art College and Culinary Institute. I attempt to connect ART and FOOD.', '広島→福岡→東京→シンガポール→現在ロサンゼルス在住の現代美術家。美大と調理師専門学校に学んだ経験から食をテーマに作品を制作。無類の居酒屋好き。'); ?></p>
    </section>
</article>


<style type="text/css">
    

.profile-unit{
border-top: 1px solid #ccc;
border-bottom: 1px solid #ccc;
margin: 2rem 0;
padding: 2rem 0;
height: 100%;
}

.profile-unit p{
    margin-bottom: 0;
}

.profile-unit__image img{
        width: 30%;
        display: block;
        margin: 0 auto;
}
.profile-unit__list{
    display:flex;
    width: 50vw;
margin: 0 auto;
}

.profile-unit__list li{

display: block;
margin: 0 auto;
}

.profile-unit__list li a{
padding-left: 0.4rem;
}
.profile-unit__name{
font-size: 1.5rem;
display: block;
text-align: center;
}

.profile-unit__name a{
color: #555;
}


    @media only screen and (min-width: 1025px) {
        .profile-unit{
             display:flex;

        }

.profile-unit__list{
    width: 100%;
}


.profile-unit__sns-icons{
    height: 50px;
margin: -3px 0 0 2rem;
}

.profile-unit__list .button{
font-size: 1.5rem;
}

.profile-unit__name-sns-wrap{
    display:flex;
}

        .profile-unit__name {
    text-align: left;
}
        .profile-unit__image{
         width: 15%;
}

        .profile-unit__image img{
        display: inline;
        width: 100%;
}
.profile-unit__detail{
    width: 80%;
    margin-left: 5%;
}

    }

</style>