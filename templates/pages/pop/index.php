<?php const BASE = "main"; ?>

<div class="page-header">
    <div class="page-title">Welcome to<br><span>Pop&nbsp;Framework</span></div>
    <div class="page-subtitle">version 0.0.1</div>
</div>

<div class="page-content no-effect">
<!--
    <div class="project-root">
        <strong>Project directory</strong> : 
        <code><?= $this->launcher->framework->get('project_root') ?></code>
    </div>
-->
    <div class="pop-at-work"></div> 
    <?= $this->launcher->framework->get('project_root') ?>
</div>