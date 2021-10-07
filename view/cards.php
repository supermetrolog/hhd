<? foreach ($comments as $comment) : ?>
    <div class="col-lg-4 col-12 comment text-center my-5">
        <div class="card">
            <div class="card-container">
                <div class="card-header">
                    <strong><? echo $comment['name'] ?></strong>
                </div>
                <div class="card-body">
                    <p class="email"><? echo $comment['email'] ?></p>
                    <p class="content">
                        <? echo $comment['content'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
<? endforeach; ?>