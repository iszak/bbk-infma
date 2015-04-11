<!doctype html>
<html lang="en" dir="ltr">
    <head>
<?php require_once '../partials/meta.php'; ?>
    </head>
    <body>


<?php require_once '../partials/header.php'; ?>

        <div class="grid">
          <aside class="column column-3">
            <nav class="navigation-secondary">
              <ul>
                <li>
                  <a href="#">Small</a>
                </li>
                <li>
                  <a href="#">Medium</a>
                </li>
                <li>
                  <a href="#">Large</a>
                </li>
              </ul>
            </nav>
          </aside>

          <main class="column column-13">
            <ul class="breadcrumbs">
              <li>
                <a href="/">
                  Home
                </a>
              </li>
              <li>
                <a href="#">
                  Products
                </a>
              </li>
              <li>
                <a href="#">
                  Small
                </a>
              </li>
            </ul>

            <div class="product">
              <h2>Small</h2>

              <img class="product-image" src="" width="275" height="275" />

              <div class="product-description">
                <p>
                  This is our smallest hosting package on offer, it is designed for small companies or freelancers but without compromising performance. It can support a range of software from WordPress, Drupal, Magento and if you have any problems our support is on stand by to reply to your emails.
                </p>

                <ul class="product-features">
                    <li>1 GB Memory</li>
                    <li>1 GHz CPU</li>
                    <li>10 GB SSD</li>
                    <li>100 GB traffic</li>
                    <li>Email support</li>
                    <li>No management</li>
                    <li>Weekly back-ups</li>
                </ul>

                <p>
                    <a href="#" class="product-button-buy-now button">Buy now</a>
                </p>
              </div>
            </div>

          </main>
        </div>

<?php require_once '../partials/footer.php'; ?>

    </body>
</html>
