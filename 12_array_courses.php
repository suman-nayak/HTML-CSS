<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .card img{
            height: 200px;
        }
    </style>
  </head>
  <body>
    <?php
    $courses = [
    [
        "title" => "Modern Web Development",
        "description" => "Learn the latest tools and techniques to build responsive and dynamic websites.",
        "banner_image" => "https://xynosoft.com/storage/post-images/1722000962.png",
        "buy_now_link" => "https://example.com/buy/modern-web-development"
    ],
    [
        "title" => "JavaScript Essentials",
        "description" => "Master core JavaScript concepts to create interactive and user-friendly web apps.",
        "banner_image" => "https://img-c.udemycdn.com/course/750x422/1468694_d595_2.jpg",
        "buy_now_link" => "https://example.com/buy/javascript-essentials"
    ],
    [
        "title" => "CSS Flexbox & Grid",
        "description" => "Design flexible and responsive layouts using CSS Flexbox and Grid techniques.",
        "banner_image" => "https://cdn-cdpl.sgp1.cdn.digitaloceanspaces.com/source/2dd7d3ba70bcbe34f8b0d7242c773a78/grid_flex.png",
        "buy_now_link" => "https://example.com/buy/css-flexbox-grid"
    ],
    [
        "title" => "Full-Stack Web Bootcamp",
        "description" => "Become a full-stack developer by learning front-end and back-end web technologies.",
        "banner_image" => "https://teacherdada.fra1.cdn.digitaloceanspaces.com/uploads/thumbnails/course_thumbnails/250331164050Full_Stack_web_dev.webp",
        "buy_now_link" => "https://example.com/buy/full-stack-bootcamp"
    ]
];
    ?>
    <div class="container my-5">
        <h1 class="display-2 text-center">Courses</h1>
        <div class="row g-4">
            <?php foreach ($courses as $c ) { ?>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo $c['banner_image'] ?>" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $c['title'] ?></h2>
                            <p><?php echo $c['description'] ?></p>
                            <a href="<?php echo $c['buy_now_link'] ?>" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php } ?>  
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>