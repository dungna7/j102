<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Book $book
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="books view large-9 medium-8 columns content">
    <h3><?= h($book->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('BookName') ?></th>
            <td><?= h($book->bookName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($book->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BookType') ?></th>
            <td><?= h($book->bookType) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= h($book->author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($book->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($book->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ViewNumber') ?></th>
            <td><?= $this->Number->format($book->viewNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ChapterNumber') ?></th>
            <td><?= $this->Number->format($book->chapterNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($book->updated) ?></td>
        </tr>
    </table>
</div>
