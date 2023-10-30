<?php const BASE = "main"; ?>

<div class="page-header">
    <div class="page-title">Books of demo</div>
</div>

<div class="page-content">
    
    <table class="books">
        <thead>
            <tr>
                <th>Title</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $book->title ?></td>
                <td>
                    <a href="<?= $this->url->generate('book:detail', ['id' => $book->id]) ?>" class="btn btn-sm btn-primary">show</a>
                    <a href="<?= $this->url->generate('book:edit', ['id' => $book->id]) ?>" class="btn btn-sm btn-secondary">edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
