<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="bracket">
    <ul class="left8">
    <?php foreach(array_slice($games, 0,4) as $game) { ?>
        <li><?= $game->teamOne->name ?><span><?= $game->results[0]->score ?></span></li>
        <li><?= $game->teamTwo->name ?><span><?= $game->results[1]->score ?></span></li>
    <?php } ?>
    </ul>
    <ul class="left4">
        <?php foreach(array_slice($games, 8,2) as $game) { ?>
            <li><?= $game->teamOne->name ?><span><?= $game->results[0]->score ?></span></li>
            <li><?= $game->teamTwo->name ?><span><?= $game->results[1]->score ?></span></li>
        <?php } ?>
    </ul>
    <ul class="left2">
        <?php foreach(array_slice($games, 12,1) as $game) { ?>
            <li><?= $game->teamOne->name ?><span><?= $game->results[0]->score ?></span></li>
            <li><?= $game->teamTwo->name ?><span><?= $game->results[1]->score ?></span></li>
        <?php } ?>
    </ul>
    <ul class="left4">
        <?php foreach(array_reverse(array_slice($games,14, 2)) as $game) { ?>
            <li><?= $game->teamOne->name ?><span><?= $game->results[0]->score ?></span></li>
            <li><?= $game->teamTwo->name ?><span><?= $game->results[1]->score ?></span></li>
        <?php } ?>
    </ul>

    <ul class="left2">
        <?php foreach(array_slice($games, 13,1) as $game) { ?>
            <li><?= $game->teamOne->name ?><span><?= $game->results[0]->score ?></span></li>
            <li><?= $game->teamTwo->name ?><span><?= $game->results[1]->score ?></span></li>
        <?php } ?>
    </ul>
    <ul class="left4">
        <?php foreach(array_slice($games, 10,2) as $game) { ?>
            <li><?= $game->teamOne->name ?><span><?= $game->results[0]->score ?></span></li>
            <li><?= $game->teamTwo->name ?><span><?= $game->results[1]->score ?></span></li>
        <?php } ?>
    </ul>
    <ul class="left8">
        <?php foreach(array_slice($games, 4,4) as $game) { ?>
            <li><?= $game->teamOne->name ?><span><?= $game->results[0]->score ?></span></li>
            <li><?= $game->teamTwo->name ?><span><?= $game->results[1]->score ?></span></li>
        <?php } ?>
    </ul>
</div>