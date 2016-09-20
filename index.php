<?php 
    /*
     * This website follows the google styleguide found here: https://google.github.io/styleguide/htmlcssguide.xml
     * Optional tags are therefore not included (Ex: html, head, body
     *
     * Built by: Antony Garnad
     * On: 19th september 2016
     */

    require_once('config.php');
    require_once('functions.php');
?><!DOCTYPE html>
<title><?=__("Cv de Antony Garand")?></title>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'>
<?= addCss('style.css') ?>

<div id="content">

    <div id="sectionLeft">
        <div id="profileImageWrapper">
            <?= addImage('me.png',__('Photo de moi-même'), array('profileImage')) ?>
        </div>
        <div id="nameUpper"><?=__('Antony')?></div>
        <div id="nameLower"><?=__('Garand')?></div>
        <div id="site"><a href="https://garand.info/cv"><?=__('https://garand.info/cv')?></a></div>

        <div id="skills" class="left section">
            <h2 id="aptitudes" class="leftSectionTitle"><?=__('Aptitudes')?></h2>
            <div id="programmationWrapper">
                <h3 id="programmation" class="skillTitle"><?=__('Programmation')?></h3>
                <?php //These will be populated with Javascript ?>
                <div id="php" class="skillProgressBar" name="PHP" value="8"></div>
                <div id="csharp" class="skillProgressBar" name="C#" value="8"></div>
                <div id="python" class="skillProgressBar" name="Python" value="7"></div>
                <div id="javascript" class="skillProgressBar" name="Javascript" value="7"></div>
                <div id="sql" class="skillProgressBar" name="SQL" value="7"></div>
                <div id="java" class="skillProgressBar" name="Java" value="6"></div>
            </div>
            
            <div id="variousWrapper">
                <h3 id="various" class="skillTitle"><?=__('Divers')?></h3>
                <div id="english" class="skillProgressBar" name="<?__('Anglais')?>" value="9"></div>
                <div id="linux" class="skillProgressBar" name="<?__('Linux')?>" value="8"></div>
                <div id="web" class="skillProgressBar" name="<?__('Web')?>" value="8"></div>
            </div>

            <div id="technologiesWrapper">
                <h3 id="technologies" class="skillTitle"><?=__('Technologies')?></h3>
                <div class="skillRowWrapper">
                    <div class="skillRow firstRow">CodeIgniter</div>
                    <div class="skillRow secondRow">Unity3d JQuery</div>
                    <div class="skillRow thirdRow">WordPress ASP.net</div>
                    <div class="skillRow forthRow">Photoshop Office</div>
                    <div class="skillRow fifthRow">LibGDX Monogame</div>
                    <div class="skillRow sixthRow">CodeIgniter</div>
                </div>
            </div>
        </div>
    </div>

    <div class="sectionRight">

    </div>
</div>
