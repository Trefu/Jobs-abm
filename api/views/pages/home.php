<?php
?>

<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Job lister</h1>
            <p class="lead mb-0">Crud made with php and mysql</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->

            <?php foreach ($jobs as $job) : ?>

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="small text-muted"> <?php
                                                        $job->post_date = new DateTime($job->post_date);
                                                        echo $job->post_date->format("d-m-Y") ?>
                        </div>
                        <h2 class="card-title"> <?= $job->title; ?></h2>
                        <span class='text-muted pb-2'><?= $job->cname ?></span>
                        <p class="card-text"> <?= $job->description ?></p>
                        <span class="font-italic"><?php echo "Lugar: " . ucfirst($job->location) ?></span>
                        <p class='font-weight-light font-italic mb-0 '> <?= "Empresa: $job->company" ?> </p>
                        <p> <?= "Salario: $$job->salary" ?></p>
                        <a class="btn btn-primary" href="?controller=pages&action=individualjobpage&jobid=<?= $job->id ?>">Read more →</a>
                    </div>
                </div>
            <?php endforeach; ?>

            <!--    <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav> -->
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form class="input-group" method="GET">
                        <input name="search" class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                    </form>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <?php foreach ($categories as $category) : ?>
                                <ul class="list-unstyled mb-0">
                                    <li><a href="?search=<?php echo $category->id ?>"><?= $category->name ?></a></li>

                                </ul>
                            <?php endforeach ?>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Side widget-->

        </div>
    </div>
</div>