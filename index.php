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
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'>
<?= addCss('style.css') ?>
<?= addScript('script.js') ?>
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
                <div id="php" class="skillProgressBar" name="PHP" value="8"></div>
                <div id="csharp" class="skillProgressBar" name="C#" value="8"></div>
                <div id="python" class="skillProgressBar" name="Python" value="7"></div>
                <div id="javascript" class="skillProgressBar" name="Javascript" value="7"></div>
                <div id="sql" class="skillProgressBar" name="SQL" value="7"></div>
                <div id="java" class="skillProgressBar" name="Java" value="6"></div>
            </div>
            
            <div id="variousWrapper">
                <h3 id="various" class="skillTitle"><?=__('Divers')?></h3>
                <div id="english" class="skillProgressBar" name="<?=__('Anglais')?>" value="9"></div>
                <div id="linux" class="skillProgressBar" name="<?=__('Linux')?>" value="8"></div>
                <div id="web" class="skillProgressBar" name="<?=__('Web')?>" value="8"></div>
            </div>

            <div id="technologiesWrapper">
                <h3 id="technologies" class="skillTitle"><?=__('Technologies')?></h3>
                <div class="skillRowWrapper">
                    <div class="skillRow firstRow">CodeIgniter</div>
                    <div class="skillRow secondRow">Unity3d JQuery</div>
                    <div class="skillRow thirdRow">Photoshop Office</div>
                    <div class="skillRow forthRow">WordPress ASP.net</div>
                    <div class="skillRow fifthRow">LibGDX Monogame Android</div>
                </div>
            </div>
        </div>
    </div>

    <div id="sectionRight">
        <div id="experienceWrapper">
            <h1 id="experience" class="sectionRightTitle"><?=__('Expérience')?></h1>
            <div id="cirano" class="workExperience">
                <h2 id="ciranoDate" class="sectionRightSubtitle">2016</h2>
                <p class="workRole role"><?=__('Analyse de sécurité pour le CIRANO')?></p>
                <p class="workDescription description"><?=__('Évaluation de la sécurité de l\'application Bourstad après avoir découvert et reporté une faille majeure.')?></p>
                <p class="workTasks tasks"><?=__('Tâches effectuées:')?></p>
                <ul class="workTasklist tasklist">
                    <li><?=__('Analyse d\'application web')?></li>
                    <li><?=__('Rédaction de rapport technique')?></li>
                </ul>
            </div>
            <div id="sucuri" class="workExperience">
                <h2 id="sucuriDate" class="sectionRightSubtitle">2015 - <?=__('Aujourd\'hui')?></h2>
                <p class="workRole role"><?=__('Recherche de faille de sécurité pour Sucuri')?></p>
                <p class="workDescription description"><?=__('Travail à distance de Janvier 2015 à aujourd\'hui. Recherche de failles de sécurité dans divers CMS tels que WordPress et Joomla ainsi que dans leurs extensions.')?></p>
                <p class="workTasks tasks"><?=__('Tâches effectuées:')?></p>
                <ul class="workTasklist tasklist">
                    <li><?=__('Analyse de code source')?></li>
                    <li><?=__('Analyse d\'applications web')?></li>
                    <li><?=__('Dévelopement d\'outils d\'automatisation')?></li>
                </ul>
            </div>
        </div>
        <div id="extraWrapper">
            <h1 id="extra" class="sectionRightTitle"><?=__('Parascolaire')?></h1>
            <div id="ctfWrapper">
                <h2 id="ctf" class="sectionRightSubtitle">2014 - 2016</h2>
                <p class="extraRole role"><?=__('Compétitions de programmation et de sécurité')?></p>
                <p class="extraDescription description"><?=__('Participation à divers compétitions et conférences en lien avec l\'informatique, dont notablement: ')?></p>
                <ul class="tasklist">
                    <li><?=__('2015 - Defcon')?></li>
                    <li><?=__('2015 - Facebook Hackercup')?></li>
                    <li><?=__('2015 - Finaliste GoSecure')?></li>
                    <li><?=__('2014 à 2016 - Hackfest')?></li>
                    <li><?=__('2014 à 2016 - Northsec')?></li>
                </ul>
            </div>
            <div id="CEASWrapper">
                <h2 id="CEAS" class="sectionRightSubtitle">2014 - 2016</h2>
                <p class="extraRole role"><?=__('Comité d\'écologie et d\'actions sociales')?></p>
                <p class="extraDescription description"><?=__('Participation à divers projets tels l\'abolition des bouteilles d\'eau, sensibilisation LGBTQ+ et diffusion de documentaires sur divers sujets étiques.')?></p>
            </div>
            <div id="albumWrapper">
                <h2 id="album" class="sectionRightSubtitle">2013</h2>
                <p class="extraRole role"><?=__('Comité de l\'album des finissants')?></p>
                <p class="extraDescription description"><?=__('Participation à la conception de l\'album des finissants ent tant que coordinateur de projet et infographiste.')?></p>
            </div>
        </div>
        <div class="source"><?=__('Source disponible sur')?> <a href="https://github.com/AntonyGarand/Resume">github</a></div>
    </div>
</div>
